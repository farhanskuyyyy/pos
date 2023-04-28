<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use App\Repositories\Role\RoleRepositoryInterface;
use App\Repositories\User\UserRepositoryInterface;

class Create extends Component
{
    use WithFileUploads;

    public $roles;

    public $name;
    public $email;
    public $status;
    public $role;
    public $image;
    public $errorMsg;

    protected $rules = [
        'name' => 'required',
        'email' => 'required|email|unique:users,email',
        'status' => 'required',
        'role' => 'required',
        'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ];

    public function render()
    {
        $roleRepository = App::make(RoleRepositoryInterface::class);
        $this->roles = $roleRepository->getSelectRole();
        return view('livewire.user.create');
    }

    public function submit()
    {
        $this->errorMsg = "";

        $user = $this->validate();
        $userRepository = App::make(UserRepositoryInterface::class);

        if ($this->role == 1) {
            $this->errorMsg = "Cannot Create User with that Role";
            return false;
        }

        if ($this->image) {
            $imageName = time().$this->image->getClientOriginalName();
            $this->image->storeAs('public/profile', $imageName);
        }

        $create = $userRepository->insert([
            "name" => $this->name,
            "email" => $this->email,
            "role_id" => $this->role,
            "status" => $this->status,
            "image" => $imageName ?? null,
            "password" => Hash::make('password'),
        ]);

        if (!$create) {
            $this->errorMsg = "Failed Create User";
            return false;
        }

        $this->name = '';
        $this->email = '';
        $this->role = '';
        $this->status = '';
        $this->dispatchBrowserEvent('successCreate');
        return true;
    }
}
