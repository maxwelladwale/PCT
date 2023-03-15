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
										<img src="<?php echo esc_url( get_template_directory_uri() );?>/assets/img/contact/370x220.jpg" alt="" />

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
												<span><a href="mailto:sales@pctmfg.com">sales@pctmfg.com</a></span>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="mymap">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2686.5948492424245!2d-117.0931906491538!3d47.67286659128954!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5361dfd6ae9d705d%3A0x444a60f37356194!2sPrecision%20Cutting%20Technologies!5e0!3m2!1sen!2ske!4v1677733202655!5m2!1sen!2ske" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
							</li>
						</ul>
					</div>


					
					<div class="contact_text">
						<p>
						We are a national leader in parts manufacturing. Our team fabricates precision parts for any market sector and produces custom components from customer design to product delivery. We manufacture the highest quality end items made of any industrial material.
						</p>
					</div>

					<div class="glax_tm_contact_wrap">
						<div class="get_in_touch">
							<h3>Get in Touch With Us</h3>
						</div>
						<div class="inner_wrap">

									<!-- Echo form shortcode-->

                            <?php echo the_content(); ?>
								
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /CONTACT -->

<?php

get_footer();

?>