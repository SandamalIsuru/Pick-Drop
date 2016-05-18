<?php
 
require 'dbClass.php';

$driverID = $_GET['driverID'];
$driverName = $_POST['name'];
$address = $_POST['address'];
$nic = $_POST['NIC'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$licence = $_POST['licence'];
$ucscNo = $_POST['ucscNo'];
$userName;

$con = new database();
$con->updateDriverDetails("driver",$driverID,$driverName,$address,$email,$mobile,$nic,$licence,$ucscNo);

if (!isset($_GET['driverRegNo']))
{
	header('Location: ../drivers.php');
}else{
	header('Location: ../driverDetails.php?driverRegNo='.$ucscNo);
	
}


?>
