<?php get_header(); 
	include (TEMPLATEPATH . '/inc/html-banner.php');
?>
</div>
<div class="content-wrap">
    <div class="post-new">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 post-new">
                    <div class="breadcrum_links">
                        <?php the_breadcrumb(); ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-9 col-sm-9 blog-item">
                    <div class="row">
                        <?php if (have_posts()): while (have_posts()) : the_post(); ?>
                        <div class="row blog-content-line">
                            <div class="col-md-4 col-sm-4">
                                <a href="<?php get_permalink();?>">
                                    <?php the_post_thumbnail('large',array('class'=>'img-responsive'));?>
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
                        <?php endwhile; else: ?>
                         	<h3>Tài nguyên chuyên mục 
                         		đang được xây dựng!</h3>
                         	<h5>Bạn vui lòng trở lại sau</h5>
                    	<?php endif; ?>
                    	<!--end contet post -->
                    </div>
                    <div class="pagination_post">
                		<?php page_nav(); ?>
                	</div>
					<hr class="blog-post-sep">
                </div>
                 <!-- END LEFT SIDEBAR -->
    <?php get_sidebar(); ?>
<?php get_footer(); ?>
