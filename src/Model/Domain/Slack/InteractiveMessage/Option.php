<?php


namespace App\Model\Domain\Slack\InteractiveMessage;


class Option implements Element
{
    /** @var string  */
    private $label;
    /** @var string  */
    private $value;

    public function __construct(string $label, string $value)
    {
        $this->label = $label;
        $this->value = $value;
    }

    public function toArray()
    {
       return [
           'label' => $this->label,
           'value' => $this->value
       ];
    }
}
