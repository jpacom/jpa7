<?php
	// ReEnableAccount class by J.P.A.
	// (C) 2011
	// 
	// Enable / Re-enable un-active user accounts.

	class REA
	  {
		function construct()
			{
				//[TODO] create mysqli object using consts class
			}
		function enable_accunt($member_id)
			{
				// [TODO] check status flag of member_id and if status = 3 is enable and quit
				// [TODO] if status = 1 or 2 call REA::generate_code() to generate validation code
				// [TODO] update member valdateion code
				// [TODO] call REA::send_message($member_id, $scode) 
				// [TODO] call REA::create_form(member_id)
			}
		function generate_code()
			{
				// [TODO] create and return validation code
			}
		function send_message($member_id, $code)
			{
				// [TODO] send $code to the email and mobile to $member_id
			}
		function create_form($memer_id)
			{
				//[TODO] create validation form (post to REA::restor()) if status = 2 include password files
			}
		function restore($posted_code, $posted_userneme, $posted_validation_code, $posted_password = null)
			{
				//[TODO] if validation code is true and status = 1 set status = 1
				//[TODO] if validation code is true and status = 2 and Reg::validation($posted_password) is true set status = 3 and password = $posted_password
			}
	  }
?>