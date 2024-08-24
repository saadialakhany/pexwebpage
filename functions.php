<?php

function pex_custom_theme_setup() {
    // Register Navigation Menus
    register_nav_menus(
        array(
            'primary' => esc_html__('Primary Menu', 'pexwebpage'),
            'mobile' => esc_html('Mobile Menu','pexwebpage')
            
        )
    );
}

add_action('after_setup_theme', 'pex_custom_theme_setup');


/** Enqueue scripts and styles **/

function pex_assets(){
    
    // Enqueue CSS Files:
    wp_enqueue_style( 'google-font', '//fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap',array(), false, 'all' );
    
    //Main Css File:
    wp_enqueue_style('pexwebpage-styles', get_stylesheet_uri(),array(), '1.0', 'all' );
    
    // Enqueue JS Files:
    
    wp_enqueue_script('pexwebpage',get_theme_file_uri('assets/js/script.js'), array(),'1.0',true );
    
    }
    
    add_action('wp_enqueue_scripts', 'pex_assets');
    

    function theme_customizer_settings($wp_customize) {
        // Add a section for the logo
        $wp_customize->add_section('theme_logo_section', array(
            'title'    => __('Logo', 'pexwebpage'),
            'priority' => 30,
        ));
    
        // Add a setting for the logo
        $wp_customize->add_setting('theme_logo');
    
        // Add a control to upload the logo
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'theme_logo', array(
            'label'    => __('Logo', 'pexwebpage'),
            'section'  => 'theme_logo_section',
            'settings' => 'theme_logo',
        )));
    }
    
    add_action('customize_register', 'theme_customizer_settings');