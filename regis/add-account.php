<?php
require_once("../config.php");
    $email = $_POST["email"];
    $password = $_POST["password"];
    $name = $_POST["name"];

    $sql = "INSERT INTO `user_db` (`email`, `password`, `name`) 
    VALUES ('$email', '$password','$name')";
    $result = $connection -> query($sql);


    if(!$result){
		echo $connection->error; 
		die();
    }
    header("Location: ../index.php");
?>