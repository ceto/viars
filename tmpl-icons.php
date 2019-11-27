<?php
/**
 * Template Name: Icon Reference
 */
?>
<?php while (have_posts()) : the_post(); ?>
<article <?php post_class(); ?>>
    <section id="contentstart" class="ps ps--wide ps--lightgradient" data-magelllan-target="contentstart">
        <div class="grid-container narrow">
            <?php echo file_get_contents(get_stylesheet_directory_uri().'/assets/grunticon/preview.html'); ?>
        </div>
    </section>
</article>
<?php endwhile; ?>
