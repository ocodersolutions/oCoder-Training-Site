 <!-- RIGHT SIDEBAR -->
				<div class="col-md-3 col-sm-3  blog-sidebar">
				   	
				   	<div class="post-care">
                        <h3 class="sp-bold">
                            <span>DANH MỤC KHÁC</span>
                        </h3>
                        <?php wp_nav_menu(array(
                        	'menu'=>'Categories ',
                        	'menu_class' => 'nav sidebar-categories'
                    		)); 
                       	?>     
                    </div>
					<?php if(function_exists('dynamic_sidebar') && dynamic_sidebar('Right-Sidebar')) :else : ?>
					<?php endif;?>
				    <!-- <div class="widget-text-heading">
				    	<div class="post-care">
				            <h3  class="sp-bold">
								<span>BÀI ĐƯỢC QUAN TÂM</span>
							</h3>
							<div class="widget-post underline">
				                <div class="new-post">
				                    <div class="detail">
				                        <h5>Toán tử và biểu thức trong PHP</h5>
				                        <div class="post-detail">
				                        	<i class="fa fa-clock-o"></i>
				                            <p class="post-day">
				                                13-06-2014
				                            </p>
				                        </div>
				                    </div>
				                </div>
				    		</div>
				    		<div class="widget-post underline">
				                <div class="new-post">
				                    
				                    <div class="<details></details>ail">
				                        <h5>Toán tử và biểu thức trong PHP</h5>
				                        <div class="post-detail">
				                            <i class="fa fa-clock-o"></i>
				                            <p class="post-day">
				                                13-06-2014
				                            </p>
				                        </div>
				                    </div>
				                </div>
				    		</div>
				    		<div class="widget-post underline">
				                <div class="new-post">
				                    
				                    <div class="detail">
				                        <h5>Toán tử và biểu thức trong PHP</h5>
				                        <div class="post-detail">
				                            <i class="fa fa-clock-o"></i>
				                            <p class="post-day">
				                                13-06-2014
				                            </p>
				                        </div>
				                    </div>
				                </div>
				    		</div>
				    		<div class="widget-post underline">
				                <div class="new-post">
				                    
				                    <div class="detail">
				                        <h5>Toán tử và biểu thức trong PHP</h5>
				                        <div class="post-detail">
				                            <i class="fa fa-clock-o"></i>
				                            <p class="post-day">
				                                13-06-2014
				                            </p>
				                        </div>
				                    </div>
				                </div>
				    		</div>
						</div>
						
				    </div> -->
				</div>
<!-- END RIGHT SIDEBAR -->				
			</div>
		</div>	
	</div>
 </div><!-- END CONTENT -->
 </div>
