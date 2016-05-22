<?php

include_once('databasequeries.php');
$db->connect();

$returnhireid=$_POST['returnhireid'];

$db->query("update bike set Bike_availablestock = Bike_availablestock +
            (SELECT  Hire_numberofbike from hire WHERE Hire_id = $returnhireid)
              where B_id IN (select B_id from hire WHERE Hire_id = $returnhireid )");

$db->query("update hire set Hire_return = 'yes' WHERE Hire_id = $returnhireid");

header('location: bikesavailable.php');
$db->close();
?>