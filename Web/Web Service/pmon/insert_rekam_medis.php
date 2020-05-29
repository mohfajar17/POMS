<?php
 
    include_once('conf.php');

    date_default_timezone_set("Asia/Jakarta");

    $idForm = $_POST['id_form'];
    $idAtlet = $_POST['id_atlet'];
    $idPsikolog = $_POST['id_psikolog'];
    $nama = $_POST['nama'];
    $cabangOlahraga = $_POST['cabang_olahraga'];
    $waktuInput = date("Y-m-d");
    $sesiLatihan = $_POST['sesi_latihan'];
    $catatanFisik = $_POST['catatan_fisik'];
    $kendalaMentalSkill = $_POST['kendala_mental_skill'];
    $halPositif = $_POST['hal_positif'];
    $catatanPsikolog = $_POST['catatan_psikolog'];
    $statusTanggapan = 1;

    header('Content-Type: text/xml');
 
    $query = "INSERT INTO rekam_medis (id_form, id_atlet, id_psikolog, nama, cabang_olahraga, waktu_input, sesi_latihan, catatan_fisik, kendala_mental_skill, hal_positif, catatan_psikolog, status_read) values ('$idForm', '$idAtlet', '$idPsikolog','$nama', '$cabangOlahraga', '$waktuInput', '$sesiLatihan', '$catatanFisik', '$kendalaMentalSkill', '$halPositif', '$catatanPsikolog', '$statusTanggapan')";
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