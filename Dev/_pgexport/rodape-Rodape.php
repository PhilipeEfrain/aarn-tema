<section class="content-block-nopad bg-deepocean footer-wrap-1-3">
    <div class="container footer-1-3">
        <div class="col-md-4 pull-left">
            <?php echo PG_Image::removeSizeAttributes( wp_get_attachment_image( get_theme_mod( 'blocks_footer_1_3_image' ), null, null, array(
                    'class' => 'brand-img img-responsive'
            ) ), 'both' ); ?>
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