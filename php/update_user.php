<?php
 
require 'dbClass.php';

$userID = $_GET['userID'];
$userName = $_POST['name'];
$gender = $_POST['gender'];
$regNo = $_POST['regNo'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$userName;

$con = new database();
$con->updateUserDetails("user",$userID,$userName,$gender,$regNo,$email,$mobile);

if (!isset($_GET['userRegID']))
{
	header('Location: ../allMembers.php');
}else{
	header('Location: ../userDetails.php?userRegID='.$regNo);
	
}


?>
