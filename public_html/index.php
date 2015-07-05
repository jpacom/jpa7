<?php
	
	function showBody()
	{
		global $inc, $lc, $url, $basedomain;
		
		// Home
	    if($url == '/') // Home Page
	    {
	        require_once $inc . "/template/" . $lc . "/header.inc.php";
	        require_once $inc . "/template/" . $lc . "/banner.inc.php";
	        require_once $inc . "/template/" . $lc . "/main.inc.php";
	        require_once $inc . "/template/" . $lc . "/who-are-our-customers.inc.php";
	        require_once $inc . "/template/" . $lc . "/what-our-customers-say-about-us.inc.php";
	        // require_once $inc . "/template/" . $lc . "/our-latest-projects.inc.php";
	        require_once $inc . "/template/" . $lc . "/what-can-you-do.inc.php";
	        require_once $inc . "/template/" . $lc . "/footer.inc.php";
			
			return;
	    }
		
		// Other pages
	    if(file_exists($inc . "/staticContent/" . $lc . $url . ".inc.php"))
	    {
	        require_once $inc . "/template/" . $lc . "/header.inc.php";
	        require_once $inc . "/staticContent/" . $lc . $url . ".inc.php"; 
	        require_once $inc . "/template/" . $lc . "/footer.inc.php";
			
			return;
	    }
	    
		$underconstruction = array(
								   '/services',
								   '/portfolio',
								   '/customers',
								   '/about',
								   '/contact',
								   '/services',
								   "/services/network-management",
								   "/services/network-management/network-servers",
								   "/services/network-management/network-os",
								   "/services/network-management/clustering",
								   "/services/network-management/internet-sharing",
								   "/services/network-management/virtualization",
								   "/services/network-management/voip",
								   "/services/network-management/security-policies",
								   "/services/network-security",
								   "/services/network-security/vpn",
								   "/services/network-security/firewall-and-dmz",
								   "/services/network-security/ids-and-ips",
								   "/services/network-security/admin-auditing",
								   "/services/network-security/management-and-monitoring",
								   "/services/network-security/ddos-protection",
								   "/services/network-security/authentication-authorization-accounting",
								   "/services/network-security/content-security",
								   "/services/network-security/infrastructure-security",
								   "/services/software",
								   "/services/software/automation",
								   "/services/software/idss",
								   "/services/software/desktop-mobile-integrated", 
								   "/services/web-hosting",
								   "/services/web-hosting/linux",
								   "/services/web-hosting/windows",
								   "/services/web-design",
								   "/services/web-design/web-design",
								   "/services/web-design/seo",
								   "/services/network-wireless"
								   );
		if(in_array($url, $underconstruction))
		{
		    header("HTTP/1.0 503 Service Unavailable", true, 503);
	        require_once $inc . "/template/" . $lc . "/header.inc.php";
		    require_once $inc . "/template/" . $lc . "/underconstruction.inc.php";
			
			return;
		}
		
		// Otherwise
	    header("HTTP/1.0 404 Not Found", true, 404);
	    require_once $inc . "/template/" . $lc . "/header.inc.php";
	    require_once $inc . "/template/" . $lc . "/404.inc.php";
	    require_once $inc . "/template/" . $lc . "/footer.inc.php";
	}
	
	$basedomain = 'jpa7.local';

    $url = explode('?', $_SERVER['REQUEST_URI']);
    $url = $url[0];
    $inc = $_SERVER['DOCUMENT_ROOT'] . '/inc/';
	$servername = explode('.', $_SERVER['SERVER_NAME']);
	if ($servername[0] == 'www')
	{
		array_shift($servername);
	}
	$lc = ($servername[0] == 'jpa7') ? False : $servername[0];
	
	if ($lc === False)
	{
		$lc = 'fa';
		$newURL = Array('http://', $lc, '.', implode('.', $servername), $url);
		$newURL = join('', $newURL);
		header('Location: ' . $newURL);
		die("You're being redirected here: " . $newURL);
	}
	
    ob_start();

    // Page start
    require_once $inc . "/template/page-start.inc.php";
    require_once $inc . "/template/" . $lc . "/language-bar.inc.php";

    // Body
    showBody();

    // Page end
    require_once $inc . "/template/page-end.inc.php";
    
    ob_end_flush();

?>