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
                <p>some data goes here</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
            <div class="vehiclecard__details__two">
                <p>Ratione consequuntur laudantium totam.</p>
                <a href="#" class="button"><?php _e('Request for','viars') ?></a>
            </div>
        </section>
    </header>
</article>
