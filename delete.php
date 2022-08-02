<?php
	require_once("config.php");

	$id = $_GET["id"];
    $sql = "SELECT * FROM `post_db` WHERE `id` = '$id'";
    $result = $connection->query($sql);

		if(!$result){
			echo $connection->error; 
		}

	if (mysqli_num_rows($result) >= 1 ) {
    	$sql = "DELETE  FROM `post_db` WHERE `id` = '$id'";
    	$result  = $connection->query($sql);
    	if(!$result){
			echo $connection->error; 
			die();
		}else{
		header("Location: posts.php");
		}

    }
  	else{
  	    header("Location: posts.php");
    }

?>