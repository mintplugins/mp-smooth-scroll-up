<?php
/**
 * This file contains the function keeps the MP Smooth Scroll Up plugin up to date.
 *
 * @since 1.0.0
 *
 * @package    MP Smooth Scroll Up
 * @subpackage Functions
 *
 * @copyright  Copyright (c) 2014, Mint Plugins
 * @license    http://opensource.org/licenses/gpl-2.0.php GNU Public License
 * @author     Philip Johnston
 */
 
/**
 * Check for updates for the MP Smooth Scroll Up Plugin by creating a new instance of the MP_CORE_Plugin_Updater class.
 *
 * @access   public
 * @since    1.0.0
 * @return   void
 */
 if (!function_exists('mp_smooth_scroll_up_update')){
	function mp_smooth_scroll_up_update() {
		$args = array(
			'software_name' => 'MP Smooth Scroll Up', //<- The exact name of this Plugin. Make sure it matches the title in your mp_smooth_scroll_up, edd, and the WP.org stacks
			'software_api_url' => 'http://mintplugins.com',//The URL where EDD and mp_smooth_scroll_up are installed and checked
			'software_filename' => 'mp-smooth-scroll-up.php',
			'software_licensed' => false, //<-Boolean
		);
		
		//Since this is a plugin, call the Plugin Updater class
		$mp_smooth_scroll_up_plugin_updater = new MP_CORE_Plugin_Updater($args);
	}
 }
add_action( 'admin_init', 'mp_smooth_scroll_up_update' );
