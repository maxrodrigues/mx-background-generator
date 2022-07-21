<?php

namespace App\Tables;

use App\Traits\RollDice;

/*
|--------------------------------------------------------------------------
| Adopted Outside Your Race Table
|--------------------------------------------------------------------------
|
| If it has been determined that you have been adopted,
| a roll will be made, determining which race created you.
|
*/

class AdoptedOutsideYourRaceTable
{
    use RollDice;

    public static function handle()
    {
        $roll = self::roll(1, 100);

        if ($roll[0] > 1 && $roll[0] <= 5) {
            $response['type'] = 'Adopted by Dragons';
            $response['text'] = 'For its own purposes, a dragon raised you as its own. You have learned the language and history, wisdom, power, and might of dragonkind.';
        }

        if ($roll[0] > 5 && $roll[0] <= 10) {
            $response['type'] = 'Adopted by the Fey';
            $response['text'] = 'Your adoptive parents were fey creatures such as korreds, pixies, or a dryad.';
        }

        if ($roll[0] > 10 && $roll[0] <= 13) {
            $response['type'] = 'Raised Among the Dead';
            $response['text'] = 'Your adoptive parent is a nonliving creature, such as a spectre, ghost, lich, or vampire. You were likely raised in empty ruined halls, among tombs and crypts, by a creature that feeds on life. What its purpose was for raising you, none can say. ';
        }

        if ($roll[0] > 13 && $roll[0] <= 19) {
            $response['type'] = 'Raised by Angels';
            $response['text'] = ' 	Angels attended your birth and took you to live with them in the heavens. These cosmic beings expanded your view to encompass not just the world but the larger universe. You know that wherever you go, your angelic parents watch over you. ';
        }

        if ($roll[0] > 19 && $roll[0] <= 25) {
            $response['type'] = 'Raised by Beasts';
            $response['text'] = 'When you were separated from your biological parents, you were found and raised by wild beasts. Your ways are the ways of the wild, and along with your advanced survival instincts you’ve adopted the natural habits of a specific beast.';
        }

        if ($roll[0] > 25 && $roll[0] <= 70) {
            $response['type'] = 'Raised by Civilized Humanoids';
            $response['text'] = 'You were raised by a community of civilized humanoids of a race different from your own (chosen by your GM). Your attitudes, beliefs, and values reflect that race, although characteristics of your true nature frequently emerge.';
        }

        if ($roll[0] > 70 && $roll[0] <= 95) {
            $response['type'] = 'Raised by Savage Humanoids';
            $response['text'] = 'You were raised by savage humanoids such as orcs, kobolds, gnolls, troglodytes, or lizardfolk. As a result, your values, customs, and traditions are those of your adoptive parents, though characteristics of your true nature frequently emerge.';
        }

        if ($roll[0] > 95 && $roll[0] <= 100) {
            $response['type'] = 'Fiend Raised';
            $response['text'] = 'You were separated from your natural parents and raised by a fiend who taught you the cruelty and malice of the gods and worked to fashion you into its own mortal instrument to corrupt innocent souls.';
        }
    }
}
