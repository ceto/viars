<div class="reveal mobilemodal full" id="mobilemodal" data-reveal data-animation-in="scale-in-down fast"
    data-animation-out="scale-out-up fast">

    <div class="mobilemodal__inner">
        <nav class="mobilemodal__mainnav">
            <a class="mobilemodal__brand" href="<?= esc_url(home_url('/')); ?>">
                <img src="<?= get_stylesheet_directory_uri(); ?>/dist/images/logo.svg" alt="<?php bloginfo('name'); ?>">
            </a>
            <?php
                if (has_nav_menu('primary_navigation')) :
                wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'menu menu--mobilemain', 'items_wrap' => '<ul class="%2$s" data-accordion-menu>%3$s</ul>']);
                endif;
            ?>
        </nav>
        <!-- <a href="#" target="_blank" class="mobilemodal__search button alert small hollow">Keresés</a> -->
    </div>
    <nav class="mobilemodal__secondarynav">
        <button class="mobilemodal__close" data-close aria-label="Close modal" type="button">
            <span aria-hidden="true">&times;</span>
        </button>
    </nav>

</div>
