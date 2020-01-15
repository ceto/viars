<?php $currentcat = get_term(get_queried_object()->term_id); ?>

<?php if ($cathero = get_field('heroimage', $currentcat)) : ?>
<?php $bannerurl = wp_get_attachment_url( $cathero[ID], 'banner', false ); ?>
<figure class="vcathero" style="background-image:url('<?php echo $bannerurl ?>')">
        <img src="<?php echo $bannerurl ?>" />
</figure>
<?php else: ?>
    <figure class="vcathero" style="background-image:url('<?= get_stylesheet_directory_uri(); ?>/dist/images/hero-road.jpg')">
    <img src="<?= get_stylesheet_directory_uri(); ?>/dist/images/hero-road.jpg" alt="">
</figure>
<?php endif; ?>
<?php get_template_part('templates/vehiclefilter'); ?>


<?php
        if ($currentcat->parent!==0) {
            $childcats = get_terms( array(
                'taxonomy' => 'vehicle-categories',
                'hide_empty' => false,
                'parent'   => $currentcat->parent
                ) );
        } else {

            $childcats = get_terms( array(
            'taxonomy' => 'vehicle-categories',
            'hide_empty' => false,
            'parent'   => get_queried_object()->term_id
            ) );
        }
    ?>
<?php if ( ! empty( $childcats ) && ! is_wp_error( $childcats ) ): ?>
<!-- <div class="ps ps--dark ps--xnarrow">

            <div class="grid-container">
                <ul class="menu menu--tntopics">
                    <li><a href="#"><strong>Filter by superstructure:</strong></a></li>
                    <?php foreach ( $childcats as $term ) : ?>
                        <?php if ($currentcat == $term) : ?>
                        <li class="active">
                        <?php else: ?>
                        <li>
                        <?php endif; ?>
                        <a href="<?= get_term_link($term) ?>"><?= $term->name ?></a>
                    </li>
                    <?php endforeach ?>
                </ul>
            </div>
        </div> -->
<?php endif; ?>

<?php if ($lead = get_field('vehicleslead', 'option')) : ?>
    <div class="grid-container ps ps--nobottom ps--narrow">
        <div class="vlead">
            <?php echo $lead; ?>
        </div>
    </div>
<?php endif; ?>

<!-- <hr class="fulldivider"> -->
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
