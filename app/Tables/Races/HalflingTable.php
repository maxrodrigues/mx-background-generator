<?php

namespace App\Tables\Races;

use App\Traits\RollDice;

class HalflingTable
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
        if ($roll['total'] > 0 && $roll['total'] <= 50) {
            $response = 'Halfling Settlement';
        }

        if ($roll['total'] > 50 && $roll['total'] <= 80) {
            $response = 'Human Settlement';
        }

        if ($roll['total'] > 80 && $roll['total'] <= 95) {
            $response = 'Traveling Band or Caravan';
        }

        if ($roll['total'] > 95 && $roll['total'] <= 100) {
            $response = 'Unusual Homeland';
        }

        return $response;
    }

    public static function parents()
    {
        $roll = self::roll(num: 1, dice: 100);
        if ($roll['total'] > 0 && $roll['total'] <= 70) {
            $response = 'Both of your parents are alive.';
        }

        if ($roll['total'] > 70 && $roll['total'] <= 80) {
            $response = 'Only your father is alive.';
        }

        if ($roll['total'] > 80 && $roll['total'] <= 90) {
            $response = 'Only your mother is alive.';
        }

        if ($roll['total'] > 90 && $roll['total'] <= 100) {
            $response = 'Both of your parents are dead.';
        }

        return $response;
    }

    public static function siblings()
    {
        $roll = self::roll(num: 1, dice: 100);
        if ($roll['total'] > 0 && $roll['total'] <= 30) {
            $biological = self::roll(num: 1, dice: 2);
            $response = "{$biological['total']} siblings.";
        }

        if ($roll['total'] > 30 && $roll['total'] <= 90) {
            $biological = self::roll(num: 1, dice: 4, plus: 1);
            $response = "{$biological['total']} siblings.";
        }

        if ($roll['total'] > 90 && $roll['total'] <= 100) {
            $response = "No siblings.";
        }

        return $response;
    }
}
