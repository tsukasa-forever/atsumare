<?php


namespace App\Service;


use App\Model\Domain\Slack\InteractiveMessage\Dialog;
use App\Model\Domain\Slack\InteractiveMessage\Option;
use App\Model\Domain\Slack\InteractiveMessage\Select;
use App\Model\Domain\Slack\InteractiveMessage\Text;

class SlackService extends AppService
{

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @return Dialog
     * @throws
     */
    public function getNewAtsumariDialog()
    {
        $title = new Text('Title', 'title', 'Go言語カクカク会');
        $place = new Text('Place', 'place', '渋谷のスタバ');

        $date_options = [];
        $date = new \DateTimeImmutable();
        foreach (array_fill(0, 14, 1) as $key => $value) {
            $date = $date->modify("+1 days");
            $option = new Option($date->format("Y年m月d日"), $date->format("Y/m/d"));
            $date_options[] = $option;
        }
        $date = new Select('Date', 'date', $date_options);

        $the_time_options = [];
        foreach (array_fill(0, 24, 1) as $key => $value) {
            $the_time_option = new Option($key."時", $key.":00:00");
            $the_time_options[] = $the_time_option;
        }
        $start_time = new Select('Start Time', 'start_time', $the_time_options);

        $the_time_options = [];
        foreach (array_fill(0, 24, 1) as $key => $value) {
            $the_time_option = new Option($key."時", $key.":00:00");
            $the_time_options[] = $the_time_option;
        }
        $end_time = new Select('End Time', 'end_time', $the_time_options);


        $elements = [
            $title,
            $place,
            $date,
            $start_time,
            $end_time
        ];

        $dialog = new Dialog('create_atsumari', 'new Atsumari', 'Request', $elements);
        return $dialog;
    }

}
