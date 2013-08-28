<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" dir="ltr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title><?php

	$titles = array(
		'/' => 'Home',
		'/about' => 'About Us',
		'/contact' => 'Contact Us',
	);
	
	if($url != '/')
	{
		echo @ $titles[$url];
		echo " &mdash; ";
	}

 ?>Jahan Pardazesh Alborz</title>
	<style type="text/css" media="screen">
		@import "<?php echo 'http://images.' . $basedomain; ?>/stylesheet/fontfaces.css";
		@import "<?php echo 'http://images.' . $basedomain; ?>/stylesheet/global.css";
		<?php
		if($lc == 'fa')
		{
			echo '@import "http://images.' . $basedomain . '/stylesheet/persian.css";';
		}
		?>
		
	</style>
	<script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
    <script type="text/javascript" src="inc/javascript/mootools.js"></script>
    <script type="text/javascript" src="inc/javascript/banner.class.js"></script>
    <script type="text/javascript" src="inc/javascript/main.js"></script>
</head>

<body>
