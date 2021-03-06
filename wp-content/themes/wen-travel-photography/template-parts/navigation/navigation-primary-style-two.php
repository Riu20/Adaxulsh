<?php
/**
 * Primary Menu Template
 *
 * @package WEN_Travel
 */
?>
	<div id="site-header-menu" class="site-header-menu">
		<?php
		if ( get_theme_mod( 'wen_travel_header_cart_enable' ) && function_exists( 'wen_travel_header_cart' ) ) {
			wen_travel_header_cart();
		}
		?>

		<?php if ( get_theme_mod( 'wen_travel_primary_search_enable', 1 ) ) : ?>
		<div id="primary-search-wrapper" class="menu-wrapper">
			<div class="menu-toggle-wrapper">
				<button id="social-search-toggle" class="menu-toggle search-toggle">
					<?php echo wen_travel_get_svg( array( 'icon' => 'search' ) ); echo wen_travel_get_svg( array( 'icon' => 'close' ) ); ?>
					<span class="menu-label screen-reader-text"><?php echo esc_html_e( 'Search', 'wen-travel-photography' ); ?></span>
				</button>
			</div><!-- .menu-toggle-wrapper -->

			<div class="menu-inside-wrapper">
				<div class="search-container">
					<?php get_search_form(); ?>
				</div>
			</div><!-- .menu-inside-wrapper -->
		</div><!-- #social-search-wrapper.menu-wrapper -->
		<?php endif; ?>

		<?php get_template_part( 'template-parts/navigation/navigation', 'social' ); ?>

		<div id="primary-menu-wrapper" class="menu-wrapper">
			<div class="menu-toggle-wrapper">
				<button id="menu-toggle-mobile" class="menu-toggle" aria-controls="top-menu" aria-expanded="false">
					<?php echo wen_travel_get_svg( array( 'icon' => 'bars' ) ); echo wen_travel_get_svg( array( 'icon' => 'close' ) ); ?><span class="menu-label"><?php echo esc_html_e( 'Menu', 'wen-travel-photography' ); ?></span></button>
			</div><!-- .menu-toggle-wrapper -->

			<div class="menu-inside-wrapper">
				<?php
				if ( get_theme_mod( 'wen_travel_header_cart_enable' ) && function_exists( 'wen_travel_header_cart' ) ) {
					wen_travel_header_cart();
				}
				?>

				<?php if ( has_nav_menu( 'menu-1' ) ) : ?>

					<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'wen-travel-photography' ); ?>">
						<?php
							wp_nav_menu( array(
									'container'      => '',
									'theme_location' => 'menu-1',
									'menu_id'        => 'primary-menu',
									'menu_class'     => 'menu nav-menu',
								)
							);
						?>

				<?php else : ?>

					<nav id="site-navigation" class="main-navigation default-page-menu" role="navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'wen-travel-photography' ); ?>">
						<?php wp_page_menu(
							array(
								'menu_class' => 'primary-menu-container',
								'before'     => '<ul id="menu-primary-items" class="menu nav-menu">',
								'after'      => '</ul>',
							)
						); ?>

				<?php endif; ?>

					</nav><!-- .main-navigation -->

				<div class="mobile-social-search">

					<?php if ( get_theme_mod( 'wen_travel_primary_search_enable', 1 ) ) : ?>
					<div class="search-container">
						<?php get_search_form(); ?>
					</div>
					<?php endif; ?>

					<?php get_template_part('template-parts/navigation/navigation', 'social'); ?>
				</div><!-- .mobile-social-search -->
			</div><!-- .menu-inside-wrapper -->
		</div><!-- #primary-menu-wrapper.menu-wrapper -->
	</div><!-- .site-header-menu -->
