<?php


namespace App\Model\Domain\Slack\InteractiveMessage;


class Dialog implements Element
{

    /** @var ElementList */
    private $element_list = [];

    /** @var string  */
    private $callback_id;

    /** @var string  */
    private $title;

    /** @var string */
    private $submit_label;

    /**
     * Dialog constructor.
     * @param string $callback_id
     * @param string $title
     * @param string $submit_label
     * @param array $elements
     */
    public function __construct(string $callback_id, string $title, string $submit_label, array $elements)
    {
        $this->callback_id = $callback_id;
        $this->title = $title;
        $this->submit_label = $submit_label;
        $this->element_list = new ElementList($elements);
    }

    /**
     * @return array
     */
    public function toArray()
    {
        return [
            "callback_id" => $this->callback_id,
            "title" => $this->title,
            "submit_label" => $this->submit_label,
            "state" => "Limo",
            "elements" => $this->element_list->toArray()
        ];
    }

    /**
     * dialog =
    {
    callback_id: "new_mokmok",
    title: "New MokMok",
    submit_label: "Request",
    state: "Limo",
    elements: [
    {
    label: "Title",
    name: "title",
    type: "text",
    subtype: "email",
    placeholder: "WEBS MokMok"

    },
    {
    label: "Place",
    name: "place",
    type: "text",
    placeholder: "sibuya"

    },
    {
    label: "Date",
    type: "select",
    name: "date",
    options: dates
    },
    {
    label: "Start Time",
    type: "select",
    name: "start_time",
    options: times

    },
    {
    label: "Finish Time",
    type: "select",
    name: "finish_time",
    options: times
    },
    ]
    }
     */
}
