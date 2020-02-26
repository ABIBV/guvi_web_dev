<?php
    // session_start();
    // session_destroy();
    include 'db_conn.php';

    $cookie_name = "user";
    $username = $_COOKIE[$cookie_name];
    $authstatus = 0;
    $authqry = "update users set auth = ? where username = ?";
    $authstmt = $conn->prepare($authqry);
    $authstmt->bind_param('is',$authstatus,$username);
    if($authstmt->execute()){
        
        unset($_COOKIE[$cookie_name]);
        setcookie($cookie_name,'', time() - 3600);
        echo "success";
    
    }else{
        echo "failed";
    }
    $authstmt->close();
    $conn->close();
    exit();
?>