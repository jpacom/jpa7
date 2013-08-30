<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" dir="ltr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<?php

	$titles = array(
		'/' => 'صفحه اصلی',
		'/about' => 'درباره ما',
		'/contact' => 'تماس با ما',
	);
	
	$descriptions = array(
		'/' => 'جهان پردازش البرز (JPA7) در زمینه های طراحی وبسایت، برنامه نویسی، شبکه های بیسیم و با سیم، دوربین مدار بسته و وب هاستینگ آماده ارائه خدماتی بی نظیر می باشد.',
		'/about' => 'جهان پردازش البرز با استفاده از کادری خلاق و جوان در پی نو آوری و ارائه راه حل های نو در بالاترین سطح ممکن می باشد.',
		'/contact' => 'پیروزی شرکت جهان پردازش البرز در پی ایجاد محیطی برای پاسخگویی به نیاز های مشتریان با تکیه بر کادری پیشرو، جوان و خلاق به دست آمده است.',
	);
	
	$keywords = array(
		'/' => 'جهان پردازش البرز, طراحی حرفه ای وبسایت, برنامه نویسی, شبکه, بیسیم, وایرلس, هاست, دامنه, نرم افزار',
		'/about' => 'جهان پردازش البرز, JPA7, طراحان حرفه ای, برنامه نویسان, پاسخگویی سریع',
		'/contact' => 'جهان پردازش البرز, JPA7, پاسخگویی سریع, آدرس, ایمیل, تلفن, پیغام, تماس',
	);

	if(@ $descriptions[$url])
	{
?>
<meta name="description" content="<?php echo $descriptions[$url]; ?>" />
<?php
	}
	
	if(@ $keywords[$url])
	{
?>
<meta name="keywords" content="<?php echo $keywords[$url]; ?>" />
<?php
	}
?>
<title><?php
	
	if($url != '/')
	{
		echo @ $titles[$url];
		echo " &mdash; ";
	}

 ?>جهان پردازش البرز (JPA7)</title>
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
