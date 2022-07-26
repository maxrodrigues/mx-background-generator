<?php

namespace App\Tables\Classes;

use App\Traits\RollDice;

/*
|--------------------------------------------------------------------------
| Monk Table
|--------------------------------------------------------------------------
|
| Masters of the martial arts, monks are the pinnacle of discipline and
| perfection. Wielding strange arms and stranger fighting arts, monks are
| defined by their training. Whether brought up as the protege of a grand
| master or self-taught through stolen glimpses into the windows of a
| secret school, a monk’s story is emblazoned in every step, cut, and
| strike he makes. Roll on Table: Monk Backgrounds to determine the origin
| of your exotic training.
|
*/

class MonkTable
{
    use RollDice;

    public static function execute()
    {
        $roll = self::roll(num: 1, dice: 100);

        if ($roll['total'] > 0 && $roll['total'] <= 10) {
            $response['type'] = 'Bellicose Historian';
            $response['text'] = 'What started as a scholar’s curiosity in exotic fighting styles bloomed into a fanatical desire not just to learn about martial arts, but to master them. You gain access to the Style Sage social trait.';
        }

        if ($roll['total'] > 10 && $roll['total'] <= 20) {
            $response['type'] = 'Classically Schooled';
            $response['text'] = 'Training from dawn to dusk to hone every inch of your body into a fighting instrument, you studied with scores of other students in an academy or school dedicated to one specific martial art. You gain access to the Simple Disciple social trait.';
        }

        if ($roll['total'] > 20 && $roll['total'] <= 30) {
            $response['type'] = 'Elite Fighting Force';
            $response['text'] = 'You learned your fighting skills as one of a highly trained group dedicated to a special purpose, such as guarding a temple or protecting a noble. Your training emphasized unobtrusive teamwork and unquestioned dedication to some higher purpose. You gain access to the Veiled Disciple social trait.';
        }

        if ($roll['total'] > 30 && $roll['total'] <= 40) {
            $response['type'] = 'Tournament Champion';
            $response['text'] = 'a shining example of your style or order, you’ve honed martial prowess through spirited and exciting competition. You gain access to the Martial Performer combat trait.';
        }

        if ($roll['total'] > 40 && $roll['total'] <= 50) {
            $response['type'] = 'Lineage Holder';
            $response['text'] = 'You are the senior or sole student of a great master. You rose to prominence early and received secret training in an art that is rare and exotic. Having achieved a strong foundation in the physical and metaphysical elements of this martial art, you’ve been designated the lore keeper for its history and traditions, and must now find new student or students to train. You gain access to the Martial Manuscript faith trait.';
        }

        if ($roll['total'] > 50 && $roll['total'] <= 60) {
            $response['type'] = 'Nature’s Disciple';
            $response['text'] = 'Just as many great masters learned and crafted styles from the beauty and majesty of nature, your fighting style comes from time spent in the wild rather than from formal training. You have seen firsthand how the mantis hunts, how the tiger swipes, and how the crane beats its wings. Your observance of the natural world gave you the ability to extrapolate combat forms without traditional training. You gain access to the Nature’s Mimic combat trait.';
        }

        if ($roll['total'] > 60 && $roll['total'] <= 70) {
            $response['type'] = 'Secret Student';
            $response['text'] = 'Your teacher and fellow students grew up as part of a conquered people, forbidden to train at war and forced to conceal the fighting style as seemingly harmless dances and your weapons as mundane tools… until the day you all you could rise up against tyranny. You gain access to the Hidden Hand combat trait.';
        }

        if ($roll['total'] > 70 && $roll['total'] <= 80) {
            $response['type'] = 'Spirit Teacher';
            $response['text'] = 'Your martial training is both physical and metaphysical in nature, allowing you to unlock a higher state of consciousness that allows you to draw on the wisdom and power of long-dead masters. You gain access to the Spirit Sense faith trait.';
        }

        if ($roll['total'] > 80 && $roll['total'] <= 90) {
            $response['type'] = 'Unsuspecting Master';
            $response['text'] = 'You were trained in martial arts through unorthodox methods such as seemingly menial tasks or training through conditioning exercises that promised the smallest scrap of food as a reward. Your nontraditional training makes you resourceful and clever. You gain access to the Surprise Weapon combat trait.';
        }

        if ($roll['total'] > 90 && $roll['total'] <= 100) {
            $response['type'] = 'Wandering Savant';
            $response['text'] = 'Although you’ve received some formal training in exotic combat, you decided to put your skills to the test and further your learning by wandering the wide world. You gain access to the Wanderer’s Shroud faith trait.';
        }

        return $response;
    }
}
