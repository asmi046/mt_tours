<?php

namespace App\Providers;

use App\Events\PayOrderRegister;
use App\Events\PayOrderConfirmed;
use Illuminate\Support\Facades\Event;
use Illuminate\Auth\Events\Registered;
use App\Listeners\PayOrderRegisterTgSendNotification;
use App\Listeners\PayOrderConfirmedTgSendNotification;
use App\Listeners\PayOrderConfirmedSmsSendNotification;
use App\Listeners\PayOrderRegisterEmailSendNotification;
use App\Listeners\PayOrderConfirmedEmailSendNotification;
use App\Listeners\PayOrderConfirmedManagerEmailSendNotification;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event to listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,

        ],

        PayOrderConfirmed::class => [
            PayOrderConfirmedEmailSendNotification::class,
            PayOrderConfirmedManagerEmailSendNotification::class,
            PayOrderConfirmedSmsSendNotification::class,
            PayOrderConfirmedTgSendNotification::class,
        ],
        PayOrderRegister::class => [
            PayOrderRegisterTgSendNotification::class,
            PayOrderRegisterEmailSendNotification::class,
        ],

    ];

    /**
     * Register any events for your application.
     */
    public function boot(): void
    {
        //
    }

    /**
     * Determine if events and listeners should be automatically discovered.
     */
    public function shouldDiscoverEvents(): bool
    {
        return false;
    }
}
