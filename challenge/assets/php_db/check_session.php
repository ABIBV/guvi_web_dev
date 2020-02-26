<?php

    // session_start();
    // if(isset($_SESSION["user"])){
    //     echo "success";
    // }else{
    //     echo "failed";
    // }
    include 'db_conn.php';
    
if(isset($_COOKIE["user"])){
    $user = $_COOKIE["user"];
    $qry = "select auth from users where username = ?";
    $preparestmt = $conn->prepare($qry);
    $preparestmt->bind_param('s',$user);
    if($preparestmt->execute()){
        $result = $preparestmt->get_result(); 
        // session_start();
        // $_SESSION["user"] = $username;
        while($row = $result->fetch_assoc()){
            if($row["auth"]==1){
                echo "success";
            }else{
                echo "failed";
            }
        }
    }else{
        echo "failed";
    }
}else{
    echo "failed";
}

$preparestmt->close();

$conn->close();

?>