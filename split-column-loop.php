<?php $args = array('post_type' => 'homepage-section', 'meta_value' => array(
	'key' => 'TwoColumn',
	'value' => 'two-column.php'
)); ?>
<?php $loop = new WP_query($args); ?>
<?php if ($loop->have_posts()): while($loop->have_posts()):$loop->the_post(); ?>
	<?php
		$alignment = get_post_meta( $post->ID, 'text_alignment_meta', true );
		$bg_color = get_post_meta( $post->ID, 'post_bg', true );
		$text_color = get_post_meta( $post->ID, 'text_color', true );
	?>
	<div class="container-fluid py-4 text-black" style="<?php if($bg_color): ?>background-color: #<?= $bg_color ?>;<?php endif; ?> <?php if($text_color): ?> color: #<?= $text_color ?><?php endif; ?>">
		<div class="container homepage-section">
			<!-- article -->
			<div id="post-<?php the_ID(); ?>" <?php post_class("left-column row justify-content-center justify-content-lg-between align-items-lg-start mb-lg-5 py-3 {$alignment}"); ?>>

				<div class="col-10 col-lg-7 text-left pr-5">
					<?php the_content(); ?>
				</div>
				<div class="col-10 col-lg-4 text-white">
					<?php get_template_part('testimonial-loop'); ?>
				</div>
			</div>
			<!-- /article -->
		</div>
	</div>
<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>
