<?php

require 'dbClass.php';

$driverID = $_POST['driver'];
$vehicleNo = $_POST['selected_text'];
$reservationID = $_GET['reservationID'];
date_default_timezone_set('Asia/Colombo');
$currDate = date("Y-m-d H:i:s");


$con = new database();
$a = $con->getVehicleID("vehical_detail", $vehicleNo);


foreach($a as $row) {
	$vehicleID = $row[0];
	
	
}

$b = $con->insertConfirmReservationDetail($driverID, $reservationID, $vehicleID, $currDate);

header('Location: ../reservationDetail.php');

?>