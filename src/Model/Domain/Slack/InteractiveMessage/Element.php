<?php


namespace App\Model\Domain\Slack\InteractiveMessage;


interface Element
{
    /** @return array */
    public function toArray();
}
