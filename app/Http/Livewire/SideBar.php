<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\App;
use App\Repositories\User\UserRepositoryInterface;
use App\Repositories\MenuManagement\MenuRepositoryInterface;

class SideBar extends Component
{
    public function render()
    {
        $userRepository = App::make(UserRepositoryInterface::class);
        $user = $userRepository->findUser(auth()->user()->id);

        $menuRepository = App::make(MenuRepositoryInterface::class);
        $menus = $menuRepository->sideBarMenu($user->role_id);
        return view('livewire.side-bar',compact('menus'));
    }
}
