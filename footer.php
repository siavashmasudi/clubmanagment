

<!-- Footer -->
<div id="footer-area">
    <footer id="colophon" class="site-footer" role="contentinfo">
        <div class="site-info container">
            <div class="row">
                <div class="social-icons">
                    <a href="https://www.facebook.com/colorlib" title="Follow us on Facebok" class="facebook" target="_blank">
                        <i class="social_icon fa fa-facebook"></i>
                    </a>
                    <a href="#" title="Follow us on Twitter" class="twitter" target="_blank">
                        <i class="social_icon fa fa-twitter"></i>
                    </a><a href="#" title="Follow us on Google+" class="gplus" target="_blank">
                        <i class="social_icon fa fa-google-plus"></i>
                    </a><a href="#" title="Follow us on Youtube" class="youtube" target="_blank">
                        <i class="social_icon fa fa-youtube"></i>
                    </a><a href="#" title="Follow us on LinkedIn" class="linkedin" target="_blank">
                        <i class="social_icon fa fa-linkedin"></i>
                    </a><a href="#" title="Follow us on Pinterest" class="pinterest" target="_blank">
                        <i class="social_icon fa fa-pinterest"></i>
                    </a>
                </div>
                <div role="navigation" class="col-md-6">
                    <ul id="menu-flat-footer" class="nav footer-nav ">
                        <li ><a href="#" >Home</a></li>
                        <li ><a href="#" >Team</a></li>
                        <li ><a href="#" >Contact</a></li>
                        <li ><a href="#" >Blog</a></li>

                    </ul>					
                </div>
                <div class="copyright col-md-6 ">
                    <p>Copyright © <?php get_bloginfo("url"); ?> <?php
                        $blog_title = get_bloginfo('name');
                        echo $blog_title;
                        ?> 2015</p>
                </div>
            </div>
        </div><!-- .site-info -->
        <div class="scroll-to-top" style="display: block;"><i class="fa fa-angle-up"></i></div><!-- .scroll-to-top -->
    </footer>
</div>



<!-- jQuery -->
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>

<!-- Script to Activate the Carousel -->
<script>
    $(function () {
        $('.carousel').carousel({
            interval: false //changes the speed
        })
        $('.carousel-inner').find('.item:first').addClass('active');
        $(".carousel-indicators li:first").addClass("active");

    });

</script>
<?php wp_footer(); ?>

</body>
</html>
