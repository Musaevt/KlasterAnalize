<?
namespace Analize\Models\KlusterFunct;

use Library\Models\Base\BaseClass;
use Analize\Models\Metrics\MetricJakar;

abstract class FunctAbstract extends BaseClass
{
    public static $Id;
    protected $Metrics;

    public abstract function solve();

    public function metricInit($metricName)
    {
        $this->Metrics= new $metricName;
    }
}
