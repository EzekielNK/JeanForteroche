<?php

use App\Model\PostTable;
$title = 'Jean Forteroche : Accueil';
require dirname(dirname(dirname(__DIR__))) . DIRECTORY_SEPARATOR . 'config' .DIRECTORY_SEPARATOR . 'DataPDO.php';

$post = new PostTable();
$posts = $post->getPost();
while ($article = $posts->fetch()){
    echo $article['title'];
    dd($article);
};

?>

<h1>Bienvenue sur mon blog</h1>

<div class="post">
    <ul>
        <li>post image</li>
        <li>post name</li>
        <li>post created_at</li>
        <li>post content</li>
    </ul>
</div>
