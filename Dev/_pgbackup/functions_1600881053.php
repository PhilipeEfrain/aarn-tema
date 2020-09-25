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
                'name' => __( 'Noticias-name', 'aarn' ),
                'singular_name' => __( 'Noticias-singular', 'aarn' )
            ),
        'public' => true,
        'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'custom-fields', 'revisions', 'page-attributes' ),
        'show_in_rest' => true,
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
        'name' => __( 'Newsletter', 'aarn' ),
        'id' => 'newsletter',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widgettitle">',
        'after_title' => '</h3>'
    ) );

    register_sidebar( array(
        'name' => __( 'Contato Home', 'aarn' ),
        'id' => 'contato_home',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
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

    $wp_customize->add_section( 'footer', array(
        'title' => __( 'Footer', 'aarn' )
    ));

    $wp_customize->add_section( 'footer', array(
        'title' => __( 'Footer', 'aarn' )
    ));

    $wp_customize->add_section( 'topo_home', array(
        'title' => __( 'Topo da Home', 'aarn' )
    ));

    $wp_customize->add_section( 'chamada_principal', array(
        'title' => __( 'Chamada Home', 'aarn' )
    ));

    $wp_customize->add_section( 'associados01', array(
        'title' => __( 'Torne-se Associado', 'aarn' )
    ));

    $wp_customize->add_section( 'newsletter', array(
        'title' => __( 'Newsletter', 'aarn' )
    ));

    $wp_customize->add_section( 'blog', array(
        'title' => __( 'Blog', 'aarn' )
    ));

    $wp_customize->add_section( 'contato', array(
        'title' => __( 'Contato', 'aarn' )
    ));

    $wp_customize->add_section( 'footer', array(
        'title' => __( 'Footer', 'aarn' )
    ));

    $wp_customize->add_section( 'footer', array(
        'title' => __( 'Footer', 'aarn' )
    ));

    $wp_customize->add_section( 'footer', array(
        'title' => __( 'Footer', 'aarn' )
    ));
    $pgwp_sanitize = function_exists('pgwp_sanitize_placeholder') ? 'pgwp_sanitize_placeholder' : null;

    $wp_customize->add_setting( 'topo_home_logo', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'topo_home_logo', array(
        'label' => __( 'Logo', 'aarn' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'topo_home'
    ) ) );

    $wp_customize->add_setting( 'footer_logo', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'footer_logo', array(
        'label' => __( 'Logo', 'aarn' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'footer'
    ) ) );

    $wp_customize->add_setting( 'footer_face_link', array(
        'type' => 'theme_mod',
        'default' => '<i class="fa fa-2x fa-facebook"></i>',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'footer_face_link', array(
        'label' => __( 'Link Facebook', 'aarn' ),
        'type' => 'text',
        'section' => 'footer'
    ));

    $wp_customize->add_setting( 'footer_instagram_link', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'footer_instagram_link', array(
        'label' => __( 'Link instagram', 'aarn' ),
        'type' => 'url',
        'section' => 'footer'
    ));

    $wp_customize->add_setting( 'footer_endereco', array(
        'type' => 'theme_mod',
        'default' => '123 Anywhere Street,<br> London,<br> LO4 6ON',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'footer_endereco', array(
        'label' => __( 'Endereço', 'aarn' ),
        'type' => 'textarea',
        'section' => 'footer'
    ));

    $wp_customize->add_setting( 'footer_direitos', array(
        'type' => 'theme_mod',
        'default' => __( '© pgblocks - Pinegrow Blocks', 'aarn' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'footer_direitos', array(
        'label' => __( 'Direitos reservados', 'aarn' ),
        'type' => 'text',
        'section' => 'footer'
    ));

    $wp_customize->add_setting( 'footer_desenvolvido', array(
        'type' => 'theme_mod',
        'default' => 'Made with <i class="fa fa-heart pomegranate"></i> on Planet Earth',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'footer_desenvolvido', array(
        'label' => __( 'Desenvolvido por', 'aarn' ),
        'type' => 'text',
        'section' => 'footer'
    ));

    $wp_customize->add_setting( 'topo_home_img', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'topo_home_img', array(
        'label' => __( 'Imagem de Fundo', 'aarn' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'topo_home'
    ) ) );

    $wp_customize->add_setting( 'topo_home_titulo', array(
        'type' => 'theme_mod',
        'default' => __( 'Fluid jumbotron', 'aarn' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'topo_home_titulo', array(
        'label' => __( 'Título', 'aarn' ),
        'type' => 'text',
        'section' => 'topo_home'
    ));

    $wp_customize->add_setting( 'topo_home_legenda', array(
        'type' => 'theme_mod',
        'default' => __( 'This is a modified jumbotron that occupies the entire horizontal space of its parent.', 'aarn' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'topo_home_legenda', array(
        'label' => __( 'Legenda', 'aarn' ),
        'type' => 'text',
        'section' => 'topo_home'
    ));

    $wp_customize->add_setting( 'chamada_principal_titulo', array(
        'type' => 'theme_mod',
        'default' => __( 'Copy & paste content blocks', 'aarn' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'chamada_principal_titulo', array(
        'label' => __( 'Título Chamada', 'aarn' ),
        'type' => 'text',
        'section' => 'chamada_principal'
    ));

    $wp_customize->add_setting( 'chamada_principal_sub', array(
        'type' => 'theme_mod',
        'default' => __( 'For a professional startup site or prototype.', 'aarn' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'chamada_principal_sub', array(
        'label' => __( 'Sub Título', 'aarn' ),
        'type' => 'textarea',
        'section' => 'chamada_principal'
    ));

    $wp_customize->add_setting( 'chamada_principal_texto', array(
        'type' => 'theme_mod',
        'default' => __( 'Helvetica mustache squid plaid meh Brooklyn hashtag, retro chillwave YOLO four loko photo booth. Brooklyn kale chips, seitan hella 3 wolf moon slow-carb paleo.', 'aarn' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'chamada_principal_texto', array(
        'label' => __( 'Texto', 'aarn' ),
        'type' => 'textarea',
        'section' => 'chamada_principal'
    ));

    $wp_customize->add_setting( 'chamada_principal_imagem', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'chamada_principal_imagem', array(
        'label' => __( 'Imagem', 'aarn' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'chamada_principal'
    ) ) );

    $wp_customize->add_setting( 'chamada_principal_legenda', array(
        'type' => 'theme_mod',
        'default' => __( 'Helvetica mustache squid plaid meh Brooklyn hashtag, retro chillwave YOLO four loko photo booth. Brooklyn kale chips, seitan hella 3 wolf moon slow-carb paleo.', 'aarn' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'chamada_principal_legenda', array(
        'label' => __( 'Legenda da foto', 'aarn' ),
        'type' => 'textarea',
        'section' => 'chamada_principal'
    ));

    $wp_customize->add_setting( 'associados01_titulo', array(
        'type' => 'theme_mod',
        'default' => __( 'Torne-se Associado&nbsp;', 'aarn' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'associados01_titulo', array(
        'label' => __( 'Título', 'aarn' ),
        'type' => 'text',
        'section' => 'associados01'
    ));

    $wp_customize->add_setting( 'associados01_sub', array(
        'type' => 'theme_mod',
        'default' => __( 'conheça as vantagens da AARN', 'aarn' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'associados01_sub', array(
        'label' => __( 'Sub Título', 'aarn' ),
        'type' => 'text',
        'section' => 'associados01'
    ));

    $wp_customize->add_setting( 'associados01_titulo_01', array(
        'type' => 'theme_mod',
        'default' => __( 'Defesa da Classe', 'aarn' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'associados01_titulo_01', array(
        'label' => __( 'Título 01', 'aarn' ),
        'type' => 'text',
        'section' => 'associados01'
    ));

    $wp_customize->add_setting( 'associados01_texto_01', array(
        'type' => 'theme_mod',
        'default' => __( 'AARN faz um excelente trabalho em prol da Advocacia, que vai da capacitação a defesa das prerrogativas', 'aarn' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'associados01_texto_01', array(
        'label' => __( 'Texto 01', 'aarn' ),
        'type' => 'textarea',
        'section' => 'associados01'
    ));

    $wp_customize->add_setting( 'associados01_titulo_02', array(
        'type' => 'theme_mod',
        'default' => __( 'Foco em Cidadania', 'aarn' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'associados01_titulo_02', array(
        'label' => __( 'Título 02', 'aarn' ),
        'type' => 'text',
        'section' => 'associados01'
    ));

    $wp_customize->add_setting( 'associados01_texto_02', array(
        'type' => 'theme_mod',
        'default' => __( 'Atividades sociais em prol da comunidade jurídica, visando fortalecer a cidadania e o Estado Democrático do Direito.', 'aarn' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'associados01_texto_02', array(
        'label' => __( 'Texto 02', 'aarn' ),
        'type' => 'textarea',
        'section' => 'associados01'
    ));

    $wp_customize->add_setting( 'associados01_titulo_03', array(
        'type' => 'theme_mod',
        'default' => __( 'Interação entre entidades', 'aarn' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'associados01_titulo_03', array(
        'label' => __( 'Título 03', 'aarn' ),
        'type' => 'text',
        'section' => 'associados01'
    ));

    $wp_customize->add_setting( 'associados01_texto_03', array(
        'type' => 'theme_mod',
        'default' => __( 'Congregar as instituições e estimular o estudo e conhecimento jurídico em prol da sociedade.', 'aarn' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'associados01_texto_03', array(
        'label' => __( 'Texto 03', 'aarn' ),
        'type' => 'textarea',
        'section' => 'associados01'
    ));

    $wp_customize->add_setting( 'associados01_estatuto', array(
        'type' => 'theme_mod',
        'default' => '<div class="grid_4 text-center"> <i class="fa fa-book"></i> </div><h4 class="text-center pad10">Estatuto</h4>',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'associados01_estatuto', array(
        'label' => __( 'Estatuto', 'aarn' ),
        'type' => 'text',
        'section' => 'associados01'
    ));

    $wp_customize->add_setting( 'associados01_estatuto_link', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'associados01_estatuto_link', array(
        'label' => __( 'Link para o estatuto', 'aarn' ),
        'type' => 'url',
        'section' => 'associados01'
    ));

    $wp_customize->add_setting( 'associados01_afiliese', array(
        'type' => 'theme_mod',
        'default' => '<div class="grid_4 text-center"> <i class="fa fa-file-o"></i> </div><h4 class="text-center pad10">Afilie-se</h4>',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'associados01_afiliese', array(
        'label' => __( 'Afilie-se', 'aarn' ),
        'type' => 'text',
        'section' => 'associados01'
    ));

    $wp_customize->add_setting( 'associados01_afiliese_link', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'associados01_afiliese_link', array(
        'label' => __( 'Link para Filiar-se', 'aarn' ),
        'type' => 'url',
        'section' => 'associados01'
    ));

    $wp_customize->add_setting( 'newsletter_imagem', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'newsletter_imagem', array(
        'label' => __( 'Imagem de fundo', 'aarn' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'newsletter'
    ) ) );

    $wp_customize->add_setting( 'newsletter', array(
        'type' => 'theme_mod',
        'default' => '<b>Receba nossas atualizações</b>',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'newsletter', array(
        'label' => __( 'Titulo', 'aarn' ),
        'type' => 'text',
        'section' => 'newsletter'
    ));

    $wp_customize->add_setting( 'blog_titulo', array(
        'type' => 'theme_mod',
        'default' => __( 'Blog e Notícias', 'aarn' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'blog_titulo', array(
        'label' => __( 'Título', 'aarn' ),
        'type' => 'text',
        'section' => 'blog'
    ));

    $wp_customize->add_setting( 'blog_sub', array(
        'type' => 'theme_mod',
        'default' => __( 'infomações e matérias', 'aarn' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'blog_sub', array(
        'label' => __( 'Sub Título', 'aarn' ),
        'type' => 'text',
        'section' => 'blog'
    ));

    $wp_customize->add_setting( 'blog_botao', array(
        'type' => 'theme_mod',
        'default' => __( 'Todas as matérias', 'aarn' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'blog_botao', array(
        'label' => __( 'Botão', 'aarn' ),
        'type' => 'text',
        'section' => 'blog'
    ));

    $wp_customize->add_setting( 'blog_botao_link', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'blog_botao_link', array(
        'label' => __( 'Link Botão', 'aarn' ),
        'type' => 'url',
        'section' => 'blog'
    ));

    $wp_customize->add_setting( 'contato_titulo', array(
        'type' => 'theme_mod',
        'default' => __( 'Get in Touch', 'aarn' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'contato_titulo', array(
        'label' => __( 'Título', 'aarn' ),
        'type' => 'text',
        'section' => 'contato'
    ));

    $wp_customize->add_setting( 'contato_sub', array(
        'type' => 'theme_mod',
        'default' => __( 'Feel free to drop us a line to contact us', 'aarn' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'contato_sub', array(
        'label' => __( 'Sub Título', 'aarn' ),
        'type' => 'text',
        'section' => 'contato'
    ));

    $wp_customize->add_setting( 'contato_txt', array(
        'type' => 'theme_mod',
        'default' => __( 'Cras mattis consectetur purus sit amet fermentum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam porta sem malesuada magna mollis euismod. Nulla vitae elit libero, a pharetra augue. Aenean eu leo quam. Pellentesque ornare sem lacinia.', 'aarn' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'contato_txt', array(
        'label' => __( 'Texto', 'aarn' ),
        'type' => 'textarea',
        'section' => 'contato'
    ));

    $wp_customize->add_setting( 'contato_endereço', array(
        'type' => 'theme_mod',
        'default' => __( '16 Queen\'s Mews, Covent Garden, London, LO2 4ON', 'aarn' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'contato_endereço', array(
        'label' => __( 'Endereço', 'aarn' ),
        'type' => 'text',
        'section' => 'contato'
    ));

    $wp_customize->add_setting( 'contato_telefone', array(
        'type' => 'theme_mod',
        'default' => '+44 (0) 1234 5678',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'contato_telefone', array(
        'label' => __( 'Telefone', 'aarn' ),
        'type' => 'text',
        'section' => 'contato'
    ));

    $wp_customize->add_setting( 'contato_email', array(
        'type' => 'theme_mod',
        'default' => __( 'buyme@example.com', 'aarn' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'contato_email', array(
        'label' => __( 'E-mail', 'aarn' ),
        'type' => 'text',
        'section' => 'contato'
    ));

    $wp_customize->add_setting( 'contato_email_link', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'contato_email_link', array(
        'label' => __( 'Link E-mail', 'aarn' ),
        'type' => 'url',
        'section' => 'contato'
    ));

    /* Pinegrow generated Customizer Controls End */

}
add_action( 'customize_register', 'aarn_customize_register' );
endif;// aarn_customize_register


if ( ! function_exists( 'aarn_enqueue_scripts' ) ) :
    function aarn_enqueue_scripts() {

        /* Pinegrow generated Enqueue Scripts Begin */

    wp_enqueue_script( 'jquery' );
    wp_deregister_script( 'aarn-bootstrap' );
    wp_enqueue_script( 'aarn-bootstrap', get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js', false, null, true);

    wp_deregister_script( 'aarn-plugins' );
    wp_enqueue_script( 'aarn-plugins', get_template_directory_uri() . '/js/plugins.js', false, null, true);

    wp_deregister_script( 'aarn-script' );
    wp_enqueue_script( 'aarn-script', 'https://maps.google.com/maps/api/js?sensor=true', false, null, true);

    wp_deregister_script( 'aarn-bskitscripts' );
    wp_enqueue_script( 'aarn-bskitscripts', get_template_directory_uri() . '/js/bskit-scripts.js', false, null, true);

    wp_deregister_script( 'aarn-popper' );
    wp_enqueue_script( 'aarn-popper', get_template_directory_uri() . '/assets/js/popper.js', false, null, true);

    wp_deregister_script( 'aarn-bootstrap-1' );
    wp_enqueue_script( 'aarn-bootstrap-1', get_template_directory_uri() . '/js/bootstrap.min.js', false, null, true);

    /* Pinegrow generated Enqueue Scripts End */

        /* Pinegrow generated Enqueue Styles Begin */

    wp_deregister_style( 'aarn-bootstrap' );
    wp_enqueue_style( 'aarn-bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css', false, null, 'all');

    wp_deregister_style( 'aarn-fontawesome' );
    wp_enqueue_style( 'aarn-fontawesome', get_template_directory_uri() . '/css/font-awesome.min.css', false, null, 'all');

    wp_deregister_style( 'aarn-style' );
    wp_enqueue_style( 'aarn-style', 'http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700', false, null, 'all');

    wp_deregister_style( 'aarn-style-1' );
    wp_enqueue_style( 'aarn-style-1', 'http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic', false, null, 'all');

    wp_deregister_style( 'aarn-stylelibrary' );
    wp_enqueue_style( 'aarn-stylelibrary', get_template_directory_uri() . '/css/style-library-1.css', false, null, 'all');

    wp_deregister_style( 'aarn-plugins' );
    wp_enqueue_style( 'aarn-plugins', get_template_directory_uri() . '/css/plugins.css', false, null, 'all');

    wp_deregister_style( 'aarn-blocks' );
    wp_enqueue_style( 'aarn-blocks', get_template_directory_uri() . '/css/blocks.css', false, null, 'all');

    wp_deregister_style( 'aarn-custom' );
    wp_enqueue_style( 'aarn-custom', get_template_directory_uri() . '/css/custom.css', false, null, 'all');

    wp_deregister_style( 'aarn-horizontalslim_' );
    wp_enqueue_style( 'aarn-horizontalslim_', 'https://cdn-images.mailchimp.com/embedcode/horizontal-slim-10_7.css', false, null, 'all');

    wp_deregister_style( 'aarn-style-2' );
    wp_enqueue_style( 'aarn-style-2', get_bloginfo('stylesheet_url'), false, null, 'all');

    /* Pinegrow generated Enqueue Styles End */

    }
    add_action( 'wp_enqueue_scripts', 'aarn_enqueue_scripts' );
endif;

function pgwp_sanitize_placeholder($input) { return $input; }
/*
 * Resource files included by Pinegrow.
 */
/* Pinegrow generated Include Resources Begin */
require_once "inc/custom.php";
require_once "inc/wp_pg_helpers.php";
require_once "inc/bootstrap/wp_bootstrap4_navwalker.php";
require_once "inc/bootstrap/wp_bootstrap4_pagination.php";

    /* Pinegrow generated Include Resources End */
?>