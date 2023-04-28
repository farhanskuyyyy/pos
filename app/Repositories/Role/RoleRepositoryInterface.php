<?php

namespace App\Repositories\Role;

interface RoleRepositoryInterface
{
    public function getAll();

    public function getSelectRole();

    public function findRole($id);
}
