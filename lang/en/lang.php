<?php return [
    'plugin' => [
        'name'        => 'Faq',
        'description' => 'To answer user questions',
        'author'      => 'VershininSpace'
    ],
    'components' => [
        'faqinfo' => [
            'name'        => 'Component FaqInfo',
            'description' => 'To display a list of questions'
        ]
    ],
    'models' => [
        'category' => [
            'columns'    => [
                'id'         => 'ID',
                'title'      => 'Title'
            ],
            'fields'    => [
                'title'         => 'Title',
                'slug'   => 'Slug'
            ],
        ],
        'question' => [
            'name'         => 'Question',
            'columns'      => [
                'id'         => 'ID',
                'title'       => 'Title'
            ],
            'fields'        => [
                'title'         => 'Title',
                'slug'       => 'Slug',
                'category'    => 'Category',
                'description' => 'Description'
            ],
        ],
    ],
    'menu'        => [
        'faq'                      => 'FAQ',
        'categories'               => 'Categories',
        'questions'                   => 'Questions'
    ],
    'category'      => [
        'name'                            => 'Category',
        'list_title'                      => 'Categories',
        'reorder'                         => 'Categories'
    ],
    'question'      => [
        'name'                            => 'Question',
        'list_title'                      => 'Questions',
        'reorder'                         => 'Questions'
    ],
];
