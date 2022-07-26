<?php

namespace App\Tables\Classes;

use App\Traits\RollDice;

/*
|--------------------------------------------------------------------------
| Sorcerer Table
|--------------------------------------------------------------------------
|
| Wielders of power on a seemingly impossible scale, sorcerers are conduits
| of the arcane energies inside them. These powers stem universally from
| the sorcerers‘ distinctive bloodlines. Either linked to powerful scions
| of mystical power like angels, devils, or dragons or touched by the forces
| of destiny themselves, sorcerers prove that sometimes when magic is
| involved, either you have it or you don’t. Roll on Table: Sorcerer Backgrounds
| to determine the event that made you aware of the forces at work within
| your own blood.
|
*/

class SorcererTable
{
    use RollDice;

    public static function execute()
    {
        $roll = self::roll(num: 1, dice: 100);

        if ($roll['total'] > 0 && $roll['total'] <= 10) {
            $response['type'] = 'Awakened Moment';
            $response['text'] = 'At some point, the dormant power within you awakened with a fright. It might have been the first time you came close to a dragon, celestial, or genie. Or the moment could have come at the grave of a great ancestor or in a lush and verdant glen. What slumbered in your blood has never quieted, and you frequently draw upon the inspiration of your awakening. You gain access to the Ascendant Recollection magic trait.';
        }

        if ($roll['total'] > 10 && $roll['total'] <= 20) {
            $response['type'] = 'Dreams of Something Different';
            $response['text'] = 'The first hints of your exceptional nature came to you as fragments of remembered dreams or split-second visions. As these episodes increased in both frequency and clarity, they unlocked a power in your blood you didn’t know you had. You gain access to the Strength Foretold magic trait.';
        }

        if ($roll['total'] > 20 && $roll['total'] <= 30) {
            $response['type'] = 'Failed Wizard';
            $response['text'] = 'Although your arcane aptitude was evident at an early age, you were pushed toward wizardry as the conduit for your magic. While you never mastered magic in this fashion, your time spent studying arcane tomes gave you obscure but often pertinent knowledge. You gain access to the Reluctant Apprentice magic trait.';
        }

        if ($roll['total'] > 30 && $roll['total'] <= 40) {
            $response['type'] = 'One of a Kind';
            $response['text'] = 'You know that sorcerous power comes from the blood, but as far as you know, none of your ancestors possessed your gift. You keep searching for the reason for your magical powers, which has led you to greater proficiency with divinations and a keen interest in the workings of your bloodline. You gain access to the Knowledgeable Caster magic trait.';
        }

        if ($roll['total'] > 40 && $roll['total'] <= 50) {
            $response['type'] = 'Outcast';
            $response['text'] = 'Driven away by your family and people, your arcane gifts have always inspired both fear and revulsion. You’ve become adept at spotting hostility in others who would despise you for your power. You gain access to the Outcast’s Intuition magic trait.';
        }

        if ($roll['total'] > 50 && $roll['total'] <= 60) {
            $response['type'] = 'Proud Heritage';
            $response['text'] = 'You hail from a long line of prominent sorcerers with even more prominent ancestral features. Your acceptance of your bloodline brings with it a pride and imposing mien that becomes amplified among others. You gain access to the Imposing Scion social trait.';
        }

        if ($roll['total'] > 60 && $roll['total'] <= 70) {
            $response['type'] = 'Shameful Heritage';
            $response['text'] = 'The obvious hints of your heritage were a source of shame to your family. No matter the manifestation of your differences, being a pariah taught you to practice your arts in secret. You gain access to the Unseen But Not Undone magic trait.';
        }

        if ($roll['total'] > 70 && $roll['total'] <= 80) {
            $response['type'] = 'Too Lucky';
            $response['text'] = 'You’ve always had a knack for getting out of trouble. This sense of preternatural good fortune led to your inquiries into magic and the discovery of your own sorcerous powers. You gain access to the Fate’s Favored faith trait.';
        }

        if ($roll['total'] > 80 && $roll['total'] <= 90) {
            $response['type'] = 'Unharmed';
            $response['text'] = 'At some point in your early life, you were exposed to something dangerous like a fall into stormy waters or a spell cast your way. But instead of dying, you survived entirely unscathed. This experience either first hinted at or confirmed that you were different, marking the first step on your path to sorcery. You gain access to the Unscathed magic trait.';
        }

        if ($roll['total'] > 90 && $roll['total'] <= 100) {
            $response['type'] = 'Wild Talent';
            $response['text'] = 'The magic in your blood was always as uncontrollable as it has powerful. You were forced to learn control at an early age, either out of fear that your powers might hurt someone or out of remorse once they had. This relentless vigilance and self-control gave you tremendous focus and arm you with strategic methods to redirect those wild energies coursing through you. You gain access to the Volatile Conduit magic trait.';
        }

        return $response;
    }
}
