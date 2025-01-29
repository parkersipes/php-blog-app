<?php
session_start();
include 'includes/header.php'; // Include header
include 'includes/navbar.php'; // Include navbar
?>
	
	<body>
		<div class="page-wrap" id="root">
			
			<!-- Content-->
			<div class="wil-content">
				
				<!-- Section -->
				<section class="awe-section">
					<div class="container">
						
						<!-- page-title -->
						<div class="page-title pb-40">
							<h2 class="page-title__title">Get in touch</h2>
							<p class="page-title__text">Curabitur elementum urna augue, eu porta</p>
							<div class="page-title__divider"></div>
						</div><!-- End / page-title -->
						
					</div>
				</section>
				<!-- End / Section -->
				
				
				<!-- Section -->
				<section class="awe-section bg-gray">
					<div class="container">
						<div class="row">
							<div class="col-md-4 col-lg-3 ">
								
								<!-- contact -->
								<div class="contact">
									<div class="contact__icon"><i class="pe-7s-note"></i></div>
									<h3 class="contact__title">address</h3>
									<div class="contact__text">Nam suscipit nisi risus, et porttitor metus molest</div>
								</div><!-- End / contact -->
								
								
								<!-- contact -->
								<div class="contact">
									<div class="contact__icon"><i class="pe-7s-back"></i></div>
									<h3 class="contact__title">call us</h3>
									<div class="contact__text">+1-202-555-0177</div>
								</div><!-- End / contact -->
								
								
								<!-- contact -->
								<div class="contact">
									<div class="contact__icon"><i class="pe-7s-voicemail"></i></div>
									<h3 class="contact__title">e-mail</h3>
									<div class="contact__text"><a href="#">info@awethemes.com</a></div>
								</div><!-- End / contact -->
								
							</div>
							<div class="col-md-7 col-lg-8 col-xs-offset-0 col-sm-offset-0 col-md-offset-0 col-lg-offset-1 ">
								<div class="form-wrapper">
									
									<!-- form-item -->
									<div class="form-item form-item--half">
										<input class="form-control" type="text" name="input" placeholder="Your name"/>
									</div><!-- End / form-item -->
									
									
									<!-- form-item -->
									<div class="form-item form-item--half">
										<input class="form-control" type="text" name="input" placeholder="Your emai"/>
									</div><!-- End / form-item -->
									
									
									<!-- form-item -->
									<div class="form-item">
										<input class="form-control" type="text" name="input" placeholder="Subject"/>
									</div><!-- End / form-item -->
									
									
									<!-- form-item -->
									<div class="form-item">
										<textarea class="form-control" placeholder="Your message" style="min-height:200px;"></textarea>
									</div><!-- End / form-item -->
									
									
									<!-- form-item -->
									<div class="form-item">
										<a class="md-btn md-btn--primary md-btn--lg " href="#">Send message
										</a>
									</div><!-- End / form-item -->
									
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- End / Section -->
				
			</div>
			<!-- End / Content-->
			
<?php
include 'includes/footer.php'; // Include footer
?>
	</body>
</html>