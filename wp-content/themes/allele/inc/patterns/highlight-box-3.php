<?php
/**
 * Highlight Box 3 Pattern
 *
 * @package WordPress
 * @subpackage Allele
 * @since Allele 1.0.0
 */

return array(
			'title'         => __( 'Highlight Box 3', 'allele' ),
			'categories'    => array( 'allele-general' ),
			'content'       => '<!-- wp:group {"align":"full","backgroundColor":"tl-background-alt","className":"is-style-allele-no-spacing","layout":{"inherit":true}} -->
<div class="wp-block-group alignfull is-style-allele-no-spacing has-tl-background-alt-background-color has-background"><!-- wp:group {"align":"wide"} -->
<div class="wp-block-group alignwide"><!-- wp:spacer {"height":1,"className":"is-tiny-spacing-tb"} -->
<div style="height:1px" aria-hidden="true" class="wp-block-spacer is-tiny-spacing-tb"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->

<!-- wp:media-text {"mediaId":3118,"mediaLink":"' . esc_url( get_theme_file_uri( 'images/highlight-4.jpg' ) ) . '","linkDestination":"none","mediaType":"image","className":"is-allele-no-spacing"} -->
<div class="wp-block-media-text alignwide is-stacked-on-mobile is-allele-no-spacing"><figure class="wp-block-media-text__media"><img src="' . esc_url( get_theme_file_uri( 'images/highlight-4.jpg' ) ) . '" alt="" class="wp-image-3118 size-full"/></figure><div class="wp-block-media-text__content"><!-- wp:group {"backgroundColor":"tl-background","className":"is-style-allele-box-shadow"} -->
<div class="wp-block-group is-style-allele-box-shadow has-tl-background-background-color has-background"><!-- wp:group {"layout":{"inherit":true}} -->
<div class="wp-block-group"><!-- wp:spacer {"height":5} -->
<div style="height:5px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}}} -->
<h3 id="we-are-creative-digital-agency" style="font-style:normal;font-weight:700">' . __( 'We are creative digital agency.', 'allele' ) . '</h3>
<!-- /wp:heading -->

<!-- wp:spacer {"height":5} -->
<div style="height:5px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:media-text -->

<!-- wp:group {"align":"wide"} -->
<div class="wp-block-group alignwide"><!-- wp:spacer {"height":1,"className":"is-tiny-spacing-tb"} -->
<div style="height:1px" aria-hidden="true" class="wp-block-spacer is-tiny-spacing-tb"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->',
);
