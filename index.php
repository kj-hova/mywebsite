<?php
include ("includes/db_constants.php");
include ("includes/db_classes.php");

if(isset($_POST)){
		//var_dump($_POST);
	if(empty($_POST['demo-name']) || empty($_POST['demo-email']) || empty($_POST['demo-category']) || empty($_POST['demo-human']) || empty($_POST['demo-subject']) || empty($_POST['demo-message'])){
		$msg="Please enter ALL required fields";
		//Swal.fire('PING!', 'Please enter ALL fields!', 'error');
	}

	if (empty($msg)) {
		//echo "i got here";
		$msgname= $_POST['demo-name'];
		$msgemail= $_POST['demo-email'];
		$msgcategory= $_POST['demo-category'];
		$msgsubject= $_POST['demo-subject'];
		$msgmessage= $_POST['demo-message'];
		//var_dump($_POST);

		//create object of the message class
		$msg_obj=new Message;
		$output = $msg_obj->createMessage($msgname,$msgemail,$msgcategory,$msgsubject,$msgmessage);

    if ($output) {
		$msg = "Your message is well received. I shall contact you soon.";
		//Swal.fire('Great!...', 'Your message is well received. I shall contact you soon.', 'success');
    }else{
		$msg="Message failed to send. Please try again.";
		//Swal.fire('Oops...', 'Message failed to send. Please try again.', 'error');
		}
	}
}

?>
<!DOCTYPE HTML> 
<html lang='en'>
	<head>
		<meta charset="utf-8">
		<title><?php echo APP_NAME ?> - Home Page</title>
		<!-- SEO meta tags -->
		<meta name='keyword' content='john idehai, fullstack developer, software developer in Lagos, Nigeria tech industry, ICT Lagos Nigeria, PHP'>
		<meta name="author" content="John Innocent 'KJ' idehai">
		<meta name='description' content='John Idehai is a fullstack developer, financial advisor and web content writer based in Lagos, Nigeria. He has 13 years banking experience and he has also written numerous articles as a freelance ghost writer.'>
		<!-- Other meta tags -->
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
		<!-- Required links -->
		<script src="sweetalert2-master/src/sweetalert.min.js"></script>
		<script src="sweetalert2-master/src/sweetalert.css"></script>
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body>

		<!-- Page Wrapper -->
		<div id="page-wrapper">
			<!-- Wrapper -->
			<div id="wrapper">

				<!-- Panel (Banner) -->
				<section class="panel banner right">
					<div class="content color0 span-3-75">
						<strong>My name is</strong>
						<h1 class="major">J o h n &nbsp; I d e h a i</h1>
						<h6 class="fw-light">Banker &nbsp;|&nbsp; Fullstack Developer &nbsp;|&nbsp; Freelance Writer</h6>
						<p>Known as "KJ" online, I design and manage eye catching, responsive and fully functional websites and apps. I am a prolific writer too and have ghost written numerous articles as a freelancer since 2017!</p>
						<p class="text-justify">I also offer business financing & trades services advisory. I can package your credit request for funding from the banks.</p>

						<small><a href="https://www.dropbox.com/s/5y7mdpdn8vhqjvd/John-Idehai-Resume%20IT.pdf?dl=0"><button class="fa fa-download">Resume </button></a></small><br>
						
						<ul class="actions">
							<li><a href="#first" class="button special color1 circle icon fa-angle-right">Next</a></li>
						</ul>
					</div>
					<div class="image filtered span-1-75" data-position="25% 25%">
						<img src="images/kji1.jpg" alt="">
					</div>
				</section>

				<!-- Panel (Spotlight) -->
				<section class="panel spotlight medium right" id="first">
					<div class="content span-9">
						<h2 class="major">Let me serve you!</h2>
						<p>So glad to have you here! My proposition is simple:</p>
						<ul>
							<li>
								I am proficient in SEO, HTML5, CSS3, Javascript, PHP8, MySQLi, OOP, and Bootstrap5 library for your app needs. I offer you a splendid website with cutting edge design and back end database functionality that is guaranteed to attract and retain clientel.
							</li>
							<li>
								I also work with React JS, AJAX, JSON in ES6 environment and the Laravel framework.
							</li>
							<li>
								I offer quality web content, article writing, blog and digital marketing services.
							</li>
							<li>
								My Banking offering is professionally contracted to my current employer and you are assured of quality banking services with me.
							</li>
						</ul>
					</div>
					<div class="image filtered tinted" data-position="top left">
						<img src="images/pic04.png" alt="dark background image">
					</div>
				</section>

				<!-- Panel -->
				<section class="panel color1">
					<div class="intro joined">
						<h2 class="major">And...guess what?</h2>
						<p>I am offering massive discounts on ALL services for ALL clients for the rest of 2021!!!</p>
					</div>
					<div class="inner">
						<ul class="grid-icons three connected">
							<li><span class="icon fa-diamond"><span class="label"></span></span></li>
							<li><span class="icon fa-camera-retro"><span class="label"></span></span></li>
							<li><span class="icon fa-cog"><span class="label"></span></span></li>
							<li><span class="icon fa-paper-plane"><span class="label"></span></span></li>
							<li><span class="icon fa-bar-chart"><span class="label"></span></span></li>
							<li><span class="icon fa-code"><span class="label"></span></span></li>
						</ul>
					</div>
				</section>

				<!-- Panel -->
				<section class="panel">
					<div class="intro color2">
						<h2 class="major">Portfolio</h2>
						<p>A selection of my past <a href="#projects">projects</a> are curated below for your kind review:</p>
						<ul class="three connected">
							<li><span class="label">BestGig - A social networking & freelancing app</span></li>
							<li><span class="label">Xfactor - An NGO website</span></li>
							<li><span class="label">Channon FC - club website</span></li>
							<li><span class="label">John Idehai - personal website</span></li>
							<li><span class="label">Articles - excerpts of jobs for ABCFlora Int., Armand De Brignac and a US based crypto dispensing start-up</span></li>
						</ul>
						<span class="icon fa-code"><span class="label"></span></span>
					</div>
					<div class="gallery" id="projects">
						<div class="group span-3">
							<a href="images/gallery/fulls/bestgig1.jpg" class="image filtered span-3" data-position="bottom"><span></span><img src="images/gallery/thumbs/bestgig1.jpg" alt="BestGig index image"></a>
							<a href="images/gallery/fulls/idehai.jpg" class="image filtered span-1-5" data-position="center"><img src="images/gallery/thumbs/idehai.jpg" alt="Idehai workstation image"></a>
							<a href="images/gallery/fulls/xfctor.jpg" class="image filtered span-1-5" data-position="bottom"><img src="images/gallery/thumbs/xfactor.jpg" alt="Xfactor page image"></a>
						</div>
						<a href="images/gallery/fulls/kji3.jpg" class="image filtered span-2-5" data-position="top"><img src="images/gallery/thumbs/kji3.jpg" alt="kji class image"></a>
						<div class="group span-4-5">
							<a href="images/gallery/fulls/channon.jpg" class="image filtered span-3" data-position="top"><img src="images/gallery/thumbs/channon.jpg" alt="Channon FC image"></a>
							<a href="images/gallery/fulls/Screenshot3.jpg" class="image filtered span-1-5" data-position="center"><img src="images/gallery/thumbs/Screenshot3.jpg" alt="Armand De Brignac article"></a>
							<a href="images/gallery/fulls/Screenshot2.jpg" class="image filtered span-1-5" data-position="bottom"><img src="images/gallery/thumbs/Screenshot2.jpg" alt="ABCFlora article"></a>
							<a href="images/gallery/fulls/bestgig2.jpg" class="image filtered span-3" data-position="top"><img src="images/gallery/thumbs/bestgig2.jpg" alt="BestGig community image"></a>
						</div>
						<a href="images/gallery/fulls/Screenshot1.jpg" class="image filtered span-2-5" data-position="right"><img src="images/gallery/thumbs/Screenshot1.jpg" alt="Crypto Banking article"></a>
					</div>
				</section>

				<!-- Panel -->
				<section class="panel color4-alt">
					<div class="intro color4">
						<h2 class="major">Contact</h2>
						<p>Thank you for reviewing my proposition and my past projects. Kindly reach me via my contacts below.</p>
						<ul class="contact-icons color2">
							<li class="icon fa-whatsapp"><a href="#">+2347035084567</a></li>
							<li class="icon fa-envelope"><a href="#">mail@johnidehai.com</a></li>
							<li class="icon fa-location-arrow"><a href="#">Lagos, Nigeria</a></li>
						</ul>
						<p>You can also use the form below to send me your project proposal, comments or enquiry.</p>
					</div>
					<div class="inner columns divided">
						<div class="span-4-5">
							<h3 class="major">Contact Form</h3>
							<span id="error"><?php if (!empty($msg)) {
								echo ($msg);
							} ?></span>
							<form method="post" action="" id="myform">
								<div class="field third">
									<label for="demo-name">Name</label>
									<input type="text" name="demo-name" id="demo-name" value="" placeholder="firstname & surname">
								</div>
								<div class="field third">
									<label for="demo-email">Email</label>
									<input type="email" name="demo-email" id="demo-email" value="" placeholder="email address">
								</div>
								<div class="field third">
									<label for="demo-category">Category</label>
									<div class="select-wrapper">
										<select name="demo-category" id="demo-category">
											<option value="">-</option>
											<option value="1">Project Proposal</option>
											<option value="1">Comment</option>
											<option value="1">Enquiry</option>
										</select>
									</div>
								</div>
								<div class="field quarter">
									<input type="checkbox" id="demo-human" name="demo-human" class="color2">
									<label for="demo-human">Not a robot</label>
								</div>
								<div class="field">
									<label for="demo-subject">Subject</label>
									<input type="text" name="demo-subject" id="demo-subject" value="" placeholder="subject">
								</div>
								<div class="field">
									<label for="demo-message">Message</label>
									<textarea name="demo-message" id="demo-message" placeholder="Enter your message" rows="2"></textarea>
								</div>
								<ul class="actions">
									<li><input type="submit" value="Send" class="special color2" id="submit"></li>
									<li><input type="reset" value="Reset"></li>
								</ul>
							</form>
						</div>
						<div class="span-1-25">
							<h5>Check me out on social media -</h5>
							<ul class="contact-icons color2">
								<li class="icon fa-github"><a href="https://github.com/kj-hova">GitHub</a></li>
								<li class="icon fa-linkedin"><a href="https://www.linkedin.com/in/john-idehai-bb385a77">LinkedIn</a></li>
								<li class="icon fa-twitter"><a href="https://twitter.com/kj_hova">Twitter</a></li>
								<li class="icon fa-facebook"><a href="https://www.facebook.com/idehai.kj">Facebook</a></li>
							</ul>
						</div>
					</div>
				</section>
				<!-- Panel -->
				<section class="panel color2-alt">
					<div class="inner columns aligned">
						<div class="span-2-25">
							<h3 class="major">Thank you for visiting my website</h3>
							<ul class="actions">
								<li><a href="#" class="button special color2">Go Back Up</a></li>
							</ul>

							<?php
							// create object of new page view class
							$obj = new PageViews;
							$page_id = "";
							$total_website_views = "";
							$total_website_views = $obj->total_views($page_id);

							// stores IP address of visitor in variable
							$visitor_ip = $_SERVER['REMOTE_ADDR'];
							$total_page_views = $obj->total_views($page_id);

							// Returns total website views
							echo "<strong>Total Website Views:</strong> " . $total_website_views."<br>";
							// Returns total views of this page
							echo "<strong>Total Views of this Page:</strong> " . $total_page_views;
							?>
						</div>
					</div>
				</section>

				<!-- Copyright -->
				<div class="copyright">
					<p>&copy; Copyright 2021 <span style="color: maroon">John "KJ" Idehai</span>. All Rights Reserved.
				</div>
			</div>
		</div>
		<!-- Scripts -->
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/skel.min.js"></script>

		<!-- Template Javascript -->
		<script src="assets/js/main.js"></script>
		<script src="sweetalert2-master/src/sweetalert.min.js"></script>
		<script src="sweetalert2-master/src/sweetalert.css"></script>
		
	</body>
</html>
