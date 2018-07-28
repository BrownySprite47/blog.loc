<?php


namespace Core;


abstract class AbstractController
{
    public function __construct()
    {
        $this->index();
    }

    abstract public function index();

    protected function view($path) {
        // TODO: реализация загрузки html файла
    }
}