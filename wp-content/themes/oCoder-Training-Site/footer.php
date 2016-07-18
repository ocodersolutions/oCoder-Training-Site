
        </div><!-- END CONTTENT PAGE-->
	</div> <!--END WRAPER-->
    <!-- BEGIN FOOTER -->
    <div class="pre-footer">
        <div class="introduction">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 intro">
                        
                       <?php
                            global $tp_options;

                            if ($tp_options['logo-on'] == 0) : ?>

                            <hgroup>
                                <h1 class="site-title">
                                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
                                </h1>
                                <p class="site-description">
                                    <?php bloginfo( 'description' ); ?>
                                </p>
                            </hgroup>
                        <?php else: ?>
                            <a href="<?php echo esc_url(home_url('/'));?>"  title ="<?php echo esc_attr(get_bloginfo('name', 'display'));?>" rel="home" class="site-logo">
                                <img  class="img-responsive" style="margin:0 auto" src="<?php echo $tp_options['logo-image']['url']; ?>" alt="<?php echo esc_attr(get_bloginfo('name', 'display'));?>">
                            </a>
                        <?php endif; ?>
                      
                    </div>
                    <div class="col-sm-12 col-md-12">
                        <p class="text-center">
                            oCodertranning là trang web phi lợi nhuận, tập trung vào việc chia sẻ kiến thức lập trình website nói riêng và kiến thức lập trình nói chung đến mọi người.
                        </p>
                    </div>
                </div>
              
            </div>
        </div>
        <div class="bottom-footer">
            <section class="buttons">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 social text-center">
                            <div class="line">
                                <?php
                                    global $tp_options;
                                    if ($tp_options['facebook-url'] != '') : ?>
                                     <a href="<?php echo $tp_options['facebook-url']; ?>" class="btn btn-5">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                    <?php else: ?>
                                        <a style="display:none" href="#" class="btn btn-5">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                <?php endif;?>

                                <?php 
                                    global $tp_options;
                                    if ($tp_options['youtube-url'] != '') : ?>  
                                        <a href="<?php echo $tp_options['youtube-url']; ?>" class="btn btn-5">
                                            <i class="fa fa-youtube "></i>
                                        </a>  
                                    <?php else: ?>
                                        <a style="display:none" href="#" class="btn btn-5">
                                            <i class="fa fa-youtube "></i>
                                        </a>  
                                <?php endif;?>
                                <?php 
                                     global $tp_options;
                                    if ($tp_options['google-url'] != '') : ?>  
                                        
                                        <a href="<?php echo $tp_options['google-url']; ?>" class="btn btn-5">
                                              <i class="fa fa-google-plus "></i>
                                        </a>
                                    <?php else: ?>
                                        <a style="display:none" href="#" class="btn btn-5">
                                              <i class="fa fa-google-plus "></i>
                                        </a>
                                <?php endif;?>
                                <?php 
                                     global $tp_options;
                                    if ($tp_options['twitter-url'] != '') : ?>  
                                        
                                        <a href="<?php echo $tp_options['twitter-url']; ?>" class="btn btn-5">
                                              <i class="fa fa-twitter "></i>
                                        </a>
                                    <?php else: ?>
                                        <a style="display:none" href="#" class="btn btn-5">
                                              <i class="fa fa-twitter "></i>
                                        </a>
                                <?php endif;?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
         <!--    <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6 pre-footer-col">
                        <div class="introduction">
                            <div class="post-title">
                                <h3>Bài viết mới nhất</h3>
                            </div>
                            <div class="widget-post">
                                <div class="new-post">
                                    <div class="post-img">
                                        <a href="#">
                                            <img src="<?php echo get_template_directory_uri();?>/img/toan-tu-va-bieu-thuc-trong-php.png" alt="">
                                        </a>
                                    </div>
                                    <div class="detail">
                                        <h5>Toán tử và biểu thức trong PHP</h5>
                                        <div class="post-meta-day">
                                            <p class="post-day">
                                                13-06-2014
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-post">
                                <div class="new-post">
                                    <div class="post-img">
                                        <a href="#">
                                            <img src="<?php echo get_template_directory_uri();?>/img/toan-tu-va-bieu-thuc-trong-php.png" alt="">
                                        </a>
                                    </div>
                                    <div class="detail">
                                        <h5>Toán tử và biểu thức trong PHP</h5>
                                        <div class="post-meta-day">
                                            <p class="post-day">
                                                13-06-2014
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-post">
                                <div class="new-post">
                                    <div class="post-img">
                                        <a href="#">
                                            <img src="<?php echo get_template_directory_uri();?>/img/toan-tu-va-bieu-thuc-trong-php.png" alt="">
                                        </a>
                                    </div>
                                    <div class="detail">
                                        <h5>Toán tử và biểu thức trong PHP</h5>
                                        <div class="post-meta-day">
                                            <p class="post-day">
                                                13-06-2014
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-post">
                                <div class="new-post">
                                    <div class="post-img">
                                        <a href="#">
                                            <img src="<?php echo get_template_directory_uri();?>/img/toan-tu-va-bieu-thuc-trong-php.png" alt="">
                                        </a>
                                    </div>
                                    <div class="detail">
                                        <h5>Toán tử và biểu thức trong PHP</h5>
                                        <div class="post-meta-day">
                                            <p class="post-day">
                                                13-06-2014
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 pre-footer-col">
                        <div class="post-title">
                            <h3>Bài viết xem nhiều</h3>
                        </div>
                        <div class="widget-post">
                            <div class="new-post">
                                <div class="post-img">
                                    <a href="#">
                                        <img src="<?php echo get_template_directory_uri();?>/img/post-php.png" alt="">
                                    </a>
                                </div>
                                <div class="detail">
                                    <h5>PHP là gì?</h5>
                                    <div class="post-meta-day">
                                        <p class="post-day">
                                            13-06-2014
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="widget-post">
                            <div class="new-post">
                                <div class="post-img">
                                    <a href="#">
                                        <img src="<?php echo get_template_directory_uri();?>/img/zend.jpg" alt="">
                                    </a>
                                </div>
                                <div class="detail">
                                    <h5>ZEND - Hướng dẫn cách cài đặt và chạy ứng dụng đầu tiên</h5>
                                    <div class="post-meta-day">
                                        <p class="post-day">
                                            13-06-2014
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="widget-post">
                            <div class="new-post">
                                <div class="post-img">
                                    <a href="#">
                                        <img src="<?php echo get_template_directory_uri();?>/img/wp.jpg" alt="">
                                    </a>
                                </div>
                                <div class="detail">
                                    <h5>Serie Học WordPress cơ bả</h5>
                                    <div class="post-meta-day">
                                        <p class="post-day">
                                            13-06-2014
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="widget-post">
                            <div class="new-post">
                                <div class="post-img">
                                    <a href="#">
                                        <img src="<?php echo get_template_directory_uri();?>/img/Android.jpg" alt="">
                                    </a>
                                </div>
                                <div class="detail">
                                    <h5>Hướng dẫn sử dụng Android cơ bản</h5>
                                    <div class="post-meta-day">
                                        <p class="post-day">
                                            13-06-2014
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 pre-footer-col">
                        <div class="post-title">
                            <h3>Thông tin liên hệ</h3>
                        </div>
                        <div class="info">
                            <p>
                                <img src="<?php echo get_template_directory_uri();?>/img/logo_2.png" alt="">
                            </p>
                            <p> oCoder Solution</p>
                            <p> SĐT: +88 8888 888 88</p>
                            <p>Email:   oCodersolution@gmail.com</p>
                            <p>Địa chỉ: 277, Phan Bội Châu, TP-Huế</p>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
        <div class="end-footer">
        	<div class="container">
        		<div class="col-md-12 col-sm-12 copyright">
        			<div class="row">
	        			<div class="pull-left">
	            			2016 © oCoder Solutions. ALL Rights Reserved.
	            			<a href="javascript:;">Privacy Policy</a>
	            			|
	            			<a href="javascript:;">Terms of Service</a> 
	        			</div>
                        <div class="pull-right">
                           Website đang chạy thử nghiệm và đang chờ cấp phép của Bộ Thông Tin & Truyền Thông
                        </div>
        			</div>
        		</div>
        	</div>
        </div>
    </div><!-- END FOOTER -->
		<?php wp_footer(); ?>

		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'ocoder-trainning.com');
		ga('send', 'pageview');
		</script>
	</body>
</html>
