<?php

namespace App\Http\Middleware;

use App\Repositories\MenuManagement\MenuRepositoryInterface;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Symfony\Component\HttpFoundation\Response;
use App\Repositories\User\UserRepositoryInterface;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $routeName = request()->route()->getName();
        if ($routeName != 'home') {
            $userRepository = App::make(UserRepositoryInterface::class);
            $user = $userRepository->findUser(auth()->user()->id);

            $menuRepository = App::make(MenuRepositoryInterface::class);
            $isGranted = $menuRepository->checkRoleHasMenu($user->role_id,$routeName);

            if (!$isGranted) {
                abort(403);
            }
        }

        return $next($request);
    }
}
