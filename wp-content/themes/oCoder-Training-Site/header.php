<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<?php if (is_search()) {?> 
		<meta name="robots" content="noindex, nofollow"/>
	<?php }?>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?php bloginfo('description'); ?>">
	<title>
		<?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?>
	</title>
	<link href="//www.google-analytics.com" rel="dns-prefetch">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=vietnamese' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400&subset=vietnamese' rel='stylesheet' type='text/css'>
	<link href="<?php echo get_template_directory_uri()?>/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri()?>/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>">
	<link rel="pingback" href="<?php bloginfo('pingback_url');?>">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/search.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/four_colored_feature_boxs.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/slider.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/menu.css">

	<?php wp_head(); ?>

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri()?>/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri()?>/plugins/jquery-aricona-min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri()?>/plugins/jquery-easing-min.js"></script>
    <script src="<?php echo get_template_directory_uri()?>/js/ocodertrainning.js" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri()?>/js/slide.js" type="text/javascript"></script>
    <?php  ?>
    <script src="<?php echo get_template_directory_uri()?>/js/riple.js" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri()?>/js/menu.js" type="text/javascript"></script>

	
</head>
<body <?php body_class('home-page'); ?>>
	<!-- wrapper -->
	<div class="wrapper">
		<div class="banner">
	    <!-- TOPBAR -->
	        <div class="pre-header">
	            <div class="container">
	                <div class="row">
	                    <div class="col-md-6 col-sm-6 additional-info">
	                        <ul class="list-unstyled list-inline">
	                            <li>
	                                <i class="fa fa-phone"></i>
	                                <a href="tel:+84963009280"><span>+84 960 009 280</span></a>
	                            </li>
	                            <li>
	                                <i class="fa fa-envelope-o"></i>
	                                <a href="mailto:ocodersolutions@gmail.com">
	                                	<span>ocodersolutions@gmail.com</span>
	                                </a>
	                            </li>
	                        </ul>
	                    </div>
	                    <div class="col-md-6 col-sm-6 additional-nav">
	                       <!--  <ul class="list-unstyled list-inline pull-right">
	                            <li>
	                                <a href="#" class="pbr-user-login">
	                                    <i class="fa fa-sign-in"></i> Đăng Nhập
	                                </a>
	                            </li>
	                            <li>
	                                <a href="#" title="" class="pbr-user-register">
	                                    <i class="fa fa-pencil"></i> Đăng ký
	                                </a>
	                            </li>
	                        </ul> -->
	                    </div>
	                </div>
	            </div>
	        </div>
	    <!-- //TOPBAR -->
	    <!-- BEGIN HEADER -->
	        <div class="header">
	            <div class="container">
	                <a href="/" class="site-logo" title="">
	                    <img src="<?php echo get_template_directory_uri()?>/img/logo/logo_2.png" alt="">
	                </a>
	    <!-- BEGIN NAVIGATION -->
	               <nav class="nav-edit navbar pull-right">
				  	<?php 
				     wp_nav_menu( array(
				       'theme_location' => 'main_nav', //Menu location của bạn
				       // 'menu' => 'Page Menu',
				       'depth' => 2, //Số cấp menu đa cấp
				       'container' => 'div', //Thẻ bao quanh cặp thẻ ul
				       'container_class'=>'collapse navbar-collapse js-navbar-collapse', //class của thẻ bao quanh cặp thẻ ul
				       'menu_class' => 'nav navbar-nav', //class của thẻ ul
				       'walker' => new wp_bootstrap_navwalker()) //Cái này để nguyên, không thay đổi
						);
					?>
					
				</nav>
	    <!-- END NAVIGATION -->
	            </div>
	        </div><!--//END HEADER -->
	    <!-- begin declare -->
   		
