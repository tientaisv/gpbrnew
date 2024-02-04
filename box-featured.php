<!--News box two-->	
		<!--News box three-->	
               
                    <div class="row">
					<div class="news-box nb-style-3">
                            <div class="col-md-7">
		<?php
			$args = array(
			'ignore_sticky_posts' => 1,
			'posts_per_page' => 1, 'post_type' => $post_type, 'category__not_in' => $exclude_categories, 'cache_results' => false, 'no_found_rows' => true, 'post__not_in' => $do_unique_posts,
			'cat' => 159,
			'orderby' => $orderby,
			'order' => $sort,
			); 
		$query = new WP_Query( $args );
		update_post_thumbnail_cache( $query ); ?>
		<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); if ($unique_posts) {$do_unique_posts[] = get_the_ID();} ?>
                            <article <?php post_class(); ?>>
				<?php if (mom_post_image() != false) { ?>
                                <div class="news-image">
                                        <a href="<?php the_permalink(); ?>"><?php mom_post_image_full('mom-portfolio-one', 'big-wide-img'); ?></a><span class="post-format-icon"></span>
                                </div>
				<?php } ?>
                                <div class="news-summary">
                                   <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                   
                                <P>
					<?php
						$excerpt = get_the_excerpt();
						if ($excerpt == false) {
						$excerpt = get_the_content();
						}
						
						echo wp_html_excerpt(strip_shortcodes($excerpt), 450, '...');
					?>
				   <a href="<?php the_permalink(); ?>" class="read-more-link"><?php _e('Đọc tiếp', 'theme'); ?> <?php echo $da; ?></a>
				</P>
                                </div>
                            </article>
		<?php endwhile; else: ?>
		<?php endif; ?>
		<?php wp_reset_postdata(); ?>

                            </div> <!--recent news-->
                            <div class="col-md-5 other-articles">
                                <ul>
		<?php
			$args = array(
			'ignore_sticky_posts' => 1,
			'posts_per_page' => $count, 'post_type' => $post_type, 'category__not_in' => $exclude_categories, 'cache_results' => false, 'no_found_rows' => true, 'post__not_in' => $do_unique_posts,
			'cat' => 159,
			'orderby' => $orderby,
			'order' => $sort,
			'offset' => '1',
			); 
		
		$query = new WP_Query( $args );
		update_post_thumbnail_cache( $query ); ?>
		<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); if ($unique_posts) {$do_unique_posts[] = get_the_ID();} ?>
                                    <li>
				<?php
				$is_img = '';
				if (mom_post_image() != false) {
					$is_img = 'has-feature-image';
				?>
                 <a href="<?php the_permalink(); ?>"><?php mom_post_image_full('small-wide', 'small-wide-hd'); ?></a>
				<?php } ?>
                                        <div class="details <?php echo $is_img; ?>">
				<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>			   
                                   </div>
                                    </li>
		<?php endwhile; else: ?>
		<?php endif; ?>
		<?php wp_reset_postdata(); ?>
                                </ul>

                            </div>
                    </div>
		    <?php if ($show_more == 'on') { ?>
                    <footer class="nb-footer">
                        <a href="<?php echo $url; ?>" data-post_type="<?php echo $post_type; ?>" class="show-more-<?php echo $show_more_type; ?>" data-offset="<?php echo $count+1; ?>" data-number_of_posts="<?php echo $count; ?>" data-display="<?php echo $display; ?>" data-category="<?php echo $category; ?>" data-tag="<?php echo $tag; ?>" data-nbs="<?php echo $style; ?>" data-sort="<?php echo $sort; ?>" data-orderby="<?php echo $orderby; ?>" data-exclude_cats="<?php echo esc_attr($exclude_categories_text); ?>"><?php _e('Show More','theme'); ?> <?php echo $la; ?> </a>
                    </footer>
		    <?php } ?>
                    
                </div> <!--news box-->                