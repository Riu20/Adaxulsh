<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package corpobrand
 */

/**
 * corpobrand_site_content_ends_action hook
 *
 * @hooked corpobrand_site_content_ends -  10
 *
 */
do_action( 'corpobrand_site_content_ends_action' );

/**
 * corpobrand_footer_start_action hook
 *
 * @hooked corpobrand_footer_start -  10
 *
 */
do_action( 'corpobrand_footer_start_action' );

/**
 * corpobrand_site_info_action hook
 *
 * @hooked corpobrand_site_info -  10
 *
 */
do_action( 'corpobrand_site_info_action' );

/**
 * corpobrand_footer_ends_action hook
 *
 * @hooked corpobrand_footer_ends -  10
 * @hooked corpobrand_slide_to_top -  20
 *
 */
do_action( 'corpobrand_footer_ends_action' );

/**
 * corpobrand_page_ends_action hook
 *
 * @hooked corpobrand_page_ends -  10
 *
 */
do_action( 'corpobrand_page_ends_action' );

wp_footer();

/**
 * corpobrand_body_html_ends_action hook
 *
 * @hooked corpobrand_body_html_ends -  10
 *
 */
do_action( 'corpobrand_body_html_ends_action' );
