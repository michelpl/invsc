<!-- FOOTER -->
<div id="pre-footer"></div>
<footer class="bg-dark">
    <div class="container">
        <div class="footer float-left">
            <div class="float-left box">
                <?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
                    <div class="widget-area">
                        <?php dynamic_sidebar( 'sidebar-2' ); ?>
                    </div><!-- .widget-area -->
                <?php endif; ?>
            </div>
            <div class="float-left box">
                <?php if ( is_active_sidebar( 'sidebar-3' ) ) : ?>
                    <div class="widget-area">
                        <?php dynamic_sidebar( 'sidebar-3' ); ?>
                    </div><!-- .widget-area -->
                <?php endif; ?>
            </div>

            <div class="float-left box">
                <?php if ( is_active_sidebar( 'sidebar-4' ) ) : ?>
                    <div class="widget-area">
                        <?php dynamic_sidebar( 'sidebar-4' ); ?>
                    </div><!-- .widget-area -->
                <?php endif; ?>
            </div>

            <div class="float-left box">
                <?php if ( is_active_sidebar( 'sidebar-5' ) ) : ?>
                    <div class="widget-area">
                        <?php dynamic_sidebar( 'sidebar-5' ); ?>
                    </div><!-- .widget-area -->
                <?php endif; ?>
            </div>

            <div class="float-left box">
                <?php if ( is_active_sidebar( 'sidebar-6' ) ) : ?>
                    <div class="widget-area">
                        <?php dynamic_sidebar( 'sidebar-6' ); ?>
                    </div><!-- .widget-area -->
                <?php endif; ?>
            </div>

            <div class="float-left box">
                <?php if ( is_active_sidebar( 'sidebar-7' ) ) : ?>
                    <div class="widget-area">
                        <?php dynamic_sidebar( 'sidebar-7' ); ?>
                    </div><!-- .widget-area -->
                <?php endif; ?>
            </div>

            <div class="float-left box">
                <?php if ( is_active_sidebar( 'sidebar-8' ) ) : ?>
                    <div class="widget-area">
                        <?php dynamic_sidebar( 'sidebar-8' ); ?>
                    </div><!-- .widget-area -->
                <?php endif; ?>
            </div>

        </div>
    </div>
    <div class="container">
        <div class="copyright">
            <p>&copy; <?php echo date('Y') ?> Igreja de Nova Vida em São Cristóvão <br> Todos os direitos reservados &middot;</p>
            <div class="logo-circle">
                <img width="30" src="<?php echo get_theme_file_uri( 'assets/images/logo-circular.png' ); ?>" alt="Logo Igreja de Nova Vida São Cristóvão">
            </div>
        </div>
    </div>
</footer>

