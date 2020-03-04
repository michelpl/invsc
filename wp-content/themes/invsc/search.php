<?php
    get_header();
    $height = "style='height:250px'";
    $bg = "style='background-color:#3d3f56'";
    ?>

    <main role="main">
        <div id="myCarousel" class="carousel slide" data-ride="carousel" <?php echo $height; ?>>
            <ol class="carousel-indicators">
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active" <?php echo $bg; ?>>
                    <div class="container">
                        <div class="carousel-caption text-left">
                            <h1 class="color-primary"></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="first-box" class="container">
            <div class="row">
                <div class="col-lg-12 blue-border"></div>
                <div id="news-box" class="col-lg-12 primary-shadow">
                    <div class="row">
                        <div class="col-lg-9 gray-square">
                            <div id="post-text" class="container search-results" style="height: auto;">
                                <?php if ( have_posts() ) : ?>
                                    <h1 class="page-title"><?php echo 'Resultados encontrados para: <span>' . get_search_query() . '</span>'; ?></h1>
                                <?php else : ?>
                                    <h1 class="page-title">Nenhum resultado encontrado</h1>
                                <?php endif; ?>

                                <?php
                                if ( have_posts() ) :
                                    /* Start the Loop */
                                    while ( have_posts() ) : the_post();

                                        /**
                                         * Run the loop for the search to output the results.
                                         * If you want to overload this in a child theme then include a file
                                         * called content-search.php and that will be used instead.
                                         */
                                        get_template_part( 'template-parts/post/content', 'excerpt' );
                                        echo '<hr>';
                                    endwhile; // End of the loop.

                                    pagination_nav();
                                else : ?>

                                    <p>Nenhum resultado encontrado para sua busca</p>
                                    <?php
                                    get_search_form();

                                endif;
                                ?>
                            </div>
                        </div>
                        <div class="col-lg-3 gray-square">
                            <?php get_sidebar(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

<?php get_footer();
