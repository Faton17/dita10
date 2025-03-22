<?php

$user = "root";
$pass = "";
$server ="localhost";
$dbname = "db1";

try{

    $conn = new PDO("mysql:host=$server;dbname=$dbname", $user, $pass);

}catch(Expection $e){
    echo "Error: " . $e->getMessage();
}