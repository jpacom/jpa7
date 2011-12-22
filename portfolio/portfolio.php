<?php
	require_once 'portfolio.class.php';
	$element_id	=	 $_POST['element_id'];
	$portfolio	=	new portfolio('jpacom_portfolio');
	$info	=	array();
	$info		=	$portfolio->fetch_info($element_id,'jpacom_portfolio');
	
	//if(count($info) != 0)
	foreach ($info as $item)
	{
		echo $item;
		echo '|';
	}
	
?>