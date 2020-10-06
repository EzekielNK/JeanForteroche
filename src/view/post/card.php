<?php


use App\Helpers\Text;


?>
<article class="card">
    <div class="card-body">
        <figure class="card-image"><img src="" class="img-fluid" alt=""></figure>
        <h4 class="card-title">
            <?= $post->title ?>
            <hr>
        </h4>
        <p class="text-muted"><?= $post->created_at ?></p>
        <p class="card-info"><?= nl2br(Text::excerpt($post->content, 150)) ?></p>
        <button type="button" class="btn-button">Voir plus</button>
    </div>
</article>
