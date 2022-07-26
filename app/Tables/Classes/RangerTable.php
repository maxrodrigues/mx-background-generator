<?php

namespace App\Tables\Classes;

use App\Traits\RollDice;

/*
|--------------------------------------------------------------------------
| Ranger Table
|--------------------------------------------------------------------------
|
| Ranger are the hunters of legend. Although known for their ability to
| master varying environments and their dangers, rangers often achieve
| this expertise through the dedicated pursuit of their quarry. Though
| such a target could be a lost or kidnapped friend or a forgotten ruin,
| more often a ranger’s target is a hated enemy, and no feature of the
| class lends itself better to the establishment of character than his
| favored enemy. While a professional headhunter might hone his skills
| to track down humans or other civilized folk, a ranger whose family was
| murdered by ravenous orcs likely has a different set of priorities
| while on the hunt. Roll on Table: Ranger Backgrounds to determine the
| formative events that led you to become a ranger.
|
*/

class RangerTable
{
    use RollDice;

    public static function execute()
    {
        $roll = self::roll(num: 1, dice: 100);

        if ($roll['total'] > 0 && $roll['total'] <= 10) {
            $response['type'] = 'An Eye for an Eye';
            $response['text'] = 'The choice of your favored enemy was nothing more than simple vengeance. Perhaps you lost a loved one, family, or even a whole community to the vicious rampaging of a ferocious beast, or saw your entire homeland swallowed up by monstrous hordes. No matter the reason, your drive to hunt down and destroy creatures of their kind won’t be sated so long as even one lives. You gain access to the Tireless Avenger faith trait and the Foeslayer story feat.';
        }

        if ($roll['total'] > 10 && $roll['total'] <= 20) {
            $response['type'] = 'Ancient Hatred';
            $response['text'] = 'The history of your people is a saga of struggle against another race. Though common among elves and orcs or dwarves and giants, many different races can have such longstanding animosity. Your choice of a favored enemy was a simple outgrowth of this racial antipathy. You gain access to the Knowing the Enemy social trait.';
        }

        if ($roll['total'] > 20 && $roll['total'] <= 30) {
            $response['type'] = 'Big Game Hunter';
            $response['text'] = 'Whether you sought out the thrill of hunting large prey or merely grew up in the shadows of creatures large enough to crush an entire village with a careless step, you have learned how to be quick and to size up weaknesses in those behemoths who seem to have none. You gain access to the Evasive Sting combat trait.';
        }

        if ($roll['total'] > 30 && $roll['total'] <= 40) {
            $response['type'] = 'Blood Cleansing';
            $response['text'] = 'Either you have forsaken your kinsfolk or they have forsaken you. Maybe you grew up among a wicked or corrupt people who you needed to escape, or maybe they exiled you for being different. Whatever the case, your own kind are now your favored enemy, much to your continued chagrin or morbid amusement. You gain access to the Scarred Descendant combat trait.';
        }

        if ($roll['total'] > 40 && $roll['total'] <= 50) {
            $response['type'] = 'Bounty Hunter';
            $response['text'] = 'You have always been good at finding and extracting people from their hidey-holes. Most likely you hunt humanoids of either your own subtype or of one common to your region. You gain access to the Easy Way or the Hard Way combat trait and the Town Tamer story feat.';
        }

        if ($roll['total'] > 50 && $roll['total'] <= 60) {
            $response['type'] = 'Detached Observer';
            $response['text'] = 'You set yourself apart with a pall of cold logic that allows you to see weaknesses in members of your own race that you strive not to succumb to yourself. Most likely, you pick your own race as your dominant favored enemy, and you excel as a spy or assassin paid to capture enemies of your organization. You gain access to the Cold and Calculating combat trait.';
        }

        if ($roll['total'] > 60 && $roll['total'] <= 70) {
            $response['type'] = 'Divine Purpose';
            $response['text'] = 'Not all those who hear the voices of the gods can distill that echo into magical power like clerics or oracles. These whispers of belief encouraged you to track and hunt those creatures who pose the greatest threat to your faith. Perhaps you’re a good ranger who hunts the undead or devotes effort to slaying fiends, or you could choose to target good fey and celestials, emboldened by divine invective. You gain access to the Faith’s Hunter combat trait.';
        }

        if ($roll['total'] > 70 && $roll['total'] <= 80) {
            $response['type'] = 'Nightmare Slayer';
            $response['text'] = 'From an early age, you stood up against some of the most terrifying creatures imaginable, facing off against creatures most mortals only dream of in their wildest nightmares. Possibly hailing from lands besieged by dragons or plagued by the living dead, you are not only resistant to the fear such creatures normally engender, but you live to show your enemies the face of the unafraid. You gain access to the Fearless Defiance faith trait.';
        }

        if ($roll['total'] > 80 && $roll['total'] <= 90) {
            $response['type'] = 'Opportunist';
            $response['text'] = 'You are an expert in creatures both common and exotic, particularly in terms of what valuable items you can harvest from their remains. The natural world exists for the benefit of those who know what to take, and you have learned how to scavenge pelts, toxins, and even rare spell components from your defeated foes. You might pick animals, magical beasts, or dragons as your dominant favored enemy—or humanoids if you’re a particularly grisly trophy collector. You gain access to the Harvester social trait.';
        }

        if ($roll['total'] > 90 && $roll['total'] <= 100) {
            $response['type'] = 'Survivalist';
            $response['text'] = 'You were orphaned at a young age and left to fend for yourself in the wilds, or simply lived a life at the edge of society that required a constant scrabble for basic existence. You probably have animals or magical beasts (the edible ones) as your dominant favored enemy, and are adept at lying in wait and springing into action. You gain access to the Hunter’s Knack combat trait.';
        }

        return $response;
    }
}
