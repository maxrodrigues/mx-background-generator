<?php

namespace App\Tables;

use App\Traits\RollDice;

class DeterminingAlignmentTable
{
    use RollDice;

    public static function execute()
    {
        $roll = self::roll(num: 1, dice: 9);

        if ($roll['total'] > 0 && $roll['total'] <= 3) {
            $response = 'Lawful';
        }
        if ($roll['total'] > 3 && $roll['total'] <= 6) {
            $response = 'Neutral';
        }
        if ($roll['total'] > 6 && $roll['total'] <= 9) {
            $response = 'Chaotic';
        }

        $roll = self::roll(num: 1, dice: 9);

        if ($roll['total'] > 0 && $roll['total'] <= 3) {
            $response .= 'Good';
        }
        if ($roll['total'] > 3 && $roll['total'] <= 6) {
            $response .= 'Neutral';
        }
        if ($roll['total'] > 6 && $roll['total'] <= 9) {
            $response .= 'Evil';
        }

        return $response;
    }
}
