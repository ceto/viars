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



<div class="grid-container ps">
    <div class="spm">
        <div class="spm__main">
                <div class="bodycopy">
                    <?php if (has_excerpt()) : ?>
                    <?php the_excerpt() ?>
                    <?php endif; ?>
                    <?php the_content(); ?>
                </div>
        </div>
        <aside class="spm__side sidebar">
            <!-- <figure>
                <img src="https://source.unsplash.com/800x600/?truck,lorry" alt="">
            </figure> -->
        </aside><!-- /.sidebar -->
    </div>
    <!-- <br>
    <hr aclass="fulldivider">
    <br>
    <img src="https://placehold.it/1600x600/?text=Google+maps+goes+here" alt=""> -->
</div>
<?php endwhile; ?>
