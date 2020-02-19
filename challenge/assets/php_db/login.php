<?php

include 'db_conn.php';

$qry = "select * from users where username = ? and password = ?";
$stmt = $conn->prepare($qry);
$stmt->bind_param('ss', $username, $password);

$username = $_POST["username"];
$password = $_POST["password"];

if($username != null && $password != null){
    $stmt->execute();
    $result = $stmt->get_result(); 
    if($result->num_rows == 1){
        session_start();
        $_SESSION["user"] = $username;
        echo "success";
    }else{
        echo "failed";
    }
}else{
    echo "failed";
}



?>