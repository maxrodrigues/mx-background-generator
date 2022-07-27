<?php

namespace App\Tables\Races;

use App\Tables\UnusualHomelandTable;
use App\Traits\RollDice;

class GnomeTable
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
        if ($roll['total'] > 0 && $roll['total'] <= 30) {
            $response = 'Forest';
        }

        if ($roll['total'] > 30 && $roll['total'] <= 65) {
            $response = 'Non-Gnome Town or Village';
        }

        if ($roll['total'] > 65 && $roll['total'] <= 95) {
            $response = 'Non-Gnome City or Metropolis';
        }

        if ($roll['total'] > 95 && $roll['total'] <= 100) {
            $response = UnusualHomelandTable::execute();
        }

        return $response;
    }

    public static function parents()
    {
        $roll = self::roll(num: 1, dice: 100);
        if ($roll['total'] > 0 && $roll['total'] <= 90) {
            $response = 'Both of your parents are alive.';
        }

        if ($roll['total'] > 90 && $roll['total'] <= 93) {
            $response = 'Only your father is alive.';
        }

        if ($roll['total'] > 93 && $roll['total'] <= 96) {
            $response = 'Only your mother is alive.';
        }

        if ($roll['total'] > 96 && $roll['total'] <= 100) {
            $response = 'Both of your parents are dead.';
        }

        return $response;
    }

    public static function siblings()
    {
        $roll = self::roll(num: 1, dice: 100);
        if ($roll['total'] > 0 && $roll['total'] <= 50) {
            $biological = self::roll(num: 1, dice: 4);
            $response = "{$biological['total']} biological siblings.";
        }

        if ($roll['total'] > 50 && $roll['total'] <= 60) {
            $biological = self::roll(num: 1, dice: 4, minus: 1);
            $response = "{$biological['total']} biological siblings and 1 adopted siblings.";
        }

        if ($roll['total'] > 90 && $roll['total'] <= 100) {
            $response = "No siblings.";
        }

        return $response;
    }
}
