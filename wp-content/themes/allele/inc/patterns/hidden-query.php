<?php
/**
 * Hidden Query Pattern
 *
 * @package WordPress
 * @subpackage Allele
 * @since Allele 1.0.0
 */

return array(
			'title'    => __( 'Hidden Query', 'allele' ),
      'inserter' => false,
			'content'  => '<!-- wp:query {"query":{"perPage":"10","pages":0,"offset":0,"postType":"post","categoryIds":[],"tagIds":[],"order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":true},"displayLayout":{"type":"list"},"align":"wide","layout":{"inherit":false}} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"className":"is-allele-query-loop"} -->
<!-- wp:columns {"verticalAlignment":"center","className":"is-stacked-before-large"} -->
<div class="wp-block-columns are-vertically-aligned-center is-stacked-before-large"><!-- wp:column {"verticalAlignment":"center","className":"is-featured-image-column"} -->
<div class="wp-block-column is-vertically-aligned-center is-featured-image-column"><!-- wp:post-featured-image {"isLink":true,"width":"","height":"","className":"is-allele-hover-shine"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","className":"is-post-content-column"} -->
<div class="wp-block-column is-vertically-aligned-center is-post-content-column"><!-- wp:group {"style":{"spacing":{"blockGap":"10px","padding":{"right":"8%","left":"8%"}}}} -->
<div class="wp-block-group" style="padding-right:8%;padding-left:8%"><!-- wp:post-title {"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|tl-heading"}}},"typography":{"fontStyle":"normal","fontWeight":"400"}},"fontSize":"large"} /-->

<!-- wp:post-date {"textColor":"tl-meta","fontSize":"small"} /-->

<!-- wp:post-excerpt {"showMoreOnNewLine":false} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:post-template -->

<!-- wp:spacer {"height":14} -->
<div style="height:14px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:query-pagination {"paginationArrow":"arrow","align":"wide","className":"is-style-allele-box-pagination-light","layout":{"type":"flex","justifyContent":"center"}} -->
<!-- wp:query-pagination-previous {"fontSize":"small"} /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next {"fontSize":"small"} /-->
<!-- /wp:query-pagination -->

</div>
<!-- /wp:query -->',
);
