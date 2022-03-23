<?php

add_action( 'init', 'business_event_conference_featured_posts' );
function business_event_conference_featured_posts(){

	Kirki::add_section( 'business_event_conference_featured_posts_sectionn', array(
        'title'     => esc_html__( 'Featured Posts', 'business-event-conference' ),
        'section'   => 'homepage'
    ) );
    
    Kirki::add_field( 'bizberg', [
		'type'        => 'checkbox',
		'settings'    => 'featured_post_status',
		'label'       => esc_html__( 'Enable / Disable', 'business-event-conference' ),
		'section'     => 'business_event_conference_featured_posts_section',
		'default'     => false,
	] );

    Kirki::add_field( 'bizberg', [
        'type'        => 'custom',
        'settings'    => 'business_event_conference_title_options',
        'section'     => 'business_event_conference_featured_posts_section',
        'default'     => '<div class="bizberg_customizer_custom_heading">' . esc_html__( 'Title Options', 'business-event-conference' ) . '</div>',
        'active_callback'    => array(
            array(
                'setting'  => 'featured_post_status',
                'operator' => '==',
                'value'    => true
            ),
        ),
    ] );

    Kirki::add_field( 'bizberg', [
		'type'     => 'text',
		'settings' => 'featured_post_title',
		'label'    => esc_html__( 'Title', 'business-event-conference' ),
		'section'  => 'business_event_conference_featured_posts_section',
		'default'  => esc_html__( 'Featured Blog Posts', 'business-event-conference' ),
		'active_callback' => [
			[
				'setting'  => 'featured_post_status',
				'operator' => '==',
				'value'    => true,
			]
		],
	] );

	Kirki::add_field( 'bizberg', [
        'type'        => 'typography',
        'settings'    => 'featured_post_title_font_family',
        'label'       => esc_html__( 'Title Font', 'business-event-conference' ),
        'section'     => 'business_event_conference_featured_posts_section',
        'default'     => [
            'font-family'    => 'Poppins',
            'variant'        => '700',
            'font-size'      => '40px',
            'line-height'    => '1.5',
            'letter-spacing' => '0',
            'text-transform' => 'none',
            'color'          => '#e91e63'
        ],
        'transport'   => 'auto',
        'output'      => [
            [
                'element' => '.featured-post h2.featured_title',
            ],
        ],
        'active_callback'    => array(
            array(
                'setting'  => 'featured_post_status',
                'operator' => '==',
                'value'    => true
            )
        )
    ] );

    Kirki::add_field( 'bizberg', [
        'type'        => 'custom',
        'settings'    => 'business_event_conference_subtitle_options',
        'section'     => 'business_event_conference_featured_posts_section',
        'default'     => '<div class="bizberg_customizer_custom_heading">' . esc_html__( 'Subtitle Options', 'business-event-conference' ) . '</div>',
        'active_callback'    => array(
            array(
                'setting'  => 'featured_post_status',
                'operator' => '==',
                'value'    => true
            ),
        ),
    ] );

    Kirki::add_field( 'bizberg', [
		'type'     => 'text',
		'settings' => 'featured_post_subtitle',
		'label'    => esc_html__( 'Subtitle', 'business-event-conference' ),
		'section'  => 'business_event_conference_featured_posts_section',
		'default'  => esc_html__( 'Lorem ipsum dolor', 'business-event-conference' ),
		'active_callback' => [
			[
				'setting'  => 'featured_post_status',
				'operator' => '==',
				'value'    => true,
			]
		],
	] );

	Kirki::add_field( 'bizberg', [
        'type'        => 'typography',
        'settings'    => 'featured_post_subtitle_font_family',
        'label'       => esc_html__( 'Subtitle Font', 'business-event-conference' ),
        'section'     => 'business_event_conference_featured_posts_section',
        'default'     => [
            'font-family'    => 'Crimson Text',
            'variant'        => 'italic',
            'font-size'      => '20px',
            'line-height'    => '1',
            'letter-spacing' => '0',
            'text-transform' => 'none',
            'color'          => '#999999'
        ],
        'transport'   => 'auto',
        'output'      => [
            [
                'element' => '.featured-post p.subtitle',
            ],
        ],
        'active_callback'    => array(
            array(
                'setting'  => 'featured_post_status',
                'operator' => '==',
                'value'    => true
            )
        )
    ] );

    Kirki::add_field( 'bizberg', [
        'type'        => 'custom',
        'settings'    => 'business_event_conference_content_options',
        'section'     => 'business_event_conference_featured_posts_section',
        'default'     => '<div class="bizberg_customizer_custom_heading">' . esc_html__( 'Content Options', 'business-event-conference' ) . '</div>',
        'active_callback'    => array(
            array(
                'setting'  => 'featured_post_status',
                'operator' => '==',
                'value'    => true
            ),
        ),
    ] );

    Kirki::add_field( 'bizberg', array(
        'type'        => 'select',
        'settings'    => 'business_event_conference_featured_category',
        'label'       => esc_html__( 'Select Post Category', 'business-event-conference' ),
        'section'     => 'business_event_conference_featured_posts_section',
        'multiple'    => 1,
        'choices'     => bizberg_get_post_categories(),
        'active_callback'    => array(
            array(
                'setting'  => 'featured_post_status',
                'operator' => '==',
                'value'    => true,
            ),
        ),
    ) );

    Kirki::add_field( 'bizberg', [
        'type'        => 'typography',
        'settings'    => 'featured_post_date_font_family',
        'label'       => esc_html__( 'Date Font', 'business-event-conference' ),
        'section'     => 'business_event_conference_featured_posts_section',
        'default'     => [
            'font-family'    => 'Crimson Text',
            'variant'        => 'italic',
            'font-size'      => '16px',
            'line-height'    => '1',
            'letter-spacing' => '0',
            'text-transform' => 'none',
            'color'          => '#878787'
        ],
        'transport'   => 'auto',
        'output'      => [
            [
                'element' => '.featured-post .featured-post-content .featured-date',
            ],
        ],
        'active_callback'    => array(
            array(
                'setting'  => 'featured_post_status',
                'operator' => '==',
                'value'    => true
            )
        )
    ] );

    Kirki::add_field( 'bizberg', [
        'type'        => 'typography',
        'settings'    => 'featured_post_post_title_font_family',
        'label'       => esc_html__( 'Title Font', 'business-event-conference' ),
        'section'     => 'business_event_conference_featured_posts_section',
        'default'     => [
            'font-family'    => 'Poppins',
            'variant'        => '500',
            'font-size'      => '20px',
            'line-height'    => '1.2',
            'letter-spacing' => '0',
            'text-transform' => 'none',
            'color'          => '#e91e63'
        ],
        'transport'   => 'auto',
        'output'      => [
            [
                'element' => '.featured-post .featured-post-content h4.title',
            ],
        ],
        'active_callback'    => array(
            array(
                'setting'  => 'featured_post_status',
                'operator' => '==',
                'value'    => true
            )
        )
    ] );

}