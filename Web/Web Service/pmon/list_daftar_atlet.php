<?php
 
	// Include confi.php
	include 'conf.php';
	 
	if($_SERVER['REQUEST_METHOD'] == "POST"){
		// Get data
		$id_psikolog = isset($_POST['id_psikolog']) ? mysqli_real_escape_string($conn, $_POST['id_psikolog']) : "";
		$status = 0;

		// Insert data into data base
		$sql = "SELECT * FROM atlet WHERE id_psikolog = '".$id_psikolog."'";
		$qur = mysqli_query($conn, $sql);

		$row = mysqli_fetch_array($qur,MYSQLI_ASSOC);
		$count = mysqli_num_rows($qur);
		
		if($count>0){
			$sqlGetForm = "SELECT * FROM atlet WHERE id_psikolog = '".$row['id_psikolog']."' and status_verifikasi = '".$status."' ORDER BY nama ASC";
			$qurGetForm = mysqli_query($conn, $sqlGetForm);
			$rowsForm = array();

			if(mysqli_num_rows($qurGetForm) > 0){
				while($r = mysqli_fetch_assoc($qurGetForm)) {
			    	$rowsForm[] = $r;
				}
			}
		 	$json = array("status" => 1, "msg" => "Get list atlet success!", "data" => $rowsForm);
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