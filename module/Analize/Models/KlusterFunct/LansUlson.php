<?php
namespace Analize\Models\KlusterFunct;

use Analize\Models\KlusterFunct\FunctAbstract;
use Analize\Models\Metrics\MetricJakar;
use Library\Models\Base\BaseClass;

class LansUlson extends FunctAbstract{
    public static $Id="LansUlson";
    public $data;   //{id,[groups]}
    public $Clusters;

    function solve(){
        if(!is_array($this->data))throw new \Exception('Переданн не массив данных');
       $this->initClusterNum();
        $this->Metrics->init($this->data);

        print_r(MetricJakar::$allmetrics);

    }
    function initClusterNum(){
        for($i=0;$i<count($this->data);$i++)
            $this->clusterNumb[$i]=$i;

    }


}