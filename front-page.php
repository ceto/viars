<?php while (have_posts()) : the_post(); ?>
<?php get_template_part('templates/homecarousel'); ?>
<div class="ps ps--narrow">
    <div class="grid-container xnarrow">
        <div class="accentexcerpt">
            <h1><?php the_title(); ?></h1>
            <?php the_content(); ?>
        </div>
    </div>
</div>
<div class="ps ps--notop">
    <div class="grid-container">
        <?php get_template_part('templates/rentablecategories'); ?>
    </div>
</div>

<hr class="fulldivider">
<div class="ps ps--light ">
    <div class="grid-container">
        <h2 class="accenttitle"><?php _e('ZAŠTO IZNAJMLJIVANJE?','viars'); ?></h2>
        <?php get_template_part('templates/advantages'); ?>
    </div>
</div>
<?php endwhile; ?>