<?php
/**
 * Highlight Box Pattern
 *
 * @package WordPress
 * @subpackage Allele
 * @since Allele 1.0.0
 */

return array(
			'title'         => __( 'Highlight Box', 'allele' ),
			'categories'    => array( 'allele-general' ),
			'content'       => '<!-- wp:group {"align":"full","className":"is-style-allele-no-spacing","layout":{"inherit":true}} -->
<div class="wp-block-group alignfull is-style-allele-no-spacing">
<!-- wp:media-text {"align":"full","mediaId":3277,"mediaLink":"' . esc_url( get_theme_file_uri( 'images/highlight-6.jpg' ) ) . '","linkDestination":"custom","mediaType":"image"} -->
<div class="wp-block-media-text alignfull is-stacked-on-mobile">
  <figure class="wp-block-media-text__media"><a href="#"><img src="' . esc_url( get_theme_file_uri( 'images/highlight-6.jpg' ) ) . '" alt="" class="wp-image-3277 size-full" /></a></figure>
  <div class="wp-block-media-text__content">
    <!-- wp:group -->
    <div class="wp-block-group">
      <!-- wp:spacer {"height":1} -->
      <div style="height:1px" aria-hidden="true" class="wp-block-spacer"></div>
      <!-- /wp:spacer -->

      <!-- wp:group {"style":{"spacing":{"blockGap":"0px"}}} -->
      <div class="wp-block-group">
        <!-- wp:heading {"level":3} -->
        <h3 id="our"><em>' . __( 'UI/UX', 'allele' ) . '</em></h3>
        <!-- /wp:heading -->

        <!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}}} -->
        <h2 id="solutions" style="font-style:normal;font-weight:700">' . __( 'Solutions', 'allele' ) . '</h2>
        <!-- /wp:heading -->
      </div>
      <!-- /wp:group -->

      <!-- wp:paragraph {"className":"is-allele-block-ellipsis-on-xsmall"} -->
      <p class="is-allele-block-ellipsis-on-xsmall">' . __( 'Neque gravida in fermentum et sollicitudin ac orci phasellus egestas. Gravida neque convallis a cras semper auctor neque vitae tempus.', 'allele' ) . '</p>
      <!-- /wp:paragraph -->

      <!-- wp:buttons -->
      <div class="wp-block-buttons">
        <!-- wp:button {"className":"is-style-outline"} -->
        <div class="wp-block-button is-style-outline"><a class="wp-block-button__link" href="#">' . __( 'Read More', 'allele' ) . '</a></div>
        <!-- /wp:button -->
      </div>
      <!-- /wp:buttons -->
    </div>
    <!-- /wp:group -->
  </div>
</div>
<!-- /wp:media-text -->
</div>
<!-- /wp:group -->',
);
