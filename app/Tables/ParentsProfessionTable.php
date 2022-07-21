<?php

namespace App\Tables;

use App\Traits\RollDice;

/*
|--------------------------------------------------------------------------
| Parents Profession Table
|--------------------------------------------------------------------------
|
| Most of the time, their parents come from the same social stratum.
| It is uncommon, but not unheard of, for people to marry outside their caste.
| A Parents Profession dice roll will be made to determine your parent's primary profession.
|
*/

class ParentsProfessionTable
{
    use RollDice;

    public static function handle()
    {
        $roll = self::roll(1, 100);

        if ($roll[0] > 1 && $roll <= 5) {
            $response = 'Slaves';
        }

        if ($roll[0] > 5 && $roll <= 25) {
            $response = 'Serfs/Peasants';
        }

        if ($roll[0] > 25 && $roll <= 30) {
            $response = 'Entertainers';
        }

        if ($roll[0] > 30 && $roll <= 34) {
            $response = 'Soldiers';
        }

        if ($roll[0] > 34 && $roll <= 37) {
            $response = 'Sailors';
        }

        if ($roll[0] > 37 && $roll <= 40) {
            $response = 'Thieves';
        }

        if ($roll[0] > 40 && $roll <= 55) {
            $response = 'Yeomen';
        }

        if ($roll[0] > 55 && $roll <= 70) {
            $response = 'Tradespeople';
        }

        if ($roll[0] > 70 && $roll <= 85) {
            $response = 'Artisans';
        }

        if ($roll[0] > 85 && $roll <= 95) {
            $response = 'Merchants';
        }

        if ($roll[0] > 95 && $roll <= 100) {
            $response = 'Clergy or Cultists';
        }

        return $response;
    }
}
