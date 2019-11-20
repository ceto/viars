<?php

// Register Custom Post Type
function viars_custom_post_type() {

	$labels = array(
		'name'                  => _x( 'Vehicles', 'Post Type General Name', 'viars' ),
		'singular_name'         => _x( 'Vehicle', 'Post Type Singular Name', 'viars' ),
		'menu_name'             => __( 'Vehicle', 'viars' ),
		'name_admin_bar'        => __( 'Vehicle', 'viars' ),
		'archives'              => __( 'Item Archives', 'viars' ),
		'attributes'            => __( 'Item Attributes', 'viars' ),
		'parent_item_colon'     => __( 'Parent Item:', 'viars' ),
		'all_items'             => __( 'All Vehicles', 'viars' ),
		'add_new_item'          => __( 'Add New Item', 'viars' ),
		'add_new'               => __( 'Add New', 'viars' ),
		'new_item'              => __( 'New Item', 'viars' ),
		'edit_item'             => __( 'Edit Item', 'viars' ),
		'update_item'           => __( 'Update Item', 'viars' ),
		'view_item'             => __( 'View Vehicle', 'viars' ),
		'view_items'            => __( 'View Vehicles', 'viars' ),
		'search_items'          => __( 'Search Vehicle', 'viars' ),
		'not_found'             => __( 'Not found', 'viars' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'viars' ),
		'featured_image'        => __( 'Featured Image', 'viars' ),
		'set_featured_image'    => __( 'Set featured image', 'viars' ),
		'remove_featured_image' => __( 'Remove featured image', 'viars' ),
		'use_featured_image'    => __( 'Use as featured image', 'viars' ),
		'insert_into_item'      => __( 'Insert into item', 'viars' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'viars' ),
		'items_list'            => __( 'Items list', 'viars' ),
		'items_list_navigation' => __( 'Items list navigation', 'viars' ),
		'filter_items_list'     => __( 'Filter items list', 'viars' ),
	);
	$args = array(
		'label'                 => __( 'Vehicle', 'viars' ),
		'description'           => __( 'Post Type for Rentable Vehicles', 'viars' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'page-attributes', 'custom-fields', 'excerpt' ),
		'taxonomies'            => array( 'vehiclecat' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
        'menu_position'         => 21,
        'menu_icon'             => 'dashicons-editor-justify',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'vehicle', $args );

}
add_action( 'init', 'viars_custom_post_type', 0 );

function viars_add_vehicle_taxonomies(){

    $category_labels = array(
        'name' => __( 'Vehicle Categories', 'viars'),
        'singular_name' => __( 'Vehicle Category', 'viars'),
        'search_items' =>  __( 'Search Vehicle Categories', 'viars'),
        'all_items' => __( 'All Vehicle Categories', 'viars'),
        'parent_item' => __( 'Parent Vehicle Category', 'viars'),
        'edit_item' => __( 'Edit Vehicle Category', 'viars'),
        'update_item' => __( 'Update Vehicle Category', 'viars'),
        'add_new_item' => __( 'Add New Vehicle Category', 'viars'),
        'menu_name' => __( 'Vehicle Categories', 'viars')
    );

    register_taxonomy("vehicle-categories",
            array("vehicle"),
            array("hierarchical" => true,
                    'labels' => $category_labels,
                    'show_ui' => true,
                    'query_var' => true,
                    'rewrite' => array( 'slug' => 'vehicles' )
    ));

    $attributes_labels = array(
        'name' => __( 'Vehicle Attributes', 'viars'),
        'singular_name' => __( 'Vehicle Attribute', 'viars'),
        'search_items' =>  __( 'Search Vehicle Attributes', 'viars'),
        'all_items' => __( 'All Vehicle Attributes', 'viars'),
        'parent_item' => __( 'Parent Vehicle Attribute', 'viars'),
        'edit_item' => __( 'Edit Vehicle Attribute', 'viars'),
        'update_item' => __( 'Update Vehicle Attribute', 'viars'),
        'add_new_item' => __( 'Add New Vehicle Attribute', 'viars'),
        'new_item_name' => __( 'New Vehicle Attribute', 'viars'),
        'menu_name' => __( 'Vehicle Attributes', 'viars')
    );

    register_taxonomy('vehicle-attributes',
        array('vehicle'),
        array('hierarchical' => false,
        'labels' => $attributes_labels,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => array( 'slug' => 'vehicle-attributes' )
    ));

}

add_action( 'init', 'viars_add_vehicle_taxonomies' );


// Register Custom Post Type
function viars_member_custom_post_type() {

	$labels = array(
		'name'                  => _x( 'Team Members', 'Post Type General Name', 'viars' ),
		'singular_name'         => _x( 'Team Member', 'Post Type Singular Name', 'viars' ),
		'menu_name'             => __( 'Team & Clients', 'viars' ),
		'name_admin_bar'        => __( 'Team Member', 'viars' ),
		'archives'              => __( 'Item Archives', 'viars' ),
		'attributes'            => __( 'Item Attributes', 'viars' ),
		'parent_item_colon'     => __( 'Parent Item:', 'viars' ),
		'all_items'             => __( 'All Members', 'viars' ),
		'add_new_item'          => __( 'Add New Item', 'viars' ),
		'add_new'               => __( 'Add New', 'viars' ),
		'new_item'              => __( 'New Item', 'viars' ),
		'edit_item'             => __( 'Edit Item', 'viars' ),
		'update_item'           => __( 'Update Item', 'viars' ),
		'view_item'             => __( 'View Member', 'viars' ),
		'view_items'            => __( 'View Members', 'viars' ),
		'search_items'          => __( 'Search Member', 'viars' ),
		'not_found'             => __( 'Not found', 'viars' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'viars' ),
		'featured_image'        => __( 'Featured Image', 'viars' ),
		'set_featured_image'    => __( 'Set featured image', 'viars' ),
		'remove_featured_image' => __( 'Remove featured image', 'viars' ),
		'use_featured_image'    => __( 'Use as featured image', 'viars' ),
		'insert_into_item'      => __( 'Insert into item', 'viars' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'viars' ),
		'items_list'            => __( 'Items list', 'viars' ),
		'items_list_navigation' => __( 'Items list navigation', 'viars' ),
		'filter_items_list'     => __( 'Filter items list', 'viars' ),
	);
	$args = array(
		'label'                 => __( 'Team Member', 'viars' ),
        'description'           => __( 'This is where you can create and manage team members.', 'viars' ),
        // 'taxonomies'            => array( 'department' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'page-attributes', 'custom-fields'),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
        'menu_position'         => 20,
        'menu_icon'             => 'dashicons-groups',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'team_member', $args );

}
add_action( 'init', 'viars_member_custom_post_type', 0 );




