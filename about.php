<?php

@session_start();

if($_SESSION['isloggedin'] != "yes"){
    $_SESSION['login_alert'] = "Get logged in to view other pages of this website";
    header('location:index.php');
}

?>
<html>
<head>
	<title>Bikers Club - About us</title>
	<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
	<div id="page">
		<div id="header"> <!-- start of header -->
			<ul>
				<li><a href="home.php">home</a></li>
				<li class="current"><a href="about.php">about</a></li>
				<li><a href="event.php">events</a></li>
				<li><a href="bikesavailable.php">bikes</a></li>
				<li><a href="contact-us.php">contact</a></li>
                <li><a href="index.php">Log out</a></li>
			</ul>
		</div> <!-- end of header -->

		<div id="body">  
			<div class="contents">  <!-- start of content -->
				<h1>ABOUT</h1>

				<h2>The bikers club is the place to be.</h2>
				<p>
					This is the website designed and developed to be the bridge between the people seeking for a mountain bike to go for a ride
                    and the shop that can provide the bikes in lease.
                    <br>If you are looking for the mountain bikes to go for a cycling tour then the Bikers Club helps you
                    to hire the best bike in the town with marginal price possible.
				</p>

				<ul class="aboutus">
					<li>
						<a href=""><img src="images/about-biker.jpg"  width="450" height="299" alt="Bikers Club" title="Bikers Club"></a>
					</li>
					<li>
							<a href=""><img src="images/about-bikers.jpg" width="450" height="299" alt="Bikers Club" title="Bikers Club"></a>
					</li>
				</ul>	

				<div class="main">
					<h2>We Have Different Bikes For Sale Too</h2>
					<p>
						Looking for mountain bike to own? Just browse through all our <a href="#">Buy a Bike</a> and find what you're looking for. But if you don't find any
						bikes you wanted, you can mail us to <a href="#">Give specification</a>  and tell us which bike you want with its specification. We could provide the
						bikes as per order too. And we love the challenge of doing something different and something special.
					</p>
					<h2>Be Part of Our Community</h2>
					<p>If you are experiencing issues and concerns about our facilities, join the discussion to <a href="#">our forum</a> and meet other people in the community who share the same interests with you.</p>
				</div>
				<div class="sidebar">
					<h3>Sponsored by</h3>
					<p>

					</p>
				</div>
			</div> <!-- end of content -->
		</div> 
	</div>
	<div id="footer"> <!-- start of footer part -->
		<div>
			<ul>
				<li><a href="http://facebook.com/freewebsitetemplates" target="_blank" class="fb">Facebook</a></li>
				<li><a href="http://twitter.com/fwtemplates" target="_blank" class="twitr">Twitter</a></li>
			</ul>
			<span> &copy; Copyright &copy; 2016. <a href="home.php">Company name.</a> All Rights Reserved</span>
		</div>
	</div> <!-- end of footer part -->
</body>
</html>
