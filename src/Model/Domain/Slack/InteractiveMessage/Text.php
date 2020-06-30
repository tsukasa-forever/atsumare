<?php


namespace App\Model\Domain\Slack\InteractiveMessage;


class Text implements Element
{
    /** @var string  */
    private $label;
    /** @var string  */
    private $name;
    /** @var string  */
    private $placeholder;

    public function __construct(string $label, string $name, string $placeholder)
    {
        $this->label = $label;
        $this->name = $name;
        $this->placeholder = $placeholder;
    }

    public function toArray()
    {
       return [
           'label' => $this->label,
           'type' => "text",
           'name' => $this->name,
           'placeholder' => $this->placeholder
       ];
    }
}
