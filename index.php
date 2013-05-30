<?php

    $url = explode('?', $_SERVER['REQUEST_URI']);
    $url = $url[0];
    $inc = $_SERVER['DOCUMENT_ROOT'] . '/inc/';
    
    $staticPages = array('/asdf', '/qwer');
    
    ob_start();

    // Page start
    require_once $inc . "/template/page-start.inc.php";
    require_once $inc . "/template/language-bar.inc.php";

    // Body
    if($url == '/') // Home Page
    {
        require_once $inc . "/template/header.inc.php";
        require_once $inc . "/template/banner.inc.php";
        require_once $inc . "/template/main.inc.php";
        require_once $inc . "/template/who-are-our-customers.inc.php";
        require_once $inc . "/template/what-our-customers-say-about-us.inc.php";
        require_once $inc . "/template/our-latest-projects.inc.php";
        require_once $inc . "/template/what-can-you-do.inc.php";
        require_once $inc . "/template/footer.inc.php";
    }
    else if(in_array($url, $staticPages))
    {
        require_once $inc . "/template/header.inc.php";
        require_once $inc . "/staticContent" . $url . ".inc.php"; 
        require_once $inc . "/template/footer.inc.php";
    }
    else
    {
        header("HTTP/1.0 404 Not Found", true, 404);
        require_once $inc . "/template/404.inc.php";
    }

    // Page end
    require_once $inc . "/template/page-end.inc.php";
    
    ob_end_flush();

?>
