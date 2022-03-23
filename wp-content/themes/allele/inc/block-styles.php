<?php
/**
 * Allele: Block Styles
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_style/
 *
 * @package WordPress
 * @subpackage Allele
 * @since Allele 1.0.0
 */

/**
 * Registers block styles.
 *
 * @since Allele 1.0.0
 */
function allele_register_block_styles() {

  // Group Block: No Spacing
  register_block_style(
  'core/group',
    array(
      'name'  => 'allele-no-spacing',
      'label' => esc_html__( 'No Spacing', 'allele' ),
    )
  );

  // Group Block: Box Shadow
  register_block_style(
  'core/group',
    array(
      'name'  => 'allele-box-shadow',
      'label' => esc_html__( 'Box Shadow', 'allele' ),
    )
  );

  // Query Pagination Block: Box Pagination Light
  register_block_style(
  'core/query-pagination',
    array(
      'name'  => 'allele-box-pagination-light',
      'label' => esc_html__( 'Box Pagination Light', 'allele' ),
    )
  );

  // Query Pagination Block: Box Pagination Dark
  register_block_style(
  'core/query-pagination',
    array(
      'name'  => 'allele-box-pagination-dark',
      'label' => esc_html__( 'Box Pagination Dark', 'allele' ),
    )
  );

}
add_action( 'init', 'allele_register_block_styles' );
