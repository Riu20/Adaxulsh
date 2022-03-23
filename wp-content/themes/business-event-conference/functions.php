<?php

require get_stylesheet_directory() . '/customizer/featured.php';
require get_stylesheet_directory() . '/sections/featured.php';

add_action( 'wp_enqueue_scripts', 'business_event_conference_chld_thm_parent_css' );
function business_event_conference_chld_thm_parent_css() {

    wp_enqueue_style( 
    	'business_event_conference_chld_css', 
    	trailingslashit( get_template_directory_uri() ) . 'style.css', 
    	array( 
    		'bootstrap',
    		'font-awesome-5',
    		'bizberg-main',
    		'bizberg-component',
    		'bizberg-style2',
    		'bizberg-responsive' 
    	) 
    );

    if ( is_rtl() ) {
        wp_enqueue_style( 
            'business_event_conference_parent_rtl', 
            trailingslashit( get_template_directory_uri() ) . 'rtl.css'
        );
    }
    
}

add_action( 'init', 'business_event_conference_colors' );
function business_event_conference_colors(){

    $options = array(
        'bizberg_slider_title_box_highlight_color',
        'bizberg_slider_arrow_background_color',
        'bizberg_slider_dot_active_color',
        'bizberg_read_more_background_color',
        'bizberg_read_more_background_color_2',
        'bizberg_theme_color',
        'bizberg_header_menu_color_hover',
        'bizberg_header_button_color',
        'bizberg_header_button_color_hover',
        'bizberg_link_color',
        'bizberg_background_color_2',
        'bizberg_link_color_hover',
        'bizberg_sidebar_widget_title_color',
        'bizberg_blog_listing_pagination_active_hover_color',
        'bizberg_heading_color',
        'bizberg_sidebar_widget_link_color_hover',
        'bizberg_footer_social_icon_color',
        'bizberg_footer_copyright_background',
        'bizberg_header_menu_color_hover_sticky_menu',
        'bizberg_header_button_color_sticky_menu',
        'bizberg_header_button_color_hover_sticky_menu'
    );

    foreach ( $options as $value ) {
        
        add_filter( $value , function(){
            return '#e91e63';
        });

    }

}

add_filter( 'bizberg_slider_banner_settings', 'business_event_conference_slider_banner_settings' );
function business_event_conference_slider_banner_settings(){
    return 'slider';
}

add_filter( 'bizberg_slider_gradient_primary_color', 'business_event_conference_slider_gradient_primary_color' );
function business_event_conference_slider_gradient_primary_color(){
    return '#3a4cb4';
}

add_filter( 'bizberg_header_btn_border_radius', 'business_event_conference_header_btn_border_radius' );
function business_event_conference_header_btn_border_radius(){
    return array(
        'top-left-radius'  => '0px',
        'top-right-radius'  => '0px',
        'bottom-left-radius' => '0px',
        'bottom-right-radius' => '0px'
    );
}

add_filter( 'bizberg_header_button_border_color', 'business_event_conference_header_button_border_color' );
function business_event_conference_header_button_border_color(){
    return '#cc1451';
}

add_filter( 'bizberg_header_button_border_color_sticky_menu', 'business_event_conference_header_button_border_color_sticky_menu' );
function business_event_conference_header_button_border_color_sticky_menu(){
    return '#cc1451';
}

add_filter( 'bizberg_header_button_border_dimensions', 'business_event_conference_header_button_border_dimensions' );
function business_event_conference_header_button_border_dimensions(){
    return array(
        'top-width'  => '0px',
        'bottom-width'  => '5px',
        'left-width' => '0px',
        'right-width' => '0px',
    );
}

add_filter( 'bizberg_slider_btn_border_radius', 'business_event_conference_slider_btn_border_radius' );
function business_event_conference_slider_btn_border_radius(){
    return array(
        'border-top-left-radius'  => '0px',
        'border-top-right-radius'  => '0px',
        'border-bottom-right-radius' => '0px',
        'border-bottom-left-radius' => '0px'
    );
}

add_filter( 'bizberg_read_more_border_color', 'business_event_conference_read_more_border_color' );
function business_event_conference_read_more_border_color(){
    return '#cc1451';
}

add_filter( 'bizberg_read_more_border_dimensions', 'business_event_conference_read_more_border_dimensions' );
function business_event_conference_read_more_border_dimensions(){
    return array(
        'top-width'  => '0px',
        'bottom-width'  => '5px',
        'left-width' => '0px',
        'right-width' => '0px',
    );
}

add_filter( 'bizberg_sidebar_spacing_status', 'business_event_conference_sidebar_spacing_status' );
function business_event_conference_sidebar_spacing_status(){
    return '0px';
}

add_filter( 'bizberg_sidebar_widget_border_color', 'business_event_conference_sidebar_widget_background_color' );
add_filter( 'bizberg_sidebar_widget_background_color', 'business_event_conference_sidebar_widget_background_color' );
function business_event_conference_sidebar_widget_background_color(){
    return 'rgba(251,251,251,0)';
}

add_filter( 'bizberg_transparent_header_homepage', 'business_event_conference_transparent_header_homepage' );
function business_event_conference_transparent_header_homepage(){
    return true;
}

add_filter( 'bizberg_transparent_navbar_background', 'business_event_conference_transparent_navbar_background' );
function business_event_conference_transparent_navbar_background(){
    return 'rgba(10,10,10,0)';
}

add_filter( 'bizberg_header_blur', 'business_event_conference_header_blur' );
function business_event_conference_header_blur(){
    return 0;
}

add_filter( 'bizberg_transparent_header_menu_sticky_background', 'business_event_conference_transparent_header_menu_sticky_background' );
function business_event_conference_transparent_header_menu_sticky_background(){
    return '#fff';
}

add_filter( 'bizberg_transparent_header_menu_color_hover', 'business_event_conference_transparent_header_menu_color_hover' );
function business_event_conference_transparent_header_menu_color_hover(){
    return '#e91e63';
}

add_filter( 'bizberg_transparent_header_menu_sticky_text_color', 'business_event_conference_transparent_header_menu_sticky_text_color' );
function business_event_conference_transparent_header_menu_sticky_text_color(){
    return '#64686d';
}

add_filter( 'bizberg_transparent_header_button_color', 'business_event_conference_transparent_header_button_color' );
add_filter( 'bizberg_transparent_header_sticky_button_color', 'business_event_conference_transparent_header_button_color' );
function business_event_conference_transparent_header_button_color(){
    return '#e91e63';
}

add_filter( 'bizberg_transparent_header_button_color_hover', 'business_event_conference_transparent_header_button_color_hover' );
add_filter( 'bizberg_transparent_header_sticky_button_color_hover', 'business_event_conference_transparent_header_button_color_hover' );
function business_event_conference_transparent_header_button_color_hover(){
    return '#e91e63';
}

add_filter( 'bizberg_transparent_header_button_border_color', 'business_event_conference_transparent_header_button_border_color' );
add_filter( 'bizberg_transparent_header_sticky_button_border_color', 'business_event_conference_transparent_header_button_border_color' );
function business_event_conference_transparent_header_button_border_color(){
    return '#cc1451';
}

add_filter( 'bizberg_transparent_header_menu_toggle_color_mobile', 'business_event_conference_transparent_header_menu_toggle_color_mobile' );
function business_event_conference_transparent_header_menu_toggle_color_mobile(){
    return '#fff';
}

add_filter( 'bizberg_sidebar_settings', 'business_event_conference_sidebar_settings' );
function business_event_conference_sidebar_settings(){
    return '4';
}

add_filter( 'bizberg_three_col_listing_radius', 'business_event_conference_three_col_listing_radius' );
function business_event_conference_three_col_listing_radius(){
    return '0';
}

add_filter( 'bizberg_getting_started_screenshot', function(){
    return true;
});

add_action( 'after_setup_theme', 'business_event_conference_setup_theme' );
function business_event_conference_setup_theme() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'automatic-feed-links' );
}