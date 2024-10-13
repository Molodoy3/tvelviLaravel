<?php

namespace App\Http\Controllers;

use App\Data\ApplicationData;
use App\Data\BigApplicationData;
use App\Data\ReviewData;
use App\Models\Review;
use App\Rules\PhoneNumber;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ApplicationController extends Controller
{
    public $tgToken = "6910541753:AAHYEC-0X-AWx8ApWw0HFWyCrghcToktpAI";
    public $usersID_telegram = [
        'test' => 992083441,
        'ем' => 218969997
    ];
    public function sendReview(Review $review)
    {
        $msg = "Новый отзыв на сайте! \nИмя: " . $review['name'] . " \nE-mail: " . $review  ['email'] . "\nСообщение: " . $review['message']
            . "\nid для поиска в БД: " . $review['id']
            . "\n\nне забудьте одобрить отзыв для вывода на сайте! (поставить approval в значение 1";
        foreach ($this->usersID_telegram as $user) {
            $url = "https://api.telegram.org/bot" . $this->tgToken . '/sendMessage?chat_id=' . $user . '&text=' . urlencode($msg);
            file_get_contents($url);
        }
    }
    public function bigApplicationSend(Request $request)
    {
        BigApplicationData::validate($request);
        //проверяем телефон
        $request->validate([
            'tel' => [new PhoneNumber()],
        ]);
        $msg = "Новая большая заявка на сайте! \n\nИмя: " . $request['name'] . " \nТелефон: " . $request  ['tel'] . "\nE-mail: " . $request  ['email'] . "\nКомпания: " . $request  ['company'] . "\nСообщение: " . $request['message'];
        foreach ($this->usersID_telegram as $user) {
            $url = "https://api.telegram.org/bot" . $this->tgToken . '/sendMessage?chat_id=' . $user . '&text=' . urlencode($msg);
            file_get_contents($url);
        }

        return redirect()->route('successfulShipment');
    }
    public function send(Request $request)
    {

        ApplicationData::validate($request->all());
        //проверяем телефон
        $request->validate([
            'tel' => [new PhoneNumber()],
        ]);

        $postData = $request->all();

        //отправка уведомлений в тг

        $msg = "Новая заявка на сайте! \nИмя: " . $postData['firstName'] . " \nТелефон: " . $postData['tel'] . "\nСообщение: " . $postData['task'];
        foreach ($this->usersID_telegram as $user) {
            $url = "https://api.telegram.org/bot" . $this->tgToken . '/sendMessage?chat_id=' . $user . '&text=' . urlencode($msg);
            file_get_contents($url);
        }


        // далее для notion
        $notionToken = 'secret_Bfwl4GAd24Dvx0nE7SBidfjiMXqyobzam71HOxHKBa';
        $databaseId = '4cdc80ac67244f9f9ba0a9b4bd13f06e';


        // URL для запроса
        $url = "https://api.notion.com/v1/pages";

        // Данные для нового элемента
        $data = [
            'parent' => [
                'database_id' => $databaseId,
            ],
            'properties' => [
                'Имя' => [
                    'title' => [
                        [
                            'text' => [
                                'content' => $postData['firstName'],
                            ],
                        ],
                    ],
                ],
                'Контактный номер телефона' => [
                    'phone_number' => $postData['tel']
                ],
                'Комментарии (Задача из формы)' => [
                    'rich_text' => [[
                        'text' => [
                            'content' => $postData['task'],
                        ],
                    ]],
                ]
            ]
        ];

        // Инициализация cURL
        $ch = curl_init($url);

        // Установка опций cURL
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Authorization: Bearer ' . $notionToken,
            'Content-Type: application/json',
            'Notion-Version: 2022-06-28',
        ]);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));

        // Выполнение запроса и получение ответа
        $response = curl_exec($ch);
        curl_close($ch);

        return redirect()->route('successfulShipment');
    }

    public function successfulShipment()
    {
        return Inertia::render('Main/SuccessfulShipment', []);
    }
}
