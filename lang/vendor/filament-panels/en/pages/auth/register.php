<?php

return [

    'title' => 'Регистрация',

    'heading' => 'Създай акаунт',

    'actions' => [

        'login' => [
            'before' => 'or',
            'label' => 'влез в своя акаунт',
        ],

    ],

    'form' => [

        'email' => [
            'label' => 'Имейл адрес',
        ],

        'name' => [
            'label' => 'Име',
        ],

        'password' => [
            'label' => 'Парола',
            'validation_attribute' => 'парола',
        ],

        'password_confirmation' => [
            'label' => 'Потвърди парола',
        ],

        'actions' => [

            'register' => [
                'label' => 'Регистрирай се',
            ],

        ],

    ],

    'notifications' => [

        'throttled' => [
            'title' => 'Твърде много неуспешни опити за регистрация',
            'body' => 'Моля опитайте отново след :seconds секунди.',
        ],

    ],

];
