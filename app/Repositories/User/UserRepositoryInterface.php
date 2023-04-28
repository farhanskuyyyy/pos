<?php

namespace App\Repositories\User;

interface UserRepositoryInterface
{
    public function getAll();

    public function findUser($id);

    public function insert($user);

    public function update($id,$user);

    public function delete($id);
}
