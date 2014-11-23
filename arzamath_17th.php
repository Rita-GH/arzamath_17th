<?php
/*
Plugin Name: arzamath_17th
Plugin URI: https://github.com/Rita-GH/arzamath_17th
Description: 1. плагін має в налаштуваннях два поля. Одне текстове, інше випадаючий список визначених даних.
2. плагін містить кастомний тип поста з 3 полями: звичайне текстове поле, мультиселект і додавання/завантаження малюнка.
Version: 1.0
Author: Rita
License: GPL2
*/

if(!class_exists('arzamath_17th'))
{
	class arzamath_17th
	{
		/**
		 * Construct the plugin object
		 */
		public function __construct()
		{
			// Initialize Settings
			require_once(sprintf("%s/settings.php", dirname(__FILE__)));
			$arzamath_17th_Settings = new arzamath_17th_Settings();

			// Register custom post types
			require_once(sprintf("%s/post-types/post_type_template.php", dirname(__FILE__)));
			$Post_Type_Template = new Post_Type_Template();

			$plugin = plugin_basename(__FILE__);
			add_filter("plugin_action_links_$plugin", array( $this, 'plugin_settings_link' ));
		} // END public function __construct

		/**
		 * Activate the plugin
		 */
		public static function activate()
		{
			// Do nothing
		} // END public static function activate

		/**
		 * Deactivate the plugin
		 */
		public static function deactivate()
		{
			// Do nothing
		} // END public static function deactivate

		// Add the settings link to the plugins page
		function plugin_settings_link($links)
		{
			$settings_link = '<a href="options-general.php?page=arzamath_17th">Settings</a>';
			array_unshift($links, $settings_link);
			return $links;
		}


	} // END class WP_Plugin_Template
} // END if(!class_exists('WP_Plugin_Template'))

if(class_exists('arzamath_17th'))
{
	// Installation and uninstallation hooks
	register_activation_hook(__FILE__, array('arzamath_17th', 'activate'));
	register_deactivation_hook(__FILE__, array('arzamath_17th', 'deactivate'));

	// instantiate the plugin class
	$arzamath_17th = new arzamath_17th();

}
