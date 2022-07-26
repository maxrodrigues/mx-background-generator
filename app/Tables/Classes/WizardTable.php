<?php

namespace App\Tables\Classes;

use App\Traits\RollDice;

/*
|--------------------------------------------------------------------------
| Bard Table
|--------------------------------------------------------------------------
|
| Perhaps no other class exemplifies the acquisition of power through sheer
| focus and determination as well as the wizard. Neither touched by divine
| purpose nor blessed with magic in their blood, wizards must spend their
| entire lives studying the same texts, tomes, scrolls, and recitations to
| master the magical arts. Such a craft can be self-taught or instilled
| through instruction, learned in an academy or at the fringes of the world,
| but it can be mastered only through the most rigorous and regimented of
| study. Roll on Table: Wizard Backgrounds to determine how you came to
| study wizardry, and how that study forever shaped you.
|
*/

class BardTable
{
    use RollDice;

    public static function execute()
    {
        $roll = self::roll(num: 1, dice: 100);

        if ($roll['total'] > 0 && $roll['total'] <= 10) {
            $response['type'] = 'Brains over Brawn';
            $response['text'] = 'You were bullied or excluded throughout your life because you lacked physical power and fighting prowess. To compensate, you turned to transmutation magic. Your practice and perseverance has granted you skill with spells of that school. You gain access to the Tenacious Shifting magic trait.';
        }

        if ($roll['total'] > 10 && $roll['total'] <= 20) {
            $response['type'] = 'Dangerous Intellect';
            $response['text'] = 'At a young age, those around you, whether family or friends, realized that your intellect was more than mere precociousness. As your sense of curiosity became dangerous, those responsible for you pushed you into studying magic in the hopes that you would find infinite puzzles to solve. You gain access to the Tireless Logic social trait.';
        }

        if ($roll['total'] > 20 && $roll['total'] <= 30) {
            $response['type'] = 'Fitting In';
            $response['text'] = 'You hail from a long line of sorcerers or from a community known for its natural affinity for magic. Your manifestation of wizardly talent, as opposed to blood-based sorcery, caused you to hide those talents at a young age, and then to disguise them as sorcery to the best of your ability later. You still retain some tricks from this early misdirection. You gain access to the Shrouded Casting magic trait.';
        }

        if ($roll['total'] > 30 && $roll['total'] <= 40) {
            $response['type'] = 'Gifted Pride';
            $response['text'] = 'Your affinity for magic has made you somewhat crass and arrogant, though some find your blunt disposition charming or worthy of respect. The air of superiority surrounding you is palpable and allows you to use you intellect to cow others at times when lesser individuals might barely get a word in. You gain access to the Bruising Intellect social trait.';
        }

        if ($roll['total'] > 40 && $roll['total'] <= 50) {
            $response['type'] = 'Mortality’s Mirror';
            $response['text'] = 'Your childhood innocence ended the moment you realized that someday you would die. This revelation may have come to you at the deathbed of a beloved relative, during a bloody siege against your homeland, or via some other eye-opening event. You have spent the rest of your life trying to master magic in order to change this most universal fate from stealing your last breaths away. You now have a keen eye for the magic of death and for discerning answers to ancient riddles. You gain access to the Greater Purpose magic trait.';
        }

        if ($roll['total'] > 50 && $roll['total'] <= 60) {
            $response['type'] = 'Righting a Wrong';
            $response['text'] = 'In your youth, you witnessed an event that changed the fate of many or of a tragic few, such as a natural disaster (like a flood, hurricane, or fire) or simply a friend’s unfortunate accident during a childish game. You were burdened by the knowledge that magic—perhaps even a spell as simple as feather fall—could have changed the course of lives. You’ve dedicated yourself to magic in an effort to make sure that you are never subject to the capricious whims of fate again. You gain access to the Desperate Resolve magic trait.';
        }

        if ($roll['total'] > 60 && $roll['total'] <= 70) {
            $response['type'] = 'Storied Lineage';
            $response['text'] = 'Your family name is synonymous with wizardry of the highest caliber. Magic was your destined path before you were even born, and both your family and those who know of your lineage have supported this notion your entire life, granting you an unwavering confidence in your talents. While the pursuit of arcane mastery is never easy, you are driven to live up to the expectations set forth for you. You gain access to the Resilient Caster magic trait.';
        }

        if ($roll['total'] > 70 && $roll['total'] <= 80) {
            $response['type'] = 'The Way Things Work';
            $response['text'] = 'Magic came alive the first time you held a magic item. The notion of extraordinary magic resting within something as seemingly ordinary as a ring, amulet, or stoppered vial changed the way you viewed the world, and ever since you’ve possessed a sense of curiosity and awe for all magic items. You gain access to the Magic Crafter magic trait and the Eldritch Researcher story feat.';
        }

        if ($roll['total'] > 80 && $roll['total'] <= 90) {
            $response['type'] = 'Unpaid Debt';
            $response['text'] = 'Someone saved your life at great cost. Whether through healing magic or basic heroism, your savior gave her life that you might live. Striving to repay this debt has led you to study magic, the only thing capable of making enough of a difference in the world to make you feel that you have earned the gift given to you. This sense of purpose has engendered an unshakable resolve in you. You gain access to the Principled faith trait';
        }

        if ($roll['total'] > 90 && $roll['total'] <= 100) {
            $response['type'] = 'Unquenchable Hunger for Knowledge';
            $response['text'] = 'For most wizards, magic is an end to which all studies strive, but not for you. For you, magic is a means to an end—and that end is knowledge. Your desire to know all of the secrets of the world requires the ability to cross continents in a blink, ride the winds, breathe water like a fish, and survive any kind of trap. Your unquenching quest for knowledge has made you ever ready for danger. You gain access to the Eldritch Delver magic trait.';
        }

        return $response;
    }
}
