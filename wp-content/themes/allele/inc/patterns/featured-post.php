<?php
/**
 * Featured Post Pattern
 *
 * @package WordPress
 * @subpackage Allele
 * @since Allele 1.0.0
 */

return array(
			'title'         => __( 'Featured Post', 'allele' ),
			'categories'    => array( 'allele-query' ),
			'content'       => '<!-- wp:query {"query":{"perPage":"1","pages":0,"offset":0,"postType":"post","categoryIds":[],"tagIds":[],"order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"align":"full","layout":{"inherit":false}} -->
<div class="wp-block-query alignfull"><!-- wp:post-template -->
<!-- wp:columns {"backgroundColor":"td-heading","className":"is-featured-query"} -->
<div class="wp-block-columns is-featured-query has-td-heading-background-color has-background"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:post-featured-image {"isLink":true,"height":""} /--></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"8%","right":"8%","bottom":"8%","left":"8%"}}}} -->
<div class="wp-block-group" style="padding-top:8%;padding-right:8%;padding-bottom:8%;padding-left:8%"><!-- wp:post-terms {"term":"category"} /-->

<!-- wp:post-title {"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|tl-heading"}}}},"fontSize":"huge"} /-->

<!-- wp:post-excerpt {"showMoreOnNewLine":false} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:post-template --></div>
<!-- /wp:query -->',
);
