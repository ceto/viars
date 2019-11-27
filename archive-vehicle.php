<header class="tnhead">
    <div class="grid-container text-center">
        <h1 class="tntitle smaller">Iznajmite <em>vozilo</em></h1>
        <?php get_template_part('templates/vehiclefilter'); ?>
    </div>
</header>
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
