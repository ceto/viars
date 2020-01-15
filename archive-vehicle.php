<?php $currentcat = get_term(get_queried_object()->term_id); ?>
<?php if ($cathero = get_field('heroimage', $currentcat)) : ?>
    <figure class="vcathero">
        <?= wp_get_attachment_image($cathero[ID], 'banner', false); ?>
    </figure>
<?php else: ?>
    <figure class="vcathero" style="background-image:url('<?= get_stylesheet_directory_uri(); ?>/dist/images/hero-road.jpg')">

        <img src="<?= get_stylesheet_directory_uri(); ?>/dist/images/hero-road.jpg" alt="">
    </figure>
<?php endif; ?>
<?php get_template_part('templates/vehiclefilter'); ?>
<!-- <hr class="fulldivider"> -->
<?php if ($lead = get_field('vehicleslead', 'option')) : ?>
    <div class="grid-container ps ps--nobottom ps--narrow">
        <div class="vlead">
            <?php echo $lead; ?>
        </div>
    </div>
<?php endif; ?>

<div class="grid-container ps">

    <?php if (!have_posts()) : ?>
    <div class="alert alert-warning">
        <?php _e('Nincs találat', 'viars'); ?>
    </div>
    <?php get_search_form(); ?>
    <?php else: ?>
    <ul class="vehiclelist">
        <?php while (have_posts()) : the_post(); ?>
        <li>
            <?php get_template_part('templates/vehiclecard'); ?>
        </li>
        <?php endwhile; ?>
    </ul>
    <?php the_posts_navigation(); ?>
    <?php endif; ?>
</div>
