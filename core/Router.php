<?php

namespace Core;

class Router
{
    protected $uri;

    protected $controller;

    protected $path;

    protected $id;

    /**
     * @return bool
     */
    public function isPost()
    {
        return $_SERVER['REQUEST_METHOD'] == 'POST';
    }

    /**
     * @return array
     */
    public function getUriParts()
    {
        $path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

        $uri = array_values(array_diff(explode('/', $path), ['']));

        return $uri;
    }

    /**
     * @return string
     */
    public function getControllerPath()
    {
        $path = $this->getUriParts();

        if (!$this->path) {
            $controllerPath[0] = isset($path[0]) ? ucfirst(strtolower($path[0])) : 'Posts';
            $controllerPath[1] = isset($path[1]) ? ucfirst(strtolower($path[1])) : 'Index';
            $controllerPath[2] = isset($path[2]) ? ucfirst(strtolower($path[2])) : 'Index';

            $this->path = implode('\\', $controllerPath);
        }
        return $this->path;
    }

    /**
     * @return string
     */
    public function getId()
    {
        $path = $this->getUriParts();

        if (!$this->id) {
            $this->id = isset($path[3]) ? (int)$path[3] : 0;
        }
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getController()
    {
        if (!$this->controller) {
            $controller = '\App\Controller\\' . $this->getControllerPath();

            if (class_exists($controller)) {
                $this->controller = $controller;
            } else {
                $this->controller = '\App\Controller\ErrorController';
            }
        }
        return $this->controller;
    }
}
