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

    public $tries = 5;
    public $backoff = [30, 60, 120, 300, 500];

    /**
     * Handle the event.
     */
    public function handle(PayOrderConfirmed $event): void
    {
        Mail::to(explode(",",config('consultation.mailadresat')))->send(new ManagerPaySuccessMail($event->pay_order));
    }

    public function failed(\Throwable $exception): void
    {
        \Log::error('Все попытки отправки уведомления менеджера не удались: ' . $exception->getMessage());
    }
}
