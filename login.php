<?php
require_once("config.php"); 

    if (isset($_POST["ok"]) && isset($_POST["email"]) && isset($_POST["password"])) {
        $check = $_POST["check"];
        $email = $_POST["email"];
        $password = $_POST["password"];

        if(!validateEmail($email) || !validatePassword($password)){
            header("Location: index.php");
            die(); 
        }

        $sql = "SELECT * FROM `user_db` WHERE `password` = '$password' AND `email` = '$email'";
        $result = $connection->query($sql);

        if(!$result){
            echo $connection->error; 
            die();
        }
        if (mysqli_num_rows($result) >= 1) {

            $row = $result->fetch_assoc();

            setcookie("email", "$email", time() + 86400*30, "/");
            
            $_SESSION["email"] = $email;
            $_SESSION["name"] = $row["name"];
            $_SESSION["login"] = true;
            $_SESSION["password"] = $password;
            if (($_POST["email"] == $_SESSION["email"]) && ($_POST["password"] == $_SESSION["password"])) {
                header("Location: posts.php");
            }
           
        }else{
            header("Location: index.php");
            die();
        }
        
    }
?>