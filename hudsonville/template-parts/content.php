<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package hudsonville
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	
	
	
	<header class="entry-header">
		
	</header><!-- .entry-header -->

	

	<div class="entry-content">
		
	<div class="mh2 mh4-ns mt1-ns mb3 bg-white">
	
		<!-- if we have some flexible content, let’s loop through it -->
		<?php if( have_rows('content') ): while ( have_rows('content') ) : the_row();
  		// if it’s a header, go through the data
  		
		if( get_row_layout() == 'header' ): ?>
		
		
		
		<?php get_template_part( 'template-parts/content-hero'); ?>
		
    	
		<?php elseif( get_row_layout() == 'text_block' ): ?>
		<?php get_template_part( 'template-parts/content-text'); ?>
		
		
		
		<?php elseif( get_row_layout() == 'gallery' ): ?>
		<?php get_template_part( 'template-parts/content-gallery'); ?>
		
		
		<?php elseif( get_row_layout() == 'video' ): ?>
		<?php get_template_part( 'template-parts/content-video'); ?>
		
	
		<?php endif;
		endwhile; endif ?>
		</div>
		
		<?php get_template_part( 'template-parts/content-explore'); ?>	
		
		
		</div><!-- .entry-content -->
	

		

	
	
	
	<footer class="entry-footer">
		<?php //hudsonville_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php //the_ID(); ?> -->
