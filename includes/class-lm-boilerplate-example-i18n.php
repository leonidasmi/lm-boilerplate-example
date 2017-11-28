<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://github.com/leonidasmi
 * @since      1.0.0
 *
 * @package    Lm_Boilerplate_Example
 * @subpackage Lm_Boilerplate_Example/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Lm_Boilerplate_Example
 * @subpackage Lm_Boilerplate_Example/includes
 * @author     Leonidas Milosis <leonidas.milossis@gmail.com>
 */
class Lm_Boilerplate_Example_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'lm-boilerplate-example',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
