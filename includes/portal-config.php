<?php
/* portal-config.php Used to store all of our WEB120 configuration information */
//echo basename($_SERVER['PHP_SELF']);

define(THIS_PAGE, $_SERVER['PHP_SELF']);

switch(THIS_PAGE){
    case '/WEB120/index.php':
        $title = "Jonathon's Web120 portal";
        $logo = 'fa-home';
        $pageID = "Welcome";
    break;

    case '/WEB120/contactme.php':
        $title = "Jonathon's contact page";
        $logo = 'fa-pen-square';
        $pageID = "Contact Jonathon";
    break;

    case '/WEB120/big/bigindex.php':
        $title = "BIG";
        $logo = 'fa-pen-square';
        $pageID = "BIG";
    break;

    case '/WEB120/fp/fpindex.php':
        $title = "Jonathon's Final Project";
        $logo = 'fa-pen-square';
        $pageID = "Final Project";
    break;

    case '/WEB120/aia.php':
        $title = "Audience, Issues, and Approach";
        $logo = 'fa-pen-square';
        $pageID = "AIA";
    break;

    default:
        $title = THIS_PAGE;
        $logo = 'fa-code';
        $pageID = "Let's code!";
}

$nav1['/WEB120/index.php'] = "Welcome";
$nav1['/WEB120/big/bigindex.php'] = "Big";
$nav1['/WEB120/aia.php'] = "AIA";
$nav1['/WEB120/flowchart.php'] = "Flowchart";
$nav1['/WEB120/fp/fpindex.php'] = "Final Project";
$nav1['/WEB120/contactme.php'] = "Contact Jonathon";

function makeLinks($nav1){
    $myReturn = '';
    foreach($nav1 as $url => $text){
        if($url == THIS_PAGE){
            $myReturn .= "<li><a class=\"selected animsition-link\" href=\"$url\">$text</a></li>";
        }
        else{
            $myReturn .= "<li><a class=\"animsition-link\" href=\"$url\">$text</a></li>";
        }
    }
    return $myReturn;
}

?>