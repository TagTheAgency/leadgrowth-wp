<?php

// Hero Banner Customiser
function heroBanner($wp_customize){
	$wp_customize->add_panel('hero_banner', array(
		'title' =>__('Hero Banner', 'MinTheme hero banner section'),
	 	'description' => __( 'Change the content for the hero banner section')
	));

	// Add the section to the panels
	$wp_customize->add_section('hero_banner_section', array(
		'title' =>__('Hero Banner', 'MinTheme Hero Banner'),
		'panel' =>'hero_banner'
	));

	$wp_customize->add_setting('hero_banner_settings', array(
		'transport' => 'refresh',
		'default' => ''
	));

	// Add an image to the feautred section
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero_banner_section', array(
		'label' =>__('Hero Image','MinTheme'),
		'section' => 'hero_banner_section',
		'settings' => 'hero_banner_settings'
	)));

}

add_action('customize_register', 'heroBanner');





?>
