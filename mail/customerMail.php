<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// alert("success");
// die();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'autoload.php';

if (isset($_POST['name']) && isset($_POST['email'])) {
    $name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$service_code   = $_POST['service_code'];
	$service_name = [
		
		'001' =>'Abu dhabi Business Service',
		'002' =>'mainland company formation dubai service',
		'003' =>'offshore company formation dubai service',
		'004' =>'business centre dubai service',
		'005' =>'business trade license dubai service',
		'006' =>'commercial license dubai service',
		'007' =>'company formation cost dubai service',
		'008' =>'company formation dubai service',
		'009' =>'company formation services dubai service',
		'010' =>'corporate tax dubai service',
		'011' =>'cost of business dubai service',
		'012' =>'investor visa services dubai service',
		'013' =>'freezone mainland dubai service',
		'014' =>'free zone business dubai service',
		'015' =>'ifza company formation dubai service',
		'016' =>'ifza freezone company dubai service',
		'017' =>'industrial license dubai service',
		'018' =>'investor visa dubai service',
		'019' =>'jebel ali company formation dubai service',
		'020' =>'mainland business dubai service',
		'021' =>'mainland company formation dubai service',
		'022' =>'offshore company formation dubai service',
		'023' =>'open bank account dubai service',
		'024' =>'pro services dubai service',
		'025' =>'professional license dubai service',
		'026' =>'ras al khaimah offshore company formation dubai service',
		'027' =>'rental offices and desk dubai service',
		'028' =>'setting up business dubai service',
		'029' =>'taxation and vat services dubai service',
		'030' =>'tourism license dubai service',
		'031' =>'business partner dubai service',
		'032' => 'Contact with Us ',
		'033' => 'Global business hub',
		'034' => 'Dubai company formation freezone',
		'035' => 'Business dubai healthcare',
		'036' => 'Firm dubai industrial',
		'037' => 'Business dubai international financial centre',
		'038' => 'Firm dubai internet city',
		'039' => 'Firm meydan free zone',
		'040' => 'Company formation jebel ali',
		'041' => 'Company formation dubai south',
		'042' => 'Company formation free zone dubai',
		'043' => 'Company formation hamriyah',
		'044' => 'Company formation sharjah media city',
		'045' => 'Business ajman free zone',
		'046' => 'Business raz al khaimah economic zone',
		'047' => 'Business dubai multi commodity centre'
	];

	$string_convert = $service_code;
	$service_code   = strval($string_convert);
	
	$custmail = new PHPMailer(TRUE);

		// $custmail->isSMTP();
		// // $custmail->Mailer = "smtp";
		// $custmail->SMTPDebug  = 1;
		// $custmail->SMTPAuth   = TRUE;
		// $custmail->SMTPSecure = "ssl";
		// $custmail->Port       = 465;
		// $custmail->Host       = "smtp.gmail.com";
		// $custmail->Username   = "legalraastatech3@gmail.com";
		
		$custmail->isSMTP();
		$custmail->SMTPDebug  = 1;
		$custmail->Host = "smtp.gmail.com";
		$custmail->SMTPAuth = true;
		$custmail->Username   = "legalraastatech3@gmail.com";
		// $custmail->Password   = "pxasezljigulizov";
		$custmail->Port = 465;
		$custmail->SMTPSecure = "ssl";
		//Email Settings
		$custmail->isHTML(true);
		$custmail->setFrom('legalraastatech3@gmail.com', 'LEGALRAASTA.COM');
		$custmail->addAddress($_POST['email'], $_POST['name']);
		$custmail->Subject = ucwords("Thank you For Showing Interest In $service_name[$service_code]");;
        if(isset($_POST['service_code']) && $service_code == '001'){
			$Body='<html>
			<body>
				<div>Dear '.$_POST['name'].'
					<p>We wanted to take a moment to thank you for choosing our '. $service_name[$service_code].'. We appreciate the trust you have placed in Whiteworth, and we are committed to delivering the highest quality service in setting up your business in Dubai. Additionally, we also provide business setup services in Free Zone, Mainland and Offshore areas. <br>
					We are grateful for the opportunity to work with you and for the positive impact that our License services have had on your business. Your satisfaction is Whiteworth’s top priority, and we are dedicated to ensuring that you receive the best possible experience with our company. Click to know about our services and us</p>
				
					<p><strong>About Whiteworth:<br></strong>With over 5 years of experience in company formation in Dubai, we provide a one-stop-shop approach for quick business registration, offering complete services for all incorporation, licensing, and other associated services to<a href="https://test.legalraasta.com/whiteworth/freezone-mainland-uae.html"><strong> Free Zone,</strong></a> <a href="https://test.legalraasta.com/whiteworth/mainland-business-dubai.html"><strong>Mainland</strong></a> & <a href="https://test.legalraasta.com/whiteworth/offshore-company-formation-dubai-uae.html"><strong>offshore</strong></a></p>
					<p>With access to a top pool of chances, we have been assisting Indian businessmen to realize their ambition of company formation in<strong> Dubai</strong>. In order to position themselves for long-term growth and success while avoiding mistakes that could end up costing them time and money, WhiteWorth has been assisting<strong> international business owners</strong> with <strong>company formation in Dubai</strong> in the appropriate jurisdiction and with the appropriate company structure</p>
					<p>Warm regards,<br>Team, WhiteWorth<br><em></em>
					<p>Contact Us</p>
						Call Us: <a href="tel:+971585606800" data-mce-href="tel:+971585606800">+971585606800</a>&nbsp;|&nbsp; <a href="tel:+918882038525">+918882038525</a>  <br> <br>
						Site:<a href="https://test.legalraasta.com/whiteworth" data-mce-href="https://test.legalraasta.com/whiteworth">www.thewhiteworth.com</a><br> <br>
						Dubai Office :<a href="https://goo.gl/maps/T8roTQnp2RtndkPj6"> 801 (02), Latifa Towers, Sheikh Zayed Road , Dubai </a></p>
							
							<a href="https://www.facebook.com/WhiteWorth"
							data-mce-href="https://www.facebook.com/WhiteWorth">Facebook</a>&nbsp;|&nbsp;<a
							href="https://www.linkedin.com/company/80065080/admin/"
							data-mce-href="https://www.linkedin.com/company/80065080/admin/">Linkedin</a>&nbsp;|&nbsp;<a
							href="https://twitter.com/thewhiteworth"
							data-mce-href="https://twitter.com/thewhiteworth">Twitter</a>&nbsp;|&nbsp;<a
							href="https://in.pinterest.com/whiteworthAdvisors/"
							data-mce-href="https://in.pinterest.com/whiteworthAdvisors/">Pinterest</a></p>
				</div>
			</body>
		</html>';
		}else if(isset($_POST['service_code']) && $service_code == '002') {
			$Body ='<html>
			<body>
				<div>Dear '.$_POST['name'].'
					<p>We wanted to take a moment to thank you for choosing our '. $service_name[$service_code].'. We appreciate the trust you have placed in Whiteworth, and we are committed to delivering the highest quality service in setting up your business in Dubai. Additionally, we also provide business setup services in Free Zone, Mainland and Offshore areas. <br>
					We are grateful for the opportunity to work with you and for the positive impact that our License services have had on your business. Your satisfaction is Whiteworth’s top priority, and we are dedicated to ensuring that you receive the best possible experience with our company. Click to know about our services and us</p>
				
					<p><strong>About Whiteworth:<br></strong>With over 5 years of experience in company formation in Dubai, we provide a one-stop-shop approach for quick business registration, offering complete services for all incorporation, licensing, and other associated services to<a href="https://test.legalraasta.com/whiteworth/freezone-mainland-uae.html"><strong> Free Zone,</strong></a> <a href="https://test.legalraasta.com/whiteworth/mainland-business-dubai.html"><strong>Mainland</strong></a> & <a href="https://test.legalraasta.com/whiteworth/offshore-company-formation-dubai-uae.html"><strong>offshore</strong></a></p>
					<p>With access to a top pool of chances, we have been assisting Indian businessmen to realize their ambition of company formation in<strong> Dubai</strong>. In order to position themselves for long-term growth and success while avoiding mistakes that could end up costing them time and money, WhiteWorth has been assisting<strong> international business owners</strong> with <strong>company formation in Dubai</strong> in the appropriate jurisdiction and with the appropriate company structure</p>
					<p>Warm regards,<br>Team, WhiteWorth<br><em></em>
					<p>Contact Us</p>
						Call Us: <a href="tel:+971585606800" data-mce-href="tel:+971585606800">+971585606800</a>&nbsp;|&nbsp; <a href="tel:+918882038525">+918882038525</a>  <br> <br>
						Site:<a href="https://test.legalraasta.com/whiteworth" data-mce-href="https://test.legalraasta.com/whiteworth">www.thewhiteworth.com</a><br> <br>
						Dubai Office :<a href="https://goo.gl/maps/T8roTQnp2RtndkPj6"> 801 (02), Latifa Towers, Sheikh Zayed Road , Dubai </a></p>
							
							<a href="https://www.facebook.com/WhiteWorth"
							data-mce-href="https://www.facebook.com/WhiteWorth">Facebook</a>&nbsp;|&nbsp;<a
							href="https://www.linkedin.com/company/80065080/admin/"
							data-mce-href="https://www.linkedin.com/company/80065080/admin/">Linkedin</a>&nbsp;|&nbsp;<a
							href="https://twitter.com/thewhiteworth"
							data-mce-href="https://twitter.com/thewhiteworth">Twitter</a>&nbsp;|&nbsp;<a
							href="https://in.pinterest.com/whiteworthAdvisors/"
							data-mce-href="https://in.pinterest.com/whiteworthAdvisors/">Pinterest</a></p>
				</div>
			</body>
		</html>';
	  	}else if(isset($_POST['service_code']) && $service_code == '003') {
			$Body='<html>
			<body>
				<div>Dear '.$_POST['name'].'
					<p>We wanted to take a moment to thank you for choosing our '. $service_name[$service_code].'. We appreciate the trust you have placed in Whiteworth, and we are committed to delivering the highest quality service in setting up your business in Dubai. Additionally, we also provide business setup services in Free Zone, Mainland and Offshore areas. <br>
					We are grateful for the opportunity to work with you and for the positive impact that our License services have had on your business. Your satisfaction is Whiteworth’s top priority, and we are dedicated to ensuring that you receive the best possible experience with our company. Click to know about our services and us</p>
				
					<p><strong>About Whiteworth:<br></strong>With over 5 years of experience in company formation in Dubai, we provide a one-stop-shop approach for quick business registration, offering complete services for all incorporation, licensing, and other associated services to<a href="https://test.legalraasta.com/whiteworth/freezone-mainland-uae.html"><strong> Free Zone,</strong></a> <a href="https://test.legalraasta.com/whiteworth/mainland-business-dubai.html"><strong>Mainland</strong></a> & <a href="https://test.legalraasta.com/whiteworth/offshore-company-formation-dubai-uae.html"><strong>offshore</strong></a></p>
					<p>With access to a top pool of chances, we have been assisting Indian businessmen to realize their ambition of company formation in<strong> Dubai</strong>. In order to position themselves for long-term growth and success while avoiding mistakes that could end up costing them time and money, WhiteWorth has been assisting<strong> international business owners</strong> with <strong>company formation in Dubai</strong> in the appropriate jurisdiction and with the appropriate company structure</p>
					<p>Warm regards,<br>Team, WhiteWorth<br><em></em>
					<p>Contact Us</p>
						Call Us: <a href="tel:+971585606800" data-mce-href="tel:+971585606800">+971585606800</a>&nbsp;|&nbsp; <a href="tel:+918882038525">+918882038525</a>  <br> <br>
						Site:<a href="https://test.legalraasta.com/whiteworth" data-mce-href="https://test.legalraasta.com/whiteworth">www.thewhiteworth.com</a><br> <br>
						Dubai Office :<a href="https://goo.gl/maps/T8roTQnp2RtndkPj6"> 801 (02), Latifa Towers, Sheikh Zayed Road , Dubai </a></p>
							
							<a href="https://www.facebook.com/WhiteWorth"
							data-mce-href="https://www.facebook.com/WhiteWorth">Facebook</a>&nbsp;|&nbsp;<a
							href="https://www.linkedin.com/company/80065080/admin/"
							data-mce-href="https://www.linkedin.com/company/80065080/admin/">Linkedin</a>&nbsp;|&nbsp;<a
							href="https://twitter.com/thewhiteworth"
							data-mce-href="https://twitter.com/thewhiteworth">Twitter</a>&nbsp;|&nbsp;<a
							href="https://in.pinterest.com/whiteworthAdvisors/"
							data-mce-href="https://in.pinterest.com/whiteworthAdvisors/">Pinterest</a></p>
				</div>
			</body>
		</html>';
	  	}else if(isset($_POST['service_code']) && $service_code == '004') {
			$Body='<html>
			<body>
			<div>Dear '.$_POST['name'].'
				<p>We wanted to take a moment to thank you for choosing our '. $service_name[$service_code].'. We appreciate the trust you have placed in Whiteworth, and we are committed to delivering the highest quality service in setting up your business in Dubai. Additionally, we also provide business setup services in Free Zone, Mainland and Offshore areas. <br>
				We are grateful for the opportunity to work with you and for the positive impact that our License services have had on your business. Your satisfaction is Whiteworth’s top priority, and we are dedicated to ensuring that you receive the best possible experience with our company. Click to know about our services and us</p>
			
				<p><strong>About Whiteworth:<br></strong>With over 5 years of experience in company formation in Dubai, we provide a one-stop-shop approach for quick business registration, offering complete services for all incorporation, licensing, and other associated services to<a href="https://test.legalraasta.com/whiteworth/freezone-mainland-uae.html"><strong> Free Zone,</strong></a> <a href="https://test.legalraasta.com/whiteworth/mainland-business-dubai.html"><strong>Mainland</strong></a> & <a href="https://test.legalraasta.com/whiteworth/offshore-company-formation-dubai-uae.html"><strong>offshore</strong></a></p>
				<p>With access to a top pool of chances, we have been assisting Indian businessmen to realize their ambition of company formation in<strong> Dubai</strong>. In order to position themselves for long-term growth and success while avoiding mistakes that could end up costing them time and money, WhiteWorth has been assisting<strong> international business owners</strong> with <strong>company formation in Dubai</strong> in the appropriate jurisdiction and with the appropriate company structure</p>
				<p>Warm regards,<br>Team, WhiteWorth<br><em></em>
				<p>Contact Us</p>
					Call Us: <a href="tel:+971585606800" data-mce-href="tel:+971585606800">+971585606800</a>&nbsp;|&nbsp; <a href="tel:+918882038525">+918882038525</a>  <br> <br>
					Site:<a href="https://test.legalraasta.com/whiteworth" data-mce-href="https://test.legalraasta.com/whiteworth">www.thewhiteworth.com</a><br> <br>
					Dubai Office :<a href="https://goo.gl/maps/T8roTQnp2RtndkPj6"> 801 (02), Latifa Towers, Sheikh Zayed Road , Dubai </a></p>
						
						<a href="https://www.facebook.com/WhiteWorth"
						data-mce-href="https://www.facebook.com/WhiteWorth">Facebook</a>&nbsp;|&nbsp;<a
						href="https://www.linkedin.com/company/80065080/admin/"
						data-mce-href="https://www.linkedin.com/company/80065080/admin/">Linkedin</a>&nbsp;|&nbsp;<a
						href="https://twitter.com/thewhiteworth"
						data-mce-href="https://twitter.com/thewhiteworth">Twitter</a>&nbsp;|&nbsp;<a
						href="https://in.pinterest.com/whiteworthAdvisors/"
						data-mce-href="https://in.pinterest.com/whiteworthAdvisors/">Pinterest</a></p>
			</div>
		</body>
			</html>';

	  	}else if(isset($_POST['service_code']) && $service_code == '005') {
			$Body='<html>
			<body>
				<div>Dear '.$_POST['name'].'
					<p>We wanted to take a moment to thank you for choosing our '. $service_name[$service_code].'. We appreciate the trust you have placed in Whiteworth, and we are committed to delivering the highest quality service in setting up your business in Dubai. Additionally, we also provide business setup services in Free Zone, Mainland and Offshore areas. <br>
					We are grateful for the opportunity to work with you and for the positive impact that our License services have had on your business. Your satisfaction is Whiteworth’s top priority, and we are dedicated to ensuring that you receive the best possible experience with our company. Click to know about our services and us</p>
				
					<p><strong>About Whiteworth:<br></strong>With over 5 years of experience in company formation in Dubai, we provide a one-stop-shop approach for quick business registration, offering complete services for all incorporation, licensing, and other associated services to<a href="https://test.legalraasta.com/whiteworth/freezone-mainland-uae.html"><strong> Free Zone,</strong></a> <a href="https://test.legalraasta.com/whiteworth/mainland-business-dubai.html"><strong>Mainland</strong></a> & <a href="https://test.legalraasta.com/whiteworth/offshore-company-formation-dubai-uae.html"><strong>offshore</strong></a></p>
					<p>With access to a top pool of chances, we have been assisting Indian businessmen to realize their ambition of company formation in<strong> Dubai</strong>. In order to position themselves for long-term growth and success while avoiding mistakes that could end up costing them time and money, WhiteWorth has been assisting<strong> international business owners</strong> with <strong>company formation in Dubai</strong> in the appropriate jurisdiction and with the appropriate company structure</p>
					<p>Warm regards,<br>Team, WhiteWorth<br><em></em>
					<p>Contact Us</p>
						Call Us: <a href="tel:+971585606800" data-mce-href="tel:+971585606800">+971585606800</a>&nbsp;|&nbsp; <a href="tel:+918882038525">+918882038525</a>  <br> <br>
						Site:<a href="https://test.legalraasta.com/whiteworth" data-mce-href="https://test.legalraasta.com/whiteworth">www.thewhiteworth.com</a><br> <br>
						Dubai Office :<a href="https://goo.gl/maps/T8roTQnp2RtndkPj6"> 801 (02), Latifa Towers, Sheikh Zayed Road , Dubai </a></p>
							
							<a href="https://www.facebook.com/WhiteWorth"
							data-mce-href="https://www.facebook.com/WhiteWorth">Facebook</a>&nbsp;|&nbsp;<a
							href="https://www.linkedin.com/company/80065080/admin/"
							data-mce-href="https://www.linkedin.com/company/80065080/admin/">Linkedin</a>&nbsp;|&nbsp;<a
							href="https://twitter.com/thewhiteworth"
							data-mce-href="https://twitter.com/thewhiteworth">Twitter</a>&nbsp;|&nbsp;<a
							href="https://in.pinterest.com/whiteworthAdvisors/"
							data-mce-href="https://in.pinterest.com/whiteworthAdvisors/">Pinterest</a></p>
				</div>
			</body>
		</html>';
	  	}else if(isset($_POST['service_code']) && $service_code == '006') {
			$Body='<html>
			<body>
				<div>Dear '.$_POST['name'].'
					<p>We wanted to take a moment to thank you for choosing our '. $service_name[$service_code].'. We appreciate the trust you have placed in Whiteworth, and we are committed to delivering the highest quality service in setting up your business in Dubai. Additionally, we also provide business setup services in Free Zone, Mainland and Offshore areas. <br>
					We are grateful for the opportunity to work with you and for the positive impact that our License services have had on your business. Your satisfaction is Whiteworth’s top priority, and we are dedicated to ensuring that you receive the best possible experience with our company. Click to know about our services and us</p>
				
					<p><strong>About Whiteworth:<br></strong>With over 5 years of experience in company formation in Dubai, we provide a one-stop-shop approach for quick business registration, offering complete services for all incorporation, licensing, and other associated services to<a href="https://test.legalraasta.com/whiteworth/freezone-mainland-uae.html"><strong> Free Zone,</strong></a> <a href="https://test.legalraasta.com/whiteworth/mainland-business-dubai.html"><strong>Mainland</strong></a> & <a href="https://test.legalraasta.com/whiteworth/offshore-company-formation-dubai-uae.html"><strong>offshore</strong></a></p>
					<p>With access to a top pool of chances, we have been assisting Indian businessmen to realize their ambition of company formation in<strong> Dubai</strong>. In order to position themselves for long-term growth and success while avoiding mistakes that could end up costing them time and money, WhiteWorth has been assisting<strong> international business owners</strong> with <strong>company formation in Dubai</strong> in the appropriate jurisdiction and with the appropriate company structure</p>
					<p>Warm regards,<br>Team, WhiteWorth<br><em></em>
					<p>Contact Us</p>
						Call Us: <a href="tel:+971585606800" data-mce-href="tel:+971585606800">+971585606800</a>&nbsp;|&nbsp; <a href="tel:+918882038525">+918882038525</a>  <br> <br>
						Site:<a href="https://test.legalraasta.com/whiteworth" data-mce-href="https://test.legalraasta.com/whiteworth">www.thewhiteworth.com</a><br> <br>
						Dubai Office :<a href="https://goo.gl/maps/T8roTQnp2RtndkPj6"> 801 (02), Latifa Towers, Sheikh Zayed Road , Dubai </a></p>
							
							<a href="https://www.facebook.com/WhiteWorth"
							data-mce-href="https://www.facebook.com/WhiteWorth">Facebook</a>&nbsp;|&nbsp;<a
							href="https://www.linkedin.com/company/80065080/admin/"
							data-mce-href="https://www.linkedin.com/company/80065080/admin/">Linkedin</a>&nbsp;|&nbsp;<a
							href="https://twitter.com/thewhiteworth"
							data-mce-href="https://twitter.com/thewhiteworth">Twitter</a>&nbsp;|&nbsp;<a
							href="https://in.pinterest.com/whiteworthAdvisors/"
							data-mce-href="https://in.pinterest.com/whiteworthAdvisors/">Pinterest</a></p>
				</div>
			</body>
		</html>';
	  	}else if(isset($_POST['service_code']) && $service_code == '007') {
			$Body='<html>
			<body>
			<div>Dear '.$_POST['name'].'
				<p>We wanted to take a moment to thank you for choosing our '. $service_name[$service_code].'. We appreciate the trust you have placed in Whiteworth, and we are committed to delivering the highest quality service in setting up your business in Dubai. Additionally, we also provide business setup services in Free Zone, Mainland and Offshore areas. <br>
				We are grateful for the opportunity to work with you and for the positive impact that our License services have had on your business. Your satisfaction is Whiteworth’s top priority, and we are dedicated to ensuring that you receive the best possible experience with our company. Click to know about our services and us</p>
			
				<p><strong>About Whiteworth:<br></strong>With over 5 years of experience in company formation in Dubai, we provide a one-stop-shop approach for quick business registration, offering complete services for all incorporation, licensing, and other associated services to<a href="https://test.legalraasta.com/whiteworth/freezone-mainland-uae.html"><strong> Free Zone,</strong></a> <a href="https://test.legalraasta.com/whiteworth/mainland-business-dubai.html"><strong>Mainland</strong></a> & <a href="https://test.legalraasta.com/whiteworth/offshore-company-formation-dubai-uae.html"><strong>offshore</strong></a></p>
				<p>With access to a top pool of chances, we have been assisting Indian businessmen to realize their ambition of company formation in<strong> Dubai</strong>. In order to position themselves for long-term growth and success while avoiding mistakes that could end up costing them time and money, WhiteWorth has been assisting<strong> international business owners</strong> with <strong>company formation in Dubai</strong> in the appropriate jurisdiction and with the appropriate company structure</p>
				<p>Warm regards,<br>Team, WhiteWorth<br><em></em>
				<p>Contact Us</p>
					Call Us: <a href="tel:+971585606800" data-mce-href="tel:+971585606800">+971585606800</a>&nbsp;|&nbsp; <a href="tel:+918882038525">+918882038525</a>  <br> <br>
					Site:<a href="https://test.legalraasta.com/whiteworth" data-mce-href="https://test.legalraasta.com/whiteworth">www.thewhiteworth.com</a><br> <br>
					Dubai Office :<a href="https://goo.gl/maps/T8roTQnp2RtndkPj6"> 801 (02), Latifa Towers, Sheikh Zayed Road , Dubai </a></p>
						
						<a href="https://www.facebook.com/WhiteWorth"
						data-mce-href="https://www.facebook.com/WhiteWorth">Facebook</a>&nbsp;|&nbsp;<a
						href="https://www.linkedin.com/company/80065080/admin/"
						data-mce-href="https://www.linkedin.com/company/80065080/admin/">Linkedin</a>&nbsp;|&nbsp;<a
						href="https://twitter.com/thewhiteworth"
						data-mce-href="https://twitter.com/thewhiteworth">Twitter</a>&nbsp;|&nbsp;<a
						href="https://in.pinterest.com/whiteworthAdvisors/"
						data-mce-href="https://in.pinterest.com/whiteworthAdvisors/">Pinterest</a></p>
			</div>
		</body>
			</html>';

		}else if(isset($_POST['service_code']) && $service_code == '008') {
			$Body='<html>
			<body>
			<div>Dear '.$_POST['name'].'
				<p>We wanted to take a moment to thank you for choosing our '. $service_name[$service_code].'. We appreciate the trust you have placed in Whiteworth, and we are committed to delivering the highest quality service in setting up your business in Dubai. Additionally, we also provide business setup services in Free Zone, Mainland and Offshore areas. <br>
				We are grateful for the opportunity to work with you and for the positive impact that our License services have had on your business. Your satisfaction is Whiteworth’s top priority, and we are dedicated to ensuring that you receive the best possible experience with our company. Click to know about our services and us</p>
			
				<p><strong>About Whiteworth:<br></strong>With over 5 years of experience in company formation in Dubai, we provide a one-stop-shop approach for quick business registration, offering complete services for all incorporation, licensing, and other associated services to<a href="https://test.legalraasta.com/whiteworth/freezone-mainland-uae.html"><strong> Free Zone,</strong></a> <a href="https://test.legalraasta.com/whiteworth/mainland-business-dubai.html"><strong>Mainland</strong></a> & <a href="https://test.legalraasta.com/whiteworth/offshore-company-formation-dubai-uae.html"><strong>offshore</strong></a></p>
				<p>With access to a top pool of chances, we have been assisting Indian businessmen to realize their ambition of company formation in<strong> Dubai</strong>. In order to position themselves for long-term growth and success while avoiding mistakes that could end up costing them time and money, WhiteWorth has been assisting<strong> international business owners</strong> with <strong>company formation in Dubai</strong> in the appropriate jurisdiction and with the appropriate company structure</p>
				<p>Warm regards,<br>Team, WhiteWorth<br><em></em>
				<p>Contact Us</p>
					Call Us: <a href="tel:+971585606800" data-mce-href="tel:+971585606800">+971585606800</a>&nbsp;|&nbsp; <a href="tel:+918882038525">+918882038525</a>  <br> <br>
					Site:<a href="https://test.legalraasta.com/whiteworth" data-mce-href="https://test.legalraasta.com/whiteworth">www.thewhiteworth.com</a><br> <br>
					Dubai Office :<a href="https://goo.gl/maps/T8roTQnp2RtndkPj6"> 801 (02), Latifa Towers, Sheikh Zayed Road , Dubai </a></p>
						
						<a href="https://www.facebook.com/WhiteWorth"
						data-mce-href="https://www.facebook.com/WhiteWorth">Facebook</a>&nbsp;|&nbsp;<a
						href="https://www.linkedin.com/company/80065080/admin/"
						data-mce-href="https://www.linkedin.com/company/80065080/admin/">Linkedin</a>&nbsp;|&nbsp;<a
						href="https://twitter.com/thewhiteworth"
						data-mce-href="https://twitter.com/thewhiteworth">Twitter</a>&nbsp;|&nbsp;<a
						href="https://in.pinterest.com/whiteworthAdvisors/"
						data-mce-href="https://in.pinterest.com/whiteworthAdvisors/">Pinterest</a></p>
			   </div>
		     </body>
		</html>';
		}else if(isset($_POST['service_code']) && $service_code == '009') {
			$Body='<html>
			<body>
				<div>Dear '.$_POST['name'].'
					<p>We wanted to take a moment to thank you for choosing our '. $service_name[$service_code].'. We appreciate the trust you have placed in Whiteworth, and we are committed to delivering the highest quality service in setting up your business in Dubai. Additionally, we also provide business setup services in Free Zone, Mainland and Offshore areas. <br>
					We are grateful for the opportunity to work with you and for the positive impact that our License services have had on your business. Your satisfaction is Whiteworth’s top priority, and we are dedicated to ensuring that you receive the best possible experience with our company. Click to know about our services and us</p>
				
					<p><strong>About Whiteworth:<br></strong>With over 5 years of experience in company formation in Dubai, we provide a one-stop-shop approach for quick business registration, offering complete services for all incorporation, licensing, and other associated services to<a href="https://test.legalraasta.com/whiteworth/freezone-mainland-uae.html"><strong> Free Zone,</strong></a> <a href="https://test.legalraasta.com/whiteworth/mainland-business-dubai.html"><strong>Mainland</strong></a> & <a href="https://test.legalraasta.com/whiteworth/offshore-company-formation-dubai-uae.html"><strong>offshore</strong></a></p>
					<p>With access to a top pool of chances, we have been assisting Indian businessmen to realize their ambition of company formation in<strong> Dubai</strong>. In order to position themselves for long-term growth and success while avoiding mistakes that could end up costing them time and money, WhiteWorth has been assisting<strong> international business owners</strong> with <strong>company formation in Dubai</strong> in the appropriate jurisdiction and with the appropriate company structure</p>
					<p>Warm regards,<br>Team, WhiteWorth<br><em></em>
					<p>Contact Us</p>
						Call Us: <a href="tel:+971585606800" data-mce-href="tel:+971585606800">+971585606800</a>&nbsp;|&nbsp; <a href="tel:+918882038525">+918882038525</a>  <br> <br>
						Site:<a href="https://test.legalraasta.com/whiteworth" data-mce-href="https://test.legalraasta.com/whiteworth">www.thewhiteworth.com</a><br> <br>
						Dubai Office :<a href="https://goo.gl/maps/T8roTQnp2RtndkPj6"> 801 (02), Latifa Towers, Sheikh Zayed Road , Dubai </a></p>
							
							<a href="https://www.facebook.com/WhiteWorth"
							data-mce-href="https://www.facebook.com/WhiteWorth">Facebook</a>&nbsp;|&nbsp;<a
							href="https://www.linkedin.com/company/80065080/admin/"
							data-mce-href="https://www.linkedin.com/company/80065080/admin/">Linkedin</a>&nbsp;|&nbsp;<a
							href="https://twitter.com/thewhiteworth"
							data-mce-href="https://twitter.com/thewhiteworth">Twitter</a>&nbsp;|&nbsp;<a
							href="https://in.pinterest.com/whiteworthAdvisors/"
							data-mce-href="https://in.pinterest.com/whiteworthAdvisors/">Pinterest</a></p>
				</div>
			</body>
		</html>';
		}else if(isset($_POST['service_code']) && $service_code == '010') {
			$Body='<html>
			<body>
				<div>Dear '.$_POST['name'].'
					<p>We wanted to take a moment to thank you for choosing our '. $service_name[$service_code].'. We appreciate the trust you have placed in Whiteworth, and we are committed to delivering the highest quality service in setting up your business in Dubai. Additionally, we also provide business setup services in Free Zone, Mainland and Offshore areas. <br>
					We are grateful for the opportunity to work with you and for the positive impact that our License services have had on your business. Your satisfaction is Whiteworth’s top priority, and we are dedicated to ensuring that you receive the best possible experience with our company. Click to know about our services and us</p>
				
					<p><strong>About Whiteworth:<br></strong>With over 5 years of experience in company formation in Dubai, we provide a one-stop-shop approach for quick business registration, offering complete services for all incorporation, licensing, and other associated services to<a href="https://test.legalraasta.com/whiteworth/freezone-mainland-uae.html"><strong> Free Zone,</strong></a> <a href="https://test.legalraasta.com/whiteworth/mainland-business-dubai.html"><strong>Mainland</strong></a> & <a href="https://test.legalraasta.com/whiteworth/offshore-company-formation-dubai-uae.html"><strong>offshore</strong></a></p>
					<p>With access to a top pool of chances, we have been assisting Indian businessmen to realize their ambition of company formation in<strong> Dubai</strong>. In order to position themselves for long-term growth and success while avoiding mistakes that could end up costing them time and money, WhiteWorth has been assisting<strong> international business owners</strong> with <strong>company formation in Dubai</strong> in the appropriate jurisdiction and with the appropriate company structure</p>
					<p>Warm regards,<br>Team, WhiteWorth<br><em></em>
					<p>Contact Us</p>
						Call Us: <a href="tel:+971585606800" data-mce-href="tel:+971585606800">+971585606800</a>&nbsp;|&nbsp; <a href="tel:+918882038525">+918882038525</a>  <br> <br>
						Site:<a href="https://test.legalraasta.com/whiteworth" data-mce-href="https://test.legalraasta.com/whiteworth">www.thewhiteworth.com</a><br> <br>
						Dubai Office :<a href="https://goo.gl/maps/T8roTQnp2RtndkPj6"> 801 (02), Latifa Towers, Sheikh Zayed Road , Dubai </a></p>
							
							<a href="https://www.facebook.com/WhiteWorth"
							data-mce-href="https://www.facebook.com/WhiteWorth">Facebook</a>&nbsp;|&nbsp;<a
							href="https://www.linkedin.com/company/80065080/admin/"
							data-mce-href="https://www.linkedin.com/company/80065080/admin/">Linkedin</a>&nbsp;|&nbsp;<a
							href="https://twitter.com/thewhiteworth"
							data-mce-href="https://twitter.com/thewhiteworth">Twitter</a>&nbsp;|&nbsp;<a
							href="https://in.pinterest.com/whiteworthAdvisors/"
							data-mce-href="https://in.pinterest.com/whiteworthAdvisors/">Pinterest</a></p>
				</div>
			</body>
		</html>';
		}else if(isset($_POST['service_code']) && $service_code == '011') {
			$Body='<html>
			<body>
				<div>Dear '.$_POST['name'].'
					<p>We wanted to take a moment to thank you for choosing our '. $service_name[$service_code].'. We appreciate the trust you have placed in Whiteworth, and we are committed to delivering the highest quality service in setting up your business in Dubai. Additionally, we also provide business setup services in Free Zone, Mainland and Offshore areas. <br>
					We are grateful for the opportunity to work with you and for the positive impact that our License services have had on your business. Your satisfaction is Whiteworth’s top priority, and we are dedicated to ensuring that you receive the best possible experience with our company. Click to know about our services and us</p>
				
					<p><strong>About Whiteworth:<br></strong>With over 5 years of experience in company formation in Dubai, we provide a one-stop-shop approach for quick business registration, offering complete services for all incorporation, licensing, and other associated services to<a href="https://test.legalraasta.com/whiteworth/freezone-mainland-uae.html"><strong> Free Zone,</strong></a> <a href="https://test.legalraasta.com/whiteworth/mainland-business-dubai.html"><strong>Mainland</strong></a> & <a href="https://test.legalraasta.com/whiteworth/offshore-company-formation-dubai-uae.html"><strong>offshore</strong></a></p>
					<p>With access to a top pool of chances, we have been assisting Indian businessmen to realize their ambition of company formation in<strong> Dubai</strong>. In order to position themselves for long-term growth and success while avoiding mistakes that could end up costing them time and money, WhiteWorth has been assisting<strong> international business owners</strong> with <strong>company formation in Dubai</strong> in the appropriate jurisdiction and with the appropriate company structure</p>
					<p>Warm regards,<br>Team, WhiteWorth<br><em></em>
					<p>Contact Us</p>
						Call Us: <a href="tel:+971585606800" data-mce-href="tel:+971585606800">+971585606800</a>&nbsp;|&nbsp; <a href="tel:+918882038525">+918882038525</a>  <br> <br>
						Site:<a href="https://test.legalraasta.com/whiteworth" data-mce-href="https://test.legalraasta.com/whiteworth">www.thewhiteworth.com</a><br> <br>
						Dubai Office :<a href="https://goo.gl/maps/T8roTQnp2RtndkPj6"> 801 (02), Latifa Towers, Sheikh Zayed Road , Dubai </a></p>
							
							<a href="https://www.facebook.com/WhiteWorth"
							data-mce-href="https://www.facebook.com/WhiteWorth">Facebook</a>&nbsp;|&nbsp;<a
							href="https://www.linkedin.com/company/80065080/admin/"
							data-mce-href="https://www.linkedin.com/company/80065080/admin/">Linkedin</a>&nbsp;|&nbsp;<a
							href="https://twitter.com/thewhiteworth"
							data-mce-href="https://twitter.com/thewhiteworth">Twitter</a>&nbsp;|&nbsp;<a
							href="https://in.pinterest.com/whiteworthAdvisors/"
							data-mce-href="https://in.pinterest.com/whiteworthAdvisors/">Pinterest</a></p>
				</div>
			</body>
		</html>';
		}else if(isset($_POST['service_code']) && $service_code == '012') {
			$Body='<html>
			<body>
			<div>Dear '.$_POST['name'].'
				<p>We wanted to take a moment to thank you for choosing our '. $service_name[$service_code].'. We appreciate the trust you have placed in Whiteworth, and we are committed to delivering the highest quality service in setting up your business in Dubai. Additionally, we also provide business setup services in Free Zone, Mainland and Offshore areas. <br>
				We are grateful for the opportunity to work with you and for the positive impact that our License services have had on your business. Your satisfaction is Whiteworth’s top priority, and we are dedicated to ensuring that you receive the best possible experience with our company. Click to know about our services and us</p>
			
				<p><strong>About Whiteworth:<br></strong>With over 5 years of experience in company formation in Dubai, we provide a one-stop-shop approach for quick business registration, offering complete services for all incorporation, licensing, and other associated services to<a href="https://test.legalraasta.com/whiteworth/freezone-mainland-uae.html"><strong> Free Zone,</strong></a> <a href="https://test.legalraasta.com/whiteworth/mainland-business-dubai.html"><strong>Mainland</strong></a> & <a href="https://test.legalraasta.com/whiteworth/offshore-company-formation-dubai-uae.html"><strong>offshore</strong></a></p>
				<p>With access to a top pool of chances, we have been assisting Indian businessmen to realize their ambition of company formation in<strong> Dubai</strong>. In order to position themselves for long-term growth and success while avoiding mistakes that could end up costing them time and money, WhiteWorth has been assisting<strong> international business owners</strong> with <strong>company formation in Dubai</strong> in the appropriate jurisdiction and with the appropriate company structure</p>
				<p>Warm regards,<br>Team, WhiteWorth<br><em></em>
				<p>Contact Us</p>
					Call Us: <a href="tel:+971585606800" data-mce-href="tel:+971585606800">+971585606800</a>&nbsp;|&nbsp; <a href="tel:+918882038525">+918882038525</a>  <br> <br>
					Site:<a href="https://test.legalraasta.com/whiteworth" data-mce-href="https://test.legalraasta.com/whiteworth">www.thewhiteworth.com</a><br> <br>
					Dubai Office :<a href="https://goo.gl/maps/T8roTQnp2RtndkPj6"> 801 (02), Latifa Towers, Sheikh Zayed Road , Dubai </a></p>
						
						<a href="https://www.facebook.com/WhiteWorth"
						data-mce-href="https://www.facebook.com/WhiteWorth">Facebook</a>&nbsp;|&nbsp;<a
						href="https://www.linkedin.com/company/80065080/admin/"
						data-mce-href="https://www.linkedin.com/company/80065080/admin/">Linkedin</a>&nbsp;|&nbsp;<a
						href="https://twitter.com/thewhiteworth"
						data-mce-href="https://twitter.com/thewhiteworth">Twitter</a>&nbsp;|&nbsp;<a
						href="https://in.pinterest.com/whiteworthAdvisors/"
						data-mce-href="https://in.pinterest.com/whiteworthAdvisors/">Pinterest</a></p>
			</div>
		  </body>
		</html>';
		}else if(isset($_POST['service_code']) && $service_code == '013') {
			$Body='<html>
			<body>
				<div>Dear '.$_POST['name'].'
					<p>We wanted to take a moment to thank you for choosing our '. $service_name[$service_code].'. We appreciate the trust you have placed in Whiteworth, and we are committed to delivering the highest quality service in setting up your business in Dubai. Additionally, we also provide business setup services in Free Zone, Mainland and Offshore areas. <br>
					We are grateful for the opportunity to work with you and for the positive impact that our License services have had on your business. Your satisfaction is Whiteworth’s top priority, and we are dedicated to ensuring that you receive the best possible experience with our company. Click to know about our services and us</p>
				
					<p><strong>About Whiteworth:<br></strong>With over 5 years of experience in company formation in Dubai, we provide a one-stop-shop approach for quick business registration, offering complete services for all incorporation, licensing, and other associated services to<a href="https://test.legalraasta.com/whiteworth/freezone-mainland-uae.html"><strong> Free Zone,</strong></a> <a href="https://test.legalraasta.com/whiteworth/mainland-business-dubai.html"><strong>Mainland</strong></a> & <a href="https://test.legalraasta.com/whiteworth/offshore-company-formation-dubai-uae.html"><strong>offshore</strong></a></p>
					<p>With access to a top pool of chances, we have been assisting Indian businessmen to realize their ambition of company formation in<strong> Dubai</strong>. In order to position themselves for long-term growth and success while avoiding mistakes that could end up costing them time and money, WhiteWorth has been assisting<strong> international business owners</strong> with <strong>company formation in Dubai</strong> in the appropriate jurisdiction and with the appropriate company structure</p>
					<p>Warm regards,<br>Team, WhiteWorth<br><em></em>
					<p>Contact Us</p>
						Call Us: <a href="tel:+971585606800" data-mce-href="tel:+971585606800">+971585606800</a>&nbsp;|&nbsp; <a href="tel:+918882038525">+918882038525</a>  <br> <br>
						Site:<a href="https://test.legalraasta.com/whiteworth" data-mce-href="https://test.legalraasta.com/whiteworth">www.thewhiteworth.com</a><br> <br>
						Dubai Office :<a href="https://goo.gl/maps/T8roTQnp2RtndkPj6"> 801 (02), Latifa Towers, Sheikh Zayed Road , Dubai </a></p>
							
							<a href="https://www.facebook.com/WhiteWorth"
							data-mce-href="https://www.facebook.com/WhiteWorth">Facebook</a>&nbsp;|&nbsp;<a
							href="https://www.linkedin.com/company/80065080/admin/"
							data-mce-href="https://www.linkedin.com/company/80065080/admin/">Linkedin</a>&nbsp;|&nbsp;<a
							href="https://twitter.com/thewhiteworth"
							data-mce-href="https://twitter.com/thewhiteworth">Twitter</a>&nbsp;|&nbsp;<a
							href="https://in.pinterest.com/whiteworthAdvisors/"
							data-mce-href="https://in.pinterest.com/whiteworthAdvisors/">Pinterest</a></p>
				</div>
			</body>
		</html>';
		}else if(isset($_POST['service_code']) && $service_code == '014') {
			$Body='<html>
			<body>
				<div>Dear '.$_POST['name'].'
					<p>We wanted to take a moment to thank you for choosing our '. $service_name[$service_code].'. We appreciate the trust you have placed in Whiteworth, and we are committed to delivering the highest quality service in setting up your business in Dubai. Additionally, we also provide business setup services in Free Zone, Mainland and Offshore areas. <br>
					We are grateful for the opportunity to work with you and for the positive impact that our License services have had on your business. Your satisfaction is Whiteworth’s top priority, and we are dedicated to ensuring that you receive the best possible experience with our company. Click to know about our services and us</p>
				
					<p><strong>About Whiteworth:<br></strong>With over 5 years of experience in company formation in Dubai, we provide a one-stop-shop approach for quick business registration, offering complete services for all incorporation, licensing, and other associated services to<a href="https://test.legalraasta.com/whiteworth/freezone-mainland-uae.html"><strong> Free Zone,</strong></a> <a href="https://test.legalraasta.com/whiteworth/mainland-business-dubai.html"><strong>Mainland</strong></a> & <a href="https://test.legalraasta.com/whiteworth/offshore-company-formation-dubai-uae.html"><strong>offshore</strong></a></p>
					<p>With access to a top pool of chances, we have been assisting Indian businessmen to realize their ambition of company formation in<strong> Dubai</strong>. In order to position themselves for long-term growth and success while avoiding mistakes that could end up costing them time and money, WhiteWorth has been assisting<strong> international business owners</strong> with <strong>company formation in Dubai</strong> in the appropriate jurisdiction and with the appropriate company structure</p>
					<p>Warm regards,<br>Team, WhiteWorth<br><em></em>
					<p>Contact Us</p>
						Call Us: <a href="tel:+971585606800" data-mce-href="tel:+971585606800">+971585606800</a>&nbsp;|&nbsp; <a href="tel:+918882038525">+918882038525</a>  <br> <br>
						Site:<a href="https://test.legalraasta.com/whiteworth" data-mce-href="https://test.legalraasta.com/whiteworth">www.thewhiteworth.com</a><br> <br>
						Dubai Office :<a href="https://goo.gl/maps/T8roTQnp2RtndkPj6"> 801 (02), Latifa Towers, Sheikh Zayed Road , Dubai </a></p>
							
							<a href="https://www.facebook.com/WhiteWorth"
							data-mce-href="https://www.facebook.com/WhiteWorth">Facebook</a>&nbsp;|&nbsp;<a
							href="https://www.linkedin.com/company/80065080/admin/"
							data-mce-href="https://www.linkedin.com/company/80065080/admin/">Linkedin</a>&nbsp;|&nbsp;<a
							href="https://twitter.com/thewhiteworth"
							data-mce-href="https://twitter.com/thewhiteworth">Twitter</a>&nbsp;|&nbsp;<a
							href="https://in.pinterest.com/whiteworthAdvisors/"
							data-mce-href="https://in.pinterest.com/whiteworthAdvisors/">Pinterest</a></p>
				</div>
			</body>
		</html>';
		}else if(isset($_POST['service_code']) && $service_code == '015') {
			$Body='<html>
			<body>
				<div>Dear '.$_POST['name'].'
					<p>We wanted to take a moment to thank you for choosing our '. $service_name[$service_code].'. We appreciate the trust you have placed in Whiteworth, and we are committed to delivering the highest quality service in setting up your business in Dubai. Additionally, we also provide business setup services in Free Zone, Mainland and Offshore areas. <br>
					We are grateful for the opportunity to work with you and for the positive impact that our License services have had on your business. Your satisfaction is Whiteworth’s top priority, and we are dedicated to ensuring that you receive the best possible experience with our company. Click to know about our services and us</p>
				
					<p><strong>About Whiteworth:<br></strong>With over 5 years of experience in company formation in Dubai, we provide a one-stop-shop approach for quick business registration, offering complete services for all incorporation, licensing, and other associated services to<a href="https://test.legalraasta.com/whiteworth/freezone-mainland-uae.html"><strong> Free Zone,</strong></a> <a href="https://test.legalraasta.com/whiteworth/mainland-business-dubai.html"><strong>Mainland</strong></a> & <a href="https://test.legalraasta.com/whiteworth/offshore-company-formation-dubai-uae.html"><strong>offshore</strong></a></p>
					<p>With access to a top pool of chances, we have been assisting Indian businessmen to realize their ambition of company formation in<strong> Dubai</strong>. In order to position themselves for long-term growth and success while avoiding mistakes that could end up costing them time and money, WhiteWorth has been assisting<strong> international business owners</strong> with <strong>company formation in Dubai</strong> in the appropriate jurisdiction and with the appropriate company structure</p>
					<p>Warm regards,<br>Team, WhiteWorth<br><em></em>
					<p>Contact Us</p>
						Call Us: <a href="tel:+971585606800" data-mce-href="tel:+971585606800">+971585606800</a>&nbsp;|&nbsp; <a href="tel:+918882038525">+918882038525</a>  <br> <br>
						Site:<a href="https://test.legalraasta.com/whiteworth" data-mce-href="https://test.legalraasta.com/whiteworth">www.thewhiteworth.com</a><br> <br>
						Dubai Office :<a href="https://goo.gl/maps/T8roTQnp2RtndkPj6"> 801 (02), Latifa Towers, Sheikh Zayed Road , Dubai </a></p>
							
							<a href="https://www.facebook.com/WhiteWorth"
							data-mce-href="https://www.facebook.com/WhiteWorth">Facebook</a>&nbsp;|&nbsp;<a
							href="https://www.linkedin.com/company/80065080/admin/"
							data-mce-href="https://www.linkedin.com/company/80065080/admin/">Linkedin</a>&nbsp;|&nbsp;<a
							href="https://twitter.com/thewhiteworth"
							data-mce-href="https://twitter.com/thewhiteworth">Twitter</a>&nbsp;|&nbsp;<a
							href="https://in.pinterest.com/whiteworthAdvisors/"
							data-mce-href="https://in.pinterest.com/whiteworthAdvisors/">Pinterest</a></p>
				</div>
			</body>
		</html>';
		}else if(isset($_POST['service_code']) && $service_code == '016') {
			$Body='<html>
			<body>
				<div>Dear '.$_POST['name'].'
					<p>We wanted to take a moment to thank you for choosing our '. $service_name[$service_code].'. We appreciate the trust you have placed in Whiteworth, and we are committed to delivering the highest quality service in setting up your business in Dubai. Additionally, we also provide business setup services in Free Zone, Mainland and Offshore areas. <br>
					We are grateful for the opportunity to work with you and for the positive impact that our License services have had on your business. Your satisfaction is Whiteworth’s top priority, and we are dedicated to ensuring that you receive the best possible experience with our company. Click to know about our services and us</p>
				
					<p><strong>About Whiteworth:<br></strong>With over 5 years of experience in company formation in Dubai, we provide a one-stop-shop approach for quick business registration, offering complete services for all incorporation, licensing, and other associated services to<a href="https://test.legalraasta.com/whiteworth/freezone-mainland-uae.html"><strong> Free Zone,</strong></a> <a href="https://test.legalraasta.com/whiteworth/mainland-business-dubai.html"><strong>Mainland</strong></a> & <a href="https://test.legalraasta.com/whiteworth/offshore-company-formation-dubai-uae.html"><strong>offshore</strong></a></p>
					<p>With access to a top pool of chances, we have been assisting Indian businessmen to realize their ambition of company formation in<strong> Dubai</strong>. In order to position themselves for long-term growth and success while avoiding mistakes that could end up costing them time and money, WhiteWorth has been assisting<strong> international business owners</strong> with <strong>company formation in Dubai</strong> in the appropriate jurisdiction and with the appropriate company structure</p>
					<p>Warm regards,<br>Team, WhiteWorth<br><em></em>
					<p>Contact Us</p>
						Call Us: <a href="tel:+971585606800" data-mce-href="tel:+971585606800">+971585606800</a>&nbsp;|&nbsp; <a href="tel:+918882038525">+918882038525</a>  <br> <br>
						Site:<a href="https://test.legalraasta.com/whiteworth" data-mce-href="https://test.legalraasta.com/whiteworth">www.thewhiteworth.com</a><br> <br>
						Dubai Office :<a href="https://goo.gl/maps/T8roTQnp2RtndkPj6"> 801 (02), Latifa Towers, Sheikh Zayed Road , Dubai </a></p>
							
							<a href="https://www.facebook.com/WhiteWorth"
							data-mce-href="https://www.facebook.com/WhiteWorth">Facebook</a>&nbsp;|&nbsp;<a
							href="https://www.linkedin.com/company/80065080/admin/"
							data-mce-href="https://www.linkedin.com/company/80065080/admin/">Linkedin</a>&nbsp;|&nbsp;<a
							href="https://twitter.com/thewhiteworth"
							data-mce-href="https://twitter.com/thewhiteworth">Twitter</a>&nbsp;|&nbsp;<a
							href="https://in.pinterest.com/whiteworthAdvisors/"
							data-mce-href="https://in.pinterest.com/whiteworthAdvisors/">Pinterest</a></p>
				</div>
			</body>
		</html>';			
		}else if(isset($_POST['service_code']) && $service_code == '017') {
			$Body='<html>
			<body>
				<div>Dear '.$_POST['name'].'
					<p>We wanted to take a moment to thank you for choosing our '. $service_name[$service_code].'. We appreciate the trust you have placed in Whiteworth, and we are committed to delivering the highest quality service in setting up your business in Dubai. Additionally, we also provide business setup services in Free Zone, Mainland and Offshore areas. <br>
					We are grateful for the opportunity to work with you and for the positive impact that our License services have had on your business. Your satisfaction is Whiteworth’s top priority, and we are dedicated to ensuring that you receive the best possible experience with our company. Click to know about our services and us</p>
				
					<p><strong>About Whiteworth:<br></strong>With over 5 years of experience in company formation in Dubai, we provide a one-stop-shop approach for quick business registration, offering complete services for all incorporation, licensing, and other associated services to<a href="https://test.legalraasta.com/whiteworth/freezone-mainland-uae.html"><strong> Free Zone,</strong></a> <a href="https://test.legalraasta.com/whiteworth/mainland-business-dubai.html"><strong>Mainland</strong></a> & <a href="https://test.legalraasta.com/whiteworth/offshore-company-formation-dubai-uae.html"><strong>offshore</strong></a></p>
					<p>With access to a top pool of chances, we have been assisting Indian businessmen to realize their ambition of company formation in<strong> Dubai</strong>. In order to position themselves for long-term growth and success while avoiding mistakes that could end up costing them time and money, WhiteWorth has been assisting<strong> international business owners</strong> with <strong>company formation in Dubai</strong> in the appropriate jurisdiction and with the appropriate company structure</p>
					<p>Warm regards,<br>Team, WhiteWorth<br><em></em>
					<p>Contact Us</p>
						Call Us: <a href="tel:+971585606800" data-mce-href="tel:+971585606800">+971585606800</a>&nbsp;|&nbsp; <a href="tel:+918882038525">+918882038525</a>  <br> <br>
						Site:<a href="https://test.legalraasta.com/whiteworth" data-mce-href="https://test.legalraasta.com/whiteworth">www.thewhiteworth.com</a><br> <br>
						Dubai Office :<a href="https://goo.gl/maps/T8roTQnp2RtndkPj6"> 801 (02), Latifa Towers, Sheikh Zayed Road , Dubai </a></p>
							
							<a href="https://www.facebook.com/WhiteWorth"
							data-mce-href="https://www.facebook.com/WhiteWorth">Facebook</a>&nbsp;|&nbsp;<a
							href="https://www.linkedin.com/company/80065080/admin/"
							data-mce-href="https://www.linkedin.com/company/80065080/admin/">Linkedin</a>&nbsp;|&nbsp;<a
							href="https://twitter.com/thewhiteworth"
							data-mce-href="https://twitter.com/thewhiteworth">Twitter</a>&nbsp;|&nbsp;<a
							href="https://in.pinterest.com/whiteworthAdvisors/"
							data-mce-href="https://in.pinterest.com/whiteworthAdvisors/">Pinterest</a></p>
				</div>
			</body>
		</html>';			
		}else if(isset($_POST['service_code']) && $service_code == '018') {
			$Body='<html>
			<body>
				<div>Dear '.$_POST['name'].'
					<p>We wanted to take a moment to thank you for choosing our '. $service_name[$service_code].'. We appreciate the trust you have placed in Whiteworth, and we are committed to delivering the highest quality service in setting up your business in Dubai. Additionally, we also provide business setup services in Free Zone, Mainland and Offshore areas. <br>
					We are grateful for the opportunity to work with you and for the positive impact that our License services have had on your business. Your satisfaction is Whiteworth’s top priority, and we are dedicated to ensuring that you receive the best possible experience with our company. Click to know about our services and us</p>
				
					<p><strong>About Whiteworth:<br></strong>With over 5 years of experience in company formation in Dubai, we provide a one-stop-shop approach for quick business registration, offering complete services for all incorporation, licensing, and other associated services to<a href="https://test.legalraasta.com/whiteworth/freezone-mainland-uae.html"><strong> Free Zone,</strong></a> <a href="https://test.legalraasta.com/whiteworth/mainland-business-dubai.html"><strong>Mainland</strong></a> & <a href="https://test.legalraasta.com/whiteworth/offshore-company-formation-dubai-uae.html"><strong>offshore</strong></a></p>
					<p>With access to a top pool of chances, we have been assisting Indian businessmen to realize their ambition of company formation in<strong> Dubai</strong>. In order to position themselves for long-term growth and success while avoiding mistakes that could end up costing them time and money, WhiteWorth has been assisting<strong> international business owners</strong> with <strong>company formation in Dubai</strong> in the appropriate jurisdiction and with the appropriate company structure</p>
					<p>Warm regards,<br>Team, WhiteWorth<br><em></em>
					<p>Contact Us</p>
						Call Us: <a href="tel:+971585606800" data-mce-href="tel:+971585606800">+971585606800</a>&nbsp;|&nbsp; <a href="tel:+918882038525">+918882038525</a>  <br> <br>
						Site:<a href="https://test.legalraasta.com/whiteworth" data-mce-href="https://test.legalraasta.com/whiteworth">www.thewhiteworth.com</a><br> <br>
						Dubai Office :<a href="https://goo.gl/maps/T8roTQnp2RtndkPj6"> 801 (02), Latifa Towers, Sheikh Zayed Road , Dubai </a></p>
							
							<a href="https://www.facebook.com/WhiteWorth"
							data-mce-href="https://www.facebook.com/WhiteWorth">Facebook</a>&nbsp;|&nbsp;<a
							href="https://www.linkedin.com/company/80065080/admin/"
							data-mce-href="https://www.linkedin.com/company/80065080/admin/">Linkedin</a>&nbsp;|&nbsp;<a
							href="https://twitter.com/thewhiteworth"
							data-mce-href="https://twitter.com/thewhiteworth">Twitter</a>&nbsp;|&nbsp;<a
							href="https://in.pinterest.com/whiteworthAdvisors/"
							data-mce-href="https://in.pinterest.com/whiteworthAdvisors/">Pinterest</a></p>
				</div>
			</body>
		</html>';
		}else if(isset($_POST['service_code']) && $service_code == '019') {
			$Body='<html>
			<body>
				<div>Dear '.$_POST['name'].'
					<p>We wanted to take a moment to thank you for choosing our '. $service_name[$service_code].'. We appreciate the trust you have placed in Whiteworth, and we are committed to delivering the highest quality service in setting up your business in Dubai. Additionally, we also provide business setup services in Free Zone, Mainland and Offshore areas. <br>
					We are grateful for the opportunity to work with you and for the positive impact that our License services have had on your business. Your satisfaction is Whiteworth’s top priority, and we are dedicated to ensuring that you receive the best possible experience with our company. Click to know about our services and us</p>
				
					<p><strong>About Whiteworth:<br></strong>With over 5 years of experience in company formation in Dubai, we provide a one-stop-shop approach for quick business registration, offering complete services for all incorporation, licensing, and other associated services to<a href="https://test.legalraasta.com/whiteworth/freezone-mainland-uae.html"><strong> Free Zone,</strong></a> <a href="https://test.legalraasta.com/whiteworth/mainland-business-dubai.html"><strong>Mainland</strong></a> & <a href="https://test.legalraasta.com/whiteworth/offshore-company-formation-dubai-uae.html"><strong>offshore</strong></a></p>
					<p>With access to a top pool of chances, we have been assisting Indian businessmen to realize their ambition of company formation in<strong> Dubai</strong>. In order to position themselves for long-term growth and success while avoiding mistakes that could end up costing them time and money, WhiteWorth has been assisting<strong> international business owners</strong> with <strong>company formation in Dubai</strong> in the appropriate jurisdiction and with the appropriate company structure</p>
					<p>Warm regards,<br>Team, WhiteWorth<br><em></em>
					<p>Contact Us</p>
						Call Us: <a href="tel:+971585606800" data-mce-href="tel:+971585606800">+971585606800</a>&nbsp;|&nbsp; <a href="tel:+918882038525">+918882038525</a>  <br> <br>
						Site:<a href="https://test.legalraasta.com/whiteworth" data-mce-href="https://test.legalraasta.com/whiteworth">www.thewhiteworth.com</a><br> <br>
						Dubai Office :<a href="https://goo.gl/maps/T8roTQnp2RtndkPj6"> 801 (02), Latifa Towers, Sheikh Zayed Road , Dubai </a></p>
							
							<a href="https://www.facebook.com/WhiteWorth"
							data-mce-href="https://www.facebook.com/WhiteWorth">Facebook</a>&nbsp;|&nbsp;<a
							href="https://www.linkedin.com/company/80065080/admin/"
							data-mce-href="https://www.linkedin.com/company/80065080/admin/">Linkedin</a>&nbsp;|&nbsp;<a
							href="https://twitter.com/thewhiteworth"
							data-mce-href="https://twitter.com/thewhiteworth">Twitter</a>&nbsp;|&nbsp;<a
							href="https://in.pinterest.com/whiteworthAdvisors/"
							data-mce-href="https://in.pinterest.com/whiteworthAdvisors/">Pinterest</a></p>
				</div>
			</body>
		</html>';
		}else if(isset($_POST['service_code']) && $service_code == '020') {
			$Body='<html>
			<body>
				<div>Dear '.$_POST['name'].'
					<p>We wanted to take a moment to thank you for choosing our '. $service_name[$service_code].'. We appreciate the trust you have placed in Whiteworth, and we are committed to delivering the highest quality service in setting up your business in Dubai. Additionally, we also provide business setup services in Free Zone, Mainland and Offshore areas. <br>
					We are grateful for the opportunity to work with you and for the positive impact that our License services have had on your business. Your satisfaction is Whiteworth’s top priority, and we are dedicated to ensuring that you receive the best possible experience with our company. Click to know about our services and us</p>
				
					<p><strong>About Whiteworth:<br></strong>With over 5 years of experience in company formation in Dubai, we provide a one-stop-shop approach for quick business registration, offering complete services for all incorporation, licensing, and other associated services to<a href="https://test.legalraasta.com/whiteworth/freezone-mainland-uae.html"><strong> Free Zone,</strong></a> <a href="https://test.legalraasta.com/whiteworth/mainland-business-dubai.html"><strong>Mainland</strong></a> & <a href="https://test.legalraasta.com/whiteworth/offshore-company-formation-dubai-uae.html"><strong>offshore</strong></a></p>
					<p>With access to a top pool of chances, we have been assisting Indian businessmen to realize their ambition of company formation in<strong> Dubai</strong>. In order to position themselves for long-term growth and success while avoiding mistakes that could end up costing them time and money, WhiteWorth has been assisting<strong> international business owners</strong> with <strong>company formation in Dubai</strong> in the appropriate jurisdiction and with the appropriate company structure</p>
					<p>Warm regards,<br>Team, WhiteWorth<br><em></em>
					<p>Contact Us</p>
						Call Us: <a href="tel:+971585606800" data-mce-href="tel:+971585606800">+971585606800</a>&nbsp;|&nbsp; <a href="tel:+918882038525">+918882038525</a>  <br> <br>
						Site:<a href="https://test.legalraasta.com/whiteworth" data-mce-href="https://test.legalraasta.com/whiteworth">www.thewhiteworth.com</a><br> <br>
						Dubai Office :<a href="https://goo.gl/maps/T8roTQnp2RtndkPj6"> 801 (02), Latifa Towers, Sheikh Zayed Road , Dubai </a></p>
							
							<a href="https://www.facebook.com/WhiteWorth"
							data-mce-href="https://www.facebook.com/WhiteWorth">Facebook</a>&nbsp;|&nbsp;<a
							href="https://www.linkedin.com/company/80065080/admin/"
							data-mce-href="https://www.linkedin.com/company/80065080/admin/">Linkedin</a>&nbsp;|&nbsp;<a
							href="https://twitter.com/thewhiteworth"
							data-mce-href="https://twitter.com/thewhiteworth">Twitter</a>&nbsp;|&nbsp;<a
							href="https://in.pinterest.com/whiteworthAdvisors/"
							data-mce-href="https://in.pinterest.com/whiteworthAdvisors/">Pinterest</a></p>
				</div>
			</body>
		</html>';
		}else if(isset($_POST['service_code']) && $service_code == '021') {
			$Body='<html>
			<body>
				<div>Dear '.$_POST['name'].'
					<p>We wanted to take a moment to thank you for choosing our '. $service_name[$service_code].'. We appreciate the trust you have placed in Whiteworth, and we are committed to delivering the highest quality service in setting up your business in Dubai. Additionally, we also provide business setup services in Free Zone, Mainland and Offshore areas. <br>
					We are grateful for the opportunity to work with you and for the positive impact that our License services have had on your business. Your satisfaction is Whiteworth’s top priority, and we are dedicated to ensuring that you receive the best possible experience with our company. Click to know about our services and us</p>
				
					<p><strong>About Whiteworth:<br></strong>With over 5 years of experience in company formation in Dubai, we provide a one-stop-shop approach for quick business registration, offering complete services for all incorporation, licensing, and other associated services to<a href="https://test.legalraasta.com/whiteworth/freezone-mainland-uae.html"><strong> Free Zone,</strong></a> <a href="https://test.legalraasta.com/whiteworth/mainland-business-dubai.html"><strong>Mainland</strong></a> & <a href="https://test.legalraasta.com/whiteworth/offshore-company-formation-dubai-uae.html"><strong>offshore</strong></a></p>
					<p>With access to a top pool of chances, we have been assisting Indian businessmen to realize their ambition of company formation in<strong> Dubai</strong>. In order to position themselves for long-term growth and success while avoiding mistakes that could end up costing them time and money, WhiteWorth has been assisting<strong> international business owners</strong> with <strong>company formation in Dubai</strong> in the appropriate jurisdiction and with the appropriate company structure</p>
					<p>Warm regards,<br>Team, WhiteWorth<br><em></em>
					<p>Contact Us</p>
						Call Us: <a href="tel:+971585606800" data-mce-href="tel:+971585606800">+971585606800</a>&nbsp;|&nbsp; <a href="tel:+918882038525">+918882038525</a>  <br> <br>
						Site:<a href="https://test.legalraasta.com/whiteworth" data-mce-href="https://test.legalraasta.com/whiteworth">www.thewhiteworth.com</a><br> <br>
						Dubai Office :<a href="https://goo.gl/maps/T8roTQnp2RtndkPj6"> 801 (02), Latifa Towers, Sheikh Zayed Road , Dubai </a></p>
							
							<a href="https://www.facebook.com/WhiteWorth"
							data-mce-href="https://www.facebook.com/WhiteWorth">Facebook</a>&nbsp;|&nbsp;<a
							href="https://www.linkedin.com/company/80065080/admin/"
							data-mce-href="https://www.linkedin.com/company/80065080/admin/">Linkedin</a>&nbsp;|&nbsp;<a
							href="https://twitter.com/thewhiteworth"
							data-mce-href="https://twitter.com/thewhiteworth">Twitter</a>&nbsp;|&nbsp;<a
							href="https://in.pinterest.com/whiteworthAdvisors/"
							data-mce-href="https://in.pinterest.com/whiteworthAdvisors/">Pinterest</a></p>
				</div>
			</body>
		</html>';
		}else if(isset($_POST['service_code']) && $service_code == '022') {
			$Body='<html>
			<body>
				<div>Dear '.$_POST['name'].'
					<p>We wanted to take a moment to thank you for choosing our '. $service_name[$service_code].'. We appreciate the trust you have placed in Whiteworth, and we are committed to delivering the highest quality service in setting up your business in Dubai. Additionally, we also provide business setup services in Free Zone, Mainland and Offshore areas. <br>
					We are grateful for the opportunity to work with you and for the positive impact that our License services have had on your business. Your satisfaction is Whiteworth’s top priority, and we are dedicated to ensuring that you receive the best possible experience with our company. Click to know about our services and us</p>
				
					<p><strong>About Whiteworth:<br></strong>With over 5 years of experience in company formation in Dubai, we provide a one-stop-shop approach for quick business registration, offering complete services for all incorporation, licensing, and other associated services to<a href="https://test.legalraasta.com/whiteworth/freezone-mainland-uae.html"><strong> Free Zone,</strong></a> <a href="https://test.legalraasta.com/whiteworth/mainland-business-dubai.html"><strong>Mainland</strong></a> & <a href="https://test.legalraasta.com/whiteworth/offshore-company-formation-dubai-uae.html"><strong>offshore</strong></a></p>
					<p>With access to a top pool of chances, we have been assisting Indian businessmen to realize their ambition of company formation in<strong> Dubai</strong>. In order to position themselves for long-term growth and success while avoiding mistakes that could end up costing them time and money, WhiteWorth has been assisting<strong> international business owners</strong> with <strong>company formation in Dubai</strong> in the appropriate jurisdiction and with the appropriate company structure</p>
					<p>Warm regards,<br>Team, WhiteWorth<br><em></em>
					<p>Contact Us</p>
						Call Us: <a href="tel:+971585606800" data-mce-href="tel:+971585606800">+971585606800</a>&nbsp;|&nbsp; <a href="tel:+918882038525">+918882038525</a>  <br> <br>
						Site:<a href="https://test.legalraasta.com/whiteworth" data-mce-href="https://test.legalraasta.com/whiteworth">www.thewhiteworth.com</a><br> <br>
						Dubai Office :<a href="https://goo.gl/maps/T8roTQnp2RtndkPj6"> 801 (02), Latifa Towers, Sheikh Zayed Road , Dubai </a></p>
							
							<a href="https://www.facebook.com/WhiteWorth"
							data-mce-href="https://www.facebook.com/WhiteWorth">Facebook</a>&nbsp;|&nbsp;<a
							href="https://www.linkedin.com/company/80065080/admin/"
							data-mce-href="https://www.linkedin.com/company/80065080/admin/">Linkedin</a>&nbsp;|&nbsp;<a
							href="https://twitter.com/thewhiteworth"
							data-mce-href="https://twitter.com/thewhiteworth">Twitter</a>&nbsp;|&nbsp;<a
							href="https://in.pinterest.com/whiteworthAdvisors/"
							data-mce-href="https://in.pinterest.com/whiteworthAdvisors/">Pinterest</a></p>
				</div>
			</body>
		</html>';
		}else if(isset($_POST['service_code']) && $service_code == '023') {
			$Body='<html>
			<body>
				<div>Dear '.$_POST['name'].'
					<p>We wanted to take a moment to thank you for choosing our '. $service_name[$service_code].'. We appreciate the trust you have placed in Whiteworth, and we are committed to delivering the highest quality service in setting up your business in Dubai. Additionally, we also provide business setup services in Free Zone, Mainland and Offshore areas. <br>
					We are grateful for the opportunity to work with you and for the positive impact that our License services have had on your business. Your satisfaction is Whiteworth’s top priority, and we are dedicated to ensuring that you receive the best possible experience with our company. Click to know about our services and us</p>
				
					<p><strong>About Whiteworth:<br></strong>With over 5 years of experience in company formation in Dubai, we provide a one-stop-shop approach for quick business registration, offering complete services for all incorporation, licensing, and other associated services to<a href="https://test.legalraasta.com/whiteworth/freezone-mainland-uae.html"><strong> Free Zone,</strong></a> <a href="https://test.legalraasta.com/whiteworth/mainland-business-dubai.html"><strong>Mainland</strong></a> & <a href="https://test.legalraasta.com/whiteworth/offshore-company-formation-dubai-uae.html"><strong>offshore</strong></a></p>
					<p>With access to a top pool of chances, we have been assisting Indian businessmen to realize their ambition of company formation in<strong> Dubai</strong>. In order to position themselves for long-term growth and success while avoiding mistakes that could end up costing them time and money, WhiteWorth has been assisting<strong> international business owners</strong> with <strong>company formation in Dubai</strong> in the appropriate jurisdiction and with the appropriate company structure</p>
					<p>Warm regards,<br>Team, WhiteWorth<br><em></em>
					<p>Contact Us</p>
						Call Us: <a href="tel:+971585606800" data-mce-href="tel:+971585606800">+971585606800</a>&nbsp;|&nbsp; <a href="tel:+918882038525">+918882038525</a>  <br> <br>
						Site:<a href="https://test.legalraasta.com/whiteworth" data-mce-href="https://test.legalraasta.com/whiteworth">www.thewhiteworth.com</a><br> <br>
						Dubai Office :<a href="https://goo.gl/maps/T8roTQnp2RtndkPj6"> 801 (02), Latifa Towers, Sheikh Zayed Road , Dubai </a></p>
							
							<a href="https://www.facebook.com/WhiteWorth"
							data-mce-href="https://www.facebook.com/WhiteWorth">Facebook</a>&nbsp;|&nbsp;<a
							href="https://www.linkedin.com/company/80065080/admin/"
							data-mce-href="https://www.linkedin.com/company/80065080/admin/">Linkedin</a>&nbsp;|&nbsp;<a
							href="https://twitter.com/thewhiteworth"
							data-mce-href="https://twitter.com/thewhiteworth">Twitter</a>&nbsp;|&nbsp;<a
							href="https://in.pinterest.com/whiteworthAdvisors/"
							data-mce-href="https://in.pinterest.com/whiteworthAdvisors/">Pinterest</a></p>
				</div>
			</body>
		</html>';
		}else if(isset($_POST['service_code']) && $service_code == '024') {
			$Body='<html>
			<body>
				<div>Dear '.$_POST['name'].'
					<p>We wanted to take a moment to thank you for choosing our '. $service_name[$service_code].'. We appreciate the trust you have placed in Whiteworth, and we are committed to delivering the highest quality service in setting up your business in Dubai. Additionally, we also provide business setup services in Free Zone, Mainland and Offshore areas. <br>
					We are grateful for the opportunity to work with you and for the positive impact that our License services have had on your business. Your satisfaction is Whiteworth’s top priority, and we are dedicated to ensuring that you receive the best possible experience with our company. Click to know about our services and us</p>
				
					<p><strong>About Whiteworth:<br></strong>With over 5 years of experience in company formation in Dubai, we provide a one-stop-shop approach for quick business registration, offering complete services for all incorporation, licensing, and other associated services to<a href="https://test.legalraasta.com/whiteworth/freezone-mainland-uae.html"><strong> Free Zone,</strong></a> <a href="https://test.legalraasta.com/whiteworth/mainland-business-dubai.html"><strong>Mainland</strong></a> & <a href="https://test.legalraasta.com/whiteworth/offshore-company-formation-dubai-uae.html"><strong>offshore</strong></a></p>
					<p>With access to a top pool of chances, we have been assisting Indian businessmen to realize their ambition of company formation in<strong> Dubai</strong>. In order to position themselves for long-term growth and success while avoiding mistakes that could end up costing them time and money, WhiteWorth has been assisting<strong> international business owners</strong> with <strong>company formation in Dubai</strong> in the appropriate jurisdiction and with the appropriate company structure</p>
					<p>Warm regards,<br>Team, WhiteWorth<br><em></em>
					<p>Contact Us</p>
						Call Us: <a href="tel:+971585606800" data-mce-href="tel:+971585606800">+971585606800</a>&nbsp;|&nbsp; <a href="tel:+918882038525">+918882038525</a>  <br> <br>
						Site:<a href="https://test.legalraasta.com/whiteworth" data-mce-href="https://test.legalraasta.com/whiteworth">www.thewhiteworth.com</a><br> <br>
						Dubai Office :<a href="https://goo.gl/maps/T8roTQnp2RtndkPj6"> 801 (02), Latifa Towers, Sheikh Zayed Road , Dubai </a></p>
							
							<a href="https://www.facebook.com/WhiteWorth"
							data-mce-href="https://www.facebook.com/WhiteWorth">Facebook</a>&nbsp;|&nbsp;<a
							href="https://www.linkedin.com/company/80065080/admin/"
							data-mce-href="https://www.linkedin.com/company/80065080/admin/">Linkedin</a>&nbsp;|&nbsp;<a
							href="https://twitter.com/thewhiteworth"
							data-mce-href="https://twitter.com/thewhiteworth">Twitter</a>&nbsp;|&nbsp;<a
							href="https://in.pinterest.com/whiteworthAdvisors/"
							data-mce-href="https://in.pinterest.com/whiteworthAdvisors/">Pinterest</a></p>
				</div>
			</body>
		</html>';
		}else if(isset($_POST['service_code']) && $service_code == '025') {
			$Body='<html>
			<body>
				<div>Dear '.$_POST['name'].'
					<p>We wanted to take a moment to thank you for choosing our '. $service_name[$service_code].'. We appreciate the trust you have placed in Whiteworth, and we are committed to delivering the highest quality service in setting up your business in Dubai. Additionally, we also provide business setup services in Free Zone, Mainland and Offshore areas. <br>
					We are grateful for the opportunity to work with you and for the positive impact that our License services have had on your business. Your satisfaction is Whiteworth’s top priority, and we are dedicated to ensuring that you receive the best possible experience with our company. Click to know about our services and us</p>
				
					<p><strong>About Whiteworth:<br></strong>With over 5 years of experience in company formation in Dubai, we provide a one-stop-shop approach for quick business registration, offering complete services for all incorporation, licensing, and other associated services to<a href="https://test.legalraasta.com/whiteworth/freezone-mainland-uae.html"><strong> Free Zone,</strong></a> <a href="https://test.legalraasta.com/whiteworth/mainland-business-dubai.html"><strong>Mainland</strong></a> & <a href="https://test.legalraasta.com/whiteworth/offshore-company-formation-dubai-uae.html"><strong>offshore</strong></a></p>
					<p>With access to a top pool of chances, we have been assisting Indian businessmen to realize their ambition of company formation in<strong> Dubai</strong>. In order to position themselves for long-term growth and success while avoiding mistakes that could end up costing them time and money, WhiteWorth has been assisting<strong> international business owners</strong> with <strong>company formation in Dubai</strong> in the appropriate jurisdiction and with the appropriate company structure</p>
					<p>Warm regards,<br>Team, WhiteWorth<br><em></em>
					<p>Contact Us</p>
						Call Us: <a href="tel:+971585606800" data-mce-href="tel:+971585606800">+971585606800</a>&nbsp;|&nbsp; <a href="tel:+918882038525">+918882038525</a>  <br> <br>
						Site:<a href="https://test.legalraasta.com/whiteworth" data-mce-href="https://test.legalraasta.com/whiteworth">www.thewhiteworth.com</a><br> <br>
						Dubai Office :<a href="https://goo.gl/maps/T8roTQnp2RtndkPj6"> 801 (02), Latifa Towers, Sheikh Zayed Road , Dubai </a></p>
							
							<a href="https://www.facebook.com/WhiteWorth"
							data-mce-href="https://www.facebook.com/WhiteWorth">Facebook</a>&nbsp;|&nbsp;<a
							href="https://www.linkedin.com/company/80065080/admin/"
							data-mce-href="https://www.linkedin.com/company/80065080/admin/">Linkedin</a>&nbsp;|&nbsp;<a
							href="https://twitter.com/thewhiteworth"
							data-mce-href="https://twitter.com/thewhiteworth">Twitter</a>&nbsp;|&nbsp;<a
							href="https://in.pinterest.com/whiteworthAdvisors/"
							data-mce-href="https://in.pinterest.com/whiteworthAdvisors/">Pinterest</a></p>
				</div>
			</body>
		</html>';
		}else if(isset($_POST['service_code']) && $service_code == '026') {
			
			$Body='<html>
			<body>
				<div>Dear '.$_POST['name'].'
					<p>We wanted to take a moment to thank you for choosing our '. $service_name[$service_code].'. We appreciate the trust you have placed in Whiteworth, and we are committed to delivering the highest quality service in setting up your business in Dubai. Additionally, we also provide business setup services in Free Zone, Mainland and Offshore areas. <br>
					We are grateful for the opportunity to work with you and for the positive impact that our License services have had on your business. Your satisfaction is Whiteworth’s top priority, and we are dedicated to ensuring that you receive the best possible experience with our company. Click to know about our services and us</p>
				
					<p><strong>About Whiteworth:<br></strong>With over 5 years of experience in company formation in Dubai, we provide a one-stop-shop approach for quick business registration, offering complete services for all incorporation, licensing, and other associated services to<a href="https://test.legalraasta.com/whiteworth/freezone-mainland-uae.html"><strong> Free Zone,</strong></a> <a href="https://test.legalraasta.com/whiteworth/mainland-business-dubai.html"><strong>Mainland</strong></a> & <a href="https://test.legalraasta.com/whiteworth/offshore-company-formation-dubai-uae.html"><strong>offshore</strong></a></p>
					<p>With access to a top pool of chances, we have been assisting Indian businessmen to realize their ambition of company formation in<strong> Dubai</strong>. In order to position themselves for long-term growth and success while avoiding mistakes that could end up costing them time and money, WhiteWorth has been assisting<strong> international business owners</strong> with <strong>company formation in Dubai</strong> in the appropriate jurisdiction and with the appropriate company structure</p>
					<p>Warm regards,<br>Team, WhiteWorth<br><em></em>
					<p>Contact Us</p>
						Call Us: <a href="tel:+971585606800" data-mce-href="tel:+971585606800">+971585606800</a>&nbsp;|&nbsp; <a href="tel:+918882038525">+918882038525</a>  <br> <br>
						Site:<a href="https://test.legalraasta.com/whiteworth" data-mce-href="https://test.legalraasta.com/whiteworth">www.thewhiteworth.com</a><br> <br>
						Dubai Office :<a href="https://goo.gl/maps/T8roTQnp2RtndkPj6"> 801 (02), Latifa Towers, Sheikh Zayed Road , Dubai </a></p>
							
							<a href="https://www.facebook.com/WhiteWorth"
							data-mce-href="https://www.facebook.com/WhiteWorth">Facebook</a>&nbsp;|&nbsp;<a
							href="https://www.linkedin.com/company/80065080/admin/"
							data-mce-href="https://www.linkedin.com/company/80065080/admin/">Linkedin</a>&nbsp;|&nbsp;<a
							href="https://twitter.com/thewhiteworth"
							data-mce-href="https://twitter.com/thewhiteworth">Twitter</a>&nbsp;|&nbsp;<a
							href="https://in.pinterest.com/whiteworthAdvisors/"
							data-mce-href="https://in.pinterest.com/whiteworthAdvisors/">Pinterest</a></p>
				</div>
			</body>
		</html>';
		}else if(isset($_POST['service_code']) && $service_code == '027') {
			$Body='<html>
			<body>
				<div>Dear '.$_POST['name'].'
					<p>We wanted to take a moment to thank you for choosing our '. $service_name[$service_code].'. We appreciate the trust you have placed in Whiteworth, and we are committed to delivering the highest quality service in setting up your business in Dubai. Additionally, we also provide business setup services in Free Zone, Mainland and Offshore areas. <br>
					We are grateful for the opportunity to work with you and for the positive impact that our License services have had on your business. Your satisfaction is Whiteworth’s top priority, and we are dedicated to ensuring that you receive the best possible experience with our company. Click to know about our services and us</p>
				
					<p><strong>About Whiteworth:<br></strong>With over 5 years of experience in company formation in Dubai, we provide a one-stop-shop approach for quick business registration, offering complete services for all incorporation, licensing, and other associated services to<a href="https://test.legalraasta.com/whiteworth/freezone-mainland-uae.html"><strong> Free Zone,</strong></a> <a href="https://test.legalraasta.com/whiteworth/mainland-business-dubai.html"><strong>Mainland</strong></a> & <a href="https://test.legalraasta.com/whiteworth/offshore-company-formation-dubai-uae.html"><strong>offshore</strong></a></p>
					<p>With access to a top pool of chances, we have been assisting Indian businessmen to realize their ambition of company formation in<strong> Dubai</strong>. In order to position themselves for long-term growth and success while avoiding mistakes that could end up costing them time and money, WhiteWorth has been assisting<strong> international business owners</strong> with <strong>company formation in Dubai</strong> in the appropriate jurisdiction and with the appropriate company structure</p>
					<p>Warm regards,<br>Team, WhiteWorth<br><em></em>
					<p>Contact Us</p>
						Call Us: <a href="tel:+971585606800" data-mce-href="tel:+971585606800">+971585606800</a>&nbsp;|&nbsp; <a href="tel:+918882038525">+918882038525</a>  <br> <br>
						Site:<a href="https://test.legalraasta.com/whiteworth" data-mce-href="https://test.legalraasta.com/whiteworth">www.thewhiteworth.com</a><br> <br>
						Dubai Office :<a href="https://goo.gl/maps/T8roTQnp2RtndkPj6"> 801 (02), Latifa Towers, Sheikh Zayed Road , Dubai </a></p>
							
							<a href="https://www.facebook.com/WhiteWorth"
							data-mce-href="https://www.facebook.com/WhiteWorth">Facebook</a>&nbsp;|&nbsp;<a
							href="https://www.linkedin.com/company/80065080/admin/"
							data-mce-href="https://www.linkedin.com/company/80065080/admin/">Linkedin</a>&nbsp;|&nbsp;<a
							href="https://twitter.com/thewhiteworth"
							data-mce-href="https://twitter.com/thewhiteworth">Twitter</a>&nbsp;|&nbsp;<a
							href="https://in.pinterest.com/whiteworthAdvisors/"
							data-mce-href="https://in.pinterest.com/whiteworthAdvisors/">Pinterest</a></p>
				</div>
			</body>
		</html>';
		}else if(isset($_POST['service_code']) && $service_code == '028') {
			$Body='<html>
			<body>
				<div>Dear '.$_POST['name'].'
					<p>We wanted to take a moment to thank you for choosing our '. $service_name[$service_code].'. We appreciate the trust you have placed in Whiteworth, and we are committed to delivering the highest quality service in setting up your business in Dubai. Additionally, we also provide business setup services in Free Zone, Mainland and Offshore areas. <br>
					We are grateful for the opportunity to work with you and for the positive impact that our License services have had on your business. Your satisfaction is Whiteworth’s top priority, and we are dedicated to ensuring that you receive the best possible experience with our company. Click to know about our services and us</p>
				
					<p><strong>About Whiteworth:<br></strong>With over 5 years of experience in company formation in Dubai, we provide a one-stop-shop approach for quick business registration, offering complete services for all incorporation, licensing, and other associated services to<a href="https://test.legalraasta.com/whiteworth/freezone-mainland-uae.html"><strong> Free Zone,</strong></a> <a href="https://test.legalraasta.com/whiteworth/mainland-business-dubai.html"><strong>Mainland</strong></a> & <a href="https://test.legalraasta.com/whiteworth/offshore-company-formation-dubai-uae.html"><strong>offshore</strong></a></p>
					<p>With access to a top pool of chances, we have been assisting Indian businessmen to realize their ambition of company formation in<strong> Dubai</strong>. In order to position themselves for long-term growth and success while avoiding mistakes that could end up costing them time and money, WhiteWorth has been assisting<strong> international business owners</strong> with <strong>company formation in Dubai</strong> in the appropriate jurisdiction and with the appropriate company structure</p>
					<p>Warm regards,<br>Team, WhiteWorth<br><em></em>
					<p>Contact Us</p>
						Call Us: <a href="tel:+971585606800" data-mce-href="tel:+971585606800">+971585606800</a>&nbsp;|&nbsp; <a href="tel:+918882038525">+918882038525</a>  <br> <br>
						Site:<a href="https://test.legalraasta.com/whiteworth" data-mce-href="https://test.legalraasta.com/whiteworth">www.thewhiteworth.com</a><br> <br>
						Dubai Office :<a href="https://goo.gl/maps/T8roTQnp2RtndkPj6"> 801 (02), Latifa Towers, Sheikh Zayed Road , Dubai </a></p>
							
							<a href="https://www.facebook.com/WhiteWorth"
							data-mce-href="https://www.facebook.com/WhiteWorth">Facebook</a>&nbsp;|&nbsp;<a
							href="https://www.linkedin.com/company/80065080/admin/"
							data-mce-href="https://www.linkedin.com/company/80065080/admin/">Linkedin</a>&nbsp;|&nbsp;<a
							href="https://twitter.com/thewhiteworth"
							data-mce-href="https://twitter.com/thewhiteworth">Twitter</a>&nbsp;|&nbsp;<a
							href="https://in.pinterest.com/whiteworthAdvisors/"
							data-mce-href="https://in.pinterest.com/whiteworthAdvisors/">Pinterest</a></p>
				</div>
			</body>
		</html>';
		}else if(isset($_POST['service_code']) && $service_code == '029') {
			$Body='<html>
			<body>
				<div>Dear '.$_POST['name'].'
					<p>We wanted to take a moment to thank you for choosing our '. $service_name[$service_code].'. We appreciate the trust you have placed in Whiteworth, and we are committed to delivering the highest quality service in setting up your business in Dubai. Additionally, we also provide business setup services in Free Zone, Mainland and Offshore areas. <br>
					We are grateful for the opportunity to work with you and for the positive impact that our License services have had on your business. Your satisfaction is Whiteworth’s top priority, and we are dedicated to ensuring that you receive the best possible experience with our company. Click to know about our services and us</p>
				
					<p><strong>About Whiteworth:<br></strong>With over 5 years of experience in company formation in Dubai, we provide a one-stop-shop approach for quick business registration, offering complete services for all incorporation, licensing, and other associated services to<a href="https://test.legalraasta.com/whiteworth/freezone-mainland-uae.html"><strong> Free Zone,</strong></a> <a href="https://test.legalraasta.com/whiteworth/mainland-business-dubai.html"><strong>Mainland</strong></a> & <a href="https://test.legalraasta.com/whiteworth/offshore-company-formation-dubai-uae.html"><strong>offshore</strong></a></p>
					<p>With access to a top pool of chances, we have been assisting Indian businessmen to realize their ambition of company formation in<strong> Dubai</strong>. In order to position themselves for long-term growth and success while avoiding mistakes that could end up costing them time and money, WhiteWorth has been assisting<strong> international business owners</strong> with <strong>company formation in Dubai</strong> in the appropriate jurisdiction and with the appropriate company structure</p>
					<p>Warm regards,<br>Team, WhiteWorth<br><em></em>
					<p>Contact Us</p>
						Call Us: <a href="tel:+971585606800" data-mce-href="tel:+971585606800">+971585606800</a>&nbsp;|&nbsp; <a href="tel:+918882038525">+918882038525</a>  <br> <br>
						Site:<a href="https://test.legalraasta.com/whiteworth" data-mce-href="https://test.legalraasta.com/whiteworth">www.thewhiteworth.com</a><br> <br>
						Dubai Office :<a href="https://goo.gl/maps/T8roTQnp2RtndkPj6"> 801 (02), Latifa Towers, Sheikh Zayed Road , Dubai </a></p>
							
							<a href="https://www.facebook.com/WhiteWorth"
							data-mce-href="https://www.facebook.com/WhiteWorth">Facebook</a>&nbsp;|&nbsp;<a
							href="https://www.linkedin.com/company/80065080/admin/"
							data-mce-href="https://www.linkedin.com/company/80065080/admin/">Linkedin</a>&nbsp;|&nbsp;<a
							href="https://twitter.com/thewhiteworth"
							data-mce-href="https://twitter.com/thewhiteworth">Twitter</a>&nbsp;|&nbsp;<a
							href="https://in.pinterest.com/whiteworthAdvisors/"
							data-mce-href="https://in.pinterest.com/whiteworthAdvisors/">Pinterest</a></p>
				</div>
			</body>
		</html>';
		}else if(isset($_POST['service_code']) && $service_code == '030') {
			$Body='<html>
			<body>
				<div>Dear '.$_POST['name'].'
					<p>We wanted to take a moment to thank you for choosing our '. $service_name[$service_code].'. We appreciate the trust you have placed in Whiteworth, and we are committed to delivering the highest quality service in setting up your business in Dubai. Additionally, we also provide business setup services in Free Zone, Mainland and Offshore areas. <br>
					We are grateful for the opportunity to work with you and for the positive impact that our License services have had on your business. Your satisfaction is Whiteworth’s top priority, and we are dedicated to ensuring that you receive the best possible experience with our company. Click to know about our services and us</p>
				
					<p><strong>About Whiteworth:<br></strong>With over 5 years of experience in company formation in Dubai, we provide a one-stop-shop approach for quick business registration, offering complete services for all incorporation, licensing, and other associated services to<a href="https://test.legalraasta.com/whiteworth/freezone-mainland-uae.html"><strong> Free Zone,</strong></a> <a href="https://test.legalraasta.com/whiteworth/mainland-business-dubai.html"><strong>Mainland</strong></a> & <a href="https://test.legalraasta.com/whiteworth/offshore-company-formation-dubai-uae.html"><strong>offshore</strong></a></p>
					<p>With access to a top pool of chances, we have been assisting Indian businessmen to realize their ambition of company formation in<strong> Dubai</strong>. In order to position themselves for long-term growth and success while avoiding mistakes that could end up costing them time and money, WhiteWorth has been assisting<strong> international business owners</strong> with <strong>company formation in Dubai</strong> in the appropriate jurisdiction and with the appropriate company structure</p>
					<p>Warm regards,<br>Team, WhiteWorth<br><em></em>
					<p>Contact Us</p>
						Call Us: <a href="tel:+971585606800" data-mce-href="tel:+971585606800">+971585606800</a>&nbsp;|&nbsp; <a href="tel:+918882038525">+918882038525</a>  <br> <br>
						Site:<a href="https://test.legalraasta.com/whiteworth" data-mce-href="https://test.legalraasta.com/whiteworth">www.thewhiteworth.com</a><br> <br>
						Dubai Office :<a href="https://goo.gl/maps/T8roTQnp2RtndkPj6"> 801 (02), Latifa Towers, Sheikh Zayed Road , Dubai </a></p>
							
							<a href="https://www.facebook.com/WhiteWorth"
							data-mce-href="https://www.facebook.com/WhiteWorth">Facebook</a>&nbsp;|&nbsp;<a
							href="https://www.linkedin.com/company/80065080/admin/"
							data-mce-href="https://www.linkedin.com/company/80065080/admin/">Linkedin</a>&nbsp;|&nbsp;<a
							href="https://twitter.com/thewhiteworth"
							data-mce-href="https://twitter.com/thewhiteworth">Twitter</a>&nbsp;|&nbsp;<a
							href="https://in.pinterest.com/whiteworthAdvisors/"
							data-mce-href="https://in.pinterest.com/whiteworthAdvisors/">Pinterest</a></p>
				</div>
			</body>
		</html>';
		}else if(isset($_POST['service_code']) && $service_code == '031') {
			$Body='<html>
			<body>
				<div>Dear '.$_POST['name'].'
					<p>We wanted to take a moment to thank you for choosing our '. $service_name[$service_code].'. We appreciate the trust you have placed in Whiteworth, and we are committed to delivering the highest quality service in setting up your business in Dubai. Additionally, we also provide business setup services in Free Zone, Mainland and Offshore areas. <br>
					We are grateful for the opportunity to work with you and for the positive impact that our License services have had on your business. Your satisfaction is Whiteworth’s top priority, and we are dedicated to ensuring that you receive the best possible experience with our company. Click to know about our services and us</p>
				
					<p><strong>About Whiteworth:<br></strong>With over 5 years of experience in company formation in Dubai, we provide a one-stop-shop approach for quick business registration, offering complete services for all incorporation, licensing, and other associated services to<a href="https://test.legalraasta.com/whiteworth/freezone-mainland-uae.html"><strong> Free Zone,</strong></a> <a href="https://test.legalraasta.com/whiteworth/mainland-business-dubai.html"><strong>Mainland</strong></a> & <a href="https://test.legalraasta.com/whiteworth/offshore-company-formation-dubai-uae.html"><strong>offshore</strong></a></p>
					<p>With access to a top pool of chances, we have been assisting Indian businessmen to realize their ambition of company formation in<strong> Dubai</strong>. In order to position themselves for long-term growth and success while avoiding mistakes that could end up costing them time and money, WhiteWorth has been assisting<strong> international business owners</strong> with <strong>company formation in Dubai</strong> in the appropriate jurisdiction and with the appropriate company structure</p>
					<p>Warm regards,<br>Team, WhiteWorth<br><em></em>
					<p>Contact Us</p>
						Call Us: <a href="tel:+971585606800" data-mce-href="tel:+971585606800">+971585606800</a>&nbsp;|&nbsp; <a href="tel:+918882038525">+918882038525</a>  <br> <br>
						Site:<a href="https://test.legalraasta.com/whiteworth" data-mce-href="https://test.legalraasta.com/whiteworth">www.thewhiteworth.com</a><br> <br>
						Dubai Office :<a href="https://goo.gl/maps/T8roTQnp2RtndkPj6"> 801 (02), Latifa Towers, Sheikh Zayed Road , Dubai </a></p>
							
							<a href="https://www.facebook.com/WhiteWorth"
							data-mce-href="https://www.facebook.com/WhiteWorth">Facebook</a>&nbsp;|&nbsp;<a
							href="https://www.linkedin.com/company/80065080/admin/"
							data-mce-href="https://www.linkedin.com/company/80065080/admin/">Linkedin</a>&nbsp;|&nbsp;<a
							href="https://twitter.com/thewhiteworth"
							data-mce-href="https://twitter.com/thewhiteworth">Twitter</a>&nbsp;|&nbsp;<a
							href="https://in.pinterest.com/whiteworthAdvisors/"
							data-mce-href="https://in.pinterest.com/whiteworthAdvisors/">Pinterest</a></p>
				</div>
			</body>
		</html>';
		}else if(isset($_POST['service_code']) && $service_code == '032') {
			$Body='<html>
			<body>
				<div>Dear '.$_POST['name'].'
					<p>We wanted to take a moment to thank you for choosing our '. $service_name[$service_code].'. We appreciate the trust you have placed in Whiteworth, and we are committed to delivering the highest quality service in setting up your business in Dubai. Additionally, we also provide business setup services in Free Zone, Mainland and Offshore areas. <br>
					We are grateful for the opportunity to work with you and for the positive impact that our License services have had on your business. Your satisfaction is Whiteworth’s top priority, and we are dedicated to ensuring that you receive the best possible experience with our company. Click to know about our services and us</p>
				
					<p><strong>About Whiteworth:<br></strong>With over 5 years of experience in company formation in Dubai, we provide a one-stop-shop approach for quick business registration, offering complete services for all incorporation, licensing, and other associated services to<a href="https://test.legalraasta.com/whiteworth/freezone-mainland-uae.html"><strong> Free Zone,</strong></a> <a href="https://test.legalraasta.com/whiteworth/mainland-business-dubai.html"><strong>Mainland</strong></a> & <a href="https://test.legalraasta.com/whiteworth/offshore-company-formation-dubai-uae.html"><strong>offshore</strong></a></p>
					<p>With access to a top pool of chances, we have been assisting Indian businessmen to realize their ambition of company formation in<strong> Dubai</strong>. In order to position themselves for long-term growth and success while avoiding mistakes that could end up costing them time and money, WhiteWorth has been assisting<strong> international business owners</strong> with <strong>company formation in Dubai</strong> in the appropriate jurisdiction and with the appropriate company structure</p>
					<p>Warm regards,<br>Team, WhiteWorth<br><em></em>
					<p>Contact Us</p>
						Call Us: <a href="tel:+971585606800" data-mce-href="tel:+971585606800">+971585606800</a>&nbsp;|&nbsp; <a href="tel:+918882038525">+918882038525</a>  <br> <br>
						Site:<a href="https://test.legalraasta.com/whiteworth" data-mce-href="https://test.legalraasta.com/whiteworth">www.thewhiteworth.com</a><br> <br>
						Dubai Office :<a href="https://goo.gl/maps/T8roTQnp2RtndkPj6"> 801 (02), Latifa Towers, Sheikh Zayed Road , Dubai </a></p>
							
							<a href="https://www.facebook.com/WhiteWorth"
							data-mce-href="https://www.facebook.com/WhiteWorth">Facebook</a>&nbsp;|&nbsp;<a
							href="https://www.linkedin.com/company/80065080/admin/"
							data-mce-href="https://www.linkedin.com/company/80065080/admin/">Linkedin</a>&nbsp;|&nbsp;<a
							href="https://twitter.com/thewhiteworth"
							data-mce-href="https://twitter.com/thewhiteworth">Twitter</a>&nbsp;|&nbsp;<a
							href="https://in.pinterest.com/whiteworthAdvisors/"
							data-mce-href="https://in.pinterest.com/whiteworthAdvisors/">Pinterest</a></p>
				</div>
			</body>
		</html>';
		}else if(isset($_POST['service_code']) && $service_code == '033') {
			$Body='<html>
			<body>
				<div>Dear '.$_POST['name'].'
					<p>We wanted to take a moment to thank you for choosing our '. $service_name[$service_code].'. We appreciate the trust you have placed in Whiteworth, and we are committed to delivering the highest quality service in setting up your business in Dubai. Additionally, we also provide business setup services in Free Zone, Mainland and Offshore areas. <br>
					We are grateful for the opportunity to work with you and for the positive impact that our License services have had on your business. Your satisfaction is Whiteworth’s top priority, and we are dedicated to ensuring that you receive the best possible experience with our company. Click to know about our services and us</p>
				
					<p><strong>About Whiteworth:<br></strong>With over 5 years of experience in company formation in Dubai, we provide a one-stop-shop approach for quick business registration, offering complete services for all incorporation, licensing, and other associated services to<a href="https://test.legalraasta.com/whiteworth/freezone-mainland-uae.html"><strong> Free Zone,</strong></a> <a href="https://test.legalraasta.com/whiteworth/mainland-business-dubai.html"><strong>Mainland</strong></a> & <a href="https://test.legalraasta.com/whiteworth/offshore-company-formation-dubai-uae.html"><strong>offshore</strong></a></p>
					<p>With access to a top pool of chances, we have been assisting Indian businessmen to realize their ambition of company formation in<strong> Dubai</strong>. In order to position themselves for long-term growth and success while avoiding mistakes that could end up costing them time and money, WhiteWorth has been assisting<strong> international business owners</strong> with <strong>company formation in Dubai</strong> in the appropriate jurisdiction and with the appropriate company structure</p>
					<p>Warm regards,<br>Team, WhiteWorth<br><em></em>
					<p>Contact Us</p>
						Call Us: <a href="tel:+971585606800" data-mce-href="tel:+971585606800">+971585606800</a>&nbsp;|&nbsp; <a href="tel:+918882038525">+918882038525</a>  <br> <br>
						Site:<a href="https://test.legalraasta.com/whiteworth" data-mce-href="https://test.legalraasta.com/whiteworth">www.thewhiteworth.com</a><br> <br>
						Dubai Office :<a href="https://goo.gl/maps/T8roTQnp2RtndkPj6"> 801 (02), Latifa Towers, Sheikh Zayed Road , Dubai </a></p>
							
							<a href="https://www.facebook.com/WhiteWorth"
							data-mce-href="https://www.facebook.com/WhiteWorth">Facebook</a>&nbsp;|&nbsp;<a
							href="https://www.linkedin.com/company/80065080/admin/"
							data-mce-href="https://www.linkedin.com/company/80065080/admin/">Linkedin</a>&nbsp;|&nbsp;<a
							href="https://twitter.com/thewhiteworth"
							data-mce-href="https://twitter.com/thewhiteworth">Twitter</a>&nbsp;|&nbsp;<a
							href="https://in.pinterest.com/whiteworthAdvisors/"
							data-mce-href="https://in.pinterest.com/whiteworthAdvisors/">Pinterest</a></p>
				</div>
			</body>
		</html>';
		}else if(isset($_POST['service_code']) && $service_code == '034') {
			$Body='<html>
			<body>
				<div>Dear '.$_POST['name'].'
					<p>We wanted to take a moment to thank you for choosing our '. $service_name[$service_code].'. We appreciate the trust you have placed in Whiteworth, and we are committed to delivering the highest quality service in setting up your business in Dubai. Additionally, we also provide business setup services in Free Zone, Mainland and Offshore areas. <br>
					We are grateful for the opportunity to work with you and for the positive impact that our License services have had on your business. Your satisfaction is Whiteworth’s top priority, and we are dedicated to ensuring that you receive the best possible experience with our company. Click to know about our services and us</p>
				
					<p><strong>About Whiteworth:<br></strong>With over 5 years of experience in company formation in Dubai, we provide a one-stop-shop approach for quick business registration, offering complete services for all incorporation, licensing, and other associated services to<a href="https://test.legalraasta.com/whiteworth/freezone-mainland-uae.html"><strong> Free Zone,</strong></a> <a href="https://test.legalraasta.com/whiteworth/mainland-business-dubai.html"><strong>Mainland</strong></a> & <a href="https://test.legalraasta.com/whiteworth/offshore-company-formation-dubai-uae.html"><strong>offshore</strong></a></p>
					<p>With access to a top pool of chances, we have been assisting Indian businessmen to realize their ambition of company formation in<strong> Dubai</strong>. In order to position themselves for long-term growth and success while avoiding mistakes that could end up costing them time and money, WhiteWorth has been assisting<strong> international business owners</strong> with <strong>company formation in Dubai</strong> in the appropriate jurisdiction and with the appropriate company structure</p>
					<p>Warm regards,<br>Team, WhiteWorth<br><em></em>
					<p>Contact Us</p>
						Call Us: <a href="tel:+971585606800" data-mce-href="tel:+971585606800">+971585606800</a>&nbsp;|&nbsp; <a href="tel:+918882038525">+918882038525</a>  <br> <br>
						Site:<a href="https://test.legalraasta.com/whiteworth" data-mce-href="https://test.legalraasta.com/whiteworth">www.thewhiteworth.com</a><br> <br>
						Dubai Office :<a href="https://goo.gl/maps/T8roTQnp2RtndkPj6"> 801 (02), Latifa Towers, Sheikh Zayed Road , Dubai </a></p>
							
							<a href="https://www.facebook.com/WhiteWorth"
							data-mce-href="https://www.facebook.com/WhiteWorth">Facebook</a>&nbsp;|&nbsp;<a
							href="https://www.linkedin.com/company/80065080/admin/"
							data-mce-href="https://www.linkedin.com/company/80065080/admin/">Linkedin</a>&nbsp;|&nbsp;<a
							href="https://twitter.com/thewhiteworth"
							data-mce-href="https://twitter.com/thewhiteworth">Twitter</a>&nbsp;|&nbsp;<a
							href="https://in.pinterest.com/whiteworthAdvisors/"
							data-mce-href="https://in.pinterest.com/whiteworthAdvisors/">Pinterest</a></p>
				</div>
			</body>
		</html>';
		}else if(isset($_POST['service_code']) && $service_code == '035') {
			$Body='<html>
			<body>
				<div>Dear '.$_POST['name'].'
					<p>We wanted to take a moment to thank you for choosing our '. $service_name[$service_code].'. We appreciate the trust you have placed in Whiteworth, and we are committed to delivering the highest quality service in setting up your business in Dubai. Additionally, we also provide business setup services in Free Zone, Mainland and Offshore areas. <br>
					We are grateful for the opportunity to work with you and for the positive impact that our License services have had on your business. Your satisfaction is Whiteworth’s top priority, and we are dedicated to ensuring that you receive the best possible experience with our company. Click to know about our services and us</p>
				
					<p><strong>About Whiteworth:<br></strong>With over 5 years of experience in company formation in Dubai, we provide a one-stop-shop approach for quick business registration, offering complete services for all incorporation, licensing, and other associated services to<a href="https://test.legalraasta.com/whiteworth/freezone-mainland-uae.html"><strong> Free Zone,</strong></a> <a href="https://test.legalraasta.com/whiteworth/mainland-business-dubai.html"><strong>Mainland</strong></a> & <a href="https://test.legalraasta.com/whiteworth/offshore-company-formation-dubai-uae.html"><strong>offshore</strong></a></p>
					<p>With access to a top pool of chances, we have been assisting Indian businessmen to realize their ambition of company formation in<strong> Dubai</strong>. In order to position themselves for long-term growth and success while avoiding mistakes that could end up costing them time and money, WhiteWorth has been assisting<strong> international business owners</strong> with <strong>company formation in Dubai</strong> in the appropriate jurisdiction and with the appropriate company structure</p>
					<p>Warm regards,<br>Team, WhiteWorth<br><em></em>
					<p>Contact Us</p>
						Call Us: <a href="tel:+971585606800" data-mce-href="tel:+971585606800">+971585606800</a>&nbsp;|&nbsp; <a href="tel:+918882038525">+918882038525</a>  <br> <br>
						Site:<a href="https://test.legalraasta.com/whiteworth" data-mce-href="https://test.legalraasta.com/whiteworth">www.thewhiteworth.com</a><br> <br>
						Dubai Office :<a href="https://goo.gl/maps/T8roTQnp2RtndkPj6"> 801 (02), Latifa Towers, Sheikh Zayed Road , Dubai </a></p>
							
							<a href="https://www.facebook.com/WhiteWorth"
							data-mce-href="https://www.facebook.com/WhiteWorth">Facebook</a>&nbsp;|&nbsp;<a
							href="https://www.linkedin.com/company/80065080/admin/"
							data-mce-href="https://www.linkedin.com/company/80065080/admin/">Linkedin</a>&nbsp;|&nbsp;<a
							href="https://twitter.com/thewhiteworth"
							data-mce-href="https://twitter.com/thewhiteworth">Twitter</a>&nbsp;|&nbsp;<a
							href="https://in.pinterest.com/whiteworthAdvisors/"
							data-mce-href="https://in.pinterest.com/whiteworthAdvisors/">Pinterest</a></p>
				</div>
			</body>
		</html>';
		}
		else if(isset($_POST['service_code']) && $service_code == '036') {
			$Body='<html>
			<body>
				<div>Dear '.$_POST['name'].'
					<p>We wanted to take a moment to thank you for choosing our '. $service_name[$service_code].'. We appreciate the trust you have placed in Whiteworth, and we are committed to delivering the highest quality service in setting up your business in Dubai. Additionally, we also provide business setup services in Free Zone, Mainland and Offshore areas. <br>
					We are grateful for the opportunity to work with you and for the positive impact that our License services have had on your business. Your satisfaction is Whiteworth’s top priority, and we are dedicated to ensuring that you receive the best possible experience with our company. Click to know about our services and us</p>
				
					<p><strong>About Whiteworth:<br></strong>With over 5 years of experience in company formation in Dubai, we provide a one-stop-shop approach for quick business registration, offering complete services for all incorporation, licensing, and other associated services to<a href="https://test.legalraasta.com/whiteworth/freezone-mainland-uae.html"><strong> Free Zone,</strong></a> <a href="https://test.legalraasta.com/whiteworth/mainland-business-dubai.html"><strong>Mainland</strong></a> & <a href="https://test.legalraasta.com/whiteworth/offshore-company-formation-dubai-uae.html"><strong>offshore</strong></a></p>
					<p>With access to a top pool of chances, we have been assisting Indian businessmen to realize their ambition of company formation in<strong> Dubai</strong>. In order to position themselves for long-term growth and success while avoiding mistakes that could end up costing them time and money, WhiteWorth has been assisting<strong> international business owners</strong> with <strong>company formation in Dubai</strong> in the appropriate jurisdiction and with the appropriate company structure</p>
					<p>Warm regards,<br>Team, WhiteWorth<br><em></em>
					<p>Contact Us</p>
						Call Us: <a href="tel:+971585606800" data-mce-href="tel:+971585606800">+971585606800</a>&nbsp;|&nbsp; <a href="tel:+918882038525">+918882038525</a>  <br> <br>
						Site:<a href="https://test.legalraasta.com/whiteworth" data-mce-href="https://test.legalraasta.com/whiteworth">www.thewhiteworth.com</a><br> <br>
						Dubai Office :<a href="https://goo.gl/maps/T8roTQnp2RtndkPj6"> 801 (02), Latifa Towers, Sheikh Zayed Road , Dubai </a></p>
							
							<a href="https://www.facebook.com/WhiteWorth"
							data-mce-href="https://www.facebook.com/WhiteWorth">Facebook</a>&nbsp;|&nbsp;<a
							href="https://www.linkedin.com/company/80065080/admin/"
							data-mce-href="https://www.linkedin.com/company/80065080/admin/">Linkedin</a>&nbsp;|&nbsp;<a
							href="https://twitter.com/thewhiteworth"
							data-mce-href="https://twitter.com/thewhiteworth">Twitter</a>&nbsp;|&nbsp;<a
							href="https://in.pinterest.com/whiteworthAdvisors/"
							data-mce-href="https://in.pinterest.com/whiteworthAdvisors/">Pinterest</a></p>
				</div>
			</body>
		</html>';
		}else if(isset($_POST['service_code']) && $service_code == '036') {
			$Body='<html>
			<body>
				<div>Dear '.$_POST['name'].'
					<p>We wanted to take a moment to thank you for choosing our '. $service_name[$service_code].'. We appreciate the trust you have placed in Whiteworth, and we are committed to delivering the highest quality service in setting up your business in Dubai. Additionally, we also provide business setup services in Free Zone, Mainland and Offshore areas. <br>
					We are grateful for the opportunity to work with you and for the positive impact that our License services have had on your business. Your satisfaction is Whiteworth’s top priority, and we are dedicated to ensuring that you receive the best possible experience with our company. Click to know about our services and us</p>
				
					<p><strong>About Whiteworth:<br></strong>With over 5 years of experience in company formation in Dubai, we provide a one-stop-shop approach for quick business registration, offering complete services for all incorporation, licensing, and other associated services to<a href="https://test.legalraasta.com/whiteworth/freezone-mainland-uae.html"><strong> Free Zone,</strong></a> <a href="https://test.legalraasta.com/whiteworth/mainland-business-dubai.html"><strong>Mainland</strong></a> & <a href="https://test.legalraasta.com/whiteworth/offshore-company-formation-dubai-uae.html"><strong>offshore</strong></a></p>
					<p>With access to a top pool of chances, we have been assisting Indian businessmen to realize their ambition of company formation in<strong> Dubai</strong>. In order to position themselves for long-term growth and success while avoiding mistakes that could end up costing them time and money, WhiteWorth has been assisting<strong> international business owners</strong> with <strong>company formation in Dubai</strong> in the appropriate jurisdiction and with the appropriate company structure</p>
					<p>Warm regards,<br>Team, WhiteWorth<br><em></em>
					<p>Contact Us</p>
						Call Us: <a href="tel:+971585606800" data-mce-href="tel:+971585606800">+971585606800</a>&nbsp;|&nbsp; <a href="tel:+918882038525">+918882038525</a>  <br> <br>
						Site:<a href="https://test.legalraasta.com/whiteworth" data-mce-href="https://test.legalraasta.com/whiteworth">www.thewhiteworth.com</a><br> <br>
						Dubai Office :<a href="https://goo.gl/maps/T8roTQnp2RtndkPj6"> 801 (02), Latifa Towers, Sheikh Zayed Road , Dubai </a></p>
							
							<a href="https://www.facebook.com/WhiteWorth"
							data-mce-href="https://www.facebook.com/WhiteWorth">Facebook</a>&nbsp;|&nbsp;<a
							href="https://www.linkedin.com/company/80065080/admin/"
							data-mce-href="https://www.linkedin.com/company/80065080/admin/">Linkedin</a>&nbsp;|&nbsp;<a
							href="https://twitter.com/thewhiteworth"
							data-mce-href="https://twitter.com/thewhiteworth">Twitter</a>&nbsp;|&nbsp;<a
							href="https://in.pinterest.com/whiteworthAdvisors/"
							data-mce-href="https://in.pinterest.com/whiteworthAdvisors/">Pinterest</a></p>
				</div>
			</body>
		</html>';
		}else if(isset($_POST['service_code']) && $service_code == '037') {
			$Body='<html>
			<body>
				<div>Dear '.$_POST['name'].'
					<p>We wanted to take a moment to thank you for choosing our '. $service_name[$service_code].'. We appreciate the trust you have placed in Whiteworth, and we are committed to delivering the highest quality service in setting up your business in Dubai. Additionally, we also provide business setup services in Free Zone, Mainland and Offshore areas. <br>
					We are grateful for the opportunity to work with you and for the positive impact that our License services have had on your business. Your satisfaction is Whiteworth’s top priority, and we are dedicated to ensuring that you receive the best possible experience with our company. Click to know about our services and us</p>
				
					<p><strong>About Whiteworth:<br></strong>With over 5 years of experience in company formation in Dubai, we provide a one-stop-shop approach for quick business registration, offering complete services for all incorporation, licensing, and other associated services to<a href="https://test.legalraasta.com/whiteworth/freezone-mainland-uae.html"><strong> Free Zone,</strong></a> <a href="https://test.legalraasta.com/whiteworth/mainland-business-dubai.html"><strong>Mainland</strong></a> & <a href="https://test.legalraasta.com/whiteworth/offshore-company-formation-dubai-uae.html"><strong>offshore</strong></a></p>
					<p>With access to a top pool of chances, we have been assisting Indian businessmen to realize their ambition of company formation in<strong> Dubai</strong>. In order to position themselves for long-term growth and success while avoiding mistakes that could end up costing them time and money, WhiteWorth has been assisting<strong> international business owners</strong> with <strong>company formation in Dubai</strong> in the appropriate jurisdiction and with the appropriate company structure</p>
					<p>Warm regards,<br>Team, WhiteWorth<br><em></em>
					<p>Contact Us</p>
						Call Us: <a href="tel:+971585606800" data-mce-href="tel:+971585606800">+971585606800</a>&nbsp;|&nbsp; <a href="tel:+918882038525">+918882038525</a>  <br> <br>
						Site:<a href="https://test.legalraasta.com/whiteworth" data-mce-href="https://test.legalraasta.com/whiteworth">www.thewhiteworth.com</a><br> <br>
						Dubai Office :<a href="https://goo.gl/maps/T8roTQnp2RtndkPj6"> 801 (02), Latifa Towers, Sheikh Zayed Road , Dubai </a></p>
							
							<a href="https://www.facebook.com/WhiteWorth"
							data-mce-href="https://www.facebook.com/WhiteWorth">Facebook</a>&nbsp;|&nbsp;<a
							href="https://www.linkedin.com/company/80065080/admin/"
							data-mce-href="https://www.linkedin.com/company/80065080/admin/">Linkedin</a>&nbsp;|&nbsp;<a
							href="https://twitter.com/thewhiteworth"
							data-mce-href="https://twitter.com/thewhiteworth">Twitter</a>&nbsp;|&nbsp;<a
							href="https://in.pinterest.com/whiteworthAdvisors/"
							data-mce-href="https://in.pinterest.com/whiteworthAdvisors/">Pinterest</a></p>
				</div>
			</body>
		</html>';
		}else if(isset($_POST['service_code']) && $service_code == '038') {
			$Body='<html>
			<body>
				<div>Dear '.$_POST['name'].'
					<p>We wanted to take a moment to thank you for choosing our '. $service_name[$service_code].'. We appreciate the trust you have placed in Whiteworth, and we are committed to delivering the highest quality service in setting up your business in Dubai. Additionally, we also provide business setup services in Free Zone, Mainland and Offshore areas. <br>
					We are grateful for the opportunity to work with you and for the positive impact that our License services have had on your business. Your satisfaction is Whiteworth’s top priority, and we are dedicated to ensuring that you receive the best possible experience with our company. Click to know about our services and us</p>
				
					<p><strong>About Whiteworth:<br></strong>With over 5 years of experience in company formation in Dubai, we provide a one-stop-shop approach for quick business registration, offering complete services for all incorporation, licensing, and other associated services to<a href="https://test.legalraasta.com/whiteworth/freezone-mainland-uae.html"><strong> Free Zone,</strong></a> <a href="https://test.legalraasta.com/whiteworth/mainland-business-dubai.html"><strong>Mainland</strong></a> & <a href="https://test.legalraasta.com/whiteworth/offshore-company-formation-dubai-uae.html"><strong>offshore</strong></a></p>
					<p>With access to a top pool of chances, we have been assisting Indian businessmen to realize their ambition of company formation in<strong> Dubai</strong>. In order to position themselves for long-term growth and success while avoiding mistakes that could end up costing them time and money, WhiteWorth has been assisting<strong> international business owners</strong> with <strong>company formation in Dubai</strong> in the appropriate jurisdiction and with the appropriate company structure</p>
					<p>Warm regards,<br>Team, WhiteWorth<br><em></em>
					<p>Contact Us</p>
						Call Us: <a href="tel:+971585606800" data-mce-href="tel:+971585606800">+971585606800</a>&nbsp;|&nbsp; <a href="tel:+918882038525">+918882038525</a>  <br> <br>
						Site:<a href="https://test.legalraasta.com/whiteworth" data-mce-href="https://test.legalraasta.com/whiteworth">www.thewhiteworth.com</a><br> <br>
						Dubai Office :<a href="https://goo.gl/maps/T8roTQnp2RtndkPj6"> 801 (02), Latifa Towers, Sheikh Zayed Road , Dubai </a></p>
							
							<a href="https://www.facebook.com/WhiteWorth"
							data-mce-href="https://www.facebook.com/WhiteWorth">Facebook</a>&nbsp;|&nbsp;<a
							href="https://www.linkedin.com/company/80065080/admin/"
							data-mce-href="https://www.linkedin.com/company/80065080/admin/">Linkedin</a>&nbsp;|&nbsp;<a
							href="https://twitter.com/thewhiteworth"
							data-mce-href="https://twitter.com/thewhiteworth">Twitter</a>&nbsp;|&nbsp;<a
							href="https://in.pinterest.com/whiteworthAdvisors/"
							data-mce-href="https://in.pinterest.com/whiteworthAdvisors/">Pinterest</a></p>
				</div>
			</body>
		</html>';
		}else if(isset($_POST['service_code']) && $service_code == '039') {
			$Body='<html>
			<body>
				<div>Dear '.$_POST['name'].'
					<p>We wanted to take a moment to thank you for choosing our '. $service_name[$service_code].'. We appreciate the trust you have placed in Whiteworth, and we are committed to delivering the highest quality service in setting up your business in Dubai. Additionally, we also provide business setup services in Free Zone, Mainland and Offshore areas. <br>
					We are grateful for the opportunity to work with you and for the positive impact that our License services have had on your business. Your satisfaction is Whiteworth’s top priority, and we are dedicated to ensuring that you receive the best possible experience with our company. Click to know about our services and us</p>
				
					<p><strong>About Whiteworth:<br></strong>With over 5 years of experience in company formation in Dubai, we provide a one-stop-shop approach for quick business registration, offering complete services for all incorporation, licensing, and other associated services to<a href="https://test.legalraasta.com/whiteworth/freezone-mainland-uae.html"><strong> Free Zone,</strong></a> <a href="https://test.legalraasta.com/whiteworth/mainland-business-dubai.html"><strong>Mainland</strong></a> & <a href="https://test.legalraasta.com/whiteworth/offshore-company-formation-dubai-uae.html"><strong>offshore</strong></a></p>
					<p>With access to a top pool of chances, we have been assisting Indian businessmen to realize their ambition of company formation in<strong> Dubai</strong>. In order to position themselves for long-term growth and success while avoiding mistakes that could end up costing them time and money, WhiteWorth has been assisting<strong> international business owners</strong> with <strong>company formation in Dubai</strong> in the appropriate jurisdiction and with the appropriate company structure</p>
					<p>Warm regards,<br>Team, WhiteWorth<br><em></em>
					<p>Contact Us</p>
						Call Us: <a href="tel:+971585606800" data-mce-href="tel:+971585606800">+971585606800</a>&nbsp;|&nbsp; <a href="tel:+918882038525">+918882038525</a>  <br> <br>
						Site:<a href="https://test.legalraasta.com/whiteworth" data-mce-href="https://test.legalraasta.com/whiteworth">www.thewhiteworth.com</a><br> <br>
						Dubai Office :<a href="https://goo.gl/maps/T8roTQnp2RtndkPj6"> 801 (02), Latifa Towers, Sheikh Zayed Road , Dubai </a></p>
							
							<a href="https://www.facebook.com/WhiteWorth"
							data-mce-href="https://www.facebook.com/WhiteWorth">Facebook</a>&nbsp;|&nbsp;<a
							href="https://www.linkedin.com/company/80065080/admin/"
							data-mce-href="https://www.linkedin.com/company/80065080/admin/">Linkedin</a>&nbsp;|&nbsp;<a
							href="https://twitter.com/thewhiteworth"
							data-mce-href="https://twitter.com/thewhiteworth">Twitter</a>&nbsp;|&nbsp;<a
							href="https://in.pinterest.com/whiteworthAdvisors/"
							data-mce-href="https://in.pinterest.com/whiteworthAdvisors/">Pinterest</a></p>
				</div>
			</body>
		</html>';
		}else if(isset($_POST['service_code']) && $service_code == '040') {
			$Body='<html>
			<body>
				<div>Dear '.$_POST['name'].'
					<p>We wanted to take a moment to thank you for choosing our '. $service_name[$service_code].'. We appreciate the trust you have placed in Whiteworth, and we are committed to delivering the highest quality service in setting up your business in Dubai. Additionally, we also provide business setup services in Free Zone, Mainland and Offshore areas. <br>
					We are grateful for the opportunity to work with you and for the positive impact that our License services have had on your business. Your satisfaction is Whiteworth’s top priority, and we are dedicated to ensuring that you receive the best possible experience with our company. Click to know about our services and us</p>
				
					<p><strong>About Whiteworth:<br></strong>With over 5 years of experience in company formation in Dubai, we provide a one-stop-shop approach for quick business registration, offering complete services for all incorporation, licensing, and other associated services to<a href="https://test.legalraasta.com/whiteworth/freezone-mainland-uae.html"><strong> Free Zone,</strong></a> <a href="https://test.legalraasta.com/whiteworth/mainland-business-dubai.html"><strong>Mainland</strong></a> & <a href="https://test.legalraasta.com/whiteworth/offshore-company-formation-dubai-uae.html"><strong>offshore</strong></a></p>
					<p>With access to a top pool of chances, we have been assisting Indian businessmen to realize their ambition of company formation in<strong> Dubai</strong>. In order to position themselves for long-term growth and success while avoiding mistakes that could end up costing them time and money, WhiteWorth has been assisting<strong> international business owners</strong> with <strong>company formation in Dubai</strong> in the appropriate jurisdiction and with the appropriate company structure</p>
					<p>Warm regards,<br>Team, WhiteWorth<br><em></em>
					<p>Contact Us</p>
						Call Us: <a href="tel:+971585606800" data-mce-href="tel:+971585606800">+971585606800</a>&nbsp;|&nbsp; <a href="tel:+918882038525">+918882038525</a>  <br> <br>
						Site:<a href="https://test.legalraasta.com/whiteworth" data-mce-href="https://test.legalraasta.com/whiteworth">www.thewhiteworth.com</a><br> <br>
						Dubai Office :<a href="https://goo.gl/maps/T8roTQnp2RtndkPj6"> 801 (02), Latifa Towers, Sheikh Zayed Road , Dubai </a></p>
							
							<a href="https://www.facebook.com/WhiteWorth"
							data-mce-href="https://www.facebook.com/WhiteWorth">Facebook</a>&nbsp;|&nbsp;<a
							href="https://www.linkedin.com/company/80065080/admin/"
							data-mce-href="https://www.linkedin.com/company/80065080/admin/">Linkedin</a>&nbsp;|&nbsp;<a
							href="https://twitter.com/thewhiteworth"
							data-mce-href="https://twitter.com/thewhiteworth">Twitter</a>&nbsp;|&nbsp;<a
							href="https://in.pinterest.com/whiteworthAdvisors/"
							data-mce-href="https://in.pinterest.com/whiteworthAdvisors/">Pinterest</a></p>
				</div>
			</body>
		</html>';
		}else if(isset($_POST['service_code']) && $service_code == '041') {
			$Body='<html>
			<body>
				<div>Dear '.$_POST['name'].'
					<p>We wanted to take a moment to thank you for choosing our '. $service_name[$service_code].'. We appreciate the trust you have placed in Whiteworth, and we are committed to delivering the highest quality service in setting up your business in Dubai. Additionally, we also provide business setup services in Free Zone, Mainland and Offshore areas. <br>
					We are grateful for the opportunity to work with you and for the positive impact that our License services have had on your business. Your satisfaction is Whiteworth’s top priority, and we are dedicated to ensuring that you receive the best possible experience with our company. Click to know about our services and us</p>
				
					<p><strong>About Whiteworth:<br></strong>With over 5 years of experience in company formation in Dubai, we provide a one-stop-shop approach for quick business registration, offering complete services for all incorporation, licensing, and other associated services to<a href="https://test.legalraasta.com/whiteworth/freezone-mainland-uae.html"><strong> Free Zone,</strong></a> <a href="https://test.legalraasta.com/whiteworth/mainland-business-dubai.html"><strong>Mainland</strong></a> & <a href="https://test.legalraasta.com/whiteworth/offshore-company-formation-dubai-uae.html"><strong>offshore</strong></a></p>
					<p>With access to a top pool of chances, we have been assisting Indian businessmen to realize their ambition of company formation in<strong> Dubai</strong>. In order to position themselves for long-term growth and success while avoiding mistakes that could end up costing them time and money, WhiteWorth has been assisting<strong> international business owners</strong> with <strong>company formation in Dubai</strong> in the appropriate jurisdiction and with the appropriate company structure</p>
					<p>Warm regards,<br>Team, WhiteWorth<br><em></em>
					<p>Contact Us</p>
						Call Us: <a href="tel:+971585606800" data-mce-href="tel:+971585606800">+971585606800</a>&nbsp;|&nbsp; <a href="tel:+918882038525">+918882038525</a>  <br> <br>
						Site:<a href="https://test.legalraasta.com/whiteworth" data-mce-href="https://test.legalraasta.com/whiteworth">www.thewhiteworth.com</a><br> <br>
						Dubai Office :<a href="https://goo.gl/maps/T8roTQnp2RtndkPj6"> 801 (02), Latifa Towers, Sheikh Zayed Road , Dubai </a></p>
							
							<a href="https://www.facebook.com/WhiteWorth"
							data-mce-href="https://www.facebook.com/WhiteWorth">Facebook</a>&nbsp;|&nbsp;<a
							href="https://www.linkedin.com/company/80065080/admin/"
							data-mce-href="https://www.linkedin.com/company/80065080/admin/">Linkedin</a>&nbsp;|&nbsp;<a
							href="https://twitter.com/thewhiteworth"
							data-mce-href="https://twitter.com/thewhiteworth">Twitter</a>&nbsp;|&nbsp;<a
							href="https://in.pinterest.com/whiteworthAdvisors/"
							data-mce-href="https://in.pinterest.com/whiteworthAdvisors/">Pinterest</a></p>
				</div>
			</body>
		</html>';
		}else if(isset($_POST['service_code']) && $service_code == '042') {
			$Body='<html>
			<body>
				<div>Dear '.$_POST['name'].'
					<p>We wanted to take a moment to thank you for choosing our '. $service_name[$service_code].'. We appreciate the trust you have placed in Whiteworth, and we are committed to delivering the highest quality service in setting up your business in Dubai. Additionally, we also provide business setup services in Free Zone, Mainland and Offshore areas. <br>
					We are grateful for the opportunity to work with you and for the positive impact that our License services have had on your business. Your satisfaction is Whiteworth’s top priority, and we are dedicated to ensuring that you receive the best possible experience with our company. Click to know about our services and us</p>
				
					<p><strong>About Whiteworth:<br></strong>With over 5 years of experience in company formation in Dubai, we provide a one-stop-shop approach for quick business registration, offering complete services for all incorporation, licensing, and other associated services to<a href="https://test.legalraasta.com/whiteworth/freezone-mainland-uae.html"><strong> Free Zone,</strong></a> <a href="https://test.legalraasta.com/whiteworth/mainland-business-dubai.html"><strong>Mainland</strong></a> & <a href="https://test.legalraasta.com/whiteworth/offshore-company-formation-dubai-uae.html"><strong>offshore</strong></a></p>
					<p>With access to a top pool of chances, we have been assisting Indian businessmen to realize their ambition of company formation in<strong> Dubai</strong>. In order to position themselves for long-term growth and success while avoiding mistakes that could end up costing them time and money, WhiteWorth has been assisting<strong> international business owners</strong> with <strong>company formation in Dubai</strong> in the appropriate jurisdiction and with the appropriate company structure</p>
					<p>Warm regards,<br>Team, WhiteWorth<br><em></em>
					<p>Contact Us</p>
						Call Us: <a href="tel:+971585606800" data-mce-href="tel:+971585606800">+971585606800</a>&nbsp;|&nbsp; <a href="tel:+918882038525">+918882038525</a>  <br> <br>
						Site:<a href="https://test.legalraasta.com/whiteworth" data-mce-href="https://test.legalraasta.com/whiteworth">www.thewhiteworth.com</a><br> <br>
						Dubai Office :<a href="https://goo.gl/maps/T8roTQnp2RtndkPj6"> 801 (02), Latifa Towers, Sheikh Zayed Road , Dubai </a></p>
							
							<a href="https://www.facebook.com/WhiteWorth"
							data-mce-href="https://www.facebook.com/WhiteWorth">Facebook</a>&nbsp;|&nbsp;<a
							href="https://www.linkedin.com/company/80065080/admin/"
							data-mce-href="https://www.linkedin.com/company/80065080/admin/">Linkedin</a>&nbsp;|&nbsp;<a
							href="https://twitter.com/thewhiteworth"
							data-mce-href="https://twitter.com/thewhiteworth">Twitter</a>&nbsp;|&nbsp;<a
							href="https://in.pinterest.com/whiteworthAdvisors/"
							data-mce-href="https://in.pinterest.com/whiteworthAdvisors/">Pinterest</a></p>
				</div>
			</body>
		</html>';
		}else if(isset($_POST['service_code']) && $service_code == '043') {
			$Body='<html>
			<body>
				<div>Dear '.$_POST['name'].'
					<p>We wanted to take a moment to thank you for choosing our '. $service_name[$service_code].'. We appreciate the trust you have placed in Whiteworth, and we are committed to delivering the highest quality service in setting up your business in Dubai. Additionally, we also provide business setup services in Free Zone, Mainland and Offshore areas. <br>
					We are grateful for the opportunity to work with you and for the positive impact that our License services have had on your business. Your satisfaction is Whiteworth’s top priority, and we are dedicated to ensuring that you receive the best possible experience with our company. Click to know about our services and us</p>
				
					<p><strong>About Whiteworth:<br></strong>With over 5 years of experience in company formation in Dubai, we provide a one-stop-shop approach for quick business registration, offering complete services for all incorporation, licensing, and other associated services to<a href="https://test.legalraasta.com/whiteworth/freezone-mainland-uae.html"><strong> Free Zone,</strong></a> <a href="https://test.legalraasta.com/whiteworth/mainland-business-dubai.html"><strong>Mainland</strong></a> & <a href="https://test.legalraasta.com/whiteworth/offshore-company-formation-dubai-uae.html"><strong>offshore</strong></a></p>
					<p>With access to a top pool of chances, we have been assisting Indian businessmen to realize their ambition of company formation in<strong> Dubai</strong>. In order to position themselves for long-term growth and success while avoiding mistakes that could end up costing them time and money, WhiteWorth has been assisting<strong> international business owners</strong> with <strong>company formation in Dubai</strong> in the appropriate jurisdiction and with the appropriate company structure</p>
					<p>Warm regards,<br>Team, WhiteWorth<br><em></em>
					<p>Contact Us</p>
						Call Us: <a href="tel:+971585606800" data-mce-href="tel:+971585606800">+971585606800</a>&nbsp;|&nbsp; <a href="tel:+918882038525">+918882038525</a>  <br> <br>
						Site:<a href="https://test.legalraasta.com/whiteworth" data-mce-href="https://test.legalraasta.com/whiteworth">www.thewhiteworth.com</a><br> <br>
						Dubai Office :<a href="https://goo.gl/maps/T8roTQnp2RtndkPj6"> 801 (02), Latifa Towers, Sheikh Zayed Road , Dubai </a></p>
							
							<a href="https://www.facebook.com/WhiteWorth"
							data-mce-href="https://www.facebook.com/WhiteWorth">Facebook</a>&nbsp;|&nbsp;<a
							href="https://www.linkedin.com/company/80065080/admin/"
							data-mce-href="https://www.linkedin.com/company/80065080/admin/">Linkedin</a>&nbsp;|&nbsp;<a
							href="https://twitter.com/thewhiteworth"
							data-mce-href="https://twitter.com/thewhiteworth">Twitter</a>&nbsp;|&nbsp;<a
							href="https://in.pinterest.com/whiteworthAdvisors/"
							data-mce-href="https://in.pinterest.com/whiteworthAdvisors/">Pinterest</a></p>
				</div>
			</body>
		</html>';
		}else if(isset($_POST['service_code']) && $service_code == '044') {
			$Body='<html>
			<body>
				<div>Dear '.$_POST['name'].'
					<p>We wanted to take a moment to thank you for choosing our '. $service_name[$service_code].'. We appreciate the trust you have placed in Whiteworth, and we are committed to delivering the highest quality service in setting up your business in Dubai. Additionally, we also provide business setup services in Free Zone, Mainland and Offshore areas. <br>
					We are grateful for the opportunity to work with you and for the positive impact that our License services have had on your business. Your satisfaction is Whiteworth’s top priority, and we are dedicated to ensuring that you receive the best possible experience with our company. Click to know about our services and us</p>
				
					<p><strong>About Whiteworth:<br></strong>With over 5 years of experience in company formation in Dubai, we provide a one-stop-shop approach for quick business registration, offering complete services for all incorporation, licensing, and other associated services to<a href="https://test.legalraasta.com/whiteworth/freezone-mainland-uae.html"><strong> Free Zone,</strong></a> <a href="https://test.legalraasta.com/whiteworth/mainland-business-dubai.html"><strong>Mainland</strong></a> & <a href="https://test.legalraasta.com/whiteworth/offshore-company-formation-dubai-uae.html"><strong>offshore</strong></a></p>
					<p>With access to a top pool of chances, we have been assisting Indian businessmen to realize their ambition of company formation in<strong> Dubai</strong>. In order to position themselves for long-term growth and success while avoiding mistakes that could end up costing them time and money, WhiteWorth has been assisting<strong> international business owners</strong> with <strong>company formation in Dubai</strong> in the appropriate jurisdiction and with the appropriate company structure</p>
					<p>Warm regards,<br>Team, WhiteWorth<br><em></em>
					<p>Contact Us</p>
						Call Us: <a href="tel:+971585606800" data-mce-href="tel:+971585606800">+971585606800</a>&nbsp;|&nbsp; <a href="tel:+918882038525">+918882038525</a>  <br> <br>
						Site:<a href="https://test.legalraasta.com/whiteworth" data-mce-href="https://test.legalraasta.com/whiteworth">www.thewhiteworth.com</a><br> <br>
						Dubai Office :<a href="https://goo.gl/maps/T8roTQnp2RtndkPj6"> 801 (02), Latifa Towers, Sheikh Zayed Road , Dubai </a></p>
							
							<a href="https://www.facebook.com/WhiteWorth"
							data-mce-href="https://www.facebook.com/WhiteWorth">Facebook</a>&nbsp;|&nbsp;<a
							href="https://www.linkedin.com/company/80065080/admin/"
							data-mce-href="https://www.linkedin.com/company/80065080/admin/">Linkedin</a>&nbsp;|&nbsp;<a
							href="https://twitter.com/thewhiteworth"
							data-mce-href="https://twitter.com/thewhiteworth">Twitter</a>&nbsp;|&nbsp;<a
							href="https://in.pinterest.com/whiteworthAdvisors/"
							data-mce-href="https://in.pinterest.com/whiteworthAdvisors/">Pinterest</a></p>
				</div>
			</body>
		</html>';
		}else if(isset($_POST['service_code']) && $service_code == '045') {
			$Body='<html>
			<body>
				<div>Dear '.$_POST['name'].'
					<p>We wanted to take a moment to thank you for choosing our '. $service_name[$service_code].'. We appreciate the trust you have placed in Whiteworth, and we are committed to delivering the highest quality service in setting up your business in Dubai. Additionally, we also provide business setup services in Free Zone, Mainland and Offshore areas. <br>
					We are grateful for the opportunity to work with you and for the positive impact that our License services have had on your business. Your satisfaction is Whiteworth’s top priority, and we are dedicated to ensuring that you receive the best possible experience with our company. Click to know about our services and us</p>
				
					<p><strong>About Whiteworth:<br></strong>With over 5 years of experience in company formation in Dubai, we provide a one-stop-shop approach for quick business registration, offering complete services for all incorporation, licensing, and other associated services to<a href="https://test.legalraasta.com/whiteworth/freezone-mainland-uae.html"><strong> Free Zone,</strong></a> <a href="https://test.legalraasta.com/whiteworth/mainland-business-dubai.html"><strong>Mainland</strong></a> & <a href="https://test.legalraasta.com/whiteworth/offshore-company-formation-dubai-uae.html"><strong>offshore</strong></a></p>
					<p>With access to a top pool of chances, we have been assisting Indian businessmen to realize their ambition of company formation in<strong> Dubai</strong>. In order to position themselves for long-term growth and success while avoiding mistakes that could end up costing them time and money, WhiteWorth has been assisting<strong> international business owners</strong> with <strong>company formation in Dubai</strong> in the appropriate jurisdiction and with the appropriate company structure</p>
					<p>Warm regards,<br>Team, WhiteWorth<br><em></em>
					<p>Contact Us</p>
						Call Us: <a href="tel:+971585606800" data-mce-href="tel:+971585606800">+971585606800</a>&nbsp;|&nbsp; <a href="tel:+918882038525">+918882038525</a>  <br> <br>
						Site:<a href="https://test.legalraasta.com/whiteworth" data-mce-href="https://test.legalraasta.com/whiteworth">www.thewhiteworth.com</a><br> <br>
						Dubai Office :<a href="https://goo.gl/maps/T8roTQnp2RtndkPj6"> 801 (02), Latifa Towers, Sheikh Zayed Road , Dubai </a></p>
							
							<a href="https://www.facebook.com/WhiteWorth"
							data-mce-href="https://www.facebook.com/WhiteWorth">Facebook</a>&nbsp;|&nbsp;<a
							href="https://www.linkedin.com/company/80065080/admin/"
							data-mce-href="https://www.linkedin.com/company/80065080/admin/">Linkedin</a>&nbsp;|&nbsp;<a
							href="https://twitter.com/thewhiteworth"
							data-mce-href="https://twitter.com/thewhiteworth">Twitter</a>&nbsp;|&nbsp;<a
							href="https://in.pinterest.com/whiteworthAdvisors/"
							data-mce-href="https://in.pinterest.com/whiteworthAdvisors/">Pinterest</a></p>
				</div>
			</body>
		</html>';
		}else if(isset($_POST['service_code']) && $service_code == '046') {
			$Body='<html>
			<body>
				<div>Dear '.$_POST['name'].'
					<p>We wanted to take a moment to thank you for choosing our '. $service_name[$service_code].'. We appreciate the trust you have placed in Whiteworth, and we are committed to delivering the highest quality service in setting up your business in Dubai. Additionally, we also provide business setup services in Free Zone, Mainland and Offshore areas. <br>
					We are grateful for the opportunity to work with you and for the positive impact that our License services have had on your business. Your satisfaction is Whiteworth’s top priority, and we are dedicated to ensuring that you receive the best possible experience with our company. Click to know about our services and us</p>
				
					<p><strong>About Whiteworth:<br></strong>With over 5 years of experience in company formation in Dubai, we provide a one-stop-shop approach for quick business registration, offering complete services for all incorporation, licensing, and other associated services to<a href="https://test.legalraasta.com/whiteworth/freezone-mainland-uae.html"><strong> Free Zone,</strong></a> <a href="https://test.legalraasta.com/whiteworth/mainland-business-dubai.html"><strong>Mainland</strong></a> & <a href="https://test.legalraasta.com/whiteworth/offshore-company-formation-dubai-uae.html"><strong>offshore</strong></a></p>
					<p>With access to a top pool of chances, we have been assisting Indian businessmen to realize their ambition of company formation in<strong> Dubai</strong>. In order to position themselves for long-term growth and success while avoiding mistakes that could end up costing them time and money, WhiteWorth has been assisting<strong> international business owners</strong> with <strong>company formation in Dubai</strong> in the appropriate jurisdiction and with the appropriate company structure</p>
					<p>Warm regards,<br>Team, WhiteWorth<br><em></em>
					<p>Contact Us</p>
						Call Us: <a href="tel:+971585606800" data-mce-href="tel:+971585606800">+971585606800</a>&nbsp;|&nbsp; <a href="tel:+918882038525">+918882038525</a>  <br> <br>
						Site:<a href="https://test.legalraasta.com/whiteworth" data-mce-href="https://test.legalraasta.com/whiteworth">www.thewhiteworth.com</a><br> <br>
						Dubai Office :<a href="https://goo.gl/maps/T8roTQnp2RtndkPj6"> 801 (02), Latifa Towers, Sheikh Zayed Road , Dubai </a></p>
							
							<a href="https://www.facebook.com/WhiteWorth"
							data-mce-href="https://www.facebook.com/WhiteWorth">Facebook</a>&nbsp;|&nbsp;<a
							href="https://www.linkedin.com/company/80065080/admin/"
							data-mce-href="https://www.linkedin.com/company/80065080/admin/">Linkedin</a>&nbsp;|&nbsp;<a
							href="https://twitter.com/thewhiteworth"
							data-mce-href="https://twitter.com/thewhiteworth">Twitter</a>&nbsp;|&nbsp;<a
							href="https://in.pinterest.com/whiteworthAdvisors/"
							data-mce-href="https://in.pinterest.com/whiteworthAdvisors/">Pinterest</a></p>
				</div>
			</body>
		</html>';
		}
		else if(isset($_POST['service_code']) && $service_code == '047') {
			$Body='<html>
			<body>
				<div>Dear '.$_POST['name'].'
					<p>We wanted to take a moment to thank you for choosing our '. $service_name[$service_code].'. We appreciate the trust you have placed in Whiteworth, and we are committed to delivering the highest quality service in setting up your business in Dubai. Additionally, we also provide business setup services in Free Zone, Mainland and Offshore areas. <br>
					We are grateful for the opportunity to work with you and for the positive impact that our License services have had on your business. Your satisfaction is Whiteworth’s top priority, and we are dedicated to ensuring that you receive the best possible experience with our company. Click to know about our services and us</p>
				
					<p><strong>About Whiteworth:<br></strong>With over 5 years of experience in company formation in Dubai, we provide a one-stop-shop approach for quick business registration, offering complete services for all incorporation, licensing, and other associated services to<a href="https://test.legalraasta.com/whiteworth/freezone-mainland-uae.html"><strong> Free Zone,</strong></a> <a href="https://test.legalraasta.com/whiteworth/mainland-business-dubai.html"><strong>Mainland</strong></a> & <a href="https://test.legalraasta.com/whiteworth/offshore-company-formation-dubai-uae.html"><strong>offshore</strong></a></p>
					<p>With access to a top pool of chances, we have been assisting Indian businessmen to realize their ambition of company formation in<strong> Dubai</strong>. In order to position themselves for long-term growth and success while avoiding mistakes that could end up costing them time and money, WhiteWorth has been assisting<strong> international business owners</strong> with <strong>company formation in Dubai</strong> in the appropriate jurisdiction and with the appropriate company structure</p>
					<p>Warm regards,<br>Team, WhiteWorth<br><em></em>
					<p>Contact Us</p>
						Call Us: <a href="tel:+971585606800" data-mce-href="tel:+971585606800">+971585606800</a>&nbsp;|&nbsp; <a href="tel:+918882038525">+918882038525</a>  <br> <br>
						Site:<a href="https://test.legalraasta.com/whiteworth" data-mce-href="https://test.legalraasta.com/whiteworth">www.thewhiteworth.com</a><br> <br>
						Dubai Office :<a href="https://goo.gl/maps/T8roTQnp2RtndkPj6"> 801 (02), Latifa Towers, Sheikh Zayed Road , Dubai </a></p>
							
							<a href="https://www.facebook.com/WhiteWorth"
							data-mce-href="https://www.facebook.com/WhiteWorth">Facebook</a>&nbsp;|&nbsp;<a
							href="https://www.linkedin.com/company/80065080/admin/"
							data-mce-href="https://www.linkedin.com/company/80065080/admin/">Linkedin</a>&nbsp;|&nbsp;<a
							href="https://twitter.com/thewhiteworth"
							data-mce-href="https://twitter.com/thewhiteworth">Twitter</a>&nbsp;|&nbsp;<a
							href="https://in.pinterest.com/whiteworthAdvisors/"
							data-mce-href="https://in.pinterest.com/whiteworthAdvisors/">Pinterest</a></p>
				</div>
			</body>
		</html>';
		}
		$custmail->MsgHTML($Body); 
		if(!$custmail->send()) {
		echo 'Message was not sent.';
		echo 'Mailer error: ' . $custmail->ErrorInfo;
		} 

		else {
		echo 'Message has been sent.';
		}
}

exit(json_encode(array("status" => $status, "response" => $response)));
