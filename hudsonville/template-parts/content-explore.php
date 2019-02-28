<div>

	<h1 class="also-like center f4 tc playfair white pt3">You might also like</h1>
	
	
<div class="flex-ns flex-wrap justify-between ph4 ph3-l">
	<?php
// organise our options into a data object
$args = array(
  'posts_per_page' => 3,
  'orderby' => 'rand',
  'post__not_in' => array( $post->ID ),
);
// a variable with our query and options
$query = new WP_Query( $args );
// do a loop with our new query code 
if ($query->have_posts()): while ($query->have_posts()): $query->the_post(); ?>
  <!-- code as we’re used to already! -->

<a href="<?php the_permalink(); ?>" class="db link w-100 w-third-ns ph1 ph3-l mb3 mb0-ns ">
	<div class"aspect-ratio aspect-ratio--1x1">
	
		<div class="aspect-ratio--object-1 bg-center cover h5  relative" style="<?php if( get_field('hero_image') ): ?>
				background-image: url(<?php the_field('hero_image'); ?>);
				<?php endif; ?>">
		<div class="bg-white absolute right-0 bottom-0 mb4 ph3">
		<h1 class="f4 f2-l playfair-article mb0 mt2 tr"><?php the_title(); ?></h1>
		<p class="f6 playfair-article mt0 tr"><?php nice_date(get_field('date')); ?></p>
		</div>
		</div>
	
	</div>
</a>

<?php endwhile; endif; ?>
	
</div>
</div>	