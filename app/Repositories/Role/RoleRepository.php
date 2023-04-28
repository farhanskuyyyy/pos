<?php

namespace App\Repositories\Role;

use App\Models\Role;
use App\Repositories\Role\RoleRepositoryInterface;

class RoleRepository implements RoleRepositoryInterface
{
    public function getAll()
    {
        return Role::all();
    }

    public function getSelectRole()
    {
        return Role::whereNotIn('code',['super_admin'])->get();
    }

    public function findRole($id)
    {
        return Role::where('id', $id)->first();
    }
}
