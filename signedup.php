<?php
@session_start();
include_once('databasequeries.php');
$con=mysql_connect("localhost","root","root");
if(!$con)
{
    die("cannot connect".mysql_error());
}
mysql_select_db("bikersclub",$con);

$name = $_POST['C_name'];
$address = $_POST['C_address'];
$phone = $_POST['C_phone'];
$citizenshipno= $_POST['citizenshipno'];
$username = $_POST['username'];
$password=md5($_POST['password']);
$sql1="insert into customer(C_name,C_address,C_phone,citizenshipno,username,password) values('$name','$address','$phone','$citizenshipno','$username','$password')";
if(!mysql_query($sql1,$con))
{
    die("cannot insert".mysql_error());
}
$_SESSION['customerName'] = $name;
$_SESSION['username'] = $username;
$_SESSION['checkusertype'] = 'register';
/*$query=$db->query("select c_id from customer where username = $username");
while($row = $db->fetchArray($query)){
    $_SESSION['customerId'] = $row['c_id'];
    echo $_SESSION['customerId']; die;
}*/
header('location:home.php');
mysql_close($con);
?>

