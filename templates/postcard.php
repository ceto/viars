<article <?php post_class('postcard'); ?>>
    <figure>
        <a href="<?php the_permalink(); ?>">
            <?php if (has_post_thumbnail()) :?>
                <?php the_post_thumbnail('medium43'); ?>
            <?php else: ?>
            <img width="768" height="480" src="https://source.unsplash.com/768x480/?truck,lorry" alt="">
            <?php endif; ?>
        </a>
    </figure>
    <h2 class="postcard__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <div class="postcard__excerpt">
        <?php the_excerpt(); ?>
    </div>
</article>
