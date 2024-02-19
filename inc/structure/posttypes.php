<?php
// Register Custom Post Type

function kato_register_new_customer() {
    $args = array(
        'public' => true,
        'query_var' => 'new',
        'rewrite' => array(
            'slug' => 'news',
            'with_front' => false
        ),
        'supports' => array('title', 'editor', 'author', 'thumbnail', 'custom-fields', 'excerpt'),
        'menu_position' => 21,
        'labels' => array(
            'name' => 'News',
            'singular_name' => 'new',
            'add_new' => 'Add New new',
            'add_new_item' => 'Add New new',
            'edit_item' => 'Edit new',
            'new_item' => 'New new',
            'view_item' => 'View new',
            'search_items' => 'Search news',
            'not_found' => 'No news found',
            'not_found_in_trash' => 'No news found in Trash',
        ),
    );

    register_post_type('new', $args);
}
add_action( 'init', 'kato_register_new_customer' );

function kato_register_projects() {
    $args = array(
        'public' => true,
        'query_var' => 'projects',
        'rewrite' => array(
            'slug' => 'projects',
            'with_front' => false
        ),
        'supports' => array('title', 'editor', 'author', 'thumbnail', 'custom-fields', 'excerpt'),
        'menu_position' => 21,
        'labels' => array(
            'name' => 'Projects',
            'singular_name' => 'projects',
            'add_new' => 'Add New projects',
            'add_new_item' => 'Add New projects',
            'edit_item' => 'Edit projects',
            'new_item' => 'New projects',
            'view_item' => 'View projects',
            'search_items' => 'Search projects',
            'not_found' => 'No projects found',
            'not_found_in_trash' => 'No projects found in Trash',
        )
    );
    $label_apartments_taxonomy = array(
        "name" => _x("Apartments", "Taxonomy general name"),
		"singular" => _x("Apartment", "Taxonomy singular name"),
		"menu_name" => __("Apartments Type")
    );
    $apartments_taxonomy = array(
		"labels"                     => $label_apartments_taxonomy,
		"hierarchical"               => true,
		"public"                     => true,
		"show_ui"                    => true,
		"show_admin_column"          => true,
		"show_in_nav_menus"          => true,
		"show_tagcloud"              => true,
        'rewrite' => array( 'slug' => 'apartments' ),
	);
    $label_locations_taxonomy = array(
        "name" => _x("Locations", "Taxonomy general name"),
		"singular" => _x("Locations", "Taxonomy singular name"),
		"menu_name" => __("Locations")
    );
    $locations_taxonomy = array(
		"labels"                     => $label_locations_taxonomy,
		"hierarchical"               => true,
		"public"                     => true,
		"show_ui"                    => true,
		"show_admin_column"          => true,
		"show_in_nav_menus"          => true,
		"show_tagcloud"              => true,
        'rewrite' => array( 'slug' => 'locations' ),
	);
    register_taxonomy("locations", "projects", $locations_taxonomy);
    register_taxonomy("apartments", "projects", $apartments_taxonomy);
    register_post_type('projects', $args);
}
add_action( 'init', 'kato_register_projects' );

function kato_register_partner() {
    $args = array(
        'public' => true,
        'query_var' => 'partner',
        'rewrite' => array(
            'slug' => 'partners',
            'with_front' => false
        ),
        'supports' => array('title', 'editor', 'author', 'thumbnail', 'custom-fields', 'excerpt'),
        'menu_position' => 21,
        'labels' => array(
            'name' => 'Partners',
            'singular_name' => 'partner',
            'add_new' => 'Add New partner',
            'add_new_item' => 'Add New partner',
            'edit_item' => 'Edit partner',
            'new_item' => 'New partner',
            'view_item' => 'View partner',
            'search_items' => 'Search partners',
            'not_found' => 'No partners found',
            'not_found_in_trash' => 'No partners found in Trash',
        ),
    );

    register_post_type('partner', $args);
}
add_action( 'init', 'kato_register_partner' );

function kato_register_heroslider() {
    $args = array(
        'public' => true,
        'query_var' => 'heroslider',
        'rewrite' => array(
            'slug' => 'herosliders',
            'with_front' => false
        ),
        'supports' => array('title', 'editor', 'author', 'thumbnail', 'custom-fields', 'excerpt'),
        'menu_position' => 21,
        'labels' => array(
            'name' => 'Herosliders',
            'singular_name' => 'heroslider',
            'add_new' => 'Add New heroslider',
            'add_new_item' => 'Add New heroslider',
            'edit_item' => 'Edit heroslider',
            'new_item' => 'New heroslider',
            'view_item' => 'View heroslider',
            'search_items' => 'Search herosliders',
            'not_found' => 'No herosliders found',
            'not_found_in_trash' => 'No herosliders found in Trash',
        ),
    );

    register_post_type('heroslider', $args);
}
add_action( 'init', 'kato_register_heroslider' );


function kato_register_value() {
    $args = array(
        'public' => true,
        'query_var' => 'value',
        'rewrite' => array(
            'slug' => 'values',
            'with_front' => false
        ),
        'supports' => array('title', 'editor', 'author', 'thumbnail', 'custom-fields', 'excerpt'),
        'menu_position' => 21,
        'labels' => array(
            'name' => 'Values',
            'singular_name' => 'value',
            'add_new' => 'Add New value',
            'add_new_item' => 'Add New value',
            'edit_item' => 'Edit value',
            'new_item' => 'New value',
            'view_item' => 'View value',
            'search_items' => 'Search values',
            'not_found' => 'No values found',
            'not_found_in_trash' => 'No values found in Trash',
        ),
    );

    register_post_type('value', $args);
}
add_action( 'init', 'kato_register_value' );

function kato_register_services() {
    $args = array(
        'public' => true,
        'query_var' => 'services',
        'rewrite' => array(
            'slug' => 'servicess',
            'with_front' => false
        ),
        'supports' => array('title', 'editor', 'author', 'thumbnail', 'custom-fields', 'excerpt'),
        'menu_position' => 21,
        'labels' => array(
            'name' => 'Services',
            'singular_name' => 'services',
            'add_new' => 'Add New services',
            'add_new_item' => 'Add New services',
            'edit_item' => 'Edit services',
            'new_item' => 'New services',
            'view_item' => 'View services',
            'search_items' => 'Search servicess',
            'not_found' => 'No servicess found',
            'not_found_in_trash' => 'No servicess found in Trash',
        ),
    );

    register_post_type('services', $args);
}
add_action( 'init', 'kato_register_services' );