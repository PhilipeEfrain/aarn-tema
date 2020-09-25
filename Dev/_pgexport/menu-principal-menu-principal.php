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
                <a href="<?php echo esc_url( home_url() ); ?>"> <?php echo wp_get_attachment_image( get_theme_mod( 'blocks_header_1_logo' ), 'medium', null, array(
                            'class' => 'brand-img img-responsive'
                    ) ) ?> </a>
            </div>
            <!-- Navigation -->
            <div class="collapse navbar-collapse">
                <?php wp_nav_menu( array(
                        'menu' => 'primary',
                        'menu_class' => 'nav navbar-nav navbar-right',
                        'container' => '',
                        'depth' => '10',
                        'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
                        'walker' => new wp_bootstrap_navwalker()
                ) ); ?>
                <!--//nav-->
            </div>
            <!--// End Navigation -->
        </div>
        <!--// End Container -->
    </nav>
    <!--// End Navbar -->
</header>