<div data-sticky-container>
    <div class="sticky sticky--siteheader" data-sticky data-top-anchor="document:top" data-margin-top="0"
        data-sticky-on="small">
        <header id="siteheader" class="siteheader">
            <a class="siteheader__brand" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
            <nav class="siteheader__nav">
                <?php
                    if (has_nav_menu('primary_navigation')) :
                        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'menu menu--main']);
                    endif;
                    ?>
            </nav>
            <nav class="siteheader__actions">
                <ul class="menu menu--main">
                    <li class="menu-item accent hollow"><a href="#">Segítünk</a></li>
                    <li class="menu-item accent"><a href="#">Támogass</a></li>
                </ul>
            </nav>
            <div class="siteheader__mobileactions">
                <button class="menutoggler" type="button" data-toggle="mobilemodal">Menü</button>
            </div>
        </header>
    </div>
</div>
