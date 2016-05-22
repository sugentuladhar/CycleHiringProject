<?php
include_once("databasequeries.php");

class SearchBike {
    var $id;
    var $name;
    var $geartype;
    var $suspension;
    var $wheelsize;
    var $framesize;
    var $breaktype;
    var $image;
}

$searhcedbikes=array();

$biketosearch=$_POST['searchbikename'];

$db->connect();
$result=$db->query("select * from bike WHERE Bike_name LIKE '%$biketosearch%' ");
$count=mysql_num_rows($result);

if($count==0){
    echo "no bikes to display";
}
else{
    while($row=$db->fetchArray($result)){
        $b = new SearchBike();
        $b->id = $row['B_id'];
        $b->name = $row['Bike_name'];
        $b->price = $row['Bike_price'];
        $b->geartype = $row['Bike_gear'];
        $b->suspension = $row['Bike_suspension'];
        $b->breaktype = $row['Bike_break'];
        $b->framesize = $row['Bike_framesize'];
        $b->wheelsize = $row['Bike_wheelsize'];
        $b->availablestock = $row['Bike_availablestock'];
        $b->image = $row['Bike_image'];
        $searchedbikes[] = $b;

        //$output .='<div>'.$searchedbikename.'<br>'.$searchedbikewheelsize.'<br>'.$searchedbikeframesize.'<br>'.$searchedbikegear.'<br>'.'</div>';
    }
}
$db->close();
/**$biketosearch=$_POST['searchbikename'];

//$biketosearch=preg_replace("#[^0-9a-z]#i","","$biketosearch");
$output='';
$result=$db->query("select * from bike WHERE Bike_name LIKE '%$biketosearch%' ");
$count=mysql_num_rows($result);
if($count == 0){
    $output="bike not found";
}
else{
 while($searchedbike=$db->fetchArray($result)){
     $searchedbikename  =  $searchedbike['Bike_name'];
     $searchedbikewheelsize  =  $searchedbike['Bike_wheelsize'];
     $searchedbikeframesize  =  $searchedbike['Bike_framesize'];
     $searchedbikegear  =  $searchedbike['Bike_gear'];
     $output .='<div>'.$searchedbikename.'<br>'.$searchedbikewheelsize.'<br>'.$searchedbikeframesize.'<br>'.$searchedbikegear.'<br>'.'</div>';
}
}**/
?>