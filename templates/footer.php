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
            <h3>Viarent Srbija</h3>
            <p>Sretenjska 4, 11272, Dobanovci,<br>
                Beograd, Srbija</p>
            <p>Centrala:<br>Email: <a href="mailto:offcie@viarent.rs">office@viarent.rs</a></p>
        </div>
        <div class="sitefooter__logos">
            <img src="<?= get_stylesheet_directory_uri(); ?>/dist/images/deltalogo.svg" alt="">
            <img src="<?= get_stylesheet_directory_uri(); ?>/dist/images/logo-white.svg" alt="">
        </div>
        <hr>
        <div class="sitefooter__copyright">
            <small>© 2019 Delta-Truck Kft. • VIARENT, a Via Bérautó Kft. védjegye • Delta-Truck s.r.o. All
                Rights</small>
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