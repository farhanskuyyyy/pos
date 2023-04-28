<?php

namespace App\Repositories\User;

use App\Models\User;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use App\Repositories\User\UserRepositoryInterface;

class UserRepository implements UserRepositoryInterface
{
    public function getAll()
    {
        return User::all()
            ->map(function ($user) {
                return (object)[
                    "id" => $user->id,
                    "name" => $user->name ?? ' - ',
                    "email" => $user->email ?? ' - ',
                    "status" => $user->status ? 'active' : 'inactive',
                    "role" => $user->role->name ?? ' - '
                ];
            });
    }

    public function findUser($id)
    {
        return User::where('id', $id)->first();
    }

    public function insert($user)
    {
        try {
            User::insert($user);
            return true;
        } catch (\Throwable $th) {
            return false;
        }
    }

    public function update($id,$user)
    {
        try {
            User::where('id',$id)->update($user);
            return true;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }

    }

    public function delete($id)
    {
        try {
            User::where('id',$id)->delete();
            return true;
        } catch (\Throwable $th) {
            return false;
        }
    }
}
