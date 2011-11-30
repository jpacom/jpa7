<?php

	function __autoload($classname)
	  {
		require $_SERVER['DOCUMENT_ROOT'] . '/inc/jpa_classes/' . $classname . ".class.php";
	  }

?>
