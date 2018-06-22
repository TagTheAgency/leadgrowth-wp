<?php $args = array('post_type' => 'homepage-section'); ?>
<?php $loop = new WP_query($args); ?>
<?php if ($loop->have_posts()): while($loop->have_posts()):$loop->the_post(); ?>
	<?php
		$alignment = get_post_meta( $post->ID, 'text_alignment_meta', true );
		$bg_color = get_post_meta( $post->ID, 'post_bg', true );
	?>
	<div class="container-fluid py-5 text-black" style="background-color: #<?= $bg_color ?>">
		<div class="container homepage-section">
			<!-- article -->
			<div id="post-<?php the_ID(); ?>" <?php post_class("row justify-content-center align-items-center mb-lg-5 py-3 {$alignment}"); ?>>

				<div class="col-11 col-md-6 <?php if( has_post_thumbnail()): ?>col-lg-8<?php else:?>col-lg-10<?php endif; ?> order-2 order-md-1 text-center">
					<strong>
					<h2 class="text-primary"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2></strong>
					<p><?php the_excerpt(); ?></p>
					<a href="<?php the_permalink(); ?>" class="link-off"><div class="btn btn-primary-filled m-0 mt-4 form-scroll btn-round d-inline-flex align-items-center btn-arrow">LEARN MORE <i class="material-icons">keyboard_arrow_right</i></div></a>
				</div>
				<!-- post thumbnail -->
				<?php if ( has_post_thumbnail()): // Check if Thumbnail exists ?>
					<div class="col-11 col-md-6 col-lg-4 order-1 order-md-2">
						<div class="img-container">
							<?php the_post_thumbnail(); // Fullsize image for the single post ?>
						</div>
					</div>
				<?php endif; ?>
				<!-- /post thumbnail -->
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
