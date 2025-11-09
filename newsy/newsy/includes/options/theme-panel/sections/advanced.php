<?php

$fields[] = array(
	'heading'     => esc_html__( 'Sticky Sidebars Active?', 'newsy' ),
	'id'          => 'sticky_sidebar',
	'description' => esc_html__( 'This allows you to enable sticky widgets sidebars. Note: You have to add "sticky-column" class name to visual composer columns.', 'newsy' ),
	'type'        => 'switcher',
	'options'     => array(
		'off' => 'disabled',
		'on'  => '',
	),
	'section'     => 'advanced',
);

$fields[] = array(
	'heading'     => esc_html__( 'Enable Lazy Load Off-Canvas(Drawer) Menu?', 'newsy' ),
	'id'          => 'drawer_lazyload',
	'description' => esc_html__( 'This allows you to enable load off-canvas menu on demand. You can disable if you want to preload drawer menu but this will affect your page size.', 'newsy' ),
	'type'        => 'switcher',
	'options'     => array(
		'off' => '',
		'on'  => 'enabled',
	),
	'section'     => 'advanced',
);

$fields[] = array(
	'id'          => 'back_to_top',
	'type'        => 'switcher',
	'heading'     => esc_html__( 'Show Back to Top Button?', 'newsy' ),
	'description' => esc_html__( 'This button allows you to go page top quickly', 'newsy' ),
	'options'     => array(
		'off' => 'hide',
		'on'  => '',
	),
	'section'     => 'advanced',
);

$fields[] = array(
	'id'      => '_recaptcha_heading',
	'heading' => esc_html__( 'Recaptcha', 'newsy' ),
	'type'    => 'heading',
	'section' => 'advanced',
);

$fields[] = array(
	'id'          => 'enable_recaptcha',
	'heading'     => esc_html__( 'Enable Recaptcha', 'newsy' ),
	'description' => esc_html__( 'Enable this feature to use recaptcha on login, register section.', 'newsy' ),
	'type'        => 'switcher',
	'options'     => array(
		'off' => '',
		'on'  => 'yes',
	),
	'section'     => 'advanced',
);
$fields[] = array(
	'heading'     => esc_html__( 'Google Recaptcha Site Key', 'newsy' ),
	'description' => wp_kses(
		sprintf(
			__( 'Create your recaptcha v2 site key, <a href="%s">please go here</a>', 'newsy' ),
			'https://www.google.com/recaptcha/admin'
		), ak_trans_allowed_html()
	),
	'id'          => 'recaptcha_site_key',
	'type'        => 'text',
	'section'     => 'advanced',
	'dependency'  => array(
		'element' => 'enable_recaptcha',
		'value'   => array( 'yes' ),
	),
);
$fields[] = array(
	'heading'     => esc_html__( 'Google Recaptcha Secret Key', 'newsy' ),
	'description' => wp_kses(
		sprintf(
			__( 'Create your recaptcha v2 site key, <a href="%s">please go here</a>', 'newsy' ),
			'https://www.google.com/recaptcha/admin'
		), ak_trans_allowed_html()
),
	'id'          => 'recaptcha_secret_key',
	'type'        => 'text',
	'section'     => 'advanced',
	'dependency'  => array(
		'element' => 'enable_recaptcha',
		'value'   => array( 'yes' ),
	),
);

$fields[] = array(
	'id'      => '_custom_code_heading',
	'heading' => esc_html__( 'Custom Codes', 'newsy' ),
	'type'    => 'heading',
	'section' => 'advanced',
);

$fields[] = array(
	'id'              => '_custom_header_code',
	'heading'         => esc_html__( 'Custom Head Code ', 'newsy' ),
	'type'            => 'code',
	'container_class' => 'control-heading-full',
	'section'         => 'advanced',
);

$fields[] = array(
	'id'              => '_custom_footer_code',
	'heading'         => esc_html__( 'Custom Footer Code', 'newsy' ),
	'type'            => 'code',
	'container_class' => 'control-heading-full',
	'section'         => 'advanced',
);
