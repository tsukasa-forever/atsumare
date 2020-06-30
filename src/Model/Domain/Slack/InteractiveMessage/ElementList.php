<?php


namespace App\Model\Domain\Slack\InteractiveMessage;


class ElementList
{
    /** @var Element[] */
    private $elements;

    /**
     * @param Element[] $elements
     */
    public function __construct(array $elements)
    {
        $this->elements = $elements;
    }

    /**
     * @return array
     */
    public function toArray()
    {
        $array = [];

        foreach ($this->elements as $element) {
            $array[] = $element->toArray();
        }

        return $array;
    }
}
