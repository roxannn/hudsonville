<div class="flex-l pb6">
			<div class="article-hero w-100 w-60-l vh-50 min-vh-100-l cover" style="<?php if( get_field('hero_image') ): ?>
			background-image: url(<?php the_field('hero_image'); ?>);
			<?php endif; ?>"></div>
			
			<div class="w-100 w-40-l flex items-center-ns pa3 pb0 justify-center justify-none-l">
			<div class="pa4-l"><h2 class="f2 f1-ns playfair-article mb0 mt2"><?php the_title(); ?></h2>
			<p class="f6 playfair-article mt0"><?php nice_date(get_field('date')); ?></p>
    		<p class="montserrat-intro f6 mb0 f5-l measure pt3"><?php the_sub_field('header_intro'); ?></p>
  			<!-- if it’s a text component, show us the data -->
			</div>
			</div>
				
		</div>