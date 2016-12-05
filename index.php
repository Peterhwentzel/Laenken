<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/bootstrap-theme.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <script src="js/jQuery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/fastclick.js"></script>
    <script src="js/app.js"></script>
    <title>Lænken</title>
</head>
<body>
	<?php
    $page = isset($_GET['page']) ? $_GET['page'] : "index";
    if(file_exists("pages/".$page.".php")) {
        include("pages/".$page.".php");
    }
    else {
        include("pages/index.php");
    }
    ?>
</body>
</html>