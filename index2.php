<html></html>
<?php
	
	$home = true;
	
	$include_path	= $_SERVER['DOCUMENT_ROOT'] . '/inc/';
	
	require_once	$include_path . 'jpa_classes.inc.php';
	
	//	Initialize 1st page.
	$page	= new StaticPage(1, false, false, 'en', false, 1);
	
	//	Header
	$page->pageHeader();
	
	//	Box1
	$page->pageBody();
	
	//	Initialize 2nd page.
	$page	= new StaticPage(2, false, false, 'en', false, 2);
	
	//	Box2
	$page->pageBody();
	
	//	Footer
	$page->pageFooter();
	
?>
