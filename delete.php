<?php

    include_once 'config.php';

    $sql = "DELETE FROM users WHERE id=:id";

    $id = $_GET['id'];

    $sqlUsers = $conn->prepare($sql);
    $getUser->bindParam(":id", $id);
    $getUser->execute();

    header("Location:dashboard.php");