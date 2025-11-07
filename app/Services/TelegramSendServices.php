<?php
namespace App\Services;

use App\Models\PayOrder;
use Illuminate\Support\Facades\Log;

class TelegramSendServices {

    public function pay_register(PayOrder $pay) {
        $message = "<b>💸В системе оплаты зарегистрирован заказ</b>\n\r";
        $message .= "<b>ID сайта:</b> ". $pay->uuid ."\n\r";
        $message .= "<b>Наименование:</b> ". $pay->name ."\n\r";
        $message .= "<b>Пасажиров:</b> ". $pay->client_count ."\n\r";
        $message .= "<b>Цена:</b> ". $pay->price ."₽\n\r";
        $message .= "<b>Дата тура/выезда:</b> ". $pay->start_data ."\n\r";
        $message .= "<b>Телефон для связи:</b> ". $pay->phone ."\n\r";
        $message .= "<b>E-mail для связи:</b> ". $pay->email ."\n\r";
        $message .= "<b>Ссылка на оплату в Т-банке:</b> ". $pay->payment_url ."\n\r";

        foreach ($pay->clients as $client) {
            $message .= "\n\r";
            $message .= "<b>Клиент:</b> ". $client->fio ."\n\r";
            $dr = date('Y-m-d', strtotime($client->dr));
            $message .= "<b>Дата рождения:</b> " . ($dr === '1970-01-01' ? 'Нужно уточнить' : $client->dr) . "\n\r";
            // $message .= "<b>Тип документа:</b> ". $client->document_type ."\n\r";
            $message .= "<b>Номер документа:</b> ". $client->document_number ."\n\r";
        }

        $this->send($message);
    }


    public function pay_confirmed(PayOrder $pay) {
        $message = "<b>✅Заказ оплачен</b>\n\r";
        $message .= "<b>ID сайта:</b> ". $pay->uuid ."\n\r";
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
