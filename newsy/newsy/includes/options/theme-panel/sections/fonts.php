<?php
//General Typography Settings

$fields[] = array(
	'heading' => esc_html__( 'General', 'newsy' ),
	'id'      => 'general_fonts_group_start',
	'type'    => 'group_start',
	'section' => 'fonts',
);

$fields[] = array(
	'id'          => 'typo_body_font',
	'type'        => 'typography',
	'heading'     => esc_html__( 'Site Base Typography (Body)', 'newsy' ),
	'description' => esc_html__( 'Base typography for body that will affect all elements that haven\'t specified typography style.', 'newsy' ),
	'section'     => 'fonts',
	'output'      => array(
		array(
			'type'     => 'css',
			'element'  => 'body',
			'property' => 'typography',
		),
	),
);

$fields[] = array(
	'id'      => 'heading_typo_header',
	'type'    => 'heading',
	'heading' => esc_html__( 'Heading', 'newsy' ),
	'section' => 'fonts',
);

$fields[] = array(
	'id'      => 'typo_heading',
	'type'    => 'typography',
	'heading' => esc_html__( 'General Heading Typography', 'newsy' ),
	'section' => 'fonts',
	'options' => array(
		'size'        => false,
		'line-height' => false,
		'align'       => false,
	),
	'output'  => array(
		array(
			'type'     => 'css',
			'element'  => 'h1, .h1, h2,.h2, h3, .h3, h4, .h4, h5, .h5, h6, .h6',
			'property' => 'typography',
		),
	),
);

$fields[] = array(
	'id'      => 'typo_heading_h1',
	'type'    => 'typography',
	'heading' => esc_html__( 'H1 Font Size', 'newsy' ),
	'section' => 'fonts',
	'options' => array(
		'family'         => false,
		'letter-spacing' => false,
		'align'          => false,
		'transform'      => false,
		'color'          => false,
	),
	'output'  => array(
		array(
			'type'     => 'css',
			'element'  => 'h1, .h1',
			'property' => 'typography',
		),
	),
);

$fields[] = array(
	'id'      => 'typo_heading_h2',
	'type'    => 'typography',
	'heading' => esc_html__( 'H2 Font Size', 'newsy' ),
	'section' => 'fonts',
	'options' => array(
		'family'         => false,
		'letter-spacing' => false,
		'align'          => false,
		'transform'      => false,
		'color'          => false,
	),
	'output'  => array(
		array(
			'type'     => 'css',
			'element'  => 'h2, .h2',
			'property' => 'typography',
		),
	),
);

$fields[] = array(
	'id'      => 'typo_heading_h3',
	'type'    => 'typography',
	'heading' => esc_html__( 'H3 Font Size', 'newsy' ),
	'section' => 'fonts',
	'options' => array(
		'family'         => false,
		'letter-spacing' => false,
		'align'          => false,
		'transform'      => false,
		'color'          => false,
	),
	'output'  => array(
		array(
			'type'     => 'css',
			'element'  => 'h3, .h3',
			'property' => 'typography',
		),
	),
);
$fields[] = array(
	'id'      => 'typo_heading_h4',
	'type'    => 'typography',
	'heading' => esc_html__( 'H4 Font Size', 'newsy' ),
	'section' => 'fonts',
	'options' => array(
		'family'         => false,
		'letter-spacing' => false,
		'align'          => false,
		'transform'      => false,
		'color'          => false,
	),
	'output'  => array(
		array(
			'type'     => 'css',
			'element'  => 'h4, .h4',
			'property' => 'typography',
		),
	),
);
$fields[] = array(
	'id'      => 'typo_heading_h5',
	'type'    => 'typography',
	'heading' => esc_html__( 'H5 Font Size', 'newsy' ),
	'section' => 'fonts',
	'options' => array(
		'family'         => false,
		'letter-spacing' => false,
		'align'          => false,
		'transform'      => false,
		'color'          => false,
	),
	'output'  => array(
		array(
			'type'     => 'css',
			'element'  => 'h5, .h5',
			'property' => 'typography',
		),
	),
);

$fields[] = array(
	'id'      => 'typo_heading_h6',
	'type'    => 'typography',
	'heading' => esc_html__( 'H6 Font Size', 'newsy' ),
	'section' => 'fonts',
	'options' => array(
		'family'         => false,
		'letter-spacing' => false,
		'align'          => false,
		'transform'      => false,
		'color'          => false,
	),
	'output'  => array(
		array(
			'type'     => 'css',
			'element'  => 'h6, .h6',
			'property' => 'typography',
		),
	),
);



$fields[] = array(
	'id'      => 'main_menu_typ_group_start',
	'type'    => 'group_start',
	'heading' => esc_html__( 'Main Menu', 'newsy' ),
	'section' => 'fonts',
);

$fields[] = array(
	'id'      => 'typ_header_menu',
	'type'    => 'typography',
	'heading' => esc_html__( 'Main Menu Typography', 'newsy' ),
	'section' => 'fonts',
	'options' => array(
		'align' => false,
		'color' => false,
	),
	'output'  => array(
		array(
			'type'     => 'css',
			'element'  => '.ak-header-main-menu > .ak-menu > li > a',
			'property' => 'typography',
		),
	),
);

$fields[] = array(
	'id'      => 'main_menu_a_color',
	'type'    => 'color',
	'heading' => esc_html__( 'Main Menu Text Color', 'newsy' ),
	'section' => 'fonts',
	'output'  => array(
		array(
			'type'     => 'css',
			'element'  => '.ak-header-main-menu > .ak-menu > li > a, .ak-bar-dark .ak-header-main-menu > .ak-menu > li > a',
			'property' => 'color',
		),
	),
);

$fields[] = array(
	'id'      => 'main_menu_a_hover_color',
	'type'    => 'color',
	'heading' => esc_html__( 'Main Menu Hover Text Color', 'newsy' ),
	'section' => 'fonts',
	'output'  => array(
		array(
			'type'     => 'css',
			'element'  => '.ak-header-main-menu > .ak-menu > li:hover > a, .ak-bar-dark .ak-header-main-menu > .ak-menu > li:hover > a',
			'property' => 'color',
		),
	),
);

$fields[] = array(
	'id'      => 'main_menu_a_hover_bg_color',
	'type'    => 'color',
	'heading' => esc_html__( 'Main Menu Hover Background Color', 'newsy' ),
	'section' => 'fonts',
	'output'  => array(
		array(
			'type'     => 'css',
			'element'  => array(
				'.ak-header-main-menu > .ak-menu  > li:hover > a',
			),
			'property' => 'background-color',
		),
	),
);

$fields[] = array(
	'id'      => 'main_menu_a_active_color',
	'type'    => 'color',
	'heading' => esc_html__( 'Main Menu Active Text Color', 'newsy' ),
	'section' => 'fonts',
	'output'  => array(
		array(
			'type'     => 'css',
			'element'  => array(
				'.ak-header-main-menu > .ak-menu > li.current-menu-item > a',
				'.ak-header-main-menu > .ak-menu > li.current-menu-item:hover > a',
				'.ak-header-main-menu > .ak-menu > li.current-menu-parent > a',
				'.ak-header-main-menu > .ak-menu > li.current-menu-parent:hover > a',
			),
			'property' => 'color',
		),
	),
);

$fields[] = array(
	'id'      => 'main_menu_a_active_bg_color',
	'type'    => 'color',
	'heading' => esc_html__( 'Main Menu Active Background Color', 'newsy' ),
	'section' => 'fonts',
	'output'  => array(
		array(
			'type'     => 'css',
			'element'  => array(
				'.ak-header-main-menu > .ak-menu > li.current-menu-item > a',
			),
			'property' => 'background-color',
		),
	),
);

$fields[] = array(
	'id'      => 'main_menu_icon_color',
	'type'    => 'color',
	'heading' => esc_html__( 'Main Menu Icon Color', 'newsy' ),
	'section' => 'fonts',
	'output'  => array(
		array(
			'type'     => 'css',
			'element'  => '.ak-header-main-menu > .ak-menu > li > a > .ak-icon, .ak-bar-dark .ak-main-menu > li > a > .ak-icon',
			'property' => 'color',
		),
	),
);

$fields[] = array(
	'id'      => 'main_menu_bottom_border_hover_color',
	'type'    => 'color',
	'heading' => esc_html__( 'Main Menu Hover Bottom Line Color', 'newsy' ),
	'section' => 'fonts',
	'output'  => array(
		array(
			'type'     => 'css',
			'element'  => array(
				'.ak-header-main-menu > .ak-menu > li > a:before',
				'.ak-header-main-menu > .ak-menu > li.current-menu-parent > a:before',
				'.ak-header-main-menu > .ak-menu > li.current-menu-item > a:before',
			),
			'property' => 'background-color',
		),
	),
);

$fields[] = array(
	'id'      => 'header_sub_menu_header',
	'type'    => 'heading',
	'heading' => esc_html__( 'Submenu', 'newsy' ),
	'section' => 'fonts',
);

$fields[] = array(
	'id'      => 'typ_header_sub_menu',
	'type'    => 'typography',
	'heading' => esc_html__( 'Sub Menu Typography', 'newsy' ),
	'section' => 'fonts',
	'output'  => array(
		array(
			'type'     => 'css',
			'element'  => '.sub-menu > li a',
			'property' => 'typography',
		),
	),
);


$fields[] = array(
	'id'      => 'top_menu_typ_group_start',
	'type'    => 'group_start',
	'heading' => esc_html__( 'Top Menu', 'newsy' ),
	'section' => 'fonts',
);

$fields[] = array(
	'heading' => esc_html__( 'Top Menu Typography', 'newsy' ),
	'id'      => 'typ_top_bar_menu',
	'type'    => 'typography',
	'section' => 'fonts',
	'output'  => array(
		array(
			'type'     => 'css',
			'element'  => '.ak-top-menu>li>a',
			'property' => 'typography',
		),
	),
);

$fields[] = array(
	'heading' => esc_html__( 'Top Bar Menu Hover Text Color', 'newsy' ),
	'id'      => 'top_bar_menu_a_hover_color',
	'type'    => 'color',
	'section' => 'fonts',
	'output'  => array(
		array(
			'type'     => 'css',
			'element'  => '.ak-top-menu > li:hover > a',
			'property' => 'color',
		),
	),
);

$fields[] = array(
	'id'      => 'mobile_menu_typ_group_start',
	'type'    => 'group_start',
	'heading' => esc_html__( 'Mobile Menu', 'newsy' ),
	'section' => 'fonts',
);

$fields[] = array(
	'heading' => esc_html__( 'Mobile Menu Typography', 'newsy' ),
	'id'      => 'typo_mobile_bar_menu',
	'type'    => 'typography',
	'section' => 'fonts',
	'output'  => array(
		array(
			'type'     => 'css',
			'element'  => '.ak-mobile-menu>li>a',
			'property' => 'typography',
		),
	),
);

/**
 *  Footer Menu
**/
$fields[] = array(
	'heading' => esc_html__( 'Footer Menu', 'newsy' ),
	'id'      => 'footer_menu_typo_group_start',
	'type'    => 'group_start',
	'section' => 'fonts',
);

$fields[] = array(
	'id'      => 'footer_menu_typo',
	'type'    => 'typography',
	'heading' => esc_html__( 'Footer Menu Typography', 'newsy' ),
	'section' => 'fonts',
	'options' => array(
		'align' => false,
	),
	'output'  => array(
		array(
			'type'     => 'css',
			'element'  => '.ak-footer-wrap .ak-footer-menu > li > a',
			'property' => 'typography',
		),
	),
);

$fields[] = array(
	'id'      => 'footer_menu_a_hover_color',
	'type'    => 'color',
	'heading' => esc_html__( 'Footer Menu Hover Text Color', 'newsy' ),
	'section' => 'fonts',
	'output'  => array(
		array(
			'type'     => 'css',
			'element'  => '.ak-footer-wrap .ak-footer-menu > li:hover > a',
			'property' => 'color',
		),
	),
);

$fields[] = array(
	'id'      => 'footer_menu_a_hover_bg_color',
	'type'    => 'color',
	'heading' => esc_html__( 'Footer Menu Hover Background Color', 'newsy' ),
	'section' => 'fonts',
	'output'  => array(
		array(
			'type'     => 'css',
			'element'  => array(
				'.ak-footer-wrap .ak-footer-menu > li:hover > a',
			),
			'property' => 'background-color',
		),
	),
);

$fields[] = array(
	'id'      => 'footer_menu_a_active_color',
	'type'    => 'color',
	'heading' => esc_html__( 'Footer Menu Active Text Color', 'newsy' ),
	'section' => 'fonts',
	'output'  => array(
		array(
			'type'     => 'css',
			'element'  => array(
				'.ak-footer-wrap .ak-footer-menu > li.current-menu-item > a',
				'.ak-footer-wrap .ak-footer-menu > li.current-menu-item:hover > a',
				'.ak-footer-wrap .ak-footer-menu > li.current-menu-parent > a',
				'.ak-footer-wrap .ak-footer-menu > li.current-menu-parent:hover > a',
			),
			'property' => 'color',
		),
	),
);

$fields[] = array(
	'id'      => 'footer_menu_a_active_bg_color',
	'type'    => 'color',
	'heading' => esc_html__( 'Footer Menu Active Background Color', 'newsy' ),
	'section' => 'fonts',
	'output'  => array(
		array(
			'type'     => 'css',
			'element'  => array(
				'.ak-footer-wrap .ak-footer-menu > li.current-menu-item > a',
			),
			'property' => 'background-color',
		),
	),
);

$fields[] = array(
	'heading' => esc_html__( 'Archive', 'newsy' ),
	'id'      => 'archive_fonts_group_start',
	'type'    => 'group_start',
	'section' => 'fonts',
);

$fields[] = array(
	'heading' => esc_html__( 'Archive Name Typography', 'newsy' ),
	'id'      => 'archive_header_name',
	'type'    => 'typography',
	'section' => 'fonts',
	'output'  => array(
		array(
			'type'     => 'css',
			'element'  => '.ak-archive-header .ak-archive-name',
			'property' => 'typography',
		),
	),
);


/**
 * -> Post & Page Typography
 */

$fields[] = array(
	'heading' => esc_html__( 'Post', 'newsy' ),
	'id'      => 'posts_fonts_group_start',
	'type'    => 'group_start',
	'section' => 'fonts',
);

$fields[] = array(
	'heading'     => esc_html__( 'Post Title', 'newsy' ),
	'description' => esc_html__( 'Typography of post title in single posts.', 'newsy' ),
	'id'          => 'typo_single_post_title',
	'type'        => 'typography',
	'section'     => 'fonts',
	'output'      => array(
		array(
			'type'     => 'css',
			'element'  => '.ak-post-wrap .ak-post-title, .be-question>.wp-block-cover p, .be-answers>.be-answer .wp-block-cover p',
			'property' => 'typography',
		),
	),
);

$fields[] = array(
	'heading'     => esc_html__( 'Post Summary', 'newsy' ),
	'description' => esc_html__( 'Base typography for posts summary in single posts.', 'newsy' ),
	'id'          => 'typo_single_post_summary',
	'type'        => 'typography',
	'section'     => 'fonts',
	'output'      => array(
		array(
			'type'     => 'css',
			'element'  => '.ak-post-summary',
			'property' => 'typography',
		),
	),
);
$fields[] = array(
	'heading'     => esc_html__( 'Posts & Pages Content', 'newsy' ),
	'description' => esc_html__( 'Base typography for content of posts and static pages.', 'newsy' ),
	'id'          => 'typo_single_post_content',
	'type'        => 'typography',
	'section'     => 'fonts',
	'output'      => array(
		array(
			'type'     => 'css',
			'element'  => '.ak-post-content',
			'property' => 'typography',
		),
	),
);

/**
 * -> Block Typography
 */
$fields[] = array(
	'heading' => esc_html__( 'Block', 'newsy' ),
	'id'      => 'general_block_typo',
	'type'    => 'group_start',
	'section' => 'fonts',
);
$fields[] = array(
	'id'          => 'typo_general_block_header_title',
	'type'        => 'typography',
	'heading'     => esc_html__( 'Block Title', 'newsy' ),
	'description' => esc_html__( 'Base typography for content of block header titles.', 'newsy' ),
	'section'     => 'fonts',
	'options'     => array(
		'align' => false,
	),
	'output'      => array(
		array(
			'type'     => 'css',
			'element'  => '.ak-block-header .ak-block-title',
			'property' => 'typography',
		),
	),
);
$fields[] = array(
	'id'          => 'typo_general_block_header_tabs',
	'type'        => 'typography',
	'heading'     => esc_html__( 'Block Tabs', 'newsy' ),
	'description' => esc_html__( 'Base typography for content of block header tabs.', 'newsy' ),
	'section'     => 'fonts',
	'options'     => array(
		'align' => false,
	),
	'output'      => array(
		array(
			'type'     => 'css',
			'element'  => '.ak-block-header .ak-block-tabs a',
			'property' => 'typography',
		),
	),
);


$fields[] = array(
	'id'      => 'modules_cat_header',
	'type'    => 'heading',
	'heading' => esc_html__( 'Module Category', 'newsy' ),
	'section' => 'fonts',
);


$fields[] = array(
	'id'          => 'typo_cat_badge',
	'type'        => 'typography',
	'heading'     => esc_html__( 'Category Badge Typography', 'newsy' ),
	'description' => esc_html__( 'Base typography for badge type category items in all blocks.', 'newsy' ),
	'section'     => 'fonts',
	'options'     => array(
		'align' => false,
	),
	'output'      => array(
		array(
			'type'     => 'css',
			'element'  => array(
				'.ak-module-terms.badge > a',
				'.ak-module-terms.inline_badge > a',
			),
			'property' => 'typography',
		),
	),
);

$fields[] = array(
	'id'          => 'typo_meta_category',
	'type'        => 'typography',
	'heading'     => esc_html__( 'Inline Category Typography', 'newsy' ),
	'description' => esc_html__( 'Base typography for inline type category items in all blocks. Inline type is just a category name without box.', 'newsy' ),
	'section'     => 'fonts',
	'options'     => array(
		'align' => false,
	),
	'output'      => array(
		array(
			'type'     => 'css',
			'element'  => '.ak-module-terms.inline',
			'property' => 'typography',
		),
	),
);
