<?php


namespace App\Model;

use Config\Connection;
use PDOStatement;

class PostTable extends Connection
{

    /**
     * @return bool|false|PDOStatement
     */
    public function getPosts(): PDOStatement
    {
        $sql = "SELECT * FROM posts ORDER BY created_at DESC LIMIT 5";
        return $this->createQuery($sql);
    }


    public function getPost($id)
    {
        $sql = "SELECT id, 
                        user_id, 
                        title, 
                        slug, 
                        ft_image, 
                        content, 
                        published, 
                        created_at 
                        FROM posts WHERE id=?";
        return $this->createQuery($sql, [$id]);
    }
}
