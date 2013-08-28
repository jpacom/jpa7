<?php
	function convertPersianNumbers($string)
	{
		$persianNumbers = Array('۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹');
		$output = Array();
		
		$len= mb_strlen($string, mb_detect_encoding($persianNumbers[0]));
		for($i = 0; $i < $len; $i++)
		{
			$char = mb_substr($string, $i, 1, mb_detect_encoding($persianNumbers[0]));
			$index = array_search($char, $persianNumbers);
			
			if($index !== FALSE)
				array_push($output, $index);
			else 
				array_push($output, $char);
		}
		
		return implode('', $output);
	}
	
	function validate()
	{
		global $firstname, $lastname, $email, $phone, $company, $department, $country, $message;
		
		if(!strlen($_POST['contact-us-form-firstname']))
			return 'لطفا نام خود را وارد کنید.';
		if(!strlen($_POST['contact-us-form-lastname']))
			return 'لطفا نام خانوادگی خود را وارد کنید.';
		if(!strlen($_POST['contact-us-form-email']))
			return 'لطفا پست الکترونیک خود را وارد کنید.';
		if(!strlen($_POST['contact-us-form-phone']))
			return 'لطفا شماره تلفن خود را وارد کنید.';
		if(!strlen($_POST['contact-us-form-message']))
			return 'لطفا پیغام خود را وارد کنید.';
		
		if(preg_match('/[^A-Za-zء-غف-يگچپژ ]/', $firstname = $_POST['contact-us-form-firstname']) !== 0)
			return 'نام وارد شده کاراکتر عیر مچاز دارد. لطفا ففط از حروف و فاصله استفاده کنید.';
		if(preg_match('/[^A-Za-zء-غف-يگچپژ ]/', $lastname	= $_POST['contact-us-form-lastname']) !== 0)
			return 'نام خانوادگی وارد شده کاراکتر عیر مچاز دارد. لطفا ففط از حروف و فاصله استفاده کنید.';
		if(!($email = filter_var($_POST['contact-us-form-email'], FILTER_VALIDATE_EMAIL)))
			return 'پست الکترونیکی وارد شده معتبر نیست.';
		if(preg_match('/[^0-9۰-۹ \-\(\)\+]/', $phone = $_POST['contact-us-form-phone']) !== 0)
			return 'شماره تلفن وارد شده معتبر نیست.';
		$numbers = preg_replace('/[^0-9,۰-۹]/', '', $phone);
		$numbers = convertPersianNumbers($numbers);
		if((int)($numbers / 1000) == 0)
			return 'شماره تلفن وارد شده بیش از حد کوتاه است.';
		if(preg_match('/[^A-Za-zء-غف-يگچپژ ]/', $company = $_POST['contact-us-form-company']) !== 0)
			return 'نام شرکت وارد شده کاراکتر عیر مچاز دارد. لطفا ففط از حروف و فاصله استفاده کنید.';
		if(preg_match('/[^A-Za-zء-غف-يگچپژ ]/', $department = $_POST['contact-us-form-department']) !== 0)
			return 'دپارتمان وارد شده کاراکتر عیر مچاز دارد. لطفا ففط از حروف و فاصله استفاده کنید.';
		if(preg_match('/[^A-Za-zء-غف-يگچپژ ]/', $country = $_POST['contact-us-form-country']) !== 0)
			return 'کشور وارد شده کاراکتر عیر مچاز دارد. لطفا ففط از حروف و فاصله استفاده کنید.';
		$message = escapeshellcmd($_POST['contact-us-form-message']);
		
		return False;
	}

	if(strtolower($_SERVER['REQUEST_METHOD']) == 'post')
	{
		// Validate inputs
		global $firstname, $lastname, $email, $phone, $company, $department, $country, $message;
		$error = validate();
		
		// Prepare the mail
		$to = 'jpa7.com@gmail.com';
		$subject = 'Contact';
		$headers = 'From: contactus@jpa7.com' . "\r\n" .
    'Reply-To: ' . $email . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
		$message = Array(
					'First Name: ', $firstname,
					"\r\nLast Name: ", $lastname,
					"\r\nEmail: ", $email,
					"\r\nPhone: ", $phone,
					"\r\nCompany: ", $company,
					"\r\nDepartment:", $department,
					"\r\nCountry: ", $country,
					"\r\n",
					"\r\n------------------",
					"\r\n",
					"\r\n", $message
		);
		$message = implode('', $message);
		
		// Send the mail
		if($error === False)
			mail($to, $subject, $message, $headers) or ($error = 'متاسفانه مشکل غیر منتظره ای در فرستادن پیغام شما پیش آمده. لطفا بعدا امتحان کنید.');
	}
	
	if(strtolower($_SERVER['REQUEST_METHOD']) == 'post' && $error === False) {
		?>
	<div id="contact-us">
		<div class="pages-navigation-bar">
			<div>شما اینجا هستید &gt; <a class="smallerLatin" href="/">JPA</a> &gt; <a href="/contact">تماس با ما</a></div>
		</div>
		<div id="pages-main" style="background: none;">
			<div class="main-text">
				<div class="title">با سپاس فراوان</div>
				<div class="description">
					<p>پیغام شما با موفقیت ارسال شد.به زودی به آن پاسخ می دهیم.</p>
					<p><a href="/contact">بازگشت به تماس با ما</a></p>
				</div>
			</div>
		</div>
	</div>
		<?php
	} else {
?>
	<div id="contact-us">
		<div class="pages-navigation-bar">
			<div>شما اینجا هستید &gt; <a class="smallerLatin" href="/">JPA</a> &gt; <a href="/contact">تماس با ما</a></div>
		</div>
		<div id="pages-main">
			<div id="map-convas" class="banner">&nbsp;</div>
			<div class="main-text">
				<div class="title">با ما در تماس باشید</div>
				<div class="description">
					<p>کارشناسان ما آماده تحلیل نیاز های شما هستند &#8230;</p>
					<p>تماس گرفتن با ما آسان است تنها کافیست از طریق فرم زیر برای ما بنویسید یا به ما ایمیل (پست الکترونیک) بفرستید. آدرس پست های الکترونیکی ما:</p>
					<table id="contact-us-email-table">
						<tr>
							<td>اطلاعات کلی</td>
							<td><a href="mailto:info@jpa7.com">info@jpa7.com</a></td>
						</tr>
						<tr>
							<td>بازرگانی</td>
							<td><a href="mailto:marketing@jpa7.com">marketing@jpa7.com</a></td>
						</tr>
						<tr>
							<td>استخدام</td>
							<td><a href="mailto:hr@jpa7.com">hr@jpa7.com</a></td>
						</tr>
						<tr>
							<td>دپارتمان نرم افزار</td>
							<td><a href="mailto:software@jpa7.com">software@jpa7.com</a></td>
						</tr>
						<tr>
							<td>دپارتمان طراحی وب</td>
							<td><a href="mailto:webdesign@jpa7.com">webdesign@jpa7.com</a></td>
						</tr>
						<tr>
							<td>دپارتمان شبکه</td>
							<td><a href="mailto:networking@jpa7.com">networking@jpa7.com</a></td>
						</tr>
						<tr>
							<td>دپارتمان میزبانی وب</td>
							<td><a href="mailto:webhosting@jpa7.com">webhosting@jpa7.com</a></td>
						</tr>
					</table>
					<p>و همچنین می توانید با تلفن یا فکس با ما ارتباط برقرار کنید.</p>
					<table id="contact-us-tel-table">
						<tr>
							<td>تلفن:</td>
							<td>۰۲۶ ۳۲۷۱ ۹۱۰۳</td>
						</tr>
						<tr>
							<td>تلفکس:</td>
							<td>۰۲۶ ۳۲۷۱ ۹۱۰۲</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
		<div class="contact">
			<div>
				<div class="address-box float-left">
					<div class="title">دفتر کرج</div>
					<div class="description">کرج - چهارراه هفت تیر ساختمان یاس طبقه ۵ واحد ۵۰۲</div>
					<div class="description">تلفن: +98 263 220 9245</div>
					<div class="description">تلفکس: +98 263 228 4724</div>
					<!--
					<br />
					<div class="title">Tehran Office</div>
					<div class="description">Unit 601. sixth floor. Eram Tower. Enqelab St. Hafte Tir. Karaj. Tell: +98 263 220 9245 Fax: +98 263 228 4724</div>
					-->
				</div>
				<div class="contact-box float-right"><?php
					if (strtolower($_SERVER['REQUEST_METHOD']) == 'post' && $error !== False)
					{
						?>
					<p class="error"><?php echo $error; ?></p><?php
					}
					?>
					<form id="contact-us-form" method="post" target="">
						<div class="float-left topleft">
							<label class="float-left">نام:</label>
							<span class="float-left">*</span>
							<input type="text" id="contact-us-form-firstname" name="contact-us-form-firstname"<?php echo (strtolower($_SERVER['REQUEST_METHOD']) == 'post')?(' value="' . $_POST['contact-us-form-firstname'] . '"'):'';  ?> />
							<br class="clear-both" />
							<label class="float-left">نام خانوادگی:</label>
							<span class="float-left">*</span>
							<input type="text" id="contact-us-form-lastname" name="contact-us-form-lastname"<?php echo (strtolower($_SERVER['REQUEST_METHOD']) == 'post')?(' value="' . $_POST['contact-us-form-lastname'] . '"'):'';  ?>  />
							<br class="clear-both" />
							<label class="float-left">پست الکترونیک:</label>
							<span class="float-left">*</span>
							<input style="direction: ltr;" type="text" id="contact-us-form-email" name="contact-us-form-email"<?php echo (strtolower($_SERVER['REQUEST_METHOD']) == 'post')?(' value="' . $_POST['contact-us-form-email'] . '"'):'';  ?>  />
							<br class="clear-both" />
							<label class="float-left">تلفن:</label>
							<span class="float-left">*</span>
							<input style="direction: ltr;" type="text" id="contact-us-form-phone" name="contact-us-form-phone"<?php echo (strtolower($_SERVER['REQUEST_METHOD']) == 'post')?(' value="' . $_POST['contact-us-form-phone'] . '"'):'';  ?>  />
						</div>
						<div class="float-left topright">
							<label class="float-left">شرکت:</label>
							<input type="text" id="contact-us-form-company" name="contact-us-form-company"<?php echo (strtolower($_SERVER['REQUEST_METHOD']) == 'post')?(' value="' . $_POST['contact-us-form-company'] . '"'):'';  ?>  />
							<br class="clear-both" />
							<label class="float-left">دپارتمان:</label>
							<input type="text" id="contact-us-form-department" name="contact-us-form-department"<?php echo (strtolower($_SERVER['REQUEST_METHOD']) == 'post')?(' value="' . $_POST['contact-us-form-department'] . '"'):'';  ?>  />
							<br class="clear-both" />
							<label class="float-left">کشور:</label>
							<input type="text" id="contact-us-form-country" name="contact-us-form-country"<?php echo (strtolower($_SERVER['REQUEST_METHOD']) == 'post')?(' value="' . $_POST['contact-us-form-country'] . '"'):'';  ?>  />
							<br class="clear-both" />
						</div>
						<div class="clear-both bottom">
							<label class="float-left">پیغام:</label>
							<span class="float-left">*</span>
							<textarea id="contact-us-form-message" name="contact-us-form-message"><?php echo (strtolower($_SERVER['REQUEST_METHOD']) == 'post')?htmlspecialchars($_POST['contact-us-form-message']):'';  ?> </textarea>
							<br class="clear-both" />
						</div>
						<div class="clear-both bottombutton">
							<input type="submit" value="ارسال" />
						</div>
					</form>
				</div>
				<br class="clear-both" />
			</div>
		</div>
	</div>
<?php
	}
?>