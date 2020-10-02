<article class="card">
    <div class="card-body">
        <figure class="card-image"><img src="//placehold.it/200" class="img-fluid" alt=""></figure>
        <h4 class="card-title">
            <?= $post->title ?>
            <hr>
        </h4>
        <p class="text-muted"><?= $post->created_at ?></p>
        <p><?= nl2br($post->content) ?></p>
    </div>
</article>
