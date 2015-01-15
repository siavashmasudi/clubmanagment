
<?php get_header(); ?>

<?php while (have_posts()) : the_post(); ?> 

    <div class="container main-content-area">

        <!-- Marketing Icons Section -->
        <div class="row" >
            <div class="col-md-8 col-sm-12 pull-left-md post-body_" style="background-color: #FFF;">
                
                 <?php if (has_post_thumbnail()) : ?>

                    <?php
                    the_post_thumbnail('post-image', array( 'class' => 'img-responsive' ));
                    ?>


                <?php endif; ?>
               
               
                <hr>
                <h2>
                    <?php the_title() ?>
                </h2>
                <p class="lead">

                </p>
                <p><span class="glyphicon glyphicon-time"></span> Posted on <?php the_time('j.n.Y G:i ') . '<br>'; ?> by <?php the_author(); ?></p>
                
                <p> <?php the_content(); ?>
                </p>
            </div>
            <div class="col-md-4 col-sm-12">
                <?php get_sidebar("mainsidebar"); ?>
            </div>
        </div>
        <!-- /.row -->
    </div>
<?php endwhile; ?>

<?php get_footer(); ?>
