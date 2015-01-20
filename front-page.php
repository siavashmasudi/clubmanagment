<?php
/**
 * Custom front-page.php template
 *
 * Used to display the homepage of your
 * WordPress site.
 *
 * 
 */
get_header();
?>


<!-- Page Content -->
<div class="container main-content-area">
    <div class="row carousel_wraper">

        <div class="col-md-12">
             <?php
                    $numbers = 0;
                    $the_query = new WP_Query(array(
                        'post_type' => 'slider',
                        'posts_per_page' => 5
                    ));
                    
                    if ($the_query->have_posts())
                    {
                    ?>
            
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                 
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                  <?php
                    while ($the_query->have_posts()) : $the_query->the_post();
                        ?>
                        <div class="item">
                            <?php the_post_thumbnail('MainSlider-image',(array('class' => 'img-responsive' ))); ?>
                            <div class="carousel-caption">
                                <h4><?php the_title(); ?></h4>
                                <p><?php the_excerpt(); ?></p>
                            </div>
                        </div><!-- item active -->
                        <?php
                    endwhile;
                    wp_reset_postdata();
                    ?>

                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
            </div> <!-- Carousel -->
                    <?php }?>
        </div>
    </div>

    <div class="row" >

        <div class="col-md-8 col-sm-12 pull-left-md" style="background-color: #FFF;">

            <div class="col-md-12">
                <header class="entry-header page-header">

                    <h2 class="entry-title">Latest news</h2>


                </header>

                <ul class="latest-news">
                    <?php
                    // The Query
                    query_posts(array('category_name' => 'latest-news', 'posts_per_page' => 5));

                    // The Loop
                    while (have_posts()) : the_post();
                        ?>
                        <li>

                            <span class="posted-on">
                                <i class="fa fa-calendar">

                                </i>  
                            </span>
                            <time> <?php the_time('d.m.Y'); ?></time>
                            <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><span class="news-title"><?php the_title(); ?></span></a>
                        </li>

                        <?php
                    endwhile;

                    // Reset Query
                    wp_reset_query();
                    ?>
                </ul>

            </div>
            <div class="col-md-12">
                <header class="entry-header page-header">

                    <h2 class="entry-title">Latest games</h2>


                </header>
            </div>
            <!-- Portfolio Section -->
            <div class="col-md-12">

                <header class="entry-header page-header">

                    <h2 class="entry-title">Events</h2>


                </header>

                <div class="col-md-4 col-sm-6">
                    <a href="portfolio-item.html">
                        <img class="img-responsive img-portfolio img-hover" src="http://placehold.it/700x450" alt="">
                    </a>
                </div>
                <div class="col-md-4 col-sm-6">
                    <a href="portfolio-item.html">
                        <img class="img-responsive img-portfolio img-hover" src="http://placehold.it/700x450" alt="">
                    </a>
                </div>
                <div class="col-md-4 col-sm-6">
                    <a href="portfolio-item.html">
                        <img class="img-responsive img-portfolio img-hover" src="http://placehold.it/700x450" alt="">
                    </a>
                </div>
                <div class="col-md-4 col-sm-6">
                    <a href="portfolio-item.html">
                        <img class="img-responsive img-portfolio img-hover" src="http://placehold.it/700x450" alt="">
                    </a>
                </div>
                <div class="col-md-4 col-sm-6">
                    <a href="portfolio-item.html">
                        <img class="img-responsive img-portfolio img-hover" src="http://placehold.it/700x450" alt="">
                    </a>
                </div>
                <div class="col-md-4 col-sm-6">
                    <a href="portfolio-item.html">
                        <img class="img-responsive img-portfolio img-hover" src="http://placehold.it/700x450" alt="">
                    </a>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <div class="col-md-4 col-sm-12">
            <?php get_sidebar("mainsidebar"); ?>
        </div>


    </div>
    <!-- /.row -->
</div>
<hr>

<?php get_footer(); ?>


