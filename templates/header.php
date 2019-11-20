<aside class="toprow">
    lorem ipsum phone number
</aside>
<header id="siteheader" class="siteheader">
    <a class="siteheader__brand" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
    <nav class="siteheader__nav">
        <?php
            if (has_nav_menu('primary_navigation')) :
                wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'menu menu--main']);
            endif;
        ?>
    </nav>
    <div class="siteheader__mobileactions">
        <button class="menutoggler" type="button" data-toggle="mobilemodal">Menü</button>
    </div>
</header>
