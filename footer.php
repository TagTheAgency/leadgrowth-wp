			<!-- footer -->
			<div class="container text-left pb-sm-5 fade-in pt-4 pt-md-0 mb-5 mb-md-0 contact-container">
				<div class="row justify-content-center align-items-center py-2 py-sm-5">
					<div class="col-11 col-md-6 col-lg-5 pr-0 pr-md-5">
						<h3 id="form-header" class="text-primary mb-4">If you would like to feel this way about LinkedIn and the results it can gain for your business get in touch.</h3>
						<ul>
							<li><i class="fas fa-user-tie text-primary mr-2"></i> Steve Mannion</li>
							<li><i class="fas fa-phone text-primary mr-2"></i> +64 021 022 44127</li>
							<li><i class="fas fa-envelope text-primary mr-2"></i> steve@leadgrowth.co.nz</li>
						</ul>
					</div>
					<div id="form-container" class="col-11 col-md-6 col-lg-5">
						<form method="POST" id="contactform" class="contact-form" action="<?php echo get_template_directory_uri(); ?>/mailer.php">
							<input id="form-name" class="w-100 input-primary mb-3" name="name" type="text" placeholder="Name" required>
							<input class="w-100 input-primary mb-3" type="email" name="email" placeholder="Email" required>
							<input class="w-100 input-primary mb-3" type="number" name="number" placeholder="Phone Number" required>
							<input class="w-100 input-primary mb-3" type="text" name="message" placeholder="Message" required>
							<input class="btn btn-primary-filled w-100 m-0" type="submit" value="SUBMIT">
						</form>
					</div>
				</div>
			</div>
			<footer class="footer py-3 py-md-5" role="contentinfo">
				<div class="container-fluid pt-5">
					<div class="container">
						<div class="row justify-content-center justify-content-md-between">
							<div class="col-10 col-md-auto my-2 mt-sm-0 text-center">
								<p class="copyright text-white">
									&copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?>
								</p>
							</div>
							<div id="social-links" class="col-10 col-md-auto pl-0 my-3 mt-sm-0 text-white">
								<ul class="d-flex justify-content-center">
									<li class="mr-5"><a href="https://www.linkedin.com/company/leadgrowthnz/" target="_blank"><i class="fab fa-linkedin-in hover-secondary"></i></a></li>
									<li class="mr-5"><a href="https://web.facebook.com/leadgrowthNZ" target="_blank"><i class="fab fa-facebook-f hover-secondary"></i></a></li>
									<li ><a href="https://twitter.com/LeadGrowth" target="_blank"><i class="fab fa-twitter hover-secondary" target="_blank"></i></a></li>
								</ul>
							</div>
							<div class="col-10 col-md-auto ls-4 text-white text-center text-md my-3 mt-md-0 col-md-auto top trigger">
								BACK TO TOP
							</div>
						</div>
					</div>
				</div>
				<div class="spacer-100"></div>
				<!-- Load Facebook SDK for JavaScript -->
			</footer>
			<!-- /footer -->
		</div>
		<!-- /wrapper -->
		<?php wp_footer(); ?>
		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>

	</body>
</html>
