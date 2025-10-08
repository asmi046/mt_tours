<?php

namespace App\Listeners;

use App\Events\PayOrderConfirmed;
use App\Mail\ClienPaySuccessMail;
use App\Mail\ManagerPaySuccessMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class PayOrderConfirmedManagerEmailSendNotification implements ShouldQueue
{

    /**
     * Handle the event.
     */
    public function handle(PayOrderConfirmed $event): void
    {
        Mail::to(explode(",",config('consultation.mailadresat')))->later(now()->addSeconds(13), new ManagerPaySuccessMail($event->pay_order));
    }
}
