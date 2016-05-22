<?php

@session_start();

if($_SESSION['isloggedin'] != "yes"){
    $_SESSION['login_alert'] = "Get logged in to view other pages of this website";
    header('location:index.php');
}

?>

<html>
<head>
	<title>Mt.Bikers Club - Contact us</title>
	<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
	<div id="page">
		<div id="header"> <!-- start of header -->
			<ul>
				<li><a href="home.php">home</a></li>
				<li><a href="about.php">about</a></li>
				<li><a href="event.php">events</a></li>
				<li><a href="bikesavailable.php">bikes</a></li>
				<li class="current"><a href="contact-us.php">contact</a></li>
                <li><a href="index.php">Log out</a></li>
			</ul>
		</div> <!-- end of header -->

		<div id="body">  
			<div class="contents">  <!-- start of content -->
				<h1>CONTACT DETAILS</h1>
				<p>
					For any type of help you can contact to th details given below.
				</p>
				<br/>
				<p>Address : lazimpat, KTM</p>
				<br/>
				<p>Office Phone Number : 01-44#####</p>
				<br/>
				<p>Email : info@bikersclub.com</p>
			</div> <!-- end of contents -->
		</div>  <!-- end of body wrapper -->
	</div>
	<?php require('footer.php')?>
</body>
</html>
