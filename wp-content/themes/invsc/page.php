<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Invsc
 * @since 1.0
 * @version 1.0
 */
?>






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
        </div>
    </div>

    <!-- First box
    ================================================== -->
    <div id="first-box" class="container">
        <div class="row">
            <div id="news-box" class="col-lg-12 primary-shadow">
                <div class="row">
                    <div id="first-news" class="col-lg-8">
                        <div id="first-news-text" class="container">
                            <?php
                            while ( have_posts() ) : the_post();

                                get_template_part( 'template-parts/page/content', 'page' );

                                // If comments are open or we have at least one comment, load up the comment template.
                                if ( comments_open() || get_comments_number() ) :
                                    comments_template();
                                endif;

                            endwhile; // End of the loop.
                            ?>
                        </div>
                        <div class="container">
                            <div class="addthis_inline_share_toolbox float-left"></div>
                        </div>
                    </div>
                    <div id="first-news" class="col-lg-4">
                        <div id="first-news-text" class="container">
                                <?php get_sidebar(); ?>
                        </div>
                    </div>
                </div>
            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
    </div><!-- /.container -->

<?php  get_footer(); ?>

    </main>

</body>
</html>


