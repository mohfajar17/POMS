<?php
 
    include_once('conf.php');

    if($_SERVER['REQUEST_METHOD'] == "GET"){
        // Get data
    
        // Insert data into data base
        $sql = "SELECT * FROM info ORDER BY id DESC";
        $qur = mysqli_query($conn, $sql);

        // $row = mysqli_fetch_array($qur,MYSQLI_ASSOC);
        $count = mysqli_num_rows($qur);
        
        if($count>0){
            $rows = array();
            while($r = mysqli_fetch_assoc($qur)) {
                $rows[] = $r;
            }
            $json = array("status" => 1, "msg" => "Load data success!","data"=>$rows);
        }else{
            $json = array("status" => 0, "msg" => "No data found!");
        }
    }else{
        $json = array("status" => 0, "msg" => "Request method not accepted");
    }
    echo json_encode($json);
    
?>