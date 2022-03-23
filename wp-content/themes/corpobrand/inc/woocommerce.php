<?php
/**
 * woocommerce functions and definitions
 *
 * @package corpobrand
 */

/**
 * WooCommerce setup function.
 *
 * @link https://docs.woocommerce.com/document/third-party-custom-theme-compatibility/
 * @link https://github.com/woocommerce/woocommerce/wiki/Enabling-product-gallery-features-(zoom,-swipe,-lightbox)-in-3.0.0
 *
 * @return void
 */
function corpobrand_woocommerce_setup() {
	add_theme_support( 'woocommerce' );
	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );
}
add_action( 'after_setup_theme', 'corpobrand_woocommerce_setup' );

if ( ! function_exists( 'corpobrand_woocommerce_product_columns_wrapper' ) ) {
	/**
	 * Product columns wrapper.
	 *
	 * @return  void
	 */
	function corpobrand_woocommerce_product_wrapper_open() {
		echo '<div class="single-template-wrapper wrapper page-section">';
	}
}
add_action( 'woocommerce_before_main_content', 'corpobrand_woocommerce_product_wrapper_open', 5 );

if ( ! function_exists( 'corpobrand_woocommerce_product_columns_wrapper_close' ) ) {
	/**
	 * Product columns wrapper close.
	 *
	 * @return  void
	 */
	function corpobrand_woocommerce_product_columns_wrapper_close() {
		echo '</div>';
	}
}
add_action( 'woocommerce_sidebar', 'corpobrand_woocommerce_product_columns_wrapper_close', 20 );

remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20 );

if ( ! function_exists( 'corpobrand_woocommerce_hide_page_title' ) ) {
	/**
	 * Product columns wrapper close.
	 *
	 * @return  void
	 */
	function corpobrand_woocommerce_hide_page_title() {
		return false;
	}
}
add_filter( 'woocommerce_show_page_title', 'corpobrand_woocommerce_hide_page_title' );

// Change number or products per row to 3
add_filter('loop_shop_columns', 'corpobrand_loop_columns');

if ( ! function_exists( 'corpobrand_loop_columns' ) ) {
	function corpobrand_loop_columns() {
		return 3; // 3 products per row
	}
}

add_filter( 'woocommerce_pagination_args', 'corpobrand_woocommerce_pagination' );
if ( ! function_exists( 'corpobrand_woocommerce_pagination' ) ) {
	function corpobrand_woocommerce_pagination( $args ) {
		$args['prev_text'] = corpobrand_get_svg( array( 'icon' => 'angle-left' ) );
		$args['next_text'] = corpobrand_get_svg( array( 'icon' => 'angle-right' ) );
		$args['mid_size']  = 4;

		return $args;
	}
}

add_filter( 'get_product_search_form', 'corpobrand_product_search' );
if ( ! function_exists( 'corpobrand_product_search' ) ) { 
	function corpobrand_product_search() { ?>
		<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
			<label class="screen-reader-text" for="woocommerce-product-search-field-<?php echo isset( $index ) ? absint( $index ) : 0; ?>"><?php esc_html_e( 'Search for:', 'corpobrand' ); ?></label>
			<input type="search" id="woocommerce-product-search-field-<?php echo isset( $index ) ? absint( $index ) : 0; ?>" class="search-field" placeholder="<?php echo esc_attr__( 'Search products&hellip;', 'corpobrand' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
			<input type="hidden" name="post_type" value="product" />
			<button type="submit" class="search-submit"><?php echo corpobrand_get_svg( array( 'icon' => 'search' ) ); ?><span class="screen-reader-text"><?php echo esc_html_x( 'Search', 'submit button', 'corpobrand' ); ?></span></button>
		</form>
	<?php }
}