<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 29.07.18
 * Time: 13:41
 */

namespace App\View;


use Core\AbstractView;

class Index extends AbstractView
{
    public function view($data)
    {
//        print_r($data);
        require_once __DIR__. '/../templates/index.php';
    }
}