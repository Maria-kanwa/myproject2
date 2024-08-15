<?php
function test(){
    wp_enqueue_style('project', get_stylesheet_uri()); // Enqueues the main stylesheet
    // Or if you're trying to add a specific CSS file:
    // wp_enqueue_style('project', get_stylesheet_directory_uri() . '/style.css');



    wp_enqueue_script('main.js', get_theme_file_uri('./js/main.js'), NULL, '1.0');
}
add_action('wp_enqueue_scripts', 'test');



//menu showing part

function myproject_features(){
    register_nav_menus(array(
'primary'=>'Main menu',
'secondary'=>'footer menu',
'useful'=>'useful links',

    ));
    add_theme_support('custom-logo');// logo registration
    add_theme_support('post-thumbnails');// feature image or thumbnail registration
   
}
add_action('after_setup_theme','myproject_features') ;

// slider customization


function my_theme_customize_register($wp_customize) {
    // Add a section for the slider
    $wp_customize->add_section('slider_section', array(
        'title' => __('Slider', 'my_theme'),
        'priority' => 30,
    ));

    // Add settings and controls for slider images
    for ($i = 1; $i <= 5; $i++) {
        $wp_customize->add_setting("slider_image_$i", array(
            'default' => '',
            'sanitize_callback' => 'esc_url_raw',
        ));

        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, "slider_image_$i", array(
            'label' => __("Slider Image $i", 'my_theme'),
            'section' => 'slider_section',
            'settings' => "slider_image_$i",
        )));

        $wp_customize->add_setting("slider_caption_$i", array(
            'default' => '',
            'sanitize_callback' => 'sanitize_text_field',
        ));

        $wp_customize->add_control("slider_caption_$i", array(
            'label' => __("Slider Caption $i", 'my_theme'),
            'section' => 'slider_section',
            'settings' => "slider_caption_$i",
            'type' => 'text',
        ));
    }
}
add_action('customize_register', 'my_theme_customize_register');








 // functions.php

function custom_post_types() {
    // Register Hostel Room Post Type
    register_post_type('hostel_room', [
        'label' => 'Hostel Rooms',
        'public' => true,
        'supports' => ['title', 'editor', 'thumbnail'],
        'menu_icon' => 'dashicons-building',
        'has_archive' => true,
    ]);

    // Register Student Profile Post Type
    register_post_type('student_profile', [
        'label' => 'Student Profiles',
        'public' => true,
        'supports' => ['title', 'editor', 'thumbnail'],
        'menu_icon' => 'dashicons-id',
        'has_archive' => true,
    ]);

    // Register Room Availability Taxonomy
    register_taxonomy('room_availability', 'hostel_room', [
        'label' => 'Room Availability',
        'rewrite' => ['slug' => 'room-availability'],
        'hierarchical' => true,
    ]);
}

add_action('init', 'custom_post_types');


// functions.php

function cafe_custom_post_type() {
    register_post_type('cafe_menu', [
        'label' => 'Café Menu',
        'public' => true,
        'supports' => ['title', 'editor', 'thumbnail', 'custom-fields'],
        'menu_icon' => 'dashicons-carrot',
        'has_archive' => true,
    ]);
}

add_action('init', 'cafe_custom_post_type');

// functions.php

function custom_shortcodes() {
    // Shortcode for displaying hostel room availability
    add_shortcode('hostel_availability', 'display_hostel_availability');
    
    // Shortcode for displaying café menu
    add_shortcode('cafe_menu_display', 'display_cafe_menu');
}

add_action('init', 'custom_shortcodes');

function display_hostel_availability() {
    // Custom query and display logic for hostel room availability
}

function display_cafe_menu() {
    // Custom query and display logic for café menu
}

function theme_enqueue_styles() {
    wp_enqueue_style('main-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');




// customization


// Add Customizer settings and controls
// Add Customizer settings and controls
function mytheme_customize_register($wp_customize) {
    // Add section for custom content
    $wp_customize->add_section('mytheme_custom_content', array(
        'title'    => __('Custom Content', 'mytheme'),
        'priority' => 30,
    ));

    // Settings and controls for Box 1
    $wp_customize->add_setting('box1_heading', array(
        'default'   => 'Learn Something',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('box1_heading_control', array(
        'label'    => __('Box 1 Heading', 'mytheme'),
        'section'  => 'mytheme_custom_content',
        'settings' => 'box1_heading',
    ));

    $wp_customize->add_setting('box1_icon', array(
        'default'   => 'fa-graduation-cap',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('box1_icon_control', array(
        'label'    => __('Box 1 Icon (FontAwesome class)', 'mytheme'),
        'section'  => 'mytheme_custom_content',
        'settings' => 'box1_icon',
    ));

    $wp_customize->add_setting('box1_text', array(
        'default'   => 'Default content for box 1.',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('box1_text_control', array(
        'label'    => __('Box 1 Text', 'mytheme'),
        'section'  => 'mytheme_custom_content',
        'settings' => 'box1_text',
        'type'     => 'textarea',
    ));

    // Settings and controls for Box 2
    $wp_customize->add_setting('box2_heading', array(
        'default'   => 'Learn Something',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('box2_heading_control', array(
        'label'    => __('Box 2 Heading', 'mytheme'),
        'section'  => 'mytheme_custom_content',
        'settings' => 'box2_heading',
    ));

    $wp_customize->add_setting('box2_icon', array(
        'default'   => 'fa-building-columns',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('box2_icon_control', array(
        'label'    => __('Box 2 Icon (FontAwesome class)', 'mytheme'),
        'section'  => 'mytheme_custom_content',
        'settings' => 'box2_icon',
    ));

    $wp_customize->add_setting('box2_text', array(
        'default'   => 'Default content for box 2.',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('box2_text_control', array(
        'label'    => __('Box 2 Text', 'mytheme'),
        'section'  => 'mytheme_custom_content',
        'settings' => 'box2_text',
        'type'     => 'textarea',
    ));

    // Settings and controls for Box 3
    $wp_customize->add_setting('box3_heading', array(
        'default'   => 'Learn Something',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('box3_heading_control', array(
        'label'    => __('Box 3 Heading', 'mytheme'),
        'section'  => 'mytheme_custom_content',
        'settings' => 'box3_heading',
    ));

    $wp_customize->add_setting('box3_icon', array(
        'default'   => 'fa-book',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('box3_icon_control', array(
        'label'    => __('Box 3 Icon (FontAwesome class)', 'mytheme'),
        'section'  => 'mytheme_custom_content',
        'settings' => 'box3_icon',
    ));

    $wp_customize->add_setting('box3_text', array(
        'default'   => 'Default content for box 3.',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('box3_text_control', array(
        'label'    => __('Box 3 Text', 'mytheme'),
        'section'  => 'mytheme_custom_content',
        'settings' => 'box3_text',
        'type'     => 'textarea',
    ));

    // Settings and controls for About Us section
    $wp_customize->add_setting('about_us_heading', array(
        'default'   => 'About Us',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('about_us_heading_control', array(
        'label'    => __('About Us Heading', 'mytheme'),
        'section'  => 'mytheme_custom_content',
        'settings' => 'about_us_heading',
    ));

    $wp_customize->add_setting('about_us_text', array(
        'default'   => 'Default About Us content.',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('about_us_text_control', array(
        'label'    => __('About Us Text', 'mytheme'),
        'section'  => 'mytheme_custom_content',
        'settings' => 'about_us_text',
        'type'     => 'textarea',
    ));

    $wp_customize->add_setting('about_us_image', array(
        'default'   => '',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'about_us_image_control', array(
        'label'    => __('About Us Image', 'mytheme'),
        'section'  => 'mytheme_custom_content',
        'settings' => 'about_us_image',
    )));
}
add_action('customize_register', 'mytheme_customize_register');



// Add Customizer settings and controls for images
function mytheme1_customize_register($wp_customize) {
    // Add section for facilities
    $wp_customize->add_section('mytheme1_facilities_section', array(
        'title'    => __('Facilities', 'mytheme1'),
        'priority' => 30,
    ));

    // Add settings and controls for each facility
    for ($i = 1; $i <= 6; $i++)  {
        // Text settings
        $wp_customize->add_setting("facility_{$i}_text", array(
            'default'   => "Default text for facility $i.",
            'transport' => 'refresh',
        ));
        $wp_customize->add_control("facility_{$i}_text_control", array(
            'label'    => __("Facility $i Text", 'mytheme'),
            'section'  => 'mytheme1_facilities_section',
            'settings' => "facility_{$i}_text",
        ));

        // Image settings
        $wp_customize->add_setting("facility_{$i}_image", array(
            'default'   => '',
            'transport' => 'refresh',
        ));
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, "facility_{$i}_image_control", array(
            'label'    => __("Facility $i Image", 'mytheme1'),
            'section'  => 'mytheme1_facilities_section',
            'settings' => "facility_{$i}_image",
        )));
    }
}
add_action('customize_register', 'mytheme1_customize_register');




// gallery customization


function mytheme2_customize_register($wp_customize) {
    // Add section for gallery
    $wp_customize->add_section('mytheme2_gallery_section', array(
        'title'    => __('Gallery', 'mytheme2'),
        'priority' => 30,
    ));

    // Add settings for gallery images and content
    for ($i = 1; $i <= 6; $i++) {
        $wp_customize->add_setting("mytheme2_gallery_image_$i", array(
            'default'   => '',
            'transport' => 'refresh',
        ));
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, "mytheme2_gallery_image_$i", array(
            'label'    => __("Image $i", 'mytheme2'),
            'section'  => 'mytheme2_gallery_section',
            'settings' => "mytheme2_gallery_image_$i",
        )));
        
        $wp_customize->add_setting("mytheme2_gallery_text_$i", array(
            'default'   => '',
            'transport' => 'refresh',
        ));
        $wp_customize->add_control("mytheme2_gallery_text_$i", array(
            'label'    => __("Text $i", 'mytheme2'),
            'section'  => 'mytheme2_gallery_section',
            'type'     => 'text',
        ));
    }
}
add_action('customize_register', 'mytheme2_customize_register');


// products

add_action('after_setup_theme', 'mytheme_add_woocommerce_support');
function mytheme_add_woocommerce_support() {
    add_theme_support('woocommerce');
}
