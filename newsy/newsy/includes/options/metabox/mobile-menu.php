<?php
/**
 * menu-fields.php
 *---------------------------.
 */

/**
 * Mega Menu.
 */

$fields[] = array(
	'heading' => esc_html__( 'Menu Icon', 'newsy' ),
	'id'      => 'menu_icon_group_start',
	'type'    => 'group_start',
	'section' => 'mega_menu',
);

$fields[] = array(
	'heading'         => esc_html__( 'Icon', 'newsy' ),
	'id'              => 'menu_icon',
	'type'            => 'icon_select',
	'container_class' => 'control-heading-full',
	'default_text'    => esc_html__( 'Chose an Icon', 'newsy' ),
	'section'         => 'mega_menu',
);

$fields[] = array(
	'heading' => esc_html__( 'Menu Badge', 'newsy' ),
	'id'      => 'menu_badge_group_start',
	'type'    => 'group_start',
	'section' => 'mega_menu',
);

$fields[] = array(
	'heading'         => esc_html__( 'Badge Label', 'newsy' ),
	'id'              => 'badge_label',
	'type'            => 'text',
	'container_class' => 'control-heading-full',
	'section'         => 'mega_menu',
);
