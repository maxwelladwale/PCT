<!DOCTYPE html >
<html <?php language_attributes(); ?>><head>
<?php 
	global $glax_fn_option, $post;	
?>

<meta charset="<?php esc_attr(bloginfo( 'charset' )); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<?php wp_head(); ?>
</head>

<body <?php body_class( 'class-name' ); ?>>
<?php wp_body_open(); ?>


<!-- WRAPPER ALL -->
	
<div class="glax_tm_wrapper_all">
	
	
	
	<!-- BORDERS -->
	<div class="glax_tm_border_wrap">
		<div class="border top"></div>
		<div class="border left"></div>
		<div class="border right"></div>
	</div>
	<!-- /BORDERS -->
	
	<!-- HOLDER -->
	<div class="glax_tm_holder_wrap">
		<div class="holder left"></div>
		<div class="holder right"></div>
	</div>
	<!-- /HOLDER -->
	
	<!-- TOP BAR -->
	<div class="glax_tm_topbar_wrap">
		<div class="container">
			<div class="inner_wrap">
				<div class="left_part_wrap">
					<div class="share_wrap">
						<ul>
							<li><a href="https://www.facebook.com/Precision-Cutting-Technologies-1017001788322642/"><i class="xcon-facebook"></i></a></li>
							<li><a href="https://www.linkedin.com/company/precision-cutting-technologies/"><i class="xcon-linkedin"></i></a></li>
						</ul>
					</div>
					<div class="language">
						<!-- <a class="selected" href="#"></a> -->
					</div>
				</div>
				<div class="right_part_wrap">
					<ul>
						<li data-style="home">
							<a href="#"><img class="svg" src="<?php echo esc_url( get_template_directory_uri() );?>/assets/img/svg/home.svg" alt="" /></a>
						</li>
						<li data-style="message">
							<a href="#"><img class="svg" src="<?php echo esc_url( get_template_directory_uri() );?>/assets/img/svg/message2.svg" alt="" /></a>
						</li>
						<li data-style="phone">
							<a href="#"><img class="svg" src="<?php echo esc_url( get_template_directory_uri() );?>/assets/img/svg/old_phone.svg" alt="" /></a>
						</li>
						<li data-style="clock">
							<a href="#"><img class="svg" src="<?php echo esc_url( get_template_directory_uri() );?>/assets/img/svg/clock.svg" alt="" /></a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- /TOP BAR -->
	
	<div class="wrapper_all_inner_wrap">
		
		<!-- HEADER -->
		<div class="glax_tm_header_wrap" id="nave">
			<div class="container">
				<div class="header_inner_wrap">
					<div class="menu_wrap">
						<ul>
							<li><a href="<?php echo home_url();?>">Home</a></li>
							<li><a href="<?php get_template_directory_uri();?>/about-us">About Us</a></li>
							<li><a href="<?php get_template_directory_uri();?>/services">Services</a></li>
							<li><a href="<?php get_template_directory_uri();?>/parts">Parts</a></li>
						</ul>
					</div>
					<div class="purchase_button">
						<a href="<?php get_template_directory_uri();?>/contact-us">Contact Us</a>
					</div>
					<div class="logo_wrap">
						<img src="<?php echo esc_url( get_template_directory_uri() );?>/assets/img/logo.png" alt="" />
						<span class="left"></span>
						<span class="right"></span>
						<span class="extra_first"></span>
						<span class="extra_second"></span>
						<a class="full_link" href="<?php echo esc_url( home_url() );?>"></a>
					</div>
				</div>
			</div>
		</div>
		<!-- /HEADER -->
		
		<!-- MOBILE BAR -->
		<div class="glax_tm_mobile_bar_wrap">
			<div class="mobile_topbar_wrap">
				<div class="container">
					<div class="inner_wrap">
						<!-- <div class="short_info_wrap">
							<ul>
								<li data-type="home"><a href="#"><img class="svg" src="<?php echo esc_url( get_template_directory_uri() );?>/assets/img/svg/home.svg" alt="" /></a></li>
								<li data-type="message"><a href="#"><img class="svg" src="<?php echo esc_url( get_template_directory_uri() );?>/assets/img/svg/message2.svg" alt="" /></a></li>
								<li data-type="phone"><a href="#"><img class="svg" src="<?php echo esc_url( get_template_directory_uri() );?>/assets/img/svg/old-phone.svg" alt="" /></a></li>
								<li data-type="clock"><a href="#"><img class="svg" src="<?php echo esc_url( get_template_directory_uri() );?>/assets/img/svg/clock.svg" alt="" /></a></li>
							</ul>
						</div> -->
						<div class="mobile_socials_wrap">
							<ul>
								<li><a href="https://www.facebook.com/Precision-Cutting-Technologies-1017001788322642/"><i class="xcon-facebook"></i></a></li>
								<li><a href="https://www.linkedin.com/company/precision-cutting-technologies/"><i class="xcon-linkedin"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="mobile_header_wrap">
				<div class="container">
					<div class="inner_wrap">
						<div class="logo_wrap">
							<a href="<?php echo site_url();?>">
								<img class="mobi-logo" src="<?php echo esc_url( get_template_directory_uri() );?>/assets/img/logo.png" alt="" />
							</a>
						</div>
						<div class="trigger_wrap">
							<div class="hamburger hamburger--collapse-r">
								<div class="hamburger-box">
									<div class="hamburger-inner"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<!-- MENU LIST -->
			<div class="menu_list_wrap">
				<ul class="nav">
					<li><a href="<?php echo home_url();?>">Home</a></li>
					<li><a href="<?php get_template_directory_uri();?>/about-us">About Us</a></li>
					<li><a href="<?php get_template_directory_uri();?>/services">Services</a></li>
					<li><a href="<?php get_template_directory_uri();?>/parts">Parts</a></li>
					<li><a href="<?php get_template_directory_uri(); ?>/contact-us">Contact Us</a></li>

				</ul>
			</div>
			<!-- /MENU LIST -->
			
			<!-- DROPDOWN -->
			<!-- <div class="glax_tm_dropdown_wrap">
				<div class="container">
					<div class="drop_list home">
						<div class="adress_wrap">
							<div class="office_image">
								<img src="<?php echo esc_url( get_template_directory_uri() );?>/assets/img/contact/1.jpg" alt="" />
							</div>
							<div class="definitions_wrap">
								<h3>Head Office in Washington</h3>
								<p>1125 E Hillsboro St, Pasco, WA 99301</p>
								<p>Phone: (509) 547-0412</p>
								<p><span>Email:</span><a href="#">information@smktricities.com</a></p>
							</div>
						</div>
					</div>
					<div class="drop_list message">
						<div class="short_contact">
							<h3 class="title">Request a Quote</h3>
							<p class="subtitle">Looking for a quality and affordable builder for your next project?</p>
							<div class="inputs_wrap">
															<?php echo do_shortcode( '[contact-form-7 id="20" title="Contact us side"]' ); ?>

							</div>
						</div>
					</div>
					<div class="drop_list phone">
						<div class="call_wrap">
							<div class="image">
								<img src="img/estimate/call.png" alt="" />
							</div>
							<h3>Toll Free</h3>
							<p>1-800-987-6543</p>
						</div>
					</div>
					<div class="drop_list clock">
						<div class="working_hours_wrap_short">
							<h3>Working Hours</h3>
							<p class="subtitle">We are happy to meet you during our working hours. Please make an appointment.</p>
							<div class="hour_list">
								<ul>
									<li>
										<span class="left">Monday-Friday:</span>
										<span class="right">9am to 5pm</span>
									</li>
									<li>
										<span class="left">Saturday:</span>
										<span class="right">10am to 3pm</span>
									</li>
									<li>
										<span class="left">Sunday:</span>
										<span class="right">Closed</span>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div> -->
			<!-- /DROPDOWN -->
			
		</div>
		<!-- /MOBILE BAR -->
		
		<!-- SIDEBAR WIDGET -->
		<div class="glax_tm_widget_wrap">
			<div class="widget_inner_wrap">
				<div class="widget_icons_wrap">
					<ul>
						<li class="home" data-style="home">
							<a href="#"><img class="svg" src="<?php echo esc_url( get_template_directory_uri() );?>/assets/img/svg/home.svg" alt="" /></a>
						</li>
						<li class="message" data-style="message">
							<a href="#"><img class="svg" src="<?php echo esc_url( get_template_directory_uri() );?>/assets/img/svg/message2.svg" alt="" /></a>
						</li>
						<li class="phone" data-style="phone">
							<a href="#"><img class="svg" src="<?php echo esc_url( get_template_directory_uri() );?>/assets/img/svg/old_phone.svg" alt="" /></a>
						</li>
						<li class="clock" data-style="clock">
							<a href="#"><img class="svg" src="<?php echo esc_url( get_template_directory_uri() );?>/assets/img/svg/clock.svg" alt="" /></a>
						</li>
					</ul>
				</div>
				
				<!-- WIDGET DROPDOWN -->
				<div class="widget_dropdown_wrap">
					<div class="drop_list home">
						<div class="adress_wrap">
							<div class="office_image">
								<!-- <img src="<?php echo esc_url( get_template_directory_uri() );?>/assets/img/contact/1.jpg" alt="" /> -->
							</div>
							<div class="definitions_wrap">
								<h3>Washington Headquarters</h3>
								<p>1611 N Molter Rd Ste. 202, Liberty Lake, WA 99019</p>
								<p>Phone: (509) 922-8755</p>
								<p><span>Email:</span><a href="mailto:sales@pctmfg.com">sales@pctmfg.com</a></p>
							</div>
						</div>
					</div>
					<div class="drop_list message">
						<div class="short_contact">
							<h3 class="title">Request a Quote</h3>
							<p class="subtitle">PCT is committed to providing the highest level of customer service. Please complete the following form and click the “Send Message” button. We look forward to assisting you</p>
							<div class="inputs_wrap">
								<?php echo do_shortcode( '[contact-form-7 id="112" title="Request Form"]' ); ?>

							</div>
						</div>
					</div>
					<div class="drop_list phone">
						<div class="call_wrap">
							<div class="image">
								<img src="img/estimate/call.png" alt="" />
							</div>
							<h3>Call Us</h3>
							<p>(509) 922-8755</p>
						</div>
					</div>
					<div class="drop_list clock">
						<div class="working_hours_wrap_short">
							<h3>Working Hours</h3>
							<p class="subtitle">We are happy to meet you during our working hours. Please make an appointment.</p>
							<div class="hour_list">
								<ul>
									<li>
										<span class="left">Monday-Friday:</span>
										<span class="right">7am to 3:00pm</span>
									</li>
									
								</ul>
							</div>
						</div>
					</div>
				</div>
				<!-- /WIDGET DROPDOWN -->
			</div>
		</div>
		<div class="glax_tm_widget_window_overlay"></div>
		<!-- /SIDEBAR WIDGET -->