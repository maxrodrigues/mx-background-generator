<?php

namespace App\Traits;

trait RollDice
{
    /**
     * Roll any dice and add ou remove some numbers
     *
     * @param  int $num
     * @param  int $dice
     * @param  int $plus
     * @param  int $minus
     * @return array
     */
    public static function roll(int $num, int $dice, int $plus = 0, int $minus = 0): array
    {
        $rolls = [];
        for ($i = 0; $i < $num; $i++) {
            $roll = rand(1, $dice);
            if ($i === 0) {
                $rolls['roll'] = $roll;
            } else {
                $rolls['roll'] .= " + " . $roll;
            }

            $rolls['total'] = isset($rolls['total']) ? $rolls['total'] + $roll : $roll;
        }

        if ($plus > 0) {
            $rolls['total'] += $plus;
            $rolls['roll'] .= " + " . $plus;
        }

        if ($minus > 0) {
            $rolls['total'] -= $minus;
            $rolls['roll'] .= " - " . $minus;
        }

        return $rolls;
    }
}
