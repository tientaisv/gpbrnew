<?php
class Radio_Widget extends WP_Widget {

  // widget constructor

  public function __construct(){

      $params=array(

            'description' => 'Show Radio widget', //plugin description

            'name' => 'Show Radio'  //title of plugin

        );

	 parent::__construct('show_radio',__('Momizat - Show Radio','theme'), $params);

  }

public function widget( $args, $instance ) {
	//show widget
	extract( $args );
		/* User-selected settings. */
		$title = apply_filters('widget_title', $instance['title'] );


		/* Before widget (defined by themes). */


		/* Title of widget (before and after defined by themes). */
		if ( $title )
		?>
		<style>
			.thu-vien-audio {
			    padding: 10px 25px;
			    text-align: center;
			    background: #f8f8f8;
			    border-right: 1px solid #ccc;
			    margin-bottom: -10px;
			    border-left: 1px solid #ccc;
			    border-bottom: 1px solid #ccc;
			    border-top: 5px solid #ff3b30;
			}
			.thu-vien-audio span {
				    color: #ff3b30;
				    text-transform: uppercase;
				    font-size: 18px;
				}
		</style>
		<h3 class="widget-title thu-vien-audio"><span><?php  echo $title; ?></span></h3>

	<iframe loading=”lazy” style="margin-bottom: 0" name="audio-index-player" id="audio-index-player" width="100%" height="450px" scrolling="no" frameborder="no" allow="autoplay" src="./load.php?name=Ke-chuyen-thanh-ca-giuse&number=1"></iframe>

	<ul id="playlist" class="list-unstyled">
		<li> <i class="fa fa-play"></i> <a class="active" href="./load.php?name=Ke-chuyen-thanh-ca-giuse&number=1">Kể Chuyện Thánh Cả Giuse<br><em style=" margin-left: 14px;font-size: 13px;">Nguồn: tinmung.net</em></a></li>
		<li><i class="fa fa-play"></i> <a href="./load.php?name=40&number=2">40 bài tĩnh tâm mùa chay </a></li>
		<li> <i class="fa fa-play"></i> <a href="./load.php?name=13nguoi&number=2">13 người đã thay đổi thế giới</a></li>
		<li> <i class="fa fa-play"></i> <a href="./load.php?name=tamca&number=1">Radio Tâm Ca (Vatican News Tiếng Việt)</a></li>
	</ul>

	<?php
}
 public function form( $instance ) {
 	  // creates the back-end form
	 $instance = wp_parse_args( (array) $instance, array( 'title' => '' ) );
		 $title = $instance['title'];?>
		 <p>

	  <label for="<?php echo $this->get_field_id('title'); ?>">Title:

	    <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo attribute_escape($title); ?>" />

	  </label>

	</p>

	<?php

  }

  // Updating widget replacing old instances with new

  public function update( $new_instance, $old_instance ) {

    // processes widget options on save

		 $instance = $old_instance;

     	$instance['title'] = strip_tags( $new_instance['title'] );
     	 	return $instance;
  }


}
add_action('widgets_init', 'register_Radio_Widget');

function register_Radio_Widget() {

register_widget('Radio_Widget');

}
?>