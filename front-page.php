<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <div class="ps ps--narrow ps--dark">
    <div class="grid-container">
        <?php get_template_part('templates/featured-posts'); ?>
    </div>
</div>
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>
