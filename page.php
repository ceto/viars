<?php use Roots\Sage\Titles; ?>
<?php while (have_posts()) : the_post(); ?>
<header id="masthead" class="masthead masthead--narrow valbtm">
    <div class="masthead__content" data-magellan>
        <h1 class="masthead__title"><?= Titles\title(); ?></h1>
    </div>
    <figure class="masthead__bg masthead__bg--fullwidth">
        <?php if(has_post_thumbnail()) : the_post_thumbnail('xlarge'); else: ?>
            <img src="https://source.unsplash.com/1920x768/?rights,crowd,protest" alt="">
        <?php endif; ?>
    </figure>
</header>

<section id="contentstart" class="ps ps--dark ps--notop" data-magelllan-target="contentstart">
    <div class="grid-container">
        <div class="spm">
            <div class="spm__main">
                <div class="box">
                    <div class="bodycopy">

                        <?php if (has_excerpt()) : ?>
                            <?php the_excerpt() ?>
                        <?php endif; ?>
                        <?php the_content(); ?>
                        <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
                    </div>
                </div>
                <br><br>
                <h2>Some heading goes here</h2>
                <br><br>
                <div class="box">
                    <?php get_template_part('templates/postgrid'); ?>
                </div>
            </div>
            <aside class="spm__side">
                <nav class="sidenav">
                    <br><br><br>
                    <h4 class="tapetitle">Some widget title<br>goes here</h4>
                    <br><br>
                    <?php
                        if (has_nav_menu('primary_navigation')) :
                            wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'menu menu--side']);
                        endif;
                        ?>
                </nav>
            </aside>
        </div>

    </div>
</section>

<?php endwhile; ?>
