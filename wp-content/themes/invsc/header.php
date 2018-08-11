<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Invsc
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/carousel.css'; ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
    <script src="<?php echo get_template_directory_uri() . '/assets/js/tabs.js'; ?>"></script>
    <script src="<?php echo get_template_directory_uri() . '/assets/js/show-hide.js'; ?>"></script>


    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700|Roboto:100,300" rel="stylesheet">
<?php wp_head(); ?>
</head>

<body>

<header>
    <div class="bg-dark fixed-top">
        <div class="container">
            <div class="row main-menu">
                <div class="col-lg-12">
                    <div class="logo float-left">
                        <img width="130" src="<?php echo get_theme_file_uri( 'assets/images/logo-white.png' ); ?>" alt="Logo Igreja de Nova Vida São Cristóvão">
                    </div>
                    <div class="menu float-left">
                        <button class="menu-icon float-left show-hide" type="button" data="hide-menu">
                            <i class="fa fa-bars text-white" style="font-size:24px;"></i>
                        </button>
                        <ul class="list-unstyled list-inline float-left">
                            <li><a href="#" class="text-white">Home</a></li>
                            <li><a href="#" class="text-muted">Outros links</a></li>
                        </ul>
                    </div>
                    <div class="social float-right">
                        <ul class="list-unstyled list-inline">
                            <li>
                                <a class="google text-muted" href="#" target="_blank" aria-label="Google Plus">
                                    <i class="fa fa-google"></i>
                                </a>
                            </li>
                            <li>
                                <a class="facebook text-muted" href="#" target="_blank" aria-label="Facebook">
                                    <i class="fa fa-facebook-f"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div id="hide-menu" class="container show-hide-container" style="display: none;">
            <div class="sub-menu float-left " >
                <div class="float-left box">
                    <h4>Mais Páginas</h4>
                    <ul class="list-unstyled">
                        <li><p>Lorem Ipsum</p></li>
                        <li><a href="#" class="text-muted">Outros links</a></li>
                        <li><a href="#" class="text-muted">Lorem Ipsum Dolor</a></li>
                        <li><a href="#" class="text-muted">Ipsum</a></li>
                        <li><a href="#" class="text-muted">Outro sit anet</a></li>
                    </ul>
                </div>
                <div class="float-left box">
                    <h4>Outras Páginas</h4>
                    <ul class="list-unstyled">
                        <li><p>Lorem Ipsum</p></li>
                        <li><a href="#" class="text-muted">Mais um link</a></li>
                        <li><a href="#" class="text-muted">Outros link</a></li>
                        <li><a href="#" class="text-muted">Mais Delcaraus um</a></li>
                        <li><a href="#" class="text-muted">Contato</a></li>
                    </ul>
                </div>
                <div class="float-left box">
                    <h4>Páginas a mais</h4>
                    <ul class="list-unstyled">
                        <li><p>Lorem Ipsum</p></li>
                        <li><a href="#" class="text-muted">Contato</a></li>
                        <li><a href="#" class="text-muted">Mais um link</a></li>
                    </ul>
                </div>
                <div class="close float-right">
                    <button class="show-hide" data="hide-menu">
                        <i class="fa fa-times"></i>
                    </button>
                </div>
                <div class="social float-right box">
                    <h4>Siga-nos</h4>
                    <ul class="list-unstyled">
                        <li><p>INVSC nas redes sociais!</p></li>
                        <li><a href="#" class="text-muted">Google+</a></li>
                        <li><a href="#" class="text-muted">Facebook</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>

<main role="main">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="first-slide" height="1900" src="<?php echo get_theme_file_uri( 'assets/images/cross-background.png' ); ?>" alt="First slide">
                <div class="container">
                    <div class="carousel-caption text-left">
                        <h1>Igreja de Nova Vida em São Cristóvão</h1>
                        <p>
                            Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec<br>
                            id elit non mi porta gravida at eget metus. Nullam id dolor id<br>
                            nibh ultricies vehicula ut id elit.
                        </p>
                        <img class="logoSlide" src="<?php echo get_theme_file_uri( 'assets/images/logo-blue.png' ); ?>" alt="INVSC Logo">
                        <p><a class="btn btn-lg btn-transparent" href="#" role="button">SAIBA MAIS</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="first-slide" height="1900" src="<?php echo get_theme_file_uri( 'assets/images/slide2.jpg' ); ?>" alt="First slide">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>Another example headline.</h1>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="third-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Third slide">
                <div class="container">
                    <div class="carousel-caption text-right">
                        <h1>One more for good measure.</h1>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">P</span>
        </a>
    </div>


    <!-- First box
    ================================================== -->

    <div id="first-box" class="container">
        <div class="row">
            <div id="news-box" class="col-lg-12 primary-shadow">
                <div class="row">
                    <div id="first-news" class="col-lg-6">
                        <div id="first-news-text" class="container">
                            <h2><a href="#" class="color-primary">What is lorem ipsum?</a></h2>
                            <p><a href="#">Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod.Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna. Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod.</a></p>
                        </div>
                        <div class="container">
                            <div class="addthis_inline_share_toolbox float-left"></div>
                            <a class="read-more color-primary float-right" href="#">Ler post completo <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                    <div id="other-news" class="col-lg-4">
                        <ul class="row">
                            <li class="col-lg-6">
                                <div class="container">
                                    <h3><a href="#" class="">The Trip That Change  My Life</a></h3>
                                    <p><a href="#">Donec sed odio dui. a ac consectetur ac, vestibulum at... </a></p>
                                </div>
                            </li>
                            <li class="col-lg-6">
                                <div class="container">
                                    <h3><a href="#" class="">The Trip That Change  My Life</a></h3>
                                    <p><a href="#">Donec sed odio dui. a ac consectetur ac, vestibulum at... </a></p>
                                </div>
                            </li>
                            <li class="col-lg-6">
                                <div class="container">
                                    <h3><a href="#" class="">The Trip That Change  My Life</a></h3>
                                    <p><a href="#">Donec sed odio dui. a ac consectetur ac, vestibulum at... </a></p>
                                </div>
                            </li>
                            <li class="col-lg-6">
                                <div class="container">
                                    <h3><a href="#" class="">The Trip That Change  My Life</a></h3>
                                    <p><a href="#">Donec sed odio dui. a ac consectetur ac, vestibulum at... </a></p>
                                </div>
                            </li>
                        </ul>

                    </div>
                    <div id="social-area" class="col-lg-2">
                        <ul>
                            <li class="google float-left">
                                <a class="text-white float-left" href="#" target="_blank" aria-label="Google Plus">
                                    <i class="fa fa-google"></i>
                                    <p class="float-right"><span>Seguir</span> <img src="<?php echo get_theme_file_uri( 'assets/images/plus-icon.png' ); ?>" ></p>
                                </a>
                            </li>
                            <li class="facebook float-left">
                                <a class="text-white float-left" href="#" target="_blank" aria-label="Facebook">
                                    <i class="fa fa-facebook-f"></i>
                                    <p class="float-right"><span>Seguir</span> <img src="<?php echo get_theme_file_uri( 'assets/images/plus-icon.png' ); ?>" ></p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
    </div><!-- /.container -->

    <!-- Event box
================================================== -->

    <div id="second-box" class="container">
        <div class="row">
            <div class="col-lg-12 primary-shadow">
                <div id="event-box" class="row">
                    <div id="tab-menu" class="col-lg-3">
                        <ul class="tabs">
                            <li class="active" role="event-tab">
                                <button>
                                    <span id="date">23</span>
                                    <p><span>Calendário de eventos</span> <i class="arrow fa fa-angle-right"></i></p>
                                </button>
                            </li>
                            <li role="schedule-tab">
                                <button>
                                    <img src="<?php echo get_theme_file_uri( 'assets/images/clock-icon-gray.png' ); ?>" alt="Calendário">
                                    <p><span>Programação semanal</span> <i class="arrow fa fa-angle-right"></i></p>
                                </button>
                            </li>
                            <li role="full-tab">
                                <button id="full-tab-button" class="primary">
                                    <i class="big-icon fa fa-clock"></i>
                                    <p><span>Ver Programação completa</span> <i class="arrow fa fa-angle-right"></i></p>
                                </button>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content col-lg-9">
                            <div class="tab-item" id="event-tab">
                                <ul class="list-unstyled">
                                    <li>
                                        <div class="float-left date"><a href="#">26 Dez</a></div>
                                        <div class="float-left title" style="background-image: url('<?php echo get_theme_file_uri( 'assets/images/corner-white.png' ); ?>');">
                                            <a href="#" class="float-left">Lorem ipsum dolor sit amet</a>
                                            <a class="btn btn-primary float-right" type="button">Saiba mais</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="float-left date"><a href="#">26 Dez</a></div>
                                        <div class="float-left title" style="background-image: url('<?php echo get_theme_file_uri( 'assets/images/corner-white.png' ); ?>');">
                                            <a href="#" class="float-left">Lorem ipsum dolor sit amet</a>
                                            <a class="btn btn-primary float-right" type="button">Saiba mais</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="float-left date"><a href="#">26 Dez</a></div>
                                        <div class="float-left title" style="background-image: url('<?php echo get_theme_file_uri( 'assets/images/corner-white.png' ); ?>');">
                                            <a href="#" class="float-left">Lorem ipsum dolor sit amet</a>
                                            <a class="btn btn-primary float-right" type="button">Saiba mais</a>
                                        </div>
                                    </li>
                                    <li style="margin-bottom: -3px;">
                                        <div class="float-left date"><a href="#">26 Dez</a></div>
                                        <div class="float-left title" style="background-image: url('<?php echo get_theme_file_uri( 'assets/images/corner-white.png' ); ?>');">
                                            <a href="#" class="float-left">Lorem ipsum dolor sit amet</a>
                                            <a class="btn btn-primary float-right" type="button">Saiba mais</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-item" id="schedule-tab">
                                <ul class="list-unstyled">
                                    <li>
                                        <div class="float-left date"><a href="#">12 Jan</a></div>
                                        <div class="float-left title" style="background-image: url('<?php echo get_theme_file_uri( 'assets/images/corner-white.png' ); ?>');">
                                            <a href="#" class="float-left">Lorem ipsum dolor sit amet</a>
                                            <a class="btn btn-primary float-right" type="button">Saiba mais</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="float-left date"><a href="#">12 Fev</a></div>
                                        <div class="float-left title" style="background-image: url('<?php echo get_theme_file_uri( 'assets/images/corner-white.png' ); ?>');">
                                            <a href="#" class="float-left">Lorem ipsum dolor sit amet</a>
                                            <a class="btn btn-primary float-right" type="button">Saiba mais</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="float-left date"><a href="#">21 Mar</a></div>
                                        <div class="float-left title" style="background-image: url('<?php echo get_theme_file_uri( 'assets/images/corner-white.png' ); ?>');">
                                            <a href="#" class="float-left">Lorem ipsum dolor sit amet</a>
                                            <a class="btn btn-primary float-right" type="button">Saiba mais</a>
                                        </div>
                                    </li>
                                    <li style="margin-bottom: -3px;">
                                        <div class="float-left date"><a href="#">31 Jul</a></div>
                                        <div class="float-left title" style="background-image: url('<?php echo get_theme_file_uri( 'assets/images/corner-white.png' ); ?>');">
                                            <a href="#" class="float-left">Lorem ipsum dolor sit amet</a>
                                            <a class="btn btn-primary float-right" type="button">Saiba mais</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Video box
================================================== -->

    <div id="third-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 primary-shadow">
                    <div class="row" id="video-box">
                        <div class="col-lg-8">
                            <iframe width="100%" height="350" src="https://www.youtube.com/embed/5jLQV6OJZpE?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                        </div>
                        <div class="col-lg-4 text">
                            <h2>Pellentesque pulvinar nulla adipiscing</h2>
                            <p>Vestibulum molestie nunc elit. Aliquam ac tempus nunc.
                            Praesent maximus pulvinar sollicitudin. In convallis
                            elementum gravida.
                            </p>
                            <p class="date">26/12</p>
                        </div>
                        <div class="arrow" style="background-image: url('<?php echo get_theme_file_uri( 'assets/images/arrow-video-area.png' ); ?>')">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 video-aux-text">
                    <p class="ultimas">Últimas</p>
                    <p class="pregacoes">pregações</p>
                    <a href="#" class="ver-todas">Ver todas</a>
                </div>
            </div>
        </div>
    </div>



    <!-- FOOTER -->
    <footer class="container">
        <p class="float-right"><a href="#">Back to top</a></p>
        <p>&copy; 2017-2018 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
    </footer>
</main>

    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-507e079b058a06d3"></script>
</body>
