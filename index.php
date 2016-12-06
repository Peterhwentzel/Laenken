<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
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
    <footer id="bottombar" data-show="false">
        <div id="bottombar-handle">
            <span>Kontakt</span>
        </div>
        <div id="bottombar-content">
            <ul>
                <li><a href="tel:39455544" class="btn btn-default col-xs-12"><span class="glyphicon glyphicon-earphone"></span> 39455544</a></li>
                <li><a href="mailto:amager@laenke-ambulatorierne.dk" class="btn btn-default col-xs-12"><span class="glyphicon glyphicon-envelope"></span> amager@laenke-ambulatorierne.dk</a></li>
                <li><a href="http://www.laenken.dk/laenkens-ambulatorier-og-raadgivninger" class="btn btn-default col-xs-12"><span class="glyphicon glyphicon-link"></span> ambulatorium</a></li>
            </ul>
        </div>
    </footer>
    <style>
    body {
        margin-bottom:40px;
    }
    #bottombar {
        position:fixed;
        bottom:0;
        background-color:#F5F5F5;
        width:100%;
        border-top: 2px solid #eb6751;
        transition:bottom 300ms;
    }
    #bottombar[data-show=false] {
        bottom:-103px!important;
    }
        #bottombar #bottombar-handle {
            width:100%;
            height:30px;
            text-align:center;
            font-size:25px;
            line-height:30px;
        }
        #bottombar #bottombar-content {
            width:100%;
        }
        #bottombar #bottombar-content ul {
            padding:0;
            margin:0;
            list-style:none;
        }
        #bottombar #bottombar-content ul li a {
            text-align:left;
        }
    </style>
    <script>
    $(function() {
        $("#bottombar-handle").on("click", function() {
            $("#bottombar").attr("data-show", !($("#bottombar").attr("data-show") == "true"));
        });
    });
    </script>
</body>
</html>