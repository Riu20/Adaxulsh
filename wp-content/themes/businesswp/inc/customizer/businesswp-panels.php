<?php

/**************************************************
**** Layout Panel
***************************************************/

$wp_customize->add_panel( 'layout',array(
	'priority'   => 28,
	'title'      => esc_html__( 'Layout', 'businesswp' ),
	'capabitity' => 'edit_theme_options',
) );

/**************************************************
**** Colors
***************************************************/

$wp_customize->add_panel( new Businesswp_Custom_Panel( $wp_customize, 
	'theme_color_panel',
		array(
		'priority'   => 29,
		'title'      => esc_html__( 'Colors', 'businesswp' ),
		'capabitity' => 'edit_theme_options',
		) 
) );

/**************************************************
**** Front Page Panel
***************************************************/

$wp_customize->add_panel( new Businesswp_Custom_Panel( $wp_customize, 
	'frontpage_panel',
		array(
		'priority'   => 30,
		'title'      => esc_html__( 'Frontpage Sections', 'businesswp' ),
		'capabitity' => 'edit_theme_options',
		) 
) );

/**************************************************
**** Theme Templates Panel
***************************************************/

$wp_customize->add_panel( new Businesswp_Custom_Panel( $wp_customize, 
	'theme_templates_panel',
		array(
		'priority'   => 31,
		'title'      => esc_html__( 'Templates Settings', 'businesswp' ),
		'capabitity' => 'edit_theme_options',
		) 
) );

/**************************************************
**** Background Images
***************************************************/

$wp_customize->add_panel( new Businesswp_Custom_Panel( $wp_customize, 
	'background_images_panel',
		array(
		'priority'   => 32,
		'title'      => esc_html__( 'Background Images', 'businesswp' ),
		'capabitity' => 'edit_theme_options',
		) 
) );

/**************************************************
**** Typography Setting
***************************************************/

$wp_customize->add_panel( new Businesswp_Custom_Panel( $wp_customize, 
	'typography_panel',
		array(
		'priority'   => 33,
		'title'      => esc_html__( 'Typography', 'businesswp' ),
		'capabitity' => 'edit_theme_options',
		) 
) );