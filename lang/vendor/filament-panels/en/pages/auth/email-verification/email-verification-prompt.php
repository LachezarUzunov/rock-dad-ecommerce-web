<?php

return [

    'title' => 'Верифицирайте имейл адреса си',

    'heading' => 'Верифицирайте имейл адреса си',

    'actions' => [

        'resend_notification' => [
            'label' => 'Изпрати отново',
        ],

    ],

    'messages' => [
        'notification_not_received' => 'Не получихте съобщението, което изпратихме?',
        'notification_sent' => 'Изпратихме съобщение на имейл :email с инструкции как да верифицирате Вашия имейл адрес.',
    ],

    'notifications' => [

        'notification_resent' => [
            'title' => 'Изпратихме съобщението отново.',
        ],

        'notification_resend_throttled' => [
            'title' => 'Too many resend attempts',
            'body' => 'Моля опитайте отново след :seconds секунди.',
        ],

    ],

];
