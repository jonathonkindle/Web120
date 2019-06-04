<?php include 'portal-config.php'?>
<!DOCTYPE html>
<html lang='en'>
    <head>
        <title><?=$title?></title>
        <meta name="viewport" content="width=device-width" />
        <meta name="robots" content="noindex,nofollow" />
        <meta charset="utf-8">
        <script src="https://use.fontawesome.com/6a71565c22.js"></script>
        <link rel="stylesheet" href="/web120/css/nav.css" />
        <link rel="stylesheet" href="/web120/css/portal.css" />
        <link rel="stylesheet" href="/web120/css/form.css" />
    </head>

    <body>
    <!-- START WRAPPER -->
        <div class="wrapper">
            <header>
                <h1><a href="/WEB120/index.php"><i class="logo fa <?=$logo?>"></i> Jonathon Kindle's SCC WEB120 Portal</a></h1>
                <nav>
                    <ul class="topnav" id="myTopnav">
                        <?=makeLinks($nav1)?>
                        <!-- <li><a href="/web120/index.php" class="selected">Welcome</a></li>
                        <li><a href="/web120/big/index.php">Big</a></li>
                        <li><a href="/web120/aia.php">AIA</a></li>
                        <li><a href="/web120/flowchart.php">Flowchart</a></li>
                        <li><a href="/web120/fp/index.php">Final Project</a></li>
                        <li><a href="/web120/contactme.php">Contact Jonathon</a></li> -->
                        <li class="icon"> <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a> </li>
                    </ul>
                </nav>
            </header>
                
            <!-- START LEFT COL -->
            <section>
                <h2 class="pageID"><?=$pageID?></h2>