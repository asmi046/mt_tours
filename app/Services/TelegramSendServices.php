<?php
namespace App\Services;

use App\Models\PayOrder;

class TelegramSendServices {

    public function pay_register(PayOrder $pay) {
        $message = "<b>💸В системе оплаты зарегистрирован заказ</b>\n\r";
        $message .= "<b>id:</b> ". $pay->uuid ."\n\r";
        $message .= "<b>Наименование:</b> ". $pay->name ."\n\r";
        $message .= "<b>Пасажиров:</b> ". $pay->client_count ."\n\r";
        $message .= "<b>Цена:</b> ". $pay->price ."₽\n\r";
        $message .= "<b>Дата тура/выезда:</b> ". $pay->start_data ."\n\r";
        $message .= "<b>Ссылка на оптату в Т-банке:</b> ". $pay->payment_url ."\n\r";

        $this->send($message);
    }

    public function pay_confirmed(PayOrder $pay) {
        $message = "<b>✅Заказ оплачен</b>\n\r";
        $message .= "<b>id:</b> ". $pay->uuid ."\n\r";
        $message .= "<b>Наименование:</b> ". $pay->name ."\n\r";
        $message .= "<b>Пасажиров:</b> ". $pay->client_count ."\n\r";
        $message .= "<b>Цена:</b> ". $pay->price ."₽\n\r";
        $message .= "<b>Дата тура/выезда:</b> ". $pay->start_data ."\n\r";
        $message .= "<b>Ссылка на билет клиента:</b> ". $pay->ticket_short_lnk ."\n\r";

        $this->send($message);
    }

    public function send(string $text) {
        $t_token = config('telegram.tg_token');
        $arr_chat = config('telegram.tg_coresp');

        $output = "";
        if($arr_chat) {

            $output = "";
            $arr_chat = explode(",",$arr_chat);
            $ch = curl_init();

            for ($i = 0; $i<count($arr_chat); $i++) {
                curl_setopt_array(
                    $ch,
                    array(
                        CURLOPT_URL => 'https://api.telegram.org/bot' . $t_token . '/sendMessage',
                        CURLOPT_POST => TRUE,
                        CURLOPT_RETURNTRANSFER => TRUE,
                        CURLOPT_TIMEOUT => 10,
                        CURLOPT_POSTFIELDS => array(
                            'chat_id' => trim($arr_chat[$i]),
                            'text' => $text,
                            'parse_mode' => "HTML",
                        ),
                    )
                );

                $output = curl_exec($ch);
            }
        }

        return $output;
    }
}
