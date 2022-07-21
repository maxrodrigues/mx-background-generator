<?php

namespace App\Traits;

trait RollDice
{
    public static function roll($num, $dice): array
    {
        $rolls = [];
        for ($i = 0; $i < $num; $i++) {
            $rolls[] = rand(1, $dice);
        }
        return $rolls;
    }
}
