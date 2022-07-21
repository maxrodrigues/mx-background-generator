<?php

namespace App\Tables;

use App\Traits\RollDice;

/*
|--------------------------------------------------------------------------
| Nobility Table
|--------------------------------------------------------------------------
|
| As a person of noble rank, you have access to a degree of wealth,
| privilege, or influence beyond that of the common people. If your character
| is of noble birth (and comes from a society where the nobility uses a
| traditional structure of rank), roll on Table: Nobility to learn your
| parents’ position among the ruling class.
|
*/

class Nobility
{
    use RollDice;
    public static function handle()
    {
        $roll = self::roll(1, 100);

        if ($roll[0] > 1 && $roll[0] <= 60) {
            $response['type'] = 'Gentry';
            $response['text'] = 'You are the child of a minor lord, lady, or noble with an income, hereditary land such as a manor, and titles. You likely grew up in a manor and your parents were paid tribute by peasants. Your parents serve a higher baron, count, or duke.';
        }

        if ($roll[0] > 60 && $roll[0] <= 78) {
            $response['type'] = 'Knight';
            $response['text'] = 'You are the child of a knight, a noble with estates, titles, and lands who serves a lord. Your family has sworn an oath of fealty to a liege—such as a baron, count, or duke—and commits to military service in his or her name. As the child of a knight, you may serve as a squire to another knight while pursuing your own path to knighthood.';
        }

        if ($roll[0] > 1 && $roll[0] <= 85) {
            $response['type'] = 'Baron';
            $response['text'] = 'You are the child of a baron or baroness, a noble responsible for a land encompassing several smaller manors that pay tribute. Your parents receive orders directly from the monarch, and you’re expected to attend the royal court. You are entitled to hereditary estates, titles, and land.';
        }

        if ($roll[0] > 1 && $roll[0] <= 91) {
            $response['type'] = 'Count';
            $response['text'] = 'You are the noble child of a count or countess. Your family members receive hereditary titles, land, and estates, and are among the most wealthy nobles in your domain. Knights and minor lords pay tribute to your family, and your parents attend directly to the monarch. You’re expected to attend the royal court.';
        }

        if ($roll[0] > 1 && $roll[0] <= 96) {
            $response['type'] = 'Duke';
            $response['text'] = 'You are the child of a duke or duchess, the most powerful noble in the realm apart from the royal family. Your parents attend directly to the monarch and have the highest place at court. Your lands, titles, and estates are significant, and many lords and knights serve under your parents’ command.';
        }

        if ($roll[0] > 1 && $roll[0] <= 99) {
            $response['type'] = 'Minor Prince';
            $response['text'] = 'You are the child of a prince or princess, and part of the royal family. You aren’t the next in succession, but your power and wealth are grand indeed.';
        }

        if ($roll[0] === 100) {
            $response['type'] = 'Regent';
            $response['text'] = 'You are a prince or princess, the son or daughter of the monarch. You owe fealty directly to your parents, and to no one else. Few command the power and wealth you do, and your presence inspires great respect, if not total awe, among those who kneel before the crown.';
        }

        return $response;
    }
}
