<?php
if ( ! function_exists( 'aarn_setup' ) ) :

function aarn_setup() {

    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     */
    /* Pinegrow generated Load Text Domain Begin */
    load_theme_textdomain( 'aarn', get_template_directory() . '/languages' );
    /* Pinegrow generated Load Text Domain End */

    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    /*
     * Let WordPress manage the document title.
     */
    add_theme_support( 'title-tag' );
    
    /*
     * Enable support for Post Thumbnails on posts and pages.
     */
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 825, 510, true );

    // Add menus.
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'aarn' ),
        'social'  => __( 'Social Links Menu', 'aarn' ),
    ) );

/*
     * Register custom menu locations
     */
    /* Pinegrow generated Register Menus Begin */

    /* Pinegrow generated Register Menus End */
    
/*
    * Set image sizes
     */
    /* Pinegrow generated Image sizes Begin */

    /* Pinegrow generated Image sizes End */
    
    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support( 'html5', array(
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
    ) );

    /*
     * Enable support for Post Formats.
     */
    add_theme_support( 'post-formats', array(
        'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
    ) );

    /*
     * Enable support for Page excerpts.
     */
     add_post_type_support( 'page', 'excerpt' );
}
endif; // aarn_setup

add_action( 'after_setup_theme', 'aarn_setup' );


if ( ! function_exists( 'aarn_init' ) ) :

function aarn_init() {

    
    // Use categories and tags with attachments
    register_taxonomy_for_object_type( 'category', 'attachment' );
    register_taxonomy_for_object_type( 'post_tag', 'attachment' );

    /*
     * Register custom post types. You can also move this code to a plugin.
     */
    /* Pinegrow generated Custom Post Types Begin */

    register_post_type('noticias', array(
        'labels' => 
            array(
                'name' => __( 'Noticias-name', 'aarn' ),
                'singular_name' => __( 'Noticias-singular', 'aarn' )
            ),
        'public' => true,
        'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'custom-fields', 'revisions', 'page-attributes' ),
        'show_in_menu' => true
    ));

    register_post_type('noticias', array(
        'labels' => 
            array(
                'name' => __( 'Noticias', 'aarn' ),
                'singular_name' => __( 'Noticias', 'aarn' )
            ),
        'public' => true,
        'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'custom-fields', 'revisions', 'page-attributes' ),
        'show_in_menu' => true
    ));

    /* Pinegrow generated Custom Post Types End */
    
    /*
     * Register custom taxonomies. You can also move this code to a plugin.
     */
    /* Pinegrow generated Taxonomies Begin */

    /* Pinegrow generated Taxonomies End */

}
endif; // aarn_setup

add_action( 'init', 'aarn_init' );


if ( ! function_exists( 'aarn_custom_image_sizes_names' ) ) :

function aarn_custom_image_sizes_names( $sizes ) {

    /*
     * Add names of custom image sizes.
     */
    /* Pinegrow generated Image Sizes Names Begin*/
    /* This code will be replaced by returning names of custom image sizes. */
    /* Pinegrow generated Image Sizes Names End */
    return $sizes;
}
add_action( 'image_size_names_choose', 'aarn_custom_image_sizes_names' );
endif;// aarn_custom_image_sizes_names



if ( ! function_exists( 'aarn_widgets_init' ) ) :

function aarn_widgets_init() {

    /*
     * Register widget areas.
     */
    /* Pinegrow generated Register Sidebars Begin */

    register_sidebar( array(
        'name' => __( 'Contact 1 Form', 'aarn' ),
        'id' => 'blocks_contact_1_form',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widgettitle">',
        'after_title' => '</h3>'
    ) );

    register_sidebar( array(
        'name' => __( 'Newsletter', 'aarn' ),
        'id' => 'blocks_content_2_3_widgets',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widgettitle">',
        'after_title' => '</h3>'
    ) );

    /* Pinegrow generated Register Sidebars End */
}
add_action( 'widgets_init', 'aarn_widgets_init' );
endif;// aarn_widgets_init



if ( ! function_exists( 'aarn_customize_register' ) ) :

function aarn_customize_register( $wp_customize ) {
    // Do stuff with $wp_customize, the WP_Customize_Manager object.

    /* Pinegrow generated Customizer Controls Begin */

    require_once "inc/blocks/wp_blocks_customizer_controls.php";

    $wp_customize->add_section( 'blocks_copyright_1', array(
        'title' => __( 'Copyright 1', 'aarn' )
    ));

    $wp_customize->add_section( 'blocks_footer_1_3', array(
        'title' => __( 'Rodape', 'aarn' )
    ));

    $wp_customize->add_section( 'blocks_content_2_3', array(
        'title' => __( 'Newslatter', 'aarn' )
    ));

    $wp_customize->add_section( 'front-section', array(
        'title' => __( 'Carousel', 'aarn' ),
        'description' => __( 'Slider', 'aarn' )
    ));

    $wp_customize->add_section( 'blocks_contact_1', array(
        'title' => __( 'Contato', 'aarn' )
    ));

    $wp_customize->add_section( 'blocks_content_2_3', array(
        'title' => __( 'Content 2-3', 'aarn' )
    ));
    $pgwp_sanitize = function_exists('pgwp_sanitize_placeholder') ? 'pgwp_sanitize_placeholder' : null;

    $wp_customize->add_section( 'blocks_content_1_2', array(
        'title' => __( 'Bloco Principal', 'aarn' )
    ));

    $wp_customize->add_setting( 'blocks_content_1_2_title', array(
        'type' => 'theme_mod',
        'default' => __( 'Copy & paste content blocks', 'aarn' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'blocks_content_1_2_title', array(
        'label' => __( 'Title', 'aarn' ),
        'type' => 'text',
        'section' => 'blocks_content_1_2'
    ));

    $wp_customize->add_setting( 'blocks_content_1_2_subtitle', array(
        'type' => 'theme_mod',
        'default' => __( 'For a professional startup site or prototype.', 'aarn' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'blocks_content_1_2_subtitle', array(
        'label' => __( 'Subtitle', 'aarn' ),
        'type' => 'text',
        'section' => 'blocks_content_1_2'
    ));

    $wp_customize->add_setting( 'blocks_content_1_2_text', array(
        'type' => 'theme_mod',
        'default' => __( 'Helvetica mustache squid plaid meh Brooklyn hashtag, retro chillwave YOLO four loko photo booth. Brooklyn kale chips, seitan hella 3 wolf moon slow-carb paleo.', 'aarn' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'blocks_content_1_2_text', array(
        'label' => __( 'Text', 'aarn' ),
        'type' => 'textarea',
        'section' => 'blocks_content_1_2'
    ));

    $wp_customize->add_setting( 'blocks_content_1_2_image', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'blocks_content_1_2_image', array(
        'label' => __( 'Image', 'aarn' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'blocks_content_1_2'
    ) ) );

    $wp_customize->add_setting( 'blocks_contact_1_title', array(
        'type' => 'theme_mod',
        'default' => __( 'Get in Touch', 'aarn' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'blocks_contact_1_title', array(
        'label' => __( 'Title', 'aarn' ),
        'type' => 'text',
        'section' => 'blocks_contact_1'
    ));

    $wp_customize->add_setting( 'blocks_contact_1_subtitle', array(
        'type' => 'theme_mod',
        'default' => __( 'Feel free to drop us a line to contact us', 'aarn' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'blocks_contact_1_subtitle', array(
        'label' => __( 'Subtitle', 'aarn' ),
        'type' => 'text',
        'section' => 'blocks_contact_1'
    ));

    $wp_customize->add_setting( 'blocks_contact_1_text', array(
        'type' => 'theme_mod',
        'default' => __( 'Cras mattis consectetur purus sit amet fermentum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam porta sem malesuada magna mollis euismod. Nulla vitae elit libero, a pharetra augue. Aenean eu leo quam. Pellentesque ornare sem lacinia.', 'aarn' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'blocks_contact_1_text', array(
        'label' => __( 'Text', 'aarn' ),
        'type' => 'textarea',
        'section' => 'blocks_contact_1'
    ));

    $wp_customize->add_setting( 'blocks_contact_1_address', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'blocks_contact_1_address', array(
        'label' => __( 'Address', 'aarn' ),
        'type' => 'textarea',
        'section' => 'blocks_contact_1'
    ));

    $wp_customize->add_setting( 'blocks_contact_1_phone', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'blocks_contact_1_phone', array(
        'label' => __( 'Phone', 'aarn' ),
        'type' => 'text',
        'section' => 'blocks_contact_1'
    ));

    $wp_customize->add_setting( 'blocks_contact_1_email', array(
        'type' => 'theme_mod',
        'default' => __( 'buyme@example.com', 'aarn' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'blocks_contact_1_email', array(
        'label' => __( 'Email', 'aarn' ),
        'type' => 'text',
        'section' => 'blocks_contact_1'
    ));

    $wp_customize->add_setting( 'front-section-image01', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'front-section-image01', array(
        'label' => __( 'Imagem 01', 'aarn' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'front-section'
    ) ) );

    $wp_customize->add_setting( 'front-section-title01', array(
        'type' => 'theme_mod',
        'default' => __( 'Copy & paste content blocks', 'aarn' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'front-section-title01', array(
        'label' => __( 'Titulo 01', 'aarn' ),
        'type' => 'text',
        'section' => 'front-section'
    ));

    $wp_customize->add_setting( 'front-section-image02', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'front-section-image02', array(
        'label' => __( 'Imagem 02', 'aarn' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'front-section'
    ) ) );

    $wp_customize->add_setting( 'front-section-title02', array(
        'type' => 'theme_mod',
        'default' => __( 'Copy & paste content blocks', 'aarn' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'front-section-title02', array(
        'label' => __( 'Titulo 02', 'aarn' ),
        'type' => 'text',
        'section' => 'front-section'
    ));

    $wp_customize->add_setting( 'front-section-image03', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'front-section-image03', array(
        'label' => __( 'Imagem 03', 'aarn' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'front-section'
    ) ) );

    $wp_customize->add_setting( 'front-section-title03', array(
        'type' => 'theme_mod',
        'default' => __( 'Copy & paste content blocks', 'aarn' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'front-section-title03', array(
        'label' => __( 'Titulo 03', 'aarn' ),
        'type' => 'text',
        'section' => 'front-section'
    ));

    $wp_customize->add_setting( 'blocks_content_2_3_text', array(
        'type' => 'theme_mod',
        'default' => __( 'Receba nossas atualizações', 'aarn' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'blocks_content_2_3_text', array(
        'label' => __( 'Text', 'aarn' ),
        'type' => 'text',
        'section' => 'blocks_content_2_3'
    ));

    $wp_customize->add_setting( 'blocks_header_1_logo', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'blocks_header_1_logo', array(
        'label' => __( 'Logo', 'aarn' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'blocks_header_1'
    ) ) );

    $wp_customize->add_setting( 'blocks_footer_1_3_image', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'blocks_footer_1_3_image', array(
        'label' => __( 'Image', 'aarn' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'blocks_footer_1_3'
    ) ) );

    $wp_customize->add_setting( 'blocks_footer_1_3_facebook', array(
        'type' => 'theme_mod',
        'default' => __( '#', 'aarn' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'blocks_footer_1_3_facebook', array(
        'label' => __( 'Facebook link', 'aarn' ),
        'type' => 'text',
        'section' => 'blocks_footer_1_3'
    ));

    $wp_customize->add_setting( 'blocks_footer_1_3_twitter', array(
        'type' => 'theme_mod',
        'default' => __( '#', 'aarn' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'blocks_footer_1_3_twitter', array(
        'label' => __( 'Twitter link', 'aarn' ),
        'type' => 'text',
        'section' => 'blocks_footer_1_3'
    ));

    $wp_customize->add_setting( 'blocks_footer_1_3_google', array(
        'type' => 'theme_mod',
        'default' => __( '#', 'aarn' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'blocks_footer_1_3_google', array(
        'label' => __( 'Google+ link', 'aarn' ),
        'type' => 'text',
        'section' => 'blocks_footer_1_3'
    ));

    $wp_customize->add_setting( 'blocks_footer_1_3_pinterest', array(
        'type' => 'theme_mod',
        'default' => __( '#', 'aarn' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'blocks_footer_1_3_pinterest', array(
        'label' => __( 'Pinterest link', 'aarn' ),
        'type' => 'text',
        'section' => 'blocks_footer_1_3'
    ));

    $wp_customize->add_setting( 'blocks_footer_1_3_behance', array(
        'type' => 'theme_mod',
        'default' => __( '#', 'aarn' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'blocks_footer_1_3_behance', array(
        'label' => __( 'Behance link', 'aarn' ),
        'type' => 'text',
        'section' => 'blocks_footer_1_3'
    ));

    $wp_customize->add_setting( 'blocks_footer_1_3_dribbble', array(
        'type' => 'theme_mod',
        'default' => __( '#', 'aarn' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'blocks_footer_1_3_dribbble', array(
        'label' => __( 'Dribbble link', 'aarn' ),
        'type' => 'text',
        'section' => 'blocks_footer_1_3'
    ));

    $wp_customize->add_setting( 'blocks_footer_1_3_title', array(
        'type' => 'theme_mod',
        'default' => 'We <i class="fa fa-heart pomegranate"></i> our amazing customers',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'blocks_footer_1_3_title', array(
        'label' => __( 'Title', 'aarn' ),
        'type' => 'textarea',
        'section' => 'blocks_footer_1_3'
    ));

    $wp_customize->add_setting( 'blocks_footer_1_3_text', array(
        'type' => 'theme_mod',
        'default' => '123 Anywhere Street,<br> London,<br> LO4 6ON',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'blocks_footer_1_3_text', array(
        'label' => __( 'Text', 'aarn' ),
        'type' => 'textarea',
        'section' => 'blocks_footer_1_3'
    ));

    $wp_customize->add_setting( 'blocks_copyright_1_text_left', array(
        'type' => 'theme_mod',
        'default' => __( '© pgblocks - Pinegrow Blocks', 'aarn' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'blocks_copyright_1_text_left', array(
        'label' => __( 'Left Text', 'aarn' ),
        'type' => 'textarea',
        'section' => 'blocks_copyright_1'
    ));

    $wp_customize->add_setting( 'blocks_copyright_1_text_right', array(
        'type' => 'theme_mod',
        'default' => 'Made with <i class="fa fa-heart pomegranate"></i> on Planet Earth',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'blocks_copyright_1_text_right', array(
        'label' => __( 'Right text', 'aarn' ),
        'type' => 'textarea',
        'section' => 'blocks_copyright_1'
    ));

    /* Pinegrow generated Customizer Controls End */

}
add_action( 'customize_register', 'aarn_customize_register' );
endif;// aarn_customize_register


if ( ! function_exists( 'aarn_enqueue_scripts' ) ) :
    function aarn_enqueue_scripts() {

        /* Pinegrow generated Enqueue Scripts Begin */

    wp_deregister_script( 'jquery' );
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery-1.11.1.min.js', false, null, true);

    wp_deregister_script( 'bootstrap' );
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', false, null, true);

    wp_deregister_script( 'plugins' );
    wp_enqueue_script( 'plugins', get_template_directory_uri() . '/js/plugins.js', false, null, true);

    wp_deregister_script( 'script-1' );
    wp_enqueue_script( 'script-1', 'https://maps.google.com/maps/api/js?sensor=true', false, null, true);

    wp_deregister_script( 'bskitscripts' );
    wp_enqueue_script( 'bskitscripts', get_template_directory_uri() . '/js/bskit-scripts.js', false, null, true);

    wp_deregister_script( 'bootstrap' );
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js', false, null, true);

    wp_deregister_script( 'script-2' );
    wp_enqueue_script( 'script-2', 'https://maps.google.com/maps/api/js?sensor=true', false, null, true);

    wp_deregister_script( 'animator' );
    wp_enqueue_script( 'animator', 'https://cdn.rawgit.com/MhdAljuboori/6ea3a3fa48248e3a132a/raw/animator.js', false, null, true);

    wp_deregister_script( 'jquerywaypoints' );
    wp_enqueue_script( 'jquerywaypoints', 'https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.0/jquery.waypoints.min.js', false, null, true);

    wp_deregister_script( 'jquery' );
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery.min.js', false, null, true);

    wp_deregister_script( 'ieviewportbugworkaround' );
    wp_enqueue_script( 'ieviewportbugworkaround', get_template_directory_uri() . '/assets/js/ie10-viewport-bug-workaround.js', false, null, true);

    wp_deregister_script( 'script-3' );
    wp_enqueue_script( 'script-3', 'https://maps.google.com/maps/api/js?sensor=true', false, null, true);

    wp_deregister_script( 'script-4' );
    wp_enqueue_script( 'script-4', 'https://maps.google.com/maps/api/js?sensor=true', false, null, true);

    wp_deregister_script( 'script-5' );
    wp_enqueue_script( 'script-5', 'https://maps.google.com/maps/api/js?sensor=true', false, null, true);

    wp_deregister_script( 'script-6' );
    wp_enqueue_script( 'script-6', 'https://maps.google.com/maps/api/js?sensor=true', false, null, true);

    /* Pinegrow generated Enqueue Scripts End */

        /* Pinegrow generated Enqueue Styles Begin */

    wp_deregister_style( 'horizontalslim_' );
    wp_enqueue_style( 'horizontalslim_', 'https://cdn-images.mailchimp.com/embedcode/horizontal-slim-10_7.css', false, null, 'all');

    wp_deregister_style( 'bootstrap' );
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css', false, null, 'all');

    wp_deregister_style( 'fontawesome' );
    wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/css/font-awesome.min.css', false, null, 'all');

    wp_deregister_style( 'style-1' );
    wp_enqueue_style( 'style-1', 'http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700', false, null, 'all');

    wp_deregister_style( 'style-2' );
    wp_enqueue_style( 'style-2', 'http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic', false, null, 'all');

    wp_deregister_style( 'stylelibrary' );
    wp_enqueue_style( 'stylelibrary', get_template_directory_uri() . '/css/style-library-1.css', false, null, 'all');

    wp_deregister_style( 'plugins' );
    wp_enqueue_style( 'plugins', get_template_directory_uri() . '/css/plugins.css', false, null, 'all');

    wp_deregister_style( 'blocks' );
    wp_enqueue_style( 'blocks', get_template_directory_uri() . '/css/blocks.css', false, null, 'all');

    wp_deregister_style( 'custom' );
    wp_enqueue_style( 'custom', get_template_directory_uri() . '/css/custom.css', false, null, 'all');

    /* Pinegrow generated Enqueue Styles End */

    }
    add_action( 'wp_enqueue_scripts', 'aarn_enqueue_scripts' );
endif;

function pgwp_sanitize_placeholder($input) { return $input; }
/*
 * Resource files included by Pinegrow.
 */
/* Pinegrow generated Include Resources Begin */
require_once "inc/blocks/wp_blocks.php";
require_once "inc/bootstrap/wp_bootstrap_navwalker.php";
require_once "inc/bootstrap/wp_bootstrap4_pagination.php";

    /* Pinegrow generated Include Resources End */
?>