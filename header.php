<?php
	include 'local_config/db_config.php';
  include 'model/QueryMaster.php';
  $objQueryMaster = new QueryMaster();

  if(isset($_POST['file_submit'])!='')
  {
  	$resume = $_FILES['resume_files']['name'];
  	$ext1=strtolower(end(explode('.',$resume)));
  	$t=time();
    $rand_name=date('Ymd')."_".$t.rand(100,999999);
    $resume_cv=$rand_name.'.'.$ext1; 
  
  	// move_uploaded_file($_FILES['resume_files']['tmp_name'], "resume_files/".$resume_cv);

  	$create_date = date('Y-m-d H:i:s');
  	$arr = array("name"=>$resume_cv,"create_date"=>$create_date);
  	$insert_data = $objQueryMaster->insert_data("resume",$arr);

  	//$to = 'vinit4account@gmail.com';
		
  	// Recipient 
		$to = 'v4aakash@gmail.com'; 
		 
		// Sender 
		$from = 'v4aakash@gmail.com'; 
		$fromName = 'V4Account'; 
		 
		// Email subject 
		$subject = 'Resume from career';  
		 
		// Attachment file 
		$file = "resume_files/".$resume_cv; 
		 
		// Email body content 
		$htmlContent = ''; 
		 
		// Header for sender info 
		$headers = "From: $fromName"." <".$from.">"; 
		 
		// Boundary  
		$semi_rand = md5(time());  
		$mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";  
		 
		// Headers for attachment  
		$headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\""; 
		 
		// Multipart boundary  
		$message = "--{$mime_boundary}\n" . "Content-Type: text/html; charset=\"UTF-8\"\n" . 
		"Content-Transfer-Encoding: 7bit\n\n" . $htmlContent . "\n\n";  
		 
		// Preparing attachment 
		if(!empty($file) > 0){ 
		    if(is_file($file)){ 
		        $message .= "--{$mime_boundary}\n"; 
		        $fp =    @fopen($file,"rb"); 
		        $data =  @fread($fp,filesize($file)); 
		 
		        @fclose($fp); 
		        $data = chunk_split(base64_encode($data)); 
		        $message .= "Content-Type: application/octet-stream; name=\"".basename($file)."\"\n" .  
		        "Content-Description: ".basename($file)."\n" . 
		        "Content-Disposition: attachment;\n" . " filename=\"".basename($file)."\"; size=".filesize($file).";\n" .  
		        "Content-Transfer-Encoding: base64\n\n" . $data . "\n\n"; 
		    } 
		} 
		$message .= "--{$mime_boundary}--"; 
		$returnpath = "-f" . $from; 
		 
		// Send email 
		$mail = @mail($to, $subject, $message, $headers, $returnpath);
		$mail = @mail('pritesh4account@gmail.com', $subject, $message, $headers, $returnpath);
		$mail = @mail('vinit4account@gmail.com', $subject, $message, $headers, $returnpath);
		 
		// Email sending status 
		echo $mail?"<h1>Email Sent Successfully!</h1>":"<h1>Email sending failed.</h1>"; 
    
		
		/*if(mail($to,$msg_subject,$body,$headers)){
			//echo 'true';
  		echo "<script>alert('Thanks! We will inform you by email or call.');window.location='https://www.v4account.com/';</script>";
		}
		else{
			echo "<script>alert('Something went wrong try again.');window.location='https://www.v4account.com/';</script>";
		}*/
  }

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="keywords" content="V4Account,V4 Account, tally, tally partner, accounting, accounting services,software development company, app development company, development companies, software development, software solutions, app development software, app development, custom software solutions">
		<meta name="We are expert in providing client satisfactory services since long in the within and out of India as well. We are pioneer in understanding business processes, streamlining the process and providing IT based best suitable solutions to our clients to optimise their profitability, performance and job satisfaction. We are also authorised star partners of Tally Solutions Pvt Ltd., a leading ERP provider.">
		<link rel="shortcut icon" href="assets/img/site_image/Logo.ico">
		<title>V4Account - Make IT Simple</title>

		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="assets/fonts/line-icons.css">
		<link rel="stylesheet" type="text/css" href="assets/css/slicknav.css">
		<link rel="stylesheet" type="text/css" href="assets/css/nivo-lightbox.css">
		<link rel="stylesheet" type="text/css" href="assets/css/animate.css">
		<link rel="stylesheet" type="text/css" href="assets/css/main.css">
		<link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
		<!-- <link rel="stylesheet" type="text/css" href="assets/css/moving_wallpaper.css"> -->

		<style type="text/css">
			
		</style>

	</head>

	<body>

		<header id="header-wrap">
			<nav class="navbar navbar-expand-lg fixed-top scrolling-navbar">
				<div class="container">
					
					<div class="navbar-header scroll">
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
						<span class="icon-menu"></span>
						<span class="icon-menu"></span>
						<span class="icon-menu"></span>
						</button>
						<a href="#" style="color:white;" class="navbar-brand"><h3>V4Account</h3></a>
					</div>

					<div class="collapse navbar-collapse" id="main-navbar">
						<ul class="navbar-nav mr-auto w-100 justify-content-end">
							<li class="nav-item active">
								<a class="nav-link" href="#header-wrap">Home</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#about">About</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#schedules">Services</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#team">Industries</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#services">Career</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#contact-map">Contact</a>
							</li>
						</ul>
					</div>
				</div>

				<ul class="mobile-menu">
					<li>
						<a class="page-scrool" href="#header-wrap">Home</a>
					</li>
					<li>
						<a class="page-scrool" href="#about">About</a>
					</li>
					<li>
						<a class="page-scroll" href="#schedules">Services</a>
					</li>
					<li>
						<a class="page-scroll" href="#team">Industries</a>
					</li>
					<li>
						<a class="page-scroll" href="#services">Career</a>
					</li>
					<li>
						<a class="page-scroll" href="#contact-map">Contact</a>
					</li>
					<!-- <li>
						<a class="page-scroll" href="#sponsors">Sponsors</a>
					</li>
					<li>
						<a class="page-scroll" href="#pricing">pricing</a>
					</li>
					<li>
						<a class="page-scroll" href="#google-map-area">Contact</a>
					</li> -->
				</ul>

			</nav>


			<div id="main-slide" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#main-slide" data-slide-to="0" class="active"></li>
					<li data-target="#main-slide" data-slide-to="1"></li>
					<li data-target="#main-slide" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img class="d-block w-100" src="assets/img/site_image/slider3.jpg" alt="MOBILE DEVELOPMENT">
						<div class="carousel-caption d-md-block">
							<p class="fadeInUp wow" data-wow-delay=".6s">Combining custom development and in-house built platform for faster time-to-market</p>
							<h1 class="wow fadeInDown heading" data-wow-delay=".4s">MOBILE Applications DEVELOPMENT</h1>
							<!-- <a href="#" class="fadeInLeft wow btn btn-common btn-lg" data-wow-delay=".6s">Get Ticket</a>
							<a href="#" class="fadeInRight wow btn btn-border btn-lg" data-wow-delay=".6s">Explore More</a> -->
						</div>
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="assets/img/site_image/slider1.jpg" alt="Second slide">
						<div class="carousel-caption d-md-block">
							<p class="fadeInUp wow" data-wow-delay=".6s">Provide solid support and management of your existing Web applications</p>
							<h1 class="wow bounceIn heading" data-wow-delay=".7s">Web Development</h1>
							<!-- <a href="#" class="fadeInUp wow btn btn-border btn-lg" data-wow-delay=".8s">Learn More</a> -->
						</div>
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="assets/img/site_image/slider2.jpg" alt="Third slide">
						<div class="carousel-caption d-md-block">
							<p class="fadeInUp wow" data-wow-delay=".6s"> Hire top tech talent and quickly scale your delivery capacity</p>
							<h1 class="wow fadeInUp heading" data-wow-delay=".6s">Dedicated Development Teams</h1>
							<!-- <a href="#" class="fadeInUp wow btn btn-common btn-lg" data-wow-delay=".8s">Explore</a> -->
						</div>
					</div>
				</div>
				<a class="carousel-control-prev" href="#main-slide" role="button" data-slide="prev">
					<span class="carousel-control" aria-hidden="true"><i class="lni-chevron-left"></i></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#main-slide" role="button" data-slide="next">
					<span class="carousel-control" aria-hidden="true"><i class="lni-chevron-right"></i></span>
					<span class="sr-only">Next</span>
				</a>
			</div>

		</header>