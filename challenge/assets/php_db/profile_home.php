<?php
    session_start();
 
    if(isset($_SESSION["user"])){
        $uname = $_SESSION["user"];
        include 'db_conn.php';
        $qry = "select * from users where username = ? ;";
        $stmt = $conn->prepare($qry);
        $stmt->bind_param('s', $uname);
        $stmt->execute();
        $result = $stmt->get_result();

        if($result->num_rows == 1){
            while($row = $result->fetch_assoc()){
                echo $uname."**sep**".$row["user_data"];
            }
        }
    }else{
        echo "failed";
        exit;
    }
?>