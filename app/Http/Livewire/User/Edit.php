<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use App\Repositories\Role\RoleRepositoryInterface;
use App\Repositories\User\UserRepositoryInterface;

class Edit extends Component
{
    use WithFileUploads;

    public $user;
    public $roles;

    public $name;
    public $email;
    public $status;
    public $role;
    public $image;
    public $errorMsg;

    protected $rules = [
        'name' => 'required',
        'email' => 'required|email',
        'status' => 'required',
        'role' => 'required',
        'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ];

    protected $listeners = ['editData'];

    public function render()
    {
        $roleRepository = App::make(RoleRepositoryInterface::class);
        $this->roles = $roleRepository->getSelectRole();
        return view('livewire.user.edit');
    }

    public function editData($id)
    {
        $userRepository = App::make(UserRepositoryInterface::class);
        $this->user = $userRepository->findUser($id);
        $this->name = $this->user->name;
        $this->email = $this->user->email;
        $this->status = $this->user->status;
        $this->role = $this->user->role_id;
    }

    public function submit()
    {
        $this->errorMsg = "";

        $user = $this->validate();
        $userRepository = App::make(UserRepositoryInterface::class);

        if ($this->role == 1) {
            $this->errorMsg = "Cannot Update User with that Role";
            return false;
        }

        $update = [
            "name" => $this->name,
            "email" => $this->email,
            "role_id" => $this->role,
            "status" => $this->status,
        ];

        if ($this->image) {
            $imageName = time().$this->image->getClientOriginalName();
            $update["image"] = $imageName ?? null;
        }

        $update = $userRepository->update($this->user->id,$update);

        if (!$update) {
            $this->errorMsg = "Failed Update User";
            return false;
        }

        if ($this->image) {
            // delete image before
            if ($this->user->image != null) {
                if (File::exists(public_path('storage/profile/'.$this->user->image))) {
                    File::delete(public_path('storage/profile/'.$this->user->image));
                }
            }

            // store new image
            $this->image->storeAs('public/profile', $imageName);
        }

        $this->name = '';
        $this->email = '';
        $this->role = '';
        $this->status = '';
        $this->image = '';
        $this->dispatchBrowserEvent('successEdit');
        return true;
    }
}
