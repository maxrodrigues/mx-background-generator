<?php

namespace App\Tables\Classes;

use App\Traits\RollDice;

/*
|--------------------------------------------------------------------------
| Paladin Table
|--------------------------------------------------------------------------
|
| Champions of virtue and the rule of law, many paladins are called to
| their path at a young age. Some hear the whispers of celestial beings
| in their minds, while other are drawn down the path of the paladin by
| tragedy and a sincere desire to strike a blow to the evil that stalks
| the world. Paladins sometimes take on younger charges such as orphans
| or runaways during their journeys, and the seeds of goodness can be
| sowed into these impressionable youths to grow another knight on the
| quest for righteousness. Roll on Table: Paladin Backgrounds to determine
| the formative events that led you to become a paladin.
|
*/

class PaladinTable
{
    use RollDice;

    public static function execute()
    {
        $roll = self::roll(num: 1, dice: 100);

        if ($roll['total'] > 0 && $roll['total'] <= 10) {
            $response['type'] = 'Divine Calling';
            $response['text'] = 'An otherworldly agent of law and good—such as an angel, empyreal lord, or perhaps some other celestial envoy of the gods—tasked you to be a divine champion. You accepted the calling (maybe grudgingly) because ultimately you realize that the laws of destiny and one’s divine calling cannot be denied. In return, that celestial agent watches over you and makes sure you can fully realize your destiny and meet the course that has been set for you by a higher power. You gain access to the Blessed faith trait.';
        }

        if ($roll['total'] > 10 && $roll['total'] <= 20) {
            $response['type'] = 'Dread Penance';
            $response['text'] = 'You, or perhaps your family, owe a debt for some past wrongdoing or vice. Maybe you made deals with some unscrupulous loan sharks during a gambling binge or your not-so-distant ancestors were responsible for the persecution of a marginalized group of people. Whatever the offense, your past action hangs over your head and fills you with guilt. You’ve taken a solemn oath to make good on this past misdeed. Only then will you feel like your life is truly worthwhile. You gain access to the Oathbound faith trait.';
        }

        if ($roll['total'] > 20 && $roll['total'] <= 30) {
            $response['type'] = 'Holy Epiphany';
            $response['text'] = 'Your faith and purpose came in a brilliant flash of insight. Maybe you suddenly realized that evil can be stopped only with vigilance and deliberate action, or maybe an epiphany showed you that the innocent need protection from corrupt forces for good to flourish in the world. Whatever the nature of your epiphany, it guides your actions and gives you insights others lack. You gain access to the Inspired faith trait.';
        }

        if ($roll['total'] > 30 && $roll['total'] <= 40) {
            $response['type'] = 'Zealous Devotion';
            $response['text'] = 'Maybe your faith was not popular among those around you during your youth. Maybe you have strange or controversial views regarding your religion, and the other members of your congregation find your practices bizarre or insulting. Whatever the case, your faith is constantly being questioned regardless of your obviously pious nature, and such persecution only serves to embolden your zeal. You gain access to the Indomitable Faith faith trait.';
        }

        if ($roll['total'] > 40 && $roll['total'] <= 50) {
            $response['type'] = 'Moral Debt';
            $response['text'] = 'The world and all things material are intrinsically corrupt. All creatures are born with a moral debt, and only by fighting evil, upholding law, and championing the common good can one be truly free of that corruption. You work every day to pay off this debt and move those around you to do the same. You gain access to the Principled faith trait and the Fearless Zeal story feat.';
        }

        if ($roll['total'] > 50 && $roll['total'] <= 60) {
            $response['type'] = 'Mark of Faith';
            $response['text'] = 'You were born with the mark of your faith. Maybe at some point you rebelled against such branding, or it could be you’ve always accepted the mark as an indicator of your destiny. In either case, it was a harbinger of the paladin path. You gain access to the Birthmark faith trait.';
        }

        if ($roll['total'] > 60 && $roll['total'] <= 70) {
            $response['type'] = 'Righteous Mentor';
            $response['text'] = 'A paladin of note and great honor took you under her wing and taught you many things. She taught you how to adhere to your oath with grace and dignity, and how the simple act of doing so was enough to earn the respect and devotions of others. You gain access to the Natural-Born Leader social trait.';
        }

        if ($roll['total'] > 70 && $roll['total'] <= 80) {
            $response['type'] = 'Warrior of Truth';
            $response['text'] = 'Early in your life, you learned that the philosophies of law and good not only create the best society but also reveal truths that would otherwise remain obscured. You are rarely clouded by pure dogma; instead you’re unafraid to question and create your own path toward truth, justice, and righteousness. You gain access to the Skeptic magic trait.';
        }

        if ($roll['total'] > 80 && $roll['total'] <= 90) {
            $response['type'] = 'Knight-Errant';
            $response['text'] = 'You know that evil stalks the world, and only one who is dedicated to the spread of good can stop these vile forces. To make sure fiends and wrongdoers do not go unpunished, you adopted the code of the paladin in order to travel the land and eradicate the wicked. Your goal is the relentless pursuit to seek out evil and put it down. You gain access to the Seeker social trait.';
        }

        if ($roll['total'] > 90 && $roll['total'] <= 100) {
            $response['type'] = 'Terrible Secret';
            $response['text'] = 'You know a terrible secret about an ancient evil that threatens your homeland or perhaps even the entire world. You have sworn to keep this secret quiet lest it gain power in the retelling, but you also must work to thwart the evil whenever possible. This at times contradictory path has led you many places in your travels, and the knowledge you have gleaned from your adventures continues to serve you well in your fight against the wicked. You gain access to the Scholar of the Great Beyond faith trait.';
        }

        return $response;
    }
}
