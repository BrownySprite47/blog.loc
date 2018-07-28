<?php


namespace App\Controller\News\Edit;


use Core\AbstractController;
use Core\Database;

class Index extends AbstractController
{
    public function index()
    {
        $db = new Database();

        print_r($db);
        echo 'News Edit Page';
    }
}