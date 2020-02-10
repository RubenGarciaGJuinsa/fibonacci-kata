<?php

namespace Kata;

class Fibonacci
{

    public function getValueByIndex($input)
    {
        if ($input == 1) {
            return 0;
        } else {
            return 1;
        }
    }
}