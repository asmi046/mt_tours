<?php

namespace App\Listeners;

use App\Events\PayOrderConfirmed;
use App\Mail\ClienPaySuccessMail;
use App\Mail\ManagerPaySuccessMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class PayOrderConfirmedEmailSendNotification implements ShouldQueue
{

    /**
     * Handle the event.
     */
    public function handle(PayOrderConfirmed $event): void
    {
        if (isset($event->pay_order->email)) {
            sleep(2);
            Mail::to($event->pay_order->email)->send(new ClienPaySuccessMail($event->pay_order));
            sleep(4);
            Mail::to(explode(",",config('consultation.mailadresat')))->send(new ManagerPaySuccessMail($event->pay_order));
        }
    }
}
