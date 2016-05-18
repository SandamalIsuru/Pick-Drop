<?php
 
require 'dbClass.php';

$con = new database();
$x = $con->getTableDetails("reservation","user");
$y = $con->getTableDetails("reservation","user");
$z = $con->getTableDetails("reservation","user");
$count=0;
foreach($y as $row) {
	if($row[4]=="0"){
		$count++;
	}
}

?>
