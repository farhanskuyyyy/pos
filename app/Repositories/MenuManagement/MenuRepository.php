<?php

namespace App\Repositories\MenuManagement;

use App\Models\MenuManagement;
use App\Repositories\MenuManagement\MenuRepositoryInterface;

class MenuRepository implements MenuRepositoryInterface
{
    public function all()
    {
        return MenuManagement::all();
    }

    public function findMenu($id)
    {
        return MenuManagement::where('id'. $id)->first();
    }

    public function sideBarMenu($role_id)
    {
        return $menus = MenuManagement::with('has_child')
            ->where('parent',null)
            ->whereHas('role_permission',function($q) use($role_id){
                $q->where('role_id',$role_id)->where('status',1);
            })->orderBy('sort','asc')->get();
    }

    public function checkRoleHasMenu($role_id,$route_name)
    {
        $menu = MenuManagement::where('code',$route_name)
        ->whereHas('role_permission',function($q) use($role_id){
            $q->where('role_id',$role_id)->where('status',1);
        })->first();

        return ($menu) ? true : false ;
    }
}
