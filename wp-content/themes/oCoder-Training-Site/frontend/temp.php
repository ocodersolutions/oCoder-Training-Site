   <span class="comments">
                                	<?php if (comments_open( get_the_ID() ) ) comments_popup_link( __( 'Đánh giá của bạn', 'html5blank' ), __( '1 Comment', 'html5blank' ), __( '% Comments', 'html5blank' )); ?>
                                </span>


                                <?php comments_template(); ?>

<div class="col-md-3 col-sm-3  blog-sidebar">
                            <div class="widget-text-heading">
                                <div class="post-care">
                                    <h3>
                                        <span class="sp-bold">DANH MỤC</span>
                                    </h3>
                                    	<p class="sidebar-categories">
                                    		<?php _e( '', 'html5blank' ); the_category(', '); // Separated by commas ?>	
                                    	</p>		
                                    <!-- <ul class="nav sidebar-categories ">
                                        <li><a href="javascript:;">HTML/CSS (18)</a></li>
                                        <li class="active"><a href="javascript:;">Bootstrap (12)</a></li>
                                        <li><a href="javascript:;">CSS Responsive (7)</a></li>
                                     </ul>   -->
                                </div>
                                
                                <div class="post-care">
                                    <h3>
                                        <span class="sp-bold">BÀI ĐƯỢC QUAN TÂM</span>
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

                                <div class="post-care">
                                    <h3>
                                        <span class="sp-bold">
                                            Tag
                                        </span>
                                    </h3>
                                    <div class="blog-tags">
                                       <!-- <ul class="tag-info">
                                            <li>
                                                <a href="">
                                                    <i class="fa fa-tags"></i>
                                                    HTML
                                                </a>
                                            </li>
                                            <li>
                                                 <a href="">
                                                    <i class="fa fa-tags"></i>
                                                    CSS
                                                </a>
                                            </li>
                                            <li>
                                                <a href="">
                                                    <i class="fa fa-tags"></i>
                                                    responsive
                                                </a>
                                            </li>
                                        </ul> -->
                                        <?php the_tags( __( '', 'html5blank' ), ', ', '<br>'); // Separated by commas with a line break at the end ?>

                                    </div>
                                </div>
                            </div>
                        </div>