<?php
 
require 'dbClass.php';

$vehicleID = $_GET['vehicleID'];
$engineNo = $_POST['engineNo'];
$chassisNo = $_POST['chassisNo'];
$vehicleNo = $_POST['vehicleNo'];
$model = $_POST['model'];
$year = $_POST['year'];
$km = $_POST['km'];
$color = $_POST['color'];
$licenceNo = $_POST['licenceNo'];
$renewDate = $_POST['renewDate'];
$serviceDate = $_POST['serviceDate'];

$con = new database();
$con->updateVehicleDetails("vehical_detail",$vehicleID,$engineNo,$chassisNo,$vehicleNo,$model,$year,$km,$color,$licenceNo,$renewDate,$serviceDate);

if (!isset($_GET['vehicleNo']))
{
	header('Location: ../allVehical.php');
}else{
	header('Location: ../vehicleDetails.php?vehicleNo='.$vehicleNo);
	
}


?>
