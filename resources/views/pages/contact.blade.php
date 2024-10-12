@include('pages.header')	
		<!-- Breadcrumbs -->
		<div class="breadcrumbs overlay">
			<div class="container">
				<div class="bread-inner">
					<div class="row">
						<div class="col-12">
							<div class="d_flex">
								<div>
									<span style="color: #B7B7A4; font-size: 18px; font-weight: 400;">Contact <i class="fa fa-long-arrow-right"></i></span>
									<h2 style="color: #FFFFFF; font-size: 72px; font-weight: 800;">Contact</h2>
								</div>
								<ul class="bread-list">
									<li><a href="index.html"><i class="fa fa-home"></i> Home</a></li>
									<li><i class="icofont-simple-right"></i></li>
									<li class="active">Contact</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Breadcrumbs -->
				
		<!-- Start Contact Us -->
		<section class="contact-us section">
			<div class="container">
				<div class="inner">
					<div class="row"> 
						<div class="col-lg-6">
							<div class="contact-us-left">
								<div class="left_box_contactus">
									<div class="head_txt">
										<span>ACTIVITY <i class="fa fa-long-arrow-right"></i></span>
										<h3>Get in touch!</h3>
									</div>
									<div class="p_tag">
										<img src="img/logo-svg.png" alt="">
										<p>Elit sit risus lorem proin eget eu molestie nibh odioa non neque turpis proin viverra velarcu venenatis nulla frin blandit tristique morbi nulla curabitur etiam vestibulum suscipit nullam sagittis.</p>
									</div>
									<div class="a_link">
										<strong>Contact Us</strong>
										<ul class="contact_link">
											<li><i class="fa fa-map-marker"></i> 021 Hollywood Boulevard, Los Angeles</li>
											<li><i class="fa fa-envelope" aria-hidden="true"></i> info@yourdomain.com</li>
											<li><i class="fa fa-phone" aria-hidden="true"></i> (021) 345-6789</li>
										</ul>
										<div class="my_socal">
											<i class="fa fa-facebook-square"></i>
											<i class="fa fa-twitter"></i>
											<i class="fa fa-instagram"></i>
											<i class="fa fa-youtube-play"></i>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="contact-us-form">
								<h2>If You Have Any Questions, Contact Us</h2>
								<p>Promi pellentesque viverra enimon faucibus blandit magna tellus sagittis aenean.</p>
								<!-- Form -->
								<form class="form" method="post" action="">
									<div class="row">
										<div class="col-lg-12">
											<div class="form-group">
												<input type="text" name="name" placeholder="Enter Your name" required="true">
											</div>
										</div>
										<div class="col-lg-12">
											<div class="form-group">
												<input type="text" name="email" placeholder="Enter your email address" required="true">
											</div>
										</div>
										<div class="col-lg-12">
											<div class="form-group">
												<textarea name="message" placeholder="Your Message" required="true"></textarea>
											</div>
										</div>
										<div class="col-12">
											<div class="form-group login-btn">
												<button class="btn" type="submit">Send Message</button>
											</div>
											<!-- <div class="checkbox">
												<label class="checkbox-inline" for="2"><input name="news" id="2" type="checkbox">Do you want to subscribe our Newsletter ?</label>
											</div> -->
										</div>
									</div>
								</form>
								<!--/ End Form -->
							</div>
						</div>
					</div>
				</div>
				<div class="contact-info">
					<div class="row">
						<div class="col-lg-12">
							<div class="contact-us-left">
								<!--Start Google-map -->
								<div id="myMap"></div>
								<!--/End Google-map -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Contact Us -->
		@include('pages.footer')