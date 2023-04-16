<?php

namespace App\Repositories\MenuManagement;

interface MenuRepositoryInterface
{
    public function all();

    public function findMenu($id);

    public function sideBarMenu($role_id);

    public function checkRoleHasMenu($role_id,$route_name);
}
