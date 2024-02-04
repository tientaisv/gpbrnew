<?php if (mom_option('footer_top_banner_ad') != '') { echo do_shortcode('[ad id="'.mom_option('footer_top_banner_ad').'" class="footer_top_banner"]'); } ?>
      </div> <!--content boxed wrapper-->
            <?php do_action('mom_after_content'); ?>
<?php if (mom_option('hide_footer_widgets') != true ) { ?>
            <footer id="footer">
                <div class="inner">
	     <?php $footer_layout = mom_option('footer_layout'); if ( $footer_layout == 'third') { ?>
			<div class="one_third">
		<?php if  (function_exists('dynamic_sidebar') && dynamic_sidebar('footer1')){ }else { ?>
	        <?php } ?>

			</div><!-- End third col -->
			<div class="one_third">
		<?php if  (function_exists('dynamic_sidebar') && dynamic_sidebar('footer2')){ }else { ?>
	        <?php } ?>
			</div><!-- End third col -->
			<div class="one_third last">
		<?php if  (function_exists('dynamic_sidebar') && dynamic_sidebar('footer3')){ }else { ?>
	        <?php } ?>

			</div><!-- End third col -->
	    <?php } elseif ($footer_layout == 'one') { ?>
		<?php if  (function_exists('dynamic_sidebar') && dynamic_sidebar('footer1')){ }else { ?>
	        <?php } ?>
	    <?php } elseif ($footer_layout == 'one_half') { ?>
			<div class="one_half">
		<?php if  (function_exists('dynamic_sidebar') && dynamic_sidebar('footer1')){ }else { ?>
	        <?php } ?>
			</div>
			<div class="one_half last">
		<?php if  (function_exists('dynamic_sidebar') && dynamic_sidebar('footer2')){ }else { ?>
	        <?php } ?>
			</div>
	    <?php } elseif ($footer_layout == 'fourth') { ?>
			<div class="one_fourth">
		<?php if  (function_exists('dynamic_sidebar') && dynamic_sidebar('footer1')){ }else { ?>
	        <?php } ?>
			</div>
			<div class="one_fourth">
		<?php if  (function_exists('dynamic_sidebar') && dynamic_sidebar('footer2')){ }else { ?>
	        <?php } ?>
			</div>
			<div class="one_fourth">
		<?php if  (function_exists('dynamic_sidebar') && dynamic_sidebar('footer3')){ }else { ?>
	        <?php } ?>
			</div>
			<div class="one_fourth last">
		<?php if  (function_exists('dynamic_sidebar') && dynamic_sidebar('footer4')){ }else { ?>
	        <?php } ?>
			</div>
	    <?php } elseif ($footer_layout == 'fifth') { ?>
			<div class="one_fifth">
		<?php if  (function_exists('dynamic_sidebar') && dynamic_sidebar('footer1')){ }else { ?>
	        <?php } ?>
			</div>
			<div class="one_fifth">
		<?php if  (function_exists('dynamic_sidebar') && dynamic_sidebar('footer2')){ }else { ?>
	        <?php } ?>
			</div>
			<div class="one_fifth">
		<?php if  (function_exists('dynamic_sidebar') && dynamic_sidebar('footer3')){ }else { ?>
	        <?php } ?>
			</div>
			<div class="one_fifth">
		<?php if  (function_exists('dynamic_sidebar') && dynamic_sidebar('footer4')){ }else { ?>
	        <?php } ?>
			</div>
			<div class="one_fifth last">
		<?php if  (function_exists('dynamic_sidebar') && dynamic_sidebar('footer5')){ }else { ?>
	        <?php } ?>
			</div>
	    <?php } elseif ($footer_layout == 'sixth') { ?>
			<div class="one_sixth">
		<?php if  (function_exists('dynamic_sidebar') && dynamic_sidebar('footer1')){ }else { ?>
	        <?php } ?>
			</div>
			<div class="one_sixth">
		<?php if  (function_exists('dynamic_sidebar') && dynamic_sidebar('footer2')){ }else { ?>
	        <?php } ?>
			</div>
			<div class="one_sixth">
		<?php if  (function_exists('dynamic_sidebar') && dynamic_sidebar('footer3')){ }else { ?>
	        <?php } ?>
			</div>
			<div class="one_sixth">
		<?php if  (function_exists('dynamic_sidebar') && dynamic_sidebar('footer4')){ }else { ?>
	        <?php } ?>
			</div>
			<div class="one_sixth">
		<?php if  (function_exists('dynamic_sidebar') && dynamic_sidebar('footer5')){ }else { ?>
	        <?php } ?>
			</div>
			<div class="one_sixth last">
		<?php if  (function_exists('dynamic_sidebar') && dynamic_sidebar('footer6')){ }else { ?>
	        <?php } ?>
			</div>

    	    <?php } elseif ($footer_layout == 'half_twop') { ?>
	    		<div class="one_half" style="margin-right: 3%;">
		<?php if  (function_exists('dynamic_sidebar') && dynamic_sidebar('footer1')){ }else { ?>
	        <?php } ?>
			</div>

	    		<div class="one_fourth">
		<?php if  (function_exists('dynamic_sidebar') && dynamic_sidebar('footer2')){ }else { ?>
	        <?php } ?>
			</div>

	    		<div class="one_fourth last">
		<?php if  (function_exists('dynamic_sidebar') && dynamic_sidebar('footer3')){ }else { ?>
	        <?php } ?>
			</div>
	    
    	    <?php } elseif ($footer_layout == 'twop_half') { ?>
	    		<div class="one_fourth">
		<?php if  (function_exists('dynamic_sidebar') && dynamic_sidebar('footer1')){ }else { ?>
	        <?php } ?>
			</div>

	    		<div class="one_fourth">
		<?php if  (function_exists('dynamic_sidebar') && dynamic_sidebar('footer2')){ }else { ?>
	        <?php } ?>
			</div>

	    		<div class="one_half last">
		<?php if  (function_exists('dynamic_sidebar') && dynamic_sidebar('footer3')){ }else { ?>
	        <?php } ?>
			</div>

    	    <?php } elseif ($footer_layout == 'half_threep') { ?>
	    		<div class="one_half">
		<?php if  (function_exists('dynamic_sidebar') && dynamic_sidebar('footer1')){ }else { ?>
	        <?php } ?>
			</div>

	    		<div class="one_sixth">
		<?php if  (function_exists('dynamic_sidebar') && dynamic_sidebar('footer2')){ }else { ?>
	        <?php } ?>
			</div>

	    		<div class="one_sixth">
		<?php if  (function_exists('dynamic_sidebar') && dynamic_sidebar('footer3')){ }else { ?>
	        <?php } ?>
			</div>

	    		<div class="one_sixth last">
		<?php if  (function_exists('dynamic_sidebar') && dynamic_sidebar('footer4')){ }else { ?>
	        <?php } ?>
			</div>
    	    <?php } elseif ($footer_layout == 'threep_half') { ?>

	    		<div class="one_sixth">
		<?php if  (function_exists('dynamic_sidebar') && dynamic_sidebar('footer1')){ }else { ?>
	        <?php } ?>
			</div>

	    		<div class="one_sixth">
		<?php if  (function_exists('dynamic_sidebar') && dynamic_sidebar('footer2')){ }else { ?>
	        <?php } ?>
			</div>

	    		<div class="one_sixth">
		<?php if  (function_exists('dynamic_sidebar') && dynamic_sidebar('footer3')){ }else { ?>
	        <?php } ?>
			</div>

	    		<div class="one_half last">
		<?php if  (function_exists('dynamic_sidebar') && dynamic_sidebar('footer4')){ }else { ?>
	        <?php } ?>
			</div>

    	    <?php } elseif ($footer_layout == 'third_threep') { ?>
	    		<div class="one_third">
		<?php if  (function_exists('dynamic_sidebar') && dynamic_sidebar('footer1')){ }else { ?>
	        <?php } ?>
			</div>

	    		<div class="one_fifth">
		<?php if  (function_exists('dynamic_sidebar') && dynamic_sidebar('footer2')){ }else { ?>
	        <?php } ?>
			</div>

	    		<div class="one_fifth">
		<?php if  (function_exists('dynamic_sidebar') && dynamic_sidebar('footer3')){ }else { ?>
	        <?php } ?>
			</div>

	    		<div class="one_fifth last">
		<?php if  (function_exists('dynamic_sidebar') && dynamic_sidebar('footer4')){ }else { ?>
	        <?php } ?>
			</div>


    	    <?php } elseif ($footer_layout == 'threep_third') { ?>

	    		<div class="one_fifth">
		<?php if  (function_exists('dynamic_sidebar') && dynamic_sidebar('footer1')){ }else { ?>
	        <?php } ?>
			</div>

	    		<div class="one_fifth">
		<?php if  (function_exists('dynamic_sidebar') && dynamic_sidebar('footer2')){ }else { ?>
	        <?php } ?>
			</div>

	    		<div class="one_fifth">
		<?php if  (function_exists('dynamic_sidebar') && dynamic_sidebar('footer3')){ }else { ?>
	        <?php } ?>
			</div>
			
			<div class="one_third last">
		<?php if  (function_exists('dynamic_sidebar') && dynamic_sidebar('footer4')){ }else { ?>
	        <?php } ?>
			</div>

    	    <?php } elseif ($footer_layout == 'third_fourp') { ?>
			<div class="one_third">
		<?php if  (function_exists('dynamic_sidebar') && dynamic_sidebar('footer1')){ }else { ?>
	        <?php } ?>
			</div>

	    		<div class="one_sixth">
		<?php if  (function_exists('dynamic_sidebar') && dynamic_sidebar('footer2')){ }else { ?>
	        <?php } ?>
			</div>

	    		<div class="one_sixth">
		<?php if  (function_exists('dynamic_sidebar') && dynamic_sidebar('footer3')){ }else { ?>
	        <?php } ?>
			</div>

	    		<div class="one_sixth">
		<?php if  (function_exists('dynamic_sidebar') && dynamic_sidebar('footer4')){ }else { ?>
	        <?php } ?>
			</div>

	    		<div class="one_sixth last">
		<?php if  (function_exists('dynamic_sidebar') && dynamic_sidebar('footer5')){ }else { ?>
	        <?php } ?>
			</div>


       	    <?php } elseif ($footer_layout == 'fourp_third') { ?>
	    		<div class="one_sixth">
		<?php if  (function_exists('dynamic_sidebar') && dynamic_sidebar('footer1')){ }else { ?>
	        <?php } ?>
			</div>

	    		<div class="one_sixth">
		<?php if  (function_exists('dynamic_sidebar') && dynamic_sidebar('footer2')){ }else { ?>
	        <?php } ?>
			</div>

	    		<div class="one_sixth">
		<?php if  (function_exists('dynamic_sidebar') && dynamic_sidebar('footer3')){ }else { ?>
	        <?php } ?>
			</div>

	    		<div class="one_sixth">
		<?php if  (function_exists('dynamic_sidebar') && dynamic_sidebar('footer4')){ }else { ?>
	        <?php } ?>
			</div>
	    
	    <div class="one_third last">
		<?php if  (function_exists('dynamic_sidebar') && dynamic_sidebar('footer5')){ }else { ?>
	        <?php } ?>
			</div>
	    <?php } ?>    

        <div class="clear"></div>                    
                </div> <!--// footer inner-->
            </footer> <!--//footer-->
<?php } ?>
<?php if (mom_option('hide_footer_c') != true ) { ?>
            <div class="copyrights-area">
                <div class="inner">
                    <p class="copyrights-text"><?php echo do_shortcode(mom_option('copyrights')); ?></p>
                    <?php
                    if (mom_option('copyrights_right') == 'social') {
                            get_template_part('elements/social', 'icons');
                        } else {
                            if ( has_nav_menu( 'footer' ) ) { 
                                wp_nav_menu ( array( 'menu_class' => 'footer_menu','container'=> 'ul', 'theme_location' => 'footer' )); 
                            }
                        }
                    ?>
					
				<?php if (mom_option('responsive_toggle')) { ?>
                <div class="responsive-toggle">
                	<a class="desktop-version" href="?responsive=false"><?php echo esc_attr__('Desktop Version', 'theme'); ?></a>
                	<a class="mobile-version" href="?responsive=true"><?php echo esc_attr__('Mobile Version', 'theme'); ?></a>
                </div>
                <?php } ?>
                </div>
           </div>
<?php } ?>
            <div class="clear"></div>
        </div> <!--Boxed wrap-->
        <?php if (mom_option('scroll_top_bt') == 1) { ?><a href="#" class="scrollToTop button"><i class="enotype-icon-arrow-up"></i></a><?php } ?>
	
	<?php echo mom_option('footer_script'); ?>
        <?php wp_footer(); ?>
	<!--
		<script type='text/javascript' src='https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js'></script>
		<script type='text/javascript' src='<?php echo get_template_directory_uri() ?>/js/jquery.lazyload.js'></script>

<div class="modal fade" id="nhathomo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="top:67px">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">NHÀ THỜ MỒ CÁC VỊ TỬ ĐẠO BÀ RỊA</h4>
      </div>
      <div class="modal-body" style="height: 650px; overflow: auto">
       	<p>Tại Giáo phận Bà Rịa, Nhà thờ Mồ được chọn làm nơi hành hương cho các tín hữu trong năm thánh. Nhà thờ Mồ nằm cách Nhà thờ Chánh Toà hiện nay khoảng 300m, trên khu đất trước đây là nghĩa trang giáo xứ. Dù chỉ là một ngôi nguyện đường khiêm tốn, nhưng đây chính là nơi cất giữ cả một ký ức hào hùng của cộng đoàn tín hữu Bà Rịa. Nơi đây ghi danh 288 vị anh hùng đức tin, và ghi dấu nhiều tín hữu vô danh khác, đã đổ máu đào làm nên lịch sử hào hùng cho mảnh đất Bà Rịa.</p>

		<p>Chúng ta cùng lần giở lại những trang sử hào hùng cách đây gần 150 năm, để nhìn thấy dòng máu đỏ đã tuôn trào, làm nảy sinh và tăng trưởng bao thế hệ tín hữu. Năm 1861 – 1862 được ghi dấu là 2 năm lửa máu của Phước Tuy, tên gọi trước kia của Bà Rịa. Chính quyền thời đó ngờ vực người Công giáo theo Tây, cụ thể là các nhà sừa sai ngoại quốc cùng các binh sĩ Pháp và Tây Ban Nha, nên đã ra sức lùng bắt các tín hữu. Có khoảng 700 tín hữu đã bị bắt và giam vào 4 ngục thất: Ngục Chánh tại làng Phước Lễ, giam 300 nam tín hữu. Ngục thứ Hai cách ngục Phước Lễ khoảng hơn 3000 thước, dọc theo con đường Bà Rịa – Xuân Lộc. Nơi đây giam giữ 135 tín hữu. Ngục thứ Ba cách Phước Lễ độ hơn 5000 thước, trên đường hướng về Đất Đỏ, Long Điền. Có 140 tín hữu đã bị giam giữ tại đây. Ngục thứ Tư trong làng Phước Thọ, trung tâm Họ Đất Đỏ, là nơi giam giữ 125 nữ tín hữu và trẻ con.</p>
		<p><center><img class="img-responsive"  src="https://www.giaophanbaria.org/wp-content/uploads/2018/06/MAPS-BARIA.jpg" /></center><br></p>
		<p>Thế rồi ngày hạnh phúc của các tín hữu đã đến. Ngày 7 tháng Giêng dương lịch năm 1862, người Pháp dẫn binh chiếm Phước Tuy, chính quyền địa phương tưởng rằng họ tiến vào giải thoát các tín hữu nên đã phóng hỏa 4 ngục thất. Ngoài một số tín hữu thoát thân, có tất cả 444 vị đã bị chết trong cuộc thiêu sinh đó. Sau vài tháng tạm yên ổn, cuối năm 1862, một cuộc bắt bớ khác lại tái diễn ở vùng Gò Sầm, Đất Đỏ. Một cuộc lùng sục, truy đuổi các tín hữu lại diễn ra, chủ yếu vùng Đất Đỏ và Họ Thôm (Long Tâm). Lần bách hại này tuy ngắn ngủi nhưng cũng gần 200 tín hữu đã bị sát hại.</p>

		<p>Tuy vậy, đúng như lời Chúa nói: Nếu hạt lúa gieo vào lòng đất không chết đi, thì nó vẫn trơ trọi một mình, nếu chết đi thì nó mới sinh được nhiều bông hạt khác. Các tín hữu đã nằm xuống vì đức tin, giọt máu của các ngài đã thấm vào mảnh đất Bà Rịa, làm đâm chồi nẩy lộc, đơm hoa kết trái là bao thế hệ Kitô hữu. Đạo Công giáo dần dần phục hưng và phát triển trên mảnh đất Bà Rịa. Những năm sau đó, nhiều linh mục, trong đó có các Cha Cố người ngoại quốc, đã lần lượt đến để đồng hành, chăm sóc các tín hữu.</p>

		<p>Đặc biệt, Họ Bà Rịa vinh dự được Cha Gioan Baotixita Nguyễn Bá Tòng (sau này là Giám mục tiên khởi của Giáo hội Việt Nam) coi sóc từ năm 1917 đến 1926. Nhiều họ đạo đã được thiết lập, nhiều nhà thờ và các cơ sở tôn giáo như trường học, đất thánh, lầu chuông, phòng thuốc,…cũng dần xuất hiện. Các cử hành phụng vụ, các sinh hoạt giáo hội tại các họ đạo cũng ngày càng phát triển về quy mô và số lượng. Đặc biệt, ngày càng có nhiều anh chị em lương dân tìm đến với Giáo hội để được học giáo lý và lãnh nhận Bí tích Khai tâm Kitô giáo.</p>
      </div>
    
    </div>
  </div>
</div>
				-->
    </body>
</html>