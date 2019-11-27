<?php
/**
 * Template Name: About Rent - Info page with advatages
 */
?>
<?php use Roots\Sage\Titles; ?>
<?php while (have_posts()) : the_post(); ?>
<header id="masthead" class="masthead masthead--narrow">
    <figure class="masthead__bg masthead__bg--fullwidth">
        <?php if(has_post_thumbnail()) : the_post_thumbnail('xlarge'); else: ?>
        <img src="https://source.unsplash.com/1600x600/?truck,lorry" alt="">
        <?php endif; ?>
    </figure>
</header>
<div class="ps--light">
    <div class="grid-container">
        <h1 class="tapetitle"><?= Titles\title(); ?></h1>
    </div>
</div>
<div class="ps">
    <div class="grid-container">
    <h2 class="accenttitle"><?php _e('Zašto iznajmljivanje?','viars'); ?></h2>
        <?php get_template_part('templates/advantages'); ?>
    </div>
</div>
<hr class="fulldivider">
<section id="contentstart" class="ps" data-magelllan-target="contentstart">
    <div class="grid-container">
        <div class="bodycopy">
            <?php if (has_excerpt()) : ?>
            <?php the_excerpt() ?>
            <?php endif; ?>
            <div class="twocolumn">
                <?php the_content(); ?>
            </div>
            <br><br><br>
            <img src="<?= get_stylesheet_directory_uri().'/dist/images/aboutrent.jpg'; ?>" alt="">
        </div>
    </div>
</section>

<?php endwhile; ?>
