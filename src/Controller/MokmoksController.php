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

use App\Model\Table\MokmoksTable;
use App\Model\Table\UsersTable;
use Cake\ORM\TableRegistry;

/**
 * @property MokmoksTable $Mokmoks
 */
class MokmoksController extends AppController
{
    /** @var UsersTable */
    public $Users;

    public function index()
    {
        $mokmoks = $this->Mokmoks->find()->all();
        $this->set(compact("mokmoks"));
        $this->Users = TableRegistry::getTableLocator()->get('Users');
    }

    public function view($id)
    {
        $mokmok = $this->Mokmoks->get($id);
        $creator = $this->Users->getByUId($mokmok->user_id);
        $members = [];
        $this->set(compact('mokmok', 'creator', 'members'));
    }
}
