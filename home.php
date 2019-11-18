<header id="masthead" class="masthead masthead--narrow">
    <div class="masthead__content" data-magellan>
        <h1 class="masthead__title"><?php _e('Hírek','viars'); ?></h1>
    </div>
    <figure class="masthead__bg">
        <img src="https://source.unsplash.com/1600x600/?rights,crowd,protest" alt="">
    </figure>
</header>
<div class="ps ps--narrow ps--dark">
    <div class="grid-container narrow">
        <?php get_template_part('templates/featured-posts'); ?>
    </div>
</div>
<div class="grid-container ps narrow">
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

