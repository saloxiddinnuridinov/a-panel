<?php
session_start();

if(!$_SESSION["login"]){
    unset($_SESSION["login"]);
    unset($_SESSION["name"]);
    unset($_SESSION["email"]);
    session_destroy();
    header("Location: index.php");
}
?>