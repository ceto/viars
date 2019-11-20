<?php while (have_posts()) : the_post(); ?>
<?php get_template_part('templates/page', 'header'); ?>
<!-- <div class="ps ps--narrow">
    <div class="grid-container">
        <?php get_template_part('templates/content', 'page'); ?>
    </div>
</div> -->

<div class="ps">
    <div class="grid-container">
        <?php get_template_part('templates/rentablecategories'); ?>
    </div>
</div>

<hr class="fulldivider">
<div class="ps ps--light">
    <div class="grid-container">
    <h2 class="accenttitle"><?php _e('ZAŠTO IZNAJMLJIVANJE?','viars'); ?></h2>
        <?php get_template_part('templates/advantages'); ?>
    </div>
</div>
<?php endwhile; ?>
