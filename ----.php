<?php 
/*
 Template Name: Home Page
*/
?>
<?php get_header(); ?>
        <div class="category-page container">               
            <div class="row">
				<div class="col-md-8 main-content">
					<div <?php post_class('base-box blog-post default-blog-post bp-horizontal-share'); ?>>
					<div class="bp-entry">
						<div class="bp-details">
						<?php if (mom_post_image() != false) { ?>
							<div class="post-img">
								<a href="<?php the_permalink(); ?>">
									<?php echo mom_post_image_full('blog_medium', 'big-wide-img'); ?>
								</a>
								<span class="post-format-icon"></span>
							</div> <!--img-->
						<?php } ?>
								<?php if ($full_post) { the_content(); } else { ?>
												 <h3 class="header-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
												<P>
													<?php
															$excerpt = get_the_excerpt();
															if ($excerpt == false) {
															$excerpt = get_the_content();
															}
															echo wp_html_excerpt(strip_shortcodes($excerpt), $excerpt_length, '...');
													?>
								   <a href="<?php the_permalink(); ?>" class="read-more-link"><?php _e('Đọc tiếp', 'theme'); ?> <?php echo $da; ?></a>
								</P>
									<?php } ?>
									<div class="clear"></div>
						</div> <!--details-->
					</div> <!--entry-->
					<?php if ($share == true) { mom_posts_share($post->ID, get_permalink($post->ID)); }  ?>
					<div class="clear"></div>
					</div>
				</div>
				<div class="col-md-4 main-content">
					<?php get_sidebar(); ?>
				</div>
			</div>
        </div> <!--main inner-->
<?php get_footer(); ?>