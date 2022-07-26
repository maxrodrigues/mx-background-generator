<?php

namespace App\Tables\Classes;

use App\Traits\RollDice;

/*
|--------------------------------------------------------------------------
| Barbarian Table
|--------------------------------------------------------------------------
|
| Barbarians are fueled by an almost supernatural rage that helps them
| loose the volatile stores of adrenaline within their bodies. This rage
| stays with the barbarian throughout her life as an adventurer, and she
| learns to refine her fits of passionate anger only over time. Yet each
| barbarian’s rage is different and personal. It comes from the primal
| depths of her soul, and cannot be manufactured. Only a select few can
| channel that purest, deepest rage into overpowering combat prowess.
| Roll on Table: Barbarian Backgrounds to determine the event that caused
| you to first experience your rage.
|
*/

class BarbarianTable
{
    use RollDice;

    public static function execute()
    {
        $roll = self::roll(num: 1, dice: 100);

        if ($roll['total'] > 0 && $roll['total'] <= 10) {
            $response['type'] = 'Vengeance';
            $response['text'] = 'When you were young, a great wrong was done to you, a loved one, your family, or your people. This experience tore you apart and reduced you to a being of primal emotions. Dreams of vengeance became your only promise of comfort. You gain access to the Axe to Grind combat trait, the Foeslayer story feat, and the Vengeance story feat.';
        }

        if ($roll['total'] > 10 && $roll['total'] <= 20) {
            $response['type'] = 'Champion of a God';
            $response['text'] = 'At your coming-of-age ritual, your deity, totem, or patron spirit sparked your soul with a religious zeal. This entity might be a beast spirit, a warmongering god, a demon lord, or some other supernatural entity. In the name of this otherworldly force you become an unstoppable warrior—the bane of all your tribe’s foes. You gain access to the Inspired faith trait and the Champion story feat.';
        }

        if ($roll['total'] > 20 && $roll['total'] <= 30) {
            $response['type'] = 'Conquest';
            $response['text'] = 'Upon coming of age, you went on your first raid, where you learned the thrill of violence and chaos and the satisfaction that came with the spoils of your victory. When your enemies dare to stand against you, your rage rekindles until you have conquered and subdued them. You gain access to the Killer combat trait.';
        }

        if ($roll['total'] > 30 && $roll['total'] <= 40) {
            $response['type'] = 'Hated Foe';
            $response['text'] = 'In your formative years, you learned to despise a certain individual, tribe, kingdom, empire, race, or monster due to some slight it inflicted upon you or your people. This foe lurks ever close to your thoughts. So intense is your hatred that the mere thought of this foe can incite your rage. You gain access to the Reckless combat trait and the Foeslayer story feat.';
        }

        if ($roll['total'] > 40 && $roll['total'] <= 50) {
            $response['type'] = 'Personal Flaw';
            $response['text'] = 'There is a part of yourself that you hate more than anything else. In your adolescence, you first realized this imperfection—to your lasting shame. This might be a gentle part of yourself you wish to eliminate or a brutal, prideful, greedy, or monstrous side you can’t control. Your rage is fueled by self-loathing, or by projecting this part of yourself onto a foe you wish to destroy. You gain access to the Axe to Grind combat trait.';
        }

        if ($roll['total'] > 50 && $roll['total'] <= 60) {
            $response['type'] = 'Hatred of Civilization';
            $response['text'] = 'When you first encountered civilization in your youth, its weak and decadent people revolted you. Once, such people were free and strong, but rules and laws made them feeble. Your rage is the wild part—the pure part—of yourself that separates you from the craven ways of “civilized” people. You gain access to the Savage social trait.';
        }

        if ($roll['total'] > 60 && $roll['total'] <= 70) {
            $response['type'] = 'Persecution';
            $response['text'] = 'You grew up under the persecution of another power—perhaps a rival tribe, an expansionistic empire, or a tribe of violent monsters. Beaten and bloodied, your people barely survived the onslaught. But the beatings made you strong and taught you how to channel the pain into something useful. Since that time, the flame of rage has burned inside you, waiting to be released against your oppressors. You gain access to the Bullied combat trait.';
        }

        if ($roll['total'] > 70 && $roll['total'] <= 80) {
            $response['type'] = 'One of a Dying Breed';
            $response['text'] = 'You grew up knowing that your people were slowly dying out—that your extinction was inevitable in the face of the changing world. In youthful vigor, you declared that your fire would not be snuffed without a fight. Your rage stems from the desperate desire to be remembered, to make a mark upon the world before the sun sets on your dwindling kind. When you rage, a single thought permeates your burning mind: If you’re going down, you’re taking everyone with you. You gain access to the Reactionary combat trait.';
        }

        if ($roll['total'] > 80 && $roll['total'] <= 90) {
            $response['type'] = 'Chaos Embraced';
            $response['text'] = 'You grew up in wild lands where there were no laws except for those of nature—the laws of the predator and the prey. You searched for meaning in the world, in the gods, in the prayers of priests, in the patterns of the stars, but you found nothing. There is no true order to the natural universe except for that of raw and unbridled power. Chaos is the natural state of all things, and that’s how you like it. You gain access to the Unpredictable social trait.';
        }

        if ($roll['total'] > 90 && $roll['total'] <= 100) {
            $response['type'] = 'Bloodthirsty';
            $response['text'] = 'The first time you spilled a deserving foe’s blood and watched the thing’s life ebb out onto the hard ground, you found yourself filled with a mad, euphoric ecstasy like none other. The memory of this visceral experience returns to you in every battle, like an insatiable addiction that can only be abated with further bloodshed. You gain access to the Bloodthirsty combat trait and the Innocent Blood story feat.';
        }

        return $response;
    }
}
