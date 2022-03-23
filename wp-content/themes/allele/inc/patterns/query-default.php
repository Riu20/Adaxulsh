<?php
/**
 * Query Default Pattern
 *
 * @package WordPress
 * @subpackage Allele
 * @since Allele 1.0.0
 */

return array(
			'title'         => __( 'Query Default', 'allele' ),
			'categories'    => array( 'allele-query' ),
			'content'       => '<!-- wp:query {"query":{"perPage":"4","pages":0,"offset":0,"postType":"post","categoryIds":[],"tagIds":[],"order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"displayLayout":{"type":"list"},"align":"wide","layout":{"inherit":false}} -->
<div class="wp-block-query alignwide">
  <!-- wp:post-template {"className":"allele-query-loop"} -->
  <!-- wp:columns {"verticalAlignment":"center","className":"is-stacked-before-large"} -->
  <div class="wp-block-columns are-vertically-aligned-center is-stacked-before-large">
    <!-- wp:column {"verticalAlignment":"center"} -->
    <div class="wp-block-column is-vertically-aligned-center">
      <!-- wp:post-featured-image {"isLink":true,"width":"","height":""} /-->
    </div>
    <!-- /wp:column -->

    <!-- wp:column {"verticalAlignment":"center"} -->
    <div class="wp-block-column is-vertically-aligned-center">
      <!-- wp:group {"style":{"spacing":{"blockGap":"10px","padding":{"right":"8%","left":"8%"}}}} -->
      <div class="wp-block-group" style="padding-right:8%;padding-left:8%">
        <!-- wp:post-title {"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|tl-heading"}}},"typography":{"fontStyle":"normal","fontWeight":"400"}},"fontSize":"large"} /-->

        <!-- wp:post-date {"textColor":"tl-meta","fontSize":"small"} /-->

        <!-- wp:post-excerpt {"showMoreOnNewLine":false} /-->
      </div>
      <!-- /wp:group -->
    </div>
    <!-- /wp:column -->
  </div>
  <!-- /wp:columns -->
  <!-- /wp:post-template -->
</div>
<!-- /wp:query -->',
);
