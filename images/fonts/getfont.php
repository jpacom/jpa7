<?php
	header('Content-Type: Application/x-font-' . $_GET['format']);
	header('Access-Control-Allow-Origin: *');
	header('X-Content-Type-Options: nosniff');
	readfile($_GET['name'] . '.' . $_GET['format']);
?>