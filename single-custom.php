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
        $term_id = "category_".$cate->term_id;
        if(get_field('cover', $term_id)){
            $cate_lq = $cate;
            $cover= get_field('cover', $term_id);
            $about = get_field('tax_about', $term_id);
            $color = get_field('color', $term_id);
            $background = get_field('background', $term_id);
        }
       
    }
    
get_header();
    ?>
    <style>
        .p-single .post-tile,.details.has-feature-image h4 a{
            color: <?php echo $color ?>;
        }
        .single .blog-post, .page-wrap{
            border: 1px solid #ccc;
            border-top: 5px solid <?php echo $color ?> !important;
        }
        .boxed-wrap{
            background-color:<?php echo $background ?>;
        }
        .main-cat-inner{
            background:#fff;
        }
        h2.single-title,.base-box.single-box{
            display:none;
        }
        .header > .inner, .header .logo {
            display: inline-flex;
            align-items: center;
            }
    </style>
   

   
		

    <div class="single-post container">
        
                     
              
                    <div class="category-title">
                                <?php mom_breadcrumb(); ?>
                        </div>
                    <div class="row">
                        <?php
                            
                                
                               
                                if($cover): ?>
                                    <a href="<?php echo esc_url(get_term_link($cate_lq->term_id)); ?>" title="Trở về trang chủ"> <img style=" margin-bottom: 15px;width:100%" class="hidden-xs hidden-sm" src="<?= $cover['url'] ?>" /></a>
                                        <p></p>
                                    <?php endif;	
                               
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
                            $the_query = new WP_Query(array('post_type'=>'post','cat' => $cate_lq->term_id));
                            
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
            </div> <!--main inner-->
            
<?php get_footer(); ?>