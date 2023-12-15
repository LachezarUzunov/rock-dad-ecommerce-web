<?php

return [

    'builder' => [

        'actions' => [

            'clone' => [
                'label' => 'Клонирай',
            ],

            'add' => [
                'label' => 'Добави към :label',
            ],

            'add_between' => [
                'label' => 'Insert between blocks',
            ],

            'delete' => [
                'label' => 'Изтрий',
            ],

            'reorder' => [
                'label' => 'Премести',
            ],

            'move_down' => [
                'label' => 'Премести надолу',
            ],

            'move_up' => [
                'label' => 'Премести нагоре',
            ],

            'collapse' => [
                'label' => 'Затвори',
            ],

            'expand' => [
                'label' => 'Отвори',
            ],

            'collapse_all' => [
                'label' => 'Затвори всички',
            ],

            'expand_all' => [
                'label' => 'Отвори всички',
            ],

        ],

    ],

    'checkbox_list' => [

        'actions' => [

            'deselect_all' => [
                'label' => 'Деизбери всички',
            ],

            'select_all' => [
                'label' => 'ИЗбери всички',
            ],

        ],

    ],

    'file_upload' => [

        'editor' => [

            'actions' => [

                'cancel' => [
                    'label' => 'Затвори',
                ],

                'drag_crop' => [
                    'label' => 'Drag mode "crop"',
                ],

                'drag_move' => [
                    'label' => 'Drag mode "move"',
                ],

                'flip_horizontal' => [
                    'label' => 'Flip image horizontal',
                ],

                'flip_vertical' => [
                    'label' => 'Flip image vertical',
                ],

                'move_down' => [
                    'label' => 'Премести изображението надолу',
                ],

                'move_left' => [
                    'label' => 'Премести изображението наляво',
                ],

                'move_right' => [
                    'label' => 'Премести изображението надясно',
                ],

                'move_up' => [
                    'label' => 'Премести изображението нагоре',
                ],

                'reset' => [
                    'label' => 'Reset',
                ],

                'rotate_left' => [
                    'label' => 'Завърти изображението наляво',
                ],

                'rotate_right' => [
                    'label' => 'Завърти изображението надясно',
                ],

                'set_aspect_ratio' => [
                    'label' => 'Set aspect ratio to :ratio',
                ],

                'save' => [
                    'label' => 'Запаси',
                ],

                'zoom_100' => [
                    'label' => 'Zoom image to 100%',
                ],

                'zoom_in' => [
                    'label' => 'Zoom in',
                ],

                'zoom_out' => [
                    'label' => 'Zoom out',
                ],

            ],

            'fields' => [

                'height' => [
                    'label' => 'Височина',
                    'unit' => 'пиксели',
                ],

                'rotation' => [
                    'label' => 'Завъртане',
                    'unit' => 'градуси',
                ],

                'width' => [
                    'label' => 'Широчина',
                    'unit' => 'пиксели',
                ],

                'x_position' => [
                    'label' => 'X',
                    'unit' => 'px',
                ],

                'y_position' => [
                    'label' => 'Y',
                    'unit' => 'px',
                ],

            ],

            'aspect_ratios' => [

                'label' => 'Aspect ratios',

                'no_fixed' => [
                    'label' => 'Free',
                ],

            ],

        ],

    ],

    'key_value' => [

        'actions' => [

            'add' => [
                'label' => 'Add row',
            ],

            'delete' => [
                'label' => 'Delete row',
            ],

            'reorder' => [
                'label' => 'Reorder row',
            ],

        ],

        'fields' => [

            'key' => [
                'label' => 'Key',
            ],

            'value' => [
                'label' => 'Value',
            ],

        ],

    ],

    'markdown_editor' => [

        'toolbar_buttons' => [
            'attach_files' => 'Attach files',
            'blockquote' => 'Blockquote',
            'bold' => 'Bold',
            'bullet_list' => 'Bullet list',
            'code_block' => 'Code block',
            'heading' => 'Heading',
            'italic' => 'Italic',
            'link' => 'Link',
            'ordered_list' => 'Numbered list',
            'redo' => 'Redo',
            'strike' => 'Strikethrough',
            'table' => 'Table',
            'undo' => 'Undo',
        ],

    ],

    'repeater' => [

        'actions' => [

            'add' => [
                'label' => 'Add to :label',
            ],

            'delete' => [
                'label' => 'Delete',
            ],

            'clone' => [
                'label' => 'Clone',
            ],

            'reorder' => [
                'label' => 'Move',
            ],

            'move_down' => [
                'label' => 'Move down',
            ],

            'move_up' => [
                'label' => 'Move up',
            ],

            'collapse' => [
                'label' => 'Collapse',
            ],

            'expand' => [
                'label' => 'Expand',
            ],

            'collapse_all' => [
                'label' => 'Collapse all',
            ],

            'expand_all' => [
                'label' => 'Expand all',
            ],

        ],

    ],

    'rich_editor' => [

        'dialogs' => [

            'link' => [

                'actions' => [
                    'link' => 'Link',
                    'unlink' => 'Unlink',
                ],

                'label' => 'URL',

                'placeholder' => 'Enter a URL',

            ],

        ],

        'toolbar_buttons' => [
            'attach_files' => 'Attach files',
            'blockquote' => 'Blockquote',
            'bold' => 'Bold',
            'bullet_list' => 'Bullet list',
            'code_block' => 'Code block',
            'h1' => 'Title',
            'h2' => 'Heading',
            'h3' => 'Subheading',
            'italic' => 'Italic',
            'link' => 'Link',
            'ordered_list' => 'Numbered list',
            'redo' => 'Redo',
            'strike' => 'Strikethrough',
            'underline' => 'Underline',
            'undo' => 'Undo',
        ],

    ],

    'select' => [

        'actions' => [

            'create_option' => [

                'modal' => [

                    'heading' => 'Create',

                    'actions' => [

                        'create' => [
                            'label' => 'Create',
                        ],

                        'create_another' => [
                            'label' => 'Create & create another',
                        ],

                    ],

                ],

            ],

            'edit_option' => [

                'modal' => [

                    'heading' => 'Edit',

                    'actions' => [

                        'save' => [
                            'label' => 'Save',
                        ],

                    ],

                ],

            ],

        ],

        'boolean' => [
            'true' => 'Yes',
            'false' => 'No',
        ],

        'loading_message' => 'Loading...',

        'max_items_message' => 'Only :count can be selected.',

        'no_search_results_message' => 'No options match your search.',

        'placeholder' => 'Select an option',

        'searching_message' => 'Searching...',

        'search_prompt' => 'Start typing to search...',

    ],

    'tags_input' => [
        'placeholder' => 'New tag',
    ],

    'wizard' => [

        'actions' => [

            'previous_step' => [
                'label' => 'Back',
            ],

            'next_step' => [
                'label' => 'Next',
            ],

        ],

    ],

];
