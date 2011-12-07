<?php
	
	$include_path	= $_SERVER['DOCUMENT_ROOT'] . '/inc/';
	
	require_once	$include_path . 'jpa_classes.inc.php';
	
	new StaticPage(false, 'services', false, 'en');
	
?>