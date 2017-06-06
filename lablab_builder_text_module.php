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

if ( class_exists( 'Lablab_Module_Builder' ) ):
	class Lablab_Builder_Text_Module extends Lablab_Module_Builder {

		public function __construct(){

			$this->title = 'Text Editor';
			$this->key = 'field_lablab_text_editor';
			$this->name = 'lablab-text-editor';
			$this->fields = plugin_dir_path( __FILE__ ) . 'fields/';
			$this->template_path = plugin_dir_path( __FILE__ ) . 'template/lablab-text-editor.php';
		}
	}
endif;

// register this module with lablab builder
add_filter( 'lablab_builder_modules', array( 'Lablab_Builder_Text_Module', 'register' ) );