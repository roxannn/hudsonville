
<div class="article-container w-40 min-h-100">
	<section class="article-intro cover w-half" style="<?php if( get_field('hero_image') ): ?>
		background-image: url(<?php the_field('hero_image'); ?>);
		<?php endif; ?>">

			<div class="intro-content">

				<h2><?php the_title(); ?></h2>

				<?php if( get_field('date') ): ?>
				<p><?php echo nice_date(get_field('date')); ?>
				</p>
				
				<?php endif; ?>

			</div>
		</section>
</div>