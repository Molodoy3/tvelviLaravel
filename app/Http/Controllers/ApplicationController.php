<?php

namespace App\Http\Controllers;

use App\Data\ApplicationData;
use App\Rules\PhoneNumber;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ApplicationController extends Controller
{
    public function send(Request $request)
    {

        ApplicationData::validate($request->all());
        //проверяем телефон
        $request->validate([
            'tel' => [new PhoneNumber()],
        ]);

        $postData = $request->all();

        //отправка уведомлений в тг
        $tgToken = "6910541753:AAHYEC-0X-AWx8ApWw0HFWyCrghcToktpAI";
        $usersID_telegram = [
            'test' => 992083441,
            'ем' => 218969997
        ];
        $msg = "Новая заявка на сайте! \nИмя: " . $postData['firstName'] . " \nТелефон: " . $postData['tel'] . "\nСообщение: " . $postData['task'];
        foreach ($usersID_telegram as $user) {
            $url = "https://api.telegram.org/bot" . $tgToken . '/sendMessage?chat_id=' . $user . '&text=' . urlencode($msg);
            file_get_contents($url);
        }


        // Ваши данные
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
