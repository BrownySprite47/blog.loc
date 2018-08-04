<?php

namespace App\View;


use Core\AbstractView;

class Index extends AbstractView
{
    /**
     * Index constructor.
     */
    public function __construct()
    {
        $this->config = require CONFIG_DIR . '/config_pages.php';
    }

    /**
     * @param $page
     * @param array $data
     * @throws \Exception
     */
    public function view($page, $data = [])
    {
        $this->title = $this->config[$page]['title'];
        $this->data = $data;
        $this->css = $this->config[$page]['css'];
        $this->js = $this->config[$page]['js'];
        $this->structure = $this->config[$page]['structure'];

        foreach ($this->structure as $file)
        {
            if(file_exists($file)){
                require_once $file;
            }else{
                throw new \Exception('Template file not found');
            }
        }
    }
}