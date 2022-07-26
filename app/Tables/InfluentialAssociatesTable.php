<?php

namespace App\Tables;

use App\Traits\RollDice;

/*
 |----------------------------------------------------------------------
 | Influential Associates Table
 |----------------------------------------------------------------------
 |
 | Influential associates are people who had (or continue to have)
 | a strong influence upon your development. They are archetypes
 | and templates for NPCs that you can customize to fit your
 | background. Roll on Table: Influential Associates to determine
 | an associate or ally who had a major influence on your life. Then
 | flesh out the details to show how this person fits within your story.
 | You might also wish to use other tables in this chapter to randomly
 | fill in this person’s details.
 |
*/

class InfluentialAssociatesTable
{
    use RollDice;

    public static function execute()
    {
        $roll = self::roll(num: 1, dice: 100);

        if ($roll['total'] > 0 && $roll['total'] <= 5) {
            $response['type'] = 'The Hunter';
            $response['text'] = 'This person was a lone wolf who nonetheless cautiously allowed you to become a member of her solitary pack. She taught you how to thrive on your own in spite of the many perils and natural dangers of your native environment. You gain access to the Child of Nature religion trait.';
        }

        if ($roll['total'] > 5 && $roll['total'] <= 10) {
            $response['type'] = 'The Pariah';
            $response['text'] = 'You met a disgraced exile, and found in his words and attitudes something that spoke to you. What once seemed true in your religion, society, or family began to appear false the more time you spent with this person, and you quickly learned not to trust everyone you meet—especially among those who would claim to be most deserving of it. You gain access to the Suspicious social trait.';
        }

        if ($roll['total'] > 10 && $roll['total'] <= 15) {
            $response['type'] = 'The Confidante';
            $response['text'] = 'There was a person in your life to whom you could tell anything. She knows your deepest secrets and your emotional weaknesses and vulnerabilities just as you know hers. This person could be a valuable friend and a frightening enemy, so you make sure to never divulge her secrets or give her a reason to do so with yours. You gain access to the Trustworthy social trait.';
        }

        if ($roll['total'] > 15 && $roll['total'] <= 20) {
            $response['type'] = 'The Mentor';
            $response['text'] = 'You had a mentor who taught you everything worth knowing about life. This could have been the person who taught you the heroic abilities you possess, or simply a kindred spirit who helped form your worldview. You gain access to the Mentored social trait.';
        }

        if ($roll['total'] > 20 && $roll['total'] <= 25) {
            $response['type'] = 'The Mercenary';
            $response['text'] = 'With this person, there was always a cost. No deed was done making a trade for something of equal or greater value. Whether this individual’s actions tended toward good, evil, or pure balance, he was always fair in his dealings. You respected this trait and it influenced your own philosophy. You gain access to the Mercenary social trait.';
        }

        if ($roll['total'] > 25 && $roll['total'] <= 30) {
            $response['type'] = 'The Lover';
            $response['text'] = 'You had a romantic connection in your adolescent years, and this person deeply influenced your personality. Perhaps this was a first love, a casual partner you grew close to, or the one who got away. The experience bolstered your confidence in romantic interactions even though you often find your thoughts still straying toward that special someone from so long ago. You gain access to the Charming social trait and the True Love story feat. Roll a d12 instead of a d20 on Table: Romantic Relationships.';
        }

        if ($roll['total'] > 30 && $roll['total'] <= 35) {
            $response['type'] = 'The Fool';
            $response['text'] = ' 	One of your close associates was a clown who mocked propriety and custom, instead engaging in wild and somewhat random actions from time to time. After a while, you learned that there was simple wisdom to this foolery—a careless worldview that taught you how to cast off concern. You gain access to the Unpredictable social trait.';
        }

        if ($roll['total'] > 0 && $roll['total'] <= 10) {
            $response['type'] = 'The Liege Lord';
            $response['text'] = 'You became close with someone you were bound to serve, be it a minor lord or lady, master (in the case of a slave), prince or princess, king or queen. Though this person held power over you, she held you closer than a subject or servant. As a result, you’re used to dealing with and being close to power, and your name is known among the ranks of the privileged. You gain access to the Influence social trait.';
        }

        if ($roll['total'] > 0 && $roll['total'] <= 10) {
            $response['type'] = 'The Relative';
            $response['text'] = ' 	There is a relative you were especially close to. To you, this person was the meaning of family. He helped shepherd you into adulthood, teaching you everything you know about the world. You are bound to this person or his memory, and you strive to keep a promise, vow, or oath that you made to him. You gain access to the Oathbound faith trait.';
        }

        if ($roll['total'] > 0 && $roll['total'] <= 10) {
            $response['type'] = 'The Boss';
            $response['text'] = 'You once gained employment under an organized and powerful individual with far-reaching influence. When the boss was present, everyone listened. This could have been a military commander, tribal chieftain, guild leader, or gang leader. From the boss, you learned how to make people listen, make them see reason, and keep them in line. You gain access to the Natural-Born Leader social trait.';
        }

        if ($roll['total'] > 0 && $roll['total'] <= 10) {
            $response['type'] = 'The Academic';
            $response['text'] = 'One of your associates had such a lust for knowledge that she could never be satisfied with simple answers or obvious solutions. This desire for knowledge frequently exceeded her need for companionship, but you were the single exception. Through this association you developed a keen appreciation for numbers, geometry, logic, hard study, and problem solving. You gain access to the Mathematical Prodigy magic trait.';
        }

        if ($roll['total'] > 0 && $roll['total'] <= 10) {
            $response['type'] = 'The Criminal';
            $response['text'] = ' 	One of your associates committed crimes regularly. He regaled you with many stories of daring robberies and break-ins—and perhaps even murders. You learned most of what you know of the criminal element from him, and he trusted you as a friend. You gain access to the Canter social trait.';
        }

        if ($roll['total'] > 0 && $roll['total'] <= 10) {
            $response['type'] = 'The Seer';
            $response['text'] = 'You were close to a person who claimed to see the future—perhaps an oracle, seer, prophet, or merely some festival charlatan. Whether they’re true or a trick, you’ve seen visions of distant places and of times that may come to pass. The seer’s influence either made you into an optimist with a drive to change the future or a fatalist resigned to accept it. You gain access to the Scholar of the Great Beyond faith trait.';
        }

        if ($roll['total'] > 0 && $roll['total'] <= 10) {
            $response['type'] = 'The Mystic';
            $response['text'] = 'You were especially close to a holy person in your community who fundamentally changed your life by opening your eyes to the incredible powers that exist beyond the natural world. Regardless of whether you follow a faith, certain religious artifacts, rituals, and texts played a large part in making you the person you are. You gain access to the Child of the Temple faith trait.';
        }

        if ($roll['total'] > 0 && $roll['total'] <= 10) {
            $response['type'] = 'The Dead One';
            $response['text'] = 'One of your greatest influences was a sentient undead creature, such as a ghost, lich, grave knight, wraith, or vampire. You encountered it on several occasions and survived…mostly unscathed. Through this strange relationship you learned of its mortal life, giving you perspective on your own life. You gain access to the Deathtouched bloodline race trait and the Glimpse Beyond story feat.';
        }

        if ($roll['total'] > 0 && $roll['total'] <= 10) {
            $response['type'] = 'The Fiend';
            $response['text'] = 'In your adolescent years, you dealt with or were possessed by a fiend who lent you raw power at a time of great need. This experience tainted your body and mind and changed your life. Some part of the demon remains inside you like an old friend, influencing you toward destructive ends. You gain access to the Possessed magic trait and the Damned story feat.';
        }

        if ($roll['total'] > 0 && $roll['total'] <= 10) {
            $response['type'] = 'The Wanderer';
            $response['text'] = 'You knew someone who traveled from place to place with the changing of the wind, such as a minstrel, convict, merchant, outcast, soldier, or sailor. This person brought you wondrous mementos and told you of all the places he had traveled and the people who lived there, inspiring a wanderlust within you. You gain access to the Worldly social trait.';
        }

        if ($roll['total'] > 0 && $roll['total'] <= 10) {
            $response['type'] = 'The Champion';
            $response['text'] = 'You were close to someone who excelled at athletic endeavors and tests of strength or skill. Through your friendship or rivalry, you developed the competitive spirit that continues to drive you in everything you do. You gain access to the Ambitious social trait.';
        }

        if ($roll['total'] > 0 && $roll['total'] <= 10) {
            $response['type'] = 'The Craftsperson';
            $response['text'] = 'One of your major influences cherished perfection in every form of art. This person might have followed any path in life, from craftsperson to artist to assassin. From this person you developed a disciplined mind, a solitary focus, and the ability to create something useful and beautiful. You gain access to the Artisan social trait.';
        }

        if ($roll['total'] > 95 && $roll['total'] <= 100) {
            $response['type'] = 'Well-Connected Friend';
            $response['text'] = 'In your circle of disparate associates, there was someone everyone knew. This person collected friends like trophies, and she had contacts in every social or professional circle. Through this connection, you continue to meet and associate with a wide variety of people in every walk of life. You gain access to the Well-Informed halfling race trait (which you may take regardless of your race).';
        }

        return $response;
    }
}
