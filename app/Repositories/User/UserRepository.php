<?php

namespace App\Repositories\User;

use App\Models\User;
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
}
