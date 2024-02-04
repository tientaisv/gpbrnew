<?php 
/*
 Template Name: Cuu Uoc Page
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
<?php get_header(); ?>
<style>
	iframe[name='contents']{
		height:100vh !important;
	}
	iframe[name='ktmain']{
		height:100vh !important;
	}
	.kinhthanh-content{
		height:100vh;
	}
</style>
    <div class="container">
        <?php if ($layout == 'fullwidth') { ?>
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
						 <div class="kinhthanh-content">
							<iframe marginheight="1" marginwidth="1" name="contents" src="/kinhthanh/cuuuoc/mucluc.html" target="" scrolling="auto" height="95vh" style="width: 20%;display: block;float: left;"></iframe>
							<iframe marginheight="2" marginwidth="2" name="ktmain" src="/kinhthanh/DanNhapTongQuat1.htm" target="_self" scrolling="auto" style="width:80%;display:block;"></iframe>
								</div>
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
            <div class="kinhthanh-content">
                 	<iframe marginheight="1" marginwidth="1" name="contents" src="/kinhthanh/cuuuoc/mucluc.html" target="" scrolling="auto" style="width:20%;display:block;float:left;height:95vh"></iframe>
					<iframe marginheight="2" marginwidth="2" name="ktmain" src="/kinhthanh/DanNhapTongQuat1.htm" target="_self" scrolling="auto" style="width:80%;display:block;"></iframe>
               </div>
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