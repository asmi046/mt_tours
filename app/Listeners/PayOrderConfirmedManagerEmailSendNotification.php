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
        try {
            Mail::to(explode(",",config('consultation.mailadresat')))->send(new ManagerPaySuccessMail($event->pay_order));

        } catch (\Exception $e) {
            \Log::error('Failed to send manager email notification: ' . $e->getMessage());
            try {
                sleep(15);
                Mail::to(explode(",",config('consultation.mailadresat')))->send(new ManagerPaySuccessMail($event->pay_order));
            } catch (\Exception $e) {
                \Log::error('Retry also failed: ' . $e->getMessage());
                sleep(20);
                Mail::to(explode(",",config('consultation.mailadresat')))->send(new ManagerPaySuccessMail($event->pay_order));
            }

        }

    }
}
