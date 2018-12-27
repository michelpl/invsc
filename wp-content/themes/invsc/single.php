<?php get_header(); ?>

<main role="main">
    <?php
    if (have_posts()) :
        while (have_posts()) :
        the_post();

    $height = '';
    $bg = '';
    if(!has_post_thumbnail()){
        $height = "style='height:250px'";
        $bg = "style='background-color:#3d3f56'";
    }
    ?>
        <div id="myCarousel" class="carousel slide" data-ride="carousel" <?php echo $height; ?>>
            <ol class="carousel-indicators">
            </ol>
            <div class="carousel-inner">
                    <div class="carousel-item active" <?php echo $bg; ?>>
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
                    <div class="col-lg-9 gray-square">
                        <div id="first-news-text" class="container" style="height: auto;">
                            <h2><a href="#" class="color-primary"><?php the_title(); ?></a></h2>
                            <p>
                                <a href="#"><?php the_content(); ?></a>
                            </p>

                        </div>
                    </div>
                    <div class="col-lg-3 gray-square">
                        <?php get_sidebar(); ?>
                    </div>
                    <div class="col-lg-12 gray-square" style="margin:0; padding: 0;">
                        <?php
                            // If comments are open or we have at least one comment, load up the comment template.
                            if ( comments_open() || get_comments_number() ) :
                                comments_template();
                            endif;

                            the_post_navigation(
                                array(
                                    'prev_text' => '<span class="screen-reader-text">' . __( 'Previous Post', 'twentyseventeen' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Previous', 'twentyseventeen' ) . '</span> <span class="nav-title"><span class="nav-title-icon-wrapper">' . twentyseventeen_get_svg( array( 'icon' => 'arrow-left' ) ) . '</span>%title</span>',
                                    'next_text' => '<span class="screen-reader-text">' . __( 'Next Post', 'twentyseventeen' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Next', 'twentyseventeen' ) . '</span> <span class="nav-title">%title<span class="nav-title-icon-wrapper">' . twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ) . '</span></span>',
                                )
                            );
                        ?>
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