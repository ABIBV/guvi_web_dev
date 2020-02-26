<?php

include 'db_conn.php';

$username = $_POST["username"];
$password = $_POST["password"];

$qry = "select * from users where username = ? and password = ?";
$stmt = $conn->prepare($qry);
$stmt->bind_param('ss', $username, $password);

$authstatus = 1;
$authqry = "update users set auth = ? where username = ?";
$authstmt = $conn->prepare($authqry);
$authstmt->bind_param('is',$authstatus,$username);


if($username != NULL && $password !=NULL){
    if($stmt->execute()){
        $result = $stmt->get_result();
        if($authstmt->execute()){           
            while($row = $result->fetch_assoc()){
                $cookie_name = "user";
                $cookie_value = $username;
                $day_in_sec = 86400;
                setcookie($cookie_name,$cookie_value,time()+$day_in_sec,"/");
                echo "success";
            }
        }else{
            echo "failed";
        }
    }else{
        echo "failed";
    }
}else{
    echo "failed";
}



?>