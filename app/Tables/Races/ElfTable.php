<?php

namespace App\Tables\Races;

use App\Tables\UnusualHomelandTable;
use App\Traits\RollDice;

class ElfTable
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
        if ($roll['total'] > 0 && $roll['total'] <= 60) {
            $response = 'Forest';
        }

        if ($roll['total'] > 60 && $roll['total'] <= 80) {
            $response = 'Non-Elven City or Metropolis';
        }

        if ($roll['total'] > 80 && $roll['total'] <= 95) {
            $response = 'Non-Elven Town or Village';
        }

        if ($roll['total'] > 95 && $roll['total'] <= 100) {
            $response = UnusualHomelandTable::execute();
        }

        return $response;
    }

    public static function parents()
    {
        $roll = self::roll(num: 1, dice: 100);
        if ($roll['total'] > 0 && $roll['total'] <= 79) {
            $response = 'Both of your parents are alive.';
        }

        if ($roll['total'] > 79 && $roll['total'] <= 87) {
            $response = 'Only your father is alive.';
        }

        if ($roll['total'] > 87 && $roll['total'] <= 95) {
            $response = 'Only your mother is alive.';
        }

        if ($roll['total'] > 95 && $roll['total'] <= 100) {
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

        if ($roll['total'] > 80 && $roll['total'] <= 85) {
            $biological = self::roll(num: 1, dice: 4, plus: 1);
            $response = "{$biological['total']} biological siblings.";
        }

        if ($roll['total'] > 85 && $roll['total'] <= 90) {
            $biological = self::roll(num: 1, dice: 4, minus: 1);
            $adopted = self::roll(num: 1, dice: 4, minus: 1);
            $response = "{$biological['total']} biological siblings and {$adopted['total']} adopted siblings.";
        }

        if ($roll['total'] > 90 && $roll['total'] <= 100) {
            $response = "No siblings.";
        }

        return $response;
    }
}
