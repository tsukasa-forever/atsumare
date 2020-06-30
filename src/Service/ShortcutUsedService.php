<?php


namespace App\Service;


use App\Model\Domain\Slack\Client\SlackClient;
use Cake\Log\Log;

class ShortcutUsedService extends AppService
{

    private $team_id;
    private $user_id;
    private $action_ts;
    private $callback_id;
    private $trigger_id;

    /** @var SlackService */
    private $SlackService;

    /** @var SlackClient */
    private $slack_client;

    public function __construct($payload)
    {
        parent::__construct();
        Log::write('error', json_encode($payload));
        $this->team_id = $payload->team->id;
        $this->user_id = $payload->user->id;
        $this->action_ts = $payload->action_ts;
        $this->callback_id = $payload->callback_id;
        $this->trigger_id = $payload->trigger_id;

        $this->SlackService = new MokmoksService();
        $this->slack_client = new SlackClient();
    }

    public function callback()
    {
        if ($this->callback_id === "new_mokmok_dialog") {
            $dialog = $this->SlackService->getNewMokmokDialog();
            $this->slack_client->openDialog($this->trigger_id, $dialog);
        }
    }

}
