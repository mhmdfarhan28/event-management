<?php

namespace App\Providers;

use App\Models\Attendee;
use App\Models\Event;
use Illuminate\Support\ServiceProvider;
use App\Models\User;
use Illuminate\Support\Facades\Gate;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Gate::define('update-event', function (User $user, Event $event) {
        //     return $user->id === $event->user_id;
        // });
        // Gate::define('delete-attendee', function (User $user, Event $event, Attendee $attendee) {
        //     return $user->id === $event->user_id ||
        //         $user->id === $attendee->user_id;
        // });
    }
}
