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
    <div class="spm">
        <div class="spm__main">
            <?php while (have_posts()) : the_post(); ?>
            <article <?php post_class('spa'); ?>>

                <div class="spa__content bodycopy">
                    <h1 class="title"><?php the_title(); ?></h1>
                    <?php if (has_excerpt()) : ?>
                    <!-- <div class="lead"> -->
                    <?php the_excerpt() ?>
                    <!-- </div> -->
                    <!-- <hr> -->
                    <?php endif; ?>
                    <?php the_content(); ?>
                </div>

                <footer class="spa__footer">
                    <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'viars'), 'after' => '</p></nav>']); ?>
                </footer>
                <?php comments_template('/templates/comments.php'); ?>
            </article>
            <?php endwhile; ?>
        </div>
        <aside class="spm__side sidebar">
            <?php dynamic_sidebar('sidebar-primary'); ?>
        </aside><!-- /.sidebar -->
    </div>
</div>