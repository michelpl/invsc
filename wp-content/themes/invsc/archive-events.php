<?php
get_header();
$height = "style='height:250px'";
$bg = "style='background-color:#474747'";
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
                <div id="news-box" class="col-lg-12 primary-shadow">
                    <div class="row">
                        <div class="col-lg-9 gray-square">
                            <div id="post-text" class="container search-results" style="height: auto;">
                                <?php if ( have_posts() ) : ?>
                                    <h1 class="page-title">Calendário de eventos</h1>
                                <?php else : ?>
                                    <h1 class="page-title">Nenhum resultado encontrado</h1>
                                <?php endif; ?>

                                <?php
                                if ( have_posts() ) : ?>
                                    <?php
                                    /* Start the Loop */
                                    while ( have_posts() ) : the_post();


                                        get_template_part( 'template-parts/post/content', 'excerpt' );
                                        echo '<hr>';
                                    endwhile;

                                    the_posts_pagination( array(
                                        'prev_text'          => 'Página anterior',
                                        'next_text'          => 'Próxima página',
                                        'before_page_number' => 'Página'
                                    ) );

                                else :

                                    get_template_part( 'template-parts/post/content', 'none' );

                                endif; ?>
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
