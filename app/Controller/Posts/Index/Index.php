<?php


namespace App\Controller\Posts\Index;


use App\Model\Posts;
use Core\AbstractController;

class Index extends AbstractController
{
    public $posts;

    /**
     * @param null $id
     * @return mixed|void
     * @throws \Exception
     */
    public function index($id = null)
    {
        $model = new Posts();

        $this->posts = $model->getPosts()->toArray();

        $view = new \App\View\Index();
        $view->view('posts/index/index', $this->posts);
    }
}