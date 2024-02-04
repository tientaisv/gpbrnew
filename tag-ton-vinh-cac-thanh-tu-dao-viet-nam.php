<?php get_header();
global $wp_query;
	if ( get_query_var('paged') ) { $paged = get_query_var('paged'); }
	elseif ( get_query_var('page') ) { $paged = get_query_var('page'); }
	else { $paged = 1; }	
 ?>

            <div class="category-page container event-tudao">
				<div class="category-title">
                    <?php mom_breadcrumb(); ?>
                    <?php if (is_category() && mom_option('cat_rss') == 1) { ?>
                    <a class="bc-rss" target="_blank" href="<?php echo esc_url(home_url()); ?>?cat=<?php echo get_query_var('cat'); ?>&feed=rss2"><i class="fa-icon-rss"></i></a>
                    <?php } ?>
                    <?php if (is_tag() && mom_option('cat_rss') == 1) { ?>
                    <a class="bc-rss" target="_blank" href="<?php echo esc_url(home_url()); ?>?tag=<?php echo get_query_var('tag'); ?>&feed=rss2"><i class="fa-icon-rss"></i></a>
                    <?php } ?>
                </div>
            <div class="row main-container">
            	  <img style=" margin-bottom: 15px;" class="img-responsive" src="/wp-content/uploads/2018/06/Banner-a.jpg" />
                <p></p>
                <div class="row">
                    <div class="col-md-4 col-lg-4 col-xs-4">
                       <a href="/tin-tuc/tin-giao-hoi-viet-nam/2018/05/02/thu-cong-bo-nam-thanh-ton-vinh-cac-thanh-tu-dao-viet-nam.html"> <img style=" margin-bottom: 15px;" class=" img-responsive" src="/wp-content/uploads/2018/06/Button-a.png" /></a>
                    </div>
                    <div class="col-md-4 col-lg-4 col-xs-4">
                      <a href="/tin-giao-phan/2018/06/10/56405.html">  <img style=" margin-bottom: 15px;" class=" img-responsive" src="/wp-content/uploads/2018/06/Button-b.png" /></a>
                    </div>
                    <div class="col-md-4 col-lg-4 col-xs-4">
                       <a href="/nam-thanh-tdvn/2018/10/31/lich-hanh-huong-nam-thanh-giao-hat-xuyen-moc-thang-11-2018.html"> <img style=" margin-bottom: 15px;" class="img-responsive" src="/wp-content/uploads/2018/06/Button-c.png" /></a>
                    </div>
                </div>
                <div class="row">
            

			<div class="col-md-8 col-xs-12">
	            <div class="main-cat-inner page-wrap">
	                
				<div class="base-box">
				  <div class="news-box base-box">
                  
                    <div class="nb-content">
                        <div class="news-list">        
					<?php 
					$args = array_merge( $wp_query->query_vars, array( 'posts_per_page'=>'8' ) );
					query_posts($args );
						if ( have_posts() ) :
						while ( have_posts() ) : the_post();
							// Your loop code
							?>
							<article <?php post_class('nl-item'); ?>>
                                                        
									<?php
									$is_img = '';
									if (mom_post_image() != false) {
										$is_img = 'has-feature-image';
									?>
					                                <div class="news-image">
					                                        <a href="<?php the_permalink(); ?>"><img src="<?php echo mom_post_image('related-posts'); ?>" data-hidpi="<?php echo mom_post_image('big-wide-img'); ?>" alt="<?php the_title(); ?>"></a>
					                                </div>
					                                <?php } ?>
					                                <div class="news-summary <?php echo $is_img; ?>">
					                                   <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					                                   <div class="mom-post-meta nb-item-meta">
					                                    <span datetime="<?php the_time('c'); ?>" class="entry-date"><?php mom_date_format(); ?></span>
					                                   			   
					                                   </div> <!--meta-->
					                                <P>
										<?php
											$excerpt = get_the_excerpt();
											if ($excerpt == false) {
											$excerpt = get_the_content();
											}
											
											echo wp_html_excerpt(strip_shortcodes($excerpt), 150, '');
										?>
										<p></p>
									   <a href="<?php the_permalink(); ?>" class="read-more-link"><?php _e('Xem tin', 'theme'); ?> <?php echo $da; ?></a>
									</P>
                                </div>
                            </article>
                            <?php
						endwhile;
					else :
						_e( 'Sorry, no posts were found.', 'textdomain' );
					endif;
					?>
							</div>
						</div>
				</div>
			
	            </div> <!--main column-->
			</div>
             <?php mom_pagination($wp_query->max_num_pages); ?>
            <div class="clear"></div>
</div> <!--main container-->   
<div class="thi-sidebar col-xs-12  col-sm-12 col-md-4 col-lg-4">
                        <?php dynamic_sidebar( 'left-sidebar' );     ?>
                        
                        </div>         
</div>
            </div>
        </div>
<?php get_footer(); ?>
