<?php

namespace App\Tables\Classes;

use App\Traits\RollDice;

/*
|--------------------------------------------------------------------------
| Bard Table
|--------------------------------------------------------------------------
|
| Bards have a talent for song and story, and they come to their careers
| by developing this talent as they pick up on a smattering of other skills.
| Roll on Table: Bard Backgrounds to determine the incident that brought
| you to that path.
|
*/

class BardTable
{
    use RollDice;

    public static function execute()
    {
        $roll = self::roll(num: 1, dice: 100);

        if ($roll['total'] > 0 && $roll['total'] <= 10) {
            $response['type'] = '';
            $response['text'] = '';
        }

        if ($roll['total'] > 10 && $roll['total'] <= 20) {
            $response['type'] = '';
            $response['text'] = '';
        }

        if ($roll['total'] > 20 && $roll['total'] <= 30) {
            $response['type'] = '';
            $response['text'] = '';
        }

        if ($roll['total'] > 30 && $roll['total'] <= 40) {
            $response['type'] = '';
            $response['text'] = '';
        }

        if ($roll['total'] > 40 && $roll['total'] <= 50) {
            $response['type'] = '';
            $response['text'] = '';
        }

        if ($roll['total'] > 50 && $roll['total'] <= 60) {
            $response['type'] = '';
            $response['text'] = '';
        }

        if ($roll['total'] > 60 && $roll['total'] <= 70) {
            $response['type'] = '';
            $response['text'] = '';
        }

        if ($roll['total'] > 70 && $roll['total'] <= 80) {
            $response['type'] = '';
            $response['text'] = '';
        }

        if ($roll['total'] > 80 && $roll['total'] <= 90) {
            $response['type'] = '';
            $response['text'] = '';
        }

        if ($roll['total'] > 90 && $roll['total'] <= 100) {
            $response['type'] = '';
            $response['text'] = '';
        }

        return $response;
    }
}
