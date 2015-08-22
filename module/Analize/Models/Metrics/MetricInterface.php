<?php
namespace Analize\Models\Metrics;

interface MetricInterface{
    public function  init($data);
    public function merge($id1,$id2);
}
