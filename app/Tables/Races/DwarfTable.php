<?php

namespace App\Tables\Races;

use App\Traits\RollDice;

class DwarfTable
{
    use RollDice;

    public static function handle(): array
    {
        $response['homeland'] = self::homeland();
        $response['parents'] = self::parents();
        $response['siblings'] = self::siblings();

        return $response;
    }

    public static function homeland()
    {
        $roll = self::roll(num: 1, dice: 100);
        if ($roll['total'] > 0 && $roll['total'] <= 40) {
            $response = 'Hills or Mountains';
        }

        if ($roll['total'] > 40 && $roll['total'] <= 80) {
            $response = 'Underground';
        }

        if ($roll['total'] > 80 && $roll['total'] <= 87) {
            $response = 'Non-Dwarven Town or Village';
        }

        if ($roll['total'] > 87 && $roll['total'] <= 95) {
            $response = 'Non-Dwarven City or Metropolis';
        }

        if ($roll['total'] > 95 && $roll['total'] <= 100) {
            $response = 'Unusual Homeland';
        }

        return $response;
    }

    public static function parents()
    {
        $roll = self::roll(num: 1, dice: 100);
        if ($roll['total'] > 0 && $roll['total'] <= 60) {
            $response = 'Both of your parents are alive.';
        }

        if ($roll['total'] > 60 && $roll['total'] <= 73) {
            $response = 'Only your father is alive.';
        }

        if ($roll['total'] > 73 && $roll['total'] <= 86) {
            $response = 'Only your mother is alive.';
        }

        if ($roll['total'] > 86 && $roll['total'] <= 100) {
            $response = 'Both of your parents are dead.';
        }

        return $response;
    }

    public static function siblings()
    {
        $roll = self::roll(num: 1, dice: 100);
        if ($roll['total'] > 0 && $roll['total'] <= 80) {
            $biological = self::roll(num: 1, dice: 4);
            $response = "{$biological['total']} biological siblings.";
        }

        if ($roll['total'] > 80 && $roll['total'] <= 90) {
            $biological = self::roll(num: 1, dice: 4, plus: 1);
            $response = "{$biological['total']} biological siblings.";
        }

        if ($roll['total'] > 90 && $roll['total'] <= 95) {
            $biological = self::roll(num: 1, dice: 4, minus: 1);
            $adopted = self::roll(num: 1, dice: 4, minus: 1);
            $response = "{$biological['total']} biological siblings and {$adopted['total']} adopted siblings.";
        }

        if ($roll['total'] > 95 && $roll['total'] <= 100) {
            $response = "No siblings.";
        }

        return $response;
    }
}
