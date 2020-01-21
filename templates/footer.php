<aside class="flactions">
    <a href="mailto:office@viarent.rs"><div class="icon icon-envelope"></div></a>
    <a target="_blank" href="https://www.instagram.com/viarent_srbija/"><div class="icon icon-instagram"></div></a>
    <a target="_blank" href="https://www.facebook.com/Viarent-Srbija-114602583288278/"><div class="icon icon-facebook"></div></a>
</aside>
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
            <h3>SDT GROUP D.O.O.</h3>
            <p>Sretenjska 4, 11272, Dobanovci,<br>
                Beograd, Srbija</p>
            <p>Centrala: <a href="tel:+381653050810">+381 65 305 0810</a><br>Email: <a href="mailto:offcie@viarent.rs">office@viarent.rs</a></p>
            <nav class="sitefooter__socials">
                <a target="_blank" href="https://www.facebook.com/Viarent-Srbija-114602583288278/"><div class="icon icon-facebook"></div></a>
                <a target="_blank" href="https://www.instagram.com/viarent_srbija/"><div class="icon icon-instagram"></div></a>
                <a href="mailto:office@viarent.rs"><div class="icon icon-envelope"></div></a>
            </nav>
            <p>VIARENT trademark may be used in Serbia by SDT GROUP D.O.O.</p>
        </div>
        <div class="sitefooter__logos">
            <img src="<?= get_stylesheet_directory_uri(); ?>/dist/images/sdt.png" alt="">
            <img src="<?= get_stylesheet_directory_uri(); ?>/dist/images/logo-white.svg" alt="">
        </div>
        <hr>
        <div class="sitefooter__copyright">
            <small>&copy; 2019 VIARENT is a trademark of Via Bérautó Kft. All rights reserved</small>
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
