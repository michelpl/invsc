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
            <div class="float-left" style="width: 100%;">
                <div class="float-left box full-width">
                    <h4>Domingos</h4>
                    <hr>
                    <ul class="list-unstyled">
                        <li><span class="text-muted">9:00h - EBD dos jovens (3º andar)</span></li>
                        <li><span class="text-muted">9:30h - EBD adultos (templo)</span></li>
                        <li><span class="text-muted">9:30h - EBD doutrinas básicas (2º andar)</span></li>
                        <li><span class="text-muted">10:30h - Culto</span></li>
                        <li><span class="text-muted">19:00h - Culto</span></li>
                        <li><p>1º domingo do mês</p></li>
                        <li><span class="text-muted">- Ceia e entrega dos alimentos para a cesta básica nos dois cultos</span></li>
                        <li><span class="text-muted">- 8:00h 1º domingo do mês - Consagração dos ministérios</span></li>
                    </ul>

                </div>
                <div class="float-left box full-width">
                    <h4>Terças</h4>
                    <hr>
                    <ul class="list-unstyled">
                        <li><span class="text-muted">19:30h Culto da família</span></li>
                        <li><p>1º terça do mês</p></li>
                        <li><span class="text-muted">- Ceia e entrega dos alimentos para a cesta básica</span></li>
                    </ul>
                </div>
                <div class="float-left box full-width">
                    <h4>Quintas</h4>
                    <hr>
                    <ul class="list-unstyled">
                        <li><span class="text-muted">19:30h Culto</span></li>
                        <li><p>1º quinta do mês</p></li>
                        <li><span class="text-muted">- Ceia e entrega dos alimentos para a cesta básica</span></li>
                    </ul>
                </div>
                <div class="float-left box full-width">
                    <h4>Sábados</h4>
                    <hr>
                    <ul class="list-unstyled">
                        <li><span class="text-muted">9:00h - EBD dos jovens (3º andar)</span></li>
                    </ul>
                </div>
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

