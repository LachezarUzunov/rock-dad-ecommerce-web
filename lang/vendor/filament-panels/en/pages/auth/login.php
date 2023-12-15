<?php

return [

    'title' => 'Вход',

    'heading' => 'Влез в акаунта си',

    'actions' => [

        'register' => [
            'before' => 'or',
            'label' => 'Създай нов акаунт',
        ],

        'request_password_reset' => [
            'label' => 'Забравена парола?',
        ],

    ],

    'form' => [

        'email' => [
            'label' => 'Имейл адрес',
        ],

        'password' => [
            'label' => 'Парола',
        ],

        'remember' => [
            'label' => 'Запомни ме',
        ],

        'actions' => [

            'authenticate' => [
                'label' => 'Влез',
            ],

        ],

    ],

    'messages' => [

        'failed' => 'Имейлът и паролата не съвпадат с нашите данни.',

    ],

    'notifications' => [

        'throttled' => [
            'title' => 'Твърде много неуспешни опити за влизане',
            'body' => 'Моля опитайте след :seconds секунди.',
        ],

    ],

];
