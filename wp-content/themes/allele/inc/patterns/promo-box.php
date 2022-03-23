<?php
/**
 * Promo Box Pattern
 *
 * @package WordPress
 * @subpackage Allele
 * @since Allele 1.0.0
 */

return array(
			'title'         => __( 'Promo Box', 'allele' ),
			'categories'    => array( 'allele-general' ),
			'content'       => '<!-- wp:group {"align":"full","className":"is-style-allele-no-spacing","layout":{"inherit":true}} -->
<div class="wp-block-group alignfull is-style-allele-no-spacing">
<!-- wp:columns {"align":"wide","className":"is-medium-gap"} -->
<div class="wp-block-columns alignwide is-medium-gap">
  <!-- wp:column -->
  <div class="wp-block-column">
    <!-- wp:group {"className":"is-small-gap"} -->
    <div class="wp-block-group is-small-gap">
      <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"0px"}}} -->
      <div class="wp-block-group alignwide">
        <!-- wp:heading {"level":3} -->
        <h3 id="our"><em>' . __( 'Our', 'allele' ) . '</em></h3>
        <!-- /wp:heading -->

        <!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}}} -->
        <h2 id="services" style="font-style:normal;font-weight:700">' . __( 'Services', 'allele' ) . '</h2>
        <!-- /wp:heading -->
      </div>
      <!-- /wp:group -->

      <!-- wp:group {"style":{"spacing":{"blockGap":"10px","padding":{"top":"8%","right":"8%","bottom":"8%","left":"8%"}},"border":{"width":"1px","style":"solid","radius":"5px"}},"borderColor":"tl-border"} -->
      <div class="wp-block-group has-border-color has-tl-border-border-color" style="border-radius:5px;border-style:solid;border-width:1px;padding-top:8%;padding-right:8%;padding-bottom:8%;padding-left:8%">
        <!-- wp:heading {"level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontSize":"average"} -->
        <h4 class="has-average-font-size" id="branding" style="font-style:normal;font-weight:700">' . __( 'Branding', 'allele' ) . '</h4>
        <!-- /wp:heading -->

        <!-- wp:paragraph -->
        <p>' . __( 'Etiam faucibus id massa eget mollis. In pellentesque arcu sed luctus auctor. Curabitur id magna mi. Vestibulum eget iaculis magna.', 'allele' ) . '</p>
        <!-- /wp:paragraph -->
      </div>
      <!-- /wp:group -->

      <!-- wp:group {"style":{"spacing":{"blockGap":"10px","padding":{"top":"8%","right":"8%","bottom":"8%","left":"8%"}},"border":{"width":"1px","style":"solid","radius":"5px"}},"borderColor":"tl-border"} -->
      <div class="wp-block-group has-border-color has-tl-border-border-color" style="border-radius:5px;border-style:solid;border-width:1px;padding-top:8%;padding-right:8%;padding-bottom:8%;padding-left:8%">
        <!-- wp:heading {"level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontSize":"average"} -->
        <h4 class="has-average-font-size" id="web-design-1" style="font-style:normal;font-weight:700">' . __( 'Web Design', 'allele' ) . '</h4>
        <!-- /wp:heading -->

        <!-- wp:paragraph -->
        <p>' . __( 'Etiam faucibus id massa eget mollis. In pellentesque arcu sed luctus auctor. Curabitur id magna mi. Vestibulum eget iaculis magna.', 'allele' ) . '</p>
        <!-- /wp:paragraph -->
      </div>
      <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
  </div>
  <!-- /wp:column -->

  <!-- wp:column -->
  <div class="wp-block-column">
    <!-- wp:group {"className":"is-small-gap"} -->
    <div class="wp-block-group is-small-gap">
      <!-- wp:group {"style":{"spacing":{"blockGap":"10px","padding":{"top":"8%","right":"8%","bottom":"8%","left":"8%"}},"border":{"width":"1px","style":"solid","radius":"5px"}},"borderColor":"tl-border"} -->
      <div class="wp-block-group has-border-color has-tl-border-border-color" style="border-radius:5px;border-style:solid;border-width:1px;padding-top:8%;padding-right:8%;padding-bottom:8%;padding-left:8%">
        <!-- wp:heading {"level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontSize":"average"} -->
        <h4 class="has-average-font-size" id="branding" style="font-style:normal;font-weight:700">' . __( 'Advertising', 'allele' ) . '</h4>
        <!-- /wp:heading -->

        <!-- wp:paragraph -->
        <p>' . __( 'Etiam faucibus id massa eget mollis. In pellentesque arcu sed luctus auctor. Curabitur id magna mi. Vestibulum eget iaculis magna.', 'allele' ) . '</p>
        <!-- /wp:paragraph -->
      </div>
      <!-- /wp:group -->

      <!-- wp:group {"style":{"spacing":{"blockGap":"10px","padding":{"top":"8%","right":"8%","bottom":"8%","left":"8%"}},"border":{"width":"1px","style":"solid","radius":"5px"}},"borderColor":"tl-border"} -->
      <div class="wp-block-group has-border-color has-tl-border-border-color" style="border-radius:5px;border-style:solid;border-width:1px;padding-top:8%;padding-right:8%;padding-bottom:8%;padding-left:8%">
        <!-- wp:heading {"level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontSize":"average"} -->
        <h4 class="has-average-font-size" id="web-design-1" style="font-style:normal;font-weight:700">' . __( 'Marketing', 'allele' ) . '</h4>
        <!-- /wp:heading -->

        <!-- wp:paragraph -->
        <p>' . __( 'Etiam faucibus id massa eget mollis. In pellentesque arcu sed luctus auctor. Curabitur id magna mi. Vestibulum eget iaculis magna.', 'allele' ) . '</p>
        <!-- /wp:paragraph -->
      </div>
      <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
  </div>
  <!-- /wp:column -->
</div>
<!-- /wp:columns -->
</div>
<!-- /wp:group -->',
);
