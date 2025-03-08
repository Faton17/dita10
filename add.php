<?php

    include_once 'config.php';


    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];

    if (isset($_POST['submit'])){

        $sql = "INSERT INTO users(name, username, email) VALUE (:name, :username, :email)";

        $sqlQuery = $conn->prepare($sql);

    

        $sqlQuery->bindParam(":name", $name);
        $sqlQuery->bindParam(":username", $surname);
        $sqlQuery->bindParam(":email", $email);

        $sqlQuery->execute();

        echo "Data saved successfully! <br>";


    }

