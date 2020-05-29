<?php

    include_once('conf.php');

    date_default_timezone_set("Asia/Jakarta");

    $idAtlet = $_POST['id_atlet'];
    $idPsikolog = $_POST['id_psikolog'];
    $nama = "";
    $cabangOlahraga = "";
    $waktu = date("Y-m-d");
    $sesiLathan = $_POST['sesi_latihan'];
    $antusiasmePreLatihan = $_POST['antusiasme_pre_latih'];
    $antusiasmePosLatihan = $_POST['antusiasme_pos_latih'];
    $fisik = $_POST['fisik'];
    $catatanFisik = $_POST['catatan_fisik'];
    $stres = $_POST['stres'];
    $konsentrasi = $_POST['konsentrasi'];
    $keyakinan = $_POST['keyakinan'];
    $target = $_POST['target'];
    $lelah = $_POST['lelah'];
    $komunikasi = $_POST['komunikasi'];
    $intensitas = $_POST['intensitas'];
    $hidrasi = $_POST['hidrasi'];
    $tidur = $_POST['tidur'];
    $nutrisi = $_POST['nutrisi'];
    $recovery = $_POST['recovery'];
    $recoveryLain = $_POST['recovery_lain'];
    $mentalSkill = $_POST['mental_skill'];
    $mentalSkillLain = $_POST['mental_skill_lain'];
    $kendalaMentalSkill = $_POST['kendala_mental_skill'];
    $saranMasalah = $_POST['saran_masalah'];
    $saranMasalahLain = $_POST['saran_masalah_lain'];
    $halPositif = $_POST['hal_positif'];
    $scoringMental = $_POST['scoring_mental'];
    $scoringFisik = $_POST['scoring_fisik'];
    $intensitasTarget = $_POST['intensitas_target'];
    $status = 1;
    
    header('Content-Type: text/xml');

    $sqlGetNama = "SELECT nama, cabang_olahraga FROM atlet WHERE id_atlet = ".$idAtlet."";
    $result = mysqli_query($conn, $sqlGetNama);
   
    if ($result !== false) {
        $value = mysqli_fetch_assoc($result);
        $nama = $value['nama'];
        $cabangOlahraga = $value['cabang_olahraga'];
    }

    $query = "INSERT INTO form (id_atlet, id_psikolog, nama, cabang_olahraga, waktu_input, sesi_latihan, antusiasme_pre_latih, antusiasme_pos_latih, fisik, catatan_fisik, stres, konsentrasi, keyakinan, target, lelah, komunikasi, intensitas, hidrasi, tidur, nutrisi, recovery, recovery_lain, mental_skill, mental_skill_lain, kendala_mental_skill, saran_masalah, saran_masalah_lain, hal_positif, scoring_mental, scoring_fisik, intensitas_target, status) values ('$idAtlet', '$idPsikolog','$nama', '$cabangOlahraga', '$waktu', '$sesiLathan', '$antusiasmePreLatihan', '$antusiasmePosLatihan', '$fisik', '$catatanFisik', '$stres', '$konsentrasi', '$keyakinan', '$target', '$lelah', '$komunikasi', '$intensitas', '$hidrasi', '$tidur', '$nutrisi', '$recovery', '$recoveryLain', '$mentalSkill', '$mentalSkillLain', '$kendalaMentalSkill', '$saranMasalah', '$saranMasalahLain', '$halPositif', '$scoringMental', '$scoringFisik', '$intensitasTarget', '$status')";

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