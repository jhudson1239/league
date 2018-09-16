<?php

$servername = "localhost";
$username = "root";
$password = "";

try{
    $conn = new PDO("mysql:host=$servername;dbname=league", $username, $password);
    global $conn;
}catch(PDOException $e){
    echo "connection failed" . $e->getMessage;
}

?>