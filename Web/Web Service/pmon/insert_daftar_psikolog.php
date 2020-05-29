<?php

	// Include confi.php
	include_once('conf.php');

	if($_SERVER['REQUEST_METHOD'] == "POST"){
		
		// Get data
		$verifikasi = isset($_POST['verifikasi']) ? mysqli_real_escape_string($conn, $_POST['verifikasi']) : "";
		$id_psikolog = isset($_POST['id_psikolog']) ? mysqli_real_escape_string($conn, $_POST['id_psikolog']) : "";
		$nama = isset($_POST['nama']) ? mysqli_real_escape_string($conn, $_POST['nama']) : "";
		$jenis_kelamin = isset($_POST['jenis_kelamin']) ? mysqli_real_escape_string($conn, $_POST['jenis_kelamin']) : "";
		$tempat_lahir = isset($_POST['tempat_lahir']) ? mysqli_real_escape_string($conn, $_POST['tempat_lahir']) : "";
		$tanggal_lahir = isset($_POST['tanggal_lahir']) ? mysqli_real_escape_string($conn, $_POST['tanggal_lahir']) : "";
		$alamat = isset($_POST['alamat']) ? mysqli_real_escape_string($conn, $_POST['alamat']) : "";
		$no_telefon = isset($_POST['no_telefon']) ? mysqli_real_escape_string($conn, $_POST['no_telefon']) : "";
		$email = isset($_POST['email']) ? mysqli_real_escape_string($conn, $_POST['email']) : "";
		$password = isset($_POST['password']) ? mysqli_real_escape_string($conn, $_POST['password']) : "";
		$photo_profile = isset($_POST['photo_profile']) ? mysqli_real_escape_string($conn, $_POST['photo_profile']) : "";
    	$status_verifikasi = 0;

		// Insert data into data base
		$sql = "SELECT * FROM psikolog WHERE id_psikolog = '".$verifikasi."'";
		$qur = mysqli_query($conn, $sql);

		$row = mysqli_fetch_array($qur,MYSQLI_ASSOC);
		$count = mysqli_num_rows($qur);
		// echo $count;

		if($count>0){
			$sql = "UPDATE `psikolog` SET `id_psikolog` = '".$id_psikolog."', `nama` = '".$nama."', `jenis_kelamin` = '".$jenis_kelamin."', `tempat_lahir` = '".$tempat_lahir."', `tanggal_lahir` = '".$tanggal_lahir."', `alamat` = '".$alamat."', `no_telefon` = '".$no_telefon."', `email` = '".$email."', `password` = '".$password."', `photo_profile` = '".$photo_profile."', `status_verifikasi` = '".$status_verifikasi."' WHERE id_psikolog = '".$verifikasi."'";

			$qur = mysqli_query($conn, $sql);
			$row['id_psikolog'] = $id_psikolog;
			$row['nama'] = $nama;
			$row['jenis_kelamin'] = $jenis_kelamin;
			$row['tempat_lahir'] = $tempat_lahir;
			$row['tanggal_lahir'] = $tanggal_lahir;
			$row['alamat'] = $alamat;
			$row['no_telefon'] = $no_telefon;
			$row['email'] = $email;
			$row['password'] = $password;
			$row['photo_profile'] = $photo_profile;
			$row['status_verifikasi'] = $status_verifikasi;
		 	$json = array("status" => 1, "msg" => "success!", "data" => $row);
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