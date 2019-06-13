<?php include 'big-config.php'?>
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
        <link rel="stylesheet" href="/WEB120/big/css/bignav.css" />
        <link rel="stylesheet" href="/WEB120/big/css/big.css" />
        <link rel="stylesheet" href="/WEB120/big/css/bigform.css" />
    </head>

    <body>
    <!-- START WRAPPER -->
        <div class="wrapper animsition">
            <header>
                <h1 align="center"><a href="/WEB120/big/bigindex.php"><i class="logo <?=$logo?>"></i>BIG</a></h1>
                <nav role="navigation">
                    <ul class="topnav" id="myTopnav">
                        <?=makeLinks($nav1)?>
                        <div class="dropdown" id="mydropdown">
                            <button class="dropbtn" id="mydropbtn"><i class="fa fa-chevron-down"></i> Google</button>
                            <div class="dropmenu">
                                <?=makeLinks2($nav2)?>
                            </div>
                        </div>
                        <li class="icon"> <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a> </li>
                    </ul>
                </nav>
            </header>