<?php

namespace Barogue\Strings\Benchmarks;

class StringCaseSnakeBench extends Bench
{
    public function benchCaseSnake()
    {
        str_case_snake('Turn this into snake case');
    }
}
