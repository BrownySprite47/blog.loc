<?php

define('CSS_DIR', '/assets/css');
define('JS_DIR', '/assets/js');

define('TEMPLATES_DIR', __DIR__ . '/../views/templates/');
define('LAYOUTS_DIR', __DIR__ . '/../views/layouts/');

return [
    'index/index/index' => [
        'title' => 'Все посты',
        'css' => [
            CSS_DIR . '/index/index/style.css',
        ],
        'js' => [
            JS_DIR . '/index/index/script.js',
        ],
        'structure' => [
            'header'     => LAYOUTS_DIR . 'header.phtml',
            'navigation' => LAYOUTS_DIR . 'navigation.phtml',
            'content'    => TEMPLATES_DIR . 'index/index/index.phtml',
            'pagination' => LAYOUTS_DIR . 'pagination.phtml',
            'footer'     => LAYOUTS_DIR . 'footer.phtml',
        ],
    ],
    'news/index/index' => [
        'title' => 'Все новости',
        'css' => [
            CSS_DIR . '/news/index/style.css',
        ],
        'js' => [
            JS_DIR . '/news/index/script.js',
        ],
        'structure' => [
            'header'     => LAYOUTS_DIR . 'header.phtml',
            'navigation' => LAYOUTS_DIR . 'navigation.phtml',
            'content'    => TEMPLATES_DIR . 'news/index/index.phtml',
            'pagination' => LAYOUTS_DIR . 'pagination.phtml',
            'footer'     => LAYOUTS_DIR . 'footer.phtml',
        ],
    ],
    'news/edit/index' => [
        'title' => 'Редактирование новости',
        'css' => [
            CSS_DIR . '/news/edit/style.css',
        ],
        'js' => [
            JS_DIR . '/news/edit/script.js',
        ],
        'structure' => [
            'header'     => LAYOUTS_DIR . 'header.phtml',
            'navigation' => LAYOUTS_DIR . 'navigation.phtml',
            'content'    => TEMPLATES_DIR . 'news/edit/index.phtml',
            'footer'     => LAYOUTS_DIR . 'footer.phtml',
        ],
    ],
];