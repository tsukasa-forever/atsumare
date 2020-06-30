<?php


namespace App\Service;

use Cake\Log\Log;

class DialogSubmissionService extends AppService
{

    private $team_id;
    private $channel_id;
    private $submission;
    private $user_id;
    private $action_ts;
    private $callback_id;

    /** @var MokmoksService */
    private $MokMoksService;

    public function __construct($payload)
    {
        parent::__construct();
        Log::write('error', json_encode($payload));
        $this->team_id = $payload->team->id;
        $this->channel_id = $payload->channel->id;
        $this->submission = $payload->submission;
        $this->user_id = $payload->user->id;
        $this->action_ts = $payload->action_ts;
        $this->callback_id = $payload->callback_id;

        $this->MokMoksService = new MokmoksService();
    }

    public function callback()
    {
        if ($this->callback_id === "create_mokmok") {
            $this->MokMoksService->create(
                $this->team_id,
                $this->user_id,
                $this->submission->title,
                '',
                $this->submission->date,
                $this->submission->start_time,
                $this->submission->end_time
            );
        }
    }

}
