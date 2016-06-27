<?php get_header();

	include (TEMPLATEPATH . '/inc/detail-item.php');
	?>
	</div><!--//end baner -->
	<div class="content-wrap">
		<div class="post-new">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-sm-12 post-new">
						<div class="breadcrum_links">
							<?php the_breadcrumb();?>
	                    </div>
		               
	                </div>
                </div>
                <div class="row">
					<div class="col-md-9 col-sm-9 blog-item">
         				
                        <?php 
                        	
                        	if (have_posts()): while (have_posts()) : the_post(); ?>
								<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									<div class="row">
		                                <h3>
		                                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?>	
		                                    </a>
		                                </h3>
		                                <hr class="blog-post-sep">
	                                </div>
	                              
	                                <div class="sub-text">
	                                   	<?php the_content(); // Dynamic Content ?>
	                                </div>
									<hr class="blog-post-sep">
									<ul class="blog-info">
	                        			<li>
	                        				<i class="fa fa-calendar"></i>
	                        				By: <?php the_author();?> | On <?php the_time('d/m/Y');?>
	                        			</li>
	                        			<li>
	                        				<i class="fa fa-eye"></i>
												<?php echo postview_set(get_the_ID()); ?>
                                        		<?php echo postview_get(get_the_ID()); ?>
	                        			</li>
	                        			<li>
	                        				<i class="fa fa-tags"></i>
	                        				<?php
												the_tags( );
											?>
	                        			</li>
				                    </ul>
				                    <hr class="blog-post-sep">
                            	</div>
                        	
						 <?php endwhile; ?>
						<?php endif; ?> 
					</div>
				<?php get_sidebar(); ?>
				
<?php get_footer(); ?>
