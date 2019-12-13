<?php
    $vcats= get_the_terms(get_the_ID(),'vehicle-categories');
?>
<article <?php post_class('vehiclecard'); ?>>
    <figure class="vehiclecard__fig">
        <a href="<?php the_permalink(); ?>">
            <?php if (has_post_thumbnail() ) :?>
            <?php the_post_thumbnail('medium43') ?>
            <?php else: ?>
            <img width="768" height="576" src="https://placehold.it/768x576/?text=No+Photo+Available" alt="">
            <?php endif; ?>

        </a>
    </figure>
    <header>
        <h2 class="vehiclecard__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <section class="vehiclecard__details">
            <div class="vehiclecard__details__one">
                <p class="vehiclecard__datarow tpers"><?php _e('Nadgradnja', 'viars'); ?>:
                    <strong>
                        <?php foreach( $vcats as $vcat ) : ?>
                        <span><?= $vcat->name; ?></span>
                        <?php endforeach; ?>
                    </strong>
                </p>
                <?php if ($capacity = get_field('capacity')) :?>
                <p class="vehiclecard__datarow"><?php _e('Nosivost', 'viars'); ?>: <strong><?=$capacity ?> t</strong>
                </p>
                <?php endif; ?>
                <?php if ($dimension = get_field('loadingspace_dimension')) :?>
                <p class="vehiclecard__datarow"><?php _e('Dimensija', 'viars'); ?>:
                    <strong><?= $dimension ?> m</strong></p>
                <?php endif; ?>
                <?php if ($volume = get_field('loadingspace_volume')) :?>
                <p class="vehiclecard__datarow"><?php _e('Veličina skladišnog prostora', 'viars'); ?>:
                    <strong><?= $volume ?>
                        m<sup>3</m></strong></p>
                <?php endif; ?>
                <?php if ($engine = get_field('engine')) :?>
                <p class="vehiclecard__datarow"><?php _e('Motor', 'viars'); ?>: <strong><?= $engine ?></strong></p>
                <?php endif; ?>


            </div>
            <div class="vehiclecard__details__two">
                <div>
                    <?php the_content(); ?>
                </div>
                <a href="#" class="button startrequest"
                    data-toggle="requestmodal"><?php _e('zatražite ponudu','viars') ?></a>
            </div>
        </section>
    </header>
</article>