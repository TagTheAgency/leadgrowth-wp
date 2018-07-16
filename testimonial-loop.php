<?php $args = array('post_type' => 'testimonial'); ?>
<?php $loop = new WP_query($args); ?>
<?php if ($loop->have_posts()):?>
	<div class="container-fluid pt-5 pt-lg-0" style="background-color: #<?= $bg_color ?>">
		<div class="container">
			<?php  while($loop->have_posts()):$loop->the_post();  ?>
			<div class="row justify-content-center align-items-center mb-3">
				<a href="<?php the_permalink(); ?>" class="testimony row py-5 px-3 primary rounded justify-content-center align-items-center testimonial-item">
					<div class="col-12 row justify-content-center pb-3">
						<div class="img-container testimonial-image-small">
							<?php the_post_thumbnail(); ?>
						</div>
					</div>
					<div class="col-12 text-center">
						<div class="col-12 mb-3 testiominal-text font-1">
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
