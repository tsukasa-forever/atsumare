<?php


namespace App\Model\Entity;


use Cake\ORM\Entity;
use DateTimeImmutable;

/**
 * @property int $id
 * @property string $name
 * @property string $place
 * @property string $description
 * @property DateTimeImmutable $date
 * @property DateTimeImmutable $start_time
 * @property DateTimeImmutable $end_time
 * @property string $user_id
 * @property string $team_id
 */
class Atsumari extends Entity
{

    /**
     * @return string
     */
    public function getDetailUrl()
    {
        return env('DOMAIN') . "/atsumaris/view/" . $this->id;
    }

    public function datetimeStr()
    {
        return $this->date->format("Y/m/d ") . $this->start_time->format("H:i~") . $this->end_time->format("H:i");
    }
}
