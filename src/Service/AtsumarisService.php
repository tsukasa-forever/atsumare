<?php


namespace App\Service;


use App\Model\Entity\Atsumari;
use App\Model\Table\AtsumarisTable;
use Cake\ORM\TableRegistry;

class AtsumarisService extends AppService
{
    /** @var AtsumarisTable */
    private $Atsumaris;

    public function __construct()
    {
        parent::__construct();
        $this->Atsumaris = TableRegistry::getTableLocator()->get('Atsumaris');
    }

    /**
     * @return Atsumari
     */
    public function create(string $team_id, string $user_id, string $name, string $place, string $description, string $date, string $start_time, string $end_time)
    {
        return $this->Atsumaris->create($team_id, $user_id, $name, $place, $description, $date, $start_time, $end_time);
    }
}
