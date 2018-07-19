<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>


		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<div class="spacer-100"></div>
			<div class="container-fluid primary py-5 mt-4">
				<div class="container py-4">
					<div class="row justify-content-center justify-content-md-start align-items-md-center">
						<div class="col-10">
							<strong><h1 class="text-primary text-white"><?php the_title(); ?></h1></strong>
						</div>
					</div>
				</div>
			</div>
			<div class="spacer-30"></div>
			<div class="container my-4 page-content">
				<div class="container-fluid">
					<div class="row justify-content-center justify-content-md-start">
						<div class="col-10">
							<?php the_content(); ?>
						</div>
					</div>
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

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
