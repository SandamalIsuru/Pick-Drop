<?php
 
require 'dbClass.php';

$userID = $_GET['userID'];


$con = new database();
$con->deleteUser("user",$userID);

header('Location: ../allMembers.php');


?>
