<?php
	// Registration class by J.P.A.
	// (C) 2011
	// 
	// Register a new user.


	class Reg
	  {
		private $db;
			
		function __construct($db_name)
			{
				$db	= new MySQLi(Consts::db_host, Consts::db_user, Consts::db_pass, $db_name);
				//[TODO] create mysqli object using consts class
			}
		/* {{{ Reg::create_page()	
		create registration form	*/
		function create_page()
			{
				// [TODO] create registration form
			}
		/* {{{ Reg::validation($name, $value)
		chek the validation of value for the name and return true for valid value and Appropriate message for invalid value	*/
		function validation($name, $value)
			{
				switch($name)
				  {
					case "email":
						break;
					case "email":
						break;
					case "email":
						break;
					case "email":
						break;	  
				  }
				// [TODO] chech $name and select one appropriate case to check its value for validation
			}
		/* {{{ register($inputArray)
		input array of posted field and register	*/
		function register($inputArray)
			{
				// [TODO] check validation of all input
				// [TODO] if all of input is valid register and set status flag = 1
				// [TODO] call REA::enable_accunt($member_id) to active accunt
			}
	  }
?>