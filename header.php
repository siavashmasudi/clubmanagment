<?php
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
         <title><?php wp_title(); ?></title>
        <!--[if lt IE 9]>
        <script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/html5.js"></script>
        <![endif]-->
        <script>(function () {
                document.documentElement.className = 'js'
            })();</script>
        <!-- Bootstrap Core CSS -->
        <link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet">

        
        <link href="<?php echo get_template_directory_uri(); ?>/css/modern-business.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="<?php echo get_template_directory_uri(); ?>/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <!-- Custom CSS -->
        <link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet">
<?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?> >
        <!--Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="margin-top: 30px;">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php get_bloginfo("url");?>"><?php $blog_title = get_bloginfo('name');
                    echo $blog_title;?></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <?php wp_nav_menu( array( 'theme_location' => 'main-menu',
                    'container' => '',                 
                    'items_wrap' => '<ul class="nav navbar-nav navbar-right">%3$s</ul>'
                    ) ); ?>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

        
	


