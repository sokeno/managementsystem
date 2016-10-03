<?php

namespace App\Providers;

<<<<<<< HEAD
use Illuminate\Support\Facades\Gate;
=======
use Illuminate\Contracts\Auth\Access\Gate as GateContract;
>>>>>>> origin/master
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
<<<<<<< HEAD
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
=======
     * Register any application authentication / authorization services.
     *
     * @param  \Illuminate\Contracts\Auth\Access\Gate  $gate
     * @return void
     */
    public function boot(GateContract $gate)
    {
        $this->registerPolicies($gate);
>>>>>>> origin/master

        //
    }
}
