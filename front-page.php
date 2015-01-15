<?php
/**
 * Custom front-page.php template
 *
 * Used to display the homepage of your
 * WordPress site.
 *
 * 
 */

 get_header(); ?>

<!-- Header Carousel -->
<header id="myCarousel" class="carousel slide">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <div class="item active">
            <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide One');"></div>
            <div class="carousel-caption">
                <h2>Caption 1</h2>
            </div>
        </div>
        <div class="item">
            <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Two');"></div>
            <div class="carousel-caption">
                <h2>Caption 2</h2>
            </div>
        </div>
        <div class="item">
            <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Three');"></div>
            <div class="carousel-caption">
                <h2>Caption 3</h2>
            </div>
        </div>
    </div>

</header>	
<!-- Page Content -->
<div class="container main-content-area">

    <!-- Marketing Icons Section -->
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


