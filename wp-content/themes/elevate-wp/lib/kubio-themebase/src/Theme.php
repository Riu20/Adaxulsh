<?php

namespace Kubio\Theme;

use ColibriWP\Theme\Core\Utils;
use ColibriWP\Theme\Defaults;
use ColibriWP\Theme\Theme as ThemeBase;
use ColibriWP\Theme\View;

class Theme extends ThemeBase {

	private $state = array();

	public function addThemeNotice() {

		global $pagenow;
		if ( $pagenow === 'update.php' ) {
			return;
		}

		if ( $this->themeWasCustomized() ) {
			return;
		}

		if ( Flags::get( 'kubio_activation_time', false ) ) {
			return;
		}

		$slug = get_template() . '-page-info';

		$dismissed            = get_option( "{$slug}-theme-notice-dismissed", false );
		$is_builder_installed = apply_filters( 'kubio_is_enabled', false );

		if ( ! $dismissed && ! $is_builder_installed ) {
			wp_enqueue_style( $slug );
			wp_enqueue_script( $slug );
			wp_enqueue_script( 'wp-util' );

			?>
			<div class="notice notice-success is-dismissible kubio-admin-big-notice notice-large">
				<?php View::make( 'admin/admin-notice' ); ?>
			</div>
			<?php
		}

	}

	public function themeWasCustomized() {

		if ( Flags::get( 'theme_customized' ) ) {
			return true;
		}

		$mods         = get_theme_mods();
		$mods_keys    = array_keys( is_array( $mods ) ? $mods : array() );
		$default_keys = array_keys( Defaults::getDefaults() );

		foreach ( $default_keys as $default_key ) {
			foreach ( $mods_keys as $mod_key ) {
				if ( strpos( $mod_key, "{$default_key}." ) === 0 ) {
					Flags::set( 'theme_customized', true );

					return true;
				}
			}
		}

		return false;
	}


	public function getState( $path, $fallback = null ) {
		return Utils::pathGet( $this->state, $path, $fallback );
	}

	public function setState( $path, $value ) {
		Utils::pathSet( $this->state, $path, $value );
	}

	public function deleteState( $path ) {
		Utils::pathDelete( $this->state, $path );
	}

	public function getName() {
		$slug  = $this->getThemeSlug();
		$theme = $this->getTheme( $slug );

		return $theme->get( 'Name' );
	}

	public function getScreenshot() {
		$slug  = $this->getThemeSlug();
		$theme = $this->getTheme( $slug );

		return $theme->get_screenshot();
	}


}
