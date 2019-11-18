<?php while (have_posts()) : the_post(); ?>
<article <?php post_class('spa'); ?>>
    <header class="masthead">
        <div class="masthead__content">
            <h1 class="masthead__title"><?php the_title(); ?></h1>
            <div class="masthead__caption"><?php get_template_part('templates/entry-meta'); ?></div>
        </div>
        <figre class="masthead__bg">
            <?php the_post_thumbnail('banner'); ?>
        </figre>
    </header>
    <div class="grid-container anarrow ps">
        <div class="spa__content bodycopy">
            <?php if (has_excerpt()) : ?>
                <!-- <div class="lead"> -->
                <?php the_excerpt() ?>
                <!-- </div> -->
                <!-- <hr> -->
            <?php endif; ?>
            <?php the_content(); ?>
        </div>
    </div>

    <footer class="spa__footer">
        <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'viars'), 'after' => '</p></nav>']); ?>
    </footer>
    <?php comments_template('/templates/comments.php'); ?>
</article>
<div class="ps ps--dark">
    <div class="grid-container">
        <h2><?php _e('Kapcsolódó tartalmak', 'viars'); ?></h2>
        <div class="box">
            <?php get_template_part('templates/related-posts'); ?>
        </div>
    </div>
</div>
<?php endwhile; ?>
