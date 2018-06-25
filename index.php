<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<div class="container-fluid vh-100 hero-container hero-banner hero-banner-full" style="background-image: url('./img/bg-2.png');">
			<div class="container">
				<div class="row vh-100 text-center text-md-left align-items-center justify-content-center justify-content-md-start">
					<div class="col-11 col-sm-10 col-md-6 offset-md-1 fade-in">
						<h2 class="hero-header text-black font-2 font-sm-3"><strong>Linkedin Profile Optimisation</strong></h2>
						<p class="text-light">LinkedIn profile optimisation to enhance your social selling efforts.</p>
						<a href="about.php" class="btn btn-primary-filled m-0 mt-4 form-scroll btn-round d-inline-flex align-items-center btn-arrow">LEARN MORE <i class="material-icons">keyboard_arrow_right</i></a>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<?php get_template_part('homepage-section-loop.php'); ?>
			<?php get_template_part('testimonial-loop.php'); ?>
			<?php get_template_part('pagination'); ?>
		</div>
		<!-- /section -->
	</main>
<?php get_sidebar(); ?>

<?php get_footer(); ?>
