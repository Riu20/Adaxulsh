<?php
/**
 * Allele functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Allele
 * @since Allele 1.0.0
 */

if ( ! function_exists( 'allele_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Allele 1.0.0
	 *
	 * @return void
	 */
	function allele_support() {

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

    // Add Editor Style
    add_editor_style( '/build/editor-style.css' );

    // Theme Image Sizes
    set_post_thumbnail_size( 1600, 800 );

	}

endif;

add_action( 'after_setup_theme', 'allele_support' );

if ( ! function_exists( 'allele_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Allele 1.0.0
	 *
	 * @return void
	 */
	function allele_styles() {

		// Register theme stylesheet.
    $theme_version = wp_get_theme()->get( 'Version' );

    $version_string = is_string( $theme_version ) ? $theme_version : false;
		wp_register_style(
			'allele-style',
			get_template_directory_uri() . '/style.css',
			array(),
			$version_string
		);

		// Add styles inline.
		wp_add_inline_style( 'allele-style', allele_get_font_face_styles() );

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'allele-style' );
    wp_enqueue_style( 'allele-theme-style', get_template_directory_uri() . '/build/theme-style.css', array( 'allele-style' ), $version_string );

	}

endif;

add_action( 'wp_enqueue_scripts', 'allele_styles' );

if ( ! function_exists( 'allele_editor_styles' ) ) :

	/**
	 * Enqueue editor styles.
	 *
	 * @since Allele 1.0.0
	 *
	 * @return void
	 */
	function allele_editor_styles() {

		// Add styles inline.
		wp_add_inline_style( 'wp-block-library', allele_get_font_face_styles() );

	}

endif;

add_action( 'admin_init', 'allele_editor_styles' );

if ( ! function_exists( 'allele_get_font_face_styles' ) ) :

	/**
	 * Get font face styles.
	 * Called by functions allele_styles() and allele_editor_styles() above.
	 *
	 * @since Allele 1.0.0
	 *
	 * @return string
	 */
	function allele_get_font_face_styles() {

		return "
    @font-face {
      font-family: 'Open Sans';
      font-style: normal;
      font-weight: 400;
      font-stretch: 100%;
      font-display: swap;
      src: url('" . get_theme_file_uri( 'fonts/open-sans/open-sans-v27-latin-regular.woff2' ) . "') format('woff2'),
           url('" . get_theme_file_uri( 'fonts/open-sans/open-sans-v27-latin-regular.woff' ) . "') format('woff');
    }

    @font-face {
      font-family: 'Open Sans';
      font-style: normal;
      font-weight: 700;
      font-stretch: 100%;
      font-display: swap;
      src: url('" . get_theme_file_uri( 'fonts/open-sans/open-sans-v27-latin-700.woff2' ) . "') format('woff2'),
           url('" . get_theme_file_uri( 'fonts/open-sans/open-sans-v27-latin-700.woff' ) . "') format('woff');
    }

    @font-face {
      font-family: 'Open Sans';
      font-style: italic;
      font-weight: 400;
      font-stretch: 100%;
      font-display: swap;
      src: url('" . get_theme_file_uri( 'fonts/open-sans/open-sans-v27-latin-italic.woff2' ) . "') format('woff2'),
           url('" . get_theme_file_uri( 'fonts/open-sans/open-sans-v27-latin-italic.woff' ) . "') format('woff');
    }

    @font-face {
      font-family: 'Open Sans';
      font-style: italic;
      font-weight: 700;
      font-stretch: 100%;
      font-display: swap;
      src: url('" . get_theme_file_uri( 'fonts/open-sans/open-sans-v27-latin-700italic.woff2' ) . "') format('woff2'),
           url('" . get_theme_file_uri( 'fonts/open-sans/open-sans-v27-latin-700italic.woff' ) . "') format('woff');
    }

    @font-face {
      font-family: 'Raleway';
      font-style: normal;
      font-weight: 100;
      font-stretch: 100%;
      font-display: swap;
      src: url('" . get_theme_file_uri( 'fonts/raleway/raleway-v22-latin-100.woff2' ) . "') format('woff2'),
           url('" . get_theme_file_uri( 'fonts/raleway/raleway-v22-latin-100.woff' ) . "') format('woff');
    }

    @font-face {
      font-family: 'Raleway';
      font-style: normal;
      font-weight: 200;
      font-stretch: 100%;
      font-display: swap;
      src: url('" . get_theme_file_uri( 'fonts/raleway/raleway-v22-latin-200.woff2' ) . "') format('woff2'),
           url('" . get_theme_file_uri( 'fonts/raleway/raleway-v22-latin-200.woff' ) . "') format('woff');
    }

    @font-face {
      font-family: 'Raleway';
      font-style: normal;
      font-weight: 300;
      font-stretch: 100%;
      font-display: swap;
      src: url('" . get_theme_file_uri( 'fonts/raleway/raleway-v22-latin-300.woff2' ) . "') format('woff2'),
           url('" . get_theme_file_uri( 'fonts/raleway/raleway-v22-latin-300.woff' ) . "') format('woff');
    }

    @font-face {
      font-family: 'Raleway';
      font-style: normal;
      font-weight: 400;
      font-stretch: 100%;
      font-display: swap;
      src: url('" . get_theme_file_uri( 'fonts/raleway/raleway-v22-latin-regular.woff2' ) . "') format('woff2'),
           url('" . get_theme_file_uri( 'fonts/raleway/raleway-v22-latin-regular.woff' ) . "') format('woff');
    }

    @font-face {
      font-family: 'Raleway';
      font-style: normal;
      font-weight: 700;
      font-stretch: 100%;
      font-display: swap;
      src: url('" . get_theme_file_uri( 'fonts/raleway/raleway-v22-latin-700.woff2' ) . "') format('woff2'),
           url('" . get_theme_file_uri( 'fonts/raleway/raleway-v22-latin-700.woff' ) . "') format('woff');
    }

    @font-face {
      font-family: 'Raleway';
      font-style: italic;
      font-weight: 100;
      font-stretch: 100%;
      font-display: swap;
      src: url('" . get_theme_file_uri( 'fonts/raleway/raleway-v22-latin-100italic.woff2' ) . "') format('woff2'),
           url('" . get_theme_file_uri( 'fonts/raleway/raleway-v22-latin-100italic.woff' ) . "') format('woff');
    }

    @font-face {
      font-family: 'Raleway';
      font-style: italic;
      font-weight: 200;
      font-stretch: 100%;
      font-display: swap;
      src: url('" . get_theme_file_uri( 'fonts/raleway/raleway-v22-latin-200italic.woff2' ) . "') format('woff2'),
           url('" . get_theme_file_uri( 'fonts/raleway/raleway-v22-latin-200italic.woff' ) . "') format('woff');
    }

    @font-face {
      font-family: 'Raleway';
      font-style: italic;
      font-weight: 300;
      font-stretch: 100%;
      font-display: swap;
      src: url('" . get_theme_file_uri( 'fonts/raleway/raleway-v22-latin-300italic.woff2' ) . "') format('woff2'),
           url('" . get_theme_file_uri( 'fonts/raleway/raleway-v22-latin-300italic.woff' ) . "') format('woff');
    }

    @font-face {
      font-family: 'Raleway';
      font-style: italic;
      font-weight: 400;
      font-stretch: 100%;
      font-display: swap;
      src: url('" . get_theme_file_uri( 'fonts/raleway/raleway-v22-latin-italic.woff2' ) . "') format('woff2'),
           url('" . get_theme_file_uri( 'fonts/raleway/raleway-v22-latin-italic.woff' ) . "') format('woff');
    }

    @font-face {
      font-family: 'Raleway';
      font-style: italic;
      font-weight: 700;
      font-stretch: 100%;
      font-display: swap;
      src: url('" . get_theme_file_uri( 'fonts/raleway/raleway-v22-latin-700italic.woff2' ) . "') format('woff2'),
           url('" . get_theme_file_uri( 'fonts/raleway/raleway-v22-latin-700italic.woff' ) . "') format('woff');
    }
		";

	}

endif;

if ( ! function_exists( 'allele_preload_webfonts' ) ) :

	/**
	 * Preloads the main web font to improve performance.
	 *
	 * @since Allele 1.0.0
	 *
	 * @return void
	 */
	function allele_preload_webfonts() {
		?>
		<link rel="preload" href="<?php echo esc_url( get_theme_file_uri( 'fonts/open-sans/open-sans-v27-latin-regular.woff' ) ); ?>" as="font" type="font/woff" crossorigin>
		<?php
	}

endif;

add_action( 'wp_head', 'allele_preload_webfonts' );

/**
 * Filter 'excerpt_length'
 * This filter is meant to be a precursor to
 * a global solution provided by the Block Editor.
 *
 * https://github.com/WordPress/gutenberg/issues/34757
 *
 * @param int $length
 * @return int
 */
function allele_excerpt_length( $length ) {
  if ( is_admin() ) {
		return $length;
	}

	// Custom Excerpt Length
	$length = 18;

	/**
	 * Filters the Excerpt length.
	 *
	 * @param int $length Excerpt Length.
	 */
	return apply_filters( 'allele_excerpt_length', $length );
}
add_filter( 'excerpt_length', 'allele_excerpt_length' );

/**
 * Block Patterns
 */
require get_template_directory() . '/inc/block-patterns.php'; // phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound

/**
 * Block Styles
 */
require get_template_directory() . '/inc/block-styles.php'; // phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound
