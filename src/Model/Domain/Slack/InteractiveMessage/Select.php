<?php


namespace App\Model\Domain\Slack\InteractiveMessage;


class Select implements Element
{
    /** @var string  */
    private $label;
    /** @var string  */
    private $name;
    /** @var ElementList  */
    private $option_lists;

    /**
     * Select constructor.
     * @param string $label
     * @param string $name
     * @param string $sub_type
     * @param Option[] $options
     */
    public function __construct(string $label, string $name, array $options)
    {
        $this->label = $label;
        $this->name = $name;
        $this->option_lists = new ElementList($options);
    }

    public function toArray()
    {
        return [
            'label' => $this->label,
            'type' => "select",
            'name' => $this->name,
            'options' => $this->option_lists->toArray()
        ];
    }
}
