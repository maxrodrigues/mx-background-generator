<?php

namespace App\Tables\Races;

use App\Traits\RollDice;

class HalfElfTable
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
            $response = ElfTable::homeland();
        }

        if ($roll['total'] > 25 && $roll['total'] <= 75) {
            $response = HumanTable::homeland();;
        }

        if ($roll['total'] > 75 && $roll['total'] <= 95) {
            $response = 'Forest';
        }

        if ($roll['total'] > 95 && $roll['total'] <= 100) {
            $response = 'Unusual Homeland';
        }

        return $response;
    }

    public static function parents()
    {
        $roll = self::roll(num: 1, dice: 100);
        if ($roll['total'] > 0 && $roll['total'] <= 20) {
            $response = 'Both of your parents are alive.';
        }

        if ($roll['total'] > 20 && $roll['total'] <= 55) {
            $response = 'Only your father is alive.';
        }

        if ($roll['total'] > 55 && $roll['total'] <= 90) {
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
        if ($roll['total'] > 0 && $roll['total'] <= 20) {
            $biological = self::roll(num: 1, dice: 2);
            $response = "{$biological['total']} half-siblings (either elf or human, your choice).";
        }

        if ($roll['total'] > 20 && $roll['total'] <= 30) {
            $response = "One half-elf sibling.";
        }

        if ($roll['total'] > 30 && $roll['total'] <= 100) {
            $response = "No siblings.";
        }

        return $response;
    }
}
