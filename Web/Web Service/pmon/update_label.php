<?php

	// Include confi.php
	include_once('conf.php');
	
	if($_SERVER['REQUEST_METHOD'] == "POST"){
		// Get data
		$id_atlet = isset($_POST['id_atlet']) ? mysqli_real_escape_string($conn, $_POST['id_atlet']) : "";

		// Insert data into data base
		$sql = "SELECT AVG(intensitas) FROM form WHERE waktu_input > DATE_SUB(NOW(), INTERVAL 1 MONTH)";
		$sql1 = "SELECT AVG(intensitas_target) FROM form WHERE waktu_input > DATE_SUB(NOW(), INTERVAL 1 MONTH)";
		$sql2 = "SELECT `intensitas_target` FROM `atlet` WHERE ".$id_atlet."";
		$qur = mysqli_query($conn, $sql);
		$qur1 = mysqli_query($conn, $sql1);
		$qur2 = mysqli_query($conn, $sql2);

		$row = mysqli_fetch_array($qur,MYSQLI_ASSOC);
		$row1 = mysqli_fetch_array($qur1,MYSQLI_ASSOC);
		$row2 = mysqli_fetch_array($qur2,MYSQLI_ASSOC);
		$count = mysqli_num_rows($qur);
		$label = ($row['AVG(intensitas)'] - $row1['AVG(intensitas_target)']) + $row2['intensitas_target'];

		if($count>0){
			$sql = "UPDATE `atlet` SET `label` = '".$label."' WHERE `id_atlet` = '".$id_atlet."'";
			$qur = mysqli_query($conn, $sql);
		 	$json = array("status" => 1, "msg" => "Login success!", "data" => $label);
		}else{
		 	$json = array("status" => 0, "msg" => "Incorrect parameter!", "data" => array());
		}
	}else{
	 	$json = array("status" => 0, "msg" => "Request method not accepted", "data" => array());
	}
	
	//@mysql_close($conn);
	
	/* Output header */
	header('Content-type: application/json');
	echo json_encode($json);
?>