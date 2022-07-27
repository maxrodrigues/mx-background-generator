<?php

namespace App\Tables\Races;

use App\Tables\UnusualHomelandTable;
use App\Traits\RollDice;

class HalfOrcTable
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
        if ($roll['total'] > 0 && $roll['total'] <= 25) {
            $response = 'Subterranean';
        }

        if ($roll['total'] > 25 && $roll['total'] <= 60) {
            $response = 'Orc Settlement';
        }

        if ($roll['total'] > 60 && $roll['total'] <= 75) {
            $response = 'Raised in a Human Homeland.';
        }

        if ($roll['total'] > 75 && $roll['total'] <= 90) {
            $response = 'No True Homeland';
        }

        if ($roll['total'] > 90 && $roll['total'] <= 100) {
            $response = UnusualHomelandTable::execute();
        }

        return $response;
    }

    public static function parents()
    {
        $roll = self::roll(num: 1, dice: 100);
        if ($roll['total'] > 0 && $roll['total'] <= 10) {
            $response = 'Both of your parents are alive.';
        }

        if ($roll['total'] > 10 && $roll['total'] <= 35) {
            $response = 'Only your father is alive.';
        }

        if ($roll['total'] > 35 && $roll['total'] <= 60) {
            $response = 'Only your mother is alive.';
        }

        if ($roll['total'] > 60 && $roll['total'] <= 100) {
            $response = 'Both of your parents are dead.';
        }

        return $response;
    }

    public static function siblings()
    {
        $roll = self::roll(num: 1, dice: 100);
        if ($roll['total'] > 0 && $roll['total'] <= 60) {
            $biological = self::roll(num: 1, dice: 6);
            $response = "{$biological['total']} orc siblings.";
        }

        if ($roll['total'] > 60 && $roll['total'] <= 70) {
            $biological = self::roll(num: 1, dice: 4);
            $response = "{$biological['total']} human siblings.";
        }

        if ($roll['total'] > 70 && $roll['total'] <= 80) {
            $biological = self::roll(num: 2, dice: 4);
            $response = "One half-orc sibling.";
        }

        if ($roll['total'] > 90 && $roll['total'] <= 100) {
            $response = "No siblings.";
        }

        return $response;
    }
}
