<?php
/**
 * Template Name: Iframe template
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
<section id="contentstart">
    <iframe id="deltaframe" class="deltaframe" src="http://deltatruck.hu/en/via-iframe" frameborder="0" scrolling="no"></iframe>
</section>

<?php endwhile; ?>
