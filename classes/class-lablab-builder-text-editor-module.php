<?php

if ( class_exists( 'Lablab_Module_Builder' ) ):
	
	class Lablab_Builder_Text_Module extends Lablab_Module_Builder {

		public function __construct(){

			// The module title.
			$this->title = __( 'Text Editor', 'lablab-text' );

			// The acf field key of the module.
			$this->key = 'field_lablab_text_editor';

			// The acf field name of the module.
			$this->name = 'lablab-text-editor';

			// The current version of the module.
			$this->version = '1.0.0';

			// The module-specific acf fields of the module.
			$this->fields = plugin_dir_path( __DIR__ ) . 'fields/';

			// The absolute path to a partial template file that both retrieves content data and prints the output.
			$this->template_path = plugin_dir_path( __DIR__ ) . 'template/lablab-text-editor.php';

		}
	}

endif;