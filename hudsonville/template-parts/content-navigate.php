
  <a class="db link w-100 w-50-m w-50-l mb4 ph3" href="<?php the_permalink();?>">
    <div class="aspect-ratio aspect-ratio--1x1 aspect-ratio--16x9-ns">
      <div class="aspect-ratio--object cover bg-center flex items-start justify-center" style="<?php if( get_field('hero_image') ): ?>background-image: url(<?php the_field('hero_image'); ?>);<?php endif; ?>">
        <div class="bg-white absolute right-0 bottom-0 mb4 ph3">
		<h1 class="f4 f2-l playfair-article mb0 mt2 tr"><?php the_title(); ?></h1>
		<p class="f6 playfair-article mt0 tr"><?php nice_date(get_field('date')); ?></p>
		</div>
      </div>
    </div>
  </a>
