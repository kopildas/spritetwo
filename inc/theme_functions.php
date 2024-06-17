<?php

function kp_customizar_register($wp_customize)
{

    // Header Area fucntion
    $wp_customize->add_section('kp_header_area', array(
        'title' => __('Header Area', 'kopildas'),
        'description' => 'If you interested to update your header area, you can do it here.',
    )
    );

    $wp_customize->add_setting('kp_logo', array(
        'default' => get_bloginfo('template_directory') . '/img/img-1.png'
    )
    );

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'kp_logo', array(
        'label' => 'Logo Upload',
        // 'description'=> '',
        'setting' => 'kp_logo',
        'section' => 'kp_header_area'
    )
    ));


    // Menu position Option function
    $wp_customize->add_section('kp_menu_options', array(
        'title' => __('Menu Position Options', 'kopildas'),
        'description' => 'If you interested to change your menu position, you can do it here.',
    )
    );
    $wp_customize->add_setting('kp_menu_position', array(
        'default' => 'right_menu',
    )
    );
    $wp_customize->add_control('kp_menu_position', array(
        'label' => 'Menu Position',
        'description' => 'Select your menu position',
        'setting' => 'kp_menu_position',
        'section' => 'kp_menu_options',
        'type' => 'radio',
        'choices' => array(
            'left_menu' => __('Left Menu', 'kpoildas'),
            'right_menu' => __('Right Menu', 'kpoildas'),
            'center_menu' => __('Center Menu', 'kpoildas'),
        )
    )
    );


     // Footer function
     $wp_customize->add_section('kp_footer_options', array(
        'title' => __('Footer Options', 'kopildas'),
        'description' => 'If you interested to change or update your footer settings, you can do it here.',
    )
    );
    $wp_customize->add_setting('kp_copyright_section', array(
        'default' => '&copy; Copyright 2024 | Kopil Das',
    )
    );
    $wp_customize->add_control('kp_copyright_section', array(
        'label' => 'Copyright Text',
        'description' => 'If you need you can update your copyright text here',
        'setting' => 'kp_copyright_section',
        'section' => 'kp_footer_options',
    )
    );


}

add_action('customize_register', 'kp_customizar_register');