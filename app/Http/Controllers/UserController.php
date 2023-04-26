<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\User\StoreUser;
use App\Http\Requests\User\UpdateUser;
use App\Http\Requests\User\UpdatePassword;
use App\Repositories\User\UserRepositoryInterface;

class UserController extends Controller
{
    private $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function index()
    {
        return view('cms.user.index');
    }

    public function create()
    {
        return view('cms.user.create');
    }

    public function store(StoreUser $request)
    {

    }

    public function edit($user_id)
    {
        return view('cms.user.edit');
    }

    public function update(UpdateUser $request)
    {

    }

    public function delete($user_id)
    {
        return response()->json([
            "message" => "success",
        ],200);
    }

    public function updatePassword(UpdatePassword $request)
    {

    }

    public function getUserList(Request $request)
    {
        return response()->json([
            'data' => $this->userRepository->getAll()
        ],200);
    }
}
