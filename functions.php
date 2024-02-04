<?php
require_once get_template_directory() . '/framework/main.php';
if (file_exists(get_template_directory() . '/demo/demo.php')) {
    	$detect = new Mobile_Detect;
	if(! $detect->isMobile()) {
            require_once get_template_directory() . '/demo/demo.php';
	}
}
 add_filter( 'no_texturize_shortcodes', 'momt_shortcodes_to_exempt_from_wptexturize' );
function momt_shortcodes_to_exempt_from_wptexturize($shortcodes){
    $shortcodes[] = 'tabs';
    $shortcodes[] = 'accordions';
    $shortcodes[] = 'images';
    $shortcodes[] = 'graphs';
    return $shortcodes;
}


function get_custom_cat_template($single_template) {
   global $post;
   if ( has_tag(2804)) {
       $single_template = get_template_directory() . '/single-letang.php';

   }
   return $single_template;
} 
add_filter( "single_template", "get_custom_cat_template" ) ;

function custom_login_logo() {
echo '<style type="text/css">
h1 a { background-image:url('.get_template_directory_uri().'/images/logo-admin.png) !important;background-size: 155px !important;width: 210px !important; height: 150px !important; }
</style>';
}

add_action('login_head', 'custom_login_logo');
remove_filter('template_redirect', 'redirect_canonical');
add_filter('rocket_htaccess_charset', '__return_false');
add_filter( 'https_local_ssl_verify', '__return_true' );
function add_cors_http_header(){
    header("Access-Control-Allow-Origin: *");
}
add_action('init','add_cors_http_header');
//Adding the Open Graph in the Language Attributes
function add_opengraph_doctype( $output ) {
        return $output . ' xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml"';
    }
add_filter('language_attributes', 'add_opengraph_doctype');
 
//Lets add Open Graph Meta Info
 
function insert_fb_in_head() {
    global $post;
    if ( !is_singular()) //if it is not a post or a page
        return;
        echo '<meta property="fb:app_id" content="240099799700243" />';
        echo '<meta property="og:title" content="' . get_the_title() . '"/>';
        echo '<meta property="og:type" content="article"/>';
        echo '<meta property="og:url" content="' . get_permalink() . '"/>';
        echo '<meta property="og:site_name" content="Giáo Phận Bà Rịa"/>';
    if(!has_post_thumbnail( $post->ID )) { //the post does not have featured image, use a default image
        $default_image=get_template_directory_uri()."/images/logo-admin.png"; //replace this with a default image on your server or an image in your media library
        echo '<meta property="og:image" content="' . $default_image . '"/>';
    }
    else{
        $thumbnail_src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
        echo '<meta property="og:image" content="' . esc_attr( $thumbnail_src[0] ) . '"/>';
    }
	$excerpt = get_the_content();
	echo '<meta property="og:description" content="'.wp_html_excerpt(strip_shortcodes($post->post_content), 800) .'"/>';
    echo "
";
	
}
add_action( 'wp_head', 'insert_fb_in_head', 5 );
add_filter( 'admin_footer', 'removes_migrate_warning', 99 );
add_action('admin_head', 'removes_migrate_warning');
function removes_migrate_warning()
{
?>
<style type="text/css">
.jquery-migrate-deprecation-notice,.notice.notice-error.jquery-migrate-dashboard-notice {
    display: none !important;
}
</style>

<?php
}

add_action( 'init', 'stop_heartbeat', 1 );
function stop_heartbeat() {
wp_deregister_script('heartbeat');
}

add_action( 'publish_post', 'nstein_categories' );
add_action( 'publish_post', 'nstein_concepts' );
add_action( 'save_post', 'nstein_comparediv' );
add_action( 'publish_post', 'nstein_related' );
function nstein_comparediv(){

}
function nstein_concepts(){
    
}
function nstein_categories(){
    
}
function nstein_related(){
    
}