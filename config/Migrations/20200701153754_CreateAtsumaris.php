<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateAtsumaris extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('atsumaris');
        $table->addColumn('title', 'string', [
            'default' => '',
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('description', 'text', [
            'default' => '',
            'null' => false,
        ]);
        $table->addColumn('place', 'string', [
            'default' => '',
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('team_id', 'string', [
            'default' => '',
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('user_id', 'string', [
            'default' => '',
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('created', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('modified', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('start_time', 'time', [
            'default' => '00:00:00',
            'null' => false,
        ]);
        $table->addColumn('end_time', 'time', [
            'default' => '00:00:00',
            'null' => false,
        ]);
        $table->addColumn('date', 'date', [
            'default' => 'today',
            'null' => false,
        ]);
        $table->create();
    }
}
