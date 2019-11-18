<article class="postminicard">
    <header class="postminicard__header">
        <time class="postminicard__updated" datetime="<?= get_post_time('c', true); ?>"><?= get_the_date(); ?></time>
        <h2 class="postminicard__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    </header>
    <div class="postminicard__excerpt">
        <?php the_excerpt(); ?>
    </div>
    <a href="<?php the_permalink(); ?>" class="postminicard__readmore readmore">Tovább olvasom</a>
</article>
