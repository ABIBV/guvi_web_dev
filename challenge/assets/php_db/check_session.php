<?php

    session_start();
    if(isset($_SESSION["user"])){
        echo "success";
    }else{
        echo "failed";
    }

?>