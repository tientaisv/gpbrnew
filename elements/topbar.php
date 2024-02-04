<?php 
$lang = '';
if(defined('ICL_LANGUAGE_CODE')) {
    $lang = ICL_LANGUAGE_CODE;
}
if (mom_option('topbar') == 1) { ?>
 <div class="topbar">
        <div class="container">
            <?php if(mom_option('tn_left_content') == 'custom') {
                echo do_shortcode(mom_option('tn_custom_text'));
             } elseif (mom_option('tn_left_content') == 'social') { ?>
		<?php get_template_part('elements/social', 'icons'); ?>
		<?php } elseif (mom_option('tn_left_content') == 'search') { ?>
                        <div class="search-form">
                            <form method="get" action="<?php echo home_url(); ?>">
                                <input type="text" name="s" placeholder="<?php _e('Search ...', 'theme'); ?>">
                                <button class="button"><i class="fa-icon-search"></i></button>
                            </form>
                        </div>
		<?php } else { ?>
     <?php if ( has_nav_menu( 'topnav' ) ) { ?>
			     <?php  
          
$top_menu_left = get_transient( 'top_menu_left'.get_queried_object_id().$lang );
if (function_exists('is_buddypress')) { $top_menu_left = false;}

if( $top_menu_left === false ) {
    $top_menu_left = wp_nav_menu ( array( 'menu_class' => 'top-nav mom_visibility_desktop','container'=> 'ul', 'theme_location' => 'topnav', 'echo' => false )); 
        set_transient( 'top_menu_left'.get_queried_object_id().$lang, $top_menu_left, 60*60*24 );
}
echo $top_menu_left;
    } //end top menu
           ?>

     <?php if ( has_nav_menu( 'topnav' ) || has_nav_menu( 'mobile_top' ) ) { 
                            $menu_location = 'topnav';
                            if (has_nav_menu( 'mobile_top' )) {
                                $menu_location = 'mobile_top';
                            }
    ?>
			     <div class="mom_visibility_device device-top-menu-wrap">
			      <div class="top-menu-holder"><i class="fa-icon-reorder mh-icon"></i></div>
			      <?php  
           
$top_mobile_menu_left = get_transient( 'top_mobile_menu_left'.get_queried_object_id().$lang );
if (function_exists('is_buddypress')) { $top_mobile_menu_left = false;}

if( $top_mobile_menu_left === false ) {
    $top_mobile_menu_left = wp_nav_menu ( array( 'menu_class' => 'device-top-nav','container'=> 'ul', 'theme_location' => $menu_location, 'walker' => new mom_topmenu_custom_walker(), 'echo' => false )); 
        set_transient( 'top_mobile_menu_left'.get_queried_object_id().$lang, $top_mobile_menu_left, 60*60*24 );
}
echo $top_mobile_menu_left;
            ?>
			     </div>

    <?php } ?>
             <?php }?>
			 <div class="search-top pull-right hidden-xs col-md-4 col-sm-2">
			
				<form action="<?php echo home_url('/'); ?>">
				    <input type="text" placeholder="<?php _e('Tìm kiếm...', 'theme'); ?>" value="<?php echo $s; ?>" name="s" data-nokeyword="<?php _e('Từ khóa tìm kiếm không được để trống.', 'theme'); ?>">
                            
				</form>
				 <span class="hidden-sm"><?php echo sw_get_current_weekday(); ?></span>
			 </div>
       </div> <!--tb left-->
 </div> <!--topbar-->
 <?php } ?>