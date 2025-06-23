<footer class="footer-area section-padding">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-lg-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay="0.2s">
				<h3>V4Account</h3>
				<p>
					V4Account 558-560, 5th Floor, Indraprastha, Pancheshwar Tower Road, Jamnagar-361001.
				</p>
				<br/>
				<p>Contact No - 7069684844</p>
			</div>
			<div class="col-md-6 col-lg-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay="0.4s">
				<h3>QUICK LINKS</h3>
				<ul>
					<li><a href="#about">About Us</a></li>
					<li><a href="#schedules">Our Services</a></li>
					<li><a href="#team">Industries</a></li>
					<li><a href="#services">Career</a></li>
					<li><a href="#contact-map">Contact Us</a></li>
				</ul>
			</div>
			<div class="col-md-6 col-lg-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay="0.6s">
				<h3>PLATFORMS</h3>
				<ul class="image-list">
					<li>
						<figure class="overlay">
							<img class="img-fluid" src="assets/img/site_image/mobile_app_dev.png" alt="Mobile Application Development">
						</figure>
						<div class="post-content">
							<h6 class="post-title"> <a href="blog-single.html">Applications</a> </h6>
							<div class="meta"><span class="date">Mobile Application Development</span></div>
						</div>
					</li>
					<li>
						<figure class="overlay">
							<img class="img-fluid" src="assets/img/site_image/php_development.png" alt="Websites and Desktop App Development.">
						</figure>
						<div class="post-content">
							<h6 class="post-title"><a href="blog-single.html">Website</a></h6>
							<div class="meta"><span class="date">Websites and Desktop App Development.</span></div>
						</div>
					</li>
				</ul>
			</div>
			<div class="col-md-6 col-lg-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay="0.8s">
				<h3>SERVICES</h3>
				<div class="widget">
					<div class="newsletter-wrapper">
						<ul>
							<li><a href="#schedules">Business Automation Services</a></li>
							<li><a href="#schedules">Tally Products Customisation Services</a></li>
						</ul>
					</div>
				</div>

				<div class="widget">
					<h5 class="widget-title">FOLLOW US ON</h5>
					<ul class="footer-social">
						<li><a class="facebook" href="#"><i class="lni-facebook-filled"></i></a></li>
						<li><a class="twitter" href="#"><i class="lni-twitter-filled"></i></a></li>
						<li><a class="linkedin" href="#"><i class="lni-linkedin-filled"></i></a></li>
						<li><a class="google-plus" href="#"><i class="lni-google-plus"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</footer>

<div id="copyright">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="site-info">
					<p>© <?php echo date('Y'); ?> Designed and Developed by <a href="https://www.v4account.com/" rel="nofollow">V4Account</a></p>
				</div>
			</div>
		</div>
	</div>
</div>

<a href="#" class="back-to-top">
	<i class="lni-chevron-up"></i>
</a>
<div id="preloader">
	<div class="sk-circle">
		<div class="sk-circle1 sk-child"></div>
		<div class="sk-circle2 sk-child"></div>
		<div class="sk-circle3 sk-child"></div>
		<div class="sk-circle4 sk-child"></div>
		<div class="sk-circle5 sk-child"></div>
		<div class="sk-circle6 sk-child"></div>
		<div class="sk-circle7 sk-child"></div>
		<div class="sk-circle8 sk-child"></div>
		<div class="sk-circle9 sk-child"></div>
		<div class="sk-circle10 sk-child"></div>
		<div class="sk-circle11 sk-child"></div>
		<div class="sk-circle12 sk-child"></div>
	</div>
</div>

<script src="assets/js/jquery-min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.countdown.min.js"></script>
<script src="assets/js/jquery.nav.js"></script>
<script src="assets/js/jquery.easing.min.js"></script>
<script src="assets/js/wow.js"></script>
<script src="assets/js/jquery.slicknav.js"></script>
<script src="assets/js/nivo-lightbox.js"></script>
<script src="assets/js/main.js"></script>
<script src="assets/js/form-validator.min.js"></script>
<script src="assets/js/contact-form-script.min.js"></script>
<!-- <script src="assets/js/moving_wallpaper.js"></script> -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBxeVQ7z0PpTX8u_ZByWpNoRCWKohICVb8"></script>

</body>

<script type="text/javascript">
	//for navbar-brand change color
	 
  $(window).scroll(function () {
      if ($(this).scrollTop() > 220) { 
        $('.navbar .navbar-brand ').css('color','#e91e63');
      }
      if ($(this).scrollTop() < 220) { 
        $('.navbar .navbar-brand').css('color','white');
      }
  });
	
	jQuery(document).ready(function() 
  {
  	//for map
  	var myLatlng = new google.maps.LatLng(22.4684892,70.0724992);
		var mapOptions = {
		  zoom: 19,
		  center: myLatlng
		}
		var map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);

		// To add the marker to the map, use the 'map' property
		var marker = new google.maps.Marker({
		    position: myLatlng,
		    map: map,
		    title:"V4Account"
		});

		var glob_email; //for email validation

		$(document).on("blur","#email",function(e) 
	  {
	    e.preventDefault();
	    var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
	    var email_id=$('#email').val();
	    if (email_id == '') 
	    {
	      $('#err_email_id').html('Enter Email ID');
	    }
	    else if(!emailReg.test(email_id))
	    {
	      $('#err_email_id').html('Enter Valid Email ID'); 
	    	glob_email = '';
	    	return false;
	    }
	    else 
	    {
	      $('#err_email_id').html('');
	      glob_email = true; 
	    	return true;
	    }
	  });

		//form submit for contact us
		$(document).on("click","#form-submit",function(e)
		{
			if($('#name').val()!='' && $('#msg_subject').val()!='' && glob_email==true  && $('#message').val()!='')
			{
				e.preventDefault();
				var name = $('#name').val();
				var msg_subject = $('#msg_subject').val();
				var email = $('#email').val();
				var message = $('#message').val();

				$.ajax(
				{
					method:"POST",
					url:"send_mail.php",
					data:"send_contact_email=yes&name="+name+"&email="+email+"&msg_subject="+msg_subject+"&message="+message,

					success:function(data)
					{
						alert("Thank you for your inquiry.");
						window.location='index.php';
					}
				});

			}
		});


  	$(document).on("click","#lightbox_tally_gold_silver",function()
  	{
  		$('#open_lightbox_tally_gold_silver').click();
  	});
  	$(document).on("click","#lightbox_tally_server",function()
  	{
  		$('#open_lightbox_tally_server').click();
  	});
  	$(document).on("click","#lightbox_tally_shopper",function()
  	{
  		$('#open_lightbox_tally_shopper').click();
  	});
  	$(document).on("click","#lightbox_tally_tdls",function()
  	{
  		$('#open_lightbox_tally_tdls').click();
  	});
  	$(document).on("click","#business_auto_service",function()
  	{
  		$('#open_business_auto_service').click();
  	});
  	$(document).on("click","#tally_services",function()
  	{
  		$('#open_tally_services').click();
  	});
  	$(document).on("click","#outsource_service",function()
  	{
  		$('#open_outsource_service').click();
  	});
  	$(document).on("click","#training_service",function()
  	{
  		$('#open_training_service').click();
  	});

  });

</script>



</html>