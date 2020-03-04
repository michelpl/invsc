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
                <div class="col-lg-12 blue-border"></div>
                <div id="news-box" class="col-lg-12 primary-shadow">
                    <div class="row">
                        <div class="col-lg-9 gray-square">
                            <div id="post-text" class="container search-results" style="height: auto;">
                                <?php if ( have_posts() ) : ?>
                                    <h1 class="page-title">Categoria: <?php single_cat_title(); ?></h1>
                                <?php else : ?>
                                    <h1 class="page-title">Nenhum resultado encontrado</h1>
                                <?php endif; ?>

                                <?php
                                // the query to set the posts per page to 3
                                $slug = get_the_category()[0]->slug;
                                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                                $args =
                                    [
                                        'posts_per_page' => 10,
                                        'category_name'  => $slug,
                                        'paged' => $paged
                                    ];
                                query_posts($args); ?>
                                <!-- the loop -->

                                <?php if ( have_posts() ) : while (have_posts()) : the_post();
                                    get_template_part( 'template-parts/post/content', 'excerpt' );
                                    echo '<hr>';
                                endwhile;
                                    pagination_nav();
                                else : ?>
                                    <!-- No posts found -->
                                <?php endif; ?>
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
