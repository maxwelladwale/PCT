<?php
/* Template Name: Contact Page */

get_header();

?>
<script>
    const element = document.getElementById("navh");
    // element.innerHTML = '<div class="glax_tm_header_wrap" data-style="light" data-position="absolute">';
</script>
<!-- CONTACT -->
<div class="glax_tm_section">
			<div class="glax_tm_main_title_holder">
				<div class="container">
					<div class="title_holder">
						<h3>Contact Us</h3>
					</div>
					<div class="builify_tm_breadcrumbs">
						<ul>
							<li>Home</li>
							<li class="shape"><span></span></li>
							<li><span>Contact</span></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="glax_tm_section">
			<div class="container">

			<p style="padding-bottom: 20px;">
			PCT is committed to providing the highest level of customer service. Please complete the following form and click the “Send Message” button. We look forward to assisting you.
			</p>

				<div class="glax_tm_main_contact_wrap">
					<div class="office_list">
						<ul>
							<li>
								<div class="inner">
									<div class="image_wrap">
										
										<div class="image"></div>
										<img class="svg" src="<?php echo esc_url( get_template_directory_uri() );?>/assets/img/contact/PCT-logo.webp" alt="" />

									</div>
									<div class="definitions_wrap">
										<div class="office">
											<h3>Washington Office</h3>
											<div class="icon">
												<img class="svg" src="<?php echo esc_url( get_template_directory_uri() );?>/assets/img/svg/location.svg" alt="" />
											</div>
										</div>
										<div class="short_info_wrap">
											<div class="row">
												<p>1611 N Molter Rd Ste.202, Liberty Lake, WA 99019</p>
											</div>
											<div class="row">
												<label>Phone:</label>
												<span>(509) 922-8755</span>
											</div>
											<div class="row">
												<label>Email:</label>
												<span><a href="#">sales@pctmfg.com</a></span>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="mymap">
								<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11033.306893292456!2d-119.095279!3d46.2636109!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf2a2e51bc4ee69a!2sSMK%20Tri-Cities%20Inc!5e0!3m2!1sen!2ske!4v1666006824599!5m2!1sen!2ske"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
							</li>
						</ul>
					</div>

					<?php 
						echo the_content();
					?>
					
					<div class="contact_text">
						<p>
						We are a national leader in parts manufacturing. Our team designs and fabricates precision parts for any market sector and produces custom components from the design phase to delivery. We manufacture the highest quality end items made of any industrial material.
						</p>
					</div>

					<div class="glax_tm_contact_wrap">
						<div class="get_in_touch">
							<h3>Get in Touch With Us</h3>
						</div>
						<div class="inner_wrap">

									<!-- Echo form shortcode-->
								<?php echo do_shortcode( '[contact-form-7 id="9" title="Contact form 1"]' ); ?>

						
								
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /CONTACT -->

<?php

get_footer();

?>