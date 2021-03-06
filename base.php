<?php

use Roots\Sage\Setup;
use Roots\Sage\Wrapper;

?>

<!doctype html>
<html <?php language_attributes(); ?>>
<?php get_template_part('templates/head'); ?>

<body <?php body_class(); ?>>
    <!--[if IE]>
        <div class="alert alert-warning">
        <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'viars'); ?>
        </div>
    <![endif]-->
    <?php
        do_action('get_header');
        get_template_part('templates/header');
    ?>
    <div class="document" role="document">
        <main class="main">
            <?php include Wrapper\template_path(); ?>
        </main><!-- /.main -->

    </div><!-- /.document -->
    <?php
      do_action('get_footer');
      get_template_part('templates/footer');
      get_template_part('templates/mobilemodal');
    ?>
    <?php if (is_page_template('tmpl-shorttermrent.php') ) :  ?>
        <?php get_template_part('templates/strmodal'); ?>
    <?php endif; ?>
    <?php if (is_post_type_archive('vehicle') || is_tax('vehicle-categories') || is_singular('vehicle') ) :  ?>
        <?php get_template_part('templates/requestmodal'); ?>
    <?php endif; ?>
    <?php get_template_part('templates/contactmodal'); ?>
    <?php wp_footer(); ?>
</body>

</html>
