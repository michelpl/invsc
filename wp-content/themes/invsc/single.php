<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Invsc
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>


<main role="main">
    <?php
    if (have_posts()) :
        while (have_posts()) :
        the_post();
    ?>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
            </ol>
            <div class="carousel-inner">
                    <div class="carousel-item active">
                        <?php the_post_thumbnail(); ?>

                        <div class="container">
                            <div class="carousel-caption text-left">
                                <h1 class="color-primary"></h1>
                            </div>
                        </div>
                    </div>
            </div>
        </div>


    <!-- First box
    ================================================== -->

    <div id="first-box" class="container">
        <div class="row">
            <div id="news-box" class="col-lg-12 primary-shadow">
                <div class="row">
                    <div id="first-news" class="col-lg-9">
                        <div id="first-news-text" class="container" style="height: auto;">
                            <h2><a href="#" class="color-primary"><?php the_title(); ?></a></h2>
                            <p>
                                <a href="#"><?php the_content(); ?></a>
                            </p>

                        </div>
                    </div>
                    <div id="first-news" class="col-lg-3">
                        <?php get_sidebar(); ?>
                    </div>
                </div>
            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
    </div><!-- /.container -->

    <?php
            endwhile;
        endif;
    ?>
    <?php  get_footer(); ?>

</main>
</body>
</html>