<?php


namespace App\Controller\Posts\Add;


use App\Model\Posts;
use Core\AbstractController;

class Index extends AbstractController
{

    /**
     * @return mixed
     */
    public function index($id = null)
    {
        $view = new \App\View\Index();
        $view->view('/posts/add/index');
    }
}