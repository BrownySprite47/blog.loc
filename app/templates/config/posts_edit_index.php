<?php

return [
    'posts/edit/index' => [
        'title' => 'Все посты',
        'css' => [
            CSS_DIR . 'posts/edit/style.css',
        ],
        'js' => [
            JS_DIR . 'posts/edit/script.js',
        ],
        'structure' => [
            'header'     => COMMON_TEMPLATES_DIR . 'header.phtml',
            'navigation' => COMMON_TEMPLATES_DIR . 'navigation.phtml',
            'content'    => TEMPLATES_DIR . 'posts/edit/index.phtml',
            'footer'     => COMMON_TEMPLATES_DIR . 'footer.phtml',
        ],
    ]
];