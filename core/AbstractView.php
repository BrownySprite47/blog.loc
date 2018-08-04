<?php

namespace Core;


abstract class AbstractView
{
    /**
     * @param $page
     * @param array $data
     * @return mixed
     */
    abstract public function view($page, $data = []);
}