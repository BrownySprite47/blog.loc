<?php

return [
    'posts/index/index' => [
        'title' => 'Все посты',
        'css' => [
            CSS_DIR . 'posts/index/style.css',
        ],
        'js' => [
            JS_DIR . 'posts/index/script.js',
        ],
        'structure' => [
            'header'     => COMMON_TEMPLATES_DIR . 'header.phtml',
            'navigation' => COMMON_TEMPLATES_DIR . 'navigation.phtml',
            'content'    => TEMPLATES_DIR . 'posts/index/index.phtml',
            'pagination' => COMMON_TEMPLATES_DIR . 'pagination.phtml',
            'footer'     => COMMON_TEMPLATES_DIR . 'footer.phtml',
        ],
    ]
];