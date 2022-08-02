<?php
	require_once("config.php");
	$id = $_GET["id"];
	    
    $sql = "SELECT * FROM `post_db` WHERE `id` = '$id'";
    $result = $connection->query($sql);
		if(!$result){
			echo $connection->error; 
			die();
		}
	if (mysqli_num_rows($result) == 0 ) {
		header("Location: posts.php");
	}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?=$_SESSION["name"]?> Edit a post</title>
    <!-- ================= Favicon ================== -->
    <!-- Standard -->
    <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
    <!-- Retina iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
    <!-- Retina iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
    <!-- Standard iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
    <!-- Standard iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">
    <!-- Styles -->
    <link href="assets/css/lib/calendar2/pignose.calendar.min.css" rel="stylesheet">
    <link href="assets/css/lib/chartist/chartist.min.css" rel="stylesheet">
    <link href="assets/css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/lib/themify-icons.css" rel="stylesheet">
    <link href="assets/css/lib/owl.carousel.min.css" rel="stylesheet" />
    <link href="assets/css/lib/owl.theme.default.min.css" rel="stylesheet" />
    <link href="assets/css/lib/weather-icons.css" rel="stylesheet" />
    <link href="assets/css/lib/menubar/sidebar.css" rel="stylesheet">
    <link href="assets/css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/lib/helper.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

<?php
require_once "inc/sidebar.php";
require_once "inc/header.php";
?>
    <!-- /# sidebar -->
    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="page-title">
                    <h1>Hello,</h1><span>Welcome! Please post</span>
                </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-title">
                                    <h4>Edit basic Elements</h4>
                                </div>
                                <div class="card-body">
                                    <div class="basic-elements">
                                    <?php
                                    $row = $result->fetch_assoc();
                                    $title_edit = $row["title"];
                                    $content_edit = $row["content"];
                                    $photo_edit = $row["photo"];
                                    $name_edit = $row["user_name"];
                                    ?>	
                                        <form method="post" action="edit-add.php">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                <div class="form-group">
                                                        <label>ID</label>
                                                        <input readonly  value="<?=$id?>" type="text" class="form-control" name="id">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Title</label>
                                                        <input value="<?=$title_edit?>" type="text" class="form-control" name="title">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Content</label>
                                                        <textarea  class="form-control" rows="3"  name="content"><?=$content_edit?></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Photo</label>
                                                        <input value="<?=$photo_edit?>" class="form-control" type="text" name="photo">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Name</label>
                                                        <input value="<?=$name_edit?>" class="form-control" type="taxt"  name="name">
                                                    </div>
                                                    <div>
                                                        <input  type="submit"class="btn btn-primary btn-flat btn-addon m-b-10 m-l-5" value="OK" name="submit">
                                                    </div>
                                                </div>                
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>

    <!-- jquery vendor -->
    <script src="assets/js/lib/jquery.min.js"></script>
    <script src="assets/js/lib/jquery.nanoscroller.min.js"></script>
    <!-- nano scroller -->
    <script src="assets/js/lib/menubar/sidebar.js"></script>
    <script src="assets/js/lib/preloader/pace.min.js"></script>
    <!-- sidebar -->

    <script src="assets/js/lib/bootstrap.min.js"></script>
    <script src="assets/js/scripts.js"></script>
    <!-- bootstrap -->

    <script src="assets/js/lib/calendar-2/moment.latest.min.js"></script>
    <script src="assets/js/lib/calendar-2/pignose.calendar.min.js"></script>
    <script src="assets/js/lib/calendar-2/pignose.init.js"></script>


    <script src="assets/js/lib/weather/jquery.simpleWeather.min.js"></script>
    <script src="assets/js/lib/weather/weather-init.js"></script>
    <script src="assets/js/lib/circle-progress/circle-progress.min.js"></script>
    <script src="assets/js/lib/circle-progress/circle-progress-init.js"></script>
    <script src="assets/js/lib/chartist/chartist.min.js"></script>
    <script src="assets/js/lib/sparklinechart/jquery.sparkline.min.js"></script>
    <script src="assets/js/lib/sparklinechart/sparkline.init.js"></script>
    <script src="assets/js/lib/owl-carousel/owl.carousel.min.js"></script>
    <script src="assets/js/lib/owl-carousel/owl.carousel-init.js"></script>
    <!-- scripit init-->
    <script src="assets/js/dashboard2.js"></script>
</body>

</html>