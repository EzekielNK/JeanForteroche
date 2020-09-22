<?php


namespace App\Model;


use Config\Connection;

class PostTable
{

    public function getPost()
    {
        $pdo = new Connection();
        $post = $pdo->getPDO();
        $result = $post->query("SELECT * FROM posts");
        return $result;
    }
}