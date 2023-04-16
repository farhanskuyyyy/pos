<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MenuManagement;

class UserController extends Controller
{
    public function index()
    {
        return view('cms.user.index');
    }
}
