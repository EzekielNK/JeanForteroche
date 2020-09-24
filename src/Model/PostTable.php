<?php


namespace App\Model;

use Config\Connection;

class PostTable extends Connection
{

    public function getPost()
    {
        $sql = "SELECT * FROM posts";
        return $this->createQuery($sql);
    }
}
