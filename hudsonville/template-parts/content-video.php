<?php
		// Get the Video Fields
		$video =  get_field('mp4_video'); // MP4 Field Name
		// Build the  Shortcode
		$attr =  array(
		'mp4'      => $video_mp4,
		'preload'  => 'auto'
		);

		// Display the Shortcode
		echo wp_video_shortcode(  $attr );
		?>