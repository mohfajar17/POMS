<?php

	// Include confi.php
	include_once('conf.php');
	 
	if($_SERVER['REQUEST_METHOD'] == "POST"){
		// Get data
		$email = isset($_POST['email']) ? mysqli_real_escape_string($conn, $_POST['email']) : "";
		$password = isset($_POST['pass']) ? mysqli_real_escape_string($conn, $_POST['pass']) : "";
		$token = isset($_POST['token']) ? mysqli_real_escape_string($conn, $_POST['token']) : "";

		// Insert data into data base
		$sql = "SELECT * FROM atlet WHERE email = '".$email."' and password = '".$password."'";
		$qur = mysqli_query($conn, $sql);

		$row = mysqli_fetch_array($qur,MYSQLI_ASSOC);
		$count = mysqli_num_rows($qur);
		
		if($count>0){
		 	$sql = "UPDATE `atlet` SET `token` = '".$token."' WHERE `email` = '".$email."'";
			$qur = mysqli_query($conn, $sql);
			$row['token'] = $token;
		 	$json = array("status" => 1, "msg" => "Login success!", "data" => $row);
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