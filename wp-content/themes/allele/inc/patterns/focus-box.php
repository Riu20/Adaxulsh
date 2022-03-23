<?php
/**
 * Focus Box Pattern
 *
 * @package WordPress
 * @subpackage Allele
 * @since Allele 1.0.0
 */

return array(
			'title'         => __( 'Focus Box', 'allele' ),
			'categories'    => array( 'allele-general' ),
			'content'       => '<!-- wp:group {"align":"full","className":"is-style-allele-no-spacing","layout":{"inherit":true}} -->
<div class="wp-block-group alignfull is-style-allele-no-spacing"><!-- wp:cover {"url":"' . esc_url( get_theme_file_uri( 'images/focus-2.jpg' ) ) . '","id":3250,"dimRatio":50,"minHeight":85,"minHeightUnit":"vh","isDark":false,"align":"full"} -->
<div class="wp-block-cover alignfull is-light" style="min-height:85vh"><span aria-hidden="true" class="wp-block-cover__gradient-background has-background-dim"></span><img class="wp-block-cover__image-background wp-image-3250" alt="" src="' . esc_url( get_theme_file_uri( 'images/focus-2.jpg' ) ) . '" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"inherit":true}} -->
<div class="wp-block-group"><!-- wp:group {"align":"wide"} -->
<div class="wp-block-group alignwide"><!-- wp:group {"style":{"spacing":{"blockGap":"0px"}}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"100"}},"textColor":"td-heading"} -->
<h2 class="has-text-align-center has-td-heading-color has-text-color" id="design-agency-1" style="font-style:normal;font-weight:100"><em>' . __( 'We Design', 'allele' ) . '</em></h2>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"textColor":"td-heading","fontSize":"colossal"} -->
<h2 class="has-text-align-center has-td-heading-color has-text-color has-colossal-font-size" id="infinite-possibilities-1" style="font-style:normal;font-weight:700">' . __( 'Infinite Prospects', 'allele' ) . '</h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":1} -->
<div style="height:1px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"textColor":"td-heading","className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-td-heading-color has-text-color">' . __( 'Let\'t Talk', 'allele' ) . '</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->',
);
