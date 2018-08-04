<?php

namespace App\View;

use Core\AbstractView;

class Index extends AbstractView
{
    public function view($page, $data = [])
    {
        require_once __DIR__ . '/../views/templates' . $page . '.phtml';
    }
}