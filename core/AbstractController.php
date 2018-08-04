<?php


namespace Core;


abstract class AbstractController
{
    /**
     * AbstractController constructor.
     */
    public function __construct($id = null)
    {
        $this->index($id);
    }

    /**
     * @return mixed
     */
    abstract public function index();

    /**
     * @param $path
     */
    protected function view($path) {
        // TODO: реализация загрузки html файла
    }
}