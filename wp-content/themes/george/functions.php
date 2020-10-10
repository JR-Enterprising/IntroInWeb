<?php 
function car_custom_post_type(){
	
	$labels = array(
		'name' => 'Car',
		'singular_name' => 'Car',
		'add_new' => 'Add New Car',
		'all_items' => 'All Cars',
		'add_new_item' => 'Add New Car',
		'edit_item' => 'Edit Car',
        'menu_name' => 'Cars',
        'parent_item_colon' => 'Parent Car',
        'view_item' => 'View Car',
        'update_item' => 'Update Car',
        'search_items' => 'Search Cars',
        'not_found' => 'Not Found',
        'not_found_in_trash' => 'Not found in Trash',
	);
	$args = array(
		'labels' => $labels,
		'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 5,
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'post',
        'show_in_rest' => true,
		'menu_icon' => 'dashicons-car',
		'supports' => [
            'title',
            'editor',
            'excerpt',
            'author',
            'thumbnail',
            'revisions',
            'custom-fields',
		],
		'taxonomies' => [
            'genres'
        ]
	);
	register_post_type('car', $args);
}
add_action('init', 'car_custom_post_type');
add_action('wp_enqueue_scripts', function(){
    wp_register_style('car_style', get_template_directory_uri(). '/assets/css/cars.css', array(), false , 'all');
    wp_enqueue_style('car_style');
    wp_register_style('stylesheet', get_template_directory_uri(). '/assets/css/bootstrap.min.css', array(), false , 'all');
    wp_enqueue_style('stylesheet');
    wp_register_script('scripting', get_template_directory_uri(). '/assets/js/bootstrap.min.js', array(), false , 'all');
    wp_enqueue_script('scripting');
});
