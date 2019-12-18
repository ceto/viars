<?php
    $the_slides = new WP_Query(array(
        'post_type' => array('slide'),
        'posts_per_page' => -1
    ));
?>
<ul class="homecarousel">
<?php  while ( $the_slides->have_posts() ) : $the_slides->the_post(); ?>
    <li>
    <header id="masthead" class="masthead amasthead--narrow valbtm">
        <div class="masthead__content" data-magellan>
            <h2 class="masthead__title"><?php the_title(); ?></h2>
            <div class="masthead__caption"><?php the_field('details'); ?></div>
            <div class="masthead__actions">
                <a href="<?php the_field('buttontarget'); ?>" class="masthead__action button"><?php the_field('buttontext'); ?></a>
            </div>
        </div>
        <?php if (has_post_thumbnail()) : ?>
        <figure class="masthead__bg masthead__bg--fullwidth">
            <?php the_post_thumbnail('xlarge'); ?>
        </figure>
        <?php endif; ?>
    </header>
    </li>
<?php endwhile; ?>
</ul>
<?php wp_reset_postdata(); ?>
