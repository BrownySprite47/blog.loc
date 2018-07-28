<?php

define('ROOT_DIR', __DIR__);

require_once __DIR__ . '/../vendor/autoload.php';

use Core\Router;


try {
    echo '<pre>';

    $router = new Router();

    $controller = $router->getController();

    new $controller();

} catch (\Exception $e) {
    echo $e->getMessage();
}