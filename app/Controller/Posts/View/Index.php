<?php


namespace App\Controller\Posts\View;


use App\Model\Posts;
use Core\AbstractController;

class Index extends AbstractController
{
    public $post;

    /**
     * @param null $id
     * @return mixed|void
     * @throws \Exception
     */
    public function index($id = null)
    {
        $model = new Posts();

        $this->post = $model->getPost($id)->toArray();

        $view = new \App\View\Index();
        $view->view('posts/view/index', $this->post[0]);
    }
}