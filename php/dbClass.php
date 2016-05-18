<?php
class Database {
	
	private $dbh;
	private $table;
	private $table2;
	
	public function __construct(){
		try {
			$this->dbh = new PDO('mysql:host=localhost;dbname=pickndrop', "root", "");
			//foreach($dbh->query('SELECT * from reservation') as $row) {
				//print_r($row);
		//}
		
		} catch (PDOException $e) {
			print "Error!: " . $e->getMessage() . "<br/>";
			die();
		}
	}
	
	public function getTableDetail($table1) {
        $result = $this->dbh->query("SELECT * FROM $table1");
        if (!$result) die('Invalid query: ' . mysql_error());
        return $result;
    }
	
	public function getVehicleID($table1, $vehicleNo) {
        $result = $this->dbh->query("SELECT * FROM $table1 WHERE v_number='$vehicleNo'");
        if (!$result) die('Invalid query: ' . mysql_error());
        return $result;
    }
	
	public function getTableDetails($table1, $table2) {
        $result = $this->dbh->query("SELECT r.reservation_id, u.u_name, r.time, r.description, r.state, r.date, r.start_time, r.end_time, r.use_of_visit, r.places_to_be_visit, u.designation,r.number_of_persons, u.u_id FROM $table1 r, $table2 u WHERE u.u_id = r.u_id AND r.state = '0'");
        if (!$result) die('Invalid query: ' . mysql_error());
        return $result;
    }
	
	public function getReservationDetails($table1, $table2, $userID) {
        $result = $this->dbh->query("SELECT r.reservation_id, u.u_name, r.time, r.description, r.state, r.date, r.start_time, r.end_time, r.use_of_visit, r.places_to_be_visit, u.designation,r.number_of_persons, u.u_id FROM $table1 r, $table2 u WHERE u.u_id = r.u_id AND r.u_id = '$userID'");
        if (!$result) die('Invalid query: ' . mysql_error());
        return $result;
    }
	
	public function getTableDetailsWithColName($table,$colName,$vehicalNo) {
        $result = $this->dbh->query("SELECT * FROM $table WHERE $colName='$vehicalNo'");
        if (!$result) die('Invalid query: ' . mysql_error());
        return $result;
    }
 	
    public function updateDriverDetails($table, $driverID, $driverName, $address, $email, $mobile, $nic, $licence, $ucscNo) {
        $result = $this->dbh->query("UPDATE $table SET driver_name='$driverName', address='$address', email='$email', mobile='$mobile', nic='$nic', licence_no='$licence', driver_code='$ucscNo' WHERE driver_id='$driverID'");
        if (!$result) die('Invalid query: ' . mysql_error());
        return $result;
    }
	
	public function deleteDriver($table,$driverID) {
        $result = $this->dbh->query("DELETE FROM $table WHERE driver_id='$driverID'");
        if (!$result) die('Invalid query: ' . mysql_error());
    }
	
	public function deleteUser($table,$userID) {
        $result = $this->dbh->query("DELETE FROM $table WHERE u_id='$userID'");
        if (!$result) die('Invalid query: ' . mysql_error());
    }
	
	public function updateUserDetails($table, $userID, $userName, $gender, $regNo, $email, $tel) {
        $result = $this->dbh->query("UPDATE $table SET u_name='$userName', gender='$gender', reg_no='$regNo', email='$email', mobile='$tel' WHERE u_id='$userID'");
        if (!$result) die('Invalid query: ' . mysql_error());
        return $result;
    }
	
	public function updateVehicleDetails($table, $vehicleID,$engineNo,$chassisNo,$vehicleNo,$model,$year,$km,$color,$licenceNo,$renewDate,$serviceDate) {
        $result = $this->dbh->query("UPDATE $table SET engin_no='$engineNo', chassis_no='$chassisNo', v_number='$vehicleNo', model='$model', year='$year', kilo_meters='$km', color='$color', licence_no='$licenceNo', licence_renew_date='$renewDate', last_service_date='$serviceDate' WHERE v_id='$vehicleID'");
        if (!$result) die('Invalid query: ' . mysql_error());
        return $result;
    }
	
	public function deleteVehicle($table,$vehicleID) {
        $result = $this->dbh->query("DELETE FROM $table WHERE v_id='$vehicleID'");
        if (!$result) die('Invalid query: ' . mysql_error());
    }
	
	public function insertConfirmReservationDetail($driverID, $reservationID, $vehicleID, $time) {
        $result = $this->dbh->query("INSERT INTO confirmed_reservation VALUES (NULL, '$driverID', '$reservationID', '$vehicleID', '$time')");
        if (!$result) die('Invalid query: ' . mysql_error());
    }
 
}
 ?>
