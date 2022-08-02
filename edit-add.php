<?php
    require "config.php";
    if (isset($_POST["submit"])) {
        $id = $_POST["id"];
        $title = $_POST["title"];
        $content = $_POST["content"];
        $photo = $_POST["photo"];
        $name = $_POST["name"];
    		
        $sql ="UPDATE `post_db` SET `title` = '$title', `content` = '$content', `photo` = '$photo', `user_name` = '$name' WHERE `post_db`.`id` = '$id'";
        $result = $connection->query($sql);
        if (!$result) {
            echo $connection->error;
            die();
        }
    }
    header("Location: posts.php");  
?> 