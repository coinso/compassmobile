<?php


function mobile_customize_register($wp_customize){
	// Add Personal Settings Panel
	$wp_customize->add_panel( 'Personal Settings', array(
		'priority' => 30,
		'capability' => 'edit_theme_options',
		'theme_supports' => '',
		'title' => __( 'Personal Settings', HM_THEME_TEXT_DOMAIN ),
		'description' => __( 'Add your personal touch to your website.', HM_THEME_TEXT_DOMAIN ),
	) );
	$wp_customize->add_section('Site Identity', array(
		'title' => __('Site Identity', HM_THEME_TEXT_DOMAIN),
		'description'   => sprintf(__('Options for Site Identity', HM_THEME_TEXT_DOMAIN)),
		'priority' => 10,
		'capability' => 'edit_theme_options',
		'theme_supports' => '',
		'description' => '',
		'panel' => 'Personal Settings'
	));
	// Site Logo
	//Main logo Image settings
	$wp_customize->add_setting('site_logo', array(
		'default' => get_template_directory_uri() . '/assets/images/logo.png',
		'type'  => 'theme_mod',
		'sanitize_callback' => ''
	));

	//Main logo Image control
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'site_logo', array(
		'label' => __('Site Logo',HM_THEME_TEXT_DOMAIN ),
		'section' => 'Site Identity',
		'settings' => 'site_logo'
	)));
	//Main logo Image settings
	$wp_customize->add_setting('mobile_logo', array(
		'default' => get_template_directory_uri() . '/assets/images/logo.png',
		'type'  => 'theme_mod',
		'sanitize_callback' => ''
	));

	//Main logo Image control
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'mobile_logo', array(
		'label' => __('Mobile Logo',HM_THEME_TEXT_DOMAIN ),
		'section' => 'Site Identity',
		'settings' => 'mobile_logo'
	)));
	/**
	 * Local Business Information
	 */
	// Add Social Panel
	$wp_customize->add_panel( 'Local Business Information', array(
		'priority' => 30,
		'capability' => 'edit_theme_options',
		'theme_supports' => '',
		'title' => __( 'Local Business Information', HM_THEME_TEXT_DOMAIN ),
		'description' => __( 'Add your local business information.', HM_THEME_TEXT_DOMAIN ),
	) );
	// Local Business Schema
	$wp_customize->add_section('Schema', array(
		'title' => __('Local Business Schema', HM_THEME_TEXT_DOMAIN),
		'description' => sprintf(__('Options for Local Business Schema', HM_THEME_TEXT_DOMAIN)),
		'priority' => 30,
		'capability' => 'edit_theme_options',
		'theme_supports' => '',
		'description' => '',
		'panel' => 'Local Business Information'
	));
	//Schema Type settings
	$wp_customize->add_setting('schema_type', array(
		'default' => _x('LocalBusiness', HM_THEME_TEXT_DOMAIN),
		'type' => 'theme_mod',
		'sanitize_callback' => ''
	));

//Schema Type control
	$wp_customize->add_control('schema_type', array(
		'label' => __('Schema Type', HM_THEME_TEXT_DOMAIN),
		'section' => 'Schema',
		'priority' => 20
	));
//Brand Name settings
	$wp_customize->add_setting('schema_brand_name', array(
		'default' => _x(get_bloginfo('name'), HM_THEME_TEXT_DOMAIN),
		'type' => 'theme_mod',
		'sanitize_callback' => ''
	));

//Brand Name control
	$wp_customize->add_control('schema_brand_name', array(
		'label' => __('Brand Name', HM_THEME_TEXT_DOMAIN),
		'section' => 'Schema',
		'priority' => 20
	));
//Brand Description settings
	$wp_customize->add_setting('schema_brand_description', array(
		'default' => _x(get_bloginfo('description'), HM_THEME_TEXT_DOMAIN),
		'type' => 'theme_mod',
		'sanitize_callback' => ''
	));

//Brand Description control
	$wp_customize->add_control('schema_brand_description', array(
		'label' => __('Brand Description', HM_THEME_TEXT_DOMAIN),
		'section' => 'Schema',
		'priority' => 20
	));
//Phone number settings
	$wp_customize->add_setting('schema_phone_number', array(
		'default' => _x('(123) 456-7890', HM_THEME_TEXT_DOMAIN),
		'type' => 'theme_mod',
		'sanitize_callback' => ''
	));

//Phone number control
	$wp_customize->add_control('schema_phone_number', array(
		'label' => __('Phone Number', 'text-domain'),
		'section' => 'Schema',
		'priority' => 20
	));
//Show Street Address settings
	$wp_customize->add_setting('schema_show_street_address', array(
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'schema_show_street_address_checkbox'
	));

//Show Street Address checkbox
	$wp_customize->add_control('schema_show_street_address', array(
		'type' => 'checkbox',
		'label' => __('Show Street Address', 'text-domain'),
		'section' => 'Schema',
		'priority' => 20
	));
//Show Street Address checkbox callback
	function schema_show_street_address_checkbox($checked){
		return ( ( isset( $checked ) && true == $checked ) ? true : false );
	}

//Street Address settings
	$wp_customize->add_setting('schema_street_address', array(
		'default' => _x('Street Address', HM_THEME_TEXT_DOMAIN),
		'type' => 'theme_mod',
		'sanitize_callback' => ''
	));

//Street Address control
	$wp_customize->add_control('schema_street_address', array(
		'label' => __('Street Address', 'text-domain'),
		'section' => 'Schema',
		'priority' => 20
	));
	/****************************************************************/
//Show City settings
	$wp_customize->add_setting('schema_show_city', array(
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'schema_show_city_checkbox'
	));

//Show City checkbox
	$wp_customize->add_control('schema_show_city', array(
		'type' => 'checkbox',
		'label' => __('Show City', 'text-domain'),
		'section' => 'Schema',
		'priority' => 20
	));
//Show City checkbox callback
	function schema_show_city_checkbox($checked){
		return ( ( isset( $checked ) && true == $checked ) ? true : false );
	}
//City settings
	$wp_customize->add_setting('schema_city', array(
		'default' => _x('City', HM_THEME_TEXT_DOMAIN),
		'type' => 'theme_mod',
		'sanitize_callback' => ''
	));

//City control
	$wp_customize->add_control('schema_city', array(
		'label' => __('City', HM_THEME_TEXT_DOMAIN),
		'section' => 'Schema',
		'priority' => 20
	));
	/***************************************************************/
//Show City settings
	$wp_customize->add_setting('schema_show_region', array(
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'schema_show_region_checkbox'
	));

//Show City checkbox
	$wp_customize->add_control('schema_show_region', array(
		'type' => 'checkbox',
		'label' => __('Show Region', 'text-domain'),
		'section' => 'Schema',
		'priority' => 20
	));
//Show City checkbox callback
	function schema_show_region_checkbox($checked){
		return ( ( isset( $checked ) && true == $checked ) ? true : false );
	}

//Region settings
	$wp_customize->add_setting('schema_region', array(
		'default' => _x('Region', HM_THEME_TEXT_DOMAIN),
		'type' => 'theme_mod',
		'sanitize_callback' => ''
	));

//Region control
	$wp_customize->add_control('schema_region', array(
		'label' => __('Region', HM_THEME_TEXT_DOMAIN),
		'section' => 'Schema',
		'priority' => 20
	));
	/***********************************************/
//Show City settings
	$wp_customize->add_setting('schema_show_zip', array(
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'schema_show_zip_checkbox'
	));

//Show City checkbox
	$wp_customize->add_control('schema_show_zip', array(
		'type' => 'checkbox',
		'label' => __('Show Zip Code', 'text-domain'),
		'section' => 'Schema',
		'priority' => 20
	));
//Show City checkbox callback
	function schema_show_zip_checkbox($checked){
		return ( ( isset( $checked ) && true == $checked ) ? true : false );
	}

//Zip settings
	$wp_customize->add_setting('schema_zip', array(
		'default' => _x('11111', HM_THEME_TEXT_DOMAIN),
		'type' => 'theme_mod',
		'sanitize_callback' => ''
	));

//Zip control
	$wp_customize->add_control('schema_zip', array(
		'label' => __('Zip Code', HM_THEME_TEXT_DOMAIN),
		'section' => 'Schema',
		'priority' => 20
	));

//Hours settings
	$wp_customize->add_setting('schema_opening_hours', array(
		'default' => _x('Mo-Su 00:00-23:59', 'compass-tow-truck'),
		'type' => 'theme_mod',
		'sanitize_callback' => ''
	));

//Hours settings
	$wp_customize->add_control('schema_opening_hours', array(
		'label' => __('Opening Hours', 'compass-tow-truck'),
		'section' => 'Schema',
		'priority' => 20
	));

//Map settings
	$wp_customize->add_setting('schema_map', array(
		'default' => _x(' ', HM_THEME_TEXT_DOMAIN),
		'type' => 'theme_mod',
		'sanitize_callback' => ''
	));


	//Footer Backgroud Color settings
	$wp_customize->add_setting('footer_background_color', array(
		'default' => _x('#264348', HM_THEME_TEXT_DOMAIN),
		'type'  => 'theme_mod',
		'sanitize_callback' => 'sanitize_hex_color'
	));

	//Footer Backgroud Color control
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'footer_background_color', array(
		'label' => __('Footer Backgroud Color', HM_THEME_TEXT_DOMAIN),
		'section'  => 'Footer',
		'priority' => 10
	)));

	//Footer border-top color settings
	$wp_customize->add_setting('footer_border_top_color', array(
		'default' => _x('#1cb4c9', HM_THEME_TEXT_DOMAIN),
		'type'  => 'theme_mod',
		'sanitize_callback' => 'sanitize_hex_color'
	));

	//Footer border-top color control
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'footer_border_top_color', array(
		'label' => __('Footer Top Border Color', HM_THEME_TEXT_DOMAIN),
		'section'  => 'Footer',
		'priority' => 10
	)));

	//Footer scroll up background color settings
	$wp_customize->add_setting('footer_scroll_up_background_color', array(
		'default' => _x('#000000', HM_THEME_TEXT_DOMAIN),
		'type'  => 'theme_mod',
		'sanitize_callback' => 'sanitize_hex_color'
	));

	//Footer scroll up background control
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'footer_scroll_up_background_color', array(
		'label' => __('Footer Scroll Up Background Color', HM_THEME_TEXT_DOMAIN),
		'section'  => 'Footer',
		'priority' => 10
	)));
	//Footer text color settings
	$wp_customize->add_setting('footer_text_color', array(
		'default' => _x('#000000', HM_THEME_TEXT_DOMAIN),
		'type'  => 'theme_mod',
		'sanitize_callback' => 'sanitize_hex_color'
	));

	//Footer text color control
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'footer_text_color', array(
		'label' => __('Footer Text Color', HM_THEME_TEXT_DOMAIN),
		'section'  => 'Footer',
		'priority' => 10
	)));
}
add_action('customize_register', 'mobile_customize_register');