<?php

namespace App\Providers;

<<<<<<< HEAD
use Illuminate\Support\Facades\Event;
=======
use Illuminate\Contracts\Events\Dispatcher as DispatcherContract;
>>>>>>> origin/master
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'App\Events\SomeEvent' => [
            'App\Listeners\EventListener',
        ],
    ];

    /**
<<<<<<< HEAD
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();
=======
     * Register any other events for your application.
     *
     * @param  \Illuminate\Contracts\Events\Dispatcher  $events
     * @return void
     */
    public function boot(DispatcherContract $events)
    {
        parent::boot($events);
>>>>>>> origin/master

        //
    }
}
