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


    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300|Roboto" rel="stylesheet">
<?php wp_head(); ?>
</head>

<body>

<header>
    <div class="collapse bg-dark" id="navbarHeader">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-md-7 py-4">
                    <h4 class="text-white">About</h4>
                    <p class="text-muted">Add some information about the album below, the author, or any other background context. Make it a few sentences long so folks can pick up some informative tidbits. Then, link them off to some social networking sites or contact information.</p>
                </div>
                <div class="col-sm-4 offset-md-1 py-4">
                    <h4 class="text-white">Contact</h4>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white">Follow on Twitter</a></li>
                        <li><a href="#" class="text-white">Like on Facebook</a></li>
                        <li><a href="#" class="text-white">Email me</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand mr-0 mr-md-2" href="/" aria-label="Bootstrap">
            <img width="130" src="<?php echo get_theme_file_uri( 'assets/images/logo-white.png' ); ?>" alt="Logo Igreja de Nova Vida São Cristóvão">
        </a>

        <div class="navbar-nav-scroll">
            <ul class="navbar-nav bd-navbar-nav flex-row">
                <li class="nav-item">
                    <button class="" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa fa-bars text-white" style="font-size:24px;"></i>
                    </button>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">Documentation</a>
                </li>
            </ul>
        </div>

        <ul class="navbar-nav flex-row ml-md-auto d-none d-md-flex">
            <li class="nav-item">
                <a class="nav-link p-2 google" href="#" target="_blank" aria-label="Google Plus">
                    <i class="fa fa-google"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link p-2 facebook" href="#" target="_blank" aria-label="Facebook">
                    <i class="fa fa-facebook-f"></i>
                </a>
            </li>
        </ul>
    </nav>
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
                <img class="second-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Second slide">
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

    <div class="container">
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

    <!-- First box
================================================== -->

    <div class="container">
        <div id="event-box" class="row primary-shadow">
            <div class="col-lg-3 ">
                <ul class="tabs">
                    <li class="active"><button role="event-tab">Tab1</button></li>
                    <li><button role="schedule-tab">Tab2</button></li>
                </ul>
            </div>
            <div class="col-lg-9">
                <div class="tab-content">
                    <div class="tab-item" id="event-tab">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pellentesque purus et facilisis volutpat. Mauris feugiat tellus sed erat lobortis, et euismod eros laoreet. Aenean hendrerit ac dui ac faucibus. Sed at porta turpis. Fusce lacus risus, congue ac enim vel, iaculis placerat odio. Vivamus posuere lectus at enim feugiat lacinia. Sed dolor nulla, imperdiet ac lacus gravida, euismod ultrices ante. Curabitur dolor erat, pharetra non nibh ut, mattis suscipit metus. Nam faucibus vitae felis ut vestibulum. Ut vel mauris dui. Aenean at felis at lorem molestie molestie. Curabitur molestie mollis odio vitae placerat.</div>
                    <div class="tab-item" id="schedule-tab">Curabitur lorem urna, luctus eget nisi eget, pharetra imperdiet eros. Aliquam vel laoreet metus, ac rutrum mauris. Quisque ut dignissim tellus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed vel pretium libero. Sed placerat velit nec lorem sagittis, eu accumsan lacus ultrices. Integer fermentum mollis metus, non sagittis lorem finibus at. Praesent eget pharetra orci. Sed mattis urna eget tellus tristique, laoreet blandit tortor dictum. Pellentesque in ligula tortor. Nulla imperdiet orci ac dolor blandit lacinia. In ornare sapien semper, molestie leo et, semper massa.</div>
                </div>
            </div>
        </div>
    </div>
        <hr class="featurette-divider">


    <!-- FOOTER -->
    <footer class="container">
        <p class="float-right"><a href="#">Back to top</a></p>
        <p>&copy; 2017-2018 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
    </footer>
</main>

    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-507e079b058a06d3"></script>
</body>
