<?php

return [

    'label' => 'Pagination navigation',

    'overview' => '{1} Showing 1 result|[2,*] Showing :first to :last of :total results',

    'fields' => [

        'records_per_page' => [

            'label' => 'На страница',

            'options' => [
                'all' => 'Всички',
            ],

        ],

    ],

    'actions' => [

        'go_to_page' => [
            'label' => 'Отиди на страница :page',
        ],

        'next' => [
            'label' => 'Следваща',
        ],

        'previous' => [
            'label' => 'Предишна',
        ],

    ],

];
