<?php

namespace App\Http\Controllers;

use App\Models\MenuManagement;
use App\Repositories\MenuManagement\MenuRepositoryInterface;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('cms.dashboard');
    }
}
