<?php

namespace App\Tables;

use App\Traits\RollDice;


/*
|--------------------------------------------------------------------------
| Unusual Homeland Table
|--------------------------------------------------------------------------
|
| You grew up in a region not typically associated with the lands that your
| people call home. Roll on Table: Unusual Homeland to determine the homeland
| of your family. If the result is one that is typical for your race, this
| region is one where there are few other members of your race,
| outside of your family.
|
*/

class UnusualHomelandTable
{
    use RollDice;

    public static function execute()
    {
        $roll = self::roll(num: 1, dice: 100);

        if ($roll['total'] > 0 && $roll['total'] <= 10) {
            $response = 'Subterranean';
        }

        if ($roll['total'] > 10 && $roll['total'] <= 25) {
            $response = 'Mountains';
        }

        if ($roll['total'] > 25 && $roll['total'] <= 40) {
            $response = 'Plains';
        }

        if ($roll['total'] > 40 && $roll['total'] <= 50) {
            $response = 'Town or Village';
        }

        if ($roll['total'] > 50 && $roll['total'] <= 60) {
            $response = 'City or Metropolis';
        }

        if ($roll['total'] > 60 && $roll['total'] <= 70) {
            $response = 'Forest';
        }

        if ($roll['total'] > 70 && $roll['total'] <= 80) {
            $response = 'River';
        }

        if ($roll['total'] > 80 && $roll['total'] <= 85) {
            $response = 'Desert';
        }

        if ($roll['total'] > 85 && $roll['total'] <= 90) {
            $response = 'Sea';
        }

        if ($roll['total'] > 90 && $roll['total'] <= 95) {
            $response = 'Tundra';
        }

        if ($roll['total'] > 95 && $roll['total'] <= 100) {
            $response = 'Another Plane';
        }

        return $response;
    }
}
