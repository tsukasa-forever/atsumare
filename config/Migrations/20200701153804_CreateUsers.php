<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateUsers extends AbstractMigration
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
        $table = $this->table('users');
        $table->addColumn('u_id', 'string', [
            'default' => '',
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('name', 'string', [
            'default' => '',
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('team_id', 'string', [
            'default' => '',
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('image_url', 'text', [
            'default' => '',
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
        $table->create();
    }
}
