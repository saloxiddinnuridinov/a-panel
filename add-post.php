<?php
	require_once("config.php");
    define("SITE_URL", "http://a-panel.loc");
    if (isset($_POST["submit"])) {
        
        $title = $_POST["title"];
        $content = $_POST["content"];
        $photo = $_FILES["photo"];
        $name = $_POST["name"];
        $dir = "file/";
        $dir .= time()."_".basename($_FILES["photo" ]["name"]);

        move_uploaded_file($_FILES["photo" ]["name"], $dir);
    
        $sql = "INSERT INTO `post_db` (`title`, `content`, `photo`, `user_name`) VALUES ('$title', '$content','$dir','$name')";
        $result = $connection -> query($sql);

        if(!$result){
            echo $connection->error; 
            die();
        }
        header("Location: posts.php");
    }
?>