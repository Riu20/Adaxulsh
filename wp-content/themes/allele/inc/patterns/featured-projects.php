<?php
/**
 * Featured Projects Pattern
 *
 * @package WordPress
 * @subpackage Allele
 * @since Allele 1.0.0
 */

return array(
			'title'         => __( 'Featured Projects', 'allele' ),
			'categories'    => array( 'allele-projects' ),
			'content'       => '<!-- wp:group {"align":"full","className":"is-style-allele-no-spacing","layout":{"inherit":true}} -->
<div class="wp-block-group alignfull is-style-allele-no-spacing"><!-- wp:columns {"align":"wide","className":"is-medium-gap"} -->
<div class="wp-block-columns alignwide is-medium-gap"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"is-small-gap"} -->
<div class="wp-block-group is-small-gap"><!-- wp:group {"style":{"spacing":{"blockGap":"0px"}}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3} -->
<h3 id="our"><em>Featured</em></h3>
<!-- /wp:heading -->

<!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}}} -->
<h2 id="projects" style="font-style:normal;font-weight:700">Projects</h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group -->
<div class="wp-block-group"><!-- wp:image {"id":2621,"sizeSlug":"full","linkDestination":"custom","className":"is-allele-hover-shine"} -->
<figure class="wp-block-image size-full is-allele-hover-shine"><a href="#"><img src="' . esc_url( get_theme_file_uri( 'images/project-1.jpg' ) ) . '" alt="" class="wp-image-2621"/></a></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"700"},"elements":{"link":{"color":{"text":"var:preset|color|tl-heading"}}}},"fontSize":"average"} -->
<h4 class="has-link-color has-average-font-size" id="escape" style="font-style:normal;font-weight:700"><a href="#">' . __( 'Escape', 'allele' ) . '</a></h4>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group -->
<div class="wp-block-group"><!-- wp:image {"id":2625,"sizeSlug":"full","linkDestination":"custom","className":"is-allele-hover-shine"} -->
<figure class="wp-block-image size-full is-allele-hover-shine"><a href="#"><img src="' . esc_url( get_theme_file_uri( 'images/project-2.jpg' ) ) . '" alt="" class="wp-image-2625"/></a></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"700"},"elements":{"link":{"color":{"text":"var:preset|color|tl-heading"}}}},"fontSize":"average"} -->
<h4 class="has-link-color has-average-font-size" id="branding-digital-age" style="font-style:normal;font-weight:700"><a href="#">' . __( 'Colors', 'allele' ) . '</a></h4>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group -->
<div class="wp-block-group"><!-- wp:image {"id":2635,"sizeSlug":"full","linkDestination":"custom","className":"is-allele-hover-shine"} -->
<figure class="wp-block-image size-full is-allele-hover-shine"><a href="#"><img src="' . esc_url( get_theme_file_uri( 'images/project-6.jpg' ) ) . '" alt="" class="wp-image-2635"/></a></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"700"},"elements":{"link":{"color":{"text":"var:preset|color|tl-heading"}}}},"fontSize":"average"} -->
<h4 class="has-link-color has-average-font-size" id="branding-digital-age" style="font-style:normal;font-weight:700"><a href="#">' . __( 'Canvas', 'allele' ) . '</a></h4>
<!-- /wp:heading --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"is-small-gap"} -->
<div class="wp-block-group is-small-gap"><!-- wp:group -->
<div class="wp-block-group"><!-- wp:image {"id":2631,"sizeSlug":"full","linkDestination":"custom","className":"is-allele-hover-shine"} -->
<figure class="wp-block-image size-full is-allele-hover-shine"><a href="#"><img src="' . esc_url( get_theme_file_uri( 'images/project-4.jpg' ) ) . '" alt="" class="wp-image-2631"/></a></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"700"},"elements":{"link":{"color":{"text":"var:preset|color|tl-heading"}}}},"fontSize":"average"} -->
<h4 class="has-link-color has-average-font-size" id="escape" style="font-style:normal;font-weight:700"><a href="#">' . __( 'Patterns', 'allele' ) . '</a></h4>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group -->
<div class="wp-block-group"><!-- wp:image {"id":2633,"sizeSlug":"full","linkDestination":"custom","className":"is-allele-hover-shine"} -->
<figure class="wp-block-image size-full is-allele-hover-shine"><a href="#"><img src="' . esc_url( get_theme_file_uri( 'images/project-5.jpg' ) ) . '" alt="" class="wp-image-2633"/></a></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"700"},"elements":{"link":{"color":{"text":"var:preset|color|tl-heading"}}}},"fontSize":"average"} -->
<h4 class="has-link-color has-average-font-size" id="branding-digital-age" style="font-style:normal;font-weight:700"><a href="#">' . __( 'Vintage', 'allele' ) . '</a></h4>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group -->
<div class="wp-block-group"><!-- wp:image {"id":2627,"sizeSlug":"full","linkDestination":"custom","className":"is-allele-hover-shine"} -->
<figure class="wp-block-image size-full is-allele-hover-shine"><a href="#"><img src="' . esc_url( get_theme_file_uri( 'images/project-3.jpg' ) ) . '" alt="" class="wp-image-2627"/></a></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"700"},"elements":{"link":{"color":{"text":"var:preset|color|tl-heading"}}}},"fontSize":"average"} -->
<h4 class="has-link-color has-average-font-size" id="branding-digital-age" style="font-style:normal;font-weight:700"><a href="#">' . __( 'Moments', 'allele' ) . '</a></h4>
<!-- /wp:heading --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->',
);
