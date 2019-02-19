<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Invsc
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

    <main role="main">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <?php
                $args = [
                    'post_type' => 'slides',
                    'order' => 'desc'
                ];
                $querySlides = new WP_Query($args);
                if ($querySlides->have_posts()) {
                    $count = 0;
                    $class = "active";
                    foreach ($querySlides->posts as $post) {
                        if ($count != 0) {
                            $class = "";
                        } ?>
                        <li data-target="#myCarousel" data-slide-to="0" class="<?php echo $class; ?>"></li>
                    <?php
                        $count++;
                    }
                }
            ?>

        </ol>
        <div class="carousel-inner">
            <?php
            $args = [
                'post_type' => 'slides',
                'order' => 'ASC'
            ];
            $querySlides = new WP_Query($args);
            if ($querySlides->have_posts()) {
                $count = 0;
                $class = "active";
                foreach ($querySlides->posts as $post) {
                    if ($count != 0) {
                        $class = "";
                    }
                    $slideLink = get_post_meta($post->ID, 'link');
                    $slideVideo = get_post_meta($post->ID, 'video');

            ?>
                    <div class="carousel-item <?php echo $class ?>">

                        <?php if(!empty($slideVideo[0])) { ?>
                            <video width="100%" style="width: 100%" autoplay loop>
                                    <source src="<?php echo $slideVideo[0]; ?>" type="video/webm">
                                Your browser does not support the video tag.
                            </video>
                        <?php
                            } else {
                                echo get_the_post_thumbnail();
                        } ?>

                        <div class="container">
                            <div class="carousel-caption text-left">

                                <?php echo $post->post_content; ?>


                            </div>
                        </div>
                    </div>

                <?php
                    $count++;
                }
            }
            ?>
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

                    <?php
                        $query = new WP_Query(['posts_per_page' => 4, 'cat' => 4]);
                        if ( $query->have_posts() ) {
                            foreach ($query->posts as $index => $post) {

                                if ($index === 0) {
                                    if (strlen($post->post_excerpt) < 3) {
                                        $content = explode('<!--more-->', $post->post_content);
                                        $post->post_excerpt = $content[0];
                                    }

                                    if (strlen($post->post_excerpt) < 3) {
                                        $post->post_excerpt = $post->post_content;
                                    }
                                    ?>

                                    <div id="first-news" class="col-lg-6 thumb-cover" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>')">
                                        <!--img src="<?php echo get_theme_file_uri( 'assets/images/news-flag.png'); ?>" style="position: absolute"/-->
                                        <div id="first-news-text" class="container">
                                            <h2><a href="<?php echo get_permalink(); ?>" class="color-primary"><?php echo $post->post_title; ?></a></h2>
                                            <p>
                                                <a href="<?php echo get_permalink(); ?>"><?php echo $post->post_excerpt; ?></a>
                                            </p>

                                        </div>
                                        <div class="container">
                                            <div class="addthis_inline_share_toolbox float-left"></div>
                                            <a class="read-more color-primary float-right" href="<?php echo get_permalink(); ?>">Ler post completo <i class="fa fa-angle-right"></i></a>
                                        </div>
                                    </div>

                                <?php
                                    break;
                                }
                            }
                        }
                    ?>


                    <div id="other-news" class="col-lg-4">
                        <ul class="row">
                            <?php
                                if ( $query->have_posts() ) {
                                    foreach ($query->posts as $index => $post) {
                                        if (strlen($post->post_excerpt) < 3) {
                                            $content = explode('<!--more-->', $post->post_content);
                                            $post->post_excerpt = $content[0];
                                        }


                                        if ($index > 0) {
                                            ?>

                                            <li class="col-lg-6">
                                                <div class="container thumb-cover" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>')">

                                                    <h3><a href="<?php echo get_permalink(); ?>" class=""><?php echo $post->post_title; ?></a></h3>
                                                    <p><a href="<?php echo get_permalink(); ?>"><?php echo strip_tags($post->post_excerpt); ?> </a></p>
                                                </div>
                                            </li>
                                            <?php
                                        }
                                    }
                                    wp_reset_postdata();
                                }
                            ?>
                            <li class="col-lg-6">
                                <div id="all-news">
                                    <p><a href="<?php echo get_category_link(4); ?>">VER MAIS NOTÍCIAS
                                            <i class="fa fa-angle-right"></i></a>
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div id="social-area" class="col-lg-2">
                        <ul>
                            <li class="facebook float-left">
                                <a class="text-white float-left" href="https://facebook.com/invsc" target="_blank" aria-label="Facebook">
                                    <i class="fa fa-facebook-f"></i>
                                    <p class="float-right"><span>Seguir</span> <img src="<?php echo get_theme_file_uri( 'assets/images/plus-icon.png' ); ?>" ></p>
                                </a>
                            </li>
                            <li class="youtube float-left">
                                <a class="text-white float-left" href="https://www.youtube.com/user/mauriciofortunato" target="_blank" aria-label="Youtube">
                                    <i class="fa fa-youtube"></i>
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
                                        <a href="#event">
                                            <span id="date"><?php echo date('d'); ?></span>
                                            <p><span>Calendário de eventos</span> <i class="arrow fa fa-angle-right"></i></p>
                                        </a>
                                    </button>
                                </li>
                                <li role="schedule-tab">
                                    <button>
                                        <a href="#schedule">
                                            <img src="<?php echo get_theme_file_uri( 'assets/images/clock-icon-gray.png' ); ?>" alt="Calendário">
                                            <p><span>Programação semanal</span> <i class="arrow fa fa-angle-right"></i></p>
                                        </a>
                                    </button>
                                </li>
                                <li role="boletim-tab">
                                    <button>
                                        <a href="#boletim">
                                            <i class="big-icon fa fa-phone"></i>
                                            <p><span>Boletim mensal</span> <i class="arrow fa fa-angle-right"></i></p>
                                        </a>
                                    </button>
                                </li>
                                <li class="full-tab" role="full-tab">
                                    <button id="full-tab-button" class="primary">
                                        <a href="events" class="primary">
                                            <i class="big-icon fa fa-clock"></i>
                                            <p><span class="primary">Ver Programação completa</span> <i class="arrow fa fa-angle-right"></i></p>
                                        </a>
                                    </button>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content col-lg-9">
                            <div class="tab-item" id="event-tab">
                                <ul class="list-unstyled">
                                    <?php
                                    $args = [
                                        'posts_per_page' => 4,
                                        'post_type' => 'events',
                                        'meta_key' => 'date',
                                        'orderby' => 'meta_value',
                                        'order' => 'asc'
                                    ];
                                    $queryEvents = new WP_Query($args);
                                    if ($queryEvents->have_posts()) {
                                        $i = 1;
                                        foreach ($queryEvents->posts as $post) {
                                            $eventDate = get_post_meta( $post->ID, 'date');
                                            $eventMonth = date("m", strtotime($eventDate[0]));
                                            $eventDay = date("d", strtotime($eventDate[0]));
                                            $ptMonth = $month[$eventMonth];
                                            $last = '';

                                            if ($i == ($queryEvents->post_count)) {
                                                $last = 'last-post';
                                            }
                                            $i++;

                                    ?>
                                            <li class="<?php echo $last;?>">
                                                <div class="float-left date"><a href="<?php echo get_permalink(); ?>"><?php echo $eventDay . ' ' . $month_abbrev[$ptMonth]; ?></a></div>
                                                <div class="float-left title" style="background-image: url('<?php echo get_theme_file_uri( 'assets/images/corner-white.png' ); ?>');">
                                                    <a href="<?php echo get_permalink(); ?>" class="float-left"><?php echo $post->post_title; ?></a>
                                                    <a class="btn btn-primary float-right" href="<?php echo get_permalink(); ?>" type="button">Saiba mais</a>
                                                </div>
                                            </li>
                                    <?php
                                        }
                                        wp_reset_postdata();
                                    }
                                    ?>
                                </ul>
                            </div>

                            <div class="tab-item" id="schedule-tab">
                                <?php
                                $query = new WP_Query(['posts_per_page' => 4, 'cat' => 8, 'order' => 'ASC']);
                                if ( $query->have_posts() ) {
                                    foreach ($query->posts as $index => $post) { ?>

                                    <div class="float-left title">
                                        <h4><?php echo $post->post_title; ?></h4>
                                        <?php echo $post->post_content; ?>
                                    </div>
                                    <?php }
                                }
                                wp_reset_postdata();
                                ?>
                            </div>

                            <div class="tab-item" id="boletim-tab">
                                <ul>Boletim de fevereiro</ul>
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
                            <?php
                                    $args = [
                                        'posts_per_page' => 1,
                                        'post_type' => 'videos',
                                    ];
                                    $queryVideos = new WP_Query($args);
                                    if ($queryVideos->have_posts()) {

                                        foreach ($queryVideos->posts as $post) {
                                            $videoLink = get_post_meta($post->ID, 'link')[0];
                                            $split = explode('?v=', $videoLink);
                                            $videoId = $split[1];
                            ?>
                                            <div class="col-lg-8">
                                                <iframe width="100%" height="350" src="https://www.youtube.com/embed/<?php echo $videoId; ?>?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                            </div>
                                            <div class="col-lg-4 text">
                                                <h2><a href="https://www.youtube.com/embed/<?php echo $videoId; ?>" target="_blank"><?php echo $post->post_title; ?></a></h2>
                                                <p><a href="https://www.youtube.com/embed/<?php echo $videoId; ?>" target="_blank"><?php echo $post->post_content; ?></a></p>
                                                <a href="https://www.youtube.com/embed/<?php echo $videoId; ?>" target="_blank"><p class="date"><?php echo date("d/m", strtotime($post->post_date)); ?></p></a>
                                            </div>
                            <?php
                                        }
                                    }
                            ?>

                            <div class="arrow" style="background-image: url('<?php echo get_theme_file_uri( 'assets/images/arrow-video-area.png' ); ?>')">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 video-aux-text">
                        <p class="ultimas">Últimas</p>
                        <p class="pregacoes">mensagens</p>
                        <a href="https://www.youtube.com/user/mauriciofortunato/" class="ver-todas" target="_blank">Ver todas</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Address box
    ================================================== -->

        <div id="fourth-box" style="background: url('<?php echo get_theme_file_uri( 'assets/images/sky-background.png' ); ?>'">
            <div class="container">
                <div class="row">
                    <div id="address-box" class="col-lg-12">
                        <div class="row">
                            <div class="map col-lg-8 col-md-12">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3675.4302804264103!2d-43.226789684524455!3d-22.897495043297358!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x997eef0a6b158b%3A0xbe693bd5fe0e4348!2sRua+General+Argolo%2C+60+-+S%C3%A3o+Crist%C3%B3v%C3%A3o%2C+Rio+de+Janeiro+-+RJ%2C+20921-395!5e0!3m2!1spt-BR!2sbr!4v1534027492640" width="100%" height="520" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>
                            <div class="address col-lg-4">
                                <h2>Localização e Contato</h2>
                                <div class="text-box">
                                    <div class="phone">
                                        <i class="fa fa-phone"></i>
                                        <div class="text">
                                            <?php if ( is_active_sidebar( 'phone' ) ) : ?>
                                                <div class="widget-area">
                                                    <?php dynamic_sidebar( 'phone' ); ?>
                                                </div><!-- .widget-area -->
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="full-address">
                                        <i class="fa fa-map-marker"></i>
                                        <div class="text">
                                            <?php if ( is_active_sidebar( 'address' ) ) : ?>
                                                <div class="widget-area">
                                                    <?php dynamic_sidebar( 'address' ); ?>
                                                </div><!-- .widget-area -->
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="mail">
                                        <i class="fa fa-envelope"></i>
                                        <div class="text">
                                            <?php if ( is_active_sidebar( 'email' ) ) : ?>
                                                <div class="widget-area">
                                                    <?php dynamic_sidebar( 'email' ); ?>
                                                </div><!-- .widget-area -->
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="social">
                                    <p><a href="https://facebook.com/invsc" class="facebook" target="_blank"><i class="fa fa-facebook-f"></i> <span>Facebook</span></a></p>
                                    <p><a href="https://www.youtube.com/user/mauriciofortunato" target="_blank" class="youtube"><i class="fa fa-youtube"></i> <span>Youtube</span></a></p>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div id="message">
                            <?php if ( is_active_sidebar( 'verse' ) ) : ?>
                                <div class="widget-area">
                                    <?php dynamic_sidebar( 'verse' ); ?>
                                </div><!-- .widget-area -->
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php  get_footer(); ?>

    </main>
</body>
</html>