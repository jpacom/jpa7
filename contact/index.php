<?php

	$language_id = 1;
	$language_name = 'en';	
	$include_path	= $_SERVER['DOCUMENT_ROOT'] . '/inc/';
	
	require_once	$include_path . 'jpa_classes.inc.php';
	
	new StaticPage(false, 'contact', false, $language_name);
	
?>