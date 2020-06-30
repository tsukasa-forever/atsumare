<?php
declare(strict_types=1);

/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use App\Model\Domain\Slack\Client\SlackClient;
use App\Model\Domain\Slack\InteractiveMessage\Dialog;
use App\Model\Table\MokmoksTable;
use App\Service\SlackService;
use Cake\Log\Log;

/**
 * @property MokmoksTable $Mokmoks
 */
class SlackController extends AppController
{
    /** @var SlackService */
    private $SlackService;

    public function initialize(): void
    {
        parent::initialize(); // TODO: Change the autogenerated stub
        $this->SlackService = new SlackService();
    }

    public function challenge()
    {
        $this->autoRender = false;
        $challenge = $this->request->getData('challenge');
        return $this->response->withStringBody($challenge);
    }

    public function newMokmokDialog()
    {
        $this->autoRender = false;

        $trigger_id = $this->request->getData('trigger_id');
        $dialog = $this->SlackService->getNewMokmokDialog();

        $slack_client = new SlackClient();
        $res = $slack_client->openDialog($trigger_id, $dialog);

        Log::write('error', json_encode($res->getJson()));

    }
}
