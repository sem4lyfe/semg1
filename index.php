<?php
session_start();

//connectivity
require('config.php');

//marquee display
$q = "SELECT marquee1 FROM admin WHERE id=1";
$q1 = mysqli_query($con,$q);
$disp = mysqli_fetch_array($q1);
//echo $disp['marquee1'];

//change colg name
$q2 = "SELECT colgname FROM admin WHERE id=1";
$q21 = mysqli_query($con,$q2);
$colgdisp = mysqli_fetch_array($q21);

//change intro content
$q3 = "SELECT colgintro FROM admin WHERE id=1";
$q31 = mysqli_query($con,$q3);
$introdisp = mysqli_fetch_array($q31);
//echo $introdisp['colgintro'];

//change footer 
$q4 = "SELECT footerinfo FROM admin WHERE id=1";
$q41 = mysqli_query($con,$q4);
$footerdisp = mysqli_fetch_array($q41);
//echo $footerdisp['footerinfo'];
?>

<html>
	<head>
		<title>ABC Group</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">
						<div class="inner">

							<!-- Header -->
								<header id="header">
									<a href="index.php" class="logo"><strong>ABC Hostel</strong></a>
									<ul class="icons">
										<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
										<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
										<li><a href="#" class="icon brands fa-snapchat-ghost"><span class="label">Snapchat</span></a></li>
										<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
										<li><a href="#" class="icon brands fa-medium-m"><span class="label">Medium</span></a></li>
									</ul>
								</header>

							<!-- Banner -->
								<section id="banner">
									<div class="content">
										<header>
											<center><h1>ABC Group of institution</h1><br></center> 
										</header>		
									</div>
									<span class="image object">
										<div class="w3-content">
										  <img class="mySlides" src="images/1.jpg" style="width:100%">
										  <img class="mySlides" src="images/2.jpg" style="width:100%">
										  <img class="mySlides" src="images/3.jpg" style="width:100%">
										  <img class="mySlides" src="images/4.jpg" style="width:100%">
										</div>
										<script>
										var slideIndex = 0;
										carousel();

										function carousel() {
										  var i;
										  var x = document.getElementsByClassName("mySlides");
										  for (i = 0; i < x.length; i++) {
										    x[i].style.display = "none"; 
										  }
										  slideIndex++;
										  if (slideIndex > x.length) {slideIndex = 1} 
										  x[slideIndex-1].style.display = "block"; 
										  setTimeout(carousel, 2000); 
										}
										</script>
									</span>
								</section>
							<!-- Section -->
								<section>
									<header class="major">
										<h2>ABC Institution Hostel</h2>
									</header>
									<td width="974" height="647" bgcolor="#D9D9D9" style="vertical-align:text-top">
									<?php
									@$opt = $_GET['option'];
									if($opt=="")
									{
									?>
	<center>
	  	<h2><b><font size="+3"><?php echo $colgdisp['colgname'];?>
	    </font></b></h2>
		</center>
   		<center><img src="images/colg.jpg" width="696" height="488"></center><br>
    	<p><b>A pioneer educational Institute of Northern India, has been striving to provide quality higher education since 2000. Approved by AICTE and UGC, ABC has a sprawling multi-discipline campus, world class facilities and competent faculty, with prime focus on research and quality education. Creating a benchmark in the field of education, ABC aims to create proficient technocrats and future leaders with emphasis on overall development of personality imbibing core human values among students.</b><center>
     	 <p>&nbsp;</p>
      	<p><strong><font size="+2"><?php echo $colgdisp['colgname'];?></font></strong> <b>-</b> <font size="+1"><?php echo $introdisp['colgintro']; ?></font></p>
    </center></p>
								
<?php
    error_reporting(1);
	}
	else{
	switch($opt)
	{
		case 'regs':
		include('registration.php')	;
		break;
		case 'login':
		include('login.php');
		break;
        case 'about':
		include('about.php');
		break;
		case 'contact':
		include('contact.php');
		break;
		case 'gallery':
		include('gallery.php');
		break;
		case 'course':
		include ('course.php');
		break;
		case 'cdrive':
		include('cdrive.php');
		break;
		case 'news':
		include('news.php');
		break;
		case 'sports':
		include('sports.php');
		break;
		case 'admission':
		include ('admission.php');
		break;
		case 'sdp':
		include('sdp.php');
		break;
		case 'wevents':
		include('wevents.php');
		break;
		case 'notice':
		include('notice.php');
		break;
                case 'forgotpassword':
		include('forgotpassword.php');
		break;
		
	}}
	?>
	</td></section>
	</div>
	</div>

				<!-- Sidebar -->
					<div id="sidebar">
						<div class="inner">

							<!-- Menu -->
								<nav id="menu">
									<header class="major">
										<h2>Menu</h2>
									</header>
									<ul>
										<li><a href="index.php">Home</a></li>
										<li><a href="index.php?option=about">About</a></li>
										<li><a href="index.php?option=gallery">Gallery</a></li>
										<li><a href="index.php?option=course">Courses</a></li>
										<li>
											<span class="opener">College Updates</span>
											<ul>
												<li><a href="index.php?option=notice">Notice Board</a></li>
												<li><a href="index.php?option=news">News</a></li>
												<li><a href="index.php?option=sports">Sports Fest</a></li>
												<li><a href="index.php?option=sdp">Student Development Programme</a></li>
												<li><a href="index.php?option=wevents">Weekend Events</a></li>
											</ul>
										</li>
                                                                                <li><a href="index.php?option=login">Login</a></li>
                                                                                <li><a href="index.php?option=regs">Registration</a></li>
									</ul>
								</nav>
							<!-- Section -->
								<section>
									<header class="major">
										<h2>Contact</h2>
									</header>
									<ul class="contact">
										<li class="icon solid fa-envelope"><a href="#"> phptpoint@gmail.com</a></li>
										<li class="icon solid fa-phone">(000) 000-0000</li>
										<li class="icon solid fa-home"> ABC Engineering College, XYZ Group, Near AIIMS, New Delhi</li>
									</ul>
								</section>

							<!-- Footer -->
								<footer id="footer">
									<p class="copyright">&copy; <?=$footerdisp['footerinfo']?></p>
								</footer>

						</div>
					</div>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>