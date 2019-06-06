<?php include 'portal-config.php'?>
<!DOCTYPE html>
<html lang='en'>
    <head>
        <title><?=$title?></title>
        <meta name="viewport" content="width=device-width" />
        <meta name="robots" content="noindex,nofollow" />
        <meta charset="utf-8">
        <script src="https://use.fontawesome.com/6a71565c22.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <link rel="stylesheet" href="/WEB120/animsition-master/dist/css/animsition.min.css">
        <script src="/WEB120/animsition-master/dist/js/animsition.min.js"></script>
        <link rel="stylesheet" href="/WEB120/css/nav.css" />
        <link rel="stylesheet" href="/WEB120/css/portal.css" />
        <link rel="stylesheet" href="/WEB120/css/form.css" />
    </head>

    <body>
    <!-- START WRAPPER -->
        <div class="wrapper animsition">
            <header>
                <h1><a href="/WEB120/index.php"><i class="logo fa <?=$logo?>"></i> Jonathon Kindle's SCC WEB120 Portal</a></h1>
                <nav>
                    <ul class="topnav" id="myTopnav">
                        <?=makeLinks($nav1)?>
                        <li class="icon"> <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a> </li>
                    </ul>
                </nav>
            </header>