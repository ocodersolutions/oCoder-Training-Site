<?php get_header(); 
	include (TEMPLATEPATH . '/inc/search-banner.php');
?>
</div>
<div class="content-wrap">
    <div class="post-new">
        <div class="container">
			<h3><?php echo sprintf( __( 'Có %s kết quả cho ', 'html5blank' ), $wp_query->found_posts ); echo get_search_query(); ?></h3>
			<hr class="blog-post-sep">
			 <div class="row">
                <div class="col-md-9 col-sm-9 blog-item">
                        <?php if (have_posts()): while (have_posts()) : the_post(); ?>
                        <div class="row blog-content-line">
                            <div class="col-md-4 col-sm-4">
                                <a href="<?php get_permalink();?>">
                                    <?php 
                                    	$temp = get_the_post_thumbnail(
                                    	 );
                                    	if ($temp != ''){ 
                                    		the_post_thumbnail('large',array('class'=>'img-responsive'));
                                    		}
                                    	else{

                                    		"<a href='" . get_permalink() ."'>
                                    			<img src='". trailingslashit( get_stylesheet_directory_uri() ) . " 'img/default-thumbnail.png' />
                                    		</a>";
                                    	}
                                    ?>
                                </a>
                            </div>
                            <div class="col-md-8 col-sm-8">
                                <h3>
									<a href="<?php the_permalink();?>"><?php the_title();?></a>
                        		</h3>
                        		
                                <p>
                                    <?php the_excerpt();?>
                                </p>
                                <ul class="blog-info">
                                    <li>
                                        <i class="fa fa-calendar"></i> By:
                                        <?php the_author();?> | On
                                        <?php the_time('d/m/Y');?>
                                    </li>
                                    <li>
                                        <i class="fa fa-eye"></i>
                                        
                                        <?php echo postview_get(get_the_ID()); ?>
                                    </li>
                                    <li>
                                        <i class="fa fa-tags"></i>
                                        <?php
											the_tags();
										?>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <hr class="blog-post-sep">
                        <?php endwhile; else: ?>
                        	<div class="col-md-12">
	                         	<h5>Không tìm thấy dữ liệu!	</h5>
	                        </div>	
                    	<?php endif; ?>
                    	<!--end contet post -->
              
                    <div class="pagination_post text-center">
                		<?php html5wp_pagination(); ?>
                	</div> 
					<hr class="blog-post-sep">
                </div>
<?php get_sidebar(); ?>

<?php get_footer(); ?>
