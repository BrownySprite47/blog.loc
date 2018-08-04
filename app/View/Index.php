<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 29.07.18
 * Time: 13:41
 */

namespace App\View;


use Core\AbstractView;

class Index extends AbstractView
{
    public function __construct()
    {
        $this->config = require CONFIG_DIR . '/config_pages.php';

    }

    public function view($page, $data)
    {

        $this->title = $this->config[$page]['title'];
        $this->data = $data;
        $this->css = $this->config[$page]['css'];
        $this->js = $this->config[$page]['js'];


        require_once __DIR__. '/../templates/layouts/header.phtml';
        require_once __DIR__. '/../templates/' . $page . '.phtml';
        require_once __DIR__. '/../templates/layouts/footer.phtml';
    }
}