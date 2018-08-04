<?php

define('ROOT_DIR', __DIR__);
define('LAYOUTS_DIR', __DIR__ . '/../app/views/layouts/');

require_once __DIR__ . '/../vendor/autoload.php';

use Core\Router;


try {
    $router = new Router();
    $controller = $router->getController();

    $id = $router->getId();
    new $controller($id);

} catch (\Exception $e) {
    echo $e->getMessage();
}