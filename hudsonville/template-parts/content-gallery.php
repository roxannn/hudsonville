<div class="container flex flex-wrap center ph2 ph3-l">
			<?php $images = get_sub_field('gallery'); ?>
  			<!-- loop over each individual image item --> 
  			<?php foreach( $images as $image ): ?>
    		<!-- get the image width and add it as a class -->
    	<div class="gallery-image ph2 ph3-l mb2 mb4-l <?php the_field('image_width', $image['id']); ?>">
      		<!-- get the image itself -->
      		<?php echo wp_get_attachment_image( $image['id'], 'full'); ?>
      		<!-- get the caption -->
      		<?php $caption = wp_get_attachment_caption( $image['id'] ); ?>
      		<?php if (!empty($caption)): ?>
        	<p class="caption montserrat-intro f6 o-50 pt2 mv0">
          	<?php echo $caption; ?>
        	</p>
      		<?php endif; ?>
    	</div>
  			<?php endforeach; ?>
		</div>