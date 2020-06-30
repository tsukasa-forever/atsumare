<?php


namespace App\Service;


use App\Model\Table\MokmoksTable;
use Cake\ORM\TableRegistry;

class MokmoksService extends AppService
{
    /** @var MokmoksTable */
    private $Mokmoks;

    public function __construct()
    {
        parent::__construct();
        $this->Mokmoks = TableRegistry::getTableLocator()->get('Mokmoks');
    }

    public function create(string $team_id, string $user_id, string $name, string $description, string $date, string $start_time, string $end_time)
    {
        return $this->Mokmoks->create($team_id, $user_id, $name, $description, $date, $start_time, $end_time);
    }
}
