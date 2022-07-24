<?php

namespace App\Providers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class BladeServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::if('isPermission', function ($permission) {
            $user = Auth::user()->with('roles.modules.getAllPermissions')->first();
            $permissions = collect($user->roles[0]->modules->getAllPermissions->pluck('name'));
            $isTrue = $permissions->search($permission);
            return $permissions->search($permission) != false;
        });


        Blade::if('isAnyPermissions', function ($arr) {
            $user = Auth::user()->with('roles.modules.getAllPermissions')->first();
            $permissions = collect($user->roles[0]->modules->getAllPermissions->pluck('name'));
            $arr = explode('|', $arr);
            foreach ($arr as $arr) {
                if ($permissions->search($arr) != false) {
                    return true;
                    break;
                }
            }
        });
    }
}
