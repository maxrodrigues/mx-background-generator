<?php

namespace App\Tables;

use App\Traits\RollDice;

/*
|--------------------------------------------------------------------------
| Crime And Punishment Table
|--------------------------------------------------------------------------
|
| If you have the Criminal social trait, roll on Table: Crime to determine
| the crime for which you were accused or convicted. After determining the
| crime, roll on Table: Punishment to learn the severity of the punishment
| you received—or have yet to receive—for having been judged guilty.
|
*/

class CrimeAndPunishmentTable
{
    use RollDice;

    public static function execute()
    {
        $crime = self::crime();
        $punishment = self::punishment();

        return [
            'crime' => $crime,
            'punishment' => $punishment,
        ];
    }

    public static function crime()
    {
        $roll = self::roll(num: 1, dice: 100);

        if ($roll['total'] > 0 && $roll['total'] <= 10) {
            $response = 'Adultery';
        }

        if ($roll['total'] > 10 && $roll['total'] <= 20) {
            $response = 'Arson';
        }

        if ($roll['total'] > 20 && $roll['total'] <= 30) {
            $response = 'Burglary';
        }

        if ($roll['total'] > 30 && $roll['total'] <= 40) {
            $response = 'Heresy';
        }

        if ($roll['total'] > 40 && $roll['total'] <= 50) {
            $response = 'Minor offense (sumptuary law)';
        }

        if ($roll['total'] > 50 && $roll['total'] <= 60) {
            $response = 'Murder';
        }

        if ($roll['total'] > 60 && $roll['total'] <= 70) {
            $response = 'Rebellion/treason';
        }

        if ($roll['total'] > 70 && $roll['total'] <= 80) {
            $response = 'Robbery';
        }

        if ($roll['total'] > 80 && $roll['total'] <= 90) {
            $response = 'Smuggling';
        }

        if ($roll['total'] > 90 && $roll['total'] <= 100) {
            $response = 'Unlawful use of magic';
        }

        return $response;
    }

    public static function punishment()
    {
        $roll = self::roll(num: 1, dice: 100);

        if ($roll['total'] > 0 && $roll['total'] <= 10) {
            $response = 'Beating';
        }

        if ($roll['total'] > 10 && $roll['total'] <= 20) {
            $response = 'Branding';
        }

        if ($roll['total'] > 20 && $roll['total'] <= 30) {
            $response = 'Exile';
        }

        if ($roll['total'] > 30 && $roll['total'] <= 40) {
            $response = 'Fine';
        }

        if ($roll['total'] > 40 && $roll['total'] <= 50) {
            $response = 'Imprisonment';
        }

        if ($roll['total'] > 50 && $roll['total'] <= 60) {
            $response = 'Stocks';
        }

        if ($roll['total'] > 60 && $roll['total'] <= 70) {
            $response = 'Torture';
        }

        if ($roll['total'] > 70 && $roll['total'] <= 80) {
            $response = 'Trial by combat';
        }

        if ($roll['total'] > 80 && $roll['total'] <= 90) {
            $response = 'Trial by fire';
        }

        if ($roll['total'] > 90 && $roll['total'] <= 100) {
            $response = 'Trial by water';
        }

        return $response;
    }
}
