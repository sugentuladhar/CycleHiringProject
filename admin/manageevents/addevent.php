<?php
include_once('../databasequeries.php');
$db->connect();


$eventname = $_POST['eventname'];
$eventdescription = $_POST['eventdescription'];
$eventdate = $_POST['eventdate'];
//$image = $_POST['eventimage'];

$target_dir= "images/event/";
$fullpath = 'D:/backup/6thsem/phpclass/UniServerZ/www/mt.bikersclub/';
$target_file= $target_dir . basename($_FILES["image"]["name"]);
$tmpname = $_FILES["image"]["tmp_name"];
if(move_uploaded_file($tmpname, $fullpath . $target_file)){
    echo"The File".basename($_FILES["image"]["name"])."has been uploaded.";
}
else{
    die("Sorry, there was an error uploading your file.");
}
$image= $target_file;//$target_dir . basename($FILES["image"]["name"][$i],$imageFileType);
echo $image;


/*$sql = "insert into bike(Bike_name,Bike_price,Bike_gear,Bike_suspension,Bike_wheelsize,Bike_framesize,Bike_break,Bike_image,Bike_totalstock,Bike_availablestock)
              values('$name','$price','$gear','$suspension','$wheelsize','$framesize','$break','$image','$totalstock','$totalstock')";
mysql_query($sql,$con);*/

$db->query("insert into event(Event_name,Event_date,Event_description,Event_image)
              values('$eventname','$eventdate','$eventdescription','$eventimage')");


header('location:manageevents.php');
$db->close();
?>