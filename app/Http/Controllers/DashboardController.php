<?php

namespace App\Http\Controllers;

use App\Models\MenuManagement;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $menus = MenuManagement::with('has_child')
            ->where('parent',null)
            ->whereHas('role_permission',function($q){
                $q->where('role_id',auth()->user()->role_id)->where('status',1);
            })->orderBy('sort','asc')->get();

        return view('cms.dashboard',compact('menus'));
    }
}
