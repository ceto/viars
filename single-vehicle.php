<header class="tnhead">
    <div class="grid-container">
        <h2 class="tntitle">
            <a href="<?= get_post_type_archive_link('vehicle') ?>">
                    Iznajmite <em>vozilo</em>
            </a>
        </h2>
        <?php get_template_part('templates/vehiclefilter'); ?>
    </div>
</header>
<hr class="fulldivider">
<div class="grid-container ps">
    <?php while (have_posts()) : the_post(); ?>
    <?php get_template_part('templates/vehiclecard'); ?>
    <?php endwhile; ?>
</div>
