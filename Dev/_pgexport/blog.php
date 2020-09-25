<?php get_header( 'blog' ); ?>

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
                <a href="#"> <img src="<?php echo PG_Image::getUrl( get_theme_mod( 'topo_home_logo', esc_url( get_template_directory_uri() . '/images/Untitled-1-03.png' ) ), 'large' ) ?>" class="brand-img img-responsive"> </a>
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
<section id="promo-2" class="content-block promo-2 bg-image-cover bg-concrete">
    <div class="container">
        <div class="coming-soon text-center">
            <?php wp_title(); ?>
            <!-- /.row / counter -->
        </div>
        <!-- /.coming-soon -->
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
                $noticias_query_args = array(
                    'post_type' => 'noticias',
                    'posts_per_page' => 3,
                    'paged' => get_query_var( 'paged' ) ?: 1,
                    'order' => 'ASC',
                    'orderby' => 'date'
                )
            ?>
            <?php $noticias_query = new WP_Query( $noticias_query_args ); ?>
            <?php if ( $noticias_query->have_posts() ) : ?>
                <div <?php post_class( 'row pad30' ); ?> id="post-<?php the_ID(); ?>">
                    <?php while ( $noticias_query->have_posts() ) : $noticias_query->the_post(); ?>
                        <?php PG_Helper::rememberShownPost(); ?>
                        <div class="col-md-4">
                            <?php if ( is_singular() ) : ?>
                                <?php echo PG_Image::getPostImage( null, array (300, 200), null, 'height', null ) ?>
                            <?php else : ?>
                                <a href="<?php echo esc_url( get_permalink() ); ?>"><?php echo PG_Image::getPostImage( null, array (300, 200), null, 'height', null ) ?></a>
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
<section class="content-block-nopad bg-deepocean footer-wrap-1-3">
    <div class="container footer-1-3">
        <div class="col-md-4 pull-left">
            <img src="<?php echo PG_Image::getUrl( get_theme_mod( 'footer_logo', esc_url( get_template_directory_uri() . '/images/brand/pgblocks-logo-white.png' ) ), 'large' ) ?>" class="brand-img img-responsive">
            <ul class="social social-light">
                <li>
                    <a href="#"><?php echo get_theme_mod( 'footer_face_link', '<i class="fa fa-2x fa-facebook"></i>' ); ?></a>
                </li>
                <li>
                    <a href="<?php echo get_theme_mod( 'footer_instagram_link', '#' ); ?>"><i class="fa fa-2x fa-instagram"></i></a>
                </li>
            </ul>
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

<?php get_footer( 'blog' ); ?>