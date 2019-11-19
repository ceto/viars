<header id="masthead" class="masthead masthead--stripe">
</header>
<header class="tnhead">
    <div class="grid-container">
        <h1 class="tntitle">Truck <em>News</em></h1>
        <?php
            if (has_nav_menu('primary_navigation')) :
                wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'menu menu--tntopics']);
            endif;
        ?>
    </div>
</header>
<div class="grid-container ps">
    <section class="spm">
        <div class="spm__main">
            <?php if (!have_posts()) : ?>
            <div class="alert alert-warning">
                <?php _e('Nincs találat', 'viars'); ?>
            </div>
            <?php get_search_form(); ?>
            <?php else: ?>
            <ul class="postcardlist">
                <?php while (have_posts()) : the_post(); ?>
                <li>
                    <?php get_template_part('templates/postcard'); ?>
                </li>
                <?php endwhile; ?>
            </ul>
            <?php the_posts_navigation(); ?>
            <?php endif; ?>
        </div>
        <aside class="spm__side sidebar">
            <?php dynamic_sidebar('sidebar-primary'); ?>
        </aside><!-- /.sidebar -->
    </section>

</div>