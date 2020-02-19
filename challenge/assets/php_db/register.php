<?php
include 'db_conn.php';

$sql = "insert into users (username, password, user_data) values(?,?,'{}')";
$prepare_stmt = $conn->prepare($sql);
$prepare_stmt->bind_param('ss',$uname,$pwd);

$uname = $_POST["username"];
$pwd = $_POST["password"];

if($uname!=null && $pwd != null){
    if($prepare_stmt->execute()){
        echo "success";
    }else{
        echo "failed";
    }
}else{
    echo "failed";
}

$prepare_stmt->close();

$conn->close();

?>