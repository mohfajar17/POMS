<?php

	// Include confi.php
	include_once('conf.php');
	 
	if($_SERVER['REQUEST_METHOD'] == "POST"){
		// Get data
		$idAtlet = isset($_POST['id_atlet']) ? mysqli_real_escape_string($conn, $_POST['id_atlet']) : "";
		$intensitasTarget = isset($_POST['intensitas_target']) ? mysqli_real_escape_string($conn, $_POST['intensitas_target']) : "";

		// Insert data into data base
		$sql = "SELECT * FROM atlet WHERE id_atlet = '".$idAtlet."'";
		$qur = mysqli_query($conn, $sql);

		$row = mysqli_fetch_array($qur,MYSQLI_ASSOC);
		$count = mysqli_num_rows($qur);
		
		if($count>0){
		 	$sql = "UPDATE `atlet` SET `intensitas_target` = '".$intensitasTarget."' WHERE `id_atlet` = '".$idAtlet."'";
			$qur = mysqli_query($conn, $sql);
			$row['intensitas_target'] = $intensitasTarget;
		 	$json = array("status" => 1, "msg" => "update success!", "data" => $row);
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