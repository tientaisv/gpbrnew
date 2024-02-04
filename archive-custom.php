<?php get_header();
global $wp_query;
$term = get_queried_object();
$cover= get_field('cover', $term);
$about = get_field('tax_about', $term);
$color = get_field('color', $term);
$background = get_field('background', $term);
?>
<style>
	.main-cat-inner .news-summary a{
		color: <?php echo $color ?>;
	}
	.single .blog-post, .page-wrap{
		border: 1px solid #ccc;
    	border-top: 5px solid <?php echo $color ?> !important;
	}
	.category{
		background-color:<?php echo $background ?>;
	}
	.main-cat-inner{
		background:#fff;
	}
	.main-container .col-md-8{
		padding-right:0px !important;
	}
	.main-container .col-md-4{
		padding-left:0px;
	}
	.thi-sidebar{
		padding-left:10px !important ;
		padding-right:10px !important;
	}
	.desInfo img{
		width:100%;
		padding: 0px !important;
    	margin: 0px !important;
	}
</style>
<?php
	if ( get_query_var('paged') ) { $paged = get_query_var('paged'); }
	elseif ( get_query_var('page') ) { $paged = get_query_var('page'); }
	else { $paged = 1; }	 
 ?>

            <div class="category-page container">
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
					<?php if($cover):?>
					<img style=" margin-bottom: 15px;width:100%" class="hidden-xs hidden-sm" src="<?= $cover['url'] ?>" />
						<p></p>
					<?php endif;	?>
				<?php if($about): ?>
					<div class="col-md-4 thi-sidebar">
						<div class="desInfo">
							<?= $about?>
						</div>
            		</div>
				<?php endif; ?>
				<div class="col-md-8">
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
		<?php if(empty($about)): ?>
            <div class="col-md-4 thi-sidebar"><?php get_sidebar(); ?></div>
		<?php endif; ?>
            <div class="clear"></div>
</div> <!--main container-->            

            </div>
<?php get_footer(); ?>
