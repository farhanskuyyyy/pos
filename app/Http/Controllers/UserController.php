<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MenuManagement;

class UserController extends Controller
{
    public function index()
    {
        $menus = MenuManagement::with('has_child')
            ->where('parent',null)
            ->whereHas('role_permission',function($q){
                $q->where('role_id',auth()->user()->role_id)->where('status',1);
            })->orderBy('sort','asc')->get();
        return view('cms.user.index',compact('menus'));
    }
}
