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
<html <?php language_attributes(); ?>>
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
            <div class="row main-menu" style="margin: 0">
                <div class="col-lg-12">
                    <div class="logo float-left">
                        <a href="<?php echo get_home_url(); ?>"><img width="130" src="<?php echo get_theme_file_uri( 'assets/images/logo-white.png' ); ?>" alt="Logo Igreja de Nova Vida São Cristóvão"></a>
                    </div>
                    <div class="menu float-left">
                        <button class="menu-icon float-left show-hide" type="button" data="hide-menu">
                            <i class="fa fa-bars text-white" style="font-size:24px;"></i>
                        </button>
                        <div class="float-left">
                            <?php
                            wp_nav_menu( array(
                                'theme_location' => 'top',
                                'menu_class'     => 'list-unstyled list-inline float-left',
                            ) );
                            ?>
                        </div>
                    </div>
                    <div class="social float-right">
                        <ul class="list-unstyled list-inline">
                            <li>
                                <a class="youtube text-muted" href="https://www.youtube.com/user/mauriciofortunato" target="_blank" aria-label="Youtube">
                                    <i class="fa fa-youtube"></i>
                                </a>
                            </li>
                            <li>
                                <a class="facebook text-muted" href="https://facebook.com/invsc" target="_blank" aria-label="Facebook">
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
                    <?php
                        $menu = wp_get_nav_menu_object("sub-menu-1" );
                        if ($menu->count > 0) {

                            echo "<h4>" . $menu->name . "</h4>";
                            echo "<hr>";

                            wp_nav_menu([
                                'theme_location' => 'sub-menu-1',
                                'menu_class'     => 'list-unstyled sub-menu-ul',
                            ]);
                        }
                    ?>
                </div>
                <div class="float-left box">
                    <?php
                    $menu = wp_get_nav_menu_object("sub-menu-2" );
                    if ($menu->count > 0) {

                        echo "<h4>" . $menu->name . "</h4>";
                        echo "<hr>";

                        wp_nav_menu([
                            'theme_location' => 'sub-menu-2',
                            'menu_class'     => 'list-unstyled sub-menu-ul',
                        ]);
                    }
                    ?>
                </div>
                <div class="float-left box">
                    <?php
                    $menu = wp_get_nav_menu_object("sub-menu-3" );
                    if ($menu->count > 0) {

                        echo "<h4>" . $menu->name . "</h4>";
                        echo "<hr>";

                        wp_nav_menu([
                            'theme_location' => 'sub-menu-3',
                            'menu_class'     => 'list-unstyled sub-menu-ul',
                        ]);
                    }
                    ?>
                </div>
                <div class="float-left box">
                    <?php
                    /*$menu = wp_get_nav_menu_object("sub-menu-4" );
                    if ($menu->count > 0) {

                        echo "<h4>" . $menu->name . "</h4>";
                        echo "<hr>";

                        wp_nav_menu([
                            'theme_location' => 'sub-menu-4',
                            'menu_class'     => 'list-unstyled sub-menu-ul',
                        ]);
                    }*/
                    get_search_form();
                    ?>
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
                        <li><a href="https://facebook.com/invsc" target="_blank" class="text-muted facebook">Facebook</a></li>
                        <li><a href="https://www.youtube.com/user/mauriciofortunato" target="_blank" class="text-muted youtube">Youtube</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>
