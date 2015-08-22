<?
namespace Analize\Models;

use Library\Models\Base\BaseClass;
use Analize\Models\KlusterFunct\LansUlson;

class Klustering extends BaseClass
{
    public function start($data)
    {
        $lans = new LansUlson();
        $lans->metricInit("Analize\Models\Metrics\MetricJakar");
        $lans->data=$data;
        $lans->solve($data);

    }
}