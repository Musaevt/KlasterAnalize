<?php
namespace Analize\Models\Metrics;

use Analize\Models\Metrics\MetricInterface;

class MetricJakar implements MetricInterface
{

     public static $allmetrics;

    //инициализацния массива метрик(всех) правая верхняя часть высчитываеться,левая идентична
    public function init($data)
    {

        for ($i = 0; $i < count($data[1]); $i++) {
            for ($j = 0; $j < count($data[1]); $j++) {

                if ($i == $j) {
                     $this::$allmetrics[$i][$j] = 10;
                     continue;
                }

                if ($i > $j) {
                    $this::$allmetrics[$i][$j] = $this::compare($data[1][$i], $data[1][$j]);
                    $this::$allmetrics[$j][$i]=$this::$allmetrics[$i][$j];
                }

            }
        }
    }
    public function merge($mainObjId,$mergeObjId){
         for($i=0;$i<count($this::$allmetrics[$mainObjId]);$i++){
              if($this::$allmetrics[$mainObjId][$i]>$this::$allmetrics[$mergeObjId][$i]) {
                  $this::$allmetrics[$mainObjId][$i] = $this::$allmetrics[$mergeObjId][$i];
                  $this::$allmetrics[$i][$mainObjId]=$this::$allmetrics[$mainObjId][$i];
              }
        }

    }

    //Подсчёт расстояния между 2 объектами;
    private static function compare($object1, $object2)
    {
        $n11 = $n10 = $n01 = 0;
        $equal = false;
         foreach ($object1 as $item1) {
            foreach ($object2 as $item2) {
                if ($item1["groups"] === $item2["groups"])
                    $equal = true;

            }
            ($equal) ? $n11++ : $n10++;
            $equal=false;
        }
        $n01 = count($object1) + count($object2) - $n11 - $n10;
        return 1-$n11 / ($n11 + $n10 + $n01);

    }

}