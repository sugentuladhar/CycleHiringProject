<?php
if(isset($_POST['deleteevent'])){

    include_once('../databasequeries.php');

    $db->connect();

    $deleteeventid=$_POST['eventid'];
    $db->query("delete from event WHERE Event_id = $deleteeventid");

    header('location:manageevents.php');
}
?>
<form action="deleteevent.php" method="post">
    <table border="0">
        <tr>
            <td style="color: #ffffff"> Insert the event id to be deleted: </td>
            <td> <input type="text" name="eventid"> </td>
            <td> <input type="submit" name="deleteevent" value="delete event"> </td>
        </tr>
    </table>
</form>

