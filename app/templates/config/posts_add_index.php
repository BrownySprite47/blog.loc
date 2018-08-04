<?php

return [
    'posts/add/index' => [
        'title' => 'Все посты',
        'css' => [
            CSS_DIR . 'posts/add/style.css',
        ],
        'js' => [
            JS_DIR . 'posts/add/script.js',
        ],
        'structure' => [
            'header'     => COMMON_TEMPLATES_DIR . 'header.phtml',
            'navigation' => COMMON_TEMPLATES_DIR . 'navigation.phtml',
            'content'    => TEMPLATES_DIR . 'posts/add/index.phtml',
            'footer'     => COMMON_TEMPLATES_DIR . 'footer.phtml',
        ],
    ]
];