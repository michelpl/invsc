<?php
get_header();
$height = '';
$bg = '';
if(!has_post_thumbnail()){
    $height = "style='height:250px'";
    $bg = "style='background-color:#474747'";
}
?>

    <main role="main">
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
        <div id="first-box" class="container">
            <div class="row">
                <div class="col-lg-12 blue-border"></div>
                <div id="news-box" class="col-lg-12 primary-shadow">
                    <div class="row">
                        <div class="col-lg-9 gray-square">
                            <div id="" class="container search-results" style="height: auto;">
                                <p style="font-size: 58px">404</p>
                                <h1>Página não encontrada</h1>
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


