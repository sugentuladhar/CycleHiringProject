<?php
@session_start();

if($_SESSION['isloggedin'] != "yes"){
    $_SESSION['login_alert'] = "Get logged in to view other pages of this website";
    header('location:index.php');
}


include_once('databasequeries.php');
if($_SESSION['checkusertype'] == 'register'){
    $db->connect();
    $username = $_SESSION['username'];
    $query=$db->query("select c_id from customer where username = '$username'");
    while($row = $db->fetchArray($query)){
        $_SESSION['customerId'] = $row['c_id'];
    }
    $db->close();
}
?>


<html>
<head>
	<title>Mt.Bikers Club - Home</title>
	<link href="css/style.css" rel="stylesheet" type="text/css" />
    <?php if(isset($_SESSION["alert"])): ?>
        <script type="application/javascript">
            alert('<?php echo $_SESSION["alert"] ?>');
        </script>
    <?php
    unset($_SESSION["alert"]);
    endif; ?>
</head>

<body>
	<div id="page">
		<div id="header"> <!-- start of header -->
			<ul>
				<li class="current"><a href="home.php">home</a></li>
				<li><a href="about.php">about</a></li>
				<li><a href="event.php">events</a></li>
				<li><a href="bikesavailable.php">bikes</a></li>
				<li><a href="contact-us.php">contact</a></li>
                <li><a href="index.php">Log out</a></li>
			</ul>
		</div> <!-- end of header -->
        <h3 style="color: bisque">welcome <?php @session_start(); echo $_SESSION['customerName']; ?> !</h3>
		<div id="body">  
			<div id="main">
				<div class="featured"> <!-- start of featured -->
					<a href="about.php"><img src="images/home-biker.jpg"  width="270" height="180" alt="Bikers Club" title="Bikers Club"></a>
					<a href="about.php"><img src="images/home-bikers.jpg" width="270" height="180" alt="Bikers Club" title="Bikers Club"></a>
					<h2>Buy a bike</h2>
                    <p>
                        Looking for mountain bike to own? Just browse through all our <a href="#">Buy a Bike</a> and find what you're looking for. But if you don't find any
                        bikes you wanted, you can mail us to <a href="#">Give specification</a>  and tell us which bike you want with its specification. We could provide the
                        bikes as per order too. And we love the challenge of doing something different and something special.
					</p>
                    <h2>Be Part of Our Community</h2>
                    <p>If you are experiencing issues and concerns about our facilities, join the discussion to <a href="#">our forum</a> and meet other people in the community who share the same interests with you.</p>
				</div> <!-- end of featured -->

				<div class="section" > <!-- srtart of gallery and article section -->
					<div id="gallery">
						<h3>Hire a Bike</h3>
						<ul>
							<li><a href="bikesavailable.php"><img src="images/bikes/10.jpg" width="125" height="80" alt="Bikers Club" title="Bikers Club"></a></li>
							<li><a href="bikesavailable.php"><img src="images/bikes/9.jpg" width="125" height="80" alt="Bikers Club" title="Bikers Club"></a></li>
							<li><a href="bikesavailable.php"><img src="images/bikes/8.jpg" width="125" height="80" alt="Bikers Club" title="Bikers Club"></a></li>
							<li><a href="bikesavailable.php"><img src="images/bikes/5.jpg" width="125" height="80" alt="Bikers Club" title="Bikers Club"></a></li>
						</ul>
						<a class="more" href="bikesavailable.php">Get a Bike &#187;</a>
					</div>

					<div id="events">
						<h3>Events</h3>
						<ul>
                            <?php
                            $db->connect();
                            $start = 0;
                            $limit = 3;
                            $events=$db->query("select Event_description from event limit $start , $limit");
                            while($row = $db->fetchArray($events)){
                            ?>
							<li><?php echo $row['Event_description']; ?></li>
							<!--<li>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac</li>
                            <li class="last">Duis dui enim, gravida at hendrerit id, molestie eget quam. Phasellus posuere nunc vitae ipsum aliquam et lobortis</li>-->
                            <?php } ?>
						</ul>
						<a class="more" href="event.php">View more &raquo;</a>
					</div>
				</div> <!-- end of gallery and article section -->
			</div>

			<div id="sidebar">  <!-- start of sidebar -->
				<ul>
					<li>
						<h3><a href="about.php">Proin sollicitudin dignissim ligula sed vestibulum.</a></h3>
						<p>Vestibulum sed magna eu justo tempor facilisis sed ut felis. Ut vitae tortor neque, convallis lobortis enim.</p>
					</li>
					<li>
						<h3><a href="about.php"> Quisque purus nisl, feugiat  vitae convallis eu</a></h3>
						<p>Nulla nunc magna, fringillavitae mattis insuscipitausto. Fusce laoreet, velit non feugiat laoreet, sem massa convallis tellus, et rutrum velit erat.</p>
					</li>
					<li>
						<h3><a href="about.php">Nunc ullamcorper, velit quis  mattis eleifend </a></h3>
						<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nulla tortor mauris, tempus in convallis in.</p>
					</li>
				</ul>

				<h3>Get In Touch</h3>
				<form>
					<table>
						<tr><td><input type="text" name="" value="Name" onblur="if(this.value==''){this.value=this.defaultValue;}" onfocus="if(this.value==this.defaultValue){this.value='';}" /></td></tr>
						<tr><td><input type="text" name="" value="Email" onblur="if(this.value==''){this.value=this.defaultValue;}" onfocus="if(this.value==this.defaultValue){this.value='';}" /></td></tr>
						<tr><td><textarea name="message" onblur="if(this.value==''){this.value=this.defaultValue;}" onfocus="if(this.value==this.defaultValue){this.value='';}">Message</textarea></td></tr>
						<tr><td><input type="submit" value="" class="button" /></td></tr>
					</table>
				</form>
			</div>  <!-- end of sidebar -->
		</div>  <!-- end of body wrapper -->
	</div>
	<?php require('footer.php') ?>
</body>
</html>
