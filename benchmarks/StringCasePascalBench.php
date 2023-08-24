<?php

namespace Barogue\Strings\Benchmarks;

class StringCasePascalBench extends Bench
{
    public function benchCasePascal()
    {
        str_case_pascal('Turn this into pascal case');
    }
}
