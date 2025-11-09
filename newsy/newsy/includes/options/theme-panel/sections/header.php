<?php

$fields[] = array(
	'heading'         => esc_html__( 'Header Custom Template', 'newsy' ),
	'id'              => 'builder_header_part_builder',
	'type'            => 'part_builder',
	'container_class' => 'control-heading-hide',
	'section'         => 'header',
);

$fields[] = array(
	'id'                => 'builder_header_desktop',
	'type'              => 'mix_fields',
	'heading'           => esc_html__( 'Desktop Parts', 'newsy' ),
	'container_class'   => 'hidden',
	'fields'            => Newsy\Support\PartBuilderData::get_header_desktop_fields(),
	'default'           => Newsy\Support\PartBuilderData::builder_header_desktop_defaults(),
	'filter_default'    => false,
	'defaults_on_empty' => true,
	'section'           => 'header',
);
$fields[] = array(
	'id'                => 'builder_header_mobile',
	'type'              => 'mix_fields',
	'heading'           => esc_html__( 'Mobile Parts', 'newsy' ),
	'container_class'   => 'hidden',
	'fields'            => Newsy\Support\PartBuilderData::get_header_mobile_fields(),
	'default'           => Newsy\Support\PartBuilderData::builder_header_mobile_defaults(),
	'filter_default'    => false,
	'defaults_on_empty' => true,
	'section'           => 'header',
);
$fields[] = array(
	'id'                => 'builder_header_sticky',
	'type'              => 'mix_fields',
	'heading'           => esc_html__( 'Sticky Parts', 'newsy' ),
	'container_class'   => 'hidden',
	'fields'            => Newsy\Support\PartBuilderData::get_header_sticky_fields(),
	'default'           => Newsy\Support\PartBuilderData::builder_header_sticky_defaults(),
	'filter_default'    => false,
	'defaults_on_empty' => true,
	'section'           => 'header',
);
$fields[] = array(
	'id'                => 'builder_drawer',
	'type'              => 'mix_fields',
	'heading'           => esc_html__( 'Drawer Parts', 'newsy' ),
	'container_class'   => 'hidden',
	'fields'            => Newsy\Support\PartBuilderData::get_drawer_fields(),
	'default'           => Newsy\Support\PartBuilderData::builder_drawer_defaults(),
	'filter_default'    => false,
	'defaults_on_empty' => true,
	'section'           => 'header',
);

/**
 *  Header Presets
 **/
$fields[] = array(
	'heading' => esc_html__( 'Header Presets', 'newsy' ),
	'id'      => 'header_preset_group_start',
	'type'    => 'group_start',
	'status'  => 'open',
	'section' => 'header',
);
$fields[] = array(
	'heading'     => esc_html__( 'Warning', 'newsy' ),
	'description' => esc_html__( 'This option will reset your settings in header', 'newsy' ),
	'id'          => 'header_preset_info',
	'type'        => 'info',
	'info_type'   => 'warning',
	'section'     => 'header',
);

$fields[] = array(
	'heading'          => esc_html__( 'Header Presets', 'newsy' ),
	'description'      => esc_html__( 'Choose a predefined preset for your layout.', 'newsy' ),
	'id'               => 'header_style',
	'type'             => 'radio_image',
	'options_callback' => 'newsy_get_header_style_options',
	'section'          => 'header',
	'exclude_value'    => true,
	'presets'          => array(
		'style-1' => array_merge(
			Newsy\Support\PartBuilderData::builder_header_desktop_default_preset(),
			array(
				'builder_header_desktop[mid][left][items]' => array( 'logo' ),
				'builder_header_desktop[mid][center][items]' => array( 'main_menu' ),
				'builder_header_desktop[mid][right][items]' => array( 'search', 'shop', 'button1', 'user' ),
				'builder_header_desktop[mid][left][layout]' => 'normal',
				'builder_header_desktop[mid][center][layout]' => 'normal',
				'builder_header_desktop[mid][center][align]' => 'left',
				'header_top_height'                        => '35',
				'header_mid_height'                        => '60',
				'header_bottom_height'                     => '90',
				'header_wrap_shadow'                       => 'active',
			)
		),
		'style-2' => array_merge(
			Newsy\Support\PartBuilderData::builder_header_desktop_default_preset(),
			array(
				'builder_header_desktop[top][scheme]'      => 'dark',
				'builder_header_desktop[top][left][items]' => array( 'top_menu' ),
				'builder_header_desktop[top][right][items]' => array( 'social_icons', 'shop' ),
				'builder_header_desktop[mid][left][items]' => array( 'logo' ),
				'builder_header_desktop[mid][center][items]' => array( 'main_menu' ),
				'builder_header_desktop[mid][right][items]' => array( 'search', 'user' ),
				'header_top_height'                        => '35',
				'header_mid_height'                        => '60',
				'header_bottom_height'                     => '90',
				'header_wrap_shadow'                       => 'active',
			)
		),
		'style-3' => array_merge(
			Newsy\Support\PartBuilderData::builder_header_desktop_default_preset(),
			array(
				'builder_header_desktop[top][left][items]' => array( 'top_menu' ),
				'builder_header_desktop[top][right][items]' => array( 'social_icons' ),
				'builder_header_desktop[mid][left][items]' => array( 'logo' ),
				'builder_header_desktop[mid][left][layout]' => 'normal',
				'builder_header_desktop[mid][right][items]' => array( 'header_ad1' ),
				'builder_header_desktop[bottom][left][items]' => array( 'main_menu' ),
				'builder_header_desktop[bottom][right][items]' => array( 'search', 'user' ),
				'builder_header_desktop[bottom][right][layout]' => 'normal',
				'header_top_height'                        => '35',
				'header_mid_height'                        => '90',
				'header_bottom_height'                     => '60',
				'header_wrap_shadow'                       => 'active',
			)
		),
		'style-4' => array_merge(
			Newsy\Support\PartBuilderData::builder_header_desktop_default_preset(),
			array(
				'builder_header_desktop[top][left][items]' => array( 'top_menu' ),
				'builder_header_desktop[top][right][items]' => array( 'social_icons' ),
				'builder_header_desktop[mid][left][items]' => array( 'logo' ),
				'builder_header_desktop[mid][left][layout]' => 'normal',
				'builder_header_desktop[mid][right][items]' => array( 'header_ad1' ),
				'builder_header_desktop[bottom][left][items]' => array( 'main_menu' ),
				'builder_header_desktop[bottom][right][items]' => array( 'search', 'user' ),
				'builder_header_desktop[bottom][right][layout]' => 'normal',
				'builder_header_desktop[order]'            => array( 'top', 'bottom', 'mid' ),
				'header_top_height'                        => '35',
				'header_mid_height'                        => '90',
				'header_bottom_height'                     => '60',
				'header_wrap_shadow'                       => 'active',
			)
		),
		'style-5' => array_merge(
			Newsy\Support\PartBuilderData::builder_header_desktop_default_preset(),
			array(
				'builder_header_desktop[top][left][items]' => array( 'top_menu' ),
				'builder_header_desktop[top][right][items]' => array( 'social_icons' ),
				'builder_header_desktop[mid][center][items]' => array( 'logo' ),
				'builder_header_desktop[bottom][left][items]' => array( 'main_menu' ),
				'builder_header_desktop[bottom][right][items]' => array( 'search', 'user' ),
				'builder_header_desktop[bottom][right][layout]' => 'normal',
				'builder_header_desktop[order]'            => array( 'top', 'mid', 'bottom' ),
				'header_mid_height'                        => '90',
				'header_wrap_shadow'                       => 'active',
			)
		),

		'style-6' => array_merge(
			Newsy\Support\PartBuilderData::builder_header_desktop_default_preset(),
			array(
				'builder_header_desktop[top][left][items]' => array( 'top_menu' ),
				'builder_header_desktop[top][right][items]' => array( 'social_icons' ),
				'builder_header_desktop[mid][center][items]' => array( 'logo' ),
				'builder_header_desktop[bottom][left][items]' => array( 'main_menu' ),
				'builder_header_desktop[bottom][right][items]' => array( 'search', 'user' ),
				'builder_header_desktop[bottom][right][layout]' => 'normal',
				'builder_header_desktop[order]'            => array( 'top', 'bottom', 'mid' ),
				'header_mid_height'                        => '90',
			)
		),
	),
);
/**
 *  Header Rows
 **/
$fields[] = array(
	'heading' => esc_html__( 'Header Style', 'newsy' ),
	'id'      => 'header_style_group_start',
	'type'    => 'group_start',
	'section' => 'header',
);

$fields[] = array(
	'heading'     => esc_html__( 'Header Background Color', 'newsy' ),
	'description' => esc_html__( 'Select header wrapper color.', 'newsy' ),
	'id'          => 'header_bg_color',
	'type'        => 'color',
	'section'     => 'header',
	'output'      => array(
		array(
			'type'     => 'css',
			'element'  => '.ak-header-wrap',
			'property' => 'background-color',
		),
	),
);
$fields[] = array(
	'heading'      => esc_html__( 'Header Background Image', 'newsy' ),
	'description'  => esc_html__( 'Use light patterns in non-boxed layout. For patterns, use a repeating background. Use photo to fully cover the background with an image. Note that it will override the background color option.', 'newsy' ),
	'id'           => 'header_bg_image',
	'type'         => 'background_image',
	'upload_label' => esc_html__( 'Upload Image', 'newsy' ),
	'section'      => 'header',
	'output'       => array(
		array(
			'type'     => 'css',
			'element'  => '.ak-header-wrap',
			'property' => 'background-image',
		),
	),
);
$fields[] = array(
	'id'          => 'header_wrap_shadow',
	'type'        => 'switcher',
	'heading'     => esc_html__( 'Header Shadow?', 'newsy' ),
	'description' => esc_html__( 'Enable shadow effect for header wrap.', 'newsy' ),
	'options'     => array(
		'on'  => 'active',
		'off' => '',
	),
	'section'     => 'header',
);

$fields[] = array(
	'heading' => esc_html__( 'Header: Desktop Style', 'newsy' ),
	'id'      => 'header_desktop_style_group_start',
	'type'    => 'group_start',
	'section' => 'header',
);
$fields[] = array(
	'id'      => 'top_bar_header',
	'type'    => 'heading',
	'heading' => esc_html__( 'Top Bar', 'newsy' ),
	'section' => 'header',
);
$fields[] = array(
	'id'          => 'header_top_bar_style',
	'type'        => 'css_editor',
	'heading'     => esc_html__( 'Row Style', 'newsy' ),
	'description' => esc_html__( 'Base css style for the row. You can add specific colors and spaces for row.', 'newsy' ),
	'section'     => 'header',
	'output'      => array(
		array(
			'type'     => 'css',
			'element'  => array(
				'.ak-header-wrap .ak-top-bar.full-width',
				'.ak-header-wrap .ak-top-bar.boxed .ak-bar-inner',
			),
			'property' => 'css-editor',
		),
	),
);
$fields[] = array(
	'id'      => 'header_top_height',
	'type'    => 'slider',
	'heading' => esc_html__( 'Row Height', 'newsy' ),
	'section' => 'header',
	'default' => 35,
	'min'     => 20,
	'max'     => 200,
	'step'    => 1,
	'unit'    => 'px',
	'output'  => array(
		array(
			'type'     => 'css',
			'element'  => '.ak-header-wrap .ak-top-bar',
			'property' => 'height',
			'units'    => 'px',
		),
	),
);

$fields[] = array(
	'id'      => 'mid_bar_header',
	'type'    => 'heading',
	'heading' => esc_html__( 'Mid Bar', 'newsy' ),
	'section' => 'header',
);
$fields[] = array(
	'id'          => 'header_mid_bar_style',
	'type'        => 'css_editor',
	'heading'     => esc_html__( 'Row Style', 'newsy' ),
	'description' => esc_html__( 'Base css style for the row. You can add specific colors and spaces for row.', 'newsy' ),
	'section'     => 'header',
	'output'      => array(
		array(
			'type'     => 'css',
			'element'  => array(
				'.ak-header-wrap .ak-mid-bar.full-width',
				'.ak-header-wrap .ak-mid-bar.boxed .ak-bar-inner',
			),
			'property' => 'css-editor',
		),
	),
);
$fields[] = array(
	'id'      => 'header_mid_height',
	'type'    => 'slider',
	'heading' => esc_html__( 'Row Height', 'newsy' ),
	'section' => 'header',
	'default' => 60,
	'min'     => 20,
	'max'     => 300,
	'step'    => 1,
	'unit'    => 'px',
	'output'  => array(
		array(
			'type'     => 'css',
			'element'  => '.ak-header-wrap .ak-mid-bar',
			'property' => 'height',
			'units'    => 'px',
		),
	),
);
$fields[] = array(
	'id'      => 'bottom_bar_header',
	'type'    => 'heading',
	'heading' => esc_html__( 'Bottom Bar', 'newsy' ),
	'section' => 'header',
);
$fields[] = array(
	'id'          => 'header_bottom_bar_style',
	'type'        => 'css_editor',
	'heading'     => esc_html__( 'Row Style', 'newsy' ),
	'description' => esc_html__( 'Base css style for the row. You can add specific colors and spaces for row.', 'newsy' ),
	'section'     => 'header',
	'output'      => array(
		array(
			'type'     => 'css',
			'element'  => array(
				'.ak-header-wrap .ak-bottom-bar.full-width',
				'.ak-header-wrap .ak-bottom-bar.boxed .ak-bar-inner',
			),
			'property' => 'css-editor',
		),
	),
);

$fields[] = array(
	'id'      => 'header_bottom_height',
	'type'    => 'slider',
	'heading' => esc_html__( 'Row Height', 'newsy' ),
	'section' => 'header',
	'default' => 50,
	'min'     => 20,
	'max'     => 300,
	'step'    => 1,
	'unit'    => 'px',
	'output'  => array(
		array(
			'type'     => 'css',
			'element'  => '.ak-header-wrap .ak-bottom-bar',
			'property' => 'height',
			'units'    => 'px',
		),
	),
);


$fields[] = array(
	'heading' => esc_html__( 'Header: Sticky Bar Style', 'newsy' ),
	'id'      => 'header_sticky_group_start',
	'type'    => 'group_start',
	'section' => 'header',
);
$fields[] = array(
	'id'          => 'header_sticky_type',
	'type'        => 'radio_button',
	'heading'     => esc_html__( 'Sticky Type', 'newsy' ),
	'description' => esc_html__( 'Enable sticky effect or disable sticky header.', 'newsy' ),
	'section'     => 'header',
	'default'     => 'hide',
	'options'     => array(
		'smart'  => esc_html__( 'Smart Sticky', 'newsy' ),
		'simple' => esc_html__( 'Simple Sticky', 'newsy' ),
		'hide'   => esc_html__( 'No Sticky', 'newsy' ),
	),
);

$fields[] = array(
	'id'          => 'header_sticky_bar_style',
	'type'        => 'css_editor',
	'heading'     => esc_html__( 'Row Style', 'newsy' ),
	'description' => esc_html__( 'Base css style for the row. You can add specific colors and spaces for row.', 'newsy' ),
	'section'     => 'header',
	'output'      => array(
		array(
			'type'     => 'css',
			'element'  => array(
				'.ak-header-sticky-wrap .ak-sticky-bar.full-width',
				'.ak-header-sticky-wrap .ak-sticky-bar.boxed .ak-bar-inner',
			),
			'property' => 'css-editor',
		),
	),
);
$fields[] = array(
	'id'      => 'header_sticky_height',
	'type'    => 'slider',
	'heading' => esc_html__( 'Row Height', 'newsy' ),
	'section' => 'header',
	'default' => 60,
	'min'     => 20,
	'max'     => 300,
	'step'    => 1,
	'unit'    => 'px',
	'output'  => array(
		array(
			'type'     => 'css',
			'element'  => '.ak-header-sticky-wrap .ak-sticky-bar',
			'property' => 'height',
			'units'    => 'px',
		),
		array(
			'type'     => 'css',
			'element'  => '.ak-header-sticky-wrap .ak-sticky-bar .ak-main-menu > li > a',
			'property' => 'line-height',
			'units'    => 'px',
		),
	),
);
$fields[] = array(
	'heading' => esc_html__( 'Header: Mobile Bar Style', 'newsy' ),
	'id'      => 'header_mobile_group_start',
	'type'    => 'group_start',
	'section' => 'header',
);
$fields[] = array(
	'id'          => 'header_mobile_bar_style',
	'type'        => 'css_editor',
	'heading'     => esc_html__( 'Row Style', 'newsy' ),
	'description' => esc_html__( 'Base css style for the row. You can add specific colors and spaces for row.', 'newsy' ),
	'section'     => 'header',
	'output'      => array(
		array(
			'type'     => 'css',
			'element'  => array(
				'.ak-header-mobile-wrap .ak-mobile-bar.full-width',
				'.ak-header-mobile-wrap .ak-mobile-bar.boxed .ak-bar-inner',
			),
			'property' => 'css-editor',
		),
	),
);
$fields[] = array(
	'id'      => 'header_mobile_height',
	'type'    => 'slider',
	'heading' => esc_html__( 'Row Height', 'newsy' ),
	'section' => 'header',
	'default' => 60,
	'min'     => 20,
	'max'     => 300,
	'step'    => 1,
	'unit'    => 'px',
	'output'  => array(
		array(
			'type'     => 'css',
			'element'  => '.ak-header-mobile-wrap .ak-mobile-bar',
			'property' => 'height',
			'units'    => 'px',
		),
	),
);

$fields[] = array(
	'heading' => esc_html__( 'Header: Drawer Style', 'newsy' ),
	'id'      => 'header_drawer_group_start',
	'type'    => 'group_start',
	'section' => 'header',
);
// $fields[] = array(
// 	'heading'       => esc_html__( 'Row Scheme', 'newsy' ),
// 	'description'   => esc_html__( 'Choose a row color scheme.', 'newsy' ),
// 	'id'            => 'builder_drawer_drawer_scheme',
// 	'type'          => 'select',
// 	'options'       => array(
// 		''     => esc_html__( 'Light', 'newsy' ),
// 		'dark' => esc_html__( 'Dark', 'newsy' ),
// 	),
// 	'section'       => 'header',
// 	'exclude_value' => true,
// 	'presets'       => array(
// 		''     => array(
// 			'builder_drawer[drawer][scheme]' => '',
// 		),
// 		'dark' => array(
// 			'builder_drawer[drawer][scheme]' => 'dark',
// 		),
// 	),
// );

$fields[] = array(
	'id'          => 'drawer_style',
	'type'        => 'css_editor',
	'heading'     => esc_html__( 'Drawer Style', 'newsy' ),
	'description' => esc_html__( 'Set style for Drawer Menu. Tip: Set Dark layout in Header > Drawer Bar if you preffer to use background color or image.', 'newsy' ),
	'section'     => 'header',
	'disable'     => array(
		'border-radius' => true,
		'margin'        => true,
	),
	'output'      => array(
		array(
			'type'     => 'css',
			'element'  => array(
				'.ak-off-canvas-nav',
			),
			'property' => 'css-editor',
		),
	),
);

/**
 *  Header Logo
**/
$fields[] = array(
	'heading' => esc_html__( 'Header: Logo', 'newsy' ),
	'id'      => 'logo_group_start',
	'type'    => 'group_start',
	'state'   => 'close',
	'section' => 'header',
);

$fields = array_merge( $fields, newsy_get_logo_fields( '', 'header', '.ak-header-logo' ) );

/**
 *  Sticky Logo
**/
$fields[] = array(
	'heading' => esc_html__( 'Header: Sticky Logo', 'newsy' ),
	'id'      => 'sticky_logo_group_start',
	'type'    => 'group_start',
	'state'   => 'close',
	'section' => 'header',
);
$fields   = array_merge( $fields, newsy_get_logo_fields( 'sticky', 'header', '.ak-sticky-logo' ) );

/**
 *  Mobile Logo
**/
$fields[] = array(
	'heading' => esc_html__( 'Header: Mobile Logo', 'newsy' ),
	'id'      => 'mobile_logo_group_start',
	'type'    => 'group_start',
	'state'   => 'close',
	'section' => 'header',
);
$fields   = array_merge( $fields, newsy_get_logo_fields( 'mobile', 'header', '.ak-header-mobile-logo' ) );


$fields[] = array(
	'heading' => esc_html__( 'Header: Main Menu', 'newsy' ),
	'id'      => 'main_menu_group_start',
	'type'    => 'group_start',
	'section' => 'header',
);

$fields[] = array(
	'heading' => esc_html__( 'Activate Responsive More Menu?', 'newsy' ),
	'id'      => 'main_menu_more_enabled',
	'type'    => 'switcher',
	'options' => array(
		'off' => '',
		'on'  => 'active',
	),
	'section' => 'header',
);

$fields[] = array(
	'heading' => esc_html__( 'Fit Menu To Container?', 'newsy' ),
	'id'      => 'main_menu_fit_menu',
	'type'    => 'switcher',
	'options' => array(
		'off' => '',
		'on'  => 'active',
	),
	'section' => 'header',
);

$fields[] = array(
	'heading'     => esc_html__( 'Menu Style', 'newsy' ),
	'description' => esc_html__( 'Select pagination of homepage.', 'newsy' ),
	'id'          => 'main_menu_style',
	'type'        => 'visual_select',
	'options'     => array(
		''        => esc_html__( 'Default Style', 'newsy' ),
		'style-2' => sprintf( esc_html__( 'Style %s', 'newsy' ), '2' ),
		'style-3' => sprintf( esc_html__( 'Style %s', 'newsy' ), '3' ),
		'style-4' => sprintf( esc_html__( 'Style %s', 'newsy' ), '4' ),
		'style-5' => sprintf( esc_html__( 'Style %s', 'newsy' ), '5' ),
		'style-6' => sprintf( esc_html__( 'Style %s', 'newsy' ), '6' ),
		'style-7' => sprintf( esc_html__( 'Style %s', 'newsy' ), '7' ),
	),
	'section'     => 'header',
);


$fields[] = array(
	'heading' => esc_html__( 'Header: Top Menu', 'newsy' ),
	'id'      => 'top_menu_group_start',
	'type'    => 'group_start',
	'section' => 'header',
);
$fields[] = array(
	'heading' => esc_html__( 'Activate Responsive More Menu?', 'newsy' ),
	'id'      => 'top_menu_more_enabled',
	'type'    => 'switcher',
	'options' => array(
		'off' => '',
		'on'  => 'active',
	),
	'section' => 'header',
);

$fields[] = array(
	'heading' => esc_html__( 'Header: Date', 'newsy' ),
	'id'      => 'date_group_start',
	'type'    => 'group_start',
	'section' => 'header',
);

$fields[] = array(
	'heading'     => 'Date Format',
	'default'     => 'l, F j, Y',
	'id'          => 'topbar_date_format',
	'placeholder' => 'l, F j, Y',
	'type'        => 'text',
	'section'     => 'header',
);
$fields[] = array(
	'heading' => esc_html__( 'Date Typography', 'newsy' ),
	'id'      => 'typ_top_bar_date',
	'type'    => 'typography',
	'section' => 'header',
	'output'  => array(
		array(
			'type'     => 'css',
			'element'  => '.ak-header-date',
			'property' => 'typography',
		),
	),
);

$fields[] = array(
	'heading' => esc_html__( 'Header: Social Icons', 'newsy' ),
	'id'      => 'social_icons_group_start',
	'type'    => 'group_start',
	'section' => 'header',
);

$fields = array_merge( $fields, newsy_get_social_icons_fields( 'header', 'header' ) );

$fields[] = array(
	'heading' => esc_html__( 'Header: Search Form', 'newsy' ),
	'id'      => 'search_form_group_start',
	'type'    => 'group_start',
	'section' => 'header',
);
$fields[] = array(
	'id'      => 'header_search_form_width',
	'type'    => 'slider',
	'heading' => esc_html__( 'Search Form Width', 'newsy' ),
	'section' => 'header',
	'min'     => 50,
	'max'     => 100,
	'step'    => 5,
	'output'  => array(
		array(
			'type'     => 'css',
			'element'  => '.ak-header-bar .ak-header-search-form',
			'property' => 'width',
			'units'    => '%',
		),
	),
);
$fields[] = array(
	'id'      => 'header_search_form_style',
	'type'    => 'radio_button',
	'heading' => esc_html__( 'Search Form Style', 'newsy' ),
	'section' => 'header',
	'options' => array(
		''        => esc_html__( 'Square', 'newsy' ),
		'round'   => esc_html__( 'Round', 'newsy' ),
		'rounded' => esc_html__( 'Rounded', 'newsy' ),
	),
);
$fields[] = array(
	'id'      => 'header_search_form_bg_color',
	'type'    => 'color',
	'heading' => esc_html__( 'Header Search Background Color', 'newsy' ),
	'section' => 'header',
	'output'  => array(
		array(
			'type'     => 'css',
			'element'  => '.ak-header-bar .ak-header-search-form',
			'property' => 'background-color',
		),
	),
);
$fields[] = array(
	'id'      => 'header_search_form_hover_bg_color',
	'type'    => 'color',
	'heading' => esc_html__( 'Header Search Hover Background Color', 'newsy' ),
	'section' => 'header',
	'output'  => array(
		array(
			'type'     => 'css',
			'element'  => '.ak-header-bar .ak-header-search-form:hover input',
			'property' => 'background-color',
		),
	),
);

$fields[] = array(
	'id'      => 'header_search_form_text_color',
	'type'    => 'color',
	'heading' => esc_html__( 'Header Search Text Color', 'newsy' ),
	'section' => 'header',
	'output'  => array(
		array(
			'type'     => 'css',
			'element'  => '.ak-header-bar .ak-header-search-form input',
			'property' => 'color',
		),
	),
);

$fields[] = array(
	'id'      => 'header_search_form_hover_text_color',
	'type'    => 'color',
	'heading' => esc_html__( 'Header Search Hover Text Color', 'newsy' ),
	'section' => 'header',
	'output'  => array(
		array(
			'type'     => 'css',
			'element'  => '.ak-header-bar .ak-header-search-form:hover input',
			'property' => 'color',
		),
	),
);
$fields[] = array(
	'id'      => 'header_search_form_border_color',
	'type'    => 'color',
	'heading' => esc_html__( 'Header Search Border Color', 'newsy' ),
	'section' => 'header',
	'output'  => array(
		array(
			'type'     => 'css',
			'element'  => '.ak-header-bar.ak-header-search-form input',
			'property' => 'border-color',
		),
	),
);
$fields[] = array(
	'id'      => 'header_search_form_hover_border_color',
	'type'    => 'color',
	'heading' => esc_html__( 'Header Search Hover Border Color', 'newsy' ),
	'section' => 'header',
	'output'  => array(
		array(
			'type'     => 'css',
			'element'  => '.ak-header-bar .ak-header-search-form:hover input',
			'property' => 'border-color',
		),
	),
);



$fields[] = array(
	'id'      => 'header_search_form_btn_bg_color',
	'type'    => 'color',
	'heading' => esc_html__( 'Header Search Button Background Color', 'newsy' ),
	'section' => 'header',
	'output'  => array(
		array(
			'type'     => 'css',
			'element'  => '.ak-header-bar .ak-header-search-form .btn',
			'property' => 'background-color',
		),
	),
);
$fields[] = array(
	'id'      => 'header_search_form_btn_hover_bg_color',
	'type'    => 'color',
	'heading' => esc_html__( 'Header Search Button Hover Background Color', 'newsy' ),
	'section' => 'header',
	'output'  => array(
		array(
			'type'     => 'css',
			'element'  => '.ak-header-bar .ak-header-search-form .btn:hover, .ak-header-bar .ak-header-search-form .btn:focus',
			'property' => 'background-color',
		),
	),
);
$fields[] = array(
	'id'      => 'header_search_form_icon_color',
	'type'    => 'color',
	'heading' => esc_html__( 'Header Search Icon Color', 'newsy' ),
	'section' => 'header',
	'output'  => array(
		array(
			'type'     => 'css',
			'element'  => '.ak-header-bar .ak-header-search-form .fa-search',
			'property' => 'color',
		),
	),
);
$fields[] = array(
	'id'      => 'header_search_form_icon_hover_color',
	'type'    => 'color',
	'heading' => esc_html__( 'Header Search Icon Hover Color', 'newsy' ),
	'section' => 'header',
	'output'  => array(
		array(
			'type'     => 'css',
			'element'  => '.ak-header-bar .ak-header-search-form .fa-search:hover, .ak-header-bar .ak-header-search-form .fa-search:focus',
			'property' => 'color',
		),
	),
);

$fields[] = array(
	'heading' => esc_html__( 'Header: Search Button', 'newsy' ),
	'id'      => 'search_icon_group_start',
	'type'    => 'group_start',
	'section' => 'header',
);

$fields[] = array(
	'id'      => 'search_button_icon_color',
	'type'    => 'color',
	'heading' => esc_html__( 'Search Button Icon Color', 'newsy' ),
	'section' => 'header',
	'output'  => array(
		array(
			'type'     => 'css',
			'element'  => '.ak-header-search > a.search-btn',
			'property' => 'color',
		),
	),
);
$fields[] = array(
	'id'      => 'search_button_hover_icon_color',
	'type'    => 'color',
	'heading' => esc_html__( 'Search Button Hover Icon Color', 'newsy' ),
	'section' => 'header',
	'output'  => array(
		array(
			'type'     => 'css',
			'element'  => array(
				'.ak-header-search a.search-btn:hover',
				'.ak-header-search a.search-btn:active',
			),
			'property' => 'color',
		),
	),
);
$fields[] = array(
	'id'      => 'search_button_bg_color',
	'type'    => 'color',
	'heading' => esc_html__( 'Search Button Background Color', 'newsy' ),
	'section' => 'header',
	'output'  => array(
		array(
			'type'     => 'css',
			'element'  => '.ak-header-search > a.search-btn',
			'property' => 'background-color',
		),
	),
);
$fields[] = array(
	'id'      => 'search_button_hover_bg_color',
	'type'    => 'color',
	'heading' => esc_html__( 'Search Button Hover Background Color', 'newsy' ),
	'section' => 'header',
	'output'  => array(
		array(
			'type'     => 'css',
			'element'  => array(
				'.ak-header-search > a.search-btn:hover',
				'.ak-header-search > a.search-btn:active',
			),
			'property' => 'background-color',
		),
	),
);
//Create Button Settings
$fields[] = array(
	'heading' => esc_html__( 'Header: Menu Handler', 'newsy' ),
	'id'      => 'menu_handler_group_start',
	'type'    => 'group_start',
	'section' => 'header',
);
$fields[] = array(
	'id'      => 'menu_handler',
	'type'    => 'color',
	'heading' => esc_html__( 'Menu Handler Lines Color', 'newsy' ),
	'section' => 'header',
	'output'  => array(
		array(
			'type'     => 'css',
			'element'  => array(
				'.ak-header-menu-handler .lines',
				'.ak-header-menu-handler .lines:before',
				'.ak-header-menu-handler .lines:after',
			),
			'property' => 'background-color',
		),
	),
);
$fields[] = array(
	'id'      => 'header_menu_handler_hover',
	'type'    => 'color',
	'heading' => esc_html__( 'Menu Handler Lines Hover Color', 'newsy' ),
	'section' => 'header',
	'output'  => array(
		array(
			'type'     => 'css',
			'element'  => array(
				'.ak-header-menu-handler .lines:hover',
			),
			'property' => 'background-color',
		),
	),
);
$fields[] = array(
	'id'      => 'menu_handler_text',
	'type'    => 'text',
	'heading' => esc_html__( 'Menu Handler Text', 'newsy' ),
	'section' => 'header',
);

$fields[] = array(
	'heading' => esc_html__( 'Header: Create Button', 'newsy' ),
	'id'      => 'header_button_create_group_start',
	'type'    => 'group_start',
	'section' => 'header',
);
$fields[] = array(
	'id'                => 'header_button_create',
	'type'              => 'mix_fields',
	'container_class'   => 'control-heading-hide',
	'heading'           => '',
	'section'           => 'header',
	'fields_callback'   => array(
		'function' => 'newsy_get_create_button_fields',
		'args'     => array( 'create_button', '.ak-header-button.ak-header-button-create' ),
	),
	'default'           => array(
		'text'  => esc_html__( 'Create', 'newsy' ),
		'login' => 'yes',
	),
	'filter_default'    => false,
	'defaults_on_empty' => true,
	'output'            => true,
);

//Create Button Settings
for ( $i = 1; $i <= 3; $i++ ) {
	$fields[] = array(
		'heading' => esc_html__( 'Header: Button', 'newsy' ) . ' ' . $i,
		'id'      => 'header_button' . $i . '_group_start',
		'type'    => 'group_start',
		'section' => 'header',
	);
	$fields[] = array(
		'id'              => 'header_button' . $i,
		'type'            => 'mix_fields',
		'container_class' => 'control-heading-hide',
		'heading'         => '',
		'section'         => 'header',
		'fields_callback' => array(
			'function' => 'newsy_get_button_fields',
			'args'     => array( 'header', '.ak-header-button.ak-header-button' . $i ),
		),
		'output'          => true,
	);
}

for ( $i = 1; $i <= 2; $i++ ) {
	$fields[] = array(
		'heading' => esc_html__( 'Header: Ad', 'newsy' ) . ' ' . $i,
		'id'      => "ad{$i}_group_start",
		'type'    => 'group_start',
		'section' => 'header',
	);
	$fields[] = array(
		'id'              => "header_ad{$i}",
		'type'            => 'mix_fields',
		'heading'         => esc_html__( 'Header: Ad', 'newsy' ),
		'container_class' => 'control-heading-hide',
		'section'         => 'header',
		'fields_callback' => 'newsy_get_ad_fields',
	);
}


for ( $i = 1; $i <= 5; $i++ ) {
	$fields[] = array(
		'heading' => esc_html__( 'Header: HTML Element', 'newsy' ) . ' ' . $i,
		'id'      => 'html' . $i . '_group_start',
		'type'    => 'group_start',
		'section' => 'header',
	);

	$fields[] = array(
		'id'      => 'header_html_' . $i,
		'type'    => 'textarea',
		'heading' => esc_html__( 'HTML', 'newsy' ),
		'section' => 'header',
	);
}
