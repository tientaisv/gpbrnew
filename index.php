<?php get_header(); ?>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <?php if (mom_option('home_page_builder') == '') { ?>
                    <?php global $wp_query; if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        <?php mom_blog_post('', false, 245); ?>
                    <?php endwhile; ?>
                    <?php  else:  ?>
                    <!-- Else in here -->
                    <?php  endif; ?>
                    <?php mom_pagination($wp_query->max_num_pages); ?>
                    <?php wp_reset_query(); ?>
                    <?php } else { ?>
                        <?php echo apply_filters('the_content', mom_option('home_page_builder')); ?>
                    <?php } ?>
                </div> <!--main column-->
				<div class="col-md-4">
					<?php get_sidebar(); ?>
				</div>
            <div class="clear"></div>
            </div> <!--main container-->            
                
        </div> <!--main inner-->
<?php get_footer(); ?>