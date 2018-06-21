<?php $args = array('post_type' => 'post'); ?>
<?php $loop = new WP_query($args); ?>
<?php if ($loop->have_posts()): while($loop->have_posts()):$loop->the_post(); ?>
	<?php
		$alignment = get_post_meta( $post->ID, 'text_alignment_meta', true );
		$bg_color = get_post_meta( $post->ID, 'post_bg', true );
	?>
	<div class="container-fluid py-5 text-black" style="background-color: #<?= $bg_color ?>">
		<div class="container homepage-section">
			<!-- article -->
			<div id="post-<?php the_ID(); ?>" <?php post_class("row justify-content-center align-items-center py-3 {$alignment}"); ?>>

				<div class="col-11 col-md-6 order-2 order-md-1 text-center">
					<strong>
					<h2 class="text-primary"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2></strong>
					<p><?php the_content(); ?></p>
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
