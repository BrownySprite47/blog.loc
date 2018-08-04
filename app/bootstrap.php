<?php

use Core\Router;


try {
    $router = new Router();
    $controller = $router->getController();

    $id = $router->getId();
    new $controller($id);

} catch (\Exception $e) {
    echo $e->getMessage();
}