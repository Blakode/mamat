<?php

namespace App\Providers;

use App\Models\User;
use App\Policies\UserPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
       User::class => UserPolicy::class, 
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

/*
-----------------------------------------------------------------
| Permissions User, Admin, Super Admin
-----------------------------------------------------------------
*/
        Gate::define('user_access', fn(User $user) => $user->role ===  'user'); 
        Gate::define('admin_access', fn(User $user) => $user->role === 'admin'); 
        Gate::define('sadmin_access', fn(User $user) => $user->role === 'sadmin'); 
        
    }
}
