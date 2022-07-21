<?php

namespace App\Tables;

use App\Traits\RollDice;

class CircumstanceOfBirthTable
{
    use RollDice;

    public static function getCircumstanceOfBirths()
    {
        $response = [];
        // Circumstance Of Birth
        $roll = self::roll(1, 100);
        $circumstanceOfBirth = $roll[0];

        if ($circumstanceOfBirth > 1 && $circumstanceOfBirth <= 40) {
            $response['type'] = 'Lower-Class Birth';
            $response['text'] = 'You were born among peasants or slum denizens. You grew up working the land around a village or manor, practicing a rudimentary trade, or begging in a settlement.';
        }

        if ($circumstanceOfBirth > 40 && $circumstanceOfBirth <= 65) {
            $response['type'] = 'Middle-Class Birth';
            $response['text'] = 'You were born to the middle class, which includes merchants, artisans, and tradespeople. You likely grew up in a good-sized settlement, and one of your parents is likely associated with a guild or other trade organization. As a free person, you don’t experience the bondage of serfdom or peasantry, but you also lack the privilege of the nobility.';
        }

        if ($circumstanceOfBirth > 65 && $circumstanceOfBirth <= 70) {
            $response['type'] = 'Noble Birth';
            $response['text'] = 'You were born to privilege among the nobility. Unless one of your parents is the regent, your family serves a higher-ranked noble but lesser nobles serve your family in turn. ';
        }

        if ($circumstanceOfBirth > 70 && $circumstanceOfBirth <= 72) {
            $response['type'] = 'Adopted Outside Your Race';
            $response['text'] = 'You were not raised by your birth family and grew up in a family of a different race than your own.';
        }

        if ($circumstanceOfBirth > 72 && $circumstanceOfBirth <= 77) {
            $response['type'] = 'Adopted';
            $response['text'] = 'You were not raised by your birth family, but taken in by another family within your race or culture. Roll twice instead of once on Table: Parents Profession—once for your birth family and a second time for your adoptive family.';
        }

        if ($circumstanceOfBirth > 77 && $circumstanceOfBirth <= 81) {
            $response['type'] = 'Bastard Born';
            $response['text'] = 'Your parents had a tryst that resulted in your birth out of wedlock. You know one of your parents, but the other remains unknown or a distant presence at best.';
        }

        if ($circumstanceOfBirth === 82) {
            $response['type'] = 'Blessed Birth';
            $response['text'] = 'When you were born, you were blessed by a being of great power such as an angel, azata, or genie. This blessing has protected you from certain peril or marked you as special to some deity.';
        }

        if ($circumstanceOfBirth > 82 && $circumstanceOfBirth <= 84) {
            $response['type'] = 'Born of Violence';
            $response['text'] = 'Your birth was caused by violent, unwilling means. You have one parent, and the other likely remains unknown.';
        }

        if ($circumstanceOfBirth === 85) {
            $response['type'] = 'Born out of Time';
            $response['text'] = 'You were born in a different era, either the distant past or the far future. Some event has displaced you from your time, and the ways and customs of the present seem strange and alien to you.';
        }

        if ($circumstanceOfBirth > 85 && $circumstanceOfBirth <= 87) {
            $response['type'] = 'Born into Bondage';
            $response['text'] = 'You were born into slavery or servitude. Your parents are likely slaves or servants, or you were sold into slavery as an infant.';
        }

        if ($circumstanceOfBirth === 88) {
            $response['type'] = 'Cursed Birth';
            $response['text'] = 'When you were born, a powerful fiendish entity tainted your blood in some way and cursed you as an agent of dark prophecy.';
        }

        if ($circumstanceOfBirth > 88 && $circumstanceOfBirth <= 90) {
            $response['type'] = 'Dishonored Family';
            $response['text'] = 'You were born into a family that once was honored among your society but has since fallen into disgrace. Now your family name is loathed and maligned by those who know it, putting you on your guard.';
        }

        if ($circumstanceOfBirth > 90 && $circumstanceOfBirth <= 92) {
            $response['type'] = 'Heir to a Legacy';
            $response['text'] = 'You are the heir to a family with an old name and a distinguished past. Your family might be wealthy or middle class, but your name itself is worth twice your fortunes.';
        }

        if ($circumstanceOfBirth > 92 && $circumstanceOfBirth <= 94) {
            $response['type'] = 'Left to Die';
            $response['text'] = 'When you were born you were left to die, but by some twist of circumstance you survived.';
        }

        if ($circumstanceOfBirth === 95) {
            $response['type'] = 'Marked by the Gods';
            $response['text'] = 'A deity has marked you. That mark can be on your body or your soul.';
        }

        if ($circumstanceOfBirth === 96) {
            $response['type'] = 'Energy Infused';
            $response['text'] = 'During your birth you were exposed to potent source of divine energy.';
        }

        if ($circumstanceOfBirth === 97) {
            $response['type'] = 'Progeny of Power';
            $response['text'] = 'You were born during a particularly powerful conjunction or in some other time of power.';
        }

        if ($circumstanceOfBirth === 98) {
            $response['type'] = 'Prophesied';
            $response['text'] = 'Your birth was foretold, as recently as during the last generation to as far back as thousands of years ago.';
        }

        if ($circumstanceOfBirth === 99) {
            $response['type'] = 'Reincarnated';
            $response['text'] = 'You have been reborn in many cycles, and may be reborn in many more until you accomplish the ultimate task for which you are destined.';
        }

        if ($circumstanceOfBirth === 100) {
            $response['type'] = 'The Omen';
            $response['text'] = 'The sages, priests, or wizards of your society decreed your birth an omen of a coming age or event—perhaps you are an omen of promise, perhaps one of dark times ahead.';
        }

        return $response;
    }
}
