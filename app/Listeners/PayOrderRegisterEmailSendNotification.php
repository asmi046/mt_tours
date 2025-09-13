<?php

namespace App\Listeners;

use App\Mail\PayRegisterMail;
use App\Events\PayOrderRegister;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use App\Services\TelegramSendServices;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class PayOrderRegisterEmailSendNotification implements ShouldQueue
{
    /**
     * Handle the event.
     */
    public function handle(PayOrderRegister $event): void
    {
        Mail::to(explode(",",config('consultation.mailadresat')))->send(new PayRegisterMail($event->pay_order));
    }
}
