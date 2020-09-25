<?php get_header(); ?>

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
<section id="promo-2" class="content-block promo-2 bg-image-cover bg-concrete">
    <div class="container">
        <div class="coming-soon text-center">
            <h1><?php _e( 'Blog', 'aarn' ); ?></h1>
            <!-- /.row / counter -->
        </div>
        <!-- /.coming-soon -->
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
                        'posts_per_page' => 99999,
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
        </div>
        <!-- /.row -->
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

<?php get_footer(); ?>