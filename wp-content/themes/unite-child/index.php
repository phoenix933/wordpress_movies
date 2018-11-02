<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package unite
 */

get_header(); ?>

	<div id="primary" class="content-area col-sm-12 col-md-8">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php
				$recent_posts = wp_get_recent_posts(array('post_type'=>'films'));
				foreach( $recent_posts as $recent ){
			?>

				<article id="film-1" class="film-1 post type-post status-publish format-standard hentry category-uncategorized">
					<header class="entry-header page-header">

						<a href="<?php echo get_permalink($recent["ID"]); ?>" title="<?php echo esc_attr($recent["post_title"]); ?>"></a>

						<h2 class="entry-title"><a href="<?php echo get_permalink($recent["ID"]); ?>" rel="bookmark"><?php echo esc_attr($recent["post_title"]); ?></a></h2>

						<!-- .entry-meta -->
					</header><!-- .entry-header -->

					<div class="entry-content">
						<p><?php echo esc_attr($recent["post_content"]); ?></p>

					</div><!-- .entry-content -->
					<!-- .entry-meta -->
					<hr class="section-divider">
				</article>

			<?php } ?>

			<?php unite_paging_nav(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar('films'); ?>
<?php get_footer(); ?>
