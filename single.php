<?php
    //Page settings
    
    $d_breacrumb = get_post_meta(get_the_ID(), 'mom_disbale_breadcrumb', true);
    $PS = get_post_meta(get_the_ID(), 'mom_page_share', true);
    $PC = get_post_meta(get_the_ID(), 'mom_page_comments', true);
    //Page Layout
    $custom_page = get_post_meta(get_the_ID(), 'mom_custom_page', true);
    $layout = get_post_meta(get_the_ID(), 'mom_page_layout', true);
    if ($layout == '') { $layout = mom_option('posts_layout');}
    $right_sidebar = get_post_meta(get_the_ID(), 'mom_right_sidebar', true);
    $left_sidebars = get_post_meta(get_the_ID(), 'mom_left_sidebar', true);
    $category_detail=get_the_category(get_the_ID());
    foreach($category_detail as $cate){
        $cat_id = "category_".$cate->term_id;
        if(get_field('cover', $cat_id)){
            require_once get_stylesheet_directory() . '/single-custom.php';
            exit;
        }
       
    }
    /*
    $cat_id = "category_".$category_detail[0]->term_id;
   
    $cover = get_field('cover', $cat_id);
    if($cover):
        require_once get_stylesheet_directory() . '/single-custom.php';
    else:
        */
?>
<?php get_header(); 

	
		 // Display list of tags
	 ?>
   
		

    <div class="single-post container">
        <?php
        if(has_tag(2032)){
            //end cac Thanh tu dao Viet Nam tag
            ?>
                             <?php /*
                        if (mom_option('post_top_ad') != '') {
                            echo do_shortcode('[ad id="'.mom_option('post_top_ad').'"]');
                            echo do_shortcode('[gap height="20"]');
                        }
						*/
                    ?>
                <?php if ($layout == 'fullwidth') { ?>
                        <?php if ($d_breacrumb != true) { ?>
                        <div class="category-title">
                                <?php mom_breadcrumb(); ?>
                        </div>
                          <a href="/tag/ton-vinh-cac-thanh-tu-dao-viet-nam" title="Trở về trang chủ"><img style=" margin-bottom: 15px;" class="img-responsive" src="/wp-content/uploads/2018/06/Banner-a.jpg" /></a>
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
                        <?php } ?>
                        <?php if ($custom_page) { ?>
                                <?php mom_single_post_content(); ?>
                                <?php } else { ?>
                                <?php mom_single_post_content(); ?>
                        <?php } // end cutom page  ?>
                <?php } else { //if not full width ?>
                    <div class="category-title">
                                <?php mom_breadcrumb(); ?>
                        </div>
                    <div class="row">
                        <a href="/tag/ton-vinh-cac-thanh-tu-dao-viet-nam" title="Trở về trang chủ"><img style=" margin-bottom: 15px;" class="img-responsive" src="/wp-content/uploads/2018/06/Banner-a.jpg" /></a>
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
                     
                   <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 main-content-inner">
                        <?php if ($d_breacrumb != true) { ?>
                        
                        <?php } ?>
            <?php if ($custom_page) { 
                                    mom_single_post_content(); 
            } else { ?>
                                    <?php mom_single_post_content(); ?>
            <?php } ?>
                        </div> <!--main column-->
						    <div class="thi-sidebar col-xs-12 col-sm-12 col-md-4 col-lg-4">
                        <?php dynamic_sidebar( 'left-sidebar' );     ?>
                        
                        </div>
                       </div>
                        
                        <div class="clear"></div>
            </div> <!--main container-->            
        <?php }
        // end TDVN tag
    }else{
            ?>
        
        <?php
		/*
            if (mom_option('post_top_ad') != '') {
                echo do_shortcode('[ad id="'.mom_option('post_top_ad').'"]');
                echo do_shortcode('[gap height="20"]');
            }
			*/
        ?>
        <?php if ($layout == 'fullwidth') { ?>
                <?php if ($d_breacrumb != true) { ?>
                <div class="category-title">
                        <?php mom_breadcrumb(); ?>
                </div>
                <?php } ?>
                <?php if ($custom_page) { ?>
                        <?php mom_single_post_content(); ?>
                        <?php } else { ?>
                        <?php mom_single_post_content(); ?>
                <?php } // end cutom page  ?>
        <?php } else { //if not full width ?>
			<div class="category-title">
                        <?php mom_breadcrumb(); ?>
                </div>
            <div class="row">
           <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 main-content-inner">
                <?php if ($d_breacrumb != true) { ?>
                
                <?php } ?>
<?php if ($custom_page) { 
                        mom_single_post_content(); 
} else { ?>
                        <?php mom_single_post_content(); ?>
<?php } ?>
            </div> <!--main column-->
			<div class="thi-sidebar col-xs-12 col-sm-12 col-md-4 col-lg-4">
			<?php get_sidebar();  	 ?>
			
			</div>
            
            <div class="clear"></div>
</div> <!--main container-->            

<?php  } }// end full width ?>
            </div> <!--main inner-->
            
<?php get_footer();
//endif;
 ?>