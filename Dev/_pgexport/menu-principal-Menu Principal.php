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
                <a href="#"> <?php get_template_part( 'logo-aarn', 'logo AARN' ); ?> </a>
            </div>
            <!-- Navigation -->
            <div class="collapse navbar-collapse">
                <?php if ( has_nav_menu( 'primary' ) ) : ?>
                    <?php wp_nav_menu( array(
                            'menu_class' => 'nav navbar-nav navbar-right',
                            'container' => '',
                            'theme_location' => 'primary',
                            'fallback_cb' => 'wp_bootstrap4_navwalker::fallback',
                            'walker' => new wp_bootstrap4_navwalker()
                    ) ); ?>
                <?php endif; ?>
                <!--//nav-->
            </div>
            <!--// End Navigation -->
        </div>
        <!--// End Container -->
    </nav>
    <!--// End Navbar -->
</header>