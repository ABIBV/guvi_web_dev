<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "test";

$conn = new mysqli($server, $username, $password, $dbname);

if(!$conn){
    echo "<p>connection error".myaqli_connect_error."</p>";
    die("Failed to Connect : ".mysqli_connect_error);
  
}

?>