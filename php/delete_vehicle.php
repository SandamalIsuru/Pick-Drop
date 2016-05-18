<?php
 
require 'dbClass.php';

$vehicleID = $_GET['vehicleID'];


$con = new database();
$con->deleteVehicle("vehical_detail",$vehicleID);

header('Location: ../allVehical.php');


?>
