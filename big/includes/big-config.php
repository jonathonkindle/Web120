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

    default:
        $title = THIS_PAGE;
        $logo = 'fa-code';
        $pageID = "Coming Soon!";
}

$nav1['/WEB120/big/bigindex.php'] = "Welcome";
$nav1['/WEB120/big/flexbox.php'] = "Flexbox";
$nav1['/WEB120/big/galleries.php'] = "Galleries";
$nav1['/WEB120/big/shoppingcarts.php'] = "Shopping Carts";
$nav1['/WEB120/big/responsivevmobile.php'] = "Responsive vs Mobile";
$nav1['/WEB120/index.php'] = "WEB120 Portal";


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