<article <?php post_class('postcard'); ?>>
    <header class="postcard__peak">
<time class="postcard__updated" datetime="<?= get_post_time('c', true); ?>"><?= get_the_date(); ?></time>
        <h2 class="postcard__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <div class="postcard__metablock">
            <?= __('By', 'viars'); ?> <a href="<?= get_author_posts_url(get_the_author_meta('ID')); ?>" rel="author" class="fn"><?= get_the_author(); ?></a>
        </div>
    </header>
    <div class="postcard__tail">
        <div class="postcard__excerpt">
            <?php the_excerpt(); ?>
        </div>
        <a href="<?php the_permalink(); ?>" class="postcard__readmore readmore">Tovább olvasom</a>
    </div>
</article>


