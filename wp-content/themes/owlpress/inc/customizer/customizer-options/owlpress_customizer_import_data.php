<?php
class owlpress_import_dummy_data {

	private static $instance;

	public static function init( ) {
		if ( ! isset( self::$instance ) && ! ( self::$instance instanceof owlpress_import_dummy_data ) ) {
			self::$instance = new owlpress_import_dummy_data;
			self::$instance->owlpress_setup_actions();
		}

	}

	/**
	 * Setup the class props based on the config array.
	 */
	

	/**
	 * Setup the actions used for this class.
	 */
	public function owlpress_setup_actions() {

		// Enqueue scripts
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'owlpress_import_customize_scripts' ), 0 );

	}
	
	

	public function owlpress_import_customize_scripts() {

	wp_enqueue_script( 'owlpress-import-customizer-js', OWLPRESS_PARENT_INC_URI . '/customizer/customizer-notify/js/owlpress-import-customizer-options.js', array( 'customize-controls' ) );
	}
}

$owlpress_import_customizers = array(

		'import_data' => array(
			'recommended' => true,
			
		),
);
owlpress_import_dummy_data::init( apply_filters( 'owlpress_import_customizer', $owlpress_import_customizers ) );