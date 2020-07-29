<?php
/**
 * Template Name: Shortterm Rent Template
 */
?>
<?php use Roots\Sage\Titles; ?>
<?php while (have_posts()) : the_post(); ?>
<header id="masthead" class="masthead masthead--thin">
    <figure class="masthead__bg masthead__bg--fullwidth">
        <?php if(has_post_thumbnail()) : the_post_thumbnail('xlarge'); else: ?>
            <img src="<?= get_stylesheet_directory_uri(); ?>/dist/images/hero-road.jpg" alt="">
        <?php endif; ?>
    </figure>
</header>
<div class="ps--light">
    <div class="grid-container">
        <h1 class="tapetitle"><?= Titles\title(); ?></h1>
    </div>
</div>

<section id="contentstart" class="ps" data-magelllan-target="contentstart">
    <div class="grid-container">
        <div class="bodycopy wide">
            <?php if (has_excerpt()) : ?>
            <?php the_excerpt() ?>
            <?php endif; ?>
            <?php the_content(); ?>
            <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
        </div>
    </div>
</section>
<?php
    $vcats = get_terms( array(
        'taxonomy' => 'vehicle-categories',
        'hide_empty' => false,
        'meta_query' => array(
            'position_clause' => array(
                'key' => 'order',
                'value' => 0,
                'compare' => '>='
            ),
            'filter_clause' => array(
                array(
                    'key'       => 'strent',
                    'value'     => '1',
                    'compare'   => '='
                ),
            ),
            'relation' => 'AND',
        ),
        'orderby' => 'position_clause',
        'order' =>  'ASC'
    ));
?>
<div class="ps ps--notop">
    <div class="grid-container">
    <ul class="catpromolist">
        <li>
            <div class="catpromotecard">
                <h3>POGLEDAJTE NAšU PONODU!</h3>
            </div>
        </li>
        <?php foreach ($vcats as $vcat) : ?>
        <?php get_template_part('templates/catpromocard'); ?>
        <?php endforeach; ?>
    </ul>
    </div>
</div>

<?php endwhile; ?>

