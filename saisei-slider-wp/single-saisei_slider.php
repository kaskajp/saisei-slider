<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Saisei Slider</title>
		<link href="<?php echo plugins_url('/assets/css/saisei.css', __FILE__ ); ?>" rel="stylesheet" type="text/css">
	</head>
	<body>
		<?php if( have_rows('saisei_slides') ): ?>
			<?php while( have_rows('saisei_slides') ): the_row(); ?>
				<?php if( get_row_layout() == 'image_slide' ): ?>
					<img src="<?php the_sub_field('image'); ?>" class="saisei-slide" data-saiseitime="<?php the_sub_field('timeout'); ?>" alt="" data-no-lazy="1" />
				<?php elseif( get_row_layout() == 'video_slide' ): ?>
					<video class="saisei-slide" muted>
						<source src="<?php the_sub_field('video'); ?>" type="video/mp4">
					</video>
				<?php elseif( get_row_layout() == 'iframe_slide' ): ?>
					<iframe src="<?php the_sub_field('iframe'); ?>" class="saisei-slide" scrolling="no" data-saiseitime="<?php the_sub_field('timeout'); ?>" data-no-lazy="1"></iframe>
				<?php endif; ?>
			<?php endwhile; ?>
		<?php endif; ?>
		<script src="<?php echo plugins_url('/assets/js/saisei.js', __FILE__ ); ?>"></script>
	</body>
</html>