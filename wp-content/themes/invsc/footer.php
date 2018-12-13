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
                <h4>Localização</h4>
                <hr>
                <ul class="list-unstyled">
                    <li><p>Endereço</p></li>
                    <li><span class="text-muted">Rua General Argolo, 60, São Cristóvão</span></li>
                    <li><span class="text-muted">Rio de Janeiro - RJ</span></li>
                    <li><span class="text-muted">CEP 20921-395</span></li>
                    <li><p>Telefones</p></li>
                    <li><span class="text-muted">Tel: (21)3890-3867</span></li>
                    <li><span class="text-muted">Fax: (21)2585-1227</span></li>
                    <li><p>E-mails</p></li>
                    <li><span class="text-muted">Informações: invsc@invsc.org.br</span></li>
                    <li><span class="text-muted">Pr Mauricio Lopes Fortunato: mauricio@invsc.org.br</span></li>
                </ul>
            </div>
            <!--div class="float-left box">
                <h4>Contato</h4>
                <hr>
                <ul class="list-unstyled">
                    <li><p>Telefones</p></li>
                    <li><span class="text-muted">Tel: (21)3890-3867</span></li>
                    <li><span class="text-muted">Fax: (21)2585-1227</span></li>
                    <li><p>E-mails</p></li>
                    <li><span class="text-muted">Informações: invsc@invsc.org.br</span></li>
                    <li><span class="text-muted">Pr Mauricio Lopes Fortunato: mauricio@invsc.org.br</span></li>
                </ul>
            </div-->
            <div class="float-left box full-width">
                <h4>Programação semanal</h4>
                <hr>
                <ul class="list-unstyled">
                    <li><p>Domingos</p></li>
                    <li><span class="text-muted">Contato</span></li>
                    <li><span class="text-muted">Mais um link</span></li>
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

