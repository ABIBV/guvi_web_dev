<?php

    
   if(isset($_COOKIE["user"])){
       include 'db_conn.php';
       $sql = "update users set user_data = ? where username = ? ";
       $prepare_stmt = $conn->prepare($sql);
       $prepare_stmt->bind_param('ss',$jsonstr,$username);
      
       $jsonstr = json_encode($_POST["object"]);
       $username = $_POST["username"];

       if($prepare_stmt->execute()){
           echo "success";
       }else{
           echo "failed";
       }
       $prepare_stmt->close();
       $conn->close();

   }else{
       echo "cookie cleared";
   }
?>