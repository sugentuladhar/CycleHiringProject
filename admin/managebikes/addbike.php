<?php
include_once('../databasequeries.php');
$db->connect();


$name=$_POST['name'];
$price=$_POST['price'];
$gear=$_POST['gear'];
$suspension=$_POST['suspension'];
$break=$_POST['break'];
$framesize=$_POST['framesize'];
$wheelsize=$_POST['wheelsize'];
$totalstock=$_POST['totalstock'];


$target_dir= "images/bikes/";
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

$db->query("insert into bike(Bike_name,Bike_price,Bike_gear,Bike_suspension,Bike_wheelsize,Bike_framesize,Bike_break,Bike_image,Bike_totalstock,Bike_availablestock)
              values('$name','$price','$gear','$suspension','$wheelsize','$framesize','$break','$image','$totalstock','$totalstock')");


header('location:managebikes.php');
$db->close();
?>