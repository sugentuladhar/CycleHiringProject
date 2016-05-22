<?php

@session_start();

if($_SESSION['isloggedin'] != "yes"){
    $_SESSION['login_alert'] = "Get logged in to view other pages of this website";
    header('location:index.php');
}

include_once('databasequeries.php');
?>
<html>
<head>
    <title>Mt.Bikers club - Events</title>
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
            <h1>EVENTS</h1>
            <h2>The BikersClub is very happy to organize most of the cycling events.</h2>
            <p>
                We usually organize the cycling events on almost every weekends. There are many places in Nepal where people can have a journey on mountain bike
                so we just try to provide the required services to go for a cycling tour and guide the cyclists.
                <br><br>
                Here are some of the events that we have organized succesfully.
            </p>
            <ul class="articles" >
                <li>
                    <?php

                    $per_page = 4; //per page result
                    if(!isset($_GET['page']))
                    {
                        $page = 1;  //current page
                    }
                    else
                    {
                        $page = $_GET['page'];
                    }
                    if($page<=1)
                        $start = 0; // staring row
                    else
                        $start = $page * $per_page - $per_page;
                    $db->connect();
                    $sql  = "select * from event";
                    $sqli = "select * from event LIMIT $start , $per_page" ;

                    $num_row = mysql_num_rows($db->query($sql)); //25
                    $num_page = ceil($num_row/$per_page); //total number of pages  9
                    $result = $db->query("$sqli");

                    while($row = mysql_fetch_array($result)) {
                        ?>
                                <a href=""><img src="<?php echo $row['Event_image']; ?>"  width="208" height="148" alt="Bikers Club" title="Bikers Club"></a>
                                <h3>
                                    <?php echo $row['Event_name']; ?>
                                    <br>
                                    <?php echo $row['Event_date']; ?>
                                    <br>
                                </h3>
                                <p style="width: 800px;">
                                   <?php echo $row['Event_description']; ?>
                                    <br>
                                <form method="post" action="gallery.php">
                                <input type="submit" value=" Event Gallery">
                                </form>
                                <br><br>
                                </p>

                         <?php } ?>
                        </li>
                    </ul>

            <div align="center">
                    <?php
                    $prev = $page - 1;
                    $next = $page + 1;

                    echo "<hr>";
                    if($prev >0)
                        echo "<a href='?page=$prev'> prev </a>";

                    $number=1;
                    for($number; $number<=$num_page ; $number=$number+1)
                    {
                        if($page == $number)
                        {
                            echo "<b>[$number]</b>";
                        }
                        else
                        {
                            echo "<a href='?page=$number'>$number </a>";
                        }
                    }

                    if($next <  $num_page + 1)
                        echo "<a href='?page=$next'> next </a>";

                    ?>
            </div>
            <!-- end of section -->
        </div>
    </div>
</div>
<?php require('footer.php')?>
</body>
</html>

