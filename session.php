<?php
    session_start();
    if($_SESSION["email"] == true){
        header("Location: edit.php");
    }
?>
