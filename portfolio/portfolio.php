<?php
	require_once 'portfolio.class.php';
	$element_id	=	 $_POST['element_id'];
	$portfolio	=	new portfolio('jpacom_jpa');
	$info	=	array();
	$info		=	$portfolio->fetch_info($element_id,'jpacom_jpa');
	
	//if(count($info) != 0)
	foreach ($info as $item)
	{
		echo $item;
		echo '|';
	}
	
?>