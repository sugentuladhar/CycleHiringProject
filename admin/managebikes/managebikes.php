
<html>
<head>
    <title>Mt.Bikers Club - Admin</title>

    <link href="../style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="container">
    <div id="banner">
        <h1>Bikers Club</h1>
    </div>
    <div class="clear"></div>
    <div id="sidebar">
        <div class="menu">
            <ul>
                <li class="links">Dashboard</li>
                <li><a href="managebikes.php?id=1">Insert bike info</a></li>
                <li><a href="managebikes.php?id=2">delete bike info</a></li>
            </ul>
        </div>
    </div>
    <div class="input">
        <?php
        if($_GET['id']==1){
            require('addbikeform.php');
        }
        if($_GET['id']==2){
            require('deletebike.php');
        }
        ?>
    </div>
    <div id="footer"> <a href="../admindashboard.php">Dashboard</a> | &copy; 2016 Mt.BikersClub</div>
</div>
</body>
</html>
