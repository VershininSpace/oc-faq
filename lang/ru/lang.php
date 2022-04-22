<?php return [
    'plugin' => [
        'name'        => 'Faq',
        'description' => 'Ответы на вопросы пользователя',
        'author'      => 'VershininSpace'
    ],
    'components' => [
        'faqinfo' => [
            'name'        => 'Component FaqInfo',
            'description' => 'Отображает список вопросов'
        ]
    ],
    'models' => [
        'category' => [
            'columns'    => [
                'id'         => 'ID',
                'title'      => 'Название'
            ],
            'fields'    => [
                'title'         => 'Название',
                'slug'   => 'Slug'
            ],
        ],
        'question' => [
            'name'         => 'Вопрос',
            'columns'      => [
                'id'         => 'ID',
                'title'       => 'Название'
            ],
            'fields'        => [
                'title'         => 'Название',
                'slug'       => 'Slug',
                'category'    => 'Категория',
                'description' => 'Описание'
            ],
        ],
    ],
    'menu'        => [
        'faq'                      => 'FAQ',
        'categories'               => 'Категории',
        'questions'                   => 'Вопросы'
    ],
    'category'      => [
        'name'                            => 'Категории',
        'list_title'                      => 'Категории',
        'reorder'                         => 'Категории'
    ],
    'question'      => [
        'name'                            => 'Вопроса',
        'list_title'                      => 'Вопросы',
        'reorder'                         => 'Вопросы'
    ]
];
