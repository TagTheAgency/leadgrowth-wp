<?php $args = array('post_type' => 'testimonial'); ?>
<?php $loop = new WP_query($args); ?>
<?php if ($loop->have_posts()):?>
	<div class="container-fluid py-5">
		<div class="container shadow-me">
			<div class="row text-primary justify-content-center">
				<div class="col-auto mb-3">
					<h2>Testimonies</h2>
				</div>
			</div>
		<?php  while($loop->have_posts()):$loop->the_post();  ?>
			<div class="row justify-content-center align-items-center mb-3">
				<a href="<?php the_permalink(); ?>" class="testimony row col-11 py-4 px-3 primary rounded justify-content-center align-items-center testimonial-item">
					<div class="col-auto col-md-2 mb-4 mb-md-0">
						<div class="img-container testimonial-image-small">
							<?php the_post_thumbnail(); ?>
						</div>
					</div>
					<div class="col-12 col-md-9 text-left">
						<div class="col-12 mb-3 testiominal-text">
							<p><?php the_excerpt(); ?></p>
						</div>
						<div class="col-12 font-1">
							- <strong><?php the_title(); ?>, <?= get_post_meta(get_the_ID(), 'client_company', true ); ?></strong>
						</div>
					</div>
				</a>
			</div>
		<?php endwhile; ?>
		</div>
	</div>

<?php endif; ?>
