<?php
@session_start();

if($_SESSION['isloggedin'] != "yes"){
    $_SESSION['login_alert'] = "Get logged in to view other pages of this website";
    header('location:index.php');
}

include_once("bikesavailablecontroller.php");

if(isset($_POST['search'])) {
   include_once('searchbikecontroller.php');
}

?>


<html>
<head>
	<title>Mt.Bikers club - Mountain Bikes available</title>
	<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
	<div id="page">
		<div id="header"> <!-- start of header -->
			<ul>
				<li><a href="home.php">home</a></li>
				<li><a href="about.php">about</a></li>
				<li><a href="event.php">events</a></li>
				<li class="current"><a href="bikesavailable.php">bike</a></li>
				<li><a href="contact-us.php">contact</a></li>
                <li><a href="index.php">log out</a></li>
			</ul>

		</div> <!-- end of header -->

		<div id="body">  
			<div class="bikecontents">  <!-- start of content -->
				<h1>MOUNTAIN BIKES TO HIRE</h1>
                <h2>We provide the bikes only on days basis.</h2>
                <div style="margin-left: 700px ">
                    <form action="bikesavailable.php" method="post">
                        <table border="0">
                            <tr>
                                <td><input type="text" name="searchbikename"></td>
                                <td><input type="submit" name="search" value="search"></td>
                            </tr>
                        </table>
                    </form>
                </div>
				<!-- start of bikeinfo -->
                <div class="bikelist">
                    <ul>
                        <?php
                          foreach($bikes as $bike):?>
                            <li><a href="bikesavailable.php?id=<?php echo $bike->id ?>"><?php echo $bike->name ?></a></li>
                    <?php endforeach; ?>
                    </ul>
                </div>
				<div class="bikeinfo">
					<ul>
						<li>
                            <?php
                            if(isset($_POST['search'])) {
                                foreach ($searchedbikes as $bike):
                                    ?>
                                    we have <?php echo $bike->availablestock;?> <?php echo $bike->name; ?> available in our store!
                                    <br><br>
                                    <a href=""><img src="<?php echo $bike->image; ?>" width="280" height="190" alt="Bikers Club" title="Bikers Club"></a>
                                    <div>
                                        <div style="margin-top: 15px;margin-bottom: 15px;">
                                            <h2>Bike Specification</h2>
                                            <table border="1">
                                                <tr>
                                                    <td>Bike Brand:</td>
                                                    <td><?php echo $bike->name ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Bike price:</td>
                                                    <td>Rs.<?php echo $bike->price ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Gear Type:</td>
                                                    <td><?php echo $bike->geartype; ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Suspension:</td>
                                                    <td><?php echo $bike->suspension ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Wheel Size:</td>
                                                    <td><?php echo $bike->wheelsize ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Frame Size:</td>
                                                    <td><?php echo $bike->framesize ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Break Type:</td>
                                                    <td><?php echo $bike->breaktype ?></td>
                                                </tr>
                                            </table>
                                        </div>
                                        <form name="bikeform1" action="confirmbike.php" method="post">
                                            <input type="hidden" name="id" value="<?php echo $bike->id; ?>"/>
                                            Hiring Days:
                                            <input type="text" name="hiretime" class="bikeform"/>
                                            Number of Bikes to hire:
                                            <input type="text" name="numberofbike" class="bikeform"/>
                                            <input type="submit" value="hire" class="bikeform"/>
                                        </form>
                                    </div>
                                <?php
                                endforeach;
                            }
                            else{
                            ?>
                                we have <?php echo $selectedBike->availablestock;?> <?php echo $selectedBike->name; ?> bike available in our store!
                                <br><br>
                            <a href=""><img src="<?php echo $selectedBike->image;?>" width="280" height="190" alt="Bikers Club" title="Bikers Club"></a>
                            <div>
                                <div style="margin-top: 15px; margin-bottom: 15px;">
                                    <h2>Bike Specification</h2>
                                    <table border="1">
                                        <tr>
                                            <td>Bike Brand:</td>
                                            <td><?php echo $selectedBike->name ?></td>
                                        </tr>
                                        <tr>
                                            <td>Bike price:</td>
                                            <td>Rs.<?php echo $selectedBike->price ?></td>
                                        </tr>
                                        <tr>
                                            <td>Gear Type:</td>
                                            <td><?php echo $selectedBike->geartype; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Suspension:</td>
                                            <td><?php echo $selectedBike->suspension ?></td>
                                        </tr>
                                        <tr>
                                            <td>Wheel Size:</td>
                                            <td><?php echo $selectedBike->wheelsize ?></td>
                                        </tr>
                                        <tr>
                                            <td>Frame Size:</td>
                                            <td><?php echo $selectedBike->framesize ?></td>
                                        </tr>
                                        <tr>
                                            <td>Break Type:</td>
                                            <td><?php echo $selectedBike->breaktype ?></td>
                                        </tr>
                                    </table>
                                </div>
                                <form name="bikeform1" action="confirmbike.php" method="post">
                                    <table border="0">
                                        <tr>
                                            <td><input type="hidden" name="id" value="<?php echo $selectedBike->id; ?>" /></td>
                                        </tr>
                                        <tr>
                                            <td>Hiring Days:</td>
                                            <td><input type="text" name="hiretime" class="bikeform"/></td>
                                        </tr>
                                        <tr>
                                            <td>Number of Bikes to hire:</td>
                                            <td><input type="text" name="numberofbike" class="bikeform"/></td>
                                            <td><input type="submit" value="hire" class="bikeform"/></td>
                                        </tr>
                                </form>
                                </table>
                            </div>
                            <?php } ?>
						</li>
					</ul>
				</div><!-- end of section -->
                <div style="margin-top: 650px">
                    <u>Return Bike</u>
                    <form action="returnbike.php" method="post">
                        Enter your hire ID to return bike:
                        <input type="text" name="returnhireid" placeholder="Hire ID">
                        <input type="submit" value="return bike">
                    </form>
                </div>
			</div> <!-- end of contents -->
		</div>  <!-- end of body wrapper -->
	</div>
    <?php require('footer.php') ?>
</body>
</html>