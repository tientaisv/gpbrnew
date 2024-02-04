<?php get_header();
global $wp_query;

		$term = get_queried_object();
		$image_top = get_field('top_image', $term);
		$image_ts = get_field('image_tieusu', $term);
		$ts = get_field('tieu_su', $term);
		

	if ( get_query_var('paged') ) { $paged = get_query_var('paged'); }
	elseif ( get_query_var('page') ) { $paged = get_query_var('page'); }
	else { $paged = 1; }	 
 ?>

    <div class="category-page container <?php if($ts) echo  "event-tangle"; ?>">
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
					<?php if($image_top):?>
					<img style=" margin-bottom: 15px;width:100%" class="hidden-xs hidden-sm" src="<?= $image_top ?>" />
						<p></p>
					<?php endif;	?>
				<?php if($ts): ?>
					<div class="col-md-4 thi-sidebar">
					<?php if($image_ts): ?>
					<img class=" wp-image-51695 aligncenter" src="<?= $image_ts ?>" alt="" width="292" height="345">
					<?php endif; ?>
            	<div class="desInfo">
					<?= $ts?>
            	</div>
            		
            	</div>
				<?php endif; ?>
				<div class="col-md-8" style="padding-right:0px">
	            <div class="main-cat-inner page-wrap">
	                
				<div class="base-box">
				  <div class="news-box base-box">
                  
                    <div class="nb-content">
                        <div class="news-list">        
					<?php 
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
		<?php if(empty($ts)): ?>
            <div class="col-md-4 thi-sidebar"><?php get_sidebar(); ?></div>
		<?php endif; ?>
            <div class="clear"></div>
	</div> <!--main container-->            
  
</div>
<?php get_footer(); ?>
