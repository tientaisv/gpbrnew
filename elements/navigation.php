            <?php
            $lang = '';
            $term = get_queried_object();
            $image_top = get_field('top_image', $term);
            $image_ts = get_field('image_tieusu', $term);
            $ts = get_field('tieu_su', $term);
            if(defined('ICL_LANGUAGE_CODE')) {
                $lang = ICL_LANGUAGE_CODE;
            }
            $dd_effect = 'dd-effect-'.mom_option('nav_dd_animation');
            if ($dd_effect == '' || mom_option('nav_dd_animation') == false) {
                $dd_effect = 'dd-effect-slide';
            }
            $nav_sh = '';
            if (mom_option('nav_shadow') == 2) {
                $nav_sh = ' nav_shadow_on';
            } elseif (mom_option('nav_shadow') == 3) {
                $nav_sh = ' nov_white_off';
            }
            ?>
            <nav id="navigation" itemtype="http://schema.org/SiteNavigationElement" itemscope="itemscope" role="navigation" class="<?php echo $dd_effect.$nav_sh; ?> ">
                <div class="navigation-inner">
                <div class="container">
                    <?php if (mom_option('sticky_navigation_logo', 'url') != '') {
                            echo '<a class="sticky_logo" href="'. esc_url(home_url()) .'"><img src="'.mom_option('sticky_navigation_logo', 'url').'" alt="'. get_bloginfo('name') .'"></a>';
                    } ?>
                    <?php if ( has_nav_menu( 'main' ) ) { ?>
                        <?php 
$main_menu_query = get_transient( 'main_menu_query'.get_queried_object_id().$lang );
if (function_exists('is_buddypress')) {$main_menu_query = false;}
if( $main_menu_query === false ) {
    $main_menu_query = wp_nav_menu ( array( 'menu_class' => 'main-menu mom_visibility_desktop','container'=> 'ul', 'theme_location' => 'main', 'walker' => new mom_custom_Walker(), 'echo' => false  )); 
        set_transient( 'main_menu_query'.get_queried_object_id().$lang, $main_menu_query, 60*60*24 );
}
echo $main_menu_query;
    ?>
                    <?php } ?>
                    <?php if ( has_nav_menu( 'main' ) || has_nav_menu( 'mobile_main' ) ) { 
                            $menu_location = 'main';
                            if (has_nav_menu( 'mobile_main' )) {
                                $menu_location = 'mobile_main';
                            }
                    ?>
                        <div class="device-menu-wrap mom_visibility_device">
                        <div id="menu-holder" class="device-menu-holder">
                            <i class="fa-icon-align-justify mh-icon"></i> <span class="the_menu_holder_area"><i class="dmh-icon"></i><?php _e('Menu', 'theme'); ?></span><i class="mh-caret"></i>
                        </div>
                        <?php 
$main_mobile_menu_query = get_transient( 'main_mobile_menu_query'.get_queried_object_id().$lang );
if (function_exists('is_buddypress')) {$main_mobile_menu_query = false;}
if( $main_mobile_menu_query === false ) {
    $main_mobile_menu_query = wp_nav_menu ( array( 'menu_class' => 'device-menu mom_visibility_device','container'=> 'ul', 'theme_location' => $menu_location, 'walker' => new mom_mobile_custom_walker(), 'echo' => false  )); 
        set_transient( 'main_mobile_menu_query'.get_queried_object_id().$lang, $main_mobile_menu_query, 60*60*24 );
}
echo $main_mobile_menu_query;
                        ?>
                        </div>
                        <?php
                        if (file_exists(get_template_directory() . '/demo/demo.php')) {
                            global $mom_iconic_menu;
                                wp_nav_menu ( array( 'menu_class' => 'main-menu mom_visibility_desktop display_none iconic_menu','container'=> 'ul', 'menu' => $mom_iconic_menu, 'walker' => new mom_custom_Walker()  ));
                        }
                        ?>
                    <?php } ?>
                    
                </div>
                </div> <!--nav inner-->
            </nav> <!--Navigation-->
            <?php do_action('mom_under_navigation'); ?>
		      
			  
				<?php 
                if(is_single() || is_tag() || is_page(56498) ){  
                // if is tag 
                        if(has_tag(2032) || is_page(56498) ){
                            ?>
                           <style>
                           .tag-tudao{
                            
                                background-color: #E0D6DE;
                         
                           }
                              .event-tudao .main-cat-inner{
                                       border-top: 5px solid #C12C1E;
                                        background: #fff;
                                        padding: 10px;
                                }
                                .tag-tudao .blog-post{
                                   border-top: 5px solid #C12C1E;  
                                }
                                .event-tudao .main-cat-inner .news-summary a{
                                    color: #C12C1E;
                                }
                                .single-related-posts{
                                    padding:10px;
                                }
                                 .single-related-posts li{
                                    margin-right:10px;
                                 }
                               .pagination span.current{
                                        background: #C12C1E none repeat scroll 0 0;
                                         border: 1px solid #C12C1E;
                                }
                       </style>
                                <div class="boxed-content-wrapper  tag-tudao  clearfix">
                            <?php if (mom_option('nav_shadow') == 1) { ?> 
                            <div class="nav-shaddow"></div>
                            <?php } else { ?>
                            <div style="height:20px;"></div>
                            <?php } ?>
                        <?php
                        }elseif($ts){

                            ?>
                            <style>
                                .event-tangle .desInfo strong {
                                        color: #87218e;
                                    }
                                .one_third .widget-head {
                                    background: none !important;
                                }
                                .letang .blog-post {
                                border: none;
                                background: #FFF;
                                padding: 20px;
                            }
                            .letang .blog-post .mom-social-share.ss-horizontal{
                                margin-bottom: -20px;
                            }
                            .cat-event-letang{
                                padding-right:0px !important;
                            }
                            </style>
                                <div class="boxed-content-wrapper letang  clearfix">
                                    <?php if (mom_option('nav_shadow') == 1) { ?> 
                                    <div class="nav-shaddow"></div>
                                    <?php } else { ?>
                                    <div style="height:20px;"></div>
                                <?php } ?>
                            <?php }
                        ?>
                        <?php
                          
                    //endif
                  
                }else{
                    ?>
                    
                    <div class="boxed-content-wrapper   clearfix">
                            <?php if (mom_option('nav_shadow') == 1) { ?> 
                            <div class="nav-shaddow"></div>
                            <?php } else { ?>
                            <div style="height:20px;"></div>
                            <?php } 
                }

            ?>
			
	  

