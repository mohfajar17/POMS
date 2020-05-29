<?php
 
    include_once('conf.php');

    $id_atlet = $_POST['id_atlet'];
    $id_psikolog = $_POST['id_psikolog'];
    $password = $_POST['password'];
    $status_verifikasi = 1;
    $intensitas_target = 60;
    $label = 100;
    
    header('Content-Type: text/xml');
 
    $query = "INSERT INTO atlet (id_atlet, id_psikolog, nama, cabang_olahraga, jenis_kelamin, tempat_lahir, tanggal_lahir, alamat, kota_asal, no_telefon, email, password, token, photo_profile, intensitas_target, label, status_verifikasi) values ('$id_atlet', '$id_psikolog', '', '', '', '', '', '', '', '', '', '$password', '', '', '$intensitas_target', '$label', '$status_verifikasi')";
    $hasil = mysqli_query($conn,$query);
 
    if($hasil) {
        $json = array("status" => 1, "msg" => "Done User added!");

        // echoing JSON response
        echo json_encode($json);
    } else {
        $json = array("status" => 0, "msg" => "Error adding user!");
 
        // echoing JSON response
        echo json_encode($json);
    }
 
?>