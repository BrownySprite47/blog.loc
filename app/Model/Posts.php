<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 29.07.18
 * Time: 0:20
 */

namespace App\Model;


use Core\AbstractModel;

class Posts extends AbstractModel
{
    public function getPosts()
    {
        $select = $this->select()->from('posts');
        $result = $this->execute($select);

        return $result;
    }
}