<?
namespace Analize\Models\KlusterFunct;

class Cluster
{
    public $id;
    public $points = [];

    //Инициализирует класстер
    public function init($id, $point)
    {
        if (!$this->id) return false;
        $this->id = $id;
        array_push($this->points, $point);

    }
    //добавление точек в класстер
    public function addPoint($point,$metric){
        array_push($this->points, $point);
        $this->metrics = $metric;
    }
}