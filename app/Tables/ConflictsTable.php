<?php

namespace App\Tables;

use App\Traits\RollDice;

/*
|--------------------------------------------------------------------------
| Conflicts Table
|--------------------------------------------------------------------------
|
| Begin by rolling on Table: Conflicts. This table lists 20 conflicts,
| ranging from minor indiscretions to grievous sins. The type of die you
| roll on this table is based on the needs of the campaign as well as your
| character’s starting class. First, consult with your GM; If you can play
| any alignment in the campaign, roll a d20. If your campaign allows only
| nonevil characters, roll a d12. If you are playing a paladin or some other
| character who must be good, roll a d6. Once you are done, proceed to
| Table: Conflict Subject and to the tables and sections subsequent to it.
|
*/

class ConflictsTable
{
    use RollDice;

    public static function execute()
    {
    }

    /**
     * conflicts
     *
     * @return void
     */
    public static function conflicts()
    {
        return [
            1   => "Minor Failure - You failed a friend, family member, or loved one who depended on you to fulfill an important task.",
            2   => "Petty Crime - You committed a minor crime, like vandalism, trespassing, or mischief.",
            3   => "Told a Lie - You deliberately made someone believe something that was not true to further your own goals.",
            4   => "Broke a Promise - You swore an oath or vow that was important to someone else, but you did not keep your promise.",
            5   => "Humiliation - You publicly humiliated or scandalized someone with either true or slanderous information.",
            6   => "Negligence - You caused someone else to suffer by your own inaction, disregard, or excessive recklessness.",
            7   => "Minor Theft - You stole several small or inexpensive items that belonged to someone else.",
            8   => "Seducer - You tempted or manipulated someone to act in accordance with your whim, careless of whether it was in their own best interests.",
            9   => "Cheater - You broke a rule, law, contract, or agreement for your own gain.",
            10  => "Betrayal - You betrayed someone who trusted you.",
            11  => "Malign Associates - You allied with a destructive creature, organization, or individual.",
            12  => "Destroyed a Reputation - You deliberately ruined the honor, reputation, or fortunes of another individual or group.",
            13  => "Major Theft - You stole expensive items.",
            14  => "Corrupted an Innocent - You counseled an otherwise innocent person who trusted you, toward adverse choices.",
            15  => "Blackmailed - You used sensitive knowledge or threats to force someone’s cooperation.",
            16  => "Destruction - You destroyed someone else’s property.",
            17  => "Armed Robbery - You robbed someone with the threat of violence.",
            18  => "Violent Crime - You beat, assaulted, or mutilated someone.",
            19  => "Murder - You killed someone.",
            20  => "Mass Murder - You killed several sentient beings.",
        ];
    }

    /**
     * subject
     *
     * To determine the key person (or people) involved in the conflict,
     * roll on Table: Conflict Subject. Only on the rare occasion that
     * the subject was a child or a young person does the subject affect
     * the accumulation of CP.
     *
     * @return void
     */
    public static function subject()
    {
        return [
            1   => "Commoner",
            2   => "Merchant",
            3   => "Tradesperson",
            4   => "Artisan",
            5   => "Civic or military official",
            6   => "Noble",
            7   => "Leader",
            8   => "Clergy",
            9   => "Soldier or warrior",
            10  => "Spellcaster",
            11  => "Scoundrel",
            12  => "Child or young person (increase your CP by 1)",
            13  => "Family member",
            14  => "Close friend",
            15  => "Lover or former lover (roll a d12 instead of a d20 on Table: Romantic Relationships)",
            16  => "Enemy or rival",
            17  => "Gangster or underworld figure",
            18  => "Adventurer",
            19  => "Humanoid monster",
            20  => "Non-humanoid monster",
        ];
    }

    /**
     * motivation
     *
     * To determine the source of your motivation for the conflict, roll
     * on Table: Motivation. If the campaign allows the full spectrum of
     * alignments, roll a d10 on this table. If the campaign allows only
     * nonevil alignments, roll a d8. If you’re a paladin, roll a d4.
     * The motivation affects the CP gained from the conflict.
     *
     * @return void
     */
    public static function motivation()
    {
        return [
            1   => "Justice",
            2   => "Love",
            3   => "Pressured or Manipulated",
            4   => "Religion",
            5   => "Family",
            6   => "Money",
            7   => "Jealousy",
            8   => "Hatred or Malice",
            9   => "Pleasure",
            10  => "Amusement or Entertainment",
        ];
    }
}
