<?php

namespace App\Tables;

use App\Traits\RollDice;

/*
|--------------------------------------------------------------------------
| Major Child Event Table
|--------------------------------------------------------------------------
|
| During your childhood, you were influenced by a significant event that
| helped to shape the person you became. Roll on Table: Major Childhood
| Event to determine the type of event that shaped you in early childhood.
|
*/

class MajorChildEventTable
{
    use RollDice;

    public static function execute()
    {
        $roll = self::roll(num: 1, dice: 100);

        if ($roll['total'] > 0 && $roll['total'] <= 5) {
            $response['type'] = 'Academy Training';
            $response['text'] = 'You attended a private academy where you studied a number of skills and gained training in your current profession. Whether you were a brilliant student or a dropout, the university environment was your home for a good portion of your formative years. You gain access to the Focused Mind magic trait.';
        }

        if ($roll['total'] > 5 && $roll['total'] <= 10) {
            $response['type'] = 'Betrayal';
            $response['text'] = 'a friend or family member whom you trusted more than anyone else betrayed you. You have never fully trusted anyone since and prefer to rely on your own abilities rather than place your trust in others. You gain access to the Suspicious social trait.';
        }

        if ($roll['total'] > 10 && $roll['total'] <= 15) {
            $response['type'] = 'Bullied';
            $response['text'] = 'In your early life, you were a victim—easy prey for those stronger or cleverer than yourself. They beat you when they could, using you for their sport. This abuse nursed a powerful flame of vengeance. You gain access to the Bullied combat trait.';
        }

        if ($roll['total'] > 15 && $roll['total'] <= 20) {
            $response['type'] = 'Competition Champion';
            $response['text'] = 'You distinguished yourself at an early age when you won a competition. This might have been a martial contest of arms, a showing of apprentice magicians, high stakes gambling, or something mundane like an eating championship. You gain access to the Influence social trait and the Champion story feat.';
        }

        if ($roll['total'] > 20 && $roll['total'] <= 25) {
            $response['type'] = 'Death in the Family';
            $response['text'] = 'You were profoundly affected by the death of the relative closest to you—a parent, grandparent, favorite sibling, aunt, uncle, or cousin. This death affected you profoundly, and you’ve never been able to let go of it. You gain access to the Reactionary combat trait and the Deny the Reaper story feat.';
        }

        if ($roll['total'] > 25 && $roll['total'] <= 30) {
            $response['type'] = 'Died';
            $response['text'] = 'You died, or came so close to death that you walked the boundary between the realms of the living and the dead. Having passed from life’s domain once, you have a unique perspective on life, perhaps even a greater appreciation for it—or maybe your experience caused you to reject all trivial things, focusing only on matters of true import. You gain access to the Fearless Defiance faith trait and the Arisen story feat.';
        }

        if ($roll['total'] > 30 && $roll['total'] <= 35) {
            $response['type'] = 'Fall of a Major Power';
            $response['text'] = 'In your early years, an old power with far-reaching influence fell into decline. This could have been an empire, a major organization or gang, or a person such as a benevolent king or evil dictator. Your early memories were founded in a world where this great power affected your region for good or ill. You gain access to the Worldly social trait.';
        }

        if ($roll['total'] > 35 && $roll['total'] <= 40) {
            $response['type'] = 'Fell in with a Bad Crowd';
            $response['text'] = 'In your youth, you ran with a brutal, evil, or sadistic crowd. You might have belonged to a gang, a thieves’ guild, or some other nefarious organization. It was easy to cave in to pressure and do whatever they told you to do, and your outlook is colored by moral ambiguity. You gain access to the Child of the Streets social trait.';
        }

        if ($roll['total'] > 40 && $roll['total'] <= 45) {
            $response['type'] = 'First Kill';
            $response['text'] = 'You`ve had blood on your hands since your youth, when you first took the life of another creature. Whether this act repulsed you or gave you pleasure, it was a formative experience. You gain access to the Killer combat trait and the Innocent Blood story feat';
        }

        if ($roll['total'] > 45 && $roll['total'] <= 50) {
            $response['type'] = 'Troubled First Love';
            $response['text'] = 'Your first love was everything you imagined it would be. That is, until you were separated from your beloved. This may have been the result of distance, changing perspectives, death, or differences in class or family. Some have said this made you jaded—you think it has granted you insight on how the world really works. You gain access to the Worldly social trait and you roll a d12 instead of a d20 on Table: Romantic Relationships.';
        }

        if ($roll['total'] > 50 && $roll['total'] <= 55) {
            $response['type'] = 'Imprisoned';
            $response['text'] = 'Your criminal record began when you were young. You were imprisoned, punished, and possibly displayed in public as a criminal. Whether or not you committed the crime, the experience has stayed with you. You gain access to the Criminal social trait. See the Crime and Punishment section. You also gain access to the Liberator story feat.';
        }

        if ($roll['total'] > 55 && $roll['total'] <= 60) {
            $response['type'] = 'Inheritance';
            $response['text'] = 'A great sum of wealth or property was bequeathed to you at an early age, providing you with extraordinary means. Daily costs of living have ceased to concern you, and you’ve learned that there is little that money cannot buy. You gain access to the Rich Parents social trait.';
        }

        if ($roll['total'] > 60 && $roll['total'] <= 65) {
            $response['type'] = 'Kidnapped';
            $response['text'] = 'You were kidnapped at some point in your childhood. The kidnappers might have been pirates, slavers, thieves looking for ransom, a powerful guild seeking to blackmail your parents, a cult, and so on else. Before you were released, were ransomed, or escaped, you picked up on various aspects of the criminal underworld. You gain access to the Canter social trait and the Liberator story feat.';
        }

        if ($roll['total'] > 65 && $roll['total'] <= 70) {
            $response['type'] = 'Magical Gift';
            $response['text'] = 'When you were a child, you found, stole, or were given a magic item that gave you an extraordinary ability. You may have used this item for mischief, crime, or good. Since that time, magic items have always held a special fascination for you. You gain access to the Magical Talent magic trait.';
        }

        if ($roll['total'] > 70 && $roll['total'] <= 75) {
            $response['type'] = 'Major Disaster';
            $response['text'] = 'You witnessed—and survived—a major disaster in your childhood years, such as a great fire, flood, earthquake, volcano, or storm. It obliterated the settlement where you lived, whether a small village, large city, or entire island. You gain access to the Resilient combat trait and the Unforgotten story feat.';
        }

        if ($roll['total'] > 75 && $roll['total'] <= 80) {
            $response['type'] = 'Mentorship/Patronage';
            $response['text'] = 'a mentor or patron took an interest in your development and volunteered to train or sponsor you. This creature’s motives might not be entirely clear, but without its influence you would not be who you are. You gain access to the Mentored social trait.';
        }

        if ($roll['total'] > 80 && $roll['total'] <= 85) {
            $response['type'] = 'Met a Fantastic Creature';
            $response['text'] = 'When you were only a child, you made contact with a magical creature, such as a dragon, unicorn, genie, pixie, or similar creature. You learned a powerful lesson or a magic trick from that creature. This meeting changed your life and made you different from the other children. You gain access to the Gifted Adept magic trait.';
        }

        if ($roll['total'] > 85 && $roll['total'] <= 90) {
            $response['type'] = 'Ordinary Childhood';
            $response['text'] = 'Your childhood was fairly ordinary, with no major blessing or catastrophe—a stark contrast to an adventuring life. You lived your life in anticipation of growing up so you could affect the dull backdrop upon which your mundane life was painted. Now that you’ve grown, it’s easy to miss those tranquil days where nothing ever seemed to happen. You gain access to the Ordinary social trait.';
        }

        if ($roll['total'] > 90 && $roll['total'] <= 95) {
            $response['type'] = 'Raiders';
            $response['text'] = 'a horde of raiders attacked your settlement and killed several of your people. This could have been a tribe of brutal humanoids or the conquering army of a civilized nation. As a result, you harbor deep resentment toward a particular faction, race, or country. You gain access to the Axe to Grind combat trait, the Foeslayer story feat, and the Vengeance story feat.';
        }

        if ($roll['total'] > 95 && $roll['total'] <= 100) {
            $response['type'] = 'The War';
            $response['text'] = 'You grew up against the backdrop of a major military conflict that affected much of your childhood world. You became accustomed to a short food supply, living in occupied territory, and moving from place to place. Several of the people you knew in your childhood were lost in the war, including members of your family. You gain access to the Vagabond Child regional trait and the Deny the Reaper story feat.';
        }

        return $response;
    }
}
