<?php

use ColibriWP\Theme\Translations;
use Kubio\Theme\Theme;

wp_localize_script(
	get_template() . '-page-info',
	'elevate_wp_admin',
	array(
		'getStartedData'    => array(
			'plugin_installed_and_active' => Translations::escHtml( 'plugin_installed_and_active' ),
			'activate'                    => Translations::escHtml( 'activate' ),
			'activating'                  => __( 'Activating', 'elevate-wp' ),
			'install_recommended'         => isset( $_GET['install_recommended'] ) ? $_GET['install_recommended'] : '',
			'theme_prefix'                => Theme::prefix( '', false ),
		),
		'builderStatusData' => array(
			'status'       => elevate_wp_theme()->getPluginsManager()->getPluginState( elevate_wp_get_builder_plugin_slug() ),
			'install_url'  => elevate_wp_theme()->getPluginsManager()->getInstallLink( elevate_wp_get_builder_plugin_slug() ),
			'activate_url' => elevate_wp_theme()->getPluginsManager()->getActivationLink( elevate_wp_get_builder_plugin_slug() ),
			'slug'         => elevate_wp_get_builder_plugin_slug(),
			'messages'     => array(
				'installing' => Translations::get( 'installing', 'Kubio Page Builder' ),
				'activating' => Translations::get( 'activating', 'Kubio Page Builder' ),
				'preparing'  => __( 'Preparing Front Page installation', 'elevate-wp' ),
			),
		),
	)
);

?>
<div class="kubio-admin-big-notice--container">
	<div class="content-holder">
		<div class="front-page-preview">
			<img src="<?php echo esc_url( elevate_wp_theme()->getScreenshot() ); ?>"/>
		</div>

		<div class="messages-area">
			<div class="title-holder">
				<h1><?php echo esc_html( sprintf( __( 'Would you like to install the pre-designed %s homepage?', 'elevate-wp' ), elevate_wp_theme()->getName() ) ); ?></h1>
			</div>
			<div class="action-buttons">
				<button class="button button-primary button-hero start-with-predefined-design-button">
					<?php echo esc_html( sprintf( __( 'Install the %s homepage', 'elevate-wp' ), elevate_wp_theme()->getName() ) ); ?>
				</button>
				<span class="or-separator">&ensp;<?php Translations::escHtmlE( 'or' ); ?>&ensp;</span>
				<button class="button-link kubio-maybe-later dismiss">
					<?php esc_html_e( 'Maybe Later', 'elevate-wp' ); ?>
				</button>
			</div>
			<div class="content-footer ">
				<div>
					<div class="plugin-notice">
						<span class="spinner"></span>
						<span class="message"></span>
					</div>
				</div>
				<div>
					<p class="description large-text">
						<?php
						esc_html_e(
							'This action will also install the Kubio Page Builder plugin.',
							'elevate-wp'
						);
						?>
					</p>
				</div>
			</div>
		</div>

	</div>
</div>
