<?php
/* portal-config.php Used to store all of our WEB120 configuration information */
//echo basename($_SERVER['PHP_SELF']);

define(THIS_PAGE, $_SERVER['PHP_SELF']);

switch(THIS_PAGE){
    case '/WEB120/fp/fpindex.php':
        $title = "Second Chance Cycles";
        $logo = 'fa-home';
        $pageID = "Welcome";
    break;

    case '/WEB120/fp/products.php':
        $title = "Products";
        $logo = 'fa-pen-square';
        $pageID = "SCC Products";
    break;

    case '/WEB120/fp/services.php':
        $title = "Services";
        $logo = 'fa-pen-square';
        $pageID = "SCC Services";
    break;

    case '/WEB120/fp/contactme.php':
        $title = "Contact SCC";
        $logo = 'fa-pen-square';
        $pageID = "Contact SCC";
    break;

    default:
        $title = THIS_PAGE;
        $logo = 'fa-code';
        $pageID = "Coming Soon!";
}

$nav1['/WEB120/fp/fpindex.php'] = "Welcome";
$nav1['/WEB120/fp/products.php'] = "Products";
$nav1['/WEB120/fp/services.php'] = "Services";
$nav1['/WEB120/fp/contactme.php'] = "Contact SCC";
$nav1['/WEB120/index.php'] = "Return to Jonathon's Portal Page";


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