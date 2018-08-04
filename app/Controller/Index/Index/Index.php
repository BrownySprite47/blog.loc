<?php


namespace App\Controller\Index\Index;


use App\Model\Posts;
use Core\AbstractController;

class Index extends AbstractController
{
    public $posts;

    /**
     * @return mixed|void
     * @throws \Exception
     */
    public function index()
    {
        $model = new Posts();

        $this->posts = $model->getPosts()->toArray();

        $view = new \App\View\Index();
        $view->view('index/index/index', $this->posts);
    }
}