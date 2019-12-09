<?php $currentcat = get_term(get_queried_object()->term_id); ?>
<?php if ($cathero = get_field('heroimage', $currentcat)) : ?>
    <figure class="vcathero">
        <?= wp_get_attachment_image($cathero[ID], 'banner', false); ?>
    </figure>
<?php else: ?>
    <figure class="vcathero">
        <img src="<?= get_stylesheet_directory_uri(); ?>/dist/images/hero-road.jpg" alt="">
    </figure>
<?php endif; ?>
<?php get_template_part('templates/vehiclefilter'); ?>
<!-- <hr class="fulldivider"> -->
<div class="grid-container ps">
    <?php while (have_posts()) : the_post(); ?>
    <?php get_template_part('templates/vehiclecard'); ?>
    <?php endwhile; ?>
</div>
