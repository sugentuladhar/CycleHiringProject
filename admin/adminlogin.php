<?php
$con=mysql_connect("localhost","root","root");
mysql_select_db("bikersclub",$con);
$isvalid=1;
$recall=1;
$formusername=$_POST['username'];
$formpassword=md5($_POST['password']);
$result1=mysql_query("select Admin_username,Admin_password from admin");
while ($row1 = mysql_fetch_array($result1))
{
    $dbusername=$row1['Admin_username'];
    $dbpassword=$row1['Admin_password'];
    if ((strcmp($formusername,$dbusername)==0) && (strcmp($formpassword,$dbpassword)== 0))
    {
        $isvalid=0;
        header('location:admindashboard.php');
    }
}
if($isvalid==1)
{
    $recall=0;
    echo "<script>
                alert('not valid user');
              </script>";
    require('index.php');
}
?>
