<?php

$user = "root";
$pass = "";
$server ="localhost";
$dbname = "dita 7";

try{

    $conn = new PDO("mysql:host=$server;dbname=$dbname", $user, $pass);

}catch(Expection $e){
    echo "Error: " . $e->getMessage();
}