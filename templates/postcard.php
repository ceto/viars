<article <?php post_class('postcard'); ?>>
    <figure>
        <a href="<?php the_permalink(); ?>"><img src="https://source.unsplash.com/768x480/?truck,lorry" alt=""></a>
    </figure>
    <h2 class="postcard__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <div class="postcard__excerpt">
        <?php the_excerpt(); ?>
    </div>
</article>