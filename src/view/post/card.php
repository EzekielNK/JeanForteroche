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
        <div class="text-muted">
            <i class="fas fa-newspaper"></i>
            <p class="text"><?= $post->created_at ?></p>
        </div>
        <p class="card-info"><?= nl2br(Text::excerpt($post->content, 130)) ?></p>
        <button type="button" class="btn-button">Voir plus</button>
    </div>
</article>