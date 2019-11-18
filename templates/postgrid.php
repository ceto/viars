
<?php
        $the_posts = new WP_Query(array(
            'post_type' => array('post'),
            'posts_per_page' => 9,
            'orderby' => 'rand'
        ));
    ?>
<section class="">
    <ul class="postminicardgrid">
        <?php while ($the_posts->have_posts()) : $the_posts->the_post(); ?>
        <?php setup_postdata( $post ); ?>
        <li>
            <?php get_template_part('templates/postminicard'); ?>
        </li>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
    </ul>
</section>
