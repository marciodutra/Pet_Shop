<?php 
	include_once('../config/conn/db_connection.php');
	 if(isset($_POST['services_id'])){ 	
	    $id = trim($_POST['services_id']);
		$stmt = $db->query("SELECT * FROM `tbl_services` WHERE services_id = '$id'");	 
	    $row = $stmt->fetch(PDO::FETCH_ASSOC);
		echo json_encode($row);
    }
?>