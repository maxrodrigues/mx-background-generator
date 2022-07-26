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
            $response['type'] = 'Celebrity';
            $response['text'] = 'In your formative years, you saw a player or troupe of players perform before an enthralled audience. That’s when you decided that you wanted to be up on that stage performing for the adulation of the crowd. As a minor celebrity, you gain access to either the Charming social trait or the Influence social trait.';
        }

        if ($roll['total'] > 10 && $roll['total'] <= 20) {
            $response['type'] = 'Cultural Mandate';
            $response['text'] = 'There has always been a revered storyteller in your culture. This could be an official skald, a royal minstrel, the washerman who spins parables and folk wisdom, or the old farmer who tells tall tales at the pub. Ever since you were young, your community has groomed you to fulfill this role. As a silver-tongued storyteller, you gain access to the Fast Talker social trait.';
        }

        if ($roll['total'] > 20 && $roll['total'] <= 30) {
            $response['type'] = 'Dabbler';
            $response['text'] = 'Whether you grew up rich or poor, you refused to accept the limits imposed by your social class or means. In your youth, you determined to learn a little bit of all there was to know. You may not be the master of any one career, but the breadth of your experience is wide, textured, and diverse. You gain access to the Worldly social trait.';
        }

        if ($roll['total'] > 30 && $roll['total'] <= 40) {
            $response['type'] = 'For Love';
            $response['text'] = 'When you were young, you tried to express yourself to your beloved using song or poetry. Driven by desire, you refined your skill and learned to articulate raw emotion in story and song. You gain access to the Ear for Music religion trait and the True Love story feat. You roll a d12 instead of a d20 on Table: Romantic Relationships.';
        }

        if ($roll['total'] > 40 && $roll['total'] <= 50) {
            $response['type'] = 'Gift';
            $response['text'] = 'Someone gave you a special instrument or a collection of songs and stories at a time in your life when you needed them most. You have treasured this object above all other possessions, and it started you on a path to new songs and stories. You gain access to the Seeker social trait.';
        }

        if ($roll['total'] > 50 && $roll['total'] <= 60) {
            $response['type'] = 'Ongoing Patron';
            $response['text'] = 'When you were young, a person with money or power took an interest in your art and sponsored you. Most of what you created was dictated by the patron’s tastes, and you probably still work for this patron, who maintains a strong influence over your life. You gain access to the Oathbound faith trait.';
        }

        if ($roll['total'] > 60 && $roll['total'] <= 70) {
            $response['type'] = 'Spy';
            $response['text'] = 'Someone once asked you to employ your artistic talents as an excuse to observe a person, steal an object, or retrieve a piece of information. Infiltrating various houses and estates in the guise of an actor, minstrel, or storyteller, you honed your art while being paid better than most other performers. You gain access to the Criminal social trait. See the Crime and Punishment sidebar.';
        }

        if ($roll['total'] > 70 && $roll['total'] <= 80) {
            $response['type'] = 'Troupe of Players';
            $response['text'] = 'You were born into, helped found, or fell in with a troupe of traveling players. You spent your early years rambling from one place to another—from tavern to tavern, town to town, or even between countries. Long hours traveling gave you plenty of time to practice and hone your skill. You gain access to the World Traveler human race trait (which you may take regardless of your race).';
        }

        if ($roll['total'] > 80 && $roll['total'] <= 90) {
            $response['type'] = 'Virtuoso';
            $response['text'] = 'One day, you picked up an instrument or told a tale, and your raw natural ability captivated everyone who saw you perform. Words and music have always come to you effortlessly, as naturally as breathing. You gain access to the Talented social trait and the Magnum Opus story feat.';
        }

        if ($roll['total'] > 90 && $roll['total'] <= 100) {
            $response['type'] = 'Worldshaker';
            $response['text'] = 'Since childhood, you’ve observed the world around you and translated those observations into story and song. Your unique, unabashed vision resonated with the audience, revealing new perspectives as well as simple truths. You’re used to people quoting your words and looking up to you, though some authority figures deem you a rabble-rouser and troublemaker. You gain access to the Natural-Born Leader social trait.';
        }

        return $response;
    }
}
