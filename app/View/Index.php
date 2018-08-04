<?php

namespace App\View;

use Core\AbstractView;

class Index extends AbstractView
{
    protected $config;

    protected $title;

    protected $data;

    protected $css;

    protected $js;
    /**
     * @param $page
     * @param array $data
     * @throws \Exception
     */
    public function view($page, $data = [])
    {
        $config = str_replace("/", "_", $page);
        $this->config = require CONFIG_TEMPLATES_DIR .''. $config .'.php';

        $this->title = $this->config[$page]['title'];
        $this->data = $data;
        $this->css = $this->config[$page]['css'];
        $this->js = $this->config[$page]['js'];

        foreach ($this->config[$page]['structure'] as $file)
        {
            if(file_exists($file)){
                require_once $file;
            }else{
                throw new \Exception('Template file not found ' . $file);
            }
        }
    }
}