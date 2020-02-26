<?php
   
    include 'db_conn.php';
    $uname = $_COOKIE["user"];
    
    if(isset($uname)){
        $qry = "select * from users where username = ? ;";
        $stmt = $conn->prepare($qry);
        $stmt->bind_param('s', $uname);
        $stmt->execute();
        $result = $stmt->get_result();

        if($result->num_rows == 1){
            while($row = $result->fetch_assoc()){
                $auth = $row["auth"];
                if($auth==1){
                    echo $uname."**sep**".$row["user_data"];
                }else{
                    echo "failed";
                }
            }
        }else{
            echo "failed";
            exit;
        }
    }else{
        echo "failed";
    }

    $stmt->close();
    $conn->close();
?>