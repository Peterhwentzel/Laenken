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
    <div id="desktop-header" class="container">
        <header>
            <img src="images/logo.svg" class="image" />
            <span>Lænke-ambulatorierne<br />(Nordsjælland & Hovedstaden)</span>
        </header>
    </div>
	<?php
    $page = isset($_GET['page']) ? $_GET['page'] : "index";
    if(file_exists("pages/".$page.".php")) {
        include("pages/".$page.".php");
    }
    else {
        include("pages/index.php");
    }
    ?>
    <footer id="desktop-footer">
        <p><b>Kontakt</b></p>
        <div class="row">
            <div class="col-xs-4"><a href="tel:36775656" class="btn btn-default col-xs-12 btn-type1"><span class="glyphicon glyphicon-earphone"></span> 36775656</a></div>
            <div class="col-xs-4"><a href="mailto:lf@laenken.dk" class="btn btn-default col-xs-12 btn-type1"><span class="glyphicon glyphicon-envelope"></span> lf@laenken.dk</a></div>
            <div class="col-xs-4"><a href="http://www.laenken.dk" class="btn btn-default col-xs-12 btn-type1"><span class="glyphicon glyphicon-link"></span> Lænken</a></div>
        </div>
        
        <div class="text">
            <div class="col-xs-4">
                <p><b>Lænkens hovedside</b></p>
                <ul>
                    <li><a href="http://www.laenken.dk">www.laenken.dk</a></li>
                </ul>
            </div>
            <div class="col-xs-4">
                <p><b>Links til andre lokalforeninger/regioner</b></p>
                <ul>
                    <li><a href="http://laenken.dk/lokalforeninger/oversigten/herning-laenken/">Herning</a></li>
                    <li><a href="http://laenken.dk/lokalforeninger/oversigten/aabenraa-laenken/">Aabenraa</a></li>
                    <li><a href="http://laenken.dk/lokalforeninger/oversigten/graasten-laenken/">Gråsten</a></li>
                    <li><a href="http://laenken.dk/lokalforeninger/oversigten/soenderborg-laenken/">Sønderborg</a></li>
                    <li><a href="http://laenken.dk/lokalforeninger/oversigten/guderup-laenken/">Guderup</a></li>
                    <li><a href="http://laenken.dk/lokalforeninger/oversigten/maribo-laenken/">Maribo</a></li>
                </ul>
            </div>
            <div class="col-xs-4">
                <p><b>Links til øvrige relevante hjemmesider om emnet</b></p>
                <ul>
                    <li><a href="https://www.sundhed.dk/borger/sundhed-og-forebyggelse/livsstil/alkohol/">Sundhed.dk</a></li>
                    <li><a href="http://www.kk.dk/alkohol">Gratis alkoholbehandling i Københavns Kommune</a></li>
                    <li><a href="http://www.tjekdinealkoholvaner.dk/">Tjek dine alkohol vaner</a></li>
                </ul>
            </div>
        </div>
    </footer>
    <footer id="bottombar" data-show="false">
        <div id="bottombar-handle">
            <span>Kontakt</span>
        </div>
        <div id="bottombar-content">
            <ul>
                <li><a href="tel:36775656" class="btn btn-default col-xs-12 btn-type1"><span class="glyphicon glyphicon-earphone"></span> 36775656</a></li>
                <li><a href="mailto:lf@laenken.dk" class="btn btn-default col-xs-12 btn-type1"><span class="glyphicon glyphicon-envelope"></span> lf@laenken.dk</a></li>
                <li><a href="http://www.laenken.dk" class="btn btn-default col-xs-12 btn-type1"><span class="glyphicon glyphicon-link"></span> Lænken</a></li>
            </ul>
        </div>
    </footer>
    <style>
    #desktop-footer {
        border-top:1px solid #eb6751;
        margin-top:10px;
    }
    #desktop-footer p {
        text-align:center;
    }
    body {
        margin-bottom:40px;
        overflow-x:hidden;
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
            font-size:16px;
            line-height:30px;
            cursor:pointer;
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
            text-align:center;
            margin-top:2px;
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