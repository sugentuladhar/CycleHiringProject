<?php
if(isset($_POST['deletebike'])){

    include_once('../databasequeries.php');

    $db->connect();

    $deletebikeid=$_POST['bikeid'];
    $db->query("delete from bike WHERE B_id = $deletebikeid");

    header('location:managebikes.php');
}
?>
<form action="deletebike.php" method="post">
    <table border="0">
        <tr>
            <td style="color: #ffffff"> Insert the Bike id to be deleted: </td>
            <td> <input type="text" name="bikeid"> </td>
            <td> <input type="submit" name="deletebike" value="delete bike"> </td>
        </tr>
    </table>
</form>

