<?php use Roots\Sage\Titles; ?>
<header id="masthead" class="masthead masthead--narrow">
    <div class="masthead__content" data-magellan>
        <h1 class="masthead__title"><?= Titles\title(); ?></h1>
        <div class="masthead__caption"><?php the_excerpt(); ?></div>
        <div class="masthead__actions">
            <a href="#contentstart" class="masthead__action button hollow"><?php _e('Részletek', 'cadcam'); ?></a>
        </div>
    </div>
    <figure class="masthead__bg">
        <?php if(has_post_thumbnail()) : the_post_thumbnail('xlarge'); else: ?>
            <img src="https://source.unsplash.com/1600x600/?rights,crowd,protest" alt="">
        <?php endif; ?>
    </figure>
</header>
