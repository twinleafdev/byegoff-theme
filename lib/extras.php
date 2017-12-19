<?php

namespace Roots\Sage\Extras;

use Roots\Sage\Setup;

/**
 * Add <body> classes
 */
function body_class($classes) {
  // Add page slug if it doesn't exist
  if (is_single() || is_page() && !is_front_page()) {
    if (!in_array(basename(get_permalink()), $classes)) {
      $classes[] = basename(get_permalink());
    }
  }

  // Add class if sidebar is active
  if (Setup\display_sidebar()) {
    $classes[] = 'sidebar-primary';
  }

  return $classes;
}
add_filter('body_class', __NAMESPACE__ . '\\body_class');

/**
 * Clean up the_excerpt()
 */
function excerpt_more() {
  return ' &hellip; <a href="' . get_permalink() . '">' . __('Continued', 'sage') . '</a>';
}
add_filter('excerpt_more', __NAMESPACE__ . '\\excerpt_more');
require_once('class-wp-bootstrap-navwalker.php');

// filter the Gravity Forms button type
add_filter( 'gform_submit_button', __NAMESPACE__ . '\\form_submit_button', 10, 2 );
function form_submit_button( $button, $form ) {
    return "<span class='btn-wrap float-right'><button class='btn btn-warning' id='gform_submit_button_{$form['id']}'>Send Message</button></span>";
}

// global options page
add_action('acf/init', __NAMESPACE__ . '\\my_acf_init');

function my_acf_init() {
	
	if( function_exists('acf_add_options_page') ) {
		
		$option_page = acf_add_options_page(array(
			'page_title' 	=> 'Global Options',
			'menu_title' 	=> 'Global Options',
			'menu_slug' 	=> 'global-options',
			'capability' 	=> 'edit_posts',
			'redirect' 	=> false
		));
		
	}
	
}

// Register Custom Post Type
function attorney_post_type() {

	$labels = array(
		'name'                  => _x( 'Attorneys', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Attorney', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Our Attorneys', 'text_domain' ),
		'name_admin_bar'        => __( 'Our Attorneys', 'text_domain' ),
		'archives'              => __( 'Attorney Archives', 'text_domain' ),
		'attributes'            => __( 'Attorney Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Attorneys', 'text_domain' ),
		'add_new_item'          => __( 'Add New Attorney', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Attorney', 'text_domain' ),
		'edit_item'             => __( 'Edit Attorney', 'text_domain' ),
		'update_item'           => __( 'Update Attorney', 'text_domain' ),
		'view_item'             => __( 'View Attorney', 'text_domain' ),
		'view_items'            => __( 'View Attorney', 'text_domain' ),
		'search_items'          => __( 'Search Attorney', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Attorney', 'text_domain' ),
		'description'           => __( 'Our Attorneys', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'our-attorneys', $args );

}
add_action( 'init', __NAMESPACE__ .'\\attorney_post_type', 0 );