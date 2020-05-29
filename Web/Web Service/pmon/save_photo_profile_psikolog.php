<?php

	// Include confi.php
	include_once('conf.php');

	if($_SERVER['REQUEST_METHOD'] == "POST"){
		
		// Get data
		$id_psikolog = isset($_POST['id_psikolog']) ? mysqli_real_escape_string($conn, $_POST['id_psikolog']) : "";
		$photo_profile = isset($_POST['photo_profile']) ? mysqli_real_escape_string($conn, $_POST['photo_profile']) : "";
    	
    	$input = base64_decode($photo_profile);
    	file_put_contents('tmp/'.$id_psikolog.'.png', $input);

		// Insert data into data base
		$sql = "SELECT * FROM psikolog WHERE id_psikolog = '".$id_psikolog."'";
		$qur = mysqli_query($conn, $sql);

		$row = mysqli_fetch_array($qur,MYSQLI_ASSOC);
		$count = mysqli_num_rows($qur);

		if($count>0){
			$sql = "UPDATE `psikolog` SET `photo_profile` = '".$id_psikolog.".png' WHERE id_psikolog = '".$id_psikolog."'";
			$qur = mysqli_query($conn, $sql);
			$row['id_psikolog'] = $id_psikolog;
			$row['photo_profile'] = $photo_profile;
		 	$json = array("status" => 1, "msg" => "success!", "data" => $row);
		}else{
		 	$json = array("status" => 0, "msg" => "Incorrect parameter!", "data" => array());
		}
	}else{
	 	$json = array("status" => 0, "msg" => "Request method not accepted", "data" => array());
	}
	
	/* Output header */
	header('Content-type: application/json');
	echo json_encode($json);
?>