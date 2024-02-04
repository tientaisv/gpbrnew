<?php
/*
 Template Name: Page Live
*/

  if( date("H") != '23')    {
     get_header(); ?>
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
                        <?php //wp_link_pages( array( 'before' => '<div class="page-links text-right">', 'after' => '</div>' ) );

                        ?>
                    <?php endwhile; // end of the loop. ?>
                    <?php wp_reset_query(); ?>
                <?php } else { ?>
                        <div class="base-box page-wrap">
                        <?php if ($hpt != true) { ?><h1 class="page-title"><?php the_title(); ?></h1><?php } ?>
                        <div class="entry-content">
                    <?php while ( have_posts() ) : the_post(); ?>
                        <?php the_content(); ?>

                        <?php //wp_link_pages( array( 'before' => '<div class="page-links text-right">', 'after' => '</div>' ) ); ?>
                    <?php endwhile; // end of the loop. ?>
                    <?php wp_reset_query(); ?>
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
                    <?php while ( have_posts() ) : the_post(); ?>
                        <?php the_content(); ?>
                        <?php wp_link_pages( array( 'before' => '<div class="page-links text-right">' , 'after' => '</div>' ) ); ?>
                    <?php endwhile; // end of the loop. ?>
                    <?php wp_reset_query(); ?>
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
<script>
	var delay = 30000; 
	setTimeout(function(){ window.location = 'https://f.giaophanbaria.org/live.php'; }, delay);
</script>
      <?php
      get_footer();
    }
    else
    {
        ?>
         <html xmlns="http://www.w3.org/1999/xhtml" >
    <head runat="server">
        <title><?php the_title() ?></title>
        <script type="text/javascript">
          function go_full_screen(){
                  var elem = document.documentElement;
                  if (elem.requestFullscreen) {
                    elem.requestFullscreen();
                  } else if (elem.msRequestFullscreen) {
                    elem.msRequestFullscreen();
                  } else if (elem.mozRequestFullScreen) {
                    elem.mozRequestFullScreen();
                  } else if (elem.webkitRequestFullscreen) {
                    elem.webkitRequestFullscreen();
                  }
                }
        </script>
        <style type="text/css">
        html{
            width:100vw;
            height:100vh;
            overflow:hidden;
        }
            iframe{
                width:100vw;
                height:100vh;
            }
        </style>
    </head>
    <body onload="go_full_screen()">
            <div id="play">
				<iframe width="100%" height="100%" src="https://www.youtube.com/embed/live_stream?channel=UCVghYtE1Qwv0mxMWvmR8Z2w&autoplay=1" frameborder="0" allowfullscreen></iframe>
			</div>
             </body>
    </html>
        <?php


    }
?>