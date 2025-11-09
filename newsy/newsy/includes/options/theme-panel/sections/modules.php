<?php

if ( ! function_exists( 'newsy_get_module_options' ) ) {
	$fields[] = newsy_get_plugin_required_info_field( 'Newsy Elements', 'modules' );
	return;
}

/**
 * -> Module Typography
 */
$fields[] = array(
	'heading' => esc_html__( 'Global Module', 'newsy' ),
	'id'      => 'general_modules_typo',
	'type'    => 'group_start',
	'section' => 'modules',
);

// $fields[] = array(
// 	'id'              => 'module_parts',
// 	'heading'         => esc_html__( 'Global Module', 'newsy' ),
// 	'type'            => 'mix_fields',
// 	'container_class' => 'control-heading-hide module-select-parts',
// 	'fields_callback' => array(
// 		'function' => 'newsy_get_module_fields',
// 		'args'     => 'module',
// 	),
// 	'section'         => 'modules',
// );

$fields[] = array(
	'heading' => esc_html__( 'Module Typography', 'newsy' ),
	'id'      => 'module_typo_heading',
	'type'    => 'heading',
	'section' => 'modules',
);

$fields[] = array(
	'id'          => 'typo_title',
	'type'        => 'typography',
	'heading'     => esc_html__( 'Module: Post Title', 'newsy' ),
	'description' => esc_html__( 'Typography of posts title in block posts.', 'newsy' ),
	'section'     => 'modules',
	'options'     => array(
		'align' => false,
	),
	'output'      => array(
		array(
			'type'     => 'css',
			'element'  => '.ak-module .ak-module-title',
			'property' => 'typography',
		),
	),
);

$fields[] = array(
	'id'      => 'module_title_color',
	'type'    => 'color',
	'heading' => esc_html__( 'Module: Post Title Hover Color', 'newsy' ),
	'section' => 'modules',
	'output'  => array(
		array(
			'type'     => 'css',
			'element'  => '.ak-module .ak-module-title a:hover',
			'property' => 'color',
		),
	),
);

$fields[] = array(
	'id'          => 'typo_summary',
	'type'        => 'typography',
	'heading'     => esc_html__( 'Module: Post Summary', 'newsy' ),
	'description' => esc_html__( 'Typography of posts summary in block posts.', 'newsy' ),
	'section'     => 'modules',
	'options'     => array(
		'align' => false,
	),
	'output'      => array(
		array(
			'type'     => 'css',
			'element'  => '.ak-module .ak-module-summary',
			'property' => 'typography',
		),
	),
);

$fields[] = array(
	'id'          => 'typo_meta',
	'type'        => 'typography',
	'heading'     => esc_html__( 'Module: Post Meta', 'newsy' ),
	'description' => esc_html__( 'Typography of posts meta in block posts.', 'newsy' ),
	'section'     => 'modules',
	'options'     => array(
		'align' => false,
	),
	'output'      => array(
		array(
			'type'     => 'css',
			'element'  => '.ak-module .ak-module-meta, .ak-module-meta .ak-module-author a:after',
			'property' => 'typography',
		),
	),
);

$fields[] = array(
	'id'          => 'typo_meta_author',
	'type'        => 'typography',
	'heading'     => esc_html__( 'Module: Post Meta (Author Name)', 'newsy' ),
	'description' => esc_html__( 'Typography of posts author name in post meta.', 'newsy' ),
	'section'     => 'modules',
	'options'     => array(
		'align' => false,
	),
	'output'      => array(
		array(
			'type'     => 'css',
			'element'  => '.ak-module-meta .ak-module-author .ak-module-author-name',
			'property' => 'typography',
		),
	),
);


$fields[] = array(
	'id'      => 'modules_global_end',
	'type'    => 'group_end',
	'section' => 'modules',
);
$fields[] = array(
	'heading'     => esc_html__( 'Info', 'newsy' ),
	'description' => esc_html__( 'Following options will set the global part and typography settings for each module.', 'newsy' ),
	'id'          => 'modules_info',
	'type'        => 'info',
	'section'     => 'modules',
);

$modules = newsy_get_module_options();

foreach ( $modules as $module_id => $module ) {
	$fields[] = array(
		'heading' => $module['name'],
		'id'      => $module_id . '_heading',
		'type'    => 'group_start',
		'section' => 'modules',
	);

	$fields[] = array(
		'id'              => $module_id . '_parts',
		'heading'         => $module['name'],
		'type'            => 'mix_fields',
		'container_class' => 'control-heading-hide module-select-partsa',
		'fields_callback' => array(
			'function' => 'newsy_get_module_fields',
			'args'     => $module_id,
		),
		'section'         => 'modules',
	);

	$fields[] = array(
		'heading' => esc_html__( 'Module Typography', 'newsy' ),
		'id'      => $module_id . '_typo_heading',
		'type'    => 'heading',
		'section' => 'modules',
	);

	$type_selector = str_replace( '_', '-', $module_id );

	$fields[] = array(
		'id'          => $module_id . '_typo_title',
		'type'        => 'typography',
		'heading'     => esc_html__( 'Module: Post Title', 'newsy' ),
		'description' => esc_html__( 'Typography of posts title in block posts.', 'newsy' ),
		'section'     => 'modules',
		'options'     => array(
			'align' => false,
		),
		'output'      => array(
			array(
				'type'     => 'css',
				'element'  => '.ak-module.ak-' . $type_selector . ' .ak-module-title',
				'property' => 'typography',
			),
		),
	);

	$fields[] = array(
		'id'          => $module_id . '_typo_summary',
		'type'        => 'typography',
		'heading'     => esc_html__( 'Module: Post Summary', 'newsy' ),
		'description' => esc_html__( 'Typography of posts summary in block posts.', 'newsy' ),
		'section'     => 'modules',
		'options'     => array(
			'align' => false,
		),
		'output'      => array(
			array(
				'type'     => 'css',
				'element'  => '.ak-module.ak-' . $type_selector . ' .ak-module-summary',
				'property' => 'typography',
			),
		),
	);

	$fields[] = array(
		'id'          => $module_id . '_typo_meta',
		'type'        => 'typography',
		'heading'     => esc_html__( 'Module: Post Meta', 'newsy' ),
		'description' => esc_html__( 'Typography of posts meta in block posts.', 'newsy' ),
		'section'     => 'modules',
		'options'     => array(
			'align' => false,
		),
		'output'      => array(
			array(
				'type'     => 'css',
				'element'  => '.ak-module.ak-' . $type_selector . ' .ak-module-meta, .ak-module.ak-' . $type_selector . ' .ak-module-meta .ak-module-author a:after',
				'property' => 'typography',
			),
		),
	);

}
