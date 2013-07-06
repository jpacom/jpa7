<?php

    $url = explode('?', $_SERVER['REQUEST_URI']);
    $url = $url[0];
    $inc = $_SERVER['DOCUMENT_ROOT'] . '/inc/';
	$servername = explode('.', $_SERVER['SERVER_NAME']);
	$lc = ($servername[0] == 'jpa7') ? False : $servername[0];
	
	if ($lc === False)
	{
		$lc = 'fa';
		$newURL = Array('http://', $lc, '.', $_SERVER['SERVER_NAME'], $url);
		$newURL = join('', $newURL);
		header('Location: ' . $newURL);
		die("You're being redirected here: " . $newURL);
	}
	
    $staticPages = array('/asdf', '/qwer', '/about', '/contact');    
    ob_start();

    // Page start
    require_once $inc . "/template/page-start.inc.php";
    require_once $inc . "/template/" . $lc . "/language-bar.inc.php";

    // Body
    if($url == '/') // Home Page
    {
        require_once $inc . "/template/" . $lc . "/header.inc.php";
        require_once $inc . "/template/" . $lc . "/banner.inc.php";
        require_once $inc . "/template/" . $lc . "/main.inc.php";
        require_once $inc . "/template/" . $lc . "/who-are-our-customers.inc.php";
        require_once $inc . "/template/" . $lc . "/what-our-customers-say-about-us.inc.php";
        require_once $inc . "/template/" . $lc . "/our-latest-projects.inc.php";
        require_once $inc . "/template/" . $lc . "/what-can-you-do.inc.php";
        require_once $inc . "/template/" . $lc . "/footer.inc.php";
    }
    else if(in_array($url, $staticPages))
    {
        require_once $inc . "/template/" . $lc . "/header.inc.php";
        require_once $inc . "/staticContent/" . $lc . $url . ".inc.php"; 
        require_once $inc . "/template/" . $lc . "/footer.inc.php";
    }
    else
    {
        header("HTTP/1.0 404 Not Found", true, 404);
        require_once $inc . "/template/" . $lc . "/404.inc.php";
    }

    // Page end
    require_once $inc . "/template/page-end.inc.php";
    
    ob_end_flush();

?>
