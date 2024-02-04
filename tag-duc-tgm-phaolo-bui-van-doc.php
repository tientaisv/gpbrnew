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
            	<img style=" margin-bottom: 15px;" class="hidden-xs hidden-sm" src="https://www.giaophanbaria.org/wp-content/uploads/2018/03/anhbannertop.jpg" />
            	<p></p>
            <div class="col-md-4 thi-sidebar letang-sidebar">
				<img class=" wp-image-51695 aligncenter" src="https://www.giaophanbaria.org/wp-content/uploads/2018/03/dcphaolo-1-495x343.jpg" alt="" width="292" height="345">

            	<div class="desInfo">
            		
					<p style="text-align: center;"><strong><span style="font-size: 14pt;">ĐỨC TGM PHAOLÔ BÙI VĂN ĐỌC</span> </strong></p>
					
				
					<ul>
					<li>11/11/1944 : Sinh tại Đà Lạt</li>
					<li>1956-1963 : Học tại Tiểu chủng viện Thánh Giuse Sài Gòn </li>
					<li>1963-1964 : Học tại Đại chủng viện Thánh Giuse Sài Gòn</li>
					<li>1964-1970 : Học tại Đại học Truyền giáo Urbaniana, Rôma</li>
					<li>17/12/1970 : Thụ phong linh mục tại Nhà thờ Chính toà Đà Lạt </li>
					<li>Thụ phong Linh mục ngày 03-7-2008 tại Đền thánh Đức Mẹ Bãi Dâu, 
Giáo phận Bà Rịa</li>
					<li>1971-1975 : Giáo sư Tiểu chủng viện Simon Hoà, Đại chủng viện Minh Hoà, Đại học Đà Lạt </li>
					<li>1975-1995 : Giám đốc Đại chủng viện Minh Hoà, Đại học Đà Lạt</li>
					<li>1996-2008 : Giáo sư Thần học Tín lý tại Đại chủng viện Sài Gòn, Hà Nội, Huế</li>
					<li>1995-1999 : Tổng đại diện Giáo Phận Đà Lạt</li>
					<li>26/03/1999 : Được Đức Thánh Cha Gioan Phaolô II bổ nhiệm làm Giám mục Chính Toà Giáo Phận Mỹ Tho</li>
					<li>20/05/1999 : Thụ phong Giám mục tại Nhà Thờ Chính Tòa Đà Lạt, do Đức Tổng Giám Mục Gioan Baotixita Phạm Minh Mẫn chủ phong; Châm ngôn Giám mục: “Chúa là niềm vui của con”</li>
					<li>27/05/1999 : Nhận chức tại Giáo Phận Mỹ Tho</li>
					<li>28/09/2013 : Được Đức Thánh Cha Phanxicô bổ nhiệm làm Tổng Giám Mục Phó Tổng Giáo Phận TP. HCM</li>
					<li>2013-2016 : Chủ tịch Hội Đồng Giám Mục Việt Nam</li>
					<li>22/03/2014 : Tổng Giám Mục Chính Toà Tổng Giáo Phận TP. HCM</li>
					
					</ul>
					<p>07/03/2018 : Về nhà Cha lúc 04 giờ 25, hưởng thọ 74 tuổi</p>
					
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
        </div>
<?php get_footer(); ?>
