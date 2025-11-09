<?php
/**
 * Header Settings Tab.
 */
$fields[] = array(
	'heading' => esc_html__( 'Page', 'newsy' ),
	'id'      => 'page',
	'type'    => 'section',
	'icon'    => 'fa-file-text',
);

$fields = array_merge( $fields, newsy_get_layout_fields( 'page', 'page', 'body.page' ) );

$fields[] = array(
	'id'      => 'page_show_title',
	'type'    => 'visual_select',
	'heading' => esc_html__( 'Show Page Title?', 'newsy' ),
	'options' => array(
		''     => esc_html__( 'Default - From Theme Panel', 'newsy' ),
		'show' => esc_html__( 'Show', 'newsy' ),
		'hide' => esc_html__( 'Hide', 'newsy' ),
	),
	'section' => 'page',
);

$fields[] = array(
	'id'      => 'page_show_breadcrumb',
	'type'    => 'visual_select',
	'heading' => esc_html__( 'Show Breadcrumb?', 'newsy' ),
	'options' => array(
		''     => esc_html__( 'Default - From Theme Panel', 'newsy' ),
		'show' => esc_html__( 'Show', 'newsy' ),
		'hide' => esc_html__( 'Hide', 'newsy' ),
	),
	'section' => 'page',
);


$fields[] = array(
	'heading'     => esc_html__( 'Main Navigation Menu', 'newsy' ),
	'description' => esc_html__( 'Replace & change main menu for this page.', 'newsy' ),
	'id'          => 'page_main_nav_menu',
	'type'        => 'select',
	'options'     => array(
		''                 => esc_html__( '-- Default Main Navigation --', 'newsy' ),
		'options_callback' => 'Ak\Form\FormCallback::get_menus',
	),
	'section'     => 'page',
);
