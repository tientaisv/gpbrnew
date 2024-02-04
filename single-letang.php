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
    $post_tags = get_the_tags();
?>
<?php get_header(); 

	
		 // Display list of tags
	 ?>
   
		

    <div class="single-post container">
        
                     
                <?php if ($layout == 'fullwidth') { ?>
                        <?php if ($d_breacrumb != true) { ?>
                        <div class="category-title">
                                <?php mom_breadcrumb(); ?>
                        </div>
                          <a href="/tag/chapheronguyenvananh" title="Trở về trang chủ"><img style=" margin-bottom: 15px;width:100%" class="hidden-xs hidden-sm" src="https://www.giaophanbaria.org/wp-content/uploads/2022/03/0.LmPheroNguyenVanAnh-cover_1_l.jpg" /></a> 
              
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
                        <?php
                            foreach( $post_tags as $tag ) {
                                $image_top = get_field('top_image', $tag);
                                $image_ts = get_field('image_tieusu', $tag);
                                $ts = get_field('tieu_su', $tag);
                               
                                if($image_top):  $tag_current = $tag->term_id; ?>
                                    <a href="<?php echo esc_url(get_term_link($tag->term_id)); ?>" title="Trở về trang chủ"> <img style=" margin-bottom: 15px;width:100%" class="hidden-xs hidden-sm" src="<?= $image_top ?>" /></a>
                                        <p></p>
                                    <?php endif;	
                                }
                        ?>
                <p></p>
                
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
                        
                            <div class="sidebar main-sidebar" role="complementary" itemscope="itemscope" itemtype="http://schema.org/WPSideBar">
                                    <div class="widget-1 widget-first widget-last widget-odd widget momizat-posts"><div class="widget-head"><h3 class="widget-title"><span>Tin/ Bài mới</span></h3></div> 
                                    <div class="mom-posts-widget">
                                        <?php
                                 // The Query
                            $the_query = new WP_Query(array('post_type'=>'post','tag_id' => $tag_current));
                            
                            // The Loop
                            if ( $the_query->have_posts() ) :
                            
                                while ( $the_query->have_posts() ) :
                                    $the_query->the_post();
                               
                            ?>
                                            <div class="mpw-post">
                                                       

                                        <div class="post-img main-sidebar-element"><a href="<?php the_permalink() ?>">
                                             <img src="<?php echo mom_post_image('big-wide-img'); ?>" data-hidpi="<?php echo mom_post_image('big-wide-img'); ?>" alt="<?php the_title(); ?>" width="90" height="60"> </a></div>
                                                       <div class="details has-feature-image">
                                        <h4><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4>
                                       <div class="mom-post-meta mom-w-meta">
                                       <span datetime="<?php the_time('c'); ?>" class="entry-date"><?php mom_date_format(); ?></span>
                                                        </div>
                                    </div>
                                    </div> <!--//post-->
                                      <?php
                        endwhile;
                    else :
                        _e( 'Sorry, no posts were found.', 'textdomain' );
                    endif;
                    ?>

                                </div>
                        </div>
           </div> <!--main sidebar-->
            <div class="clear"></div>                   
            </div>
                        
                      
                       </div>
                        
                        <div class="clear"></div>
            </div> <!--main container-->            
        <?php }
    ?>
            </div> <!--main inner-->
            
<?php get_footer(); ?>