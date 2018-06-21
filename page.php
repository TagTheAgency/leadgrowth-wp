<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>


		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<div class="spacer-50"></div>
			<div class="container mt-5 page-content">
				<div class="container-fluid">
					<div class="row justify-content-center justify-content-md-start">
						<div class="col-10">
							<strong><h2 class="text-primary"><?php the_title(); ?></h2></strong>
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
