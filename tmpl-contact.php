<?php
/**
 * Template Name: Contact Template
 */
?>
<?php use Roots\Sage\Titles; ?>
<?php while (have_posts()) : the_post(); ?>
<header id="masthead" class="masthead masthead--thin">
    <figure class="masthead__bg masthead__bg--fullwidth">
        <?php if(has_post_thumbnail()) : the_post_thumbnail('xlarge'); else: ?>
            <img src="<?= get_stylesheet_directory_uri().'/dist/images/contacthead.jpg'; ?>" alt="Kontakt">
        <?php endif; ?>
    </figure>
</header>
<div class="ps--light">
    <div class="grid-container">
        <h1 class="tapetitle"><?= Titles\title(); ?></h1>
    </div>
</div>
<section id="contentstart" class="ps" data-magelllan-target="contentstart">
    <div class="grid-container">
        <div class="bodycopy">
            <?php if (has_excerpt()) : ?>
            <?php the_excerpt() ?>
            <?php endif; ?>
            <?php the_content(); ?>
        </div>
    </div>
</section>
<hr class="fulldivider">
<div class="ps"></div>
<?php endwhile; ?>
