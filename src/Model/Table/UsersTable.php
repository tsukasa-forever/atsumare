<?php


namespace App\Model\Table;


use App\Model\Entity\User;

class UsersTable extends AppTable
{
    public function initialize(array $config): void
    {
        parent::initialize($config); // TODO: Change the autogenerated stub
        $this->addBehavior('Timestamp');
    }

    /**
     * @param string $u_id
     * @return User
     */
    public function getByUId(string $u_id)
    {
        /** @var User $user */
        $user = $this->find()->where(['Users.u_id' => $u_id])->first();
        return $user;
    }
}
