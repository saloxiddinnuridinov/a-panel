<?php
    const DB_NAME = "admin";
    const DB_USER = "root";
    const DB_PASS = ""; 

    global $connection; 

    $connection = new mysqli('localhost', DB_USER, DB_PASS, DB_NAME);

    if($connection->connect_error){
        echo "Serverda xatolik";
        die(); //dasturni shu yerda to'xtatadi
    }
    
    require_once "functions.php";
    session_start();
?>