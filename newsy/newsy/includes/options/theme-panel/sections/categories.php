<?php

$fields[] = array(
	'heading'     => esc_html__( 'Tip', 'newsy' ),
	'description' => esc_html__( 'You can override this settings for per category in category edit pages', 'newsy' ),
	'id'          => 'cat_info',
	'type'        => 'info',
	'info_type'   => 'tip',
	'section'     => 'categories',
);

$fields[] = array(
	'heading' => esc_html__( 'Category: Header', 'newsy' ),
	'id'      => 'category_header_style_group_start',
	'type'    => 'group_start',
	'state'   => 'open',
	'section' => 'categories',
);
$fields[] = array(
	'heading'          => esc_html__( 'Header Template', 'newsy' ),
	'description'      => esc_html__( 'Select a category header style.', 'newsy' ),
	'id'               => 'category_header_style',
	'type'             => 'radio_image',
	'options_callback' => 'newsy_get_archive_header_options',
	'section'          => 'categories',
);
$fields[] = array(
	'heading'     => esc_html__( 'Header Background Color', 'newsy' ),
	'description' => esc_html__( 'Select a category header background color.', 'newsy' ),
	'id'          => 'category_header_bg_color',
	'type'        => 'color',
	'section'     => 'categories',
	'output'      => array(
		array(
			'type'     => 'css',
			'element'  => '.archive-header-has-bg',
			'property' => 'background-color',
		),
	),
	'dependency'  => array(
		'element' => 'category_header_style',
		'value'   => array( 'style-5', 'style-6', 'style-7', 'style-8', 'style-9', 'style-10' ),
	),
);

$fields[] = array(
	'heading'      => esc_html__( 'Header Background Image', 'newsy' ),
	'description'  => esc_html__( 'Set a background image. For patterns, use a repeating background. Use photo to fully cover the background with an image. Note that it will override the background color option.', 'newsy' ),
	'id'           => 'category_header_bg_image',
	'type'         => 'background_image',
	'upload_label' => esc_html__( 'Upload Image', 'newsy' ),
	'section'      => 'categories',
	'output'       => array(
		array(
			'type'     => 'css',
			'element'  => '.archive-header-has-bg',
			'property' => 'background-image',
		),
	),
	'dependency'   => array(
		'element' => 'category_header_style',
		'value'   => array( 'style-5', 'style-6', 'style-7', 'style-8', 'style-9', 'style-10' ),
	),
);

$fields[] = array(
	'heading'    => esc_html__( 'Header Padding Top', 'newsy' ),
	'id'         => 'category_header_padding_top',
	'type'       => 'slider',
	'default'    => 40,
	'min'        => 10,
	'max'        => 200,
	'step'       => 1,
	'unit'       => 'px',
	'section'    => 'categories',
	'output'     => array(
		array(
			'type'     => 'css',
			'element'  => '.archive-header-has-bg',
			'property' => 'padding-top',
			'units'    => 'px',
		),
	),
	'dependency' => array(
		'element' => 'category_header_style',
		'value'   => array( 'style-5', 'style-6', 'style-7', 'style-8', 'style-9', 'style-10' ),
	),
);
$fields[] = array(
	'heading'    => esc_html__( 'Header Padding Bottom', 'newsy' ),
	'id'         => 'category_header_padding_bottom',
	'type'       => 'slider',
	'default'    => 40,
	'min'        => 10,
	'max'        => 200,
	'step'       => 1,
	'unit'       => 'px',
	'section'    => 'categories',
	'output'     => array(
		array(
			'type'     => 'css',
			'element'  => '.archive-header-has-bg',
			'property' => 'padding-bottom',
			'units'    => 'px',
		),
	),
	'dependency' => array(
		'element' => 'category_header_style',
		'value'   => array( 'style-5', 'style-6', 'style-7', 'style-8', 'style-9', 'style-10' ),
	),
);

$fields[] = array(
	'heading' => esc_html__( 'Show Breadcrumb?', 'newsy' ),
	'id'      => 'category_show_breadcrumb',
	'type'    => 'switcher',
	'options' => array(
		'off' => 'hide',
		'on'  => '',
	),
	'section' => 'categories',
);
$fields[] = array(
	'heading' => esc_html__( 'Show Description?', 'newsy' ),
	'id'      => 'category_show_description',
	'type'    => 'switcher',
	'options' => array(
		'off' => 'hide',
		'on'  => '',
	),
	'section' => 'categories',
);
$fields[] = array(
	'heading' => esc_html__( 'Show Subcategories?', 'newsy' ),
	'id'      => 'category_show_subcategories',
	'type'    => 'switcher',
	'options' => array(
		'off' => 'hide',
		'on'  => '',
	),
	'section' => 'categories',
);

$fields[] = array(
	'heading' => esc_html__( 'Category: Layout ', 'newsy' ),
	'id'      => 'category_layout_group_start',
	'type'    => 'group_start',
	'section' => 'categories',
);
$fields   = array_merge( $fields, newsy_get_layout_fields( 'category', 'categories', 'body.category' ) );

$fields[] = array(
	'heading' => esc_html__( 'Category: Grid', 'newsy' ),
	'id'      => 'category_grid_group_start',
	'type'    => 'group_start',
	'section' => 'categories',
);

$fields = array_merge( $fields, newsy_get_grid_fields( 'category', 'categories' ) );

$fields[] = array(
	'heading' => esc_html__( 'Category: Listing ', 'newsy' ),
	'id'      => 'category_listing_group_start',
	'type'    => 'group_start',
	'section' => 'categories',
);

$fields = array_merge( $fields, newsy_get_list_fields( 'category', 'categories' ) );

