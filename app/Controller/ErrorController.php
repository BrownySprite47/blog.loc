<?php


namespace App\Controller;


use Core\AbstractController;

class ErrorController extends AbstractController
{
    public function index()
    {
        echo '404 page';
    }
}