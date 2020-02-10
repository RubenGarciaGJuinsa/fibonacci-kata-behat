<?php


namespace Kata;


class Fibonacci
{
    public function getValue($index)
    {
        if ($index == 1) {
            return 0;
        }

        return 1;
    }
}