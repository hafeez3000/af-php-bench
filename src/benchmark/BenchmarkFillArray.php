<?php

namespace AF\Benchmark;

class BenchmarkFillArray extends BenchmarkBase {
    protected function test() {
        $limit = 1000000;
        for($j=1; $j<10*MULT; $j++ ) {
            $data = []; for($i=0; $i<$limit; $i++) $data[] = $i;
            $data = []; for($i=0; $i<$limit; $i++) $data[$i] = 'qwertyuiopasdfghjklzxcvbnm';
            $data = []; $data = array_fill(1, $limit, '1234567890qwertyuiopasdfghjklzxcvbnm');
        }
    }

    function getName() {
        return 'Fill arrays';
    }
}

