<?php get_header(); ?>

            <div class="category-page container event-tangle">
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
            	<img style=" margin-bottom: 15px;" class="hidden-xs hidden-sm" src="https://www.giaophanbaria.org/wp-content/uploads/2018/10/LmPheroNguyenPhiVu-ndc.jpg" />
            	<p></p>
            <div class="col-md-4 thi-sidebar">
				<img class=" wp-image-51695 aligncenter" src="https://www.giaophanbaria.org/wp-content/uploads/2018/10/ChaPheroPhiVu.jpg" alt="" width="292" height="345">

            	<div class="desInfo">
            		
					<p style="text-align: center;"><strong><span style="font-size: 14pt;">Cha PHÊRÔ NGUYỄN PHI VŨ</span> </strong></p>
					
				
					<ul>
					<li>Sinh ngày 02-08-1978, tại Thủ Dầu Một, Tỉnh Bình Dương</li>
					<li>2000 - 2007: Tu học tại Chủng Viện Thánh Tôma Giáo phận Bà Rịa, và Chủng viện Thánh Giáo phận Phaolo Xuân Lộc. </li>
					<li>2007 - 2013: Tu học tại Chủng Viện Thánh Giuse, Giáo phận Xuân Lộc </li>
					<li>2013 - 2014: Giúp xứ Sơn Bình, Hạt Bình Giã, Giáo phận Bà Rịa</li>
					<li>Chịu chức Phó tế, ngày 19-03-2014 tại Nhà thờ Chánh Tòa Bà Rịa </li>
					<li>Thụ phong Linh mục ngày 03-7-2014 tại Nhà thờ Chánh Tòa Bà Rịa</li>
					<li>7/2014 - 3/2016: Phó xứ Bến Đá, Hạt Vũng Tàu, Giáo phận Bà Rịa</li>
					<li>3/2016 - 9/2016: Phó xứ Bãi Dâu, Hạt Vũng Tàu, Giáo phận Bà Rịa </li>
					<li>9/2016 - 8/2017: Phó xứ Phước Bình, Hạt Bà Rịa, Giáo phận Bà Rịa </li>
					<li>8/2017 - 3/2018: Phó xứ Lam Sơn, Hạt Long Hương, Giáo phận Bà Rịa </li>
					<li>3/2018 đến nay, chánh xứ Đức Hiệp, Hạt Bình Giã, Giáo phận Bà Rịa</li>
					</ul>
					<p>Từ trần lúc 8 giờ, ngày 29/10/2018 hưởng dương 40 tuổi, 04 năm linh mục
.</p>
					<p style="text-align: center;"><strong>CHƯƠNG TRÌNH LỄ TANG</strong></p>
					<ul style="text-align: justify;">
					<li><strong>Thánh lễ an táng sẽ cử hành lúc 09g30 sáng</strong> Chúa Nhật 04/11/2018 tại Nghĩa Trang Linh Mục Giáo Phận thuộc Giáo xứ Vinh Châu, Giáo hạt Bình Giã 
</li>
					
					</ul>
            	</div>
            		
            	</div>
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
            
            <div class="clear"></div>
</div> <!--main container-->            

            </div>
<?php get_footer(); ?>
