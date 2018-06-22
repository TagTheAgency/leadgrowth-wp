<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
        <link href="<?php echo get_template_directory_uri(); ?>/css/style.min.css" rel="stylesheet">
        <link href="<?php echo get_template_directory_uri(); ?>/css/normalize.min.css" rel="stylesheet">
		<link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
	  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">


		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>
		<!-- Navigation -->
		<nav id="navbar" class="fixed bg-on-scroll white drop-shadow bg-transparent d-inline-block">
			<div class="container">
				<div class="row nav-bar justify-content-center">
					<div class="col-11 row justify-content-between align-items-center">
						<div class="col-auto d-inline-block">
							<?php
							$custom_logo_id = get_theme_mod( 'custom_logo' );
							$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
							if ( has_custom_logo() ) { ?>
								<div class="logo-wrapper">
									<a href="<?= home_url();?>"><img src="<?= esc_url( $logo[0] ) ?>">
								</div>
							<?php } else { ?>
								<h1><?= get_bloginfo( 'name' ) ?></h1>
							<?php } ?>
						</div>
						<div class="col-auto d-none d-md-flex align-items-center text-primary">
							<?php custom_nav(); ?>
						</div>
						<div class="col-auto d-inline-block d-md-none">
							<i id="mobile-menu-btn" class="material-icons trigger">menu</i>
						</div>
					</div>
				</div>
			</div>
		</nav>
		<div id="mobile-menu" class="fixed vh-100 w-100 white text-primary container-fluid d-lg-none">
			<div class="row text-right justify-content-center pt-5">
				<div class="col-11">
					<div class="col-12">
						<i id="mobile-menu-close" class="material-icons hover primary-text">close</i>
					</div>
					<div class="col-12 mt-4">
						<?php custom_nav(); ?>
					</div>
				</div>
			</div>
		</div>
