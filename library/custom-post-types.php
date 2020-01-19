<?php

// Register Produse
function custom_post_type()
{

	$labels = array(
		'name' => _x('Produse', 'Post Type General Name', 'davtrax'),
		'singular_name' => _x('Produs', 'Post Type Singular Name', 'davtrax'),
		'menu_name' => __('Produse', 'davtrax'),
		'name_admin_bar' => __('Produse', 'davtrax'),
		'archives' => __('Arhiva Produse', 'davtrax'),
		'attributes' => __('Atribute Produse', 'davtrax'),
		'parent_item_colon' => __('Produs parinte:', 'davtrax'),
		'all_items' => __('Toate produsele', 'davtrax'),
		'add_new_item' => __('Adauga produs nou', 'davtrax'),
		'add_new' => __('Adauga', 'davtrax'),
		'new_item' => __('Produs nou', 'davtrax'),
		'edit_item' => __('Editeaza', 'davtrax'),
		'update_item' => __('Update', 'davtrax'),
		'view_item' => __('Vizualizeaza', 'davtrax'),
		'view_items' => __('Vizualizeaza', 'davtrax'),
		'search_items' => __('Cauta produse', 'davtrax'),
		'not_found' => __('Nu am gasit', 'davtrax'),
		'not_found_in_trash' => __('Not found in Trash', 'davtrax'),
		'featured_image' => __('Featured Image', 'davtrax'),
		'set_featured_image' => __('Set featured image', 'davtrax'),
		'remove_featured_image' => __('Remove featured image', 'davtrax'),
		'use_featured_image' => __('Use as featured image', 'davtrax'),
		'insert_into_item' => __('Insert into item', 'davtrax'),
		'uploaded_to_this_item' => __('Uploaded to this item', 'davtrax'),
		'items_list' => __('Items list', 'davtrax'),
		'items_list_navigation' => __('Items list navigation', 'davtrax'),
		'filter_items_list' => __('Filter items list', 'davtrax'),
	);
	$args = array(
		'label' => __('Produs', 'davtrax'),
		'labels' => $labels,
		'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
		'taxonomies' => array('category', 'post_tag'),
		'hierarchical' => false,
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'exclude_from_search' => false,
		'publicly_queryable' => true,
		'capability_type' => 'page',
		'rewrite' => array(
			'slug' => 'produse',
			'with_front' => false
		)
	);
	register_post_type('product', $args);

}

add_action('init', 'custom_post_type', 0);

// Register Custom Post Type
function custom_post_type_projects()
{

	$labels = array(
		'name' => _x('Proiecte', 'Post Type General Name', 'text_domain'),
		'singular_name' => _x('Proiect', 'Post Type Singular Name', 'text_domain'),
		'menu_name' => __('Proiecte', 'text_domain'),
		'name_admin_bar' => __('Proiecte', 'text_domain'),
		'archives' => __('Item Archives', 'text_domain'),
		'attributes' => __('Item Attributes', 'text_domain'),
		'parent_item_colon' => __('Parent Item:', 'text_domain'),
		'all_items' => __('All Items', 'text_domain'),
		'add_new_item' => __('Add New Item', 'text_domain'),
		'add_new' => __('Add New', 'text_domain'),
		'new_item' => __('New Item', 'text_domain'),
		'edit_item' => __('Edit Item', 'text_domain'),
		'update_item' => __('Update Item', 'text_domain'),
		'view_item' => __('View Item', 'text_domain'),
		'view_items' => __('View Items', 'text_domain'),
		'search_items' => __('Search Item', 'text_domain'),
		'not_found' => __('Not found', 'text_domain'),
		'not_found_in_trash' => __('Not found in Trash', 'text_domain'),
		'featured_image' => __('Featured Image', 'text_domain'),
		'set_featured_image' => __('Set featured image', 'text_domain'),
		'remove_featured_image' => __('Remove featured image', 'text_domain'),
		'use_featured_image' => __('Use as featured image', 'text_domain'),
		'insert_into_item' => __('Insert into item', 'text_domain'),
		'uploaded_to_this_item' => __('Uploaded to this item', 'text_domain'),
		'items_list' => __('Items list', 'text_domain'),
		'items_list_navigation' => __('Items list navigation', 'text_domain'),
		'filter_items_list' => __('Filter items list', 'text_domain'),
	);
	$args = array(
		'label' => __('Proiect', 'text_domain'),
		'description' => __('Post Type Description', 'text_domain'),
		'labels' => $labels,
		'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
		'taxonomies' => array('category', 'post_tag'),
		'hierarchical' => false,
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'exclude_from_search' => false,
		'publicly_queryable' => true,
		'capability_type' => 'page',
		'rewrite' => array(
			'slug' => 'proiecte',
			'with_front' => false
		)
	);
	register_post_type('Projects', $args);

}

add_action('init', 'custom_post_type_projects', 0);
