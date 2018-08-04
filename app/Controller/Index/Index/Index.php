<?php


namespace App\Controller\Index\Index;


use App\Model\Posts;
use Core\AbstractController;

class Index extends AbstractController
{

    public $posts;

    public function index()
    {
        $model = new Posts();

        $this->posts = $model->getPosts()->toArray();
        $model->setPosts();
        $view = new \App\View\Index();
        $view->view($model);
    }
}