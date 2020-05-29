<?php
	include 'conf.php';
	include 'push_notification.php';

	if($_SERVER['REQUEST_METHOD'] == "POST"){

		$id_psikolog = isset($_POST['id_psikolog']) ? mysqli_real_escape_string($conn, $_POST['id_psikolog']) : "";
		$sql = "SELECT * FROM atlet WHERE id_psikolog = '".$id_psikolog."'";
		$qur = mysqli_query($conn, $sql);
		$rows = array();
		if(mysqli_num_rows($qur) > 0){
			while($r = mysqli_fetch_assoc($qur)) {
			    $rows[] = $r;
			}
			$json = array("status" => 1, "msg" => "List success", "data" => $rows);
		}
	else{
		 	$json = array("status" => 0, "msg" => "Id psikolog is incorrect", 	"data" => array());
		}
	}else{
	 	$json = array("status" => 0, "msg" => "Request method not accepted", "data" => array());
	}

		header('Content-type: application/json');
	echo json_encode($json);