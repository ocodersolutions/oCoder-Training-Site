  <div class="silder">	
    <ul id="accordion2">
    <?php 
    	global $id_cat;

    	global $tp_options;
    	if ($tp_options['number_post'] == 0) { ?>
    		<div class="alert alert-danger">
 			 <strong>Chú ý!</strong> Bạn chưa thêm số ID Category.
			</div>
      	<?php } else { 
      		$id_cat = $tp_options['number_post'];
      	
      	} 
    	global $post;
    	$args = array('numberposts'=> 3, 'category' => $id_cat);
    	$custom_post = get_posts($args);
    	foreach ($custom_post as $post) : setup_postdata( $post );?>
	    	<li class="slide_opened">
	    		<?php if ( has_post_thumbnail() ) : ?>
				    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
				        <?php the_post_thumbnail('thumbnail', array ('class'=>'slide_thumb')); ?>
				    </a>
				<?php endif; ?>
	            
	            <p class="slide_title">	
	                <strong><?php the_title() ?></strong></p>
	            <p class="slide_content"><?php the_excerpt();?></p>
	            <!-- <p class="slide_button">
	            	<a href="<?php the_permalink();?>">Xem thêm</a>
	            </p> -->
	        </li>
    <?php endforeach; wp_reset_postdata(); ?>
    </ul>
    <?php //do_action('showlog_d' );?>
</div>
