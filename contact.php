<section id="contact-map" class="section-padding">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12">
				<div class="section-title-header text-center">
					<h1 class="section-title wow fadeInUp" data-wow-delay="0.2s">Contact us</h1>
					<p class="wow fadeInDown" data-wow-delay="0.2s">V4Account - Make IT Simple</p>
				</div>
			</div>
			<div class="col-lg-7 col-md-12 col-xs-12">
				<div class="container-form wow fadeInLeft" data-wow-delay="0.2s">
					<div class="form-wrapper">
						<form role="form" method="post" id="contactForm" name="contact-form" data-toggle="validator">
							<div class="row">
								<div class="col-md-6 form-line">
									<div class="form-group">
										<input type="text" class="form-control" id="name" name="name" placeholder="First Name" required data-error="Please enter your name">
										<div class="help-block with-errors"></div>
									</div>
								</div>
								<div class="col-md-6 form-line">
									<div class="form-group">
										<input type="email" class="form-control" id="email" name="email" placeholder="Email" required data-error="Please enter your Email">
										<div class="help-block with-errors" id="err_email_id"></div>
									</div>
								</div>
								<div class="col-md-12 form-line">
									<div class="form-group">
										<input type="text" class="form-control" id="msg_subject" name="subject" placeholder="Subject" required data-error="Please enter your message subject">
										<div class="help-block with-errors"></div>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<textarea class="form-control" rows="4" id="message" name="message" required data-error="Write your message"></textarea>
										<div class="help-block with-errors"></div>
									</div>
									<div class="form-submit">
										<button type="submit" class="btn btn-common" id="form-submit"><i class="fa fa-paper-plane" aria-hidden="true"></i> Send Us Now</button>
										<div id="msgSubmit" class="h3 text-center hidden"></div>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="google-map-area">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12 wow bounceIn" data-wow-delay="0.2s">
				<!-- <object style="border:0; height: 450px; width: 100%;" data="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3102.7887109309127!2d-77.44196278417968!3d38.95165507956235!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzjCsDU3JzA2LjAiTiA3N8KwMjYnMjMuMiJX!5e0!3m2!1sen!2sbd!4v1545420879707"></object> -->

				<div id="map-canvas" style="border:0; height: 450px; width: 100%;"></div>

			</div>
		</div>
	</div>
</section>