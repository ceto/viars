<?php
    $the_slides = new WP_Query(array(
        'post_type' => array('slide'),
        'posts_per_page' => -1
    ));
?>
<ul class="homecarousel slick-slider">
    <?php  while ( $the_slides->have_posts() ) : $the_slides->the_post(); ?>
    <?php if (has_post_thumbnail()) : ?>
    <li>
        <figure class="vcathero">
            <?php $bannerurl = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'banner' ); ?>
            <img src="<?php echo $bannerurl ?>" />
        </figure>
    </li>
    <?php endif; ?>
    <?php endwhile; ?>
</ul>
<?php wp_reset_postdata(); ?>