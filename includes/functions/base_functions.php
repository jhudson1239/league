<?php
session_start();
require_once "db.inc.php";





function getAllPlayers(){
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    try{
        $conn = new PDO("mysql:host=$servername;dbname=league", $username, $password);
        global $conn;
    }catch(PDOException $e){
        echo "connection failed" . $e->getMessage;
    }

    // Prepare the statment
    $stmt = $conn->prepare("SELECT  * FROM players");
    // Execute the query
    $stmt->execute();
    //Fetch the resuts from the query and chose the format
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    //Return the results
    return $result;
}

?>