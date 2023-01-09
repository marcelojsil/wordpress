<?php
/* Notifications in customizer */


require OWLPRESS_PARENT_INC_DIR . '/customizer/customizer-notify/owlpress-notify.php';
$owlpress_config_customizer = array(
	'recommended_plugins'       => array(
		'burger-companion' => array(
			'recommended' => true,
			'description' => sprintf(__('Install and activate <strong>Burger Companion</strong> plugin for taking full advantage of all the features this theme has to offer OwlPress.', 'owlpress')),
		),
	),
	'recommended_actions'       => array(),
	'recommended_actions_title' => esc_html__( 'Recommended Actions', 'owlpress' ),
	'recommended_plugins_title' => esc_html__( 'Recommended Plugin', 'owlpress' ),
	'install_button_label'      => esc_html__( 'Install and Activate', 'owlpress' ),
	'activate_button_label'     => esc_html__( 'Activate', 'owlpress' ),
	'owlpress_deactivate_button_label'   => esc_html__( 'Deactivate', 'owlpress' ),
);
Owlpress_Customizer_Notify::init( apply_filters( 'owlpress_customizer_notify_array', $owlpress_config_customizer ) );
