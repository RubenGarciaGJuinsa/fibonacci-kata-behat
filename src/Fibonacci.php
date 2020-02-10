<?php


namespace Kata;


class Fibonacci
{
    public function getValue($index)
    {
        if ($index == 1) {
            return 0;
        }

        $result = 1;

        $prevValue = 1;
        $prevPrevValue = 0;
        for ($i = 3; $i <= $index; $i++) {
            $result = $prevValue + $prevPrevValue;

            $prevPrevValue = $prevValue;
            $prevValue = $result;
        }

        return $result;
    }
}