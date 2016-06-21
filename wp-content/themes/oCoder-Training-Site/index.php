<?php get_header();
	include (TEMPLATEPATH . '/inc/main-banner.php');
	?>
	</div><!--//end baner -->
	<div class="content-wrap">
        <!-- FEATURE -->
		<div class="feature-box">
    	<div class="container">
        	<div class="row">
            <div class="col-md-12 col-sm-12 new-post">
                <div class="row">
                    <div class="content-element">
                        <div class="widget-text-heading">
                            <h3>
								<span class="sp-bold">TIÊU ĐIỂM</span>
							</h3>
                        </div>
                        <div class="uc_four_colored_feature_boxs" style="max-width: 1170px; margin: 0 auto; ">
                            <div class="uc_row">
                                <div class="uc_col12">
                                    <!-- Color box -->
                                    <ul class="uc_servicesList">
                                        <li class="uc_box" style="background: #8460a4;">
                                            <a href="<?php echo get_category_link(5); ?> ">
                                                <span class="uc_number" style=" background: #774e9c;">1</span>
                                                <h3>HTML/CSS</h3>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                                            </a>
                                        </li>
                                        <li class="uc_box" style="background: #FF6863;">
                                            <a href="<?php echo get_category_link(10)?>">
                                                <span class="uc_number" style="background: #FC5653;">2</span>
                                                <h3>PHP Căn bản</h3>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                                            </a>
                                        </li>
                                        <li class="uc_box" style=" background: #3DCEC7;">
                                            <a href="<?php echo get_category_link(13)?>">
                                                <span class="uc_number" style=" background: #2ABFB5;">3</span>
                                                <h3>Zend Framework</h3>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                                            </a>
                                        </li>
                                        <li class="uc_box" style=" background: #F4C949;">
                                            <a href="<?php echo get_category_link(8)?>">
                                                <span class="uc_number" style="background: #EABB3A;">4</span>
                                                <h3>Wordpress</h3>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                                            </a>
                                        </li>
                                    </ul>
                                    <!--  End  Color box -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
	<!--//FEATURE -->

	<div class="post-new">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 post-new">
        <!-- LEFT SIDEBAR -->
                        <div class="col-md-9 col-sm-9 blog-posts">
                        	<div class="row">
	                           	<div class="widget-text-heading">
	                                <h3  class="sp-bold">
										<span>EVENT</span>
									</h3>
	                        	</div>
	                            <!-- slider -->
	                          	<?php include (TEMPLATEPATH . '/inc/feature.php'); ?>
	                            <!-- //slider -->
	                           
							</div>
                            <div class="row">
                            	<div class="widget-text-heading">
	                                <h3 class="sp-bold">
										<span >BÀI VIẾT MỚI NHẤT</span>
									</h3>
									 <!-- contet post -->
								<?php
									global $post;
									$recent_posts = get_posts('numberposts=3');
									foreach ($recent_posts as $post) { ?>
										<div class="row blog-content-line">
			                            	<div class="col-md-4 col-sm-4">
			                            		<a href="<?php the_permalink();?>">
			                            		<?php the_post_thumbnail('large',array('class'=>'img-responsive'));?>	
			                            		</a>
			                            	</div>
			                            	<div class="col-md-8 col-sm-8">
			                            		<h3>
													<a href="<?php the_permalink();?>">
													<?php the_title();?></a>
			                            		</h3>
			                            		<p><?php the_excerpt();?></p>
			                            		<ul class="blog-info">
			                            			<li>
			                            				<i class="fa fa-calendar"></i>
			                            				By: <?php the_author();?> | On <?php the_time('d/m/Y');?>
			                            			</li>
			                            			<li>
			                            				<i class="fa fa-eye"></i>
															<?php setPostViews(get_the_ID()); ?>
															<?php echo getPostViews(get_the_ID()); ?>
			                            			</li>
			                            			<li>
			                            				<i class="fa fa-tags"></i>
			                            				<?php
															$posttags = get_the_tags();
															if ($posttags) {
															  foreach($posttags as $tag) {
															    echo $tag->name . ' '; 
															  }
															}
														?>
			                            			</li>
			                            		</ul>
			                            	</div>
	                           			 </div>
	                           			<hr class="blog-post-sep">
									<?php } ?>
	                            <!--end contet post -->
	                        	</div>
                            </div>
                        </div>
        <!-- END LEFT SIDEBAR -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>
