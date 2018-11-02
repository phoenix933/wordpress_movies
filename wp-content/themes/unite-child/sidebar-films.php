<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package unite
 */
?>
	<div id="secondary" class="widget-area col-sm-12 col-md-4" role="complementary">
		<?php do_action( 'before_sidebar' ); ?>

			<aside id="search" class="widget widget_search">
				<?php get_search_form(); ?>
			</aside>

			<aside class="widget">
				<h2>Recent Films</h2>
				<ul>
				<?php
				    $recent_posts = wp_get_recent_posts(array('post_type'=>'films'));
				    foreach( $recent_posts as $recent ){
				        echo '<li><a href="' . get_permalink($recent["ID"]) . '" title="'.esc_attr($recent["post_title"]).'" >' .   $recent["post_title"].'</a> </li> ';
				    }
				?>
				</ul>
			</aside>

	</div><!-- #secondary -->
