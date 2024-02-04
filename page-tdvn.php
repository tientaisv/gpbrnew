<?php 
/*
 Template Name: Tu Dao Viet Nam
*/
if (function_exists('is_bbpress') && is_bbpress()) {
        if (function_exists('is_buddypress') && is_buddypress()) {
            get_template_part( 'buddypress', 'page' );
        } else {
            get_template_part( 'bbpress', 'page' );
        }
} elseif (function_exists('is_buddypress') && is_buddypress()) {
            get_template_part( 'buddypress', 'page' );
 } else { ?>
<?php
    //Page settings
    $d_breacrumb = get_post_meta(get_the_ID(), 'mom_disbale_breadcrumb', true);
    $hpt = get_post_meta(get_the_ID(), 'mom_hide_pagetitle', true);
    $PS = get_post_meta(get_the_ID(), 'mom_page_share', true);
    $PC = get_post_meta(get_the_ID(), 'mom_page_comments', true);
    //Page Layout
    $custom_page = get_post_meta(get_the_ID(), 'mom_custom_page', true);
    $layout = get_post_meta(get_the_ID(), 'mom_page_layout', true);
    $right_sidebar = get_post_meta(get_the_ID(), 'mom_right_sidebar', true);
    $left_sidebars = get_post_meta(get_the_ID(), 'mom_left_sidebar', true);
/* ==========================================================================
 *                unique posts variable 
   ========================================================================== */
$unique_posts = '';
$unique_posts = get_post_meta(get_queried_object_id(), 'mom_unique_posts', true);
    
?>
<style>
    iframe{
        height: 830px !important;
    }
    #table1{
        width: 100%;
    }
</style>
<?php get_header(); ?>
    <div class="container">
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
                    <?php while ( have_posts() ) : the_post(); ?>
                        <?php the_content(); ?>
                        <?php wp_link_pages( array( 'before' => '<div class="page-links text-right">', 'after' => '</div>' ) ); ?>
                    <?php endwhile; // end of the loop. ?>
                    <?php wp_reset_query(); ?>
                <?php } else { ?>
                        <div class="base-box page-wrap">
                        <?php if ($hpt != true) { ?><h1 class="page-title"><?php the_title(); ?></h1><?php } ?>
                        <div class="entry-content">
                    <iframe width="750" height="850" src="/tdvn/tdvn.htm" frameborder="0"></iframe>
                        <?php if ($PS == true) mom_posts_share(get_the_ID(), get_permalink()); ?>
                        </div> <!-- entry content -->
                        </div> <!-- base box -->
                        <?php if ($PC == true) comments_template(); ?>        
                <?php } // end cutom page  ?>
        <?php } else { //if not full width ?>
            <div class="row main_container">
           <div class="col-md-8 main-content">
                <?php if ($d_breacrumb != true) { ?>
                <div class="category-title">
                        <?php mom_breadcrumb(); ?>
                </div>
                <?php } ?>
<?php if ($custom_page) { ?>
                    <?php while ( have_posts() ) : the_post(); ?>
                        <?php the_content(); ?>
                        <?php wp_link_pages( array( 'before' => '<div class="page-links text-right">', 'after' => '</div>' ) ); ?>
                    <?php endwhile; // end of the loop. ?>
                    <?php wp_reset_query(); ?>
<?php } else { ?>
        <div class="base-box page-wrap">
           <?php if ($hpt != true) { ?><h1 class="page-title"><?php the_title(); ?></h1><?php } ?>
        <div class="entry-content">
                   <iframe width="750" height="850" src="/tdvn/tdvn.htm" frameborder="0"></iframe>
        <?php if ($PS == true) mom_posts_share(get_the_ID(), get_permalink()); ?>
        </div> <!-- entry content -->
        </div> <!-- base box -->
        <?php if ($PC == true) comments_template(); ?>        
<?php } ?>
            </div> <!--main column-->
            <div class="col-md-4 thi-sidebar"><?php get_sidebar(); ?></div>
            <div class="clear"></div>
</div> <!--main container-->            
<?php }// end full width ?>             
</div> <!--main inner-->
            
<?php get_footer(); ?>
<?php } ?>