<?php

@session_start();

if($_SESSION['isloggedin'] != "yes"){
    $_SESSION['login_alert'] = "Get logged in to view other pages of this website";
    header('location:index.php');
}

?>
<html>
<head>
    <title>Mt.Bikers club - Events - Gallery</title>
    <link href="css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="page">
    <div id="header"> <!-- start of header -->
        <ul>
            <li><a href="home.php">home</a></li>
            <li><a href="about.php">about</a></li>
            <li class="current"><a href="event.php">events</a></li>
            <li><a href="bikesavailable.php">bikes</a></li>
            <li><a href="contact-us.php">contact</a></li>
            <li><a href="index.php">Log out</a></li>
        </ul>
    </div> <!-- end of header -->

    <div id="body">
        <div class="contents">  <!-- start of content -->
            <h1>Gallery</h1>

            <!-- start of gallery -->
            <div class="gallery">
                <ul>
                    <li>
                        <a href=""><img src="images/event/event-gallery1.jpg"  width="280" height="190" alt="Bikers Club" title="Bikers Club"></a>
                    </li>
                    <li>
                        <a href=""><img src="images/event/event-gallery2.jpg"  width="280" height="190" alt="Bikers Club" title="Bikers Club"></a>
                    </li>
                    <li>
                        <a href=""><img src="images/event/event-gallery3.jpg"  width="280" height="190" alt="Bikers Club" title="Bikers Club"></a>
                    </li>
                    <li>
                        <a href=""><img src="images/event/event-gallery4.jpg"  width="280" height="190" alt="Bikers Club" title="Bikers Club"></a>
                    </li>
                    <li>
                        <a href=""><img src="images/event/event-gallery5.jpg"  width="280" height="190" alt="Bikers Club" title="Bikers Club"></a>
                    </li>
                    <li>
                        <a href=""><img src="images/event/event-gallery6.jpg"  width="280" height="190" alt="Bikers Club" title="Bikers Club"></a>
                    </li>
                </ul>
            </div>
            <!-- end of section -->
        </div> <!-- end of contents -->
    </div>  <!-- end of body wrapper -->
</div>
<?php require('footer.php')?>
</body>
</html>
