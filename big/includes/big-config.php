<?php
/* portal-config.php Used to store all of our WEB120 configuration information */
//echo basename($_SERVER['PHP_SELF']);

define(THIS_PAGE, $_SERVER['PHP_SELF']);

switch(THIS_PAGE){
    case '/WEB120/big/bigindex.php':
        $title = "Welcome";
        $logo = 'fa fa-home';
        $pageID = "Home";
    break;

    case '/WEB120/big/flexbox.php':
        $title = "Flexbox";
        $logo = '';
        $pageID = "Flexbox";
    break;

    case '/WEB120/big/galleries.php':
        $title = "Galleries";
        $logo = '';
        $pageID = "Galleries";
    break;

    case '/WEB120/big/shoppingcarts.php':
        $title = "Shopping Carts";
        $logo = '';
        $pageID = "Shopping Carts";
    break;

    case '/WEB120/big/responsivevmobile.php':
        $title = "Responsive vs Mobile";
        $logo = '';
        $pageID = "Responsive vs Mobile";
    break;

    case '/WEB120/big/map.php': 
        $title = "Google Map";
        $logo = '';
        $pageID = "Google Map";
    break;

    case '/WEB120/big/calendar.php':
        $title = "Google Calendar";
        $logo = '';
        $pageID = "Google Calendar";
    break;

    case '/WEB120/big/youtube.php':
        $title = "Google YouTube Video";
        $logo = '';
        $pageID = "YouTube Video";
    break;

    default:
        $title = THIS_PAGE;
        $logo = 'fa-code';
        $pageID = "Coming Soon!";
}


$nav1['/WEB120/index.php'] = "WEB120 Portal";
$nav1['/WEB120/big/bigindex.php'] = "Welcome";
$nav1['/WEB120/big/flexbox.php'] = "Flexbox";
$nav1['/WEB120/big/galleries.php'] = "Galleries";
$nav1['/WEB120/big/shoppingcarts.php'] = "Shopping Carts";
$nav1['/WEB120/big/responsivevmobile.php'] = "Responsive vs Mobile";

function makeLinks($nav1){
    $myReturn = '';
    foreach($nav1 as $url => $text){
        if($url == THIS_PAGE){
            $myReturn .= "<li class=\"selected\"><a class=\"animsition-link\" href=\"$url\">$text</a></li>";
        }
        else{
            $myReturn .= "<li><a class=\"animsition-link\" href=\"$url\">$text</a></li>";
        }
    }
    return $myReturn;
}

$nav2['/WEB120/big/map.php'] = "Google Map";
$nav2['/WEB120/big/calendar.php'] = "Google Calendar";
$nav2['/WEB120/big/youtube.php'] = "YouTube Video";

function makeLinks2($nav2){
    $myReturn = '';
    foreach($nav2 as $url => $text){
        if($url == THIS_PAGE){
            $myReturn .= "<li class=\"selected\"><a class=\"animsition-link\" href=\"$url\">$text</a></li>";
            // function myfunction() {
            //     $class = document.getElementsById("mydropdown");
            //     if($myReturn == "<li class=\"selected\"><a class=\"animsition-link\" href=\"$url\">$text</a></li>"){
            //         $class.addClass(" selected");
            //     }
            //     else {
            //         $class = $class;
            //     }
            // }
        }
        else{
            $myReturn .= "<li><a class=\"animsition-link\" href=\"$url\">$text</a></li>";
        }
    }
    return $myReturn;
}

?>