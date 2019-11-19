<footer class="sitefooter">
    <div class="grid-container">
        <br><br>
        <nav class="sitehfooter__nav">
            <?php
                    if (has_nav_menu('primary_navigation')) :
                        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'menu menu--footer']);
                    endif;
                    ?>
        </nav>
        <br><br><br>
        <hr>
        <br><br>
    </div>
    <?php //dynamic_sidebar('sidebar-footer'); ?>

</footer>