<?php
get_header( 'indexbk' ); ?>

        <header id="header-2" class="soft-scroll header-2">
            <nav class="main-nav navbar navbar-default navbar-fixed-top">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                            <span class="sr-only"><?php _e( 'Toggle navigation', 'aarn' ); ?></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a href="<?php echo esc_url( home_url() ); ?>"> <?php echo wp_get_attachment_image( get_theme_mod( 'blocks_header_2_logo' ), 'large', null, array(
                                    'class' => 'brand-img img-responsive'
                            ) ) ?> </a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="navbar-collapse">
                        <?php wp_nav_menu( array(
                                'menu' => 'primary',
                                'menu_class' => 'nav navbar-nav navbar-right',
                                'container' => '',
                                'depth' => '2',
                                'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
                                'walker' => new wp_bootstrap_navwalker()
                        ) ); ?>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
                <!-- /.container-fluid -->
            </nav>
        </header>
        <div class="carousel slide" id="carousel-example-captions" data-ride="carousel"> 
            <ol class="carousel-indicators"> 
                <li data-target="#carousel-example-captions" data-slide-to="0" class="active"></li>                 
                <li data-target="#carousel-example-captions" data-slide-to=""></li>                 
                <li data-target="#carousel-example-captions" data-slide-to=""></li>                 
            </ol>             
            <div class="carousel-inner" role="listbox"> 
                <div class="item active"> 
                    <img alt="First slide image" 1439x500 auto #777:#777 src="http://pinegrow.com/placeholders/img16.jpg" width="100%"> 
                    <div class="carousel-caption"> 
                        <h3><?php _e( 'First slide label', 'aarn' ); ?></h3> 
                    </div>                     
                </div>                 
                <div class="item"> 
                    <img alt="Second slide image" auto #666:#666 src="http://pinegrow.com/placeholders/img19.jpg" 1439x500 width="100%"> 
                    <div class="carousel-caption"> 
                        <h3><?php _e( 'Second slide label', 'aarn' ); ?></h3> 
                    </div>                     
                </div>
                <div class="item"> 
                    <img alt="Third slide image" 1439 auto #555:#555 src="http://pinegrow.com/placeholders/img19.jpg" width="100%"> 
                    <div class="carousel-caption"> 
                        <h3><?php _e( 'Third slide label', 'aarn' ); ?></h3> 
                    </div>                     
                </div>                 
            </div>             
            <a href="#carousel-example-captions" class="left carousel-control" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only"><?php _e( 'Previous', 'aarn' ); ?></span> </a> 
            <a href="#carousel-example-captions" class="right carousel-control" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only"><?php _e( 'Next', 'aarn' ); ?></span> </a> 
        </div>
        <section id="content-1-2" class="content-block content-1-2">
            <div class="container">
                <!-- Start Row -->
                <div class="row">
                    <div class="col-sm-6">
                        <h2><?php echo get_theme_mod( 'blocks_content_1_2_title', __( 'Copy & paste content blocks', 'aarn' ) ); ?></h2>
                        <p class="lead"><?php echo get_theme_mod( 'blocks_content_1_2_subtitle', __( 'For a professional startup site or prototype.', 'aarn' ) ); ?></p>
                        <p><?php echo get_theme_mod( 'blocks_content_1_2_text', __( 'Helvetica mustache squid plaid meh Brooklyn hashtag, retro chillwave YOLO four loko photo booth. Brooklyn kale chips, seitan hella 3 wolf moon slow-carb paleo.', 'aarn' ) ); ?></p>
                    </div>
                    <div class="col-sm-5 col-sm-offset-1 col-sm">
                        <?php echo wp_get_attachment_image( get_theme_mod( 'blocks_content_1_2_image' ), 'large', null, array(
                                'class' => 'img-rounded img-responsive'
                        ) ) ?>
                    </div>
                </div>
                <!--// END Row -->
            </div>
        </section>
        <section id="content-1-9" class="content-1-9 content-block">
            <div class="container">
                <div class="underlined-title">
                    <h1><?php _e( 'Torne-se Associado&nbsp;', 'aarn' ); ?></h1>
                    <hr>
                    <h2><?php _e( 'conheça as vantagens da AARN', 'aarn' ); ?></h2>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-12 col-xs-12 pad25">
                        <div class="col-xs-2">
                            <span class="fa fa-group"></span>
                        </div>
                        <div class="col-xs-10">
                            <h4><?php _e( 'Defesa da Classe', 'aarn' ); ?></h4>
                            <p><?php _e( 'AARN faz um excelente trabalho em prol da Advocacia, que vai da capacitação a defesa das prerrogativas', 'aarn' ); ?></p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 col-xs-12 pad25">
                        <div class="col-xs-2">
                            <span class="fa fa-balance-scale"></span>
                        </div>
                        <div class="col-xs-10">
                            <h4><?php _e( 'Foco em Cidadania', 'aarn' ); ?></h4>
                            <p><?php _e( 'Atividades sociais em prol da comunidade jurídica, visando fortalecer a cidadania e o Estado Democrático do Direito.', 'aarn' ); ?></p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 col-xs-12 pad25">
                        <div class="col-xs-2">
                            <span class="fa fa-university"></span>
                        </div>
                        <div class="col-xs-10">
                            <h4><?php _e( 'Interação entre entidades', 'aarn' ); ?></h4>
                            <p><?php _e( 'Congregar as instituições e estimular o estudo e conhecimento jurídico em prol da sociedade.', 'aarn' ); ?></p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-xs-12 pad25 col-md-12">
                        <div class="row">
                            <div class="grid_4 col-md-4">
                                <div class="grid_4 text-center">
                                    <i class="fa fa-book"></i>
                                </div>
                                <h4 class="text-center pad10"><?php _e( 'Estatuto', 'aarn' ); ?></h4>
                            </div>
                            <div class="grid_4 col-md-4">
                                <div class="grid_4 text-center">
                                    <i class="fa fa-file-o"></i>
                                </div>
                                <h4 class="text-center pad10"><?php _e( 'Requerimento', 'aarn' ); ?></h4>
                            </div>
                            <div class="grid_4 col-md-4">
                                <div class="grid_4 text-center">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <h4 class="text-center pad10"><?php _e( 'Anuidade', 'aarn' ); ?></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>
        <section class="content-block content-2-3 bg-deepocean">
            <div class="container">
                <div class="col-sm-7 pull-left">
                    <h2><?php echo get_theme_mod( 'blocks_content_2_3_text', __( 'Sign-up to receive our newsletter', 'aarn' ) ); ?></h2>
                </div>
                <div class="col-sm-4 pull-right">
                    <div class="input-group">
                        <input type="email" class="form-control" placeholder="email address">
                        <span class="input-group-btn"><a class="btn btn-primary" type="button"><?php _e( 'send', 'aarn' ); ?></a></span>
                    </div>
                    <!-- /.input-group -->
                </div>
            </div>
            <!-- /.container -->
        </section>
        <section id="content-1-9" class="content-1-9 content-block">
            <div class="container">
                <div class="underlined-title">
                    <h1><?php _e( 'Blog e Notícias', 'aarn' ); ?></h1>
                    <hr>
                    <h2><?php _e( 'infomações e matérias', 'aarn' ); ?></h2>
                    <div class="row">
                        <?php if ( have_posts() ) : ?>
                            <?php while ( have_posts() ) : the_post(); ?>
                                <div class="col-md-4">
                                    <?php if ( is_singular() ) : ?>
                                        <?php
                                            if ( has_post_thumbnail() ) {
                                                the_post_thumbnail( array (300, 200) );
                                            }
                                         ?>
                                    <?php else : ?>
                                        <a href="<?php echo esc_url( get_permalink() ); ?>"><?php
                                                if ( has_post_thumbnail() ) {
                                                    the_post_thumbnail( array (300, 200) );
                                                }
                                             ?></a>
                                    <?php endif; ?>
                                    <h3><?php the_title(); ?></h3>
                                    <?php echo get_the_date(); ?> 
                                    <?php the_excerpt( ); ?>
                                    <?php the_shortlink( 'Leia mais' ); ?> 
                                </div>
                            <?php endwhile; ?>
                        <?php else : ?>
                            <p><?php _e( 'Sorry, no posts matched your criteria.', 'aarn' ); ?></p>
                        <?php endif; ?>
                    </div>
                    <div>
                        <a class="btn js-scroll-trigger btn-dark" href="category/blog/"><?php _e( 'Todas as matérias', 'aarn' ); ?></a>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>
        <div class="container"> 
            <!-- / section -->             
            <!-- / section -->             
            <div class="row section recentworks topspace"> 
</div>             
            <!-- /section -->             
            <!-- /section -->             
            <!-- /section -->             
        </div>
        <section class="content-block contact-1">
            <div class="container text-center">
                <div class="col-sm-10 col-sm-offset-1">
                    <div class="underlined-title">
                        <h1><?php echo get_theme_mod( 'blocks_contact_1_title', __( 'Get in Touch', 'aarn' ) ); ?></h1>
                        <hr>
                        <h2><?php echo get_theme_mod( 'blocks_contact_1_subtitle', __( 'Feel free to drop us a line to contact us', 'aarn' ) ); ?></h2>
                    </div>
                    <p><?php echo get_theme_mod( 'blocks_contact_1_text', __( 'Cras mattis consectetur purus sit amet fermentum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam porta sem malesuada magna mollis euismod. Nulla vitae elit libero, a pharetra augue. Aenean eu leo quam. Pellentesque ornare sem lacinia.', 'aarn' ) ); ?></p>
                    <ul class="contact-info">
                        <li>
                            <span class="fa fa-map-marker"></span>
                            <?php echo get_theme_mod( 'blocks_contact_1_address' ); ?>
                        </li>
                        <li>
                            <span class="fa fa-phone"></span>
                            <?php echo get_theme_mod( 'blocks_contact_1_phone' ); ?>
                        </li>
                        <li>
                            <span class="fa fa-envelope"></span>
                            <a href="<?php echo 'mailto:'.get_theme_mod('blocks_contact_1_email') ?>"><?php echo get_theme_mod( 'blocks_contact_1_email', __( 'buyme@example.com', 'aarn' ) ); ?></a> 
                        </li>
                    </ul>
                    <?php if ( is_active_sidebar( 'blocks_contact_1_form' ) ) : ?>
                        <div id="contact" class="form-container">
                            <?php dynamic_sidebar( 'blocks_contact_1_form' ); ?>
                        </div>
                    <?php endif; ?>
                    <!-- /.form-container -->
                </div>
                <!-- /.col-sm-10 -->
            </div>
            <!-- /.container -->
        </section>
        <section class="content-block-nopad bg-deepocean footer-wrap-1-3">
            <div class="container footer-1-3">
                <div class="col-md-4 pull-left">
                    <?php echo wp_get_attachment_image( get_theme_mod( 'blocks_footer_1_3_image' ), null, null, array(
                            'class' => 'brand-img img-responsive'
                    ) ) ?>
                    <ul class="social social-light">
                        <?php if ( get_theme_mod( 'blocks_footer_1_3_facebook' ) ) : ?>
                            <li>
                                <a href="<?php echo get_theme_mod( 'blocks_footer_1_3_facebook', '#' ); ?>"><i class="fa fa-2x fa-facebook"></i></a>
                            </li>
                        <?php endif; ?>
                        <?php if ( get_theme_mod( 'blocks_footer_1_3_twitter' ) ) : ?>
                            <li>
                                <a href="<?php echo get_theme_mod( 'blocks_footer_1_3_twitter', '#' ); ?>"><i class="fa fa-2x fa-twitter"></i></a>
                            </li>
                        <?php endif; ?>
                        <?php if ( get_theme_mod( 'blocks_footer_1_3_google' ) ) : ?>
                            <li>
                                <a href="<?php echo get_theme_mod( 'blocks_footer_1_3_google', '#' ); ?>"><i class="fa fa-2x fa-google-plus"></i></a>
                            </li>
                        <?php endif; ?>
                        <?php if ( get_theme_mod( 'blocks_footer_1_3_pinterest' ) ) : ?>
                            <li>
                                <a href="<?php echo get_theme_mod( 'blocks_footer_1_3_pinterest', '#' ); ?>"><i class="fa fa-2x fa-pinterest"></i></a>
                            </li>
                        <?php endif; ?>
                        <?php if ( get_theme_mod( 'blocks_footer_1_3_behance' ) ) : ?>
                            <li>
                                <a href="<?php echo get_theme_mod( 'blocks_footer_1_3_behance', '#' ); ?>"><i class="fa fa-2x fa-behance"></i></a>
                            </li>
                        <?php endif; ?>
                        <?php if ( get_theme_mod( 'blocks_footer_1_3_dribbble' ) ) : ?>
                            <li>
                                <a href="<?php echo get_theme_mod( 'blocks_footer_1_3_dribbble', '#' ); ?>"><i class="fa fa-2x fa-dribbble"></i></a>
                            </li>
                        <?php endif; ?>
                    </ul>
                    <!-- /.social -->
                </div>
                <div class="col-md-3 pull-right">
                    <p class="address-bold-line"><?php echo get_theme_mod( 'blocks_footer_1_3_title', 'We <i class="fa fa-heart pomegranate"></i> our amazing customers' ); ?></p>
                    <p class="address small"><?php echo get_theme_mod( 'blocks_footer_1_3_text', '123 Anywhere Street,<br> London,<br> LO4 6ON' ); ?></p>
                </div>
                <div class="col-xs-12 footer-text">
                    <p><?php echo get_theme_mod( 'blocks_footer_1_3_bottom_text', 'Please take a few minutes to read our <a href="#">Terms & Conditions</a> and <a href="#">Privacy Policy</a>' ); ?></p>
                </div>
            </div>
            <div class="copyright-bar bg-black">
                <div class="container">
                    <?php if( get_theme_mod( 'blocks_copyright_1_text_left' ) ) : ?>
                        <p class="pull-left small"><?php echo get_theme_mod( 'blocks_copyright_1_text_left', __( '© pgblocks - Pinegrow Blocks', 'aarn' ) ); ?></p>
                    <?php endif; ?>
                    <?php if( get_theme_mod( 'blocks_copyright_1_text_right' ) ) : ?>
                        <p class="pull-right small"><?php echo get_theme_mod( 'blocks_copyright_1_text_right', 'Made with <i class="fa fa-heart pomegranate"></i> on Planet Earth' ); ?></p>
                    <?php endif; ?>
                </div>
            </div>
            <!-- /.container -->
        </section>        

<?php get_footer( 'indexbk' ); ?>