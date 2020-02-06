<?php
    // 1. customize ACF path
    add_filter('acf/settings/path', 'viars_acf_settings_path');
    function viars_acf_settings_path( $path ) {
        $path = get_stylesheet_directory() . '/lib/acf/';
        return $path;
    }

    // 2. customize ACF dir
    add_filter('acf/settings/dir', 'viars_acf_settings_dir');
    function viars_acf_settings_dir( $dir ) {
    $dir = get_stylesheet_directory_uri() . '/lib/acf/';
    return $dir;
    }

    // 3. Hide ACF field group menu item
    //add_filter('acf/settings/show_admin', '__return_false');

    // 4. Include ACF
    include_once( get_stylesheet_directory() . '/lib/acf/acf.php' );

    // 5. Unhide native metabox
    add_filter('acf/settings/remove_wp_meta_box', '__return_false');

    // 6. Save JSON
    add_filter('acf/settings/save_json', 'viars_acf_json_save_point');
    function viars_acf_json_save_point( $path ) {
        $path = get_stylesheet_directory() . '/lib/acf/json';
        return $path;
    }


    // 7. Load JSON
    add_filter('acf/settings/load_json', 'viars_acf_json_load_point');
    function viars_acf_json_load_point( $paths ) {
        unset($paths[0]);
        $paths[] = get_stylesheet_directory() . '/lib/acf/json';
        return $paths;
    }

    /** Create Options Pages */
    if( function_exists('acf_add_options_page') ) {
        acf_add_options_page(array(
            'page_title' 	=> 'Globals',
            'menu_title'	=> 'Globals',
            'menu_slug' 	=> 'globals',
            'capability'	=> 'edit_posts',
            'redirect'		=> false
        ));
    }


function viars_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'viars_mime_types');

function viars_fix_svg_thumb_display() {
    echo '<style>
        .media-icon img[src$=".svg"], img[src$=".svg"][class*="attachment"] {
        width: 100% !important;
        height: auto !important;
        }
    </style>';
}
add_action('admin_head', 'viars_fix_svg_thumb_display');


// Disable Gutenberg editor.
add_filter('use_block_editor_for_post_type', '__return_false', 10);
// Don't load Gutenberg-related stylesheets.
add_action( 'wp_enqueue_scripts', 'viars_remove_block_css', 100 );
function viars_remove_block_css() {
    wp_dequeue_style( 'wp-block-library' ); // Wordpress core
    wp_dequeue_style( 'wp-block-library-theme' ); // Wordpress core
}



function viars_modify_num_vehicles($query) {
    if ( ($query->is_main_query()) && ($query->is_archive('vehicle') || $query->is_tax('vehicle-categories') || $query->is_tax('vehicle-attributes') ) && (!is_admin()) ) {
        $query->set('posts_per_page', -1);
        $query->set('orderby', 'menu_order');
        $query->set('order', 'ASC');
        $query->set('post_status', array('publish' ));
    }
}
add_action('pre_get_posts', 'viars_modify_num_vehicles');