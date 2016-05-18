<?php
 
require 'dbClass.php';

$driverID = $_GET['driverID'];


$con = new database();
$con->deleteDriver("driver",$driverID);

header('Location: ../drivers.php');


?>
