<?php
get_header(); ?>

        <?php get_template_part( 'menu-principal', 'Menu Principal' ); ?>
        <div class="carousel-inner" role="listbox"> 
            <div class="item active"> 
                <?php echo wp_get_attachment_image( get_theme_mod( 'front-section-image01' ), null, null, array(
                        'class' => 'img-rounded img-responsive'
                ) ) ?> 
                <div class="carousel-caption">
                    <h2><?php echo get_theme_mod( 'front-section-title01', __( 'Copy & paste content blocks', 'aarn' ) ); ?></h2> 
                </div>                 
            </div>             
            <div class="item"> 
                <?php echo wp_get_attachment_image( get_theme_mod( 'front-section-image02' ), null, null, array(
                        'class' => 'img-rounded img-responsive'
                ) ) ?> 
                <div class="carousel-caption"> 
                    <h2><?php echo get_theme_mod( 'front-section-title02', __( 'Copy & paste content blocks', 'aarn' ) ); ?></h2> 
                </div>                 
            </div>
            <div class="item"> 
                <?php echo wp_get_attachment_image( get_theme_mod( 'front-section-image03' ), null, null, array(
                        'class' => 'img-rounded img-responsive'
                ) ) ?> 
                <div class="carousel-caption"> 
                    <h2><?php echo get_theme_mod( 'front-section-title03', __( 'Copy & paste content blocks', 'aarn' ) ); ?></h2> 
                </div>                 
            </div>             
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
                    <h2><?php echo get_theme_mod( 'blocks_content_2_3_text', __( 'Receba nossas atualizações', 'aarn' ) ); ?></h2>
                </div>
                <div class="col-sm-4 pull-right">
                    <div class="input-group">
                        <input type="email" class="form-control" placeholder="Endereço de e-mail">
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
                    <?php
                        $noticias_args = array(
                            'post_type' => 'noticias',
                            'posts_per_page' => '3',
                            'order' => 'ASC',
                            'orderby' => 'date'
                        )
                    ?>
                    <?php $noticias = new WP_Query( $noticias_args ); ?>
                    <?php if ( $noticias->have_posts() ) : ?>
                        <div <?php post_class( 'row pad30' ); ?> id="post-<?php the_ID(); ?>">
                            <?php while ( $noticias->have_posts() ) : $noticias->the_post(); ?>
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
                            <?php wp_reset_postdata(); ?>
                        </div>
                    <?php else : ?>
                        <p><?php _e( 'Sorry, no posts matched your criteria.', 'aarn' ); ?></p>
                    <?php endif; ?>
                    <div class="margin-top25">
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
        <?php get_template_part( 'rodape', 'Rodape' ); ?>

<?php get_footer(); ?>