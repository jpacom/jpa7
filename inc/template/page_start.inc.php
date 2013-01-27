<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" dir="<?php
	try {
		$link = mysqli_connect(ConstsImp::db_host, ConstsImp::db_user, ConstsImp::db_pass);
		mysqli_set_charset($link, 'utf8');
		mysqli_select_db($link, ConstsImp::menu_items_db);
		if(! $language_id)
			$language_id = 1;
		$query = "SELECT `abbr`, `direction` FROM `languages` WHERE `id`=" . $language_id;
		$result = mysqli_query($link, $query);
		$lang = mysqli_fetch_array($result);
		$lang_abbr = $lang['abbr'];
		$direction = $lang['direction'];
		$lang = Null;
		mysqli_free_result($result);
		mysqli_close($link);
		
		echo $direction;
	} catch (Exception $e) {
		echo 'ltr';
	}
?>">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		
		<meta name="description" content="<?php echo $this->page['description']; ?>" />
		<meta name="keywords" content="<?php echo $this->page['keywords']; ?>" />
		
		<title>Jahaan Pardazesh Alborz :: <?php echo $this->page['title']; ?></title>
		
		<style type="text/css" media="screen">
			@import url(http://fonts.googleapis.com/css?family=Kite+One|Croissant+One);
			@import "/inc/stylesheet/font.css";
			@import "/inc/stylesheet/general.css";
			@import "/inc/stylesheet/background.css";
			@import "/inc/stylesheet/layout.css";
		</style>
		
		<script type="text/javascript" src="/inc/scripts/lib/prototype.js"></script>
		<script type="text/javascript" src="/inc/scripts/src/scriptaculous.js"></script>
		<script type="text/javascript" src="/inc/scripts/portfolio.js"></script>
	 	<script type="text/javascript" src="/inc/scripts/banner-menu-motion.js"></script>
	 	<script type="text/javascript" src="/inc/scripts/classes.js"></script>
	 	 
	</head>

	<body class="body-bg">


