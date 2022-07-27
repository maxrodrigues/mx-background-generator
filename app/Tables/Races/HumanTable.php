<?php

namespace App\Tables\Races;

use App\Tables\UnusualHomelandTable;
use App\Traits\RollDice;

class HumanTable
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
            $response = 'Town or Village';
        }

        if ($roll['total'] > 50 && $roll['total'] <= 85) {
            $response = 'City or Metropolis';
        }

        if ($roll['total'] > 85 && $roll['total'] <= 95) {
            $response = 'Frontier';
        }

        if ($roll['total'] > 95 && $roll['total'] <= 100) {
            $response = UnusualHomelandTable::execute();
        }

        return $response;
    }

    public static function parents()
    {
        $roll = self::roll(num: 1, dice: 100);
        if ($roll['total'] > 0 && $roll['total'] <= 50) {
            $response = 'Both of your parents are alive.';
        }

        if ($roll['total'] > 50 && $roll['total'] <= 70) {
            $response = 'Only your father is alive.';
        }

        if ($roll['total'] > 70 && $roll['total'] <= 90) {
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
        if ($roll['total'] > 0 && $roll['total'] <= 40) {
            $biological = self::roll(num: 1, dice: 2);
            $response = "{$biological['total']} siblings.";
        }

        if ($roll['total'] > 40 && $roll['total'] <= 70) {
            $biological = self::roll(num: 1, dice: 2);
            $adopted = self::roll(num: 1, dice: 2);
            $response = "{$biological['total']} siblings and {$adopted['total']} half-siblings (roll d% to determine each one’s race; 01–50: half-elf, 51–100: half-orc).";
        }

        if ($roll['total'] > 70 && $roll['total'] <= 90) {
            $biological = self::roll(num: 2, dice: 4);
            $response = "{$biological['total']} siblings.";
        }

        if ($roll['total'] > 90 && $roll['total'] <= 100) {
            $response = "No siblings.";
        }

        return $response;
    }
}
