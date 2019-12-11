<footer class="sitefooter">
    <div class="sitefooter__inner grid-container">
        <nav class="sitefooter__nav">
            <?php
                    if (has_nav_menu('primary_navigation')) :
                        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'menu menu--footer']);
                    endif;
                    ?>
        </nav>
        <div class="sitefooter__contact">
            <h3>Viarent Serbia</h3>
            <p>SR-2310 Szigetszentmiklós,<br>
            Leshegy Ipari Park, Leshegy utca 13.</p>
            <p>Tel.: +36 24 50 22 50<br>Fax: +36 24 50 22 33<br>Email: marketing@delta-truck.hu</p>
        </div>
        <div class="sitefooter__logos">
            <img src="<?= get_stylesheet_directory_uri(); ?>/dist/images/deltalogo.svg" alt="">
            <img src="<?= get_stylesheet_directory_uri(); ?>/dist/images/logo-white.svg" alt="">
        </div>
        <hr>
        <div class="sitefooter__copyright">
            <small>© 2019 Delta-Truck Kft. • VIARENT, a Via Bérautó Kft. védjegye • Delta-Truck s.r.o. All Rights</small>
        </div>
        <nav class="sitefooter__mininav">
            <?php
                    if (has_nav_menu('footermini_navigation')) :
                        wp_nav_menu(['theme_location' => 'footermini_navigation', 'menu_class' => 'menu menu--footermini']);
                    endif;
                    ?>
        </nav>
    </div>
    <?php //dynamic_sidebar('sidebar-footer'); ?>

</footer>
