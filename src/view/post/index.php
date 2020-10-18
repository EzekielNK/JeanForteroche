<?php

require dirname(dirname(dirname(__DIR__))) . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'DataPDO.php';
use App\Model\PostTable;

$title = 'Jean Forteroche : Accueil';

$post = new PostTable();
$posts = $post->getPosts();
$post = $posts->fetch()
/*while ($post = $posts->fetch()) {

    echo $post->created_at;
};*/

?>

<h2> Dernière nouvelle</h2>

<div class="post">
    <?php foreach ($posts as $post): ?>
        <?php require "card.php"?>
    <?php endforeach ?>
</div>
