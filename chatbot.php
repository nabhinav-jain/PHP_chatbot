<?php

include('config.php');

if(isset($_GET['message'])){
    $message=$_GET['message'];
    header('Content-Type: application/json');

    $stmt=$conn->prepare('SELECT response FROM messages WHERE text= ? LIMIT 1');
    $stmt->bind_param('s',$message);

    if($stmt->execute()){
        $stmt->store_result();
        $stmt->bind_result($response_message);

        if($stmt->num_rows()==1){
            $stmt->fetch();
            $result=['response_message'=>$response_message];

            echo json_encode($result);


        }else{
            echo json_encode(['response_message'=>'Sorry What?']);
        }

    }else{
        echo json_encode(['response_message'=>'Sorry What?']);
    }





}



?>