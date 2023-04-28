<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use Illuminate\Support\Facades\App;
use App\Repositories\User\UserRepositoryInterface;

class View extends Component
{
    public $user;

    protected $listeners = ['viewData'];

    public function render()
    {
        return view('livewire.user.view');
    }

    public function viewData($id)
    {
        $userRepository = App::make(UserRepositoryInterface::class);
        $this->user = $userRepository->findUser($id);
    }
}
