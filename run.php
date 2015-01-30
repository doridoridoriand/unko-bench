<?php
class Benchmark_php {
  public function do_bench() {
    $count_start = microtime(true);
    $string = '';
    for ($i = 0; $i < 100000000000; $i++) {
      $string += $i;
      //print $string;
    }
    $count_stop = microtime(true);
    print ($count_stop - $count_start);
  }
}
$benchmark = new Benchmark_php();
$benchmark->do_bench();
