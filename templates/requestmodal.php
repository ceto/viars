<div class="reveal requestmodal" id="requestmodal" data-reveal data-animation-in="scale-in-down fast"
    data-animation-out="scale-out-up fast">

    <div class="mobilemodal__inner">
        <nav class="mobilemodal__mainnav">
            <a class="mobilemodal__brand" href="<?= esc_url(home_url('/')); ?>">
                <img src="<?= get_stylesheet_directory_uri(); ?>/dist/images/logo.svg" alt="<?php bloginfo('name'); ?>">
            </a>
            <h2>Form goes here</h2>
        </nav>
        <!-- <a href="#" target="_blank" class="mobilemodal__search button alert small hollow">Keresés</a> -->
    </div>
    <nav class="mobilemodal__secondarynav">
        <button class="mobilemodal__close" data-close aria-label="Close modal" type="button">
            <span aria-hidden="true">&times;</span>
        </button>
    </nav>

</div>
