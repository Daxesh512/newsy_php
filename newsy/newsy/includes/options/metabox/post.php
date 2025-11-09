<?php

/**
 * Header Settings Tab.
 */
$fields[] = array(
	'heading' => esc_html__( 'Post', 'newsy' ),
	'id'      => 'post',
	'type'    => 'section',
	'icon'    => 'fa-file-text',
);
$fields[] = array(
	'heading'     => esc_html__( 'Post template', 'newsy' ),
	'description' => esc_html__( 'Override template for single post.', 'newsy' ),
	'id'          => 'post_template',
	'type'        => 'radio_image',
	'options'     => newsy_get_single_template_options( true ),
	'section'     => 'post',
);

$fields[] = array(
	'id'          => 'post_thumbnail_size',
	'type'        => 'select',
	'heading'     => esc_html__( 'Post Thumbnail Size', 'newsy' ),
	'description' => esc_html__( 'Choose image thumbnail size.', 'newsy' ),
	'options'     => array(
		''         => esc_html__( 'Default - From Theme Panel', 'newsy' ),
		'crop-500' => esc_html__( 'Crop 1/2 Dimension', 'newsy' ),
		'crop-715' => esc_html__( 'Crop Wide Height Dimension', 'newsy' ),
		'no-crop'  => esc_html__( 'No Crop (Auto Height)', 'newsy' ),
	),
	'selectize'   => false,
	'section'     => 'post',
	'dependency'  => array(
		'element' => 'post_show_featured_image',
		'value'   => array( '', 'show' ),
	),
);

$fields[] = array(
	'heading'     => esc_html__( 'Post Featured Video', 'newsy' ),
	'description' => esc_html__( 'Set featured post video. Set post format as Video for this setting', 'newsy' ),
	'id'          => 'featured_video',
	'type'        => 'mix_fields',
	'fields'      => array(
		array(
			'id'              => 'type',
			'type'            => 'select',
			'selectize'       => false,
			'container_class' => 'control-heading-full',
			'options'         => array(
				''       => 'No video',
				'url'    => 'From the Url (Youtube, Vimeo etc.)',
				'upload' => 'Upload',
			),
		),
		array(
			'heading'         => esc_html__( 'Video Url', 'newsy' ),
			'id'              => 'url',
			'type'            => 'text',
			'container_class' => 'control-heading-full',
			'dependency'      => array(
				'element' => 'type',
				'value'   => array( 'url' ),
			),
		),
		array(
			'heading'         => esc_html__( 'Mp4 Video', 'newsy' ),
			'id'              => 'mp4',
			'type'            => 'media',
			'media_type'      => 'video/mp4',
			'button_text'     => esc_html__( 'Upload .mp4', 'newsy' ),
			'media_title'     => esc_html__( 'Upload .mp4', 'newsy' ),
			'container_class' => 'control-heading-full',
			'dependency'      => array(
				'element' => 'type',
				'value'   => array( 'upload' ),
			),
		),
		array(
			'heading'         => esc_html__( 'Webm Video', 'newsy' ),
			'id'              => 'webm',
			'type'            => 'media',
			'media_type'      => 'video/webm',
			'button_text'     => esc_html__( 'Upload .webm', 'newsy' ),
			'media_title'     => esc_html__( 'Upload .webm', 'newsy' ),
			'container_class' => 'control-heading-full',
			'dependency'      => array(
				'element' => 'type',
				'value'   => array( 'upload' ),
			),
		),
		array(
			'heading'         => esc_html__( 'Is Gif Video?', 'newsy' ),
			'id'              => 'gif',
			'type'            => 'switcher',
			'container_class' => 'control-heading-full',
			'options'         => array(
				'on'  => 'yes',
				'off' => '',
			),
			'dependency'      => array(
				'element' => 'type',
				'value'   => array( 'upload' ),
			),
		),
		array(
			'heading'         => esc_html__( 'Video Length', 'newsy' ),
			'id'              => 'length',
			'type'            => 'text',
			'container_class' => 'control-heading-full',
			'dependency'      => array(
				'element' => 'type',
				'value'   => array( 'url', 'upload' ),
			),
		),
	),
	'section'     => 'post',
);
$fields[] = array(
	'heading'     => esc_html__( 'Post Primary Category', 'newsy' ),
	'description' => esc_html__( 'Set primary post category. This is used on block posts.', 'newsy' ),
	'id'          => 'post_primary_category',
	'type'        => 'select',
	'options'     => array(
		''                 => esc_html__( '-- Auto Select --', 'newsy' ),
		'options_callback' => 'Ak\Form\FormCallback::get_categories',
	),
	'section'     => 'post',
);

$fields[] = array(
	'heading'   => esc_html__( 'Show Breadcrumb?', 'newsy' ),
	'id'        => 'post_breadcrumb',
	'type'      => 'select',
	'selectize' => false,
	'options'   => array(
		''     => esc_html__( 'Default - From Theme Panel', 'newsy' ),
		'show' => esc_html__( 'Yes', 'newsy' ),
		'hide' => esc_html__( 'No', 'newsy' ),
	),
	'section'   => 'post',
);

$fields[] = array(
	'heading' => esc_html__( 'Show Categories?', 'newsy' ),
	'id'      => 'post_show_categories',
	'type'    => 'select',
	'options' => array(
		''     => esc_html__( 'Default - From Theme Panel', 'newsy' ),
		'show' => esc_html__( 'Yes', 'newsy' ),
		'hide' => esc_html__( 'No', 'newsy' ),
	),
	'section' => 'post',
);

$fields[] = array(
	'heading'   => esc_html__( 'Show Featured Image/Video?', 'newsy' ),
	'id'        => 'post_show_featured_image',
	'type'      => 'select',
	'selectize' => false,
	'options'   => array(
		''     => esc_html__( 'Default - From Theme Panel', 'newsy' ),
		'show' => esc_html__( 'Yes', 'newsy' ),
		'hide' => esc_html__( 'No', 'newsy' ),
	),
	'section'   => 'post',
);

$fields[] = array(
	'heading'   => esc_html__( 'Show Excerpt?', 'newsy' ),
	'id'        => 'post_show_excerpt',
	'type'      => 'select',
	'selectize' => false,
	'options'   => array(
		''     => esc_html__( 'Default - From Theme Panel', 'newsy' ),
		'show' => esc_html__( 'Yes', 'newsy' ),
		'hide' => esc_html__( 'No', 'newsy' ),
	),
	'section'   => 'post',
);
$fields[] = array(
	'heading'   => esc_html__( 'Show Tags?', 'newsy' ),
	'id'        => 'post_show_tags',
	'type'      => 'select',
	'selectize' => false,
	'options'   => array(
		''     => esc_html__( 'Default - From Theme Panel', 'newsy' ),
		'show' => esc_html__( 'Yes', 'newsy' ),
		'hide' => esc_html__( 'No', 'newsy' ),
	),
	'section'   => 'post',
);
$fields[] = array(
	'heading'   => esc_html__( 'Show Next/Prev Post Links?', 'newsy' ),
	'id'        => 'post_show_next_prev',
	'type'      => 'select',
	'selectize' => false,
	'options'   => array(
		''     => esc_html__( 'Default - From Theme Panel', 'newsy' ),
		'show' => esc_html__( 'Yes', 'newsy' ),
		'hide' => esc_html__( 'No', 'newsy' ),
	),
	'section'   => 'post',
);
$fields[] = array(
	'heading'   => esc_html__( 'Show Author Box?', 'newsy' ),
	'id'        => 'post_show_author_box',
	'type'      => 'select',
	'selectize' => false,
	'options'   => array(
		''     => esc_html__( 'Default - From Theme Panel', 'newsy' ),
		'show' => esc_html__( 'Yes', 'newsy' ),
		'hide' => esc_html__( 'No', 'newsy' ),
	),
	'section'   => 'post',
);
$fields[] = array(
	'heading'   => esc_html__( 'Related Posts Type', 'newsy' ),
	'id'        => 'post_related_type',
	'type'      => 'select',
	'selectize' => false,
	'options'   => array(
		''         => esc_html__( 'Default - From Theme Panel', 'newsy' ),
		'simple'   => esc_html__( 'Show Related Posts', 'newsy' ),
		'infinity' => esc_html__( 'Auto Loaded Related Posts', 'newsy' ),
		'hide'     => esc_html__( 'Hide', 'newsy' ),
	),
	'section'   => 'post',
);

// Layout Settings
$fields[] = array(
	'heading' => esc_html__( 'Others', 'newsy' ),
	'id'      => 'others',
	'type'    => 'section',
	'icon'    => 'fa-gears',
);

$fields = array_merge( $fields, newsy_get_layout_fields( 'post', 'others', 'body.single-post' ) );

$fields[] = array(
	'heading'     => esc_html__( 'Main Navigation Menu', 'newsy' ),
	'description' => esc_html__( 'Replace & change main menu for this page.', 'newsy' ),
	'id'          => 'post_main_nav_menu',
	'type'        => 'select',
	'options'     => array(
		''                 => esc_html__( '-- Default Main Navigation --', 'newsy' ),
		'options_callback' => 'Ak\Form\FormCallback::get_menus',
	),
	'section'     => 'others',
);
