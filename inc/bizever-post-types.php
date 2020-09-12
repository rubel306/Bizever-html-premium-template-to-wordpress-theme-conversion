<?php 

//register custom post types

function bizever_post_types(){

	//register faqs
	register_post_type('bizever-faq', array(
		'labels'	=>array(
			'name'		=> __('FAQs', 'bizever'),
			'singular_name'	=> __('FAQ', 'bizever'),
		),
		'public'		=> true, 
		'menu_icon'		=> 'dashicons-edit',
		'supports'		=> array('title', 'editor'),

	));

	//pricing post type
	register_post_type('bizever-pricing', array(
		'labels'	=>array(
			'name'		=> __('Pricing', 'bizever'),
			'singular_name'	=> __('Pricing', 'bizever'),
		),
		'public'		=> true, 
		'menu_icon'		=> 'dashicons-money',
		'supports'		=> array('title', 'editor'),

	));

	//team post type
	register_post_type('bizever-team', array(
		'labels'	=>array(
			'name'		=> __('Team', 'bizever'),
			'singular_name'	=> __('Team', 'bizever'),
			'add_new_item' => __( 'Add New Team Member', 'bizever' ),
		),
		'public'		=> true, 
		'menu_icon'		=> 'dashicons-businessman',
		'supports'		=> array('title', 'editor', 'thumbnail'),

	));



}
add_action('init', 'bizever_post_types');
