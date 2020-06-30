<?php


namespace App\Model\Domain\Slack\Client;



use App\Model\Domain\Slack\InteractiveMessage\Dialog;
use Cake\Http\Client;
use Cake\Http\Client\Response;

define('BOT_TOKEN', env('BOT_TOKEN'));

class SlackClient
{
    private const OPEN_DIALOG_URL = "https://slack.com/api/dialog.open";

//    private const BOT_TOKEN = BOT_TOKEN;
    private const BOT_TOKEN = "xoxb-448569467826-1227193718737-7yvlgeUonN0xGnDzkSXQrtdY";

    /** @var Client */
    private $client;

    public function __construct()
    {
        $this->client = new Client();
    }


    /**
     * @param string $trigger_id
     * @param Dialog $dialog
     * @return Response
     */
    public function openDialog(string $trigger_id, Dialog $dialog)
    {
        $res = $this->client->post(self::OPEN_DIALOG_URL, [
            'token' => self::BOT_TOKEN,
            'trigger_id' => $trigger_id,
            'dialog' => json_encode($dialog->toArray())
        ]);
        return $res;
    }
}
