<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);



use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'autoload.php';
// Mail blocker code
$str = "salescoordintorlr@gmail.com";
$domainBlacklist = ['gmail.com', 'hotmail.com'];
$domain = array_shift(explode('@',$str ));
// if(!in_array($domain,$str)){
	if (isset($_POST['name']) && isset($_POST['email'])) {
		
		$name = $_POST['name'];

		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$service_code =$_POST['service_code'];
		$service_name = [
			
			'001' =>'Abu dhabi Business',
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
		];
		$status="fa";
		$response ="jack";
		
		// $body = $_POST['body'];

		// print_r($_POST);
		// die();

		// require_once "PHPMailer/PHPMailer.php";
		// require_once "PHPMailer/SMTP.php";
		// require_once "PHPMailer/Exception.php";

		$mail = new PHPMailer();

		//SMTP Settings

		// $mail->SMTPDebug  = 1;
		// $mail->Host = "smtp.gmail.com";
		// $mail->SMTPAuth = true;
		// $mail->Username   = "legalraastatech1@gmail.com";
		// $mail->Password   = "kycxlcjyvhoztkrf"; //enter you email password
		// $mail->Port = 465;
		// $mail->SMTPSecure = "ssl";
		$mail->isSMTP();
		$mail->SMTPDebug  = 1;
		$mail->Host = "smtp.gmail.com";
		$mail->SMTPAuth = true;
		$mail->Username   = "legalraastatech3@gmail.com";
		// $mail->Password   = "pxasezljigulizov";
		$mail->Port = 465;
		$mail->SMTPSecure = "ssl";


		//Email Settings
		$mail->isHTML(true);
		$mail->setFrom($email, $name);
		$mail->addAddress("legalraastatech3@gmail.com","Admin"); //enter you email address
		$mail->Subject = ("New Submission");
		$mail->Body = '<html>

			<body>    
				<h2>User Form Data</h2>
				
				<table style="font-family: arial, sans-serif;
				border-collapse: collapse;
				width: 100%;">
				
				<tr>
					<td style="border: 1px solid #dddddd;text-align: left;padding: 8px;">Name</td>
					<td style="border: 1px solid #dddddd;text-align: left;padding: 8px;">'.$name.'</td>
				
				</tr>
				<tr style="background-color: #dddddd;">
					<td style="border: 1px solid #dddddd;text-align: left;padding: 8px;">Email</td>
					<td style="border: 1px solid #dddddd;text-align: left;padding: 8px;">'.$email.'</td>
					
				</tr>
				<tr>
					<td style="border: 1px solid #dddddd;text-align: left;padding: 8px;">Number</td>
					<td style="border: 1px solid #dddddd;text-align: left;padding: 8px;">'.$phone.'</td>
				</tr>
				<tr>
					<td style="border: 1px solid #dddddd;text-align: left;padding: 8px;">Service Code</td>
					<td style="border: 1px solid #dddddd;text-align: left;padding: 8px;">'.$service_code.'</td>
				</tr>
				<tr>
					<td style="border: 1px solid #dddddd;text-align: left;padding: 8px;">Service Name</td>
					<td style="border: 1px solid #dddddd;text-align: left;padding: 8px;">'.$service_name[$service_code].'</td>
				</tr>
				
				</table>
			</body>
			</html>';

		if ($mail->send()) {
			$status = "success";
			$response = "Email is sent!";
		} else {
			$status = "failed";
			$response = "Something is wrong: <br><br>" . $mail->ErrorInfo;
		}

		
	}
// }
exit(json_encode(array("status" => $status, "response" => $response)));
?>
