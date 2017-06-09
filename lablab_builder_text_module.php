<?php
/*
 * Plugin Name:       Lablab Builder Text Editor Module
 * Plugin URI:        https://github.com/team-ok/lablab-builder-text-editor
 * Description:       Adds a text editor module to lablab builder.
 * Version:           1.0.0
 * Author:            Timo Klemm
 * Author URI:        https://github.com/team-ok
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       lablab-text
 * Domain Path:       /languages
 */


// load the plugin textdomain
add_action( 'plugins_loaded', 'load_lablab_text_editor_module_textdomain' );
function load_lablab_text_editor_module_textdomain(){

	// Relative path to WP_PLUGIN_DIR where the .mo file resides
	$domain_path = dirname( plugin_basename( __FILE__ ) ) . '/languages';

	load_plugin_textdomain( 'lablab-text', false, $domain_path );
}

// load the module class
add_action( 'plugins_loaded', 'load_lablab_text_editor_module_class' );
function load_lablab_text_editor_module_class(){

	require_once( plugin_dir_path( __FILE__ ) . 'classes/class-lablab-builder-text-editor-module.php' );
}

// register this module with lablab builder
add_filter( 'lablab_builder_modules', array( 'Lablab_Builder_Text_Module', 'register' ) );