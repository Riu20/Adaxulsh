<?php
/**
 * Agency Page Pattern
 *
 * @package WordPress
 * @subpackage Allele
 * @since Allele 1.0.0
 */

return array(
			'title'         => __( 'Agency Page', 'allele' ),
			'categories'    => array( 'allele-pages' ),
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
<!-- /wp:group -->

<!-- wp:spacer {"height":1,"className":"is-small-spacing-tb"} -->
<div style="height:1px" aria-hidden="true" class="wp-block-spacer is-small-spacing-tb"></div>
<!-- /wp:spacer -->

<!-- wp:group {"align":"full","className":"is-style-allele-no-spacing","layout":{"inherit":true}} -->
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
<!-- /wp:group -->

<!-- wp:spacer {"height":1,"className":"is-small-spacing-tb"} -->
<div style="height:1px" aria-hidden="true" class="wp-block-spacer is-small-spacing-tb"></div>
<!-- /wp:spacer -->

<!-- wp:group {"align":"full","className":"is-style-allele-no-spacing","layout":{"inherit":true}} -->
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
<!-- /wp:group -->

<!-- wp:spacer {"height":1,"className":"is-small-spacing-tb"} -->
<div style="height:1px" aria-hidden="true" class="wp-block-spacer is-small-spacing-tb"></div>
<!-- /wp:spacer -->

<!-- wp:group {"align":"full","className":"is-style-allele-no-spacing","layout":{"inherit":true}} -->
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
<!-- /wp:group -->

<!-- wp:spacer {"height":1,"className":"is-small-spacing-tb"} -->
<div style="height:1px" aria-hidden="true" class="wp-block-spacer is-small-spacing-tb"></div>
<!-- /wp:spacer -->',
);
