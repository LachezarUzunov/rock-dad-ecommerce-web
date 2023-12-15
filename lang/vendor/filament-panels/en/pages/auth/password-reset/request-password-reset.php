<?php

return [

    'title' => 'Reset your password',

    'heading' => 'Забравена парола?',

    'actions' => [

        'login' => [
            'label' => 'back to login',
        ],

    ],

    'form' => [

        'email' => [
            'label' => 'Имейл адрес',
        ],

        'actions' => [

            'request' => [
                'label' => 'Изпрати имейл',
            ],

        ],

    ],

    'notifications' => [

        'throttled' => [
            'title' => 'Too many requests',
            'body' => 'Моля опитайте отново след :seconds секунди.',
        ],

    ],

];
