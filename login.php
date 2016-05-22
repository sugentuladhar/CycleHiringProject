<?php
@session_start();
$_SESSION['isloggedin'] = "no";
$con=mysql_connect("localhost","root","root");
mysql_select_db("bikersclub",$con);
$isvalid=1;
$formusername=$_POST['username'];
$formpassword=md5($_POST['password']);
$result1=mysql_query("select username,password, C_id,C_name from customer WHERE username = '$formusername' AND password = '$formpassword'");
while ($row1 = mysql_fetch_array($result1))
{
    $_SESSION['customerId']=$row1['C_id'];
    $_SESSION['customerName']=$row1['C_name'];
    $_SESSION['checkusertype'] = "login";
    $_SESSION['isloggedin'] = "yes";
    $isvalid=0;
    header('location:home.php');

}
if($isvalid==1) {
    echo "<script>
        alert('not valid user');
        </script>";
    require('index.php');
}
?>
