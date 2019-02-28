<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package hudsonville
 */

get_header();
?>


	<div id="primary" class="content-area">
		<main id="main" class="site-main">
		
		<div class="content ph3 mt1-ns">
			
		<div class="landing ph4 mh3 mt1-ns pb4 mb1 flex items-center justify-center">
		<img src="<?php bloginfo('template_directory');?>/assets/landing-image.jpg">
		<p class="absolute tc white playfair f-subheadline pa0 ma0">In Hudsonville</p>
		</div>
		
		<div class="navigate flex flex-wrap container center ph4-l">
		<?php if ( have_posts() ) : while (have_posts()) : the_post(); ?>
		<?php get_template_part( 'template-parts/content-navigate'); ?>
		<!-- the title, the content etc.. -->
		<?php endwhile; ?>
		<!-- pagination -->
		
		<?php else : ?>
		<!-- No posts found -->
		<?php endif; ?>
		</div>
			
		<div class="pagination"><p class="pagination-p tc montserrat f5 dim"><?php posts_nav_link(); ?></p></div>
			
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
