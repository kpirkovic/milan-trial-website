<?php

defined( 'ABSPATH' ) || exit;

/**
 * Implement Theme Customizer additions and adjustments.
 * https://codex.wordpress.org/Theme_Customization_API
 *
 * How do I "output" custom theme modification settings? https://developer.wordpress.org/reference/functions/get_theme_mod
 * echo get_theme_mod( 'copyright_info' );
 * or: echo get_theme_mod( 'copyright_info', 'Default (c) Copyright Info if nothing provided' );
 *
 * "sanitize_callback": https://codex.wordpress.org/Data_Validation
 */
function milan_trial_site_customize( $wp_customize ) {
	/**
	 * Initialize sections
	 */
	$wp_customize->add_section(
		'theme_header_section',
		array(
			'title'    => __( 'Header', 'milan-trial-site' ),
			'priority' => 1000,
		)
	);

	/**
	 * Section: Page Layout
	 */
	// Header Logo.
	$wp_customize->add_setting(
		'header_logo',
		array(
			'default'           => '',
			'sanitize_callback' => 'esc_url_raw',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'header_logo',
			array(
				'label'       => __( 'Upload Header Logo', 'milan-trial-site' ),
				'description' => __( 'Height: &gt;80px', 'milan-trial-site' ),
				'section'     => 'theme_header_section',
				'settings'    => 'header_logo',
				'priority'    => 1,
			)
		)
	);

	// Predefined Navbar scheme.
	$wp_customize->add_setting(
		'navbar_scheme',
		array(
			'default'           => 'default',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		'navbar_scheme',
		array(
			'type'     => 'radio',
			'label'    => __( 'Navbar Scheme', 'milan-trial-site' ),
			'section'  => 'theme_header_section',
			'choices'  => array(
				'navbar-light bg-light'  => __( 'Default', 'milan-trial-site' ),
				'navbar-dark bg-dark'    => __( 'Dark', 'milan-trial-site' ),
				'navbar-dark bg-primary' => __( 'Primary', 'milan-trial-site' ),
			),
			'settings' => 'navbar_scheme',
			'priority' => 1,
		)
	);

	// Fixed Header?
	$wp_customize->add_setting(
		'navbar_position',
		array(
			'default'           => 'static',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		'navbar_position',
		array(
			'type'     => 'radio',
			'label'    => __( 'Navbar', 'milan-trial-site' ),
			'section'  => 'theme_header_section',
			'choices'  => array(
				'static'       => __( 'Static', 'milan-trial-site' ),
				'fixed_top'    => __( 'Fixed to top', 'milan-trial-site' ),
				'fixed_bottom' => __( 'Fixed to bottom', 'milan-trial-site' ),
				'absolute_top' => __( 'Absolute top', 'milan-trial-site' ),
			),
			'settings' => 'navbar_position',
			'priority' => 2,
		)
	);
	// Front Page Customizaton

	$wp_customize->add_panel( 'home_customization', array(
		'title'          => 'Front Page Customization',
		'active_callback'=> 'is_front_page',
	) );
			
	// Create our sections

	$wp_customize->add_section( 'hero_page_settings' , array(
		'title'             => 'Hero Section',
		'description'       => 'Changes you make here will alter the Hero Section Heading, Paragraph and Image.',
		'panel'             => 'home_customization',
		'active_callback'   => 'is_front_page',
	) );
			
	// Create our settings
	
	//Hero Image
	$wp_customize->add_setting('hero_image', array(
        'transport'  => 'refresh',
        'height'     => 325,
    ));
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'hero_image_control', array(
        'label'      => __('Hero Image', 'name-theme'),
        'section'    => 'hero_page_settings',
        'settings'   => 'hero_image',    
    ))); 
	//Hero Heading	
	$wp_customize->add_setting( 'hero_heading' , array(
		'type'       => 'theme_mod',
		'transport'  => 'refresh',
	) );
	$wp_customize->add_control( 'hero_heading_control', array(
		'label'      => 'Hero Heading',
		'section'    => 'hero_page_settings',
		'settings'   => 'hero_heading',
		'type'       => 'text',
	) );
	//Hero Paragraph
	$wp_customize->add_setting( 'hero_paragraph' , array(
		'type'          => 'theme_mod',
		'transport'     => 'refresh',
	) );
	$wp_customize->add_control( 'hero_paragraph_control', array(
		'label'      => 'Hero Paragraph',
		'section'    => 'hero_page_settings',
		'settings'   => 'hero_paragraph',
		'type'       => 'text',
	) );

	//Screen Shots Sections
	// Create our sections

	$wp_customize->add_section( 'screenshot_settings' , array(
		'title'             => 'Screenshot Sections',
		'panel'             => 'home_customization',
		'active_callback'   => 'is_front_page',
	) );
			
	// Create our settings
	
	//Screenshot Image 01
	$wp_customize->add_setting('screenshot_01', array(
        'transport'  => 'refresh',
        'height'     => 325,
    ));
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'screen_shot_01_control', array(
        'label'      => __('Screen Shot Image 01', 'name-theme'),
        'section'    => 'screenshot_settings',
        'settings'   => 'screenshot_01',    
    ))); 
	//Hero Heading	
	$wp_customize->add_setting( 'screenshot_01_heading' , array(
		'type'       => 'theme_mod',
		'transport'  => 'refresh',
	) );
	$wp_customize->add_control( 'screenshot_01_control', array(
		'label'      =>  __('Screenshot 01 Heading','milan-trial-theme'),
		'section'    => 'screenshot_settings',
		'settings'   => 'screenshot_01_heading',
		'type'       => 'text',
	) );
	//Hero Paragraph
	$wp_customize->add_setting( 'screenshot_01_paragraph' , array(
		'type'          => 'theme_mod',
		'transport'     => 'refresh',
	) );
	$wp_customize->add_control( 'screenshot_01_paragraph_control', array(
		'label'      =>  __('Screenshot 01 Paragraph','milan-trial-theme'),
		'section'    => 'screenshot_settings',
		'settings'   => 'screenshot_01_paragraph',
		'type'       => 'text',
	) );

	//Screenshot Image 02
	$wp_customize->add_setting('screenshot_02', array(
        'transport'  => 'refresh',
        'height'     => 325,
    ));
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'screen_shot_02_control', array(
        'label'      =>  __('Screenshot 02 Image','milan-trial-theme'),
        'section'    => 'screenshot_settings',
        'settings'   => 'screenshot_02',    
    ))); 
	//Hero Heading	
	$wp_customize->add_setting( 'screenshot_02_heading' , array(
		'type'       => 'theme_mod',
		'transport'  => 'refresh',
	) );
	$wp_customize->add_control( 'screenshot_02_control', array(
		'label'      => __('Screenshot 02 Heading','milan-trial-theme'),
		'section'    => 'screenshot_settings',
		'settings'   => 'screenshot_02_heading',
		'type'       => 'text',
	) );
	//Hero Paragraph
	$wp_customize->add_setting('screenshot_02_paragraph' , array(
		'type'          => 'theme_mod',
		'transport'     => 'refresh',
	) );
	$wp_customize->add_control('screenshot_02_paragraph_control', array(
		'label'      =>  __('Screenshot 02 Paragraph','milan-trial-theme'),
		'section'    => 'screenshot_settings',
		'settings'   => 'screenshot_02_paragraph',
		'type'       => 'text',
	) );

}
add_action( 'customize_register', 'milan_trial_site_customize' );


/**
 * Bind JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function milan_trial_site_customize_preview_js() {
	wp_enqueue_script( 'customizer', get_template_directory_uri() . '/inc/customizer.js', array( 'jquery' ), null, true );
}
add_action( 'customize_preview_init', 'milan_trial_site_customize_preview_js' );
