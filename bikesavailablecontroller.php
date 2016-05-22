<?php include_once("databasequeries.php") ?>
<?php
class Bike {
    var $id;
    var $name;
    var $geartype;
    var $suspension;
    var $wheelsize;
    var $framesize;
    var $breaktype;
    var $image;
    var $totalstock;
    var $availablestock;
}

$id = 0;
if(isset($_GET['id'])) {
    $id = $_GET['id'];
}
$selectedBike = null;
$bikes = array();

$db->connect();
/**$bike_result=$db->query("select * from bike WHERE B_id NOT IN
                          (SELECT B_id FROM hire WHERE Hire_availability=1)");*/

$bike_result=$db->query("select * from bike WHERE Bike_availablestock > 0");
while($bike=$db->fetchArray($bike_result)){
    $b = new Bike();
    $b->id = $bike["B_id"];
    $b->name = $bike['Bike_name'];
    $b->price = $bike['Bike_price'];
    $b->geartype = $bike['Bike_gear'];
    $b->suspension = $bike['Bike_suspension'];
    $b->wheelsize = $bike['Bike_wheelsize'];
    $b->framesize = $bike['Bike_framesize'];
    $b->breaktype = $bike['Bike_break'];
    $b->image = $bike['Bike_image'];
    $b->totalstock = $bike['Bike_totalstock'];
    $b->availablestock = $bike['Bike_availablestock'];

    $bikes[] = $b;
}
if($id==0){
    $selectedBike = $bikes[0];
} else {
    $bike_result=$db->query("select * from bike where B_id=$id");
    while($bike=$db->fetchArray($bike_result)){
        $b = new Bike();
        $b->id = $bike["B_id"];
        $b->name = $bike['Bike_name'];
        $b->price = $bike['Bike_price'];
        $b->geartype = $bike['Bike_gear'];
        $b->suspension = $bike['Bike_suspension'];
        $b->wheelsize = $bike['Bike_wheelsize'];
        $b->framesize = $bike['Bike_framesize'];
        $b->breaktype = $bike['Bike_break'];
        $b->image = $bike['Bike_image'];
        $b->availablestock = $bike['Bike_availablestock'];


        $selectedBike = $b;
    }
}

$db->close();
?>
