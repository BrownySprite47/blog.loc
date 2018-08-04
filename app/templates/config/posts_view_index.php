<?php

return [
    'posts/view/index' => [
        'title' => 'Все посты',
        'css' => [
            CSS_DIR . 'posts/view/style.css',
        ],
        'js' => [
            JS_DIR . 'posts/view/script.js',
        ],
        'structure' => [
            'header'     => COMMON_TEMPLATES_DIR . 'header.phtml',
            'navigation' => COMMON_TEMPLATES_DIR . 'navigation.phtml',
            'content'    => TEMPLATES_DIR . 'posts/view/index.phtml',
            'footer'     => COMMON_TEMPLATES_DIR . 'footer.phtml',
        ],
    ]
];