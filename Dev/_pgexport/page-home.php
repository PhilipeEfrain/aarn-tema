<?php get_header( 'page-home' ); ?>

    <header id="header-1" class="soft-scroll header-1">
        <!-- Navbar -->
        <nav class="main-nav navbar-fixed-top headroom headroom--pinned">
            <div class="container">
                <!-- Brand and toggle -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only"><?php _e( 'Toggle navigation', 'aarn' ); ?></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="<?php echo esc_url( home_url() ); ?>"> <img src="<?php echo PG_Image::getUrl( get_theme_mod( 'topo_home_logo', esc_url( get_template_directory_uri() . '/images/Untitled-1-03.png' ) ), 'large' ) ?>" class="brand-img img-responsive"> </a>
                </div>
                <!-- Navigation -->
                <div class="collapse navbar-collapse">
                    <?php wp_nav_menu( array(
                            'menu' => 'primary',
                            'menu_class' => 'nav navbar-nav navbar-right',
                            'container' => '',
                            'fallback_cb' => 'wp_bootstrap4_navwalker::fallback',
                            'walker' => new wp_bootstrap4_navwalker()
                    ) ); ?>
                    <!--//nav-->
                </div>
                <!--// End Navigation -->
            </div>
            <!--// End Container -->
        </nav>
        <!--// End Navbar -->
    </header>
    <div class="jumbotron jumbotron-fluid" style="padding-top: 700px; padding-bottom: 0px; background-image: url('<?php echo esc_url( get_template_directory_uri() ); ?>/images/dark-logs-bg.jpg'); background-repeat: no-repeat; background-size: cover;background-image:<?php echo 'url('.PG_Image::getUrl( get_theme_mod( 'topo_home_img' ), 'large' ).')' ?>;">
        <div class="container" style="background-color: rgba(12, 12, 12, 0.61); color: #ffffff; padding-left: 100px; padding-right: 25px; width: 100%;">
            <h1 class="display-4"><?php echo get_theme_mod( 'topo_home_titulo', __( 'Fluid jumbotron', 'aarn' ) ); ?></h1>
            <p class="lead" style="color: #ffffff;"><?php echo get_theme_mod( 'topo_home_legenda', __( 'This is a modified jumbotron that occupies the entire horizontal space of its parent.', 'aarn' ) ); ?></p>
        </div>
    </div>
    <section id="content-1-2" class="content-block content-1-2">
        <div class="container">
            <!-- Start Row -->
            <div class="row">
                <div class="col-sm-6">
                    <h2><?php echo get_theme_mod( 'chamada_principal_titulo', __( 'Copy & paste content blocks', 'aarn' ) ); ?></h2>
                    <p class="lead"><?php echo get_theme_mod( 'chamada_principal_sub', __( 'For a professional startup site or prototype.', 'aarn' ) ); ?></p>
                    <p><?php echo get_theme_mod( 'chamada_principal_texto', __( 'Helvetica mustache squid plaid meh Brooklyn hashtag, retro chillwave YOLO four loko photo booth. Brooklyn kale chips, seitan hella 3 wolf moon slow-carb paleo.', 'aarn' ) ); ?></p>
                    <h2><?php echo get_theme_mod( 'chamada_principal_nota', __( 'Copy & paste content blocks', 'aarn' ) ); ?></h2>
                    <p><?php echo get_theme_mod( 'chamada_principal_nota_texto', __( 'Helvetica mustache squid plaid meh Brooklyn hashtag, retro chillwave YOLO four loko photo booth. Brooklyn kale chips, seitan hella 3 wolf moon slow-carb paleo.', 'aarn' ) ); ?></p>
                </div>
                <div class="col-sm-5 col-sm-offset-1 col-sm">
                    <img class="img-rounded img-responsive" src="<?php echo PG_Image::getUrl( get_theme_mod( 'chamada_principal_imagem', 'http://placehold.it/600x400' ), 'large' ) ?>">
                    <p style="font-size: 10px;"><?php echo get_theme_mod( 'chamada_principal_legenda', __( 'Helvetica mustache squid plaid meh Brooklyn hashtag, retro chillwave YOLO four loko photo booth. Brooklyn kale chips, seitan hella 3 wolf moon slow-carb paleo.', 'aarn' ) ); ?></p>
                </div>
            </div>
            <!--// END Row -->
        </div>
    </section>
    <section id="content-1-9" class="content-1-9 content-block">
        <div class="container">
            <div class="underlined-title">
                <h1><?php echo get_theme_mod( 'associados01_titulo', __( 'Torne-se Associado&nbsp;', 'aarn' ) ); ?></h1>
                <hr>
                <h2><?php echo get_theme_mod( 'associados01_sub', __( 'conheça as vantagens da AARN', 'aarn' ) ); ?></h2>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-12 col-xs-12 pad25">
                    <div class="col-xs-2">
                        <span class="fa fa-group"></span>
                    </div>
                    <div class="col-xs-10">
                        <h4><?php echo get_theme_mod( 'associados01_titulo_01', __( 'Defesa da Classe', 'aarn' ) ); ?></h4>
                        <p><?php echo get_theme_mod( 'associados01_texto_01', __( 'AARN faz um excelente trabalho em prol da Advocacia, que vai da capacitação a defesa das prerrogativas', 'aarn' ) ); ?></p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12 pad25">
                    <div class="col-xs-2">
                        <span class="fa fa-balance-scale"></span>
                    </div>
                    <div class="col-xs-10">
                        <h4><?php echo get_theme_mod( 'associados01_titulo_02', __( 'Foco em Cidadania', 'aarn' ) ); ?></h4>
                        <p><?php echo get_theme_mod( 'associados01_texto_02', __( 'Atividades sociais em prol da comunidade jurídica, visando fortalecer a cidadania e o Estado Democrático do Direito.', 'aarn' ) ); ?></p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12 pad25">
                    <div class="col-xs-2">
                        <span class="fa fa-university"></span>
                    </div>
                    <div class="col-xs-10">
                        <h4><?php echo get_theme_mod( 'associados01_titulo_03', __( 'Interação entre entidades', 'aarn' ) ); ?></h4>
                        <p><?php echo get_theme_mod( 'associados01_texto_03', __( 'Congregar as instituições e estimular o estudo e conhecimento jurídico em prol da sociedade.', 'aarn' ) ); ?></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-xs-12 pad25 col-md-12">
                    <div class="row">
                        <div class="col-md-6 grid_4">
                            <a href="<?php echo get_theme_mod( 'associados01_estatuto_link', '#' ); ?>"><?php echo get_theme_mod( 'associados01_estatuto', '<div class="grid_4 text-center"> <i class="fa fa-book"></i> </div><h4 class="text-center pad10">Estatuto</h4>' ); ?></a>
                        </div>
                        <div class="col-md-6 grid_4">
                            <a href="<?php echo get_theme_mod( 'associados01_afiliese_link', '#' ); ?>"><?php echo get_theme_mod( 'associados01_afiliese', '<div class="grid_4 text-center"> <i class="fa fa-file-o"></i> </div><h4 class="text-center pad10">Afilie-se</h4>' ); ?></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <section class="content-block content-2-3 bg-image-cover" img style="background-image: url('<?php echo esc_url( get_template_directory_uri() ); ?>/images/golden-justice-scale-front-lawyer-reading-book-table_23-2147898544.jpg');background-image:<?php echo 'url('.PG_Image::getUrl( get_theme_mod( 'newsletter_imagem' ), 'large' ).')' ?>;">
        <div class="container">
            <div class="pull-left col-sm-6">
                <h2><?php echo get_theme_mod( 'newsletter', '<b>Receba nossas atualizações</b>' ); ?></h2>
            </div>
            <div class="pull-left col-sm-6"> 
                <style type="text/css">clear: left;font: 14px Helvetica,Arial,sans-serif;width: 100%; /* Add your own Mailchimp form style overrides in your site stylesheet or in this style block.
We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */}</style>                     
                <div id="mc_embed_signup">
                    <form action="https://bdeimagem.us20.list-manage.com/subscribe/post?u=3981becb70026cba28ee2ccbf&amp;id=e2ca2d53f4" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate="">
                        <?php if ( is_active_sidebar( 'newsletter' ) ) : ?>
                            <div id="mc_embed_signup_scroll">
                                <?php dynamic_sidebar( 'newsletter' ); ?>
                            </div>
                        <?php endif; ?>
                    </form>
                </div>
            </div>
        </div>
        <!-- /.container -->
    </section>
    <section id="content-1-9" class="content-1-9 content-block">
        <div class="container">
            <div class="underlined-title">
                <h1><?php echo get_theme_mod( 'blog_titulo', __( 'Blog e Notícias', 'aarn' ) ); ?></h1>
                <hr>
                <h2><?php echo get_theme_mod( 'blog_sub', __( 'infomações e matérias', 'aarn' ) ); ?></h2>
                <div class="row pad30">
                    <?php
                        $post_query_args = array(
                            'post_type' => 'post',
                            'posts_per_page' => 3,
                            'paged' => get_query_var( 'paged' ) ?: 1,
                            'order' => 'DESC',
                            'orderby' => 'date'
                        )
                    ?>
                    <?php $post_query = new WP_Query( $post_query_args ); ?>
                    <?php if ( $post_query->have_posts() ) : ?>
                        <?php while ( $post_query->have_posts() ) : $post_query->the_post(); ?>
                            <?php PG_Helper::rememberShownPost(); ?>
                            <div <?php post_class( 'col-md-4' ); ?> id="post-<?php the_ID(); ?>">
                                <?php if ( is_singular() ) : ?>
                                    <?php $image_attributes = !empty( get_the_ID() ) ? wp_get_attachment_image_src( PG_Image::isPostImage() ? get_the_ID() : get_post_thumbnail_id( get_the_ID() ), 'large' ) : null; ?>
                                    <div class="pg-empty-placeholder" style="min-width: 350px; min-height: 196px; background-image: url('<?php echo esc_url( get_template_directory_uri() ); ?>/images/palm-trees.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center top;<?php if($image_attributes) echo 'background-image:url(\''.$image_attributes[0].'\')' ?>"></div>
                                <?php else : ?>
                                    <?php $image_attributes = !empty( get_the_ID() ) ? wp_get_attachment_image_src( PG_Image::isPostImage() ? get_the_ID() : get_post_thumbnail_id( get_the_ID() ), 'large' ) : null; ?>
                                    <div class="pg-empty-placeholder" style="min-width: 350px; min-height: 196px; background-image: url('<?php echo esc_url( get_template_directory_uri() ); ?>/images/palm-trees.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center top;<?php if($image_attributes) echo 'background-image:url(\''.$image_attributes[0].'\')' ?>">
                                        <a href="<?php echo esc_url( get_permalink() ); ?>"></a>
                                    </div>
                                <?php endif; ?>
                                <h3><a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_title(); ?></a></h3>
                                <p><?php the_time( get_option( 'date_format' ) ); ?></p> 
                                <?php the_excerpt( ); ?>
                                <a class="btn btn-primary" href="<?php echo esc_url( get_permalink() ); ?>"><?php _e( 'leia mais', 'aarn' ); ?></a> 
                            </div>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                    <?php else : ?>
                        <p><?php _e( 'Sorry, no posts matched your criteria.', 'aarn' ); ?></p>
                    <?php endif; ?>
                </div>
                <div class="margin-top25">
                    <a class="btn js-scroll-trigger btn-dark" href="<?php echo get_theme_mod( 'blog_botao_link', 'category/blog/' ); ?>"><?php echo get_theme_mod( 'blog_botao', __( 'Todas as matérias', 'aarn' ) ); ?></a>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <section class="content-block contact-1">
        <div class="container text-center">
            <div class="col-sm-10 col-sm-offset-1">
                <div class="underlined-title">
                    <h1><?php echo get_theme_mod( 'contato_titulo', __( 'Get in Touch', 'aarn' ) ); ?></h1>
                    <hr>
                    <h2><?php echo get_theme_mod( 'contato_sub', __( 'Feel free to drop us a line to contact us', 'aarn' ) ); ?></h2>
                </div>
                <p><?php echo get_theme_mod( 'contato_txt', __( 'Cras mattis consectetur purus sit amet fermentum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam porta sem malesuada magna mollis euismod. Nulla vitae elit libero, a pharetra augue. Aenean eu leo quam. Pellentesque ornare sem lacinia.', 'aarn' ) ); ?></p>
                <ul class="contact-info">
                    <li>
                        <span class="fa fa-map-marker"></span>
                        <wp-span>
                            <?php echo get_theme_mod( 'contato_endereço', __( '16 Queen\'s Mews, Covent Garden, London, LO2 4ON', 'aarn' ) ); ?>
                        </wp-span>
                    </li>
                    <li>
                        <span class="fa fa-phone"></span>
                        <wp-span>
                            <?php echo get_theme_mod( 'contato_telefone', '+44 (0) 1234 5678' ); ?>
                        </wp-span>
                    </li>
                    <li>
                        <span class="fa fa-envelope"></span>
                        <a href="<?php echo get_theme_mod( 'contato_email_link', 'mailto:buyme@example.com' ); ?>"><?php echo get_theme_mod( 'contato_email', __( 'buyme@example.com', 'aarn' ) ); ?></a> 
                    </li>
                </ul>
                <div id="contact" class="form-container">
                    <div id="message"></div>
                    <?php if ( is_active_sidebar( 'contato_home' ) ) : ?>
                        <form method="post" action="<?php echo esc_url( get_template_directory_uri() ); ?>/js/contact-form.php" name="contactform" id="contactform">
                            <?php dynamic_sidebar( 'contato_home' ); ?>
                        </form>
                    <?php endif; ?>
                </div>
                <!-- /.form-container -->
            </div>
            <!-- /.col-sm-10 -->
        </div>
        <!-- /.container -->
    </section>
    <section class="content-block-nopad bg-deepocean footer-wrap-1-3">
        <div class="container footer-1-3">
            <div class="col-md-4 pull-left">
                <img src="<?php echo PG_Image::getUrl( get_theme_mod( 'footer_logo', esc_url( get_template_directory_uri() . '/images/brand/pgblocks-logo-white.png' ) ), 'large' ) ?>" class="brand-img img-responsive">
                <!-- /.social -->
            </div>
            <div class="col-md-3 pull-right">
                <p class="address small"><?php echo get_theme_mod( 'footer_endereco', '123 Anywhere Street,<br> London,<br> LO4 6ON' ); ?></p>
            </div>
        </div>
        <div class="copyright-bar bg-black">
            <div class="container">
                <p class="pull-left small"><?php echo get_theme_mod( 'footer_direitos', __( '© pgblocks - Pinegrow Blocks', 'aarn' ) ); ?></p>
                <p class="pull-right small"><?php echo get_theme_mod( 'footer_desenvolvido', 'Made with <i class="fa fa-heart pomegranate"></i> on Planet Earth' ); ?></p>
            </div>
        </div>
        <!-- /.container -->
    </section>        

<?php get_footer( 'page-home' ); ?>