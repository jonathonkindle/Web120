<?php
/* portal-config.php Used to store all of our WEB120 configuration information */
//echo basename($_SERVER['PHP_SELF']);

define(THIS_PAGE, basename($_SERVER['PHP_SELF']));

switch(THIS_PAGE){
    case 'index.php':
        $title = "Jonathon's Web120 portal";
        $logo = 'fa-home';
        $pageID = "Welcome";
    break;

    case 'contactme.php':
        $title = "Jonathon's contact page";
        $logo = 'fa-pen-square';
        $pageID = "Contact Jonathon";
    break;

    default:
        $title = THIS_PAGE;
        $logo = 'fa-code';
        $pageID = "Let's code!";
}

$nav1['/WEB120/index.php'] = "Welcome";
$nav1['/WEB120/big/index.php'] = "Big";
$nav1['/WEB120/aia.php'] = "AIA";
$nav1['/WEB120/flowchart.php'] = "Flowchart";
$nav1['/WEB120/fp/index.php'] = "Final Project";
$nav1['/WEB120/contactme.php'] = "Contact Jonathon";

function makeLinks($nav1){
    $myReturn = '';
    foreach($nav1 as $url => $text){
        if($url == THIS_PAGE){
            $myReturn .= "<li><a class=\"selected\" href=\"$url\">$text</a></li>";
        }
        else{
            $myReturn .= "<li><a href=\"$url\">$text</a></li>";
        }
    }
    return $myReturn;
}

?>