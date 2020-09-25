<?php get_header( 'page' ); ?>

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
<?php $image_attributes = !empty( get_the_ID() ) ? wp_get_attachment_image_src( PG_Image::isPostImage() ? get_the_ID() : get_post_thumbnail_id( get_the_ID() ), 'large' ) : null; ?>
<div class="jumbotron jumbotron-fluid" style="padding-top: 700px; padding-bottom: 0px; background-image: url('<?php echo esc_url( get_template_directory_uri() ); ?>/images/dark-logs-bg.jpg'); background-repeat: no-repeat; background-size: cover;<?php if($image_attributes) echo 'background-image:url(\''.$image_attributes[0].'\')' ?>">
    <div class="container" style="background-color: rgba(12, 12, 12, 0.61); color: #ffffff; padding-left: 80px; padding-right: 25px; width: 100%;">
        <h1 class="display-4"><?php the_title(); ?></h1>
    </div>
</div>
<main id="main"> 
    <section class="content-1-5 content-block">
        <div class="container">
            <div class="row">
                <?php if ( have_posts() ) : ?>
                    <?php while ( have_posts() ) : the_post(); ?>
                        <?php PG_Helper::rememberShownPost(); ?>
                        <div <?php post_class( 'col-lg-9 col-md-8 col-sm-12' ); ?> id="post-<?php the_ID(); ?>">
                            <h1><?php the_title(); ?></h1>
                            <?php the_content(); ?>
                        </div>
                    <?php endwhile; ?>
                <?php else : ?>
                    <p><?php _e( 'Sorry, no posts matched your criteria.', 'aarn' ); ?></p>
                <?php endif; ?>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>             
    <!-- /container -->             
</main>
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

<?php get_footer( 'page' ); ?>