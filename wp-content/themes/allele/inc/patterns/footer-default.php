<?php
/**
 * Footer Default Pattern
 *
 * @package WordPress
 * @subpackage Allele
 * @since Allele 1.0.0
 */

return array(
			'title'         => __( 'Footer Default', 'allele' ),
			'categories'    => array( 'allele-footers' ),
			'blockTypes'    => array( 'core/template-part/footer' ),
			'content'       => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"8%","bottom":"8%","right":"8%","left":"8%"}}},"backgroundColor":"td-background","textColor":"td-heading","layout":{"inherit":true}} -->
<div class="wp-block-group alignfull has-td-heading-color has-td-background-background-color has-text-color has-background" style="padding-top:8%;padding-right:8%;padding-bottom:8%;padding-left:8%"><!-- wp:group {"align":"wide","layout":{"type":"flex","allowOrientation":false,"justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide"><!-- wp:navigation {"overlayMenu":"never","layout":{"type":"flex","setCascadingProperties":true,"flexWrap":"nowrap"}} /-->

<!-- wp:social-links {"iconColor":"td-heading","iconColorValue":"#f5f5f5","className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"right","flexWrap":"nowrap"}} -->
<ul class="wp-block-social-links has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"twitter"} /-->

<!-- wp:social-link {"url":"#","service":"wordpress"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group -->

<!-- wp:separator {"color":"td-border","align":"wide","className":"is-style-wide"} -->
<hr class="wp-block-separator alignwide has-text-color has-background has-td-border-background-color has-td-border-color is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:group {"align":"wide","layout":{"type":"flex","allowOrientation":false,"justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|td-meta"}}}},"textColor":"td-meta","fontSize":"tiny"} -->
<p class="has-td-meta-color has-text-color has-link-color has-tiny-font-size">' . allele_site_info() . '</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"right","style":{"elements":{"link":{"color":{"text":"var:preset|color|td-meta"}}}},"textColor":"td-meta","fontSize":"tiny"} -->
<p class="has-text-align-right has-td-meta-color has-text-color has-link-color has-tiny-font-size">' . allele_theme_info() . '</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->',
);
