<?php

namespace Barogue\Strings\Benchmarks;

class StringCaseSentenceBench extends Bench
{
    public function benchCaseSentence()
    {
        str_case_sentence('Turn this into sentence case');
    }
}
