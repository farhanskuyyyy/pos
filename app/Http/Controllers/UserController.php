<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
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

    public function delete($user_id)
    {
        $findUser = $this->userRepository->findUser($user_id);
        if ($findUser == null) {
            $delete = false;
        }else{
            if ($findUser->image != null) {
                if (File::exists(public_path('storage/profile/'.$findUser->image))) {
                    File::delete(public_path('storage/profile/'.$findUser->image));
                }
            }
            $delete = $this->userRepository->delete($user_id);
        }
        return response()->json([
            "message" => ($delete) ? "success" : "failed",
            "status"  => ($delete) ? true : false
        ],($delete) ? 200 : 400);
    }

    public function getUserList(Request $request)
    {
        return response()->json([
            'data' => $this->userRepository->getAll()
        ],200);
    }
}
