
<?php
    $vcats= get_the_terms(get_the_ID(),'vehicle-categories');
?>
<article <?php post_class('vehiclecard'); ?>>
    <figure class="vehiclecard__fig">
        <a href="<?php the_permalink(); ?>">
            <img width="768" height="480" src="https://source.unsplash.com/768x480/?truck,lorry" alt="">
        </a>
    </figure>
    <header>
        <h2 class="vehiclecard__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <section class="vehiclecard__details">
            <div class="vehiclecard__details__one">
                <p><?php _e('Type / Superstructure', 'viars'); ?>:
                    <strong>
                    <?php foreach( $vcats as $vcat ) : ?>
                        <span><?= $vcat->name; ?></span>
                    <?php endforeach; ?>
                    </strong>
                </p>
                <p><?php _e('Capacity', 'viars'); ?>: <strong>Ipsum dolor sit.</strong></p>
                <p><?php _e('Loading Space', 'viars'); ?>: <strong>Consectetur adipisicing.</strong></p>
                <p><?php _e('Engine', 'viars'); ?>: <strong>Lorem.</strong></p>
                <p>some data goes here Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
            <div class="vehiclecard__details__two">
                <p>Ratione consequuntur laudantium totam.</p>
                <a href="#" class="button" data-toggle="requestmodal"><?php _e('Request for','viars') ?></a>
            </div>
        </section>
    </header>
</article>
