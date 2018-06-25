<?php get_header(); ?>

	<main role="main">
	<!-- section -->
	<section>

		<div class="spacer-50"></div>
		<div class="container-fluid mt-5 page-content">
			<div class="container-fluid mb-5">
				<div class="container">
					<div class="row justify-content-center justify-content-md-start py-4">
						<div class="col-auto col-md-4 justify-content-center">
							<div class="col-6 col-md-12 mb-md-5">
								<div class="img-container testimonial-image">
									<?php the_post_thumbnail(); ?>
								</div>
							</div>
							<div class="col-12 text-center text-md-left mb-4 mb-md-0">
								<strong><h1 class="text-primary text-primary"><?php the_title(); ?></h1></strong>
								<h3><?= get_post_meta(get_the_ID(), 'client_company', true ); ?></h3>
							</div>
						</div>
						<div class="col-10 col-md-8 text-center text-md-left text-black">
							<div class="row justify-content-center justify-content-md-start">
								<?php if (have_posts()): while (have_posts()) : the_post(); ?>
								<div class="col-10">
									<?php the_content(); ?>
								</div>

								<?php endwhile; ?>

								<?php else: ?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="container">

			</div>
		</div>

		<!-- article -->
		<article>

			<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

		</article>
		<!-- /article -->

	<?php endif; ?>

	</section>
	<!-- /section -->
	</main>


<?php get_footer(); ?>
