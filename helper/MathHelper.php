<?php

namespace Helper;

use IteratorAggregate;

class MathHelper
{
    public static string $name = "Math Helper";

    static function sum(array $number): int
    {
        $total = 0;
        foreach ($number as $data) {
            $total += $data;
        }
        return $total;
    }
}
