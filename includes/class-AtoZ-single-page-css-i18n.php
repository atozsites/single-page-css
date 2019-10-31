<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       http://atozsites.com
 * @since      1.0.0
 *
 * @package    AtoZ_single_page_css
 * @subpackage AtoZ_single_page_css/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    AtoZ_single_page_css
 * @subpackage AtoZ_single_page_css/includes
 * @author     AtoZSites Team <admin@atozsites.com>
 */
class AtoZ_single_page_css_i18n {

	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'simple-page-styling',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}


}
