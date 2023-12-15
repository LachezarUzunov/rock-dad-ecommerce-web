<?php

return [

    'column_toggle' => [

        'heading' => 'Колони',

    ],

    'columns' => [

        'text' => [
            'more_list_items' => 'и :count повече',
        ],

    ],

    'fields' => [

        'bulk_select_page' => [
            'label' => 'Select/deselect all items for bulk actions.',
        ],

        'bulk_select_record' => [
            'label' => 'Select/deselect item :key for bulk actions.',
        ],

        'search' => [
            'label' => 'Търси',
            'placeholder' => 'Търси',
            'indicator' => 'Търси',
        ],

    ],

    'summary' => [

        'heading' => 'Summary',

        'subheadings' => [
            'all' => 'Всички :label',
            'group' => ':group summary',
            'page' => 'Тази страница',
        ],

        'summarizers' => [

            'average' => [
                'label' => 'Средно',
            ],

            'count' => [
                'label' => 'Брой',
            ],

            'sum' => [
                'label' => 'Сума',
            ],

        ],

    ],

    'actions' => [

        'disable_reordering' => [
            'label' => 'Finish reordering records',
        ],

        'enable_reordering' => [
            'label' => 'Reorder records',
        ],

        'filter' => [
            'label' => 'Филтър',
        ],

        'group' => [
            'label' => 'Група',
        ],

        'open_bulk_actions' => [
            'label' => 'Bulk actions',
        ],

        'toggle_columns' => [
            'label' => 'Toggle columns',
        ],

    ],

    'empty' => [

        'heading' => 'No :model',

        'description' => 'Създай :model за начало.',

    ],

    'filters' => [

        'actions' => [

            'remove' => [
                'label' => 'Премахни филтър',
            ],

            'remove_all' => [
                'label' => 'Премахни всички филтри',
                'tooltip' => 'Премахни всички филтри',
            ],

            'reset' => [
                'label' => 'Reset',
            ],

        ],

        'heading' => 'Филтри',

        'indicator' => 'Приложени филтри',

        'multi_select' => [
            'placeholder' => 'Всички',
        ],

        'select' => [
            'placeholder' => 'Всички',
        ],

        'trashed' => [

            'label' => 'Изтрити записи',

            'only_trashed' => 'Само изтрити записи',

            'with_trashed' => 'С изтрити записи',

            'without_trashed' => 'Без изтрити записи',

        ],

    ],

    'grouping' => [

        'fields' => [

            'group' => [
                'label' => 'Групирай по',
                'placeholder' => 'Групирай по',
            ],

            'direction' => [

                'label' => 'Групирай в',

                'options' => [
                    'asc' => 'възходящ ред',
                    'desc' => 'низходящ ред',
                ],

            ],

        ],

    ],

    'reorder_indicator' => 'Drag and drop the записи into order.',

    'selection_indicator' => [

        'selected_count' => '1 record selected|:count записи selected',

        'actions' => [

            'select_all' => [
                'label' => 'Избери всички :count',
            ],

            'deselect_all' => [
                'label' => 'Деизбери всички',
            ],

        ],

    ],

    'sorting' => [

        'fields' => [

            'column' => [
                'label' => 'Сортирай по',
            ],

            'direction' => [

                'label' => 'Сортирай в',

                'options' => [
                    'asc' => 'Възходящ ред',
                    'desc' => 'Низходящ ред',
                ],

            ],

        ],

    ],

];
