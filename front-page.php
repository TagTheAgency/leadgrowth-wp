<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<div class="container-fluid hero-container">
			<div class="row hero-banner vh-100 hero-banner-full text-center text-md-left align-items-center justify-content-center justify-content-md-start" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/bg-2.png');">
				<div class="col-12 col-md-10 row justify-content-center align-items-center">
					<div class="col-10 col-sm-9 col-md-6 text-black order-2 order-md-1">
						<h1 class="hero-header text-primary mb-1"><strong>Leadgrowth Linkedin Service</strong></h1>
						<p class="hero-sub-header text-light">Profile optimisation to enhance your social selling efforts.</p>
						<div id="scroll-down" class="btn btn-primary-filled m-0 mt-4 btn-round d-inline-flex align-items-center btn-arrow">LEARN MORE <i class="material-icons">arrow_downward</i></div>
					</div>
				</div>
			</div>
			<div id="page-scroll"></div>
			<div class="spacer-70"></div>
		</div>
		<div class="container-fluid text-white">
			<?php get_template_part('homepage-section-loop'); ?>
			<?php get_template_part('loop') ?>
			<?php get_template_part('pagination'); ?>
		</div>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
