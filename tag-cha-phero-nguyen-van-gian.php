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
            	<img style=" margin-bottom: 15px;" class="hidden-xs hidden-sm" src="https://www.giaophanbaria.org/wp-content/uploads/2012/12/banner.jpg" />
            	<p></p>
            <div class="col-md-4 thi-sidebar">
				<img class=" wp-image-51695 aligncenter" src="https://www.giaophanbaria.org/wp-content/uploads/2017/11/292x345xchan-dung-cha-co-gian.jpg.pagespeed.ic.W2c-vYIimO.webp" alt="" width="292" height="345" srcset="https://www.giaophanbaria.org/wp-content/uploads/2017/11/xchan-dung-cha-co-gian.jpg.pagespeed.ic.31VNsvW6Bl.webp 577w, https://www.giaophanbaria.org/wp-content/uploads/2017/11/xchan-dung-cha-co-gian-423x500.jpg.pagespeed.ic.G_9Pp3TKAH.webp 423w" sizes="(max-width: 292px) 100vw, 292px">

            	<div class="desInfo">
            		
					<p style="text-align: center;"><strong><span style="font-size: 14pt;">Cha Cố PHÊRÔ NGUYỄN VĂN GIẢN</span> </strong></p>
					
				
					<ul>
					<li>Sinh ngày 23-9-1945, tại Thủy Giang, Kiến An, Hải Phòng</li>
					<li>1956-1958: Tu học tại Tiểu Chủng Viện Châu Phúc Liên, hải Phòng</li>
					<li>1959-1965: Tu học tại Tiểu Chủng Viện Thánh Phaolo, Phát Diệm, Sài Gòn</li>
					<li>1965-1972: Tu học tại Đại Chủng Viện Thánh Giuse, Sài Gòn</li>
					<li>1967-1968: Giúp Tiểu Chủng Viện Phaolo, Phước Lâm, Xuân Lộc</li>
					<li>28-4-1972: Thụ phong Linh mục tại Sài Gòn</li>
					<li>1972-1975: Giúp Tiểu Chủng Viện Phaolo, Xuân Lộc</li>
					<li>1984-1987: Phụ trách Giáo xứ Tân Châu, Hạt Vũng Tàu, Xuân Lộc</li>
					<li>1986-1998: Phụ trách Giáo họ Bãi Dâu, Hạt Vũng Tàu, Xuân Lộc</li>
					<li>1975-2015: Chánh xứ Giáo xứ Sao Mai, Hạt Vũng Tàu</li>
					<li>2015 đến nay, nghỉ hưu tại Nhà Hưu Dưỡng, Phước Lâm</li>
					</ul>
					<p>Từ trần lúc 14 giờ 30 ngày 05-11-2017 tại Bệnh viện Bà Rịa, hưởng thọ 72 tuổi, 45 năm linh mục.</p>
					<p style="text-align: center;"><strong>CHƯƠNG TRÌNH LỄ TANG</strong></p>
					<ul style="text-align: justify;">
					<li>Chúa nhật 05-11-2017: Thánh lễ đưa chân và Nghi thức Tẩn liệm lúc 17g30, tại Nhà Hưu dưỡng, Phước Lâm</li>
					<li>Chiều thứ hai, 06-11-2017: Di quan Cha cố Phêrô về Giáo xứ Sao Mai</li>
					<li>09g00 sáng<strong> t</strong>hứ tư, 08-11-2017: Thánh lễ An táng tại Nhà thờ Giáo xứ Sao Mai</li>
					<li>Sau đó Hỏa táng tại Long Hương.</li>
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
