<?php
include_once('databasequeries.php');

@session_start();
$customerId = $_SESSION['customerId'];

$db->connect();

$date = date("Y-m-d");
$id = $_POST['id'];
$hireddays = $_POST['hiretime'];
$hiredmunberofbike = $_POST['numberofbike'];
$db->query("insert into hire(Hire_time,B_id, C_id, Hire_date,Hire_numberofbike,Hire_return)
      values ($hireddays, $id, $customerId, '$date','$hiredmunberofbike','no')");

$hireid = mysql_insert_id();


$db->query("update bike set Bike_availablestock = Bike_availablestock - $hiredmunberofbike WHERE B_id IN
            (SELECT  B_id from hire WHERE B_id = $id)");

$_SESSION["alert"] = 'thankyou '.$_SESSION['customerName'].' for hiring at bikersclub. Use ' . $hireid . ' to return this bike';
/*$result = $db->query("select email from customer WHERE C_id = $customerId");
while($row = $db->fetchArray($result)){
    $email = $row['email'];
}

mail($email,"subject:id to return the bike","use this id to return the bike you have hired".$hireid,"from:sugentuladhar@yahoo.com");*/

header("location: home.php");

$db->close();
?>