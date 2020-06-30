<?php


namespace App\Model\Entity;


use Cake\ORM\Entity;

/**
 * @property string $id
 * @property string $team_id
 * @property string $name
 * @property string $real_name
 * @property string $image_url
 */
class SlackUser
{
    private $_properties = [];

    public function __construct(array $data)
    {
        $this->_properties = $data;
    }

    public function __get($name)
    {
        if ($name == "image_url") {
            return $this->_properties['profile']['image_original'];
        }
        return $this->_properties[$name];
    }
}
