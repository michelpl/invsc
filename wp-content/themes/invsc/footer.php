<!-- FOOTER -->
<div id="pre-footer"></div>
<footer class="bg-dark">
    <div class="container">
        <div class="sub-menu float-left">
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
                <h4>Programação semanal</h4>
                <hr>
                <ul class="list-unstyled">
                    <li><p>Lorem Ipsum</p></li>
                    <li><a href="#" class="text-muted">Contato</a></li>
                    <li><a href="#" class="text-muted">Mais um link</a></li>
                </ul>
            </div>
            <div class="float-left box">
                <h4>Localização e contato</h4>
                <hr>
                <ul class="list-unstyled">
                    <li><p>Lorem Ipsum</p></li>
                    <li><a href="#" class="text-muted">Contato</a></li>
                    <li><a href="#" class="text-muted">Mais um link</a></li>
                </ul>
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

