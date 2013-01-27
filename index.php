<?php
	
	$home = true;
	$language_id = 1;
	$language_name = 'en';
	
	$include_path	= $_SERVER['DOCUMENT_ROOT'] . '/inc/';
	
	require_once	$include_path . 'jpa_classes.inc.php';
	
	//	Initialize 1st page.
	$page	= new StaticPage(1, false, false, $language_name, false, 1);
	
	//	Header
	$page->pageHeader();
	
	require_once $include_path . 'template/banner2.inc.php';
	
	//	Box1
	$page->pageBody();
	
	require_once $include_path . 'template/box2.inc.php';
	
	//	Footer
	$page->pageFooter();
	
?>