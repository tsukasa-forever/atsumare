<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateUsersAtsumaris extends AbstractMigration
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
        $table = $this->table('users_atsumaris');
        $table->addColumn('user_id', 'integer', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('atsumari_id', 'integer', [
            'default' => null,
            'null' => false,
        ]);

        $table->addForeignKey('atsumari_id', 'atsumaris', 'id', [
            'delete' => 'cascade',
            'update' => 'cascade',
        ]);

        $table->addForeignKey('user_id', 'users', 'id', [
            'delete' => 'cascade',
            'update' => 'cascade',
        ]);

        $table->create();
    }
}
