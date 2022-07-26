<?php

namespace App\Tables;

use App\Traits\RollDice;

class Siblings
{
    use RollDice;

    public static function execute()
    {
    }

    public static function relativeAgeofSiblings()
    {
        $roll = self::roll(num: 1, dice: 100);

        if ($roll['total'] > 0 && $roll['total'] <= 48) {
            $response = 'Your sibling is older than you.';
        }

        if ($roll['total'] > 48 && $roll['total'] <= 96) {
            $response = 'Your sibling is younger than you.';
        }

        if ($roll['total'] > 96 && $roll['total'] <= 100) {
            $response = 'You and a sibling are twins (identical or fraternal, your choice). Roll on this table again. If you roll this result again, you are one of triplets; otherwise, your sibling’s relative age determines which of you emerged first.';
        }

        return $response;
    }


    /**
     * raceOfAdoptedSibling
     * Inative for now.
     * @return void
     */
    public static function raceOfAdoptedSibling()
    {
        $roll = self::roll(num: 1, dice: 100);
        if ($roll['total'] > 0 && $roll['total'] <= 10) {
            $response = '';
        }
    }
}
