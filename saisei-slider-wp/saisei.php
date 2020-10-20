<?php
/*
Plugin Name: Saisei Slider WP
Description: Manage Saisei Slider slideshows.
Version: 1.0
Author: Jonas Raneryd Imaizumi
Author URI: https://raneryd.se

Please note that this plugin is dependent on ACF Flexible Content fields.
See https://www.advancedcustomfields.com/ for more information.
*/

// Register a custom post type for managinge slideshows
add_action( 'init', 'register_cpt_saisei_slider' );
function register_cpt_saisei_slider() {
	$labels = array( 
		'name' => _x( 'Saisei Slider', 'saisei_slider' ),
		'singular_name' => _x( 'Saisei Slider', 'saisei_slider' ),
		'add_new' => _x( 'Add new', 'saisei_slider' ),
		'add_new_item' => _x( 'Add new slideshow', 'saisei_slider' ),
		'edit_item' => _x( 'Edit slideshow', 'saisei_slider' ),
		'new_item' => _x( 'New slideshow', 'saisei_slider' ),
		'view_item' => _x( 'View slideshow', 'saisei_slider' ),
		'search_items' => _x( 'Search slideshows', 'saisei_slider' ),
		'not_found' => _x( 'No slideshows found', 'saisei_slider' ),
		'not_found_in_trash' => _x( 'No slideshows found in trash', 'saisei_slider' ),
		'parent_item_colon' => _x( 'Parent Slideshow:', 'saisei_slider' ),
		'menu_name' => _x( 'Saisei Slider', 'saisei_slider' ),
	);

	$args = array( 
		'labels' => $labels,
		'hierarchical' => false,
		'supports' => array( 'title' ),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 8,
		'menu_icon' => 'dashicons-images-alt2',
		'show_in_nav_menus' => true,
		'publicly_queryable' => true,
		'exclude_from_search' => true,
		'has_archive' => true,
		'query_var' => true,
		'can_export' => true,
		'rewrite' => array('slug' => 'saisei-slider','with_front' => false),
		'capability_type' => 'post'
	);

	register_post_type( 'saisei_slider', $args );
}

// Add all necessary ACF fields
if( function_exists('acf_add_local_field_group') ):

	acf_add_local_field_group(array(
		'key' => 'group_5f8ed8dea1aeb',
		'title' => 'Saisei Slider',
		'fields' => array(
			array(
				'key' => 'field_5f8ed9378c8f8',
				'label' => 'Saisei Slides',
				'name' => 'saisei_slides',
				'type' => 'flexible_content',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'layouts' => array(
					'layout_5f8ed94a4cc48' => array(
						'key' => 'layout_5f8ed94a4cc48',
						'name' => 'image_slide',
						'label' => 'Image Slide',
						'display' => 'block',
						'sub_fields' => array(
							array(
								'key' => 'field_5f8ed9718c8f9',
								'label' => 'Image',
								'name' => 'image',
								'type' => 'image',
								'instructions' => 'Images are not resized, upload production ready images in the correct format for your intended screen.',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array(
									'width' => '',
									'class' => '',
									'id' => '',
								),
								'return_format' => 'url',
								'preview_size' => 'medium',
								'library' => 'all',
								'min_width' => '',
								'min_height' => '',
								'min_size' => '',
								'max_width' => '',
								'max_height' => '',
								'max_size' => '',
								'mime_types' => '',
							),
							array(
								'key' => 'field_5f8ed98f8c8fa',
								'label' => 'Timeout',
								'name' => 'timeout',
								'type' => 'number',
								'instructions' => 'How long (in milliseconds) to show the image for until moving to the next slide.',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array(
									'width' => '',
									'class' => '',
									'id' => '',
								),
								'default_value' => 5000,
								'placeholder' => '',
								'prepend' => '',
								'append' => '',
								'min' => '',
								'max' => '',
								'step' => '',
							),
						),
						'min' => '',
						'max' => '',
					),
					'layout_5f8ed9ef8c8fb' => array(
						'key' => 'layout_5f8ed9ef8c8fb',
						'name' => 'video_slide',
						'label' => 'Video Slide',
						'display' => 'block',
						'sub_fields' => array(
							array(
								'key' => 'field_5f8ed9f68c8fc',
								'label' => 'Video',
								'name' => 'video',
								'type' => 'file',
								'instructions' => 'Supports mp4 files with h264 codec. Videos always play until they end and then move to the next slide.',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array(
									'width' => '',
									'class' => '',
									'id' => '',
								),
								'return_format' => 'url',
								'library' => 'all',
								'min_size' => '',
								'max_size' => '',
								'mime_types' => '',
							),
						),
						'min' => '',
						'max' => '',
					),
					'layout_5f8eda308c8fd' => array(
						'key' => 'layout_5f8eda308c8fd',
						'name' => 'iframe_slide',
						'label' => 'Iframe Slide',
						'display' => 'block',
						'sub_fields' => array(
							array(
								'key' => 'field_5f8eda368c8fe',
								'label' => 'Iframe',
								'name' => 'iframe',
								'type' => 'url',
								'instructions' => 'Accepts a URL that will be embedded as an iframe.',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array(
									'width' => '',
									'class' => '',
									'id' => '',
								),
								'default_value' => '',
								'placeholder' => '',
							),
							array(
								'key' => 'field_5f8edc368eec9',
								'label' => 'Timeout',
								'name' => 'timeout',
								'type' => 'number',
								'instructions' => 'How long (in milliseconds) to show the image for until moving to the next slide.',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array(
									'width' => '',
									'class' => '',
									'id' => '',
								),
								'default_value' => 5000,
								'placeholder' => '',
								'prepend' => '',
								'append' => '',
								'min' => '',
								'max' => '',
								'step' => '',
							),
						),
						'min' => '',
						'max' => '',
					),
				),
				'button_label' => 'Lägg till rad',
				'min' => '',
				'max' => '',
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'saisei_slider',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => true,
		'description' => '',
	));
	
endif;

// Make view available
add_filter('template_include', 'saisei_views');
function saisei_views( $template ) {
	$post_types = array('saisei_slider');

	if (is_singular($post_types)) {
		$template = plugin_dir_path(__FILE__) . 'single-saisei_slider.php';
	}

	return $template;
}