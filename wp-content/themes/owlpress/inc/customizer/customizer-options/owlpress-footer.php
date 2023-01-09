<?php
function owlpress_footer( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	// Footer Panel // 
	$wp_customize->add_panel( 
		'footer_section', 
		array(
			'priority'      => 34,
			'capability'    => 'edit_theme_options',
			'title'			=> __('Footer', 'owlpress'),
		) 
	);
	
	/*=========================================
	Footer Background
	=========================================*/
	$wp_customize->add_section(
        'footer_background',
        array(
            'title' 		=> __('Footer Background','owlpress'),
			'panel'  		=> 'footer_section',
			'priority'      => 3,
		)
    );
	
	// Background // 
	$wp_customize->add_setting(
		'footer_bg_head'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'owlpress_sanitize_text',
			'priority' => 1,
		)
	);

	$wp_customize->add_control(
	'footer_bg_head',
		array(
			'type' => 'hidden',
			'label' => __('Background','owlpress'),
			'section' => 'footer_background',
		)
	);
	
	// Background Image // 
    $wp_customize->add_setting( 
    	'footer_bg_img' , 
    	array(
			'default' 			=> esc_url(get_template_directory_uri() .'/assets/images/footer/footer_bg.jpg'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'owlpress_sanitize_url',	
			'priority' => 10,
		) 
	);
	
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize , 'footer_bg_img' ,
		array(
			'label'          => esc_html__( 'Background Image', 'owlpress'),
			'section'        => 'footer_background',
		) 
	));
	
	// Background Attachment // 
	$wp_customize->add_setting( 
		'footer_back_attach' , 
			array(
			'default' => 'fixed',
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'owlpress_sanitize_select',
			'priority'  => 10,
		) 
	);
	
	$wp_customize->add_control(
	'footer_back_attach' , 
		array(
			'label'          => __( 'Background Attachment', 'owlpress' ),
			'section'        => 'footer_background',
			'type'           => 'select',
			'choices'        => 
			array(
				'inherit' => __( 'Inherit', 'owlpress' ),
				'scroll' => __( 'Scroll', 'owlpress' ),
				'fixed'   => __( 'Fixed', 'owlpress' )
			) 
		) 
	);
	
	// Image Opacity // 
	if ( class_exists( 'Burger_Customizer_Range_Control' ) ) {
	$wp_customize->add_setting(
    	'footer_bg_img_opacity',
    	array(
	        'default'			=> '0.85',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field',
			'priority'  => 11,
		)
	);
	$wp_customize->add_control( 
	new Burger_Customizer_Range_Control( $wp_customize, 'footer_bg_img_opacity', 
		array(
			'label'      => __( 'Opacity', 'owlpress'),
			'section'  => 'footer_background',
			'settings' => 'footer_bg_img_opacity',
			 'input_attrs' => array(
					'min'    => 0,
					'max'    => 0.9,
					'step'   => 0.1,
					//'suffix' => 'px', //optional suffix
				),
		) ) 
	);
	}
	
	/*=========================================
	Footer Copyright
	=========================================*/	
	$wp_customize->add_section(
        'footer_copyright',
        array(
            'title' 		=> __('Footer Copyright','owlpress'),
			'panel'  		=> 'footer_section',
			'priority'      => 6,
		)
    );
	
	// Footer Support 
	$wp_customize->add_setting(
		'footer_btm_support_head'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'owlpress_sanitize_text',
		)
	);

	$wp_customize->add_control(
	'footer_btm_support_head',
		array(
			'type' => 'hidden',
			'label' => __('Support','owlpress'),
			'section' => 'footer_copyright',
			'priority'  => 1,
		)
	);	
	
	$wp_customize->add_setting( 
		'hs_footer_btm_support' , 
			array(
			'default' => '1',
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'owlpress_sanitize_checkbox',
		) 
	);
	
	$wp_customize->add_control(
	'hs_footer_btm_support', 
		array(
			'label'	      => esc_html__( 'Hide/Show', 'owlpress' ),
			'section'     => 'footer_copyright',
			'type'        => 'checkbox',
			'priority'  => 2,
		) 
	);	
	
	// icon // 
	$wp_customize->add_setting(
    	'footer_btm_support_icon',
    	array(
			'sanitize_callback' => 'sanitize_text_field',
			'capability' => 'edit_theme_options',
		)
	);	

	$wp_customize->add_control(new Owlpress_Icon_Picker_Control($wp_customize, 
		'footer_btm_support_icon',
		array(
		    'label'   		=> __('Icon','owlpress'),
		    'section' 		=> 'footer_copyright',
			'iconset' => 'fa',
			'priority'  => 3,
			
		))  
	);	

	// Support Title // 
	$wp_customize->add_setting(
    	'footer_btm_support_ttl',
    	array(
			'sanitize_callback' => 'owlpress_sanitize_html',
			'transport'         => $selective_refresh,
			'capability' => 'edit_theme_options',
		)
	);	

	$wp_customize->add_control( 
		'footer_btm_support_ttl',
		array(
		    'label'   		=> __('Text','owlpress'),
		    'section' 		=> 'footer_copyright',
			'type'		 =>	'text',
			'priority' => 4,
		)  
	);	
	// Support Text // 
	$wp_customize->add_setting(
    	'footer_btm_support_text',
    	array(
			'sanitize_callback' => 'owlpress_sanitize_html',
			'transport'         => $selective_refresh,
			'capability' => 'edit_theme_options',
		)
	);	

	$wp_customize->add_control( 
		'footer_btm_support_text',
		array(
		    'label'   		=> __('Text','owlpress'),
		    'section' 		=> 'footer_copyright',
			'type'		 =>	'textarea',
			'priority' => 5,
		)  
	);
	
	// Footer Copyright Head
	$wp_customize->add_setting(
		'footer_btm_copy_head'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'owlpress_sanitize_text',
			'priority'  => 3,
		)
	);

	$wp_customize->add_control(
	'footer_btm_copy_head',
		array(
			'type' => 'hidden',
			'label' => __('Copyright','owlpress'),
			'section' => 'footer_copyright',
		)
	);
	
	// Footer Copyright 
	$owlpress_foo_copy = esc_html__('Copyright &copy; [current_year] [site_title] | Powered by [theme_author]', 'owlpress' );
	$wp_customize->add_setting(
    	'footer_copyright',
    	array(
			'default' => $owlpress_foo_copy,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'footer_copyright',
		array(
		    'label'   		=> __('Copytight','owlpress'),
			'type' 			=> 'textarea',
			'section' => 'footer_copyright',
		)  
	);	
	
	// Footer Payment Head
	$wp_customize->add_setting(
		'footer_payment_head'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'owlpress_sanitize_text',
			'priority'  => 11,
		)
	);

	$wp_customize->add_control(
	'footer_payment_head',
		array(
			'type' => 'hidden',
			'label' => __('Payment Icon','owlpress'),
			'section' => 'footer_copyright',
		)
	);
	
	$wp_customize->add_setting( 
		'hs_footer_payment' , 
			array(
			'default' => '1',
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'owlpress_sanitize_checkbox',
		) 
	);
	
	$wp_customize->add_control(
	'hs_footer_payment', 
		array(
			'label'	      => esc_html__( 'Hide/Show', 'owlpress' ),
			'section'     => 'footer_copyright',
			'type'        => 'checkbox',
			'priority'  => 12,
		) 
	);				
}
add_action( 'customize_register', 'owlpress_footer' );
// Footer selective refresh
function owlpress_footer_partials( $wp_customize ){
	
	// footer_btm_support_ttl
	$wp_customize->selective_refresh->add_partial( 'footer_btm_support_ttl', array(
		'selector'            => '.footer-copyright .first.widget-contact h6',
		'settings'            => 'footer_btm_support_ttl',
		'render_callback'  => 'owlpress_footer_btm_support_ttl_render_callback',
	) );
	
	// footer_btm_support_text
	$wp_customize->selective_refresh->add_partial( 'footer_btm_support_text', array(
		'selector'            => '.footer-copyright .first.widget-contact p',
		'settings'            => 'footer_btm_support_text',
		'render_callback'  => 'owlpress_footer_btm_support_text_render_callback',
	) );
	
	// footer_copyright
	$wp_customize->selective_refresh->add_partial( 'footer_copyright', array(
		'selector'            => '.footer-copyright .copyright-text',
		'settings'            => 'footer_copyright',
		'render_callback'  => 'owlpress_footer_copyright_render_callback',
	) );	
	}
add_action( 'customize_register', 'owlpress_footer_partials' );


// footer_btm_support_ttl
function owlpress_footer_btm_support_ttl_render_callback() {
	return get_theme_mod( 'footer_btm_support_ttl' );
}

// footer_btm_support_text
function owlpress_footer_btm_support_text_render_callback() {
	return get_theme_mod( 'footer_btm_support_text' );
}

// copyright_content
function owlpress_footer_copyright_render_callback() {
	return get_theme_mod( 'footer_copyright' );
}