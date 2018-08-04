<?php

define('CSS_DIR', '/assets/css');
define('JS_DIR', '/assets/js');

return [
    'index/index/index' => [
        'title' => 'Все посты',
        'css' => [
            CSS_DIR . '/index/index/style.css',
        ],
        'js' => [
            JS_DIR . '/index/index/script.js',
        ],
    ],
];