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
		'001' =>'Trademark-Assignment',
		'002' =>'Private Limited Company Registration',
		'003' =>'Drug License',
		'004' =>'GST Registration',
		'005' =>'FSSAI Food License',
		'006' =>'Limited Liability Partnership (LLP) Registration',
		'007' =>'Trademark Registration',
		'008' =>'Eating House License Registration',
		'009' =>'GST Return Filing Online',
		'010' =>'ISO Registration',
		'011' =>'Conversion of Partnership firm to LLP',
		'012' =>'Convert Private Limited To Public Limited',
		'013' =>'Sole Proprietorship Registration',
		'014' =>'Public Limited Company Registration',
		'015' =>'One Person Company Registration',
		'016' =>'Convert Sole Proprietorship To Private Limited Company',
		'017' =>'Producer Company Registration',
		'018' =>'NBFC License',
		'019' =>'Patent Search',
		'020' =>'Respond To Tax Notice',
		'021' =>'Trademark Renewal',
		'022' =>'Income Tax Return',
		'023' =>'MSME Registration',
		'024' =>'Trademark Objection',
		'025' =>'Trademark Watch Service',
		'026' =>'Trademark Opposition',
		'027' =>'BUY NBFC',
		'028' =>'NGO Registration',
		'029' =>'Indian Subsidiary Registration',
		'030' =>'Section 8 Company Registration',
		'031' =>'Nidhi Company Registration',
		'032' =>'Register Trade License',
		'033' =>'ESI Registration',
		'034' =>'Partnership Registration',
		'035' =>'Employees Provident Fund',
		'036' =>'Professional Tax Registration',
		'037' =>'Increase In Authorised Share Capital',
		'038' =>'Allotment Of Shares',
		'039' =>'GST Software',
		'040' =>'TDS Return',
		'041' =>'Accounting & Bookkeeping Services',
		'042' =>'Copyright Registration',
		'043' =>'ROC Company Compliances',
		'044' =>'Provisional Patent',
		'045' =>'IEC Registration Online',
		'046' =>'LLP Annual Filing',
		'047' =>'Franchise Business Opportunity',
		'048' =>'Company Annual Filing',
		'049' =>'Business Income Return Filing',
		'050' =>'Bulk Return Filing',
		'051' =>'Digital Signature(DSC)',
		'052' =>'Microfinance Company Registration',
		'053' =>'Maintenance Of Minutes',
		'054' =>'Change In Directors',
		'055' =>'TAN Registration',
		'056' =>'Patent Registration',
		'057' =>'Trademark Search'
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
				<div>Dear '.$_POST['name'].'<p>We&nbsp;welcome&nbsp;you to LegalRaasta&nbsp;customer&nbsp;family! Every
						year&nbsp;Legalraasta&nbsp;<strong>helps more than 500+ companies</strong>&nbsp;in Trademark assignment
						registration.</p>
				</div>
				<div>Our Trademark assignment registration package includes:&nbsp;Trademark consultation, application preparation,
					application filing, same day filing &amp; government fees.</div>
				<div>Time required: &lt;3 working days</div>
				<div>Cost: Rs. 9,999 only.</div>
				<div>Please follow the below steps to complete application:</div>
				<div><strong>Step 1: Fill application form - <a
							href="https://www.legalraasta.com/trademark-assignment-application-form/" target="_blank" rel="noopener"
							data-mce-href="https://www.legalraasta.com/trademark-assignment-application-form/">Click
							here</a></strong>
					<p><strong>Steps 2: Make payment : </strong>Total charge of Rs. 9,999<strong>.&nbsp;</strong>Choose from the
						following options:</p>
					<ul>
						<li>Netbanking/ Credit card/ Debit card :&nbsp;<strong><a href="https://www.legalraasta.com/payment/"
									target="_blank" rel="noopener" data-mce-href="https://www.legalraasta.com/payment/">Click here
									to make Payment</a></strong></li>
						<li>Bank Transfer: Company: LegalRaasta Technologies Pvt. Ltd., Bank: Kotak Mahindra, Saraswati Vihar,
							Delhi, IFSC: KKBK0004604, A/c no: 9312250417</li>
					</ul>
					<p><strong>Step 3: Submit&nbsp;documents-&nbsp;</strong>Please email us the following&nbsp;documents&nbsp;(you
						can reply to this mail)</p>
					<ul>
						<li>PAN Card copy of transferee</li>
						<li>ID Proof of transferee (Prefer Aadhaar Card)</li>
						<li>Residential Proof of transferee (Telephone or Mobile Bill/ Electricity or Gas Bill)</li>
						<li>Incorporation documents of transferee (in case of a company)</li>
						<li>Trademark certificate or TM number acknowledgement</li>
					</ul>
					<p>You can refer to the following articles for more information on Trademark service.&nbsp;&nbsp;You can also
						view our YouTube guide on <a href="https://www.youtube.com/watch?v=1qnH5NYYtCk" target="_blank"
							rel="noopener" data-mce-href="https://www.youtube.com/watch?v=1qnH5NYYtCk">Trademark
							registration</a>.&nbsp;Happy to help!!</p>
					<p>For complete procedure for Trademark Registration.&nbsp;<a
							href="https://www.legalraasta.com/what-is-the-procedure-to-register-trademark/"
							data-mce-href="https://www.legalraasta.com/what-is-the-procedure-to-register-trademark/">Click Here</a>
					</p>
					<p>For Classes of goods &amp; Services for Trademark. <a
							href="https://www.legalraasta.com/class-of-goods-and-services-for-trademark/"
							data-mce-href="https://www.legalraasta.com/class-of-goods-and-services-for-trademark/">Click Here</a>
					</p>
					<ol>
						<li><a href="https://www.legalraasta.com/trademark-registration-process-in-india/" target="_blank"
								rel="noopener"
								data-mce-href="https://www.legalraasta.com/trademark-registration-process-in-india/">Guide for
								Trademark service</a></li>
						<li><a href="https://www.legalraasta.com/trademark-all-you-need-to-know/" target="_blank" rel="noopener"
								data-mce-href="https://www.legalraasta.com/trademark-all-you-need-to-know/">Trademark service
								registration process</a></li>
						<li><a href="https://www.legalraasta.com/copyright-in-india/" target="_blank" rel="noopener"
								data-mce-href="https://www.legalraasta.com/copyright-in-india/">Copyright Registration
								comparison</a></li>
					</ol>
					<p><strong>About LegalRaasta:<br></strong>LegalRaasta is India leading business services provider. LegalRaasta
						serves more than 2200+ businesses ever year. We offer 30+ services including <strong>GST, ITR, TDS, Company
							formation, Service tax, IEC, Trademark, FSSAI, ROC, ISO, &amp; Loans.</strong></p>
					<p>LegalRaasta also has <strong>tie ups with 40+ Banks &amp; NBFCs</strong> and can help you with
						<strong>business loans</strong>.</p>
					<p>Warm regards,<br>Team, LegalRaasta<br><em><a
								href="https://www.legalraasta.com/private-limited-company-registration/"
								data-mce-href="https://www.legalraasta.com/private-limited-company-registration/">Company
								formation</a> | <a href="https://www.legalraasta.com/trademark-registration/"
								data-mce-href="https://www.legalraasta.com/trademark-registration/">Trademark</a> | <a
								href="https://www.legalraasta.com/fssai-license/"
								data-mce-href="https://www.legalraasta.com/fssai-license/">Licenses</a> | <a
								href="https://www.legalraasta.com/gst-registration/"
								data-mce-href="https://www.legalraasta.com/gst-registration/">GST</a>, <a
								href="https://www.legalraasta.com/income-tax-return/"
								data-mce-href="https://www.legalraasta.com/income-tax-return/">ITR</a> &amp; <a
								href="https://www.legalraasta.com/tds-return/"
								data-mce-href="https://www.legalraasta.com/tds-return/">TDS</a> | <a
								href="https://www.legalraasta.com/loan/"
								data-mce-href="https://www.legalraasta.com/loan/">Loans</a></em><br>M:&nbsp;<a
							href="tel:%2B91%20875%20000%208585" data-mce-href="tel:%2B91%20875%20000%208585">+91 875 000
							8585</a>&nbsp;|&nbsp;<a href="https://www.legalraasta.com/"
							data-mce-href="https://www.legalraasta.com/">www.legalraasta.com</a><br>Head office: B-300, Saraswati
						Vihar, Pitampura, Delhi<br><a href="https://www.facebook.com/legalraasta/"
							data-mce-href="https://www.facebook.com/legalraasta/">Facebook</a>&nbsp;|&nbsp;<a
							href="https://www.linkedin.com/in/LegalRaasta/"
							data-mce-href="https://www.linkedin.com/in/LegalRaasta/">Linkedin</a>&nbsp;|&nbsp;<a
							href="https://twitter.com/LRaasta"
							data-mce-href="https://twitter.com/LRaasta">Twitter</a>&nbsp;|&nbsp;<a
							href="https://www.youtube.com/watch?v=NSIg1XT-KM0&amp;t=1s"
							data-mce-href="https://www.youtube.com/watch?v=NSIg1XT-KM0&amp;t=1s">YouTube</a></p>
				</div>
			</body>
		</html>';
		}else if(isset($_POST['service_code']) && $service_code == '002') {
			$Body ='<html>
			<body>
				<p class="western">Hi '.$_POST['name'].', </p>
				<p>Greetings from LegalRaasta - India’s top financial services platform!&nbsp;Every year LegalRaasta helps more than
					500+ companies in Company formation.</p>
				<p><b>Package includes:</b>&nbsp;2 DIN (Director Identification no)&nbsp;,&nbsp;2 DSC,&nbsp;, Name Search &amp;
					Filing (2 times ), MOA/ AOA Filing, ROC registration Fees (upto 1 lakh capital), PAN &amp; TAN, Certificate of
					Incorporation and Auditor Appoinement.</p>
				<p><b>Time required</b>: 15-20 working days*</p>
				<p><b>Cost</b>: Rs. 6,999 onwards (incl. GST), <a href="https://www.legalraasta.com/payment/"
						data-mce-href="https://www.legalraasta.com/payment/"><b>click here to pay</b>&nbsp;</a></p>
				<p><b>Process</b>:</p>
				<p>Step 1: Fill the application form</p>
				<p>Step 2: Pay Rs. 6,999</p>
				<p>Step 3: Upload Documents</p>
				<p><b>Documents Required:&nbsp;</b>PAN Card of Directors (Copy),&nbsp;ID Proof of Directors (Prefer Aadhaar
					Card)<b>,&nbsp;</b>Passport size photograph of all the Directors<b>,&nbsp;</b>Residential Proof of registered
					office (Telephone or Mobile Bill/ Electricity or Gas Bill)<b>,&nbsp;</b>Landlord NOC (we will provide the
					format)<b>,&nbsp;</b>Bank statement/Utility bill of Director</p>
				<p><b>Also, provide the KYC docs of the Subscriber</b></p>
				<p>You can also view our Youtube guide on&nbsp;<b><a href="https://www.youtube.com/watch?v=mMb_DAdbzmU&amp;t=18s"
							data-mce-href="https://www.youtube.com/watch?v=mMb_DAdbzmU&amp;t=18s">Private Limited
							Company</a><br></b>&nbsp;<b>LegalRaasta in News:&nbsp;</b><a
						href="https://economictimes.indiatimes.com/small-biz/startups/legalraasta-raises-rs-6-5-crore-in-angel-round/articleshow/51813536.cms"
						data-mce-href="https://economictimes.indiatimes.com/small-biz/startups/legalraasta-raises-rs-6-5-crore-in-angel-round/articleshow/51813536.cms">Economic
						times</a>&nbsp;|&nbsp;<a
						href="https://economictimes.indiatimes.com/small-biz/money/legal-business-consultancy-firm-legalraasta-raises-funds-to-provide-gst-c0mpliance-software-to-more-smes/articleshow/58638228.cms"
						data-mce-href="https://economictimes.indiatimes.com/small-biz/money/legal-business-consultancy-firm-legalraasta-raises-funds-to-provide-gst-c0mpliance-software-to-more-smes/articleshow/58638228.cms">IndiaTimes</a>&nbsp;|&nbsp;<a
						href="https://www.vccircle.com/exclusive-legal-raasta-raises-5-mn-in-series-a-round/"
						data-mce-href="https://www.vccircle.com/exclusive-legal-raasta-raises-5-mn-in-series-a-round/">VCCircle</a>&nbsp;|&nbsp;<a
						href="http://bwdisrupt.businessworld.in/article/Delhi-Based-Startup-LegalRaasta-Raises-5M-in-Series-A-Round-from-Impanix-Capital/12-05-2017-118035/"
						data-mce-href="http://bwdisrupt.businessworld.in/article/Delhi-Based-Startup-LegalRaasta-Raises-5M-in-Series-A-Round-from-Impanix-Capital/12-05-2017-118035/">BusinessWorld</a>&nbsp;|&nbsp;<a
						href="https://www.youtube.com/watch?v=NSIg1XT-KM0&amp;t=1s"
						data-mce-href="https://www.youtube.com/watch?v=NSIg1XT-KM0&amp;t=1s">YouTube</a></p>
				<p><a href="https://www.legalraasta.com/private-limited-company-registration/"
						data-mce-href="https://www.legalraasta.com/private-limited-company-registration/">Company
						formation</a><em>&nbsp;|&nbsp;</em><a href="https://www.legalraasta.com/trademark-registration/"
						data-mce-href="https://www.legalraasta.com/trademark-registration/">Trademark</a><em>&nbsp;|&nbsp;</em><a
						href="https://www.legalraasta.com/fssai-license/"
						data-mce-href="https://www.legalraasta.com/fssai-license/">Licenses</a><em>&nbsp;|&nbsp;</em><a
						href="https://www.legalraasta.com/gst-registration/"
						data-mce-href="https://www.legalraasta.com/gst-registration/">GST</a><em>&nbsp;|&nbsp;</em><a
						href="https://www.legalraasta.com/accounting-bookkeeping/"
						data-mce-href="https://www.legalraasta.com/accounting-bookkeeping/">Accounting</a><em>&nbsp;&nbsp;</em><br><a
						href="https://www.legalraasta.com/" data-mce-href="https://www.legalraasta.com/">legalraasta.com</a><br>*<a
						href="https://www.legalraasta.com/terms-and-conditions/"
						data-mce-href="https://www.legalraasta.com/terms-and-conditions/">Terms &amp; Conditions apply</a></p>
			</body>
		</html>';
	  	}else if(isset($_POST['service_code']) && $service_code == '003') {
			$Body='<html>
			<body>
				<div>Dear {Name:1}<br>We&nbsp;welcome&nbsp;you to LegalRaasta&nbsp;customer&nbsp;family! Every
					year&nbsp;Legalraasta&nbsp;<strong>helps more than 100+ companies</strong>&nbsp;in Drug
					License&nbsp;registration.</div>
				<div>Our Drug License&nbsp;registration package includes:&nbsp;Eligibility Consultation, document preparation,
					application drafting, application filing &amp;&nbsp;Government Fees.</div>
				<div>Time required: &lt;40 working days</div>
				<div>Cost:: Rs. 39,999  (including GST) onwards.</div>
				<div>Please follow the below steps to complete application:</div>
				<div><strong>Step 1: Fill application form - <a href="https://www.legalraasta.com/fssai-application-form/"
							target="_blank" rel="noopener" data-mce-href="https://www.legalraasta.com/fssai-application-form/">Click
							here</a></strong>
					<p><strong>Steps 2: Make payment : </strong>Total charge of: Rs. 39,999 . Choose from the following options:</p>
					<ul>
						<li><strong>&nbsp;</strong>Netbanking/ Credit card/ Debit card :&nbsp;<strong><a
									href="https://www.legalraasta.com/payment/" target="_blank" rel="noopener"
									data-mce-href="https://www.legalraasta.com/payment/">Click here to make Payment</a></strong>
						</li>
						<li>Bank Transfer: Company: LegalRaasta Technologies Pvt. Ltd., Bank: Kotak Mahindra, Saraswati Vihar,
							Delhi, IFSC: KKBK0004604, A/c no: 9312250417</li>
					</ul>
					<p><strong>Step 3: Submit&nbsp;documents-&nbsp;</strong>Please email us the following&nbsp;documents&nbsp;(you
						can reply to this mail)</p>
					<ul>
						<li>Copy of Aadhaar Card/ Voter identity card of Director/Partner/Proprietor</li>
						<li>PAN Card of company &amp; director/firm &amp; partners/proprietor</li>
						<li>Copy of Aadhaar Card/ Voter identity card and PAN Card of nominee</li>
						<li>Property papers copy (If owned property)</li>
						<li><i class="icon-ok"></i>Rent agreement copy (If rented property)</li>
						<li>Electricity/ water bill/Telephone bill / Mobile bill of business place</li>
						<li>MOA/AOA (in case of company)</li>
						<li>Copy of Partnership Deed (in case of partnership)</li>
					</ul>
					<p>Additional document for Manufacturer</p>
					<div class="one_half last">
						<ul class="styled-list">
							<li><i class="icon-ok"></i>Blueprint/layout plan of the processing unit</li>
							<li><i class="icon-ok"></i>Name and List of Equipments and Machinery along with the number, installed
								capacity and horse power used</li>
							<li><i class="icon-ok"></i>List of food category desired to be manufactured</li>
							<li><i class="icon-ok"></i>Pesticide residues report of water</li>
							<li><i class="icon-ok"></i>Upload Production unit photograph</li>
						</ul>
					</div>
					<p>You can refer to the following articles for more information on FSSAI License&nbsp;service.&nbsp;You can also
						view our Youtube guide on <a href="https://www.youtube.com/watch?v=NNQv9R_jEvk&amp;t=6s" target="_blank"
							rel="noopener"
							data-mce-href="https://www.youtube.com/watch?v=NNQv9R_jEvk&amp;t=6s">Legalraasta</a>.&nbsp;Happy to
						help!!</p>
					<ol>
						<li><a href="https://www.legalraasta.com/get-fssai-license-india/" target="_blank" rel="noopener"
								data-mce-href="https://www.legalraasta.com/get-fssai-license-india/">Guide for FSSAI License
								registration</a></li>
					</ol>
					<p><strong>Chance to win an Ipad ! Share our page on <a
								href="https://accounts.google.com/ServiceLogin?service=oz&amp;passive=1209600&amp;continue=https://plus.google.com/share?url%3Dhttps://www.legalraasta.com/fssai-license/%26hl%3Den%26gpsrc%3Dgplp0&amp;btmpl=popup&amp;hl=en#identifier"
								target="_blank" rel="noopener"
								data-mce-href="https://accounts.google.com/ServiceLogin?service=oz&amp;passive=1209600&amp;continue=https://plus.google.com/share?url%3Dhttps://www.legalraasta.com/fssai-license/%26hl%3Den%26gpsrc%3Dgplp0&amp;btmpl=popup&amp;hl=en#identifier">Google+</a>,
							<a href="https://www.facebook.com/login.php?skip_api_login=1&amp;api_key=966242223397117&amp;signed_next=1&amp;next=https%3A%2F%2Fwww.facebook.com%2Fsharer.php%3Fu%3Dwww.legalraasta.com%252Ffssai-license%252F&amp;cancel_url=https%3A%2F%2Fwww.facebook.com%2Fdialog%2Freturn%2Fclose%3Ferror_code%3D4201%26error_message%3DUser%2Bcanceled%2Bthe%2BDialog%2Bflow%23_%3D_&amp;display=popup&amp;locale=en_GB"
								target="_blank" rel="noopener"
								data-mce-href="https://www.facebook.com/login.php?skip_api_login=1&amp;api_key=966242223397117&amp;signed_next=1&amp;next=https%3A%2F%2Fwww.facebook.com%2Fsharer.php%3Fu%3Dwww.legalraasta.com%252Ffssai-license%252F&amp;cancel_url=https%3A%2F%2Fwww.facebook.com%2Fdialog%2Freturn%2Fclose%3Ferror_code%3D4201%26error_message%3DUser%2Bcanceled%2Bthe%2BDialog%2Bflow%23_%3D_&amp;display=popup&amp;locale=en_GB">Facebook</a>
							&amp; <a
								href="https://twitter.com/intent/tweet?source=sharethiscom&amp;text=Liked%20LegalRaasta%20services.%20Check%20out%20their%20page%20@LRaasta%20https://www.legalraasta.com/fssai-license"
								target="_blank" rel="noopener"
								data-mce-href="https://twitter.com/intent/tweet?source=sharethiscom&amp;text=Liked%20LegalRaasta%20services.%20Check%20out%20their%20page%20@LRaasta%20https://www.legalraasta.com/fssai-license">Twitter</a>.</strong>
					</p>
					<p><strong>About LegalRaasta:<br></strong>LegalRaasta is Indias leading business services provider. LegalRaasta
						serves more than 2200+ businesses ever year. We offer 30+ services including <strong>GST, ITR, TDS, Company
							formation, Service tax, IEC, Trademark, FSSAI, ROC, ISO, &amp; Loans.</strong></p>
					<p>LegalRaasta also has <strong>tie ups with 40+ Banks &amp; NBFCs</strong> and can help you with
						<strong>business loans</strong>.</p>
					<p>Warm regards,<br>Team, LegalRaasta<br><em><a
								href="https://www.legalraasta.com/private-limited-company-registration/"
								data-mce-href="https://www.legalraasta.com/private-limited-company-registration/">Company
								formation</a> | <a href="https://www.legalraasta.com/trademark-registration/"
								data-mce-href="https://www.legalraasta.com/trademark-registration/">Trademark</a> | <a
								href="https://www.legalraasta.com/fssai-license/"
								data-mce-href="https://www.legalraasta.com/fssai-license/">Licenses</a> | <a
								href="https://www.legalraasta.com/gst-registration/"
								data-mce-href="https://www.legalraasta.com/gst-registration/">GST</a>, <a
								href="https://www.legalraasta.com/income-tax-return/"
								data-mce-href="https://www.legalraasta.com/income-tax-return/">ITR</a> &amp; <a
								href="https://www.legalraasta.com/tds-return/"
								data-mce-href="https://www.legalraasta.com/tds-return/">TDS</a> | <a
								href="https://www.legalraasta.com/loan/"
								data-mce-href="https://www.legalraasta.com/loan/">Loans</a></em><br>M:&nbsp;<a
							href="tel:%2B91%20875%20000%208585" data-mce-href="tel:%2B91%20875%20000%208585">+91 875 000
							8585</a>&nbsp;|&nbsp;<a href="https://www.legalraasta.com/"
							data-mce-href="https://www.legalraasta.com/">www.legalraasta.com</a><br>Head office: B-300, Saraswati
						Vihar, Pitampura, Delhi<br><a href="https://www.facebook.com/legalraasta/"
							data-mce-href="https://www.facebook.com/legalraasta/">Facebook</a>&nbsp;|&nbsp;<a
							href="https://www.linkedin.com/in/LegalRaasta/"
							data-mce-href="https://www.linkedin.com/in/LegalRaasta/">Linkedin</a>&nbsp;|&nbsp;<a
							href="https://twitter.com/LRaasta"
							data-mce-href="https://twitter.com/LRaasta">Twitter</a>&nbsp;|&nbsp;<a
							href="https://www.youtube.com/watch?v=NSIg1XT-KM0&amp;t=1s"
							data-mce-href="https://www.youtube.com/watch?v=NSIg1XT-KM0&amp;t=1s">YouTube</a></p>
				</div>
			</body>
		</html>';
	  	}else if(isset($_POST['service_code']) && $service_code == '004') {
			$Body='<html>
					<body>
						<p class="western">Dear '.$_POST['name'].',</p>
						<p>Greetings from LegalRaasta - India’s top financial services platform! Every year LegalRaasta helps more than 500+
							companies with GST Registration.</p>
						<p><b>Time required</b>: &lt;5 working days*<br><b>Cost</b>: Rs. 999 onwards (incl. GST)</p>
						<p><b>Process:</b><br>Step 1: Fill the application form<br><b>Step 2: <a href="https://www.legalraasta.com/payment/"
									data-mce-href="https://www.legalraasta.com/payment/">Make payment</a></b></p>
						<p><b>Documents Required: </b>Pan Card of owners, Adhaar card of owners, Photograph of owners, Registration proof
							(Partnership Deed or COI in case of Company), Office address proof (electricity/ phone bill)</p>
						<p><b>LegalRaasta in News: </b><a
								href="https://economictimes.indiatimes.com/small-biz/startups/legalraasta-raises-rs-6-5-crore-in-angel-round/articleshow/51813536.cms"
								data-mce-href="https://economictimes.indiatimes.com/small-biz/startups/legalraasta-raises-rs-6-5-crore-in-angel-round/articleshow/51813536.cms">Economic
								times</a> | <a
								href="https://economictimes.indiatimes.com/small-biz/money/legal-business-consultancy-firm-legalraasta-raises-funds-to-provide-gst-c0mpliance-software-to-more-smes/articleshow/58638228.cms"
								data-mce-href="https://economictimes.indiatimes.com/small-biz/money/legal-business-consultancy-firm-legalraasta-raises-funds-to-provide-gst-c0mpliance-software-to-more-smes/articleshow/58638228.cms">IndiaTimes</a>
							| <a href="https://www.vccircle.com/exclusive-legal-raasta-raises-5-mn-in-series-a-round/"
								data-mce-href="https://www.vccircle.com/exclusive-legal-raasta-raises-5-mn-in-series-a-round/">VCCircle</a>
							| <a href="http://bwdisrupt.businessworld.in/article/Delhi-Based-Startup-LegalRaasta-Raises-5M-in-Series-A-Round-from-Impanix-Capital/12-05-2017-118035/"
								data-mce-href="http://bwdisrupt.businessworld.in/article/Delhi-Based-Startup-LegalRaasta-Raises-5M-in-Series-A-Round-from-Impanix-Capital/12-05-2017-118035/">BusinessWorld</a>
							| <a href="https://www.youtube.com/watch?v=NSIg1XT-KM0&amp;t=1s"
								data-mce-href="https://www.youtube.com/watch?v=NSIg1XT-KM0&amp;t=1s">YouTube</a><br><b><br></b>Warm
							regards,<br>Team, LegalRaasta<br><a href="https://www.legalraasta.com/private-limited-company-registration/"
								data-mce-href="https://www.legalraasta.com/private-limited-company-registration/"><i>Company
									formation</i></a><em>&nbsp;|&nbsp;</em><a href="https://www.legalraasta.com/trademark-registration/"
								data-mce-href="https://www.legalraasta.com/trademark-registration/"><i>Trademark</i></a><em>&nbsp;|&nbsp;</em><a
								href="https://www.legalraasta.com/fssai-license/"
								data-mce-href="https://www.legalraasta.com/fssai-license/"><i>Licenses</i></a><em>&nbsp;|&nbsp;</em><a
								href="https://www.legalraasta.com/gst-registration/"
								data-mce-href="https://www.legalraasta.com/gst-registration/"><i>GST</i></a><em> | </em><a
								href="https://www.legalraasta.com/accounting-bookkeeping/"
								data-mce-href="https://www.legalraasta.com/accounting-bookkeeping/"><i>Accounting</i></a><em>&nbsp;&nbsp;</em><i><br></i>M:&nbsp;<a
								href="tel:%2B91%20875%20000%208585" data-mce-href="tel:%2B91%20875%20000%208585">875 000
								8585</a>&nbsp;|&nbsp;<a href="https://www.legalraasta.com/"
								data-mce-href="https://www.legalraasta.com/">legalraasta.com</a><br>* <a
								href="https://www.legalraasta.com/terms-and-conditions/"
								data-mce-href="https://www.legalraasta.com/terms-and-conditions/">Terms &amp; Conditions</a></p>
					</body>
			</html>';

	  	}else if(isset($_POST['service_code']) && $service_code == '005') {
			$Body='<html>
			<body>
				<p class="western">Dear '.$_POST['name'].',</p>
				<p>Greetings from LegalRaasta - India’s top financial services platform! Every year LegalRaasta helps more than 500+
					companies in Fssai Registration/Licenses.</p>
				<p><b>Time required</b>: &lt;15-45 working days*</p>
				<p><b>Cost (incl. GST &amp; Govt. fee)</b><br>1 year:2,999  (Basic)<br>1 year:9,999  (State)<br>1 year: : 18,999 
					(Central)</p>
				<p><b>Process:</b><br>Step 1: Fill application form<br><b>Step 2: Make payment: </b><strong><a
							href="https://www.legalraasta.com/payment/"
							data-mce-href="https://www.legalraasta.com/payment/">https://www.legalraasta.com/payment/</a></strong>
				</p>
				<p><b>Documents Required: </b>Pan Card of owners, Adhaar card of owners, Photograph of owners, Registration proof
					(Partnership Deed or COI in case of Company), Office address proof (electricity/ phone bill)</p>
				<p>Additional document (if Manufacturer/ Processing unit): Blueprint/layout plan, Name/ List of Equipment with
					number, installed capacity &amp; horsepower, Pesticide residues, Water report, Unit photographs, Qualified
					person with Bsc Chemistry or Food diploma degree, Details of laboratory.</p>
				<p>Additional document (if Re-packer /Marketer /Distributor): NOC from manufacturer, FSSAI copy of manufacturer,
					qualified person with Bsc Chemistry or Food diploma degree (in the case of re-packer).</p>
				<p>Additional documents (if Transporter): Details of owned vehicle, Turnover proof</p>
				<p><strong>Note:</strong></p>
				<p>1.&nbsp;In certain situations, customer might need to visit the Food department or pay additional fees to the
					inspector.</p>
				<p>2.&nbsp;If there is a penalty imposed by the Fssai Authority in renewal of fssai &nbsp;, same need to pay by the
					Applicant as renewal have to be done before 30 days of expiry.</p>
				<p>3.&nbsp;In the absence of Fssai login credentials, application for fresh license will be applied.</p>
				<p><b>LegalRaasta in News: </b><a
						href="https://economictimes.indiatimes.com/small-biz/startups/legalraasta-raises-rs-6-5-crore-in-angel-round/articleshow/51813536.cms"
						data-mce-href="https://economictimes.indiatimes.com/small-biz/startups/legalraasta-raises-rs-6-5-crore-in-angel-round/articleshow/51813536.cms">Economic
						times</a> | <a
						href="https://economictimes.indiatimes.com/small-biz/money/legal-business-consultancy-firm-legalraasta-raises-funds-to-provide-gst-c0mpliance-software-to-more-smes/articleshow/58638228.cms"
						data-mce-href="https://economictimes.indiatimes.com/small-biz/money/legal-business-consultancy-firm-legalraasta-raises-funds-to-provide-gst-c0mpliance-software-to-more-smes/articleshow/58638228.cms">IndiaTimes</a>
					| <a href="https://www.vccircle.com/exclusive-legal-raasta-raises-5-mn-in-series-a-round/"
						data-mce-href="https://www.vccircle.com/exclusive-legal-raasta-raises-5-mn-in-series-a-round/">VCCircle</a>
					| <a href="http://bwdisrupt.businessworld.in/article/Delhi-Based-Startup-LegalRaasta-Raises-5M-in-Series-A-Round-from-Impanix-Capital/12-05-2017-118035/"
						data-mce-href="http://bwdisrupt.businessworld.in/article/Delhi-Based-Startup-LegalRaasta-Raises-5M-in-Series-A-Round-from-Impanix-Capital/12-05-2017-118035/">BusinessWorld</a>
					| <a href="https://www.youtube.com/watch?v=NSIg1XT-KM0&amp;t=1s"
						data-mce-href="https://www.youtube.com/watch?v=NSIg1XT-KM0&amp;t=1s">YouTube</a><br><b><br></b>Warm
					regards,<br>Team, LegalRaasta<br><a href="https://www.legalraasta.com/private-limited-company-registration/"
						data-mce-href="https://www.legalraasta.com/private-limited-company-registration/"><i>Company
							formation</i></a><em>&nbsp;|&nbsp;</em><a href="https://www.legalraasta.com/trademark-registration/"
						data-mce-href="https://www.legalraasta.com/trademark-registration/"><i>Trademark</i></a><em>&nbsp;|&nbsp;</em><a
						href="https://www.legalraasta.com/fssai-license/"
						data-mce-href="https://www.legalraasta.com/fssai-license/"><i>Licenses</i></a><em>&nbsp;|&nbsp;</em><a
						href="https://www.legalraasta.com/gst-registration/"
						data-mce-href="https://www.legalraasta.com/gst-registration/"><i>GST</i></a><em> | </em><a
						href="https://www.legalraasta.com/accounting-bookkeeping/"
						data-mce-href="https://www.legalraasta.com/accounting-bookkeeping/"><i>Accounting</i></a><em>&nbsp;&nbsp;</em><i><br></i>M:&nbsp;<a
						href="tel:%2B91%20875%20000%208585" data-mce-href="tel:%2B91%20875%20000%208585">875 000
						8585</a>&nbsp;|&nbsp;<a href="https://www.legalraasta.com/"
						data-mce-href="https://www.legalraasta.com/">legalraasta.com</a><br>* <a
						href="https://www.legalraasta.com/terms-and-conditions/"
						data-mce-href="https://www.legalraasta.com/terms-and-conditions/">Terms &amp; Conditions</a></p>
			</body>
		</html>';
	  	}else if(isset($_POST['service_code']) && $service_code == '006') {
			$Body='<html>
			<body >
				<p class="western">Dear'.$_POST['name']. '</p>
				<p>Greetings from LegalRaasta - India top financial services platform! Every year LegalRaasta helps more than 500+
					companies in Company formation.</p>
				<p><b>Package includes:</b> 2 DIN (Director Identification no)&nbsp;, 1 DSC, 1 RUN/Name, Search &amp;
					Approval,&nbsp; LLP Agreement preparation and filing (Stamp duty not included ), PAN &amp; TAN, Certificate of
					Incorporation, Bank Opening Support, Accounting Software, Bookkeeping (1 month free)</p>
				<p><b>Time required</b>: &lt;15 working days*</p>
				<p><b>Cost</b>: Rs. 7,499 onwards (incl. GST), pay now - https://www.legalraasta.com/payment/</p>
				<p><b>Process:</b><br>Step 1: Fill application form -&nbsp;<a
						href="http://www.legalraasta.com/limited-liability-partnership-llp-application/"
						data-mce-href="http://www.legalraasta.com/limited-liability-partnership-llp-application/">Click here</a><a
						href="https://www.legalraasta.com/private-limited-registration/"
						data-mce-href="https://www.legalraasta.com/private-limited-registration/">&nbsp;</a><br><b>Step 2: you may
						Pay Rs. 2,000 now &amp; remaining after name approval:&nbsp;<a href="https://www.legalraasta.com/payment/"
							data-mce-href="https://www.legalraasta.com/payment/">Click here </a>to pay -</b><br>Step 3: <a
						href="https://client.legalraasta.com/d.php" data-mce-href="https://client.legalraasta.com/d.php">Upload
						Documents</a></p>
				<p><b>Documents Required: </b>PAN Card of Partners (Copy), ID Proof of Partners (Prefer Aadhaar Card)<b>,
					</b>Passport size photograph of all the Partners<b>, </b>Residential Proof of registered office (Telephone or
					Mobile Bill/ Electricity or Gas Bill)<b>, </b>Landlord NOC (we will provide the format)<b>, </b>Bank
					statement/Utility bill of Partners</p>
				<p>You can also view our Youtube guide on&nbsp;<b><a
							href="https://www.youtube.com/watch?v=mtJUY5BKEuA&amp;feature=emb_title"
							data-mce-href="https://www.youtube.com/watch?v=mtJUY5BKEuA&amp;feature=emb_title">LLP Incorporation</a>
						| <a href="https://drive.google.com/file/d/18RNPmWj_YcZdaYJcAt79aWCddkkNpUGL/view?usp=sharing"
							data-mce-href="https://drive.google.com/file/d/18RNPmWj_YcZdaYJcAt79aWCddkkNpUGL/view?usp=sharing">LLP
							Guidebook</a></b></p>
				<p><b><br>LegalRaasta in News: </b><a
						href="https://economictimes.indiatimes.com/small-biz/startups/legalraasta-raises-rs-6-5-crore-in-angel-round/articleshow/51813536.cms"
						data-mce-href="https://economictimes.indiatimes.com/small-biz/startups/legalraasta-raises-rs-6-5-crore-in-angel-round/articleshow/51813536.cms">Economic
						times</a> | <a
						href="https://economictimes.indiatimes.com/small-biz/money/legal-business-consultancy-firm-legalraasta-raises-funds-to-provide-gst-c0mpliance-software-to-more-smes/articleshow/58638228.cms"
						data-mce-href="https://economictimes.indiatimes.com/small-biz/money/legal-business-consultancy-firm-legalraasta-raises-funds-to-provide-gst-c0mpliance-software-to-more-smes/articleshow/58638228.cms">IndiaTimes</a>
					| <a href="https://www.vccircle.com/exclusive-legal-raasta-raises-5-mn-in-series-a-round/"
						data-mce-href="https://www.vccircle.com/exclusive-legal-raasta-raises-5-mn-in-series-a-round/">VCCircle</a>
					| <a href="http://bwdisrupt.businessworld.in/article/Delhi-Based-Startup-LegalRaasta-Raises-5M-in-Series-A-Round-from-Impanix-Capital/12-05-2017-118035/"
						data-mce-href="http://bwdisrupt.businessworld.in/article/Delhi-Based-Startup-LegalRaasta-Raises-5M-in-Series-A-Round-from-Impanix-Capital/12-05-2017-118035/">BusinessWorld</a>
					| <a href="https://www.youtube.com/watch?v=NSIg1XT-KM0&amp;t=1s"
						data-mce-href="https://www.youtube.com/watch?v=NSIg1XT-KM0&amp;t=1s">YouTube</a></p>
				<p>Warm regards,<br>Team, LegalRaasta<br><a href="https://www.legalraasta.com/private-limited-company-registration/"
						data-mce-href="https://www.legalraasta.com/private-limited-company-registration/">Company
						formation</a>&nbsp;|&nbsp;<a href="https://www.legalraasta.com/trademark-registration/"
						data-mce-href="https://www.legalraasta.com/trademark-registration/">Trademark</a>&nbsp;|&nbsp;<a
						href="https://www.legalraasta.com/fssai-license/"
						data-mce-href="https://www.legalraasta.com/fssai-license/">Licenses</a>&nbsp;|&nbsp;<a
						href="https://www.legalraasta.com/gst-registration/"
						data-mce-href="https://www.legalraasta.com/gst-registration/">GST</a> | <a
						href="https://www.legalraasta.com/accounting-bookkeeping/"
						data-mce-href="https://www.legalraasta.com/accounting-bookkeeping/">Accounting</a><br>M:&nbsp;<a
						href="tel:%2B91%20875%20000%208585" data-mce-href="tel:%2B91%20875%20000%208585">875 000
						8585</a>&nbsp;|&nbsp;<a href="https://www.legalraasta.com/"
						data-mce-href="https://www.legalraasta.com/">legalraasta.com</a><br>*<a
						href="https://www.legalraasta.com/terms-and-conditions/"
						data-mce-href="https://www.legalraasta.com/terms-and-conditions/">Terms &amp; Conditions</a></p>
			</body>
		</html>';
	  	}else if(isset($_POST['service_code']) && $service_code == '007') {
			$Body='<html>
				<body>
				<p>Dear '.$_POST['name'].',</p>
				<p>Greetings from LegalRaasta - India’s top financial services platform! Every year LegalRaasta helps more than 500+
					companies in Trademark Registration.</p>
				<p><b>Package includes:</b> Trademark&nbsp;consultation, application preparation, trademark search, application
					filing, same day filing &amp; government fees.</p>
				<p><b>Time required</b>: &lt;3 working days (application filing) *<br><b>Cost (incl. government fee) *</b>:</p>
				<p>Individual/Proprietorship: Rs. 5,999 (incl. GST)</p>
				<p>Company: Rs.5,999 (incl. GST)</p>
				<p>Process:<br>Step 1: Fill application form -&nbsp;<a href="https://www.legalraasta.com/trademark-application-2"
						data-mce-href="https://www.legalraasta.com/trademark-application-2">Click here</a><br><b>Step 2: <a
							href="https://www.legalraasta.com/payment/" data-mce-href="https://www.legalraasta.com/payment/">Make
							payment</a></b></p>
				<p><b>Documents Required: </b>PAN Card copy, ID Proof (Prefer Aadhaar Card), Residential Proof (Telephone or Mobile
					Bill/ Electricity or Gas Bill), Incorporation documents (in case of a company)</p>
				<p>You can also view our <a
						href="https://drive.google.com/file/d/1Tje68gnJ8j-9FP_gbrlfTy3MBEB_6psJ/view?usp=sharing"
						data-mce-href="https://drive.google.com/file/d/1Tje68gnJ8j-9FP_gbrlfTy3MBEB_6psJ/view?usp=sharing">Trademark
						Guidebook</a></p>
				<p><b>LegalRaasta in News: </b><a
						href="https://economictimes.indiatimes.com/small-biz/startups/legalraasta-raises-rs-6-5-crore-in-angel-round/articleshow/51813536.cms"
						data-mce-href="https://economictimes.indiatimes.com/small-biz/startups/legalraasta-raises-rs-6-5-crore-in-angel-round/articleshow/51813536.cms">Economic
						times</a> | <a
						href="https://economictimes.indiatimes.com/small-biz/money/legal-business-consultancy-firm-legalraasta-raises-funds-to-provide-gst-c0mpliance-software-to-more-smes/articleshow/58638228.cms"
						data-mce-href="https://economictimes.indiatimes.com/small-biz/money/legal-business-consultancy-firm-legalraasta-raises-funds-to-provide-gst-c0mpliance-software-to-more-smes/articleshow/58638228.cms">IndiaTimes</a>
					| <a href="https://www.vccircle.com/exclusive-legal-raasta-raises-5-mn-in-series-a-round/"
						data-mce-href="https://www.vccircle.com/exclusive-legal-raasta-raises-5-mn-in-series-a-round/">VCCircle</a>
					| <a href="http://bwdisrupt.businessworld.in/article/Delhi-Based-Startup-LegalRaasta-Raises-5M-in-Series-A-Round-from-Impanix-Capital/12-05-2017-118035/"
						data-mce-href="http://bwdisrupt.businessworld.in/article/Delhi-Based-Startup-LegalRaasta-Raises-5M-in-Series-A-Round-from-Impanix-Capital/12-05-2017-118035/">BusinessWorld</a>
					| <a href="https://www.youtube.com/watch?v=NSIg1XT-KM0&amp;t=1s"
						data-mce-href="https://www.youtube.com/watch?v=NSIg1XT-KM0&amp;t=1s">YouTube</a></p>
				<p><b><br></b>Warm regards,<br>Team, LegalRaasta<br><a
						href="https://www.legalraasta.com/private-limited-company-registration/"
						data-mce-href="https://www.legalraasta.com/private-limited-company-registration/"><i>Company
							formation</i></a><em>&nbsp;|&nbsp;</em><a href="https://www.legalraasta.com/trademark-registration/"
						data-mce-href="https://www.legalraasta.com/trademark-registration/"><i>Trademark</i></a><em>&nbsp;|&nbsp;</em><a
						href="https://www.legalraasta.com/fssai-license/"
						data-mce-href="https://www.legalraasta.com/fssai-license/"><i>Licenses</i></a><em>&nbsp;|&nbsp;</em><a
						href="https://www.legalraasta.com/gst-registration/"
						data-mce-href="https://www.legalraasta.com/gst-registration/"><i>GST</i></a><em> | </em><a
						href="https://www.legalraasta.com/accounting-bookkeeping/"
						data-mce-href="https://www.legalraasta.com/accounting-bookkeeping/"><i>Accounting</i></a><em>&nbsp;&nbsp;</em><i><br></i>M:&nbsp;<a
						href="tel:%2B91%20875%20000%208585" data-mce-href="tel:%2B91%20875%20000%208585">875 000
						8585</a>&nbsp;|&nbsp;<a href="https://www.legalraasta.com/"
						data-mce-href="https://www.legalraasta.com/">legalraasta.com</a><br>* <a
						href="https://www.legalraasta.com/terms-and-conditions/"
						data-mce-href="https://www.legalraasta.com/terms-and-conditions/">Terms &amp; Conditions</a> apply. For
					companies,&gt; 5cr turnover charges are 11,499 (incl. GST).</p>
				<h6 class="western">*If any objection comes to your trademark, the fees will be extra for the further process of
					reply application in the department.</h6>
				</body>
			</html>';

		}else if(isset($_POST['service_code']) && $service_code == '008') {
			$Body='<html>
				<body>
					<p>Dear'.$_POST['name'].',</p>
					<p>Greetings from LegalRaasta - India’s top financial services platform! Every year LegalRaasta helps more than 500+
						companies in Eating House License.</p>
					<p><b>Time required</b>: &lt;15 working days*<br><b>Cost</b>: Rs. 14,999 (incl. GST)</p>
					<p>Process:<br>Step 1: Fill application form -&nbsp;<u><a
								href="https://www.legalraasta.com/eating-house-license-application/"
								data-mce-href="https://www.legalraasta.com/eating-house-license-application/">Click here</a><a
								href="https://www.legalraasta.com/private-limited-registration/"
								data-mce-href="https://www.legalraasta.com/private-limited-registration/">&nbsp;</a></u><br><b>Step 2:
							Make payment: Rs. 14,999 onwards:&nbsp;</b><a href="https://www.legalraasta.com/payment/"
							data-mce-href="https://www.legalraasta.com/payment/"><u><b>Click here </b></u></a><br>Step 3: <a
							href="https://client.legalraasta.com/d.php" data-mce-href="https://client.legalraasta.com/d.php">Upload
							Documents&nbsp;</a></p>
					<p><b>Documents Required: </b>Site plan with size of the Eating House, Photographs of Eating House, Photocopy of
						Trade License, Proof of residence like (Election Card, Driving Licence), Fire NOC (if &gt;50 seats), GST
						Certificate, FSSAI Certificate, List of employees, Proof of CCTV, &amp; Pollution License</p>
					<p><b>LegalRaasta in News: </b><a
							href="https://economictimes.indiatimes.com/small-biz/startups/legalraasta-raises-rs-6-5-crore-in-angel-round/articleshow/51813536.cms"
							data-mce-href="https://economictimes.indiatimes.com/small-biz/startups/legalraasta-raises-rs-6-5-crore-in-angel-round/articleshow/51813536.cms">Economic
							times</a> | <a
							href="https://economictimes.indiatimes.com/small-biz/money/legal-business-consultancy-firm-legalraasta-raises-funds-to-provide-gst-c0mpliance-software-to-more-smes/articleshow/58638228.cms"
							data-mce-href="https://economictimes.indiatimes.com/small-biz/money/legal-business-consultancy-firm-legalraasta-raises-funds-to-provide-gst-c0mpliance-software-to-more-smes/articleshow/58638228.cms">IndiaTimes</a>
						| <a href="https://www.vccircle.com/exclusive-legal-raasta-raises-5-mn-in-series-a-round/"
							data-mce-href="https://www.vccircle.com/exclusive-legal-raasta-raises-5-mn-in-series-a-round/">VCCircle</a>
						| <a href="http://bwdisrupt.businessworld.in/article/Delhi-Based-Startup-LegalRaasta-Raises-5M-in-Series-A-Round-from-Impanix-Capital/12-05-2017-118035/"
							data-mce-href="http://bwdisrupt.businessworld.in/article/Delhi-Based-Startup-LegalRaasta-Raises-5M-in-Series-A-Round-from-Impanix-Capital/12-05-2017-118035/">BusinessWorld</a>
						| <a href="https://www.youtube.com/watch?v=NSIg1XT-KM0&amp;t=1s"
							data-mce-href="https://www.youtube.com/watch?v=NSIg1XT-KM0&amp;t=1s">YouTube</a></p>
					<p><b><br></b>Warm regards,<br>Team, LegalRaasta<br><a
							href="https://www.legalraasta.com/private-limited-company-registration/"
							data-mce-href="https://www.legalraasta.com/private-limited-company-registration/"><i>Company
								formation</i></a><em>&nbsp;|&nbsp;</em><a href="https://www.legalraasta.com/trademark-registration/"
							data-mce-href="https://www.legalraasta.com/trademark-registration/"><i>Trademark</i></a><em>&nbsp;|&nbsp;</em><a
							href="https://www.legalraasta.com/fssai-license/"
							data-mce-href="https://www.legalraasta.com/fssai-license/"><i>Licenses</i></a><em>&nbsp;|&nbsp;</em><a
							href="https://www.legalraasta.com/gst-registration/"
							data-mce-href="https://www.legalraasta.com/gst-registration/"><i>GST</i></a><em> | </em><a
							href="https://www.legalraasta.com/accounting-bookkeeping/"
							data-mce-href="https://www.legalraasta.com/accounting-bookkeeping/"><i>Accounting</i></a><em>&nbsp;&nbsp;</em><i><br></i>M:&nbsp;<a
							href="tel:%2B91%20875%20000%208585" data-mce-href="tel:%2B91%20875%20000%208585">875 000
							8585</a>&nbsp;|&nbsp;<a href="https://www.legalraasta.com/"
							data-mce-href="https://www.legalraasta.com/">legalraasta.com</a><br>* <a
							href="https://www.legalraasta.com/terms-and-conditions/"
							data-mce-href="https://www.legalraasta.com/terms-and-conditions/">Terms &amp; Conditions</a></p>
				</body>
			</html>';
		}else if(isset($_POST['service_code']) && $service_code == '009') {
			$Body='<html>
			<body>
				<p>Dear '.$_POST['name'].',</p>
				<p>We thank you for choosing LegalRaasta as your tax filing solution. LegalRaasta has helped more than 200,000+
					clients in filing tax returns.</p>
				<p>We are ready to make your tax filing experience smooth and hassle free. You can either use our <a
						href="https://legalraahi.com/gst-software/" data-mce-href="https://legalraahi.com/gst-software/">GST
						software</a> to file yourself OR buy a CA assisted plan.</p>
				<p>Under the CA assisted plan, you will get:<br>• Return filing assistance for all 37 return (p.a) from our CA<br>•
					GST consultation<br>• GST templates (for invoicing, debit credit notes etc)<br>• Sales &amp; Purchase
					reconciliation<br>• Tax calculation &amp; payment assistance</p>
				<p>Book return filing for 1 year and get 10% discount (Just Rs. 1350 per month) – <a
						href="https://legalraahi.com/gst-plans/#tab-d40071a9258840eb15a" target="_blank" rel="noopener"
						data-mce-href="https://legalraahi.com/gst-plans/#tab-d40071a9258840eb15a">Book Now</a></p>
				<p>Introductory offer: Try us out for FREE for the first month. Get GST help and all invoice templates – <a
						href="https://gst.taxraahi.com/cart/plan_introductory" target="_blank" rel="noopener"
						data-mce-href="https://gst.taxraahi.com/cart/plan_introductory">Sign up here</a></p>
				<p>Please call us at 8750008585 for assistance. You can refer to our videos to learn how to file return: 1) How to
					file GSTR1 2) How to file GSTR 2</p>
				<p><strong>About Legalraahi:</strong><br>LegalRaasta is Indias leading financial services provider. We have been
					featured in Economic times, NDTV and other majors journals. We serve 80,000+ businesses ever year with a network
					of 400+ qualified CAs/Lawyers/Tax Experts. We offer 50+ services to SMEs including GST registration, GST return
					filing, Company formation, IEC, Trademark, FSSAI, ROC filing, ISO and Accounting.</p>
				<p>Warm regards,<br>Team, LegalRaasta<br><em><a href="https://legalraahi.com/gst-registration/" target="_blank"
							rel="noopener" data-mce-href="https://legalraahi.com/gst-registration/">GST registration</a> | <a
							href="https://legalraahi.com/gst-return/" target="_blank" rel="noopener"
							data-mce-href="https://legalraahi.com/gst-return/">GST Return</a> | <a
							href="https://legalraahi.com/gst-software" target="_blank" rel="noopener"
							data-mce-href="https://legalraahi.com/gst-software">GST Software</a> | <a
							href="https://legalraahi.com/tds-return/" target="_blank" rel="noopener"
							data-mce-href="https://legalraahi.com/tds-return/">TDS</a> | <a href="https://legalraahi.com"
							target="_blank" rel="noopener" data-mce-href="https://legalraahi.com">Business
							Services</a><br>M:&nbsp;<a href="tel:%2B91%20875%20000%208585" target="_blank" rel="noopener"
							data-mce-href="tel:%2B91%20875%20000%208585">+91 875 000 8585</a>&nbsp;|&nbsp;<a
							href="https://legalraahi.com/" target="_blank" rel="noopener"
							data-mce-href="https://legalraahi.com/">LegalRaasta.com</a><br>Head office: BN35 Shalimar Bagh,
						Delhi<br>Branches in: Bangalore | Hyderabad | Chennai | Mumbai | 15+ cities</em></p>
			</body>
		</html>';
		}else if(isset($_POST['service_code']) && $service_code == '010') {
			$Body='<html>
			<body>
				<p>Dear '.$_POST['name'].',</p>
				<p>Greetings from LegalRaasta - India’s top financial services platform! Every year LegalRaasta helps more than 500+
					companies in ISO Certification.</p>
				<p><b>Time required</b>: &lt;5 working days*<br><b>Cost</b>: Rs. 5,499 onwards (incl. GST)</p>
				<p><b>Process:</b><br>Step 1: Fill application form -&nbsp;<a
						href="https://www.legalraasta.com/iso-application-form/"
						data-mce-href="https://www.legalraasta.com/iso-application-form/">Click here</a><br><b>Step 2: Make payment:
						Rs. 5,499 onwards:&nbsp;</b><a href="https://www.legalraasta.com/payment/"
						data-mce-href="https://www.legalraasta.com/payment/"><b>Click here </b></a><br>Step 3: <a
						href="https://client.legalraasta.com/d.php" data-mce-href="https://client.legalraasta.com/d.php">Upload
						Documents&nbsp;</a></p>
				<p><b>Documents Required: </b>Pan Card of owners, Adhaar card of owners, Registration proof (Partnership Deed or COI
					in case of Company), Office address proof (electricity/ phone bill)</p>
				<p><b>LegalRaasta in News: </b><a
						href="https://economictimes.indiatimes.com/small-biz/startups/legalraasta-raises-rs-6-5-crore-in-angel-round/articleshow/51813536.cms"
						data-mce-href="https://economictimes.indiatimes.com/small-biz/startups/legalraasta-raises-rs-6-5-crore-in-angel-round/articleshow/51813536.cms">Economic
						times</a> | <a
						href="https://economictimes.indiatimes.com/small-biz/money/legal-business-consultancy-firm-legalraasta-raises-funds-to-provide-gst-c0mpliance-software-to-more-smes/articleshow/58638228.cms"
						data-mce-href="https://economictimes.indiatimes.com/small-biz/money/legal-business-consultancy-firm-legalraasta-raises-funds-to-provide-gst-c0mpliance-software-to-more-smes/articleshow/58638228.cms">IndiaTimes</a>
					| <a href="https://www.vccircle.com/exclusive-legal-raasta-raises-5-mn-in-series-a-round/"
						data-mce-href="https://www.vccircle.com/exclusive-legal-raasta-raises-5-mn-in-series-a-round/">VCCircle</a>
					| <a href="http://bwdisrupt.businessworld.in/article/Delhi-Based-Startup-LegalRaasta-Raises-5M-in-Series-A-Round-from-Impanix-Capital/12-05-2017-118035/"
						data-mce-href="http://bwdisrupt.businessworld.in/article/Delhi-Based-Startup-LegalRaasta-Raises-5M-in-Series-A-Round-from-Impanix-Capital/12-05-2017-118035/">BusinessWorld</a>
					| <a href="https://www.youtube.com/watch?v=NSIg1XT-KM0&amp;t=1s"
						data-mce-href="https://www.youtube.com/watch?v=NSIg1XT-KM0&amp;t=1s">YouTube</a></p>
				<p><span style="font-family: Arial, serif;" data-mce-style="font-family: Arial, serif;"><b><br></b>Warm
						regards,<br>Team, LegalRaasta<br><a href="https://www.legalraasta.com/private-limited-company-registration/"
							data-mce-href="https://www.legalraasta.com/private-limited-company-registration/"><i>Company
								formation</i></a><em>&nbsp;|&nbsp;</em><a href="https://www.legalraasta.com/trademark-registration/"
							data-mce-href="https://www.legalraasta.com/trademark-registration/"><i>Trademark</i></a><em>&nbsp;|&nbsp;</em><a
							href="https://www.legalraasta.com/fssai-license/"
							data-mce-href="https://www.legalraasta.com/fssai-license/"><i>Licenses</i></a><em>&nbsp;|&nbsp;</em><a
							href="https://www.legalraasta.com/gst-registration/"
							data-mce-href="https://www.legalraasta.com/gst-registration/"><i>GST</i></a><em> | </em><a
							href="https://www.legalraasta.com/accounting-bookkeeping/"
							data-mce-href="https://www.legalraasta.com/accounting-bookkeeping/"><i>Accounting</i></a><em>&nbsp;&nbsp;</em><i><br></i>M:&nbsp;<a
							href="tel:%2B91%20875%20000%208585" data-mce-href="tel:%2B91%20875%20000%208585">875 000
							8585</a>&nbsp;|&nbsp;<a href="https://www.legalraasta.com/"
							data-mce-href="https://www.legalraasta.com/">legalraasta.com</a><br>* <a
							href="https://www.legalraasta.com/terms-and-conditions/"
							data-mce-href="https://www.legalraasta.com/terms-and-conditions/">Terms &amp; Conditions</a></span></p>
			</body>
		</html>';
		}else if(isset($_POST['service_code']) && $service_code == '011') {
			$Body='<html>
			<body>
				<div>Dear '.$_POST['name'].'<p>We&nbsp;welcome&nbsp;you to LegalRaasta&nbsp;customer&nbsp;family! Every
						year&nbsp;Legalraasta&nbsp;<strong>helps more than 500+ firms</strong>&nbsp;in conversion of partnership to
						LLP.</p>
				</div>
				<div>Our conversion of partnership to LLP package includes:&nbsp;DPIN &amp; digital signature for 2 partners, name
					search &amp; approval,&nbsp;LLP agreement,&nbsp;ROC registration fees &amp;&nbsp;LLP Pan Card.</div>
				<div>Time required: &lt;30 working days</div>
				<div>Cost: Rs. 7,999 only.</div>
				<div>Please follow the below steps to complete application:</div>
				<div>
					<p><strong>Step 1: Fill application form - <a
								href="https://www.legalraasta.com/partnership-firm-to-llp-application-form/" target="_blank"
								rel="noopener"
								data-mce-href="https://www.legalraasta.com/partnership-firm-to-llp-application-form/">Click
								here</a></strong></p>
					<p><strong>Steps 2: Make payment : </strong>Total charge of Rs. 7,999<strong>.&nbsp;</strong>Choose from the
						following options:</p>
					<ul>
						<li>Netbanking/ Credit card/ Debit card :&nbsp;<strong><a href="https://www.legalraasta.com/payment/"
									target="_blank" rel="noopener" data-mce-href="https://www.legalraasta.com/payment/">Click here
									to make Payment</a></strong></li>
						<li>Bank Transfer: Company: LegalRaasta Technologies Pvt. Ltd., Bank: Kotak Mahindra, Saraswati Vihar,
							Delhi, IFSC: KKBK0004604, A/c no: 9312250417</li>
					</ul>
					<p><strong>Step 3: Submit&nbsp;documents-&nbsp;</strong>Please email us the following&nbsp;documents&nbsp;(you
						can reply to this mail)</p>
					<ul>
						<li>Copy of PAN Card of Partners</li>
						<li>Copy of PAN Card of Partnership</li>
						<li>Copy of ID Proof of Partners&nbsp;(Prefer Aadhaar Card)</li>
						<li>Passport size photograph of all the&nbsp;Partners</li>
						<li>E-mail id &amp; mobile no. of all&nbsp;the&nbsp;Partners</li>
						<li>Residential Proof of registered office (Telephone or Mobile Bill/ Electricity or Gas Bill)</li>
						<li>Sale Deed (if owned property)</li>
						<li>Rent agreement (if rented property)</li>
						<li>Landlord NOC (if rented property)</li>
					</ul>
					<p>You can refer to the following articles for more information on conversion of partnership to LLP
						service.&nbsp;&nbsp;You can also view our Youtube guide on <a
							href="https://www.youtube.com/watch?v=pZsMJubAUqA" target="_blank" rel="noopener"
							data-mce-href="https://www.youtube.com/watch?v=pZsMJubAUqA">Legalraasta</a>.&nbsp;Happy to help!!</p>
					<ol>
						<li><a href="https://www.legalraasta.com/conversion-of-partnership-into-an-llp-or-private-limited-company/"
								target="_blank" rel="noopener"
								data-mce-href="https://www.legalraasta.com/conversion-of-partnership-into-an-llp-or-private-limited-company/">Guide
								for Partnership to LLP</a></li>
					</ol>
					<p><strong>About LegalRaasta:<br></strong>LegalRaasta is Indias leading business services provider. LegalRaasta
						serves more than 2200+ businesses ever year. We offer 30+ services including <strong>GST, ITR, TDS, Company
							formation, Service tax, IEC, Trademark, FSSAI, ROC, ISO, &amp; Loans.</strong></p>
					<p>LegalRaasta also has <strong>tie ups with 40+ Banks &amp; NBFCs</strong> and can help you with
						<strong>business loans</strong>.</p>
					<p>Warm regards,<br>Team, LegalRaasta<br><em><a
								href="https://www.legalraasta.com/private-limited-company-registration/"
								data-mce-href="https://www.legalraasta.com/private-limited-company-registration/">Company
								formation</a> | <a href="https://www.legalraasta.com/trademark-registration/"
								data-mce-href="https://www.legalraasta.com/trademark-registration/">Trademark</a> | <a
								href="https://www.legalraasta.com/fssai-license/"
								data-mce-href="https://www.legalraasta.com/fssai-license/">Licenses</a> | <a
								href="https://www.legalraasta.com/gst-registration/"
								data-mce-href="https://www.legalraasta.com/gst-registration/">GST</a>, <a
								href="https://www.legalraasta.com/income-tax-return/"
								data-mce-href="https://www.legalraasta.com/income-tax-return/">ITR</a> &amp; <a
								href="https://www.legalraasta.com/tds-return/"
								data-mce-href="https://www.legalraasta.com/tds-return/">TDS</a> | <a
								href="https://www.legalraasta.com/loan/"
								data-mce-href="https://www.legalraasta.com/loan/">Loans</a></em><br>M:&nbsp;<a
							href="tel:%2B91%20875%20000%208585" data-mce-href="tel:%2B91%20875%20000%208585">+91 875 000
							8585</a>&nbsp;|&nbsp;<a href="https://www.legalraasta.com/"
							data-mce-href="https://www.legalraasta.com/">www.legalraasta.com</a><br>Head office: B-300, Saraswati
						Vihar, Pitampura, Delhi<br><a href="https://www.facebook.com/legalraasta/"
							data-mce-href="https://www.facebook.com/legalraasta/">Facebook</a>&nbsp;|&nbsp;<a
							href="https://www.linkedin.com/in/LegalRaasta/"
							data-mce-href="https://www.linkedin.com/in/LegalRaasta/">Linkedin</a>&nbsp;|&nbsp;<a
							href="https://twitter.com/LRaasta"
							data-mce-href="https://twitter.com/LRaasta">Twitter</a>&nbsp;|&nbsp;<a
							href="https://www.youtube.com/watch?v=NSIg1XT-KM0&amp;t=1s"
							data-mce-href="https://www.youtube.com/watch?v=NSIg1XT-KM0&amp;t=1s">YouTube</a></p>
				</div>
			</body>
		</html>';
		}else if(isset($_POST['service_code']) && $service_code == '012') {
			$Body='<html>
				<body>
				<div>Dear '.$_POST['name'].'<p>We&nbsp;welcome&nbsp;you to LegalRaasta&nbsp;customer&nbsp;family! Every
						year&nbsp;Legalraasta&nbsp;<strong>helps more than 500+ companies</strong>&nbsp;in conversion
						of&nbsp;Private limited company to Public limited company.</p>
				</div>
				<div>Our conversion of&nbsp;Private ltd. Co. into Public Co.&nbsp;package includes:&nbsp;Name search &amp; approval,
					modified MOA/AOA,&nbsp;ROC registration fees &amp;&nbsp;Company Pan Card.<br>Time required: &lt;15 working days
				</div>
				<div>Cost: Rs. 13,999  onwards.</div>
				<div>Please follow the below steps to complete application:</div>
				<div><strong>Step 1: Fill application form - <a href="https://www.legalraasta.com/iec-application/" target="_blank"
							rel="noopener" data-mce-href="https://www.legalraasta.com/iec-application/">Click here</a></strong>
					<p><strong>Steps 2: Make payment : </strong>Total charge of Rs. 13,999 <strong>.&nbsp;</strong>Choose from the
						following options:</p>
					<ul>
						<li>Netbanking/ Credit card/ Debit card :&nbsp;<strong><a href="https://www.legalraasta.com/payment/"
									target="_blank" rel="noopener" data-mce-href="https://www.legalraasta.com/payment/">Click here
									to make Payment</a></strong></li>
						<li>Bank Transfer: Company: LegalRaasta Technologies Pvt. Ltd., Bank: Kotak Mahindra, Saraswati Vihar,
							Delhi, IFSC: KKBK0004604, A/c no: 9312250417</li>
					</ul>
					<p><strong>Step 3: Submit&nbsp;documents-&nbsp;</strong>Please email us the following&nbsp;documents&nbsp;(you
						can reply to this mail)</p>
					<ul>
						<li>Copy of PAN Card of Directors</li>
						<li>Copy of ID Proof of Directors (Prefer Aadhaar Card)</li>
						<li>Passport size photograph of all the Directors</li>
						<li>E-mail id &amp; mobile no. of all&nbsp;the Directors</li>
						<li>Residential Proof of registered office (Telephone or Mobile Bill/ Electricity or Gas Bill)</li>
						<li>MOA &amp; AOA</li>
						<li>Declaration</li>
						<li>Sale Deed (if owned property)</li>
						<li>Rent agreement (if rented property)</li>
						<li>Landlord NOC (if rented property)</li>
					</ul>
					<p>You can refer to the following articles for more information on conversion of&nbsp;Private ltd Co. to Public
						Co.&nbsp;service.&nbsp;&nbsp;You can also view our Youtube guide on <a
							href="https://www.youtube.com/watch?v=pZsMJubAUqA" target="_blank" rel="noopener"
							data-mce-href="https://www.youtube.com/watch?v=pZsMJubAUqA">Legalraasta</a>.&nbsp;Happy to help!!</p>
					<p>1.<a href="https://www.legalraasta.com/private-limited-company-conversion-into-public-limited-company/"
							target="_blank" rel="noopener"
							data-mce-href="https://www.legalraasta.com/private-limited-company-conversion-into-public-limited-company/">Guide
							for Private ltd Co. conversion into Public Co.</a></p>
					<p><strong>About LegalRaasta:<br></strong>LegalRaasta is Indias leading business services provider. LegalRaasta
						serves more than 2200+ businesses ever year. We offer 30+ services including <strong>GST, ITR, TDS, Company
							formation, Service tax, IEC, Trademark, FSSAI, ROC, ISO, &amp; Loans.</strong></p>
					<p>LegalRaasta also has <strong>tie ups with 40+ Banks &amp; NBFCs</strong> and can help you with
						<strong>business loans</strong>.</p>
					<p>Warm regards,<br>Team, LegalRaasta<br><em><a
								href="https://www.legalraasta.com/private-limited-company-registration/"
								data-mce-href="https://www.legalraasta.com/private-limited-company-registration/">Company
								formation</a> | <a href="https://www.legalraasta.com/trademark-registration/"
								data-mce-href="https://www.legalraasta.com/trademark-registration/">Trademark</a> | <a
								href="https://www.legalraasta.com/fssai-license/"
								data-mce-href="https://www.legalraasta.com/fssai-license/">Licenses</a> | <a
								href="https://www.legalraasta.com/gst-registration/"
								data-mce-href="https://www.legalraasta.com/gst-registration/">GST</a>, <a
								href="https://www.legalraasta.com/income-tax-return/"
								data-mce-href="https://www.legalraasta.com/income-tax-return/">ITR</a> &amp; <a
								href="https://www.legalraasta.com/tds-return/"
								data-mce-href="https://www.legalraasta.com/tds-return/">TDS</a> | <a
								href="https://www.legalraasta.com/loan/"
								data-mce-href="https://www.legalraasta.com/loan/">Loans</a></em><br>M:&nbsp;<a
							href="tel:%2B91%20875%20000%208585" data-mce-href="tel:%2B91%20875%20000%208585">+91 875 000
							8585</a>&nbsp;|&nbsp;<a href="https://www.legalraasta.com/"
							data-mce-href="https://www.legalraasta.com/">www.legalraasta.com</a><br>Head office: B-300, Saraswati
						Vihar, Pitampura, Delhi<br><a href="https://www.facebook.com/legalraasta/"
							data-mce-href="https://www.facebook.com/legalraasta/">Facebook</a>&nbsp;|&nbsp;<a
							href="https://www.linkedin.com/in/LegalRaasta/"
							data-mce-href="https://www.linkedin.com/in/LegalRaasta/">Linkedin</a>&nbsp;|&nbsp;<a
							href="https://twitter.com/LRaasta"
							data-mce-href="https://twitter.com/LRaasta">Twitter</a>&nbsp;|&nbsp;<a
							href="https://www.youtube.com/watch?v=NSIg1XT-KM0&amp;t=1s"
							data-mce-href="https://www.youtube.com/watch?v=NSIg1XT-KM0&amp;t=1s">YouTube</a></p>
				</div>
				</body>
		</html>';
		}else if(isset($_POST['service_code']) && $service_code == '013') {
			$Body='<html>
			<body>
				<p>Dear '.$_POST['name'].'</p>
				<p>Greetings from LegalRaasta - India’s top financial services platform! Every year LegalRaasta helps more than 500+
					companies in Sole Proprietorship Firm Registration.</p>
				<p><b>Package includes:</b> GST, MSME &amp; TAN<br><b>Time required</b>: &lt;10 working days*<br><b>Cost</b>: Rs.
					2,999 onwards (incl. GST)</p>
				<p><b>Process</b>:<br>Step 1: Fill application form –&nbsp;<a
						href="https://www.legalraasta.com/gst-application-form/"
						data-mce-href="https://www.legalraasta.com/gst-application-form/">GST</a>&nbsp;|<a
						href="https://www.legalraasta.com/msme-application-form/"
						data-mce-href="https://www.legalraasta.com/msme-application-form/">MSME</a></p>
				<p><b>Step 2: Make Payment:&nbsp;<a href="https://www.legalraasta.com/payment/"
							data-mce-href="https://www.legalraasta.com/payment/"><u>Click here </u></a></b></p>
				<p>Step 3: <a href="https://www.legalraasta.com/bTask/d.php"
						data-mce-href="https://www.legalraasta.com/bTask/d.php">Upload Documents&nbsp;</a></p>
				<p><b>Documents Required: </b>Copy of PAN Card of Proprietor, Copy of ID Proof of Proprietor, Residential Proof of
					office (Telephone or Mobile Bill/ Electricity or Gas Bill), Cancelled cheque,</p>
				<p><b>LegalRaasta in News: </b><a
						href="https://economictimes.indiatimes.com/small-biz/startups/legalraasta-raises-rs-6-5-crore-in-angel-round/articleshow/51813536.cms"
						data-mce-href="https://economictimes.indiatimes.com/small-biz/startups/legalraasta-raises-rs-6-5-crore-in-angel-round/articleshow/51813536.cms">Economic
						times</a> | <a
						href="https://economictimes.indiatimes.com/small-biz/money/legal-business-consultancy-firm-legalraasta-raises-funds-to-provide-gst-c0mpliance-software-to-more-smes/articleshow/58638228.cms"
						data-mce-href="https://economictimes.indiatimes.com/small-biz/money/legal-business-consultancy-firm-legalraasta-raises-funds-to-provide-gst-c0mpliance-software-to-more-smes/articleshow/58638228.cms">IndiaTimes</a>
					| <a href="https://www.vccircle.com/exclusive-legal-raasta-raises-5-mn-in-series-a-round/"
						data-mce-href="https://www.vccircle.com/exclusive-legal-raasta-raises-5-mn-in-series-a-round/">VCCircle</a>
					| <a href="http://bwdisrupt.businessworld.in/article/Delhi-Based-Startup-LegalRaasta-Raises-5M-in-Series-A-Round-from-Impanix-Capital/12-05-2017-118035/"
						data-mce-href="http://bwdisrupt.businessworld.in/article/Delhi-Based-Startup-LegalRaasta-Raises-5M-in-Series-A-Round-from-Impanix-Capital/12-05-2017-118035/">BusinessWorld</a>
					| <a href="https://www.youtube.com/watch?v=NSIg1XT-KM0&amp;t=1s"
						data-mce-href="https://www.youtube.com/watch?v=NSIg1XT-KM0&amp;t=1s">YouTube</a></p>
				<p><b><br></b>Warm regards,<br>Team, LegalRaasta<br><a
						href="https://www.legalraasta.com/private-limited-company-registration/"
						data-mce-href="https://www.legalraasta.com/private-limited-company-registration/"><i>Company
							formation</i></a><em>&nbsp;|&nbsp;</em><a href="https://www.legalraasta.com/trademark-registration/"
						data-mce-href="https://www.legalraasta.com/trademark-registration/"><i>Trademark</i></a><em>&nbsp;|&nbsp;</em><a
						href="https://www.legalraasta.com/fssai-license/"
						data-mce-href="https://www.legalraasta.com/fssai-license/"><i>Licenses</i></a><em>&nbsp;|&nbsp;</em><a
						href="https://www.legalraasta.com/gst-registration/"
						data-mce-href="https://www.legalraasta.com/gst-registration/"><i>GST</i></a><em> | </em><a
						href="https://www.legalraasta.com/accounting-bookkeeping/"
						data-mce-href="https://www.legalraasta.com/accounting-bookkeeping/"><i>Accounting</i></a><em>&nbsp;&nbsp;</em><br>M:&nbsp;<a
						href="tel:%2B91%20875%20000%208585" data-mce-href="tel:%2B91%20875%20000%208585">875 000
						8585</a>&nbsp;|&nbsp;<a href="https://www.legalraasta.com/"
						data-mce-href="https://www.legalraasta.com/">legalraasta.com</a><br>*<a
						href="https://www.legalraasta.com/terms-and-conditions/"
						data-mce-href="https://www.legalraasta.com/terms-and-conditions/">Terms &amp; Conditions apply</a></p>
			</body>
		</html>';
		}else if(isset($_POST['service_code']) && $service_code == '014') {
			$Body='<html>
			<body>
				<div>Dear '.$_POST['name'].'<p>We&nbsp;welcome&nbsp;you to LegalRaasta&nbsp;customer&nbsp;family! Every
						year&nbsp;Legalraasta&nbsp;<strong>helps more than 500+ companies</strong>&nbsp;in Public
						company&nbsp;registration.</p>
				</div>
				<div>Our Public company&nbsp;registration package includes:&nbsp;DIN for 3 directors, digital signature for 3
					directors, name search &amp; approval,&nbsp;MOA/AOA,&nbsp;ROC registration fees &amp; company Pan Card.<br>Time
					required: &lt;30 working days</div>
				<div>Cost: Rs. 24,999 (including GST) only.</div>
				<div>Please follow the below steps to complete application:</div>
				<div><strong>Step 1: Fill application form - <a
							href="https://www.legalraasta.com/public-limited-company-application/" target="_blank" rel="noopener"
							data-mce-href="https://www.legalraasta.com/public-limited-company-application/">Click here</a></strong>
					<p><strong>Steps 2: Make payment : </strong>Total charge of  Rs. 24,999. . Choose from the following options:</p>
					<ul>
						<li>Netbanking/ Credit card/ Debit card :&nbsp;<strong><a href="https://www.legalraasta.com/payment/"
									target="_blank" rel="noopener" data-mce-href="https://www.legalraasta.com/payment/">Click here
									to make Payment</a></strong></li>
						<li>Bank Transfer: Company: LegalRaasta Technologies Pvt. Ltd., Bank: Kotak Mahindra, Saraswati Vihar,
							Delhi, IFSC: KKBK0004604, A/c no: 9312250417</li>
					</ul>
					<p><strong>Step 3: Submit&nbsp;documents-&nbsp;</strong>Please email us the following&nbsp;documents&nbsp;(you
						can reply to this mail)</p>
					<ul>
						<li>PAN Card copy</li>
						<li>ID Proof (prefer Aadhaar Card)</li>
						<li>Residential Proof (Telephone or Mobile Bill/ Electricity or Gas Bill)</li>
					</ul>
					<p>You can refer to the following articles for more information on Public ltd. company
						registration&nbsp;service.&nbsp;&nbsp;You can also view our Youtube guide on <a
							href="https://www.youtube.com/watch?v=79p0CY0HcRc" target="_blank" rel="noopener"
							data-mce-href="https://www.youtube.com/watch?v=79p0CY0HcRc">Public Limited Company</a>.&nbsp;Happy to
						help!!</p>
					<ol>
						<li><a href="https://www.legalraasta.com/public-company-registration/"
								data-mce-href="https://www.legalraasta.com/public-company-registration/">Guide for Public Limited
								Company service</a></li>
						<li><a href="https://www.legalraasta.com/documents-required-for-incorporation-of-public-limited-company/"
								data-mce-href="https://www.legalraasta.com/documents-required-for-incorporation-of-public-limited-company/">Public
								Limited Company service registration process</a></li>
					</ol>
					<p><strong>About LegalRaasta:<br></strong>LegalRaasta is India leading business services provider. LegalRaasta
						serves more than 2200+ businesses ever year. We offer 30+ services including <strong>GST, ITR, TDS, Company
							formation, Service tax, IEC, Trademark, FSSAI, ROC, ISO, &amp; Loans.</strong></p>
					<p>LegalRaasta also has <strong>tie ups with 40+ Banks &amp; NBFCs</strong> and can help you with
						<strong>business loans</strong>.</p>
					<p>Warm regards,<br>Team, LegalRaasta<br><em><a
								href="https://www.legalraasta.com/private-limited-company-registration/"
								data-mce-href="https://www.legalraasta.com/private-limited-company-registration/">Company
								formation</a> | <a href="https://www.legalraasta.com/trademark-registration/"
								data-mce-href="https://www.legalraasta.com/trademark-registration/">Trademark</a> | <a
								href="https://www.legalraasta.com/fssai-license/"
								data-mce-href="https://www.legalraasta.com/fssai-license/">Licenses</a> | <a
								href="https://www.legalraasta.com/gst-registration/"
								data-mce-href="https://www.legalraasta.com/gst-registration/">GST</a>, <a
								href="https://www.legalraasta.com/income-tax-return/"
								data-mce-href="https://www.legalraasta.com/income-tax-return/">ITR</a> &amp; <a
								href="https://www.legalraasta.com/tds-return/"
								data-mce-href="https://www.legalraasta.com/tds-return/">TDS</a> | <a
								href="https://www.legalraasta.com/loan/"
								data-mce-href="https://www.legalraasta.com/loan/">Loans</a></em><br>M:&nbsp;<a
							href="tel:%2B91%20875%20000%208585" data-mce-href="tel:%2B91%20875%20000%208585">+91 875 000
							8585</a>&nbsp;|&nbsp;<a href="https://www.legalraasta.com/"
							data-mce-href="https://www.legalraasta.com/">www.legalraasta.com</a><br>Head office: B-300, Saraswati
						Vihar, Pitampura, Delhi<br><a href="https://www.facebook.com/legalraasta/"
							data-mce-href="https://www.facebook.com/legalraasta/">Facebook</a>&nbsp;|&nbsp;<a
							href="https://www.linkedin.com/in/LegalRaasta/"
							data-mce-href="https://www.linkedin.com/in/LegalRaasta/">Linkedin</a>&nbsp;|&nbsp;<a
							href="https://twitter.com/LRaasta"
							data-mce-href="https://twitter.com/LRaasta">Twitter</a>&nbsp;|&nbsp;<a
							href="https://www.youtube.com/watch?v=NSIg1XT-KM0&amp;t=1s"
							data-mce-href="https://www.youtube.com/watch?v=NSIg1XT-KM0&amp;t=1s">YouTube</a></p>
				</div>
			</body>
		</html>';
		}else if(isset($_POST['service_code']) && $service_code == '015') {
			$Body='<html>
			<body>
				<p>Dear '.$_POST['name'].' </p>
				<p>Greetings from LegalRaasta - India’s top financial services platform! Every year LegalRaasta helps more than 500+
					companies in Company formation.</p>
				<p><b>Package includes:</b> 1 DIN (Director Identification no)&nbsp;, 1 DSC, 1 RUN/Name, Search &amp; Approval, MOA/
					AOA Filing, ROC registration Fees (upto 1 lakh capital), PAN &amp; TAN, Certificate of Incorporation, Bank
					Opening Support, Accounting Software, Bookkeeping (1 month free)</p>
				<p><b>Time required</b>: &lt;15 working days*</p>
				<p><b>Cost</b>: Rs. 5,999 onwards (incl. GST)</p>
				<p><b>Process:</b><b><br></b>Step 1: Fill application form -&nbsp;<a
						href="http://www.legalraasta.com/one-person-application-form/"
						data-mce-href="http://www.legalraasta.com/one-person-application-form/">Click here</a><a
						href="https://www.legalraasta.com/private-limited-registration/"
						data-mce-href="https://www.legalraasta.com/private-limited-registration/">&nbsp;</a><br><b>Step 2: Pay Rs.
						2,000 now &amp; remaining after name approval:&nbsp;<a href="https://www.legalraasta.com/payment/"
							data-mce-href="https://www.legalraasta.com/payment/">Click here </a></b><br>Step 3: <a
						href="https://client.legalraasta.com/d.php" data-mce-href="https://client.legalraasta.com/d.php">Upload
						Documents&nbsp;</a></p>
				<p><b>Documents Required: </b>PAN Card of Directors (Copy),<b> </b>ID Proof of Directors (Prefer Aadhaar Card)<b>,
					</b>Passport size photograph of all the Directors<b>, </b>Residential Proof of registered office (Telephone or
					Mobile Bill/ Electricity or Gas Bill)<b>, </b>Landlord NOC (we will provide the format)<b>, </b>Bank
					statement/Utility bill of Director</p>
				<p>You can also view our Youtube guide on<b>&nbsp;<a
							href="https://www.youtube.com/watch?v=AOY9KJS4wr8&amp;feature=youtu.beOpc"
							data-mce-href="https://www.youtube.com/watch?v=AOY9KJS4wr8&amp;feature=youtu.beOpc">OPC</a><a
							href="https://www.youtube.com/watch?v=AOY9KJS4wr8&amp;feature=youtu.beOpc"
							data-mce-href="https://www.youtube.com/watch?v=AOY9KJS4wr8&amp;feature=youtu.beOpc">&nbsp;Incorporation</a></b>
					| <a href="https://drive.google.com/file/d/1vAjuJ8G0xs3WfJ6MW6I7ypoy6Ld79LG_/view?usp=sharing"
						data-mce-href="https://drive.google.com/file/d/1vAjuJ8G0xs3WfJ6MW6I7ypoy6Ld79LG_/view?usp=sharing">OPC
						Guidebook&lt;/</a></p>
				<p><b>LegalRaasta in News: </b><a
						href="https://economictimes.indiatimes.com/small-biz/startups/legalraasta-raises-rs-6-5-crore-in-angel-round/articleshow/51813536.cms"
						data-mce-href="https://economictimes.indiatimes.com/small-biz/startups/legalraasta-raises-rs-6-5-crore-in-angel-round/articleshow/51813536.cms">Economic
						times</a> | <a
						href="https://economictimes.indiatimes.com/small-biz/money/legal-business-consultancy-firm-legalraasta-raises-funds-to-provide-gst-c0mpliance-software-to-more-smes/articleshow/58638228.cms"
						data-mce-href="https://economictimes.indiatimes.com/small-biz/money/legal-business-consultancy-firm-legalraasta-raises-funds-to-provide-gst-c0mpliance-software-to-more-smes/articleshow/58638228.cms">IndiaTimes</a>
					| <a href="https://www.vccircle.com/exclusive-legal-raasta-raises-5-mn-in-series-a-round/"
						data-mce-href="https://www.vccircle.com/exclusive-legal-raasta-raises-5-mn-in-series-a-round/">VCCircle</a>
					| <a href="http://bwdisrupt.businessworld.in/article/Delhi-Based-Startup-LegalRaasta-Raises-5M-in-Series-A-Round-from-Impanix-Capital/12-05-2017-118035/"
						data-mce-href="http://bwdisrupt.businessworld.in/article/Delhi-Based-Startup-LegalRaasta-Raises-5M-in-Series-A-Round-from-Impanix-Capital/12-05-2017-118035/">BusinessWorld</a>
					| <a href="https://www.youtube.com/watch?v=NSIg1XT-KM0&amp;t=1s"
						data-mce-href="https://www.youtube.com/watch?v=NSIg1XT-KM0&amp;t=1s">YouTube</a></p>
				<p>Warm regards,<br>Team, LegalRaasta<br><a href="https://www.legalraasta.com/private-limited-company-registration/"
						data-mce-href="https://www.legalraasta.com/private-limited-company-registration/">Company
						formation</a>&nbsp;|&nbsp;<a href="https://www.legalraasta.com/trademark-registration/"
						data-mce-href="https://www.legalraasta.com/trademark-registration/">Trademark</a>&nbsp;|&nbsp;<a
						href="https://www.legalraasta.com/fssai-license/"
						data-mce-href="https://www.legalraasta.com/fssai-license/">Licenses</a>&nbsp;|&nbsp;<a
						href="https://www.legalraasta.com/gst-registration/"
						data-mce-href="https://www.legalraasta.com/gst-registration/">GST</a> | <a
						href="https://www.legalraasta.com/accounting-bookkeeping/"
						data-mce-href="https://www.legalraasta.com/accounting-bookkeeping/">Accounting</a><br>M:&nbsp;<a
						href="tel:%2B91%20875%20000%208585" data-mce-href="tel:%2B91%20875%20000%208585">875 000
						8585</a>&nbsp;|&nbsp;<a href="https://www.legalraasta.com/"
						data-mce-href="https://www.legalraasta.com/">legalraasta.com</a><br>*<a
						href="https://www.legalraasta.com/terms-and-conditions/"
						data-mce-href="https://www.legalraasta.com/terms-and-conditions/">Terms &amp; Conditions apply </a></p>
			</body>
		</html>';
		}else if(isset($_POST['service_code']) && $service_code == '016') {
			$Body='<html>
			<body>
				<div>Dear '.$_POST['name'].'<p>We&nbsp;welcome&nbsp;you to LegalRaasta&nbsp;customer&nbsp;family! Every
						year&nbsp;Legalraasta&nbsp;<strong>helps more than 500+ firms</strong>&nbsp;in conversion of proprietorship
						firm into pvt. ltd.</p>
				</div>
				<div>Our conversion of proprietorship firm into pvt. ltd. package includes:&nbsp;DIN &amp;&nbsp;Digital Signature
					for 2 directors, name search &amp; approval,&nbsp;MOA/AOA,&nbsp;ROC registration fees &amp;&nbsp;Company Pan
					Card.<br>Time required: &lt;15 working days</div>
				<div>Cost: Rs. 13,999 onwards.</div>
				<div>Please follow the below steps to complete application:</div>
				<div>
					<p><strong>Step 1: Fill application form - <a
								href="https://www.legalraasta.com/sole-proprietorship-into-private-limited-company-application-form/"
								target="_blank" rel="noopener"
								data-mce-href="https://www.legalraasta.com/sole-proprietorship-into-private-limited-company-application-form/">Click
								here</a></strong></p>
					<p><strong>Steps 2: Make payment : </strong>Total charge of Rs. 13,999<strong>.&nbsp;</strong>Choose from the
						following options:</p>
					<ul>
						<li>Netbanking/ Credit card/ Debit card :&nbsp;<strong><a href="https://www.legalraasta.com/payment/"
									target="_blank" rel="noopener" data-mce-href="https://www.legalraasta.com/payment/">Click here
									to make Payment</a></strong></li>
						<li>Bank Transfer: Company: LegalRaasta Technologies Pvt. Ltd., Bank: Kotak Mahindra, Saraswati Vihar,
							Delhi, IFSC: KKBK0004604, A/c no: 9312250417</li>
					</ul>
					<p><strong>Step 3: Submit&nbsp;documents-&nbsp;</strong>Please email us the following&nbsp;documents&nbsp;(you
						can reply to this mail)</p>
					<ul>
						<li>Copy of PAN Card of Directors</li>
						<li>Copy of ID Proof of Directors (Prefer Aadhaar Card)</li>
						<li>Passport size photograph of all the Directors</li>
						<li>E-mail id &amp; mobile no. of all&nbsp;the Directors</li>
						<li>Residential Proof of registered office (Telephone or Mobile Bill/ Electricity or Gas Bill)</li>
						<li>MOA &amp; AOA</li>
						<li>Declaration</li>
						<li>Sale Deed (if owned property)</li>
						<li>Rent agreement (if rented property)</li>
						<li>Landlord NOC (if rented property)</li>
					</ul>
					<p>You can refer to the following articles for more information on conversion of proprietorship firm into pvt.
						ltd. service.&nbsp;&nbsp;You can also view our Youtube guide on <a
							href="https://www.youtube.com/watch?v=pZsMJubAUqA" target="_blank" rel="noopener"
							data-mce-href="https://www.youtube.com/watch?v=pZsMJubAUqA">Legalraasta</a>.&nbsp;Happy to help!!</p>
					<p>1.<a href="https://www.legalraasta.com/proprietorship-conversion-into-private-limited-company/"
							target="_blank" rel="noopener"
							data-mce-href="https://www.legalraasta.com/proprietorship-conversion-into-private-limited-company/">Guide
							for Proprietorship conversion into pvt ltd co.</a></p>
					<p><strong>About LegalRaasta:<br></strong>LegalRaasta is Indias leading business services provider. LegalRaasta
						serves more than 2200+ businesses ever year. We offer 30+ services including <strong>GST, ITR, TDS, Company
							formation, Service tax, IEC, Trademark, FSSAI, ROC, ISO, &amp; Loans.</strong></p>
					<p>LegalRaasta also has <strong>tie ups with 40+ Banks &amp; NBFCs</strong> and can help you with
						<strong>business loans</strong>.</p>
					<p>Warm regards,<br>Team, LegalRaasta<br><em><a
								href="https://www.legalraasta.com/private-limited-company-registration/"
								data-mce-href="https://www.legalraasta.com/private-limited-company-registration/">Company
								formation</a> | <a href="https://www.legalraasta.com/trademark-registration/"
								data-mce-href="https://www.legalraasta.com/trademark-registration/">Trademark</a> | <a
								href="https://www.legalraasta.com/fssai-license/"
								data-mce-href="https://www.legalraasta.com/fssai-license/">Licenses</a> | <a
								href="https://www.legalraasta.com/gst-registration/"
								data-mce-href="https://www.legalraasta.com/gst-registration/">GST</a>, <a
								href="https://www.legalraasta.com/income-tax-return/"
								data-mce-href="https://www.legalraasta.com/income-tax-return/">ITR</a> &amp; <a
								href="https://www.legalraasta.com/tds-return/"
								data-mce-href="https://www.legalraasta.com/tds-return/">TDS</a> | <a
								href="https://www.legalraasta.com/loan/"
								data-mce-href="https://www.legalraasta.com/loan/">Loans</a></em><br>M:&nbsp;<a
							href="tel:%2B91%20875%20000%208585" data-mce-href="tel:%2B91%20875%20000%208585">+91 875 000
							8585</a>&nbsp;|&nbsp;<a href="https://www.legalraasta.com/"
							data-mce-href="https://www.legalraasta.com/">www.legalraasta.com</a><br>Head office: B-300, Saraswati
						Vihar, Pitampura, Delhi<br><a href="https://www.facebook.com/legalraasta/"
							data-mce-href="https://www.facebook.com/legalraasta/">Facebook</a>&nbsp;|&nbsp;<a
							href="https://www.linkedin.com/in/LegalRaasta/"
							data-mce-href="https://www.linkedin.com/in/LegalRaasta/">Linkedin</a>&nbsp;|&nbsp;<a
							href="https://twitter.com/LRaasta"
							data-mce-href="https://twitter.com/LRaasta">Twitter</a>&nbsp;|&nbsp;<a
							href="https://www.youtube.com/watch?v=NSIg1XT-KM0&amp;t=1s"
							data-mce-href="https://www.youtube.com/watch?v=NSIg1XT-KM0&amp;t=1s">YouTube</a></p>
				</div>
			</body>
		</html>';			
		}else if(isset($_POST['service_code']) && $service_code == '017') {
			$Body='<html>
			<body>
				<div>Dear '.$_POST['name'].'<p>We&nbsp;welcome&nbsp;you to LegalRaasta&nbsp;customer&nbsp;family! Every
						year&nbsp;Legalraasta&nbsp;<strong>helps more than 500+ companies</strong>&nbsp;in Producer
						company&nbsp;registration.</p>
				</div>
				<div>Our Producer company&nbsp;registration package includes:&nbsp;DIN &amp; Digital Signature for all directors,
					Name search &amp; approval,&nbsp;MOA/AOA,&nbsp;ROC registration fees,&nbsp;Company Pan Card.</div>
				<div>Time required: &lt;30 working days</div>
				<div>Cost: Rs. 55,999 onwards</div>
				<div>Please follow the below steps to complete application:</div>
				<div><strong>Step 1: Fill application form - <a href="https://www.legalraasta.com/producer-co-application-form/"
							target="_blank" rel="noopener"
							data-mce-href="https://www.legalraasta.com/producer-co-application-form/">Click here</a></strong>
					<p><strong>Steps 2: Make payment : </strong>Total charge of Rs. 55,999<strong>.&nbsp;</strong>Choose from the
						following options:</p>
					<ul>
						<li>Netbanking/ Credit card/ Debit card :&nbsp;<strong><a href="https://www.legalraasta.com/payment/"
									target="_blank" rel="noopener" data-mce-href="https://www.legalraasta.com/payment/">Click here
									to make Payment</a></strong></li>
						<li>Bank Transfer: Company: LegalRaasta Technologies Pvt. Ltd., Bank: Kotak Mahindra, Saraswati Vihar,
							Delhi, IFSC: KKBK0004604, A/c no: 9312250417</li>
					</ul>
					<p><strong>Step 3: Submit&nbsp;documents-&nbsp;</strong>Please email us the following&nbsp;documents&nbsp;(you
						can reply to this mail)</p>
					<ul>
						<li>Copy of PAN Card of Directors</li>
						<li>Copy of ID Proof of Directors (Prefer Aadhaar Card)</li>
						<li>Passport size photograph of all the Directors</li>
						<li>Residential Proof of registered office (Telephone or Mobile Bill/ Electricity or Gas Bill)</li>
						<li>Landlord NOC (we will provide the format)</li>
						<li>Rent agreement along with latest rent receipts (if rented property)</li>
						<li><i class="icon-ok"></i>Property papers/House tax receipts (if owned property)</li>
					</ul>
					<p>You can refer to the following articles for more information on Producer company
						registration&nbsp;service.&nbsp;&nbsp;You can also view our Youtube guide on <a
							href="https://www.youtube.com/watch?v=pZsMJubAUqA" target="_blank" rel="noopener"
							data-mce-href="https://www.youtube.com/watch?v=pZsMJubAUqA">Legalraasta</a>.&nbsp;Happy to help!!</p>
					<ol>
						<li><a href="https://www.legalraasta.com/producer-company-registration/" target="_blank" rel="noopener"
								data-mce-href="https://www.legalraasta.com/producer-company-registration/">Guide for Producer
								Company</a></li>
					</ol>
					<p><strong>About LegalRaasta:<br></strong>LegalRaasta is India leading business services provider. LegalRaasta
						serves more than 2200+ businesses ever year. We offer 30+ services including <strong>GST, ITR, TDS, Company
							formation, Service tax, IEC, Trademark, FSSAI, ROC, ISO, &amp; Loans.</strong></p>
					<p>LegalRaasta also has <strong>tie ups with 40+ Banks &amp; NBFCs</strong> and can help you with
						<strong>business loans</strong>.</p>
					<p>Warm regards,<br>Team, LegalRaasta<br><em><a
								href="https://www.legalraasta.com/private-limited-company-registration/"
								data-mce-href="https://www.legalraasta.com/private-limited-company-registration/">Company
								formation</a> | <a href="https://www.legalraasta.com/trademark-registration/"
								data-mce-href="https://www.legalraasta.com/trademark-registration/">Trademark</a> | <a
								href="https://www.legalraasta.com/fssai-license/"
								data-mce-href="https://www.legalraasta.com/fssai-license/">Licenses</a> | <a
								href="https://www.legalraasta.com/gst-registration/"
								data-mce-href="https://www.legalraasta.com/gst-registration/">GST</a>, <a
								href="https://www.legalraasta.com/income-tax-return/"
								data-mce-href="https://www.legalraasta.com/income-tax-return/">ITR</a> &amp; <a
								href="https://www.legalraasta.com/tds-return/"
								data-mce-href="https://www.legalraasta.com/tds-return/">TDS</a> | <a
								href="https://www.legalraasta.com/loan/"
								data-mce-href="https://www.legalraasta.com/loan/">Loans</a></em><br>M:&nbsp;<a
							href="tel:%2B91%20875%20000%208585" data-mce-href="tel:%2B91%20875%20000%208585">+91 875 000
							8585</a>&nbsp;|&nbsp;<a href="https://www.legalraasta.com/"
							data-mce-href="https://www.legalraasta.com/">www.legalraasta.com</a><br>Head office: B-300, Saraswati
						Vihar, Pitampura, Delhi<br><a href="https://www.facebook.com/legalraasta/"
							data-mce-href="https://www.facebook.com/legalraasta/">Facebook</a>&nbsp;|&nbsp;<a
							href="https://www.linkedin.com/in/LegalRaasta/"
							data-mce-href="https://www.linkedin.com/in/LegalRaasta/">Linkedin</a>&nbsp;|&nbsp;<a
							href="https://twitter.com/LRaasta"
							data-mce-href="https://twitter.com/LRaasta">Twitter</a>&nbsp;|&nbsp;<a
							href="https://www.youtube.com/watch?v=NSIg1XT-KM0&amp;t=1s"
							data-mce-href="https://www.youtube.com/watch?v=NSIg1XT-KM0&amp;t=1s">YouTube</a></p>
				</div>
			</body>
		</html>';			
		}else if(isset($_POST['service_code']) && $service_code == '018') {
			$Body='<html>
			<body>
				<p><span style="font-family: Times New Roman, serif;" data-mce-style="font-family: Times New Roman, serif;"><span
							style="font-size: medium;" data-mce-style="font-size: medium;"><span style="color: #000000;"
								data-mce-style="color: #000000;"><span style="font-family: Calibri, serif;"
									data-mce-style="font-family: Calibri, serif;">Dear '.$_POST['name'].'</span></span></span></span></p>
				<p><span style="font-family: Times New Roman, serif;" data-mce-style="font-family: Times New Roman, serif;"><span
							style="font-size: medium;" data-mce-style="font-size: medium;"><span style="color: #000000;"
								data-mce-style="color: #000000;"><span style="font-family: Calibri, serif;"
									data-mce-style="font-family: Calibri, serif;">Greetings from LegalRaasta - India’s top financial
									services platform! Every year LegalRaasta helps more than 100+ companies in NBFC
									formation.</span></span></span></span></p>
				<p><span style="font-family: Times New Roman, serif;" data-mce-style="font-family: Times New Roman, serif;"><span
							style="font-size: medium;" data-mce-style="font-size: medium;"><span style="color: #000000;"
								data-mce-style="color: #000000;"><span style="font-family: Calibri, serif;"
									data-mce-style="font-family: Calibri, serif;"><b>Package includes:</b></span></span><span
								style="color: #000000;" data-mce-style="color: #000000;"><span style="font-family: Calibri, serif;"
									data-mce-style="font-family: Calibri, serif;"> NBFC registration formalities including Company
									registration, authorized capital increase, </span></span><span style="color: #222222;"
								data-mce-style="color: #222222;"><span style="font-family: Calibri, serif;"
									data-mce-style="font-family: Calibri, serif;">Application to RBI under section 45 I A,
									Resubmission if required, Correspondence till the registration of
									NBFC&nbsp;</span></span></span></span></p>
				<p><span style="font-family: Times New Roman, serif;" data-mce-style="font-family: Times New Roman, serif;"><span
							style="font-size: medium;" data-mce-style="font-size: medium;"><span style="color: #000000;"
								data-mce-style="color: #000000;"><span style="font-family: Calibri, serif;"
									data-mce-style="font-family: Calibri, serif;"><b>Time required:</b></span></span><span
								style="color: #000000;" data-mce-style="color: #000000;"><span style="font-family: Calibri, serif;"
									data-mce-style="font-family: Calibri, serif;"> 2 - 5months*</span></span></span></span></p>
				<p><span style="font-family: Times New Roman, serif;" data-mce-style="font-family: Times New Roman, serif;"><span
							style="font-size: medium;" data-mce-style="font-size: medium;"><span style="color: #000000;"
								data-mce-style="color: #000000;"><span style="font-family: Calibri, serif;"
									data-mce-style="font-family: Calibri, serif;"><b>Cost:</b></span></span><span
								style="color: #000000;" data-mce-style="color: #000000;"><span style="font-family: Calibri, serif;"
									data-mce-style="font-family: Calibri, serif;"> Rs. 10,000  onwards (incl. RBI, MCA and
									Professional fee)</span></span></span></span></p>
				<p><span style="font-family: Times New Roman, serif;" data-mce-style="font-family: Times New Roman, serif;"><span
							style="font-size: medium;" data-mce-style="font-size: medium;"><span style="color: #000000;"
								data-mce-style="color: #000000;"><span style="font-family: Calibri, serif;"
									data-mce-style="font-family: Calibri, serif;"><b>Process:<br></b></span></span><span
								style="color: #000000;" data-mce-style="color: #000000;"><span style="font-family: Calibri, serif;"
									data-mce-style="font-family: Calibri, serif;">Step 1: Fill application form - </span></span><a
								href="https://www.legalraasta.com/nbfc-application-form/"
								data-mce-href="https://www.legalraasta.com/nbfc-application-form/"><span style="color: #1155cc;"
									data-mce-style="color: #1155cc;"><span style="font-family: Calibri, serif;"
										data-mce-style="font-family: Calibri, serif;">Click here</span></span><span
									style="color: #000000;" data-mce-style="color: #000000;"><span
										style="font-family: Calibri, serif;"
										data-mce-style="font-family: Calibri, serif;"><b><br></b></span></span></a><span
								style="color: #000000;" data-mce-style="color: #000000;"><span style="font-family: Calibri, serif;"
									data-mce-style="font-family: Calibri, serif;"><b>Step 2: Make payment: </b></span></span><a
								href="https://www.legalraasta.com/payment/"
								data-mce-href="https://www.legalraasta.com/payment/"><span style="color: #1155cc;"
									data-mce-style="color: #1155cc;"><span style="font-family: Calibri, serif;"
										data-mce-style="font-family: Calibri, serif;"><b>Click here</b></span></span><span
									style="color: #000000;" data-mce-style="color: #000000;"><span
										style="font-family: Calibri, serif;"
										data-mce-style="font-family: Calibri, serif;"><br></span></span></a><span
								style="color: #000000;" data-mce-style="color: #000000;"><span style="font-family: Calibri, serif;"
									data-mce-style="font-family: Calibri, serif;">Step 3: <a
										href="https://client.legalraasta.com/d.php"
										data-mce-href="https://client.legalraasta.com/d.php">Upload
										Documents</a></span></span></span></span></p>
				<p><span style="font-family: Times New Roman, serif;" data-mce-style="font-family: Times New Roman, serif;"><span
							style="font-size: medium;" data-mce-style="font-size: medium;"><span style="color: #000000;"
								data-mce-style="color: #000000;"><span style="font-family: Calibri, serif;"
									data-mce-style="font-family: Calibri, serif;"><b>Requirements:</b></span></span><span
								style="color: #000000;" data-mce-style="color: #000000;"><span style="font-family: Calibri, serif;"
									data-mce-style="font-family: Calibri, serif;"> Passport size photograph of all the director,
									Bank statement of director, Fixed Deposit of INR 2Cr, Finance/ banking background of Directors,
									business plan for 3 to 5 years, banker’s report<br></span></span><span style="color: #000000;"
								data-mce-style="color: #000000;"><span style="font-family: Calibri, serif;"
									data-mce-style="font-family: Calibri, serif;"><b>If you don’t have capital of INR
										2cr</b></span></span><span style="color: #000000;" data-mce-style="color: #000000;"><span
									style="font-family: Calibri, serif;" data-mce-style="font-family: Calibri, serif;">, you can
									consider following alternatives which can be formed with &lt;10lakh capital
									:<br>-</span></span><a href="https://www.legalraasta.com/register-nidhi-company/"
								data-mce-href="https://www.legalraasta.com/register-nidhi-company/"><span style="color: #1155cc;"
									data-mce-style="color: #1155cc;"><span style="font-family: Calibri, serif;"
										data-mce-style="font-family: Calibri, serif;">Nidhi Company </span></span><span
									style="color: #000000;" data-mce-style="color: #000000;"><span
										style="font-family: Calibri, serif;"
										data-mce-style="font-family: Calibri, serif;"><br></span></span></a><span
								style="color: #000000;" data-mce-style="color: #000000;"><span style="font-family: Calibri, serif;"
									data-mce-style="font-family: Calibri, serif;">-</span></span><a
								href="https://www.legalraasta.com/microfinance-company-registration/"
								data-mce-href="https://www.legalraasta.com/microfinance-company-registration/"><span
									style="color: #1155cc;" data-mce-style="color: #1155cc;"><span
										style="font-family: Calibri, serif;"
										data-mce-style="font-family: Calibri, serif;">Microfinance
										company&nbsp;</span></span></a></span></span></p>
				<p><span style="font-family: Times New Roman, serif;" data-mce-style="font-family: Times New Roman, serif;"><span
							style="font-size: medium;" data-mce-style="font-size: medium;"><span style="color: #000000;"
								data-mce-style="color: #000000;"><span style="font-family: Calibri, serif;"
									data-mce-style="font-family: Calibri, serif;"><b>LegalRaasta in News:</b></span></span> <a
								href="https://economictimes.indiatimes.com/small-biz/startups/legalraasta-raises-rs-6-5-crore-in-angel-round/articleshow/51813536.cms"
								data-mce-href="https://economictimes.indiatimes.com/small-biz/startups/legalraasta-raises-rs-6-5-crore-in-angel-round/articleshow/51813536.cms"><span
									style="color: #1155cc;" data-mce-style="color: #1155cc;"><span
										style="font-family: Calibri, serif;" data-mce-style="font-family: Calibri, serif;">Economic
										times</span></span></a><span style="color: #000000;" data-mce-style="color: #000000;"><span
									style="font-family: Calibri, serif;" data-mce-style="font-family: Calibri, serif;"> |
								</span></span><a
								href="https://economictimes.indiatimes.com/small-biz/money/legal-business-consultancy-firm-legalraasta-raises-funds-to-provide-gst-c0mpliance-software-to-more-smes/articleshow/58638228.cms"
								data-mce-href="https://economictimes.indiatimes.com/small-biz/money/legal-business-consultancy-firm-legalraasta-raises-funds-to-provide-gst-c0mpliance-software-to-more-smes/articleshow/58638228.cms"><span
									style="color: #1155cc;" data-mce-style="color: #1155cc;"><span
										style="font-family: Calibri, serif;"
										data-mce-style="font-family: Calibri, serif;">IndiaTimes</span></span></a><span
								style="color: #000000;" data-mce-style="color: #000000;"><span style="font-family: Calibri, serif;"
									data-mce-style="font-family: Calibri, serif;"> | </span></span><a
								href="https://www.vccircle.com/exclusive-legal-raasta-raises-5-mn-in-series-a-round/"
								data-mce-href="https://www.vccircle.com/exclusive-legal-raasta-raises-5-mn-in-series-a-round/"><span
									style="color: #1155cc;" data-mce-style="color: #1155cc;"><span
										style="font-family: Calibri, serif;"
										data-mce-style="font-family: Calibri, serif;">VCCircle</span></span></a><span
								style="color: #000000;" data-mce-style="color: #000000;"><span style="font-family: Calibri, serif;"
									data-mce-style="font-family: Calibri, serif;"> | </span></span><a
								href="http://bwdisrupt.businessworld.in/article/Delhi-Based-Startup-LegalRaasta-Raises-5M-in-Series-A-Round-from-Impanix-Capital/12-05-2017-118035/"
								data-mce-href="http://bwdisrupt.businessworld.in/article/Delhi-Based-Startup-LegalRaasta-Raises-5M-in-Series-A-Round-from-Impanix-Capital/12-05-2017-118035/"><span
									style="color: #1155cc;" data-mce-style="color: #1155cc;"><span
										style="font-family: Calibri, serif;"
										data-mce-style="font-family: Calibri, serif;">BusinessWorld</span></span></a><span
								style="color: #000000;" data-mce-style="color: #000000;"><span style="font-family: Calibri, serif;"
									data-mce-style="font-family: Calibri, serif;">&nbsp;</span></span></span></span></p>
				<p><span style="font-family: Times New Roman, serif;" data-mce-style="font-family: Times New Roman, serif;"><span
							style="font-size: medium;" data-mce-style="font-size: medium;"><span style="color: #000000;"
								data-mce-style="color: #000000;"><span style="font-family: Calibri, serif;"
									data-mce-style="font-family: Calibri, serif;">Warm regards,<br>Team,
									LegalRaasta<br></span></span><a
								href="https://www.legalraasta.com/private-limited-company-registration/"
								data-mce-href="https://www.legalraasta.com/private-limited-company-registration/"><span
									style="color: #1155cc;" data-mce-style="color: #1155cc;"><span
										style="font-family: Calibri, serif;" data-mce-style="font-family: Calibri, serif;">Company
										formation</span></span></a><span style="color: #000000;"
								data-mce-style="color: #000000;"><span style="font-family: Calibri, serif;"
									data-mce-style="font-family: Calibri, serif;"> | </span></span><a
								href="https://www.legalraasta.com/trademark-registration/"
								data-mce-href="https://www.legalraasta.com/trademark-registration/"><span style="color: #1155cc;"
									data-mce-style="color: #1155cc;"><span style="font-family: Calibri, serif;"
										data-mce-style="font-family: Calibri, serif;">Trademark</span></span></a><span
								style="color: #000000;" data-mce-style="color: #000000;"><span style="font-family: Calibri, serif;"
									data-mce-style="font-family: Calibri, serif;"> | </span></span><a
								href="https://www.legalraasta.com/fssai-license/"
								data-mce-href="https://www.legalraasta.com/fssai-license/"><span style="color: #1155cc;"
									data-mce-style="color: #1155cc;"><span style="font-family: Calibri, serif;"
										data-mce-style="font-family: Calibri, serif;">Licenses</span></span></a><span
								style="color: #000000;" data-mce-style="color: #000000;"><span style="font-family: Calibri, serif;"
									data-mce-style="font-family: Calibri, serif;"> | </span></span><a
								href="https://www.legalraasta.com/gst-registration/"
								data-mce-href="https://www.legalraasta.com/gst-registration/"><span style="color: #1155cc;"
									data-mce-style="color: #1155cc;"><span style="font-family: Calibri, serif;"
										data-mce-style="font-family: Calibri, serif;">GST</span></span></a><span
								style="color: #000000;" data-mce-style="color: #000000;"><span style="font-family: Calibri, serif;"
									data-mce-style="font-family: Calibri, serif;"> | </span></span><a
								href="https://www.legalraasta.com/accounting-bookkeeping/"
								data-mce-href="https://www.legalraasta.com/accounting-bookkeeping/"><span style="color: #1155cc;"
									data-mce-style="color: #1155cc;"><span style="font-family: Calibri, serif;"
										data-mce-style="font-family: Calibri, serif;">Accounting |</span></span></a> <a
								href="https://drive.google.com/file/d/1CMaCZQkPWtJYUIqQeY0R7L3SMy-_-TZj/view?usp=sharing"
								data-mce-href="https://drive.google.com/file/d/1CMaCZQkPWtJYUIqQeY0R7L3SMy-_-TZj/view?usp=sharing">NBFC
								Guide Book</a><span style="color: #000000;" data-mce-style="color: #000000;"><span
									style="font-family: Calibri, serif;" data-mce-style="font-family: Calibri, serif;"><br>M: 875
									000 8585 | </span></span><a href="https://www.legalraasta.com/"
								data-mce-href="https://www.legalraasta.com/"><span style="color: #1155cc;"
									data-mce-style="color: #1155cc;"><span style="font-family: Calibri, serif;"
										data-mce-style="font-family: Calibri, serif;">legalraasta.com</span></span><span
									style="color: #000000;" data-mce-style="color: #000000;"><span
										style="font-family: Calibri, serif;"
										data-mce-style="font-family: Calibri, serif;"><br></span></span></a><span
								style="color: #000000;" data-mce-style="color: #000000;"><span style="font-family: Calibri, serif;"
									data-mce-style="font-family: Calibri, serif;">*</span></span><a
								href="https://www.legalraasta.com/terms-and-conditions/"
								data-mce-href="https://www.legalraasta.com/terms-and-conditions/"><span style="color: #1155cc;"
									data-mce-style="color: #1155cc;"><span style="font-family: Calibri, serif;"
										data-mce-style="font-family: Calibri, serif;">Terms &amp; Conditions
										apply</span></span></a><span style="color: #000000;" data-mce-style="color: #000000;"><span
									style="font-family: Calibri, serif;"
									data-mce-style="font-family: Calibri, serif;">&nbsp;</span></span></span></span></p>
			</body>
		</html>';
		}else if(isset($_POST['service_code']) && $service_code == '019') {
			$Body='<html>
			<body>
				<p>Dear '.$_POST['name'].'</p>
				<p>Greetings from LegalRaasta - India’s top financial services platform! Every year LegalRaasta helps more than 500+
					companies in Patent Search.</p>
				<p>Package includes: Prior Art Search, Comparisons, Acceptance chances &amp; Guidance.</p>
				<p><b>Time required</b>: &lt;10 working days*<br><b>Cost</b>: Rs. 5,249  onwards (incl. GST)</p>
				<p>Process:<br>Step 1: Fill application form -&nbsp;<a href="https://www.legalraasta.com/patent-search-application/"
						data-mce-href="https://www.legalraasta.com/patent-search-application/">Click here</a><br><b>Step 2: Make
						payment: Rs. 5,249  onwards:&nbsp;</b><a href="https://www.legalraasta.com/payment/"
						data-mce-href="https://www.legalraasta.com/payment/"><b>Click here </b></a><br>Step 3: <a
						href="https://client.legalraasta.com/d.php" data-mce-href="https://client.legalraasta.com/d.php">Upload
						Documents&nbsp;</a></p>
				<p><b>Documents Required: </b>Details of Invention</p>
				<p>You can also view our Youtube guide on&nbsp;<a href="https://www.youtube.com/watch?v=yMSd5YrAdN0&amp;t=26s"
						data-mce-href="https://www.youtube.com/watch?v=yMSd5YrAdN0&amp;t=26s">Patent Registration</a></p>
				<p><b>LegalRaasta in News: </b><a
						href="https://economictimes.indiatimes.com/small-biz/startups/legalraasta-raises-rs-6-5-crore-in-angel-round/articleshow/51813536.cms"
						data-mce-href="https://economictimes.indiatimes.com/small-biz/startups/legalraasta-raises-rs-6-5-crore-in-angel-round/articleshow/51813536.cms">Economic
						times</a> | <a
						href="https://economictimes.indiatimes.com/small-biz/money/legal-business-consultancy-firm-legalraasta-raises-funds-to-provide-gst-c0mpliance-software-to-more-smes/articleshow/58638228.cms"
						data-mce-href="https://economictimes.indiatimes.com/small-biz/money/legal-business-consultancy-firm-legalraasta-raises-funds-to-provide-gst-c0mpliance-software-to-more-smes/articleshow/58638228.cms">IndiaTimes</a>
					| <a href="https://www.vccircle.com/exclusive-legal-raasta-raises-5-mn-in-series-a-round/"
						data-mce-href="https://www.vccircle.com/exclusive-legal-raasta-raises-5-mn-in-series-a-round/">VCCircle</a>
					| <a href="http://bwdisrupt.businessworld.in/article/Delhi-Based-Startup-LegalRaasta-Raises-5M-in-Series-A-Round-from-Impanix-Capital/12-05-2017-118035/"
						data-mce-href="http://bwdisrupt.businessworld.in/article/Delhi-Based-Startup-LegalRaasta-Raises-5M-in-Series-A-Round-from-Impanix-Capital/12-05-2017-118035/">BusinessWorld</a>
					| <a href="https://www.youtube.com/watch?v=NSIg1XT-KM0&amp;t=1s"
						data-mce-href="https://www.youtube.com/watch?v=NSIg1XT-KM0&amp;t=1s">YouTube</a></p>
				<p><b><br></b>Warm regards,<br>Team, LegalRaasta<br><a
						href="https://www.legalraasta.com/private-limited-company-registration/"
						data-mce-href="https://www.legalraasta.com/private-limited-company-registration/"><i>Company
							formation</i></a><em>&nbsp;|&nbsp;</em><a href="https://www.legalraasta.com/trademark-registration/"
						data-mce-href="https://www.legalraasta.com/trademark-registration/"><i>Trademark</i></a><em>&nbsp;|&nbsp;</em><a
						href="https://www.legalraasta.com/fssai-license/"
						data-mce-href="https://www.legalraasta.com/fssai-license/"><i>Licenses</i></a><em>&nbsp;|&nbsp;</em><a
						href="https://www.legalraasta.com/gst-registration/"
						data-mce-href="https://www.legalraasta.com/gst-registration/"><i>GST</i></a><em> | </em><a
						href="https://www.legalraasta.com/accounting-bookkeeping/"
						data-mce-href="https://www.legalraasta.com/accounting-bookkeeping/"><i>Accounting</i></a><em>&nbsp;&nbsp;</em><i><br></i>M:&nbsp;<a
						href="tel:%2B91%20875%20000%208585" data-mce-href="tel:%2B91%20875%20000%208585">875 000
						8585</a>&nbsp;|&nbsp;<a href="https://www.legalraasta.com/"
						data-mce-href="https://www.legalraasta.com/">legalraasta.com</a><br>* <a
						href="https://www.legalraasta.com/terms-and-conditions/"
						data-mce-href="https://www.legalraasta.com/terms-and-conditions/">Terms &amp; Conditions</a></p>
			</body>
		</html>';
		}else if(isset($_POST['service_code']) && $service_code == '020') {
			$Body="Need Mail In this Service";
		}else if(isset($_POST['service_code']) && $service_code == '021') {
			$Body='<html>
			<body>
				<div>Dear '.$_POST['name'].'<p>We&nbsp;welcome&nbsp;you to LegalRaasta&nbsp;customer&nbsp;family! Every
						year&nbsp;Legalraasta&nbsp;<strong>helps more than 500+ companies</strong>&nbsp;in Trademark
						renewal&nbsp;registration.</p>
				</div>
				<div>Our Trademark renewal registration package includes:&nbsp;Trademark consultation, application preparation,
					application filing, same day filing &amp; government fees.</div>
				<div>Time required: &lt;3 working days</div>
				<div>Cost: Rs. 11,999  only.</div>
				<div>Please follow the below steps to complete application:</div>
				<div>
					<p><strong>Step 1: Fill application form - <a
								href="https://www.legalraasta.com/trademark-renewal-application-form/" target="_blank"
								rel="noopener" data-mce-href="https://www.legalraasta.com/trademark-renewal-application-form/">Click
								here</a></strong></p>
					<p><strong>Steps 2: Make payment : </strong>Total charge of Rs. 11,999 <strong>.&nbsp;</strong>Choose from the
						following options:</p>
					<ul>
						<li>Netbanking/ Credit card/ Debit card :&nbsp;<strong><a href="https://www.legalraasta.com/payment/"
									target="_blank" rel="noopener" data-mce-href="https://www.legalraasta.com/payment/">Click here
									to make Payment</a></strong></li>
						<li>Bank Transfer: Company: LegalRaasta Technologies Pvt. Ltd., Bank: Kotak Mahindra, Saraswati Vihar,
							Delhi, IFSC: KKBK0004604, A/c no: 9312250417</li>
					</ul>
					<p><strong>Step 3: Submit&nbsp;documents-&nbsp;</strong>Please email us the following&nbsp;documents&nbsp;(you
						can reply to this mail)</p>
					<ul>
						<li>PAN Card copy of transferee</li>
						<li>ID Proof of transferee (Prefer Aadhaar Card)</li>
						<li>Residential Proof of transferee (Telephone or Mobile Bill/ Electricity or Gas Bill)</li>
						<li>Incorporation documents of transferee (in case of a company)</li>
						<li>Trademark certificate or TM number acknowledgement</li>
					</ul>
					<p>You can refer to the following articles for more information on Trademark service.&nbsp;&nbsp;You can also
						view our YouTube guide on <a href="https://www.youtube.com/watch?v=1qnH5NYYtCk" target="_blank"
							rel="noopener" data-mce-href="https://www.youtube.com/watch?v=1qnH5NYYtCk">Trademark
							registration</a>.&nbsp;Happy to help!!</p>
					<p>For complete procedure for Trademark Registration.&nbsp;<a
							href="https://www.legalraasta.com/what-is-the-procedure-to-register-trademark/"
							data-mce-href="https://www.legalraasta.com/what-is-the-procedure-to-register-trademark/">Click Here</a>
					</p>
					<p>For Classes of goods &amp; Services for Trademark. <a
							href="https://www.legalraasta.com/class-of-goods-and-services-for-trademark/"
							data-mce-href="https://www.legalraasta.com/class-of-goods-and-services-for-trademark/">Click Here</a>
					</p>
					<ol>
						<li><a href="https://www.legalraasta.com/trademark-registration-process-in-india/" target="_blank"
								rel="noopener"
								data-mce-href="https://www.legalraasta.com/trademark-registration-process-in-india/">Guide for
								Trademark service</a></li>
						<li><a href="https://www.legalraasta.com/trademark-all-you-need-to-know/" target="_blank" rel="noopener"
								data-mce-href="https://www.legalraasta.com/trademark-all-you-need-to-know/">Trademark service
								registration process</a></li>
						<li><a href="https://www.legalraasta.com/copyright-in-india/" target="_blank" rel="noopener"
								data-mce-href="https://www.legalraasta.com/copyright-in-india/">Copyright Registration
								comparison</a></li>
					</ol>
					<p><strong>About LegalRaasta:<br></strong>LegalRaasta is India leading business services provider. LegalRaasta
						serves more than 2200+ businesses ever year. We offer 30+ services including <strong>GST, ITR, TDS, Company
							formation, Service tax, IEC, Trademark, FSSAI, ROC, ISO, &amp; Loans.</strong></p>
					<p>LegalRaasta also has <strong>tie ups with 40+ Banks &amp; NBFCs</strong> and can help you with
						<strong>business loans</strong>.</p>
					<p>Warm regards,<br>Team, LegalRaasta<br><em><a
								href="https://www.legalraasta.com/private-limited-company-registration/"
								data-mce-href="https://www.legalraasta.com/private-limited-company-registration/">Company
								formation</a> | <a href="https://www.legalraasta.com/trademark-registration/"
								data-mce-href="https://www.legalraasta.com/trademark-registration/">Trademark</a> | <a
								href="https://www.legalraasta.com/fssai-license/"
								data-mce-href="https://www.legalraasta.com/fssai-license/">Licenses</a> | <a
								href="https://www.legalraasta.com/gst-registration/"
								data-mce-href="https://www.legalraasta.com/gst-registration/">GST</a>, <a
								href="https://www.legalraasta.com/income-tax-return/"
								data-mce-href="https://www.legalraasta.com/income-tax-return/">ITR</a> &amp; <a
								href="https://www.legalraasta.com/tds-return/"
								data-mce-href="https://www.legalraasta.com/tds-return/">TDS</a> | <a
								href="https://www.legalraasta.com/loan/"
								data-mce-href="https://www.legalraasta.com/loan/">Loans</a></em><br>M:&nbsp;<a
							href="tel:%2B91%20875%20000%208585" data-mce-href="tel:%2B91%20875%20000%208585">+91 875 000
							8585</a>&nbsp;|&nbsp;<a href="https://www.legalraasta.com/"
							data-mce-href="https://www.legalraasta.com/">www.legalraasta.com</a><br>Head office: B-300, Saraswati
						Vihar, Pitampura, Delhi<br><a href="https://www.facebook.com/legalraasta/"
							data-mce-href="https://www.facebook.com/legalraasta/">Facebook</a>&nbsp;|&nbsp;<a
							href="https://www.linkedin.com/in/LegalRaasta/"
							data-mce-href="https://www.linkedin.com/in/LegalRaasta/">Linkedin</a>&nbsp;|&nbsp;<a
							href="https://twitter.com/LRaasta"
							data-mce-href="https://twitter.com/LRaasta">Twitter</a>&nbsp;|&nbsp;<a
							href="https://www.youtube.com/watch?v=NSIg1XT-KM0&amp;t=1s"
							data-mce-href="https://www.youtube.com/watch?v=NSIg1XT-KM0&amp;t=1s">YouTube</a></p>
				</div>
			</body>
		</html>';
		}else if(isset($_POST['service_code']) && $service_code == '022') {
			$Body="Need mail for This";
		}else if(isset($_POST['service_code']) && $service_code == '023') {
			$Body='<html>
			<body>
				<p>Dear '.$_POST['name'].',</p>
				<p>Greetings from LegalRaasta - India’s top financial services platform! Every year LegalRaasta helps more than 500+
					companies in MSME Registration.</p>
				<p><b>Time required</b>: &lt;5 working days*<br><b>Cost</b>: Rs. 1,999 onwards (incl. GST)</p>
				<p><b>Process:</b></p>
				<p>Step 1: Fill application form -&nbsp;<a href="https://www.legalraasta.com/msme-application-form/"
						data-mce-href="https://www.legalraasta.com/msme-application-form/">Click here</a><br><b>Step 2: Make
						payment: Rs. 1,999 onwards:&nbsp;</b><a href="https://www.legalraasta.com/payment/"
						data-mce-href="https://www.legalraasta.com/payment/"><b>Click here </b></a><br>Step 3: <a
						href="https://client.legalraasta.com/d.php" data-mce-href="https://client.legalraasta.com/d.php">Upload
						Documents&nbsp;</a></p>
				<p><b>Documents Required: </b>Pan Card of owners, Adhaar card of owners, Cancelled Cheque, Registration proof
					(Partnership Deed or COI in case of Company), Office address proof (electricity/ phone bill)<b><br></b><b> </b>
				</p>
				<p><b>LegalRaasta in News: </b><a
						href="https://economictimes.indiatimes.com/small-biz/startups/legalraasta-raises-rs-6-5-crore-in-angel-round/articleshow/51813536.cms"
						data-mce-href="https://economictimes.indiatimes.com/small-biz/startups/legalraasta-raises-rs-6-5-crore-in-angel-round/articleshow/51813536.cms">Economic
						times</a> | <a
						href="https://economictimes.indiatimes.com/small-biz/money/legal-business-consultancy-firm-legalraasta-raises-funds-to-provide-gst-c0mpliance-software-to-more-smes/articleshow/58638228.cms"
						data-mce-href="https://economictimes.indiatimes.com/small-biz/money/legal-business-consultancy-firm-legalraasta-raises-funds-to-provide-gst-c0mpliance-software-to-more-smes/articleshow/58638228.cms">IndiaTimes</a>
					| <a href="https://www.vccircle.com/exclusive-legal-raasta-raises-5-mn-in-series-a-round/"
						data-mce-href="https://www.vccircle.com/exclusive-legal-raasta-raises-5-mn-in-series-a-round/">VCCircle</a>
					| <a href="http://bwdisrupt.businessworld.in/article/Delhi-Based-Startup-LegalRaasta-Raises-5M-in-Series-A-Round-from-Impanix-Capital/12-05-2017-118035/"
						data-mce-href="http://bwdisrupt.businessworld.in/article/Delhi-Based-Startup-LegalRaasta-Raises-5M-in-Series-A-Round-from-Impanix-Capital/12-05-2017-118035/">BusinessWorld</a>
					| <a href="https://www.youtube.com/watch?v=NSIg1XT-KM0&amp;t=1s"
						data-mce-href="https://www.youtube.com/watch?v=NSIg1XT-KM0&amp;t=1s">YouTube</a></p>
				<p><b><br></b>Warm regards,<br>Team, LegalRaasta<br><a
						href="https://www.legalraasta.com/private-limited-company-registration/"
						data-mce-href="https://www.legalraasta.com/private-limited-company-registration/"><i>Company
							formation</i></a><em>&nbsp;|&nbsp;</em><a href="https://www.legalraasta.com/trademark-registration/"
						data-mce-href="https://www.legalraasta.com/trademark-registration/"><i>Trademark</i></a><em>&nbsp;|&nbsp;</em><a
						href="https://www.legalraasta.com/fssai-license/"
						data-mce-href="https://www.legalraasta.com/fssai-license/"><i>Licenses</i></a><em>&nbsp;|&nbsp;</em><a
						href="https://www.legalraasta.com/gst-registration/"
						data-mce-href="https://www.legalraasta.com/gst-registration/"><i>GST</i></a><em> | </em><a
						href="https://www.legalraasta.com/accounting-bookkeeping/"
						data-mce-href="https://www.legalraasta.com/accounting-bookkeeping/"><i>Accounting</i></a><em>&nbsp;&nbsp;</em><i><br></i>M:&nbsp;<a
						href="tel:%2B91%20875%20000%208585" data-mce-href="tel:%2B91%20875%20000%208585">875 000
						8585</a>&nbsp;|&nbsp;<a href="https://www.legalraasta.com/"
						data-mce-href="https://www.legalraasta.com/">legalraasta.com</a><br>* <a
						href="https://www.legalraasta.com/terms-and-conditions/"
						data-mce-href="https://www.legalraasta.com/terms-and-conditions/">Terms &amp; Conditions</a></p>
			</body>
		</html>';
		}else if(isset($_POST['service_code']) && $service_code == '024') {
			$Body='<html>
			<bodya>
				<div>Dear '.$_POST['name'].'<p>We&nbsp;welcome&nbsp;you to LegalRaasta&nbsp;customer&nbsp;family! Every
						year&nbsp;Legalraasta&nbsp;<strong>helps more than 500+ companies</strong>&nbsp;in Trademark
						objection&nbsp;registration.</p>
				</div>
				<div>Our Trademark objection&nbsp;registration package includes:&nbsp;Trademark consultation, application
					preparation, application filing, same day filing &amp; government fees.</div>
				<div>Time required: &lt;3 working days</div>
				<div>Cost:Rs. 3,999  only.</div>
				<div>Please follow the below steps to complete application:</div>
				<div><strong>Step 1: Fill application form - <a href="https://www.legalraasta.com/trademark-objection-application/"
							target="_blank" rel="noopener"
							data-mce-href="https://www.legalraasta.com/trademark-objection-application/">Click here</a></strong>
					<p><strong>Steps 2: Make payment : </strong>Total charge ofRs.Rs. 3,999 <strong>.&nbsp;</strong>Choose from the
						following options:</p>
					<ul>
						<li>Netbanking/ Credit card/ Debit card :&nbsp;<strong><a href="https://www.legalraasta.com/payment/"
									target="_blank" rel="noopener" data-mce-href="https://www.legalraasta.com/payment/">Click here
									to make Payment</a></strong></li>
						<li>Bank Transfer: Company: LegalRaasta Technologies Pvt. Ltd., Bank: Kotak Mahindra, Saraswati Vihar,
							Delhi, IFSC: KKBK0004604, A/c no: 9312250417</li>
					</ul>
					<p><strong>Step 3: Submit&nbsp;documents-&nbsp;</strong>Please email us the following&nbsp;documents&nbsp;(you
						can reply to this mail)</p>
					<ul>
						<li>PAN Card copy of transferee</li>
						<li>ID Proof of transferee (Prefer Aadhaar Card)</li>
						<li>Residential Proof of transferee (Telephone or Mobile Bill/ Electricity or Gas Bill)</li>
						<li>Incorporation documents of transferee (in case of a company)</li>
						<li>TM acknowledgement</li>
					</ul>
					<p>You can refer to the following articles for more information on Trademark service.&nbsp;&nbsp;You can also
						view our YouTube guide on <a href="https://www.youtube.com/watch?v=1qnH5NYYtCk" target="_blank"
							rel="noopener" data-mce-href="https://www.youtube.com/watch?v=1qnH5NYYtCk">Trademark
							registration</a>.&nbsp;Happy to help!!</p>
					<p>For complete procedure for Trademark Registration.&nbsp;<a
							href="https://www.legalraasta.com/what-is-the-procedure-to-register-trademark/"
							data-mce-href="https://www.legalraasta.com/what-is-the-procedure-to-register-trademark/">Click Here</a>
					</p>
					<p>For Classes of goods &amp; Services for Trademark. <a
							href="https://www.legalraasta.com/class-of-goods-and-services-for-trademark/"
							data-mce-href="https://www.legalraasta.com/class-of-goods-and-services-for-trademark/">Click Here</a>
					</p>
					<ol>
						<li><a href="https://www.legalraasta.com/trademark-registration-process-in-india/" target="_blank"
								rel="noopener"
								data-mce-href="https://www.legalraasta.com/trademark-registration-process-in-india/">Guide for
								Trademark service</a></li>
						<li><a href="https://www.legalraasta.com/trademark-all-you-need-to-know/" target="_blank" rel="noopener"
								data-mce-href="https://www.legalraasta.com/trademark-all-you-need-to-know/">Trademark service
								registration process</a></li>
						<li><a href="https://www.legalraasta.com/copyright-in-india/" target="_blank" rel="noopener"
								data-mce-href="https://www.legalraasta.com/copyright-in-india/">Copyright Registration
								comparison</a></li>
					</ol>
					<p><strong>About LegalRaasta:<br></strong>LegalRaasta is India leading business services provider. LegalRaasta
						serves more than 2200+ businesses ever year. We offer 30+ services including <strong>GST, ITR, TDS, Company
							formation, Service tax, IEC, Trademark, FSSAI, ROC, ISO, &amp; Loans.</strong></p>
					<p>LegalRaasta also has <strong>tie ups with 40+ Banks &amp; NBFCs</strong> and can help you with
						<strong>business loans</strong>.</p>
					<p>Warm regards,<br>Team, LegalRaasta<br><em><a
								href="https://www.legalraasta.com/private-limited-company-registration/"
								data-mce-href="https://www.legalraasta.com/private-limited-company-registration/">Company
								formation</a> | <a href="https://www.legalraasta.com/trademark-registration/"
								data-mce-href="https://www.legalraasta.com/trademark-registration/">Trademark</a> | <a
								href="https://www.legalraasta.com/fssai-license/"
								data-mce-href="https://www.legalraasta.com/fssai-license/">Licenses</a> | <a
								href="https://www.legalraasta.com/gst-registration/"
								data-mce-href="https://www.legalraasta.com/gst-registration/">GST</a>, <a
								href="https://www.legalraasta.com/income-tax-return/"
								data-mce-href="https://www.legalraasta.com/income-tax-return/">ITR</a> &amp; <a
								href="https://www.legalraasta.com/tds-return/"
								data-mce-href="https://www.legalraasta.com/tds-return/">TDS</a> | <a
								href="https://www.legalraasta.com/loan/"
								data-mce-href="https://www.legalraasta.com/loan/">Loans</a></em><br>M:&nbsp;<a
							href="tel:%2B91%20875%20000%208585" data-mce-href="tel:%2B91%20875%20000%208585">+91 875 000
							8585</a>&nbsp;|&nbsp;<a href="https://www.legalraasta.com/"
							data-mce-href="https://www.legalraasta.com/">www.legalraasta.com</a><br>Head office: B-300, Saraswati
						Vihar, Pitampura, Delhi<br><a href="https://www.facebook.com/legalraasta/"
							data-mce-href="https://www.facebook.com/legalraasta/">Facebook</a>&nbsp;|&nbsp;<a
							href="https://www.linkedin.com/in/LegalRaasta/"
							data-mce-href="https://www.linkedin.com/in/LegalRaasta/">Linkedin</a>&nbsp;|&nbsp;<a
							href="https://twitter.com/LRaasta"
							data-mce-href="https://twitter.com/LRaasta">Twitter</a>&nbsp;|&nbsp;<a
							href="https://www.youtube.com/watch?v=NSIg1XT-KM0&amp;t=1s"
							data-mce-href="https://www.youtube.com/watch?v=NSIg1XT-KM0&amp;t=1s">YouTube</a></p>
				</div>
			</bodya>
		</html>';
		}else if(isset($_POST['service_code']) && $service_code == '025') {
			$Body='<html>
			<body>
				<div>Dear '.$_POST['name'].'<p>We&nbsp;welcome&nbsp;you to LegalRaasta&nbsp;customer&nbsp;family! Every
						year&nbsp;Legalraasta&nbsp;<strong>helps more than 500+ companies</strong>&nbsp;in Trademark
						objection&nbsp;registration.</p>
				</div>
				<div>Our Trademark objection&nbsp;registration package includes:&nbsp;Trademark consultation, application
					preparation, application filing, same day filing &amp; government fees.</div>
				<div>Time required: &lt;3 working days</div>
				<div>Cost: Rs. 2,999 only.</div>
				<div>Please follow the below steps to complete application:</div>
				<div><strong>Step 1: Fill application form - <a href="https://www.legalraasta.com/trademark-objection-application/"
							target="_blank" rel="noopener"
							data-mce-href="https://www.legalraasta.com/trademark-objection-application/">Click here</a></strong>
					<p><strong>Steps 2: Make payment : </strong>Total charge of Rs. 2,999 <strong>.&nbsp;</strong>Choose from the
						following options:</p>
					<ul>
						<li>Netbanking/ Credit card/ Debit card :&nbsp;<strong><a href="https://www.legalraasta.com/payment/"
									target="_blank" rel="noopener" data-mce-href="https://www.legalraasta.com/payment/">Click here
									to make Payment</a></strong></li>
						<li>Bank Transfer: Company: LegalRaasta Technologies Pvt. Ltd., Bank: Kotak Mahindra, Saraswati Vihar,
							Delhi, IFSC: KKBK0004604, A/c no: 9312250417</li>
					</ul>
					<p><strong>Step 3: Submit&nbsp;documents-&nbsp;</strong>Please email us the following&nbsp;documents&nbsp;(you
						can reply to this mail)</p>
					<ul>
						<li>PAN Card copy of transferee</li>
						<li>ID Proof of transferee (Prefer Aadhaar Card)</li>
						<li>Residential Proof of transferee (Telephone or Mobile Bill/ Electricity or Gas Bill)</li>
						<li>Incorporation documents of transferee (in case of a company)</li>
						<li>TM acknowledgement</li>
					</ul>
					<p>You can refer to the following articles for more information on Trademark service.&nbsp;&nbsp;You can also
						view our YouTube guide on <a href="https://www.youtube.com/watch?v=1qnH5NYYtCk" target="_blank"
							rel="noopener" data-mce-href="https://www.youtube.com/watch?v=1qnH5NYYtCk">Trademark
							registration</a>.&nbsp;Happy to help!!</p>
					<p>For complete procedure for Trademark Registration.&nbsp;<a
							href="https://www.legalraasta.com/what-is-the-procedure-to-register-trademark/"
							data-mce-href="https://www.legalraasta.com/what-is-the-procedure-to-register-trademark/">Click Here</a>
					</p>
					<p>For Classes of goods &amp; Services for Trademark. <a
							href="https://www.legalraasta.com/class-of-goods-and-services-for-trademark/"
							data-mce-href="https://www.legalraasta.com/class-of-goods-and-services-for-trademark/">Click Here</a>
					</p>
					<ol>
						<li><a href="https://www.legalraasta.com/trademark-registration-process-in-india/" target="_blank"
								rel="noopener"
								data-mce-href="https://www.legalraasta.com/trademark-registration-process-in-india/">Guide for
								Trademark service</a></li>
						<li><a href="https://www.legalraasta.com/trademark-all-you-need-to-know/" target="_blank" rel="noopener"
								data-mce-href="https://www.legalraasta.com/trademark-all-you-need-to-know/">Trademark service
								registration process</a></li>
						<li><a href="https://www.legalraasta.com/copyright-in-india/" target="_blank" rel="noopener"
								data-mce-href="https://www.legalraasta.com/copyright-in-india/">Copyright Registration
								comparison</a></li>
					</ol>
					<p><strong>About LegalRaasta:<br></strong>LegalRaasta is India leading business services provider. LegalRaasta
						serves more than 2200+ businesses ever year. We offer 30+ services including <strong>GST, ITR, TDS, Company
							formation, Service tax, IEC, Trademark, FSSAI, ROC, ISO, &amp; Loans.</strong></p>
					<p>LegalRaasta also has <strong>tie ups with 40+ Banks &amp; NBFCs</strong> and can help you with
						<strong>business loans</strong>.</p>
					<p>Warm regards,<br>Team, LegalRaasta<br><em><a
								href="https://www.legalraasta.com/private-limited-company-registration/"
								data-mce-href="https://www.legalraasta.com/private-limited-company-registration/">Company
								formation</a> | <a href="https://www.legalraasta.com/trademark-registration/"
								data-mce-href="https://www.legalraasta.com/trademark-registration/">Trademark</a> | <a
								href="https://www.legalraasta.com/fssai-license/"
								data-mce-href="https://www.legalraasta.com/fssai-license/">Licenses</a> | <a
								href="https://www.legalraasta.com/gst-registration/"
								data-mce-href="https://www.legalraasta.com/gst-registration/">GST</a>, <a
								href="https://www.legalraasta.com/income-tax-return/"
								data-mce-href="https://www.legalraasta.com/income-tax-return/">ITR</a> &amp; <a
								href="https://www.legalraasta.com/tds-return/"
								data-mce-href="https://www.legalraasta.com/tds-return/">TDS</a> | <a
								href="https://www.legalraasta.com/loan/"
								data-mce-href="https://www.legalraasta.com/loan/">Loans</a></em><br>M:&nbsp;<a
							href="tel:%2B91%20875%20000%208585" data-mce-href="tel:%2B91%20875%20000%208585">+91 875 000
							8585</a>&nbsp;|&nbsp;<a href="https://www.legalraasta.com/"
							data-mce-href="https://www.legalraasta.com/">www.legalraasta.com</a><br>Head office: B-300, Saraswati
						Vihar, Pitampura, Delhi<br><a href="https://www.facebook.com/legalraasta/"
							data-mce-href="https://www.facebook.com/legalraasta/">Facebook</a>&nbsp;|&nbsp;<a
							href="https://www.linkedin.com/in/LegalRaasta/"
							data-mce-href="https://www.linkedin.com/in/LegalRaasta/">Linkedin</a>&nbsp;|&nbsp;<a
							href="https://twitter.com/LRaasta"
							data-mce-href="https://twitter.com/LRaasta">Twitter</a>&nbsp;|&nbsp;<a
							href="https://www.youtube.com/watch?v=NSIg1XT-KM0&amp;t=1s"
							data-mce-href="https://www.youtube.com/watch?v=NSIg1XT-KM0&amp;t=1s">YouTube</a></p>
				</div>
			</body>
		</html>';
		}else if(isset($_POST['service_code']) && $service_code == '026') {
			
			$Body='<html>
			<body>
				<div>Dear '.$_POST['name'].'<p>We&nbsp;welcome&nbsp;you to LegalRaasta&nbsp;customer&nbsp;family! Every
						year&nbsp;Legalraasta&nbsp;<strong>helps more than 500+ companies</strong>&nbsp;in Trademark
						objection&nbsp;registration.</p>
				</div>
				<div>Our Trademark objection&nbsp;registration package includes:&nbsp;Trademark consultation, application
					preparation, application filing, same day filing &amp; government fees.</div>
				<div>Time required: &lt;3 working days</div>
				<div>Cost:Rs. 7,999 (incl. GST), pay now  https://www.legalraasta.com/payment/.</div>
				<div>Please follow the below steps to complete application:</div>
				<div><strong>Step 1: Fill application form - <a href="https://www.legalraasta.com/trademark-objection-application/"
							target="_blank" rel="noopener"
							data-mce-href="https://www.legalraasta.com/trademark-objection-application/">Click here</a></strong>
					<p><strong>Steps 2: Make payment : </strong>Total charge of Rs. 7,999<strong>.&nbsp;</strong>Choose from the
						following options:</p>
					<ul>
						<li>Netbanking/ Credit card/ Debit card :&nbsp;<strong><a href="https://www.legalraasta.com/payment/"
									target="_blank" rel="noopener" data-mce-href="https://www.legalraasta.com/payment/">Click here
									to make Payment</a></strong></li>
						<li>Bank Transfer: Company: LegalRaasta Technologies Pvt. Ltd., Bank: Kotak Mahindra, Saraswati Vihar,
							Delhi, IFSC: KKBK0004604, A/c no: 9312250417</li>
					</ul>
					<p><strong>Step 3: Submit&nbsp;documents-&nbsp;</strong>Please email us the following&nbsp;documents&nbsp;(you
						can reply to this mail)</p>
					<ul>
						<li>PAN Card copy of transferee</li>
						<li>ID Proof of transferee (Prefer Aadhaar Card)</li>
						<li>Residential Proof of transferee (Telephone or Mobile Bill/ Electricity or Gas Bill)</li>
						<li>Incorporation documents of transferee (in case of a company)</li>
						<li>TM acknowledgement</li>
					</ul>
					<p>You can refer to the following articles for more information on Trademark service.&nbsp;&nbsp;You can also
						view our YouTube guide on <a href="https://www.youtube.com/watch?v=1qnH5NYYtCk" target="_blank"
							rel="noopener" data-mce-href="https://www.youtube.com/watch?v=1qnH5NYYtCk">Trademark
							registration</a>.&nbsp;Happy to help!!</p>
					<p>For complete procedure for Trademark Registration.&nbsp;<a
							href="https://www.legalraasta.com/what-is-the-procedure-to-register-trademark/"
							data-mce-href="https://www.legalraasta.com/what-is-the-procedure-to-register-trademark/">Click Here</a>
					</p>
					<p>For Classes of goods &amp; Services for Trademark. <a
							href="https://www.legalraasta.com/class-of-goods-and-services-for-trademark/"
							data-mce-href="https://www.legalraasta.com/class-of-goods-and-services-for-trademark/">Click Here</a>
					</p>
					<ol>
						<li><a href="https://www.legalraasta.com/trademark-registration-process-in-india/" target="_blank"
								rel="noopener"
								data-mce-href="https://www.legalraasta.com/trademark-registration-process-in-india/">Guide for
								Trademark service</a></li>
						<li><a href="https://www.legalraasta.com/trademark-all-you-need-to-know/" target="_blank" rel="noopener"
								data-mce-href="https://www.legalraasta.com/trademark-all-you-need-to-know/">Trademark service
								registration process</a></li>
						<li><a href="https://www.legalraasta.com/copyright-in-india/" target="_blank" rel="noopener"
								data-mce-href="https://www.legalraasta.com/copyright-in-india/">Copyright Registration
								comparison</a></li>
					</ol>
					<p><strong>About LegalRaasta:<br></strong>LegalRaasta is India leading business services provider. LegalRaasta
						serves more than 2200+ businesses ever year. We offer 30+ services including <strong>GST, ITR, TDS, Company
							formation, Service tax, IEC, Trademark, FSSAI, ROC, ISO, &amp; Loans.</strong></p>
					<p>LegalRaasta also has <strong>tie ups with 40+ Banks &amp; NBFCs</strong> and can help you with
						<strong>business loans</strong>.</p>
					<p>Warm regards,<br>Team, LegalRaasta<br><em><a
								href="https://www.legalraasta.com/private-limited-company-registration/"
								data-mce-href="https://www.legalraasta.com/private-limited-company-registration/">Company
								formation</a> | <a href="https://www.legalraasta.com/trademark-registration/"
								data-mce-href="https://www.legalraasta.com/trademark-registration/">Trademark</a> | <a
								href="https://www.legalraasta.com/fssai-license/"
								data-mce-href="https://www.legalraasta.com/fssai-license/">Licenses</a> | <a
								href="https://www.legalraasta.com/gst-registration/"
								data-mce-href="https://www.legalraasta.com/gst-registration/">GST</a>, <a
								href="https://www.legalraasta.com/income-tax-return/"
								data-mce-href="https://www.legalraasta.com/income-tax-return/">ITR</a> &amp; <a
								href="https://www.legalraasta.com/tds-return/"
								data-mce-href="https://www.legalraasta.com/tds-return/">TDS</a> | <a
								href="https://www.legalraasta.com/loan/"
								data-mce-href="https://www.legalraasta.com/loan/">Loans</a></em><br>M:&nbsp;<a
							href="tel:%2B91%20875%20000%208585" data-mce-href="tel:%2B91%20875%20000%208585">+91 875 000
							8585</a>&nbsp;|&nbsp;<a href="https://www.legalraasta.com/"
							data-mce-href="https://www.legalraasta.com/">www.legalraasta.com</a><br>Head office: B-300, Saraswati
						Vihar, Pitampura, Delhi<br><a href="https://www.facebook.com/legalraasta/"
							data-mce-href="https://www.facebook.com/legalraasta/">Facebook</a>&nbsp;|&nbsp;<a
							href="https://www.linkedin.com/in/LegalRaasta/"
							data-mce-href="https://www.linkedin.com/in/LegalRaasta/">Linkedin</a>&nbsp;|&nbsp;<a
							href="https://twitter.com/LRaasta"
							data-mce-href="https://twitter.com/LRaasta">Twitter</a>&nbsp;|&nbsp;<a
							href="https://www.youtube.com/watch?v=NSIg1XT-KM0&amp;t=1s"
							data-mce-href="https://www.youtube.com/watch?v=NSIg1XT-KM0&amp;t=1s">YouTube</a></p>
				</div>
			</body>
		</html>';
		}else if(isset($_POST['service_code']) && $service_code == '027') {
			$Body='This Mail is need to Change and Rewrite';
		}else if(isset($_POST['service_code']) && $service_code == '028') {
			$Body='<html>
			<body>
				<p><span style="font-weight: 400;" data-mce-style="font-weight: 400;">Dear Sir,</span></p>
				<p><span style="font-weight: 400;" data-mce-style="font-weight: 400;">Greetings from LegalRaasta - India’s top
						financial services platform! Every year LegalRaasta helps more than 500+ companies in NGO Company
						formation.</span></p>
				<p><b>Package includes:</b><span style="font-weight: 400;" data-mce-style="font-weight: 400;"> 2 DIN,&nbsp; 1 DSC, 1
						RUN/Name, Search &amp; Approval, MOA/ AOA Filing, ROC registration Fees (upto 1 lakh capital), PAN &amp;
						TAN, Certificate of Incorporation, Bank Opening Support, Accounting Software, Bookkeeping (1 month
						free)</span></p>
				<p><b>Time required</b><span style="font-weight: 400;" data-mce-style="font-weight: 400;">: &lt;15 working
						days*</span></p>
				<p><b>Cost</b><span style="font-weight: 400;" data-mce-style="font-weight: 400;">: Rs. 12,999 onwards (incl.
						GST)</span></p>
				<p><b>Process</b><span style="font-weight: 400;" data-mce-style="font-weight: 400;">:</span></p>
				<p><span style="font-weight: 400;" data-mce-style="font-weight: 400;">Step 1: Fill application form - </span><a
						href="https://www.legalraasta.com/ngo-application/"
						data-mce-href="https://www.legalraasta.com/ngo-application/"><span style="font-weight: 400;"
							data-mce-style="font-weight: 400;">Click here</span></a><a
						href="https://www.legalraasta.com/private-limited-registration/"
						data-mce-href="https://www.legalraasta.com/private-limited-registration/"><span style="font-weight: 400;"
							data-mce-style="font-weight: 400;">&nbsp;</span></a></p>
				<p><b>Step 2: Make payment: Rs. 12,999 onwards: </b><a href="https://www.legalraasta.com/payment/"
						data-mce-href="https://www.legalraasta.com/payment/"><b>Click here</b></a></p>
				<p><span style="font-weight: 400;" data-mce-style="font-weight: 400;">Step 3: </span><a
						href="https://client.legalraasta.com/d.php" data-mce-href="https://client.legalraasta.com/d.php"><span
							style="font-weight: 400;" data-mce-style="font-weight: 400;">Upload Documents&nbsp;</span></a></p>
				<p><b>Documents Required: </b><span style="font-weight: 400;" data-mce-style="font-weight: 400;">PAN Card of
						Directors (Copy),</span> <span style="font-weight: 400;" data-mce-style="font-weight: 400;">ID Proof of
						Directors (Prefer Aadhaar Card)</span><b>, </b><span style="font-weight: 400;"
						data-mce-style="font-weight: 400;">Passport size photograph of all the Directors</span><b>, </b><span
						style="font-weight: 400;" data-mce-style="font-weight: 400;">Residential Proof of registered office
						(Telephone or Mobile Bill/ Electricity or Gas Bill)</span><b>, </b><span style="font-weight: 400;"
						data-mce-style="font-weight: 400;">Landlord NOC (we will provide the format)</span><b>, </b><span
						style="font-weight: 400;" data-mce-style="font-weight: 400;">Bank statement/Utility bill of Director</span>
				</p>
				<p><span style="font-weight: 400;" data-mce-style="font-weight: 400;">You can also view our Youtube guide on</span>
					<a href="https://youtu.be/LYMwZ8VEfJk" data-mce-href="https://youtu.be/LYMwZ8VEfJk"><b>Section8 | NGO
							Incorporation</b></a><b> | </b><a
						href="https://drive.google.com/file/d/1zza-1HfTOdrCPyZQtS8WTD-8-kx0-hjc/view?usp=sharing"
						data-mce-href="https://drive.google.com/file/d/1zza-1HfTOdrCPyZQtS8WTD-8-kx0-hjc/view?usp=sharing"><b>Section8
							| NGO Company Guidebook</b></a></p>
				<p><b>LegalRaasta in News: </b><a
						href="https://economictimes.indiatimes.com/small-biz/startups/legalraasta-raises-rs-6-5-crore-in-angel-round/articleshow/51813536.cms"
						data-mce-href="https://economictimes.indiatimes.com/small-biz/startups/legalraasta-raises-rs-6-5-crore-in-angel-round/articleshow/51813536.cms"><span
							style="font-weight: 400;" data-mce-style="font-weight: 400;">Economic times</span></a><span
						style="font-weight: 400;" data-mce-style="font-weight: 400;"> | </span><a
						href="https://economictimes.indiatimes.com/small-biz/money/legal-business-consultancy-firm-legalraasta-raises-funds-to-provide-gst-c0mpliance-software-to-more-smes/articleshow/58638228.cms"
						data-mce-href="https://economictimes.indiatimes.com/small-biz/money/legal-business-consultancy-firm-legalraasta-raises-funds-to-provide-gst-c0mpliance-software-to-more-smes/articleshow/58638228.cms"><span
							style="font-weight: 400;" data-mce-style="font-weight: 400;">IndiaTimes</span></a><span
						style="font-weight: 400;" data-mce-style="font-weight: 400;"> | </span><a
						href="https://www.vccircle.com/exclusive-legal-raasta-raises-5-mn-in-series-a-round/"
						data-mce-href="https://www.vccircle.com/exclusive-legal-raasta-raises-5-mn-in-series-a-round/"><span
							style="font-weight: 400;" data-mce-style="font-weight: 400;">VCCircle</span></a><span
						style="font-weight: 400;" data-mce-style="font-weight: 400;"> | </span><a
						href="http://bwdisrupt.businessworld.in/article/Delhi-Based-Startup-LegalRaasta-Raises-5M-in-Series-A-Round-from-Impanix-Capital/12-05-2017-118035/"
						data-mce-href="http://bwdisrupt.businessworld.in/article/Delhi-Based-Startup-LegalRaasta-Raises-5M-in-Series-A-Round-from-Impanix-Capital/12-05-2017-118035/"><span
							style="font-weight: 400;" data-mce-style="font-weight: 400;">BusinessWorld</span></a><span
						style="font-weight: 400;" data-mce-style="font-weight: 400;"> | </span><a
						href="https://www.youtube.com/watch?v=NSIg1XT-KM0&amp;t=1s"
						data-mce-href="https://www.youtube.com/watch?v=NSIg1XT-KM0&amp;t=1s"><span style="font-weight: 400;"
							data-mce-style="font-weight: 400;">YouTube</span></a></p>
				<p><span style="font-weight: 400;" data-mce-style="font-weight: 400;">Warm regards,</span></p>
				<p><span style="font-weight: 400;" data-mce-style="font-weight: 400;">Team, LegalRaasta</span></p>
				<p><a href="https://www.legalraasta.com/private-limited-company-registration/"
						data-mce-href="https://www.legalraasta.com/private-limited-company-registration/"><span
							style="font-weight: 400;" data-mce-style="font-weight: 400;">Company formation</span></a><span
						style="font-weight: 400;" data-mce-style="font-weight: 400;"> | </span><a
						href="https://www.legalraasta.com/trademark-registration/"
						data-mce-href="https://www.legalraasta.com/trademark-registration/"><span style="font-weight: 400;"
							data-mce-style="font-weight: 400;">Trademark</span></a><span style="font-weight: 400;"
						data-mce-style="font-weight: 400;"> | </span><a href="https://www.legalraasta.com/fssai-license/"
						data-mce-href="https://www.legalraasta.com/fssai-license/"><span style="font-weight: 400;"
							data-mce-style="font-weight: 400;">Licenses</span></a><span style="font-weight: 400;"
						data-mce-style="font-weight: 400;"> | </span><a href="https://www.legalraasta.com/gst-registration/"
						data-mce-href="https://www.legalraasta.com/gst-registration/"><span style="font-weight: 400;"
							data-mce-style="font-weight: 400;">GST</span></a><span style="font-weight: 400;"
						data-mce-style="font-weight: 400;"> | </span><a href="https://www.legalraasta.com/accounting-bookkeeping/"
						data-mce-href="https://www.legalraasta.com/accounting-bookkeeping/"><span style="font-weight: 400;"
							data-mce-style="font-weight: 400;">Accounting</span></a></p>
				<p><span style="font-weight: 400;" data-mce-style="font-weight: 400;">M: </span><span style="font-weight: 400;"
						data-mce-style="font-weight: 400;">875 000 8585</span><span style="font-weight: 400;"
						data-mce-style="font-weight: 400;"> | </span><a href="https://www.legalraasta.com/"
						data-mce-href="https://www.legalraasta.com/"><span style="font-weight: 400;"
							data-mce-style="font-weight: 400;">legalraasta.com</span></a></p>
				<p><span style="font-weight: 400;" data-mce-style="font-weight: 400;">* </span><a
						href="https://www.legalraasta.com/terms-and-conditions/"
						data-mce-href="https://www.legalraasta.com/terms-and-conditions/"><span style="font-weight: 400;"
							data-mce-style="font-weight: 400;">Terms &amp; Conditions</span></a></p>
			</body>
		</html>';
		}else if(isset($_POST['service_code']) && $service_code == '029') {
			$Body='<html>
			<body>
				<div>Dear '.$_POST['name'].'<p>We&nbsp;welcome&nbsp;you to LegalRaasta&nbsp;customer&nbsp;family! Every
						year&nbsp;Legalraasta&nbsp;<strong>helps more than 500+ companies</strong>&nbsp;in Indian
						subsidiary&nbsp;registration.</p>
				</div>
				<div>Our Indian subsidiary registration package includes: Drafting documents, application filing &amp; processing
					and govt. fees.</div>
				<div>Time required: &lt;30 working days</div>
				<div>Cost: Rs. 45,999 onwards.</div>
				<div>Please follow the below steps to complete application:</div>
				<div><strong>Step 1: Fill application form - <a
							href="https://www.legalraasta.com/indian-subsidiary-application-form/" target="_blank" rel="noopener"
							data-mce-href="https://www.legalraasta.com/indian-subsidiary-application-form/">Click here</a></strong>
					<p><strong>Steps 2: Make payment : </strong>Total charge of Rs. 45,999<strong>.&nbsp;</strong>Choose from the
						following options:</p>
					<ul>
						<li>Netbanking/ Credit card/ Debit card :&nbsp;<strong><a href="https://www.legalraasta.com/payment/"
									target="_blank" rel="noopener" data-mce-href="https://www.legalraasta.com/payment/">Click here
									to make Payment</a></strong></li>
						<li>Bank Transfer: Company: LegalRaasta Technologies Pvt. Ltd., Bank: Kotak Mahindra, Saraswati Vihar,
							Delhi, IFSC: KKBK0004604, A/c no: 9312250417</li>
					</ul>
					<p><strong>Step 3: Submit&nbsp;documents-&nbsp;</strong>Please email us the following&nbsp;documents&nbsp;(you
						can reply to this mail)</p>
					<ul>
						<li>Copy of PAN Card of Directors</li>
						<li>Copy of ID Proof of Directors (Prefer Aadhaar Card)</li>
						<li>Passport size photograph of all the Directors</li>
						<li>E-mail id &amp; mobile no. of all&nbsp;the Directors</li>
						<li>Residential Proof of registered office (Telephone or Mobile Bill/ Electricity or Gas Bill)</li>
						<li>MOA &amp; AOA</li>
						<li>Declaration</li>
						<li>Landlord NOC (if rented property)</li>
					</ul>
					<p>You can refer to the following articles for more information on Indian subsidiary
						registration&nbsp;service.&nbsp;&nbsp;You can also view our Youtube guide on <a
							href="https://www.youtube.com/watch?v=pZsMJubAUqA" target="_blank" rel="noopener"
							data-mce-href="https://www.youtube.com/watch?v=pZsMJubAUqA">Legalraasta</a>.&nbsp;Happy to help!!</p>
					<ol>
						<li><a href="https://www.legalraasta.com/indian-subsidiary-registration/" target="_blank" rel="noopener"
								data-mce-href="https://www.legalraasta.com/indian-subsidiary-registration/">Procedure for Indian
								Subsidiary&nbsp;Registration</a>.</li>
						<li><a href="https://www.legalraasta.com/registration-of-a-private-limited-company/"
								data-mce-href="https://www.legalraasta.com/registration-of-a-private-limited-company/">Guide Private
								limited Company for service</a></li>
						<li><a href="https://www.legalraasta.com/comparison-between-llp-an-private-limited-company/"
								data-mce-href="https://www.legalraasta.com/comparison-between-llp-an-private-limited-company/">LLP
								comparison</a></li>
					</ol>
					<p><strong>About LegalRaasta:<br></strong>LegalRaasta is India leading business services provider. LegalRaasta
						serves more than 2200+ businesses ever year. We offer 30+ services including <strong>GST, ITR, TDS, Company
							formation, Service tax, IEC, Trademark, FSSAI, ROC, ISO, &amp; Loans.</strong></p>
					<p>LegalRaasta also has <strong>tie ups with 40+ Banks &amp; NBFCs</strong> and can help you with
						<strong>business loans</strong>.</p>
					<p>Warm regards,<br>Team, LegalRaasta<br><em><a
								href="https://www.legalraasta.com/private-limited-company-registration/"
								data-mce-href="https://www.legalraasta.com/private-limited-company-registration/">Company
								formation</a> | <a href="https://www.legalraasta.com/trademark-registration/"
								data-mce-href="https://www.legalraasta.com/trademark-registration/">Trademark</a> | <a
								href="https://www.legalraasta.com/fssai-license/"
								data-mce-href="https://www.legalraasta.com/fssai-license/">Licenses</a> | <a
								href="https://www.legalraasta.com/gst-registration/"
								data-mce-href="https://www.legalraasta.com/gst-registration/">GST</a>, <a
								href="https://www.legalraasta.com/income-tax-return/"
								data-mce-href="https://www.legalraasta.com/income-tax-return/">ITR</a> &amp; <a
								href="https://www.legalraasta.com/tds-return/"
								data-mce-href="https://www.legalraasta.com/tds-return/">TDS</a> | <a
								href="https://www.legalraasta.com/loan/"
								data-mce-href="https://www.legalraasta.com/loan/">Loans</a></em><br>M:&nbsp;<a
							href="tel:%2B91%20875%20000%208585" data-mce-href="tel:%2B91%20875%20000%208585">+91 875 000
							8585</a>&nbsp;|&nbsp;<a href="https://www.legalraasta.com/"
							data-mce-href="https://www.legalraasta.com/">www.legalraasta.com</a><br>Head office: B-300, Saraswati
						Vihar, Pitampura, Delhi<br><a href="https://www.facebook.com/legalraasta/"
							data-mce-href="https://www.facebook.com/legalraasta/">Facebook</a>&nbsp;|&nbsp;<a
							href="https://www.linkedin.com/in/LegalRaasta/"
							data-mce-href="https://www.linkedin.com/in/LegalRaasta/">Linkedin</a>&nbsp;|&nbsp;<a
							href="https://twitter.com/LRaasta"
							data-mce-href="https://twitter.com/LRaasta">Twitter</a>&nbsp;|&nbsp;<a
							href="https://www.youtube.com/watch?v=NSIg1XT-KM0&amp;t=1s"
							data-mce-href="https://www.youtube.com/watch?v=NSIg1XT-KM0&amp;t=1s">YouTube</a></p>
				</div>
			</body>
		</html>';
		}else if(isset($_POST['service_code']) && $service_code == '030') {
			$Body='<html>
			<body>
				<p>Dear '.$_POST['name'].'</p>
				<p>Greetings from LegalRaasta - India’s top financial services platform! Every year LegalRaasta helps more than 500+
					companies in Company formation.</p>
				<p><b>Package includes:</b> 2 DIN (Director Identification no)&nbsp;, 1 DSC, 1 RUN/Name, Search &amp; Approval, MOA/
					AOA Filing, ROC registration Fees (upto 1 lakh capital), PAN &amp; TAN, Certificate of Incorporation, Bank
					Opening Support, Accounting Software, Bookkeeping (1 month free)</p>
				<p><b>Time required</b>: &lt;15 working days*</p>
				<p><b>Cost</b>: Rs. 12,999 onwards (incl. GST)</p>
				<p><b>Process</b>:<br>Step 1: Fill application form -&nbsp;<a
						href="http://www.legalraasta.com/section-8-company-application-form/"
						data-mce-href="http://www.legalraasta.com/section-8-company-application-form/">Click here</a><a
						href="https://www.legalraasta.com/private-limited-registration/"
						data-mce-href="https://www.legalraasta.com/private-limited-registration/">&nbsp;</a><br><b>Step 2: Make
						payment: Rs. 12,999 onwards:&nbsp;</b><a href="https://www.legalraasta.com/payment/"
						data-mce-href="https://www.legalraasta.com/payment/"><b>Click here </b></a><br>Step 3: <a
						href="https://client.legalraasta.com/d.php" data-mce-href="https://client.legalraasta.com/d.php">Upload
						Documents&nbsp;</a></p>
				<p><b>Documents Required: </b>PAN Card of Directors (Copy),<b> </b>ID Proof of Directors (Prefer Aadhaar Card)<b>,
					</b>Passport size photograph of all the Directors<b>, </b>Residential Proof of registered office (Telephone or
					Mobile Bill/ Electricity or Gas Bill)<b>, </b>Landlord NOC (we will provide the format)<b>, </b>Bank
					statement/Utility bill of Director</p>
				<p>You can also view our Youtube guide on<b>&nbsp;<a href="https://youtu.be/LYMwZ8VEfJk"
							data-mce-href="https://youtu.be/LYMwZ8VEfJk">Section 8 Incorporation</a> | <a
							href="https://drive.google.com/file/d/1zza-1HfTOdrCPyZQtS8WTD-8-kx0-hjc/view?usp=sharing"
							data-mce-href="https://drive.google.com/file/d/1zza-1HfTOdrCPyZQtS8WTD-8-kx0-hjc/view?usp=sharing">Section
							8 Company Guidebook</a> </b></p>
				<p><b>LegalRaasta in News: </b><a
						href="https://economictimes.indiatimes.com/small-biz/startups/legalraasta-raises-rs-6-5-crore-in-angel-round/articleshow/51813536.cms"
						data-mce-href="https://economictimes.indiatimes.com/small-biz/startups/legalraasta-raises-rs-6-5-crore-in-angel-round/articleshow/51813536.cms">Economic
						times</a> | <a
						href="https://economictimes.indiatimes.com/small-biz/money/legal-business-consultancy-firm-legalraasta-raises-funds-to-provide-gst-c0mpliance-software-to-more-smes/articleshow/58638228.cms"
						data-mce-href="https://economictimes.indiatimes.com/small-biz/money/legal-business-consultancy-firm-legalraasta-raises-funds-to-provide-gst-c0mpliance-software-to-more-smes/articleshow/58638228.cms">IndiaTimes</a>
					| <a href="https://www.vccircle.com/exclusive-legal-raasta-raises-5-mn-in-series-a-round/"
						data-mce-href="https://www.vccircle.com/exclusive-legal-raasta-raises-5-mn-in-series-a-round/">VCCircle</a>
					| <a href="http://bwdisrupt.businessworld.in/article/Delhi-Based-Startup-LegalRaasta-Raises-5M-in-Series-A-Round-from-Impanix-Capital/12-05-2017-118035/"
						data-mce-href="http://bwdisrupt.businessworld.in/article/Delhi-Based-Startup-LegalRaasta-Raises-5M-in-Series-A-Round-from-Impanix-Capital/12-05-2017-118035/">BusinessWorld</a>
					| <a href="https://www.youtube.com/watch?v=NSIg1XT-KM0&amp;t=1s"
						data-mce-href="https://www.youtube.com/watch?v=NSIg1XT-KM0&amp;t=1s">YouTube</a></p>
				<p><b><br></b>Warm regards,<br>Team, LegalRaasta<br><a
						href="https://www.legalraasta.com/private-limited-company-registration/"
						data-mce-href="https://www.legalraasta.com/private-limited-company-registration/">Company
						formation</a>&nbsp;|&nbsp;<a href="https://www.legalraasta.com/trademark-registration/"
						data-mce-href="https://www.legalraasta.com/trademark-registration/">Trademark</a>&nbsp;|&nbsp;<a
						href="https://www.legalraasta.com/fssai-license/"
						data-mce-href="https://www.legalraasta.com/fssai-license/">Licenses</a>&nbsp;|&nbsp;<a
						href="https://www.legalraasta.com/gst-registration/"
						data-mce-href="https://www.legalraasta.com/gst-registration/">GST</a> | <a
						href="https://www.legalraasta.com/accounting-bookkeeping/"
						data-mce-href="https://www.legalraasta.com/accounting-bookkeeping/">Accounting</a><br>M:&nbsp;<a
						href="tel:%2B91%20875%20000%208585" data-mce-href="tel:%2B91%20875%20000%208585">875 000
						8585</a>&nbsp;|&nbsp;<a href="https://www.legalraasta.com/"
						data-mce-href="https://www.legalraasta.com/">legalraasta.com</a><br>* <a
						href="https://www.legalraasta.com/terms-and-conditions/"
						data-mce-href="https://www.legalraasta.com/terms-and-conditions/">Terms &amp; Conditions</a></p>
			</body>
		</html>';
		}else if(isset($_POST['service_code']) && $service_code == '031') {
			$Body='<html>
			<body>
				<p>Dear '.$_POST['name'].',</p>
				<p>Greetings from LegalRaasta - India’s top financial services platform! Every year LegalRaasta helps more than 500+
					companies in Company formation.</p>
				<p><b>Package includes:</b> 3 DIN (Director Identification no)&nbsp;, 7 DSC, 1 RUN/Name, Search &amp; Approval, MOA/
					AOA Filing, ROC registration Fees (upto 1 lakh capital), PAN &amp; TAN, Certificate of Incorporation, Bank
					Opening Support, Accounting Software, Bookkeeping (1 month free)</p>
				<p><b>Time required</b>: &lt;15 working days*</p>
				<p><b>Cost</b>:Rs. 24,999  onwards (incl. GST)</p>
				<p><b>Process:</b><br>Step 1: Fill application form -&nbsp;<a
						href="http://www.legalraasta.com/nidhi-co-application-form/"
						data-mce-href="http://www.legalraasta.com/nidhi-co-application-form/">Click here</a><a
						href="https://www.legalraasta.com/private-limited-registration/"
						data-mce-href="https://www.legalraasta.com/private-limited-registration/">&nbsp;</a><br><b>Step 2: Make
						payment:Rs. 24,999  onwards:&nbsp;</b><a href="https://www.legalraasta.com/payment/"
						data-mce-href="https://www.legalraasta.com/payment/"><b>Click here </b></a><br>Step 3: <a
						href="https://client.legalraasta.com/d.php" data-mce-href="https://client.legalraasta.com/d.php">Upload
						Documents</a>&nbsp;</p>
				<p><b>Documents Required: </b>PAN Card of Directors (Copy),<b> </b>ID Proof of Directors (Prefer Aadhaar Card)<b>,
					</b>Passport size photograph of all the Directors<b>, </b>Residential Proof of registered office (Telephone or
					Mobile Bill/ Electricity or Gas Bill)<b>, </b>Landlord NOC (we will provide the format)<b>, </b>Bank
					statement/Utility bill of Director</p>
				<p>You can also view our Youtube guide on<b>&nbsp;<a
							href="https://www.youtube.com/watch?v=khADwWFTpo0&amp;feature=youtu.be"
							data-mce-href="https://www.youtube.com/watch?v=khADwWFTpo0&amp;feature=youtu.be">Nidhi Incorporation</a>
						| <a href="https://drive.google.com/file/d/16N8SLbX_tn3J1XXznimGpS_fm3fkkxfT/view?usp=sharing"
							data-mce-href="https://drive.google.com/file/d/16N8SLbX_tn3J1XXznimGpS_fm3fkkxfT/view?usp=sharing">Nidhi
							company Guidebook</a><br></b><b><br>LegalRaasta in News: </b><a
						href="https://economictimes.indiatimes.com/small-biz/startups/legalraasta-raises-rs-6-5-crore-in-angel-round/articleshow/51813536.cms"
						data-mce-href="https://economictimes.indiatimes.com/small-biz/startups/legalraasta-raises-rs-6-5-crore-in-angel-round/articleshow/51813536.cms">Economic
						times</a> | <a
						href="https://economictimes.indiatimes.com/small-biz/money/legal-business-consultancy-firm-legalraasta-raises-funds-to-provide-gst-c0mpliance-software-to-more-smes/articleshow/58638228.cms"
						data-mce-href="https://economictimes.indiatimes.com/small-biz/money/legal-business-consultancy-firm-legalraasta-raises-funds-to-provide-gst-c0mpliance-software-to-more-smes/articleshow/58638228.cms">IndiaTimes</a>
					| <a href="https://www.vccircle.com/exclusive-legal-raasta-raises-5-mn-in-series-a-round/"
						data-mce-href="https://www.vccircle.com/exclusive-legal-raasta-raises-5-mn-in-series-a-round/">VCCircle</a>
					| <a href="http://bwdisrupt.businessworld.in/article/Delhi-Based-Startup-LegalRaasta-Raises-5M-in-Series-A-Round-from-Impanix-Capital/12-05-2017-118035/"
						data-mce-href="http://bwdisrupt.businessworld.in/article/Delhi-Based-Startup-LegalRaasta-Raises-5M-in-Series-A-Round-from-Impanix-Capital/12-05-2017-118035/">BusinessWorld</a>
					| <a href="https://www.youtube.com/watch?v=NSIg1XT-KM0&amp;t=1s"
						data-mce-href="https://www.youtube.com/watch?v=NSIg1XT-KM0&amp;t=1s">YouTube</a></p>
				<p><b><br></b>Warm regards,<br>Team, LegalRaasta<br><a
						href="https://www.legalraasta.com/private-limited-company-registration/"
						data-mce-href="https://www.legalraasta.com/private-limited-company-registration/">Company
						formation</a>&nbsp;|&nbsp;<a href="https://www.legalraasta.com/trademark-registration/"
						data-mce-href="https://www.legalraasta.com/trademark-registration/">Trademark</a>&nbsp;|&nbsp;<a
						href="https://www.legalraasta.com/fssai-license/"
						data-mce-href="https://www.legalraasta.com/fssai-license/">Licenses</a>&nbsp;|&nbsp;<a
						href="https://www.legalraasta.com/gst-registration/"
						data-mce-href="https://www.legalraasta.com/gst-registration/">GST</a> | <a
						href="https://www.legalraasta.com/accounting-bookkeeping/"
						data-mce-href="https://www.legalraasta.com/accounting-bookkeeping/">Accounting</a><br>M:&nbsp;<a
						href="tel:%2B91%20875%20000%208585" data-mce-href="tel:%2B91%20875%20000%208585">875 000
						8585</a>&nbsp;|&nbsp;<a href="https://www.legalraasta.com/"
						data-mce-href="https://www.legalraasta.com/">legalraasta.com</a><br>*<a
						href="https://www.legalraasta.com/terms-and-conditions/"
						data-mce-href="https://www.legalraasta.com/terms-and-conditions/">Terms &amp; Conditions</a>&nbsp;&nbsp;</p>
			</body>
		</html>';
		}else if(isset($_POST['service_code']) && $service_code == '032') {
			$Body='<html>
			<body>
				<p>Dear '.$_POST['name'].'</p>
				<p>Greetings from LegalRaasta - India’s top financial services platform! Every year LegalRaasta helps more than 500+
					companies in Trade License.</p>
				<p><b>Package includes</b>: Drafting documents, application filing &amp; processing</p>
				<p><b>Time required</b>: &lt;10 working days*</p>
				<p>Cost (incl. GST<b>)</b>:Rs. 4,799 &nbsp;+ govt. fees</p>
				<p><b>Process:</b><br>Step 1: Fill application form -&nbsp;<a
						href="https://www.legalraasta.com/trade-license-application-form"
						data-mce-href="https://www.legalraasta.com/trade-license-application-form">Click here</a><a
						href="https://www.legalraasta.com/private-limited-registration/"
						data-mce-href="https://www.legalraasta.com/private-limited-registration/">&nbsp;</a><br><b>Step 2: Make
						payment:Rs. 4,799  onwards:&nbsp;</b><a href="https://www.legalraasta.com/payment/"
						data-mce-href="https://www.legalraasta.com/payment/"><b>Click here </b></a><br>Step 3: <a
						href="https://client.legalraasta.com/d.php" data-mce-href="https://client.legalraasta.com/d.php">Upload
						Documents&nbsp;</a></p>
				<p><b>Documents Required: </b>Pan Card of owners, Adhaar card of owners, Photograph of owners, Registration proof
					(Partnership Deed or COI in case of Company), Office address proof (electricity/ phone bill), Site Plan, Site
					Photographs</p>
				<p><b>LegalRaasta in News: </b><a
						href="https://economictimes.indiatimes.com/small-biz/startups/legalraasta-raises-rs-6-5-crore-in-angel-round/articleshow/51813536.cms"
						data-mce-href="https://economictimes.indiatimes.com/small-biz/startups/legalraasta-raises-rs-6-5-crore-in-angel-round/articleshow/51813536.cms">Economic
						times</a> | <a
						href="https://economictimes.indiatimes.com/small-biz/money/legal-business-consultancy-firm-legalraasta-raises-funds-to-provide-gst-c0mpliance-software-to-more-smes/articleshow/58638228.cms"
						data-mce-href="https://economictimes.indiatimes.com/small-biz/money/legal-business-consultancy-firm-legalraasta-raises-funds-to-provide-gst-c0mpliance-software-to-more-smes/articleshow/58638228.cms">IndiaTimes</a>
					| <a href="https://www.vccircle.com/exclusive-legal-raasta-raises-5-mn-in-series-a-round/"
						data-mce-href="https://www.vccircle.com/exclusive-legal-raasta-raises-5-mn-in-series-a-round/">VCCircle</a>
					| <a href="http://bwdisrupt.businessworld.in/article/Delhi-Based-Startup-LegalRaasta-Raises-5M-in-Series-A-Round-from-Impanix-Capital/12-05-2017-118035/"
						data-mce-href="http://bwdisrupt.businessworld.in/article/Delhi-Based-Startup-LegalRaasta-Raises-5M-in-Series-A-Round-from-Impanix-Capital/12-05-2017-118035/">BusinessWorld</a>
					| <a href="https://www.youtube.com/watch?v=NSIg1XT-KM0&amp;t=1s"
						data-mce-href="https://www.youtube.com/watch?v=NSIg1XT-KM0&amp;t=1s">YouTube</a></p>
				<p><b><br></b>Warm regards,<br>Team, LegalRaasta<br><a
						href="https://www.legalraasta.com/private-limited-company-registration/"
						data-mce-href="https://www.legalraasta.com/private-limited-company-registration/"><i>Company
							formation</i></a><em>&nbsp;|&nbsp;</em><a href="https://www.legalraasta.com/trademark-registration/"
						data-mce-href="https://www.legalraasta.com/trademark-registration/"><i>Trademark</i></a><em>&nbsp;|&nbsp;</em><a
						href="https://www.legalraasta.com/fssai-license/"
						data-mce-href="https://www.legalraasta.com/fssai-license/"><i>Licenses</i></a><em>&nbsp;|&nbsp;</em><a
						href="https://www.legalraasta.com/gst-registration/"
						data-mce-href="https://www.legalraasta.com/gst-registration/"><i>GST</i></a><em> | </em><a
						href="https://www.legalraasta.com/accounting-bookkeeping/"
						data-mce-href="https://www.legalraasta.com/accounting-bookkeeping/"><i>Accounting</i></a><em>&nbsp;&nbsp;</em><i><br></i>M:&nbsp;<a
						href="tel:%2B91%20875%20000%208585" data-mce-href="tel:%2B91%20875%20000%208585">875 000
						8585</a>&nbsp;|&nbsp;<a href="https://www.legalraasta.com/"
						data-mce-href="https://www.legalraasta.com/">legalraasta.com</a><br>* <a
						href="https://www.legalraasta.com/terms-and-conditions/"
						data-mce-href="https://www.legalraasta.com/terms-and-conditions/">Terms &amp; Conditions</a></p>
			</body>
		</html>';
		}else if(isset($_POST['service_code']) && $service_code == '033') {
			$Body='<html>
			<body>
				<p>Dear '.$_POST['name'].'</p>
				<p>Greetings from LegalRaasta - India’s top financial services platform! Every year LegalRaasta helps more than 500+
					companies in ESI Registration.</p>
				<p><b>Time required</b>: &lt;7 working days*<br><b>Cost</b>: Rs. 4,799 onwards (incl. GST)</p>
				<p>Process:<br>Step 1: Fill application form -&nbsp;<u><a
							href="https://www.legalraasta.com/employee-state-insurance-corporation-application-form/"
							data-mce-href="https://www.legalraasta.com/employee-state-insurance-corporation-application-form/">Click
							here</a><a href="https://www.legalraasta.com/private-limited-registration/"
							data-mce-href="https://www.legalraasta.com/private-limited-registration/">&nbsp;</a></u><br><b>Step 2:
						Make payment: Rs. 4,799 onwards:&nbsp;</b><a href="https://www.legalraasta.com/payment/"
						data-mce-href="https://www.legalraasta.com/payment/"><u><b>Click here </b></u></a><br>Step 3: <a
						href="https://client.legalraasta.com/d.php" data-mce-href="https://client.legalraasta.com/d.php">Upload
						Documents</a></p>
				<p><b>Documents Required: </b>PAN Card firm/Company, PAN Card of employer, Certificate of registration, Cancelled
					cheque, Details of employees, Premises address proof, Factory/Shop est./GST certificate (if any)<b> </b></p>
				<p><b>LegalRaasta in News: </b><a
						href="https://economictimes.indiatimes.com/small-biz/startups/legalraasta-raises-rs-6-5-crore-in-angel-round/articleshow/51813536.cms"
						data-mce-href="https://economictimes.indiatimes.com/small-biz/startups/legalraasta-raises-rs-6-5-crore-in-angel-round/articleshow/51813536.cms">Economic
						times</a> | <a
						href="https://economictimes.indiatimes.com/small-biz/money/legal-business-consultancy-firm-legalraasta-raises-funds-to-provide-gst-c0mpliance-software-to-more-smes/articleshow/58638228.cms"
						data-mce-href="https://economictimes.indiatimes.com/small-biz/money/legal-business-consultancy-firm-legalraasta-raises-funds-to-provide-gst-c0mpliance-software-to-more-smes/articleshow/58638228.cms">IndiaTimes</a>
					| <a href="https://www.vccircle.com/exclusive-legal-raasta-raises-5-mn-in-series-a-round/"
						data-mce-href="https://www.vccircle.com/exclusive-legal-raasta-raises-5-mn-in-series-a-round/">VCCircle</a>
					| <a href="http://bwdisrupt.businessworld.in/article/Delhi-Based-Startup-LegalRaasta-Raises-5M-in-Series-A-Round-from-Impanix-Capital/12-05-2017-118035/"
						data-mce-href="http://bwdisrupt.businessworld.in/article/Delhi-Based-Startup-LegalRaasta-Raises-5M-in-Series-A-Round-from-Impanix-Capital/12-05-2017-118035/">BusinessWorld</a>
					| <a href="https://www.youtube.com/watch?v=NSIg1XT-KM0&amp;t=1s"
						data-mce-href="https://www.youtube.com/watch?v=NSIg1XT-KM0&amp;t=1s">YouTube</a></p>
				<p><b><br></b>Warm regards,<br>Team, LegalRaasta<br><a
						href="https://www.legalraasta.com/private-limited-company-registration/"
						data-mce-href="https://www.legalraasta.com/private-limited-company-registration/"><i>Company
							formation</i></a><em>&nbsp;|&nbsp;</em><a href="https://www.legalraasta.com/trademark-registration/"
						data-mce-href="https://www.legalraasta.com/trademark-registration/"><i>Trademark</i></a><em>&nbsp;|&nbsp;</em><a
						href="https://www.legalraasta.com/fssai-license/"
						data-mce-href="https://www.legalraasta.com/fssai-license/"><i>Licenses</i></a><em>&nbsp;|&nbsp;</em><a
						href="https://www.legalraasta.com/gst-registration/"
						data-mce-href="https://www.legalraasta.com/gst-registration/"><i>GST</i></a><em> | </em><a
						href="https://www.legalraasta.com/accounting-bookkeeping/"
						data-mce-href="https://www.legalraasta.com/accounting-bookkeeping/"><i>Accounting</i></a><em>&nbsp;&nbsp;</em><i><br></i>M:&nbsp;<a
						href="tel:%2B91%20875%20000%208585" data-mce-href="tel:%2B91%20875%20000%208585">875 000
						8585</a>&nbsp;|&nbsp;<a href="https://www.legalraasta.com/"
						data-mce-href="https://www.legalraasta.com/">legalraasta.com</a><br>* <a
						href="https://www.legalraasta.com/terms-and-conditions/"
						data-mce-href="https://www.legalraasta.com/terms-and-conditions/">Terms &amp; Conditions</a></p>
			</body>
		</html>';
		}else if(isset($_POST['service_code']) && $service_code == '034') {
			$Body='<html>
			<body>
				<div>Dear '.$_POST['name'].'<p>We&nbsp;welcome&nbsp;you to LegalRaasta&nbsp;customer&nbsp;family! Every
						year&nbsp;Legalraasta&nbsp;<strong>helps more than 500+ companies</strong>&nbsp;in
						Partnership&nbsp;registration.</p>
				</div>
				<div>Our Partnership&nbsp;registration package includes:&nbsp;Partnership deed drafting,&nbsp;Partnership deed
					Attestation, name search &amp; approval,&nbsp;TAN &amp;&nbsp;Partnership Pan Card.</div>
				<div>Time required: &lt;5 working days</div>
				<div>Cost: Rs. 2,199 Onwards (excluding stamp duty charges).</div>
				<div>Please follow the below steps to complete application:</div>
				<div><strong>Step 1: Fill application form - <a href="https://www.legalraasta.com/partnership-firm-application/"
							target="_blank" rel="noopener"
							data-mce-href="https://www.legalraasta.com/partnership-firm-application/">Click here</a></strong>
					<p><strong>Steps 2: Make payment : </strong>Total charge of Rs. 2,199 onwards<strong>.&nbsp;</strong>Choose from
						the following options:</p>
					<ul>
						<li>Netbanking/ Credit card/ Debit card :&nbsp;<strong><a href="https://www.legalraasta.com/payment/"
									target="_blank" rel="noopener" data-mce-href="https://www.legalraasta.com/payment/">Click here
									to make Payment</a></strong></li>
						<li>Bank Transfer: Company: LegalRaasta Technologies Pvt. Ltd., Bank: Kotak Mahindra, Saraswati Vihar,
							Delhi, IFSC: KKBK0004604, A/c no: 9312250417</li>
					</ul>
					<p><strong>Step 3: Submit&nbsp;documents-&nbsp;</strong>Please email us the following&nbsp;documents&nbsp;(you
						can reply to this mail)</p>
					<ul>
						<li>PAN Card copy of the Partners</li>
						<li>ID Proof of the Partners (Prefer Aadhaar Card)</li>
						<li>Residential Proof of Registered office (Telephone or Mobile Bill/ Electricity or Gas Bill)</li>
					</ul>
					<p>You can refer to the following articles for more information on Partnership
						registration&nbsp;service.&nbsp;&nbsp;You can also view our Youtube guide on&nbsp;<a
							href="https://www.youtube.com/watch?v=RlrvbW8d5rg" target="_blank" rel="noopener"
							data-mce-href="https://www.youtube.com/watch?v=RlrvbW8d5rg">Partnership registration</a>.&nbsp;Happy to
						help!!</p>
					<ol>
						<li><a href="https://www.legalraasta.com/defination-partnership-firm/"
								data-mce-href="https://www.legalraasta.com/defination-partnership-firm/">Partnership service
								registration process</a></li>
						<li><a href="https://www.legalraasta.com/llp-vs-pvt-ltd-vs-opc-vs-partnership-vs-proprieotrship/"
								data-mce-href="https://www.legalraasta.com/llp-vs-pvt-ltd-vs-opc-vs-partnership-vs-proprieotrship/">LLP
								comparison</a></li>
						<li><a href="https://www.legalraasta.com/differences-between-limited-liability-partnership-and-partnership/"
								target="_blank" rel="noopener"
								data-mce-href="https://www.legalraasta.com/differences-between-limited-liability-partnership-and-partnership/">Difference
								between LLP &amp; Partnership</a></li>
					</ol>
					<p><strong>About LegalRaasta:<br></strong>LegalRaasta is India leading business services provider. LegalRaasta
						serves more than 2200+ businesses ever year. We offer 30+ services including <strong>GST, ITR, TDS, Company
							formation, Service tax, IEC, Trademark, FSSAI, ROC, ISO, &amp; Loans.</strong></p>
					<p>LegalRaasta also has <strong>tie ups with 40+ Banks &amp; NBFCs</strong> and can help you with
						<strong>business loans</strong>.</p>
					<p>Warm regards,<br>Team, LegalRaasta<br><em><a
								href="https://www.legalraasta.com/private-limited-company-registration/"
								data-mce-href="https://www.legalraasta.com/private-limited-company-registration/">Company
								formation</a> | <a href="https://www.legalraasta.com/trademark-registration/"
								data-mce-href="https://www.legalraasta.com/trademark-registration/">Trademark</a> | <a
								href="https://www.legalraasta.com/fssai-license/"
								data-mce-href="https://www.legalraasta.com/fssai-license/">Licenses</a> | <a
								href="https://www.legalraasta.com/gst-registration/"
								data-mce-href="https://www.legalraasta.com/gst-registration/">GST</a>, <a
								href="https://www.legalraasta.com/income-tax-return/"
								data-mce-href="https://www.legalraasta.com/income-tax-return/">ITR</a> &amp; <a
								href="https://www.legalraasta.com/tds-return/"
								data-mce-href="https://www.legalraasta.com/tds-return/">TDS</a> | <a
								href="https://www.legalraasta.com/loan/"
								data-mce-href="https://www.legalraasta.com/loan/">Loans</a></em><br>M:&nbsp;<a
							href="tel:%2B91%20875%20000%208585" data-mce-href="tel:%2B91%20875%20000%208585">+91 875 000
							8585</a>&nbsp;|&nbsp;<a href="https://www.legalraasta.com/"
							data-mce-href="https://www.legalraasta.com/">www.legalraasta.com</a><br>Head office: B-300, Saraswati
						Vihar, Pitampura, Delhi<br><a href="https://www.facebook.com/legalraasta/"
							data-mce-href="https://www.facebook.com/legalraasta/">Facebook</a>&nbsp;|&nbsp;<a
							href="https://www.linkedin.com/in/LegalRaasta/"
							data-mce-href="https://www.linkedin.com/in/LegalRaasta/">Linkedin</a>&nbsp;|&nbsp;<a
							href="https://twitter.com/LRaasta"
							data-mce-href="https://twitter.com/LRaasta">Twitter</a>&nbsp;|&nbsp;<a
							href="https://www.youtube.com/watch?v=NSIg1XT-KM0&amp;t=1s"
							data-mce-href="https://www.youtube.com/watch?v=NSIg1XT-KM0&amp;t=1s">YouTube</a></p>
				</div>
			</body>
		</html>';
		}else if(isset($_POST['service_code']) && $service_code == '035') {
			$Body='<html>
			<body>
				<p>Dear  '.$_POST['name'].'</p>
				<p>Greetings from LegalRaasta - India’s top financial services platform! Every year LegalRaasta helps more than 500+
					companies in EPF Registration.</p>
				<p><b>Time required</b>: &lt;7 working days*<br><b>Cost</b>: Rs. 4,599 onwards (incl. GST)</p>
				<p>Process:<br>Step 1: Fill application form -&nbsp;<u><a href="https://www.legalraasta.com/epf-application-form/"
							data-mce-href="https://www.legalraasta.com/epf-application-form/">Click here</a></u><br><b>Step 2: Make
						payment: Rs. 4,599 onwards:&nbsp;</b><a href="https://www.legalraasta.com/payment/"
						data-mce-href="https://www.legalraasta.com/payment/"><u><b>Click here </b></u></a><br>Step 3: <a
						href="https://client.legalraasta.com/d.php" data-mce-href="https://client.legalraasta.com/d.php">Upload
						Documents&nbsp;</a></p>
				<p><b>Documents Required: </b>PAN Card firm/Company, PAN Card of employer, Certificate of registration, Cancelled
					cheque, Details of employees, Premises address proof, Factory/Shop est./GST certificate (if any)<b> </b></p>
				<p><b>LegalRaasta in News: </b><a
						href="https://economictimes.indiatimes.com/small-biz/startups/legalraasta-raises-rs-6-5-crore-in-angel-round/articleshow/51813536.cms"
						data-mce-href="https://economictimes.indiatimes.com/small-biz/startups/legalraasta-raises-rs-6-5-crore-in-angel-round/articleshow/51813536.cms">Economic
						times</a> | <a
						href="https://economictimes.indiatimes.com/small-biz/money/legal-business-consultancy-firm-legalraasta-raises-funds-to-provide-gst-c0mpliance-software-to-more-smes/articleshow/58638228.cms"
						data-mce-href="https://economictimes.indiatimes.com/small-biz/money/legal-business-consultancy-firm-legalraasta-raises-funds-to-provide-gst-c0mpliance-software-to-more-smes/articleshow/58638228.cms">IndiaTimes</a>
					| <a href="https://www.vccircle.com/exclusive-legal-raasta-raises-5-mn-in-series-a-round/"
						data-mce-href="https://www.vccircle.com/exclusive-legal-raasta-raises-5-mn-in-series-a-round/">VCCircle</a>
					| <a href="http://bwdisrupt.businessworld.in/article/Delhi-Based-Startup-LegalRaasta-Raises-5M-in-Series-A-Round-from-Impanix-Capital/12-05-2017-118035/"
						data-mce-href="http://bwdisrupt.businessworld.in/article/Delhi-Based-Startup-LegalRaasta-Raises-5M-in-Series-A-Round-from-Impanix-Capital/12-05-2017-118035/">BusinessWorld</a>
					| <a href="https://www.youtube.com/watch?v=NSIg1XT-KM0&amp;t=1s"
						data-mce-href="https://www.youtube.com/watch?v=NSIg1XT-KM0&amp;t=1s">YouTube</a><br><b><br></b>Warm
					regards,<br>Team, LegalRaasta<br><a href="https://www.legalraasta.com/private-limited-company-registration/"
						data-mce-href="https://www.legalraasta.com/private-limited-company-registration/"><i>Company
							formation</i></a><em>&nbsp;|&nbsp;</em><a href="https://www.legalraasta.com/trademark-registration/"
						data-mce-href="https://www.legalraasta.com/trademark-registration/"><i>Trademark</i></a><em>&nbsp;|&nbsp;</em><a
						href="https://www.legalraasta.com/fssai-license/"
						data-mce-href="https://www.legalraasta.com/fssai-license/"><i>Licenses</i></a><em>&nbsp;|&nbsp;</em><a
						href="https://www.legalraasta.com/gst-registration/"
						data-mce-href="https://www.legalraasta.com/gst-registration/"><i>GST</i></a><em> | </em><a
						href="https://www.legalraasta.com/accounting-bookkeeping/"
						data-mce-href="https://www.legalraasta.com/accounting-bookkeeping/"><i>Accounting</i></a><em>&nbsp;&nbsp;</em><i><br></i>M:&nbsp;<a
						href="tel:%2B91%20875%20000%208585" data-mce-href="tel:%2B91%20875%20000%208585">875 000
						8585</a>&nbsp;|&nbsp;<a href="https://www.legalraasta.com/"
						data-mce-href="https://www.legalraasta.com/">legalraasta.com</a><br>* <a
						href="https://www.legalraasta.com/terms-and-conditions/"
						data-mce-href="https://www.legalraasta.com/terms-and-conditions/">Terms &amp; Conditions</a></p>
			</body>
		</html>';	
		}else if(isset($_POST['service_code']) && $service_code == '036') {
			$Body='<html>
			<body>
				<div>Dear  '.$_POST['name'].'<p>We&nbsp;welcome&nbsp;you to LegalRaasta&nbsp;customer&nbsp;family! Every
						year&nbsp;Legalraasta&nbsp;<strong>helps more than 500+ companies</strong>&nbsp;in Professional
						tax&nbsp;registration.</p>
				</div>
				<div>Our Professional tax&nbsp;registration package includes:&nbsp;Drafting documents, application filing &amp;
					processing, Tax consultation &amp; Govt. fees.</div>
				<div>Time required: &lt;7 working days</div>
				<div>Cost: Rs. 3,999  only.</div>
				<div>Please follow the below steps to complete application:</div>
				<div><strong>Step 1: Fill application form - <a
							href="https://www.legalraasta.com/professional-tax-application-form/" target="_blank" rel="noopener"
							data-mce-href="https://www.legalraasta.com/professional-tax-application-form/">Click here</a></strong>
					<p><strong>Steps 2: Make payment : </strong>Total charge ofRs. 3,999 <strong>.&nbsp;</strong>Choose from the
						following options:</p>
					<ul>
						<li><strong>&nbsp;</strong>Netbanking/ Credit card/ Debit card :&nbsp;<strong><a
									href="https://www.legalraasta.com/payment/" target="_blank" rel="noopener"
									data-mce-href="https://www.legalraasta.com/payment/">Click here to make Payment</a></strong>
						</li>
						<li>Bank Transfer: Company: LegalRaasta Technologies Pvt. Ltd., Bank: Kotak Mahindra, Saraswati Vihar,
							Delhi, IFSC: KKBK0004604, A/c no: 9312250417</li>
					</ul>
					<p><strong>Step 3: Submit&nbsp;documents-&nbsp;</strong>Please email us the following&nbsp;documents&nbsp;(you
						can reply to this mail)</p>
					<ul>
						<li>Copy of PAN Card of Directors/Applicant</li>
						<li>Copy of ID Proof of Directors/Applicant (Prefer Aadhaar Card)</li>
						<li>Passport size photograph of all the Directors/Applicant</li>
						<li>E-mail id &amp; mobile no. of all&nbsp;the Directors/Applicant</li>
						<li>Residential Proof of registered office (Telephone or Mobile Bill/ Electricity or Gas Bill)</li>
						<li>MOA &amp; AOA (In case of company)</li>
						<li>Declaration&nbsp;(In case of company)</li>
						<li>Sale Deed (if owned property)</li>
						<li>Rent agreement (if rented property)</li>
						<li>Landlord NOC (if rented property)</li>
					</ul>
					<p>You can refer to the following articles for more information on Professional tax
						registration&nbsp;service.&nbsp;You can also view our Youtube guide on <a
							href="https://www.youtube.com/watch?v=McRqWW9_FEY" target="_blank" rel="noopener"
							data-mce-href="https://www.youtube.com/watch?v=McRqWW9_FEY">Legalraasta</a>.&nbsp;Happy to help!!</p>
					<ol>
						<li><a href="https://www.legalraasta.com/register-professional-tax-in-india/" target="_blank" rel="noopener"
								data-mce-href="https://www.legalraasta.com/register-professional-tax-in-india/">Guide for
								Professional tax in India</a></li>
						<li><a href="https://www.legalraasta.com/professional-tax-importance/" target="_blank" rel="noopener"
								data-mce-href="https://www.legalraasta.com/professional-tax-importance/">Professional tax
								importance</a></li>
					</ol>
					<p><strong>About LegalRaasta:<br></strong>LegalRaasta is India leading business services provider. LegalRaasta
						serves more than 2200+ businesses ever year. We offer 30+ services including <strong>GST, ITR, TDS, Company
							formation, Service tax, IEC, Trademark, FSSAI, ROC, ISO, &amp; Loans.</strong></p>
					<p>LegalRaasta also has <strong>tie ups with 40+ Banks &amp; NBFCs</strong> and can help you with
						<strong>business loans</strong>.</p>
					<p>Warm regards,<br>Team, LegalRaasta<br><em><a
								href="https://www.legalraasta.com/private-limited-company-registration/"
								data-mce-href="https://www.legalraasta.com/private-limited-company-registration/">Company
								formation</a> | <a href="https://www.legalraasta.com/trademark-registration/"
								data-mce-href="https://www.legalraasta.com/trademark-registration/">Trademark</a> | <a
								href="https://www.legalraasta.com/fssai-license/"
								data-mce-href="https://www.legalraasta.com/fssai-license/">Licenses</a> | <a
								href="https://www.legalraasta.com/gst-registration/"
								data-mce-href="https://www.legalraasta.com/gst-registration/">GST</a>, <a
								href="https://www.legalraasta.com/income-tax-return/"
								data-mce-href="https://www.legalraasta.com/income-tax-return/">ITR</a> &amp; <a
								href="https://www.legalraasta.com/tds-return/"
								data-mce-href="https://www.legalraasta.com/tds-return/">TDS</a> | <a
								href="https://www.legalraasta.com/loan/"
								data-mce-href="https://www.legalraasta.com/loan/">Loans</a></em><br>M:&nbsp;<a
							href="tel:%2B91%20875%20000%208585" data-mce-href="tel:%2B91%20875%20000%208585">+91 875 000
							8585</a>&nbsp;|&nbsp;<a href="https://www.legalraasta.com/"
							data-mce-href="https://www.legalraasta.com/">www.legalraasta.com</a><br>Head office: B-300, Saraswati
						Vihar, Pitampura, Delhi<br><a href="https://www.facebook.com/legalraasta/"
							data-mce-href="https://www.facebook.com/legalraasta/">Facebook</a>&nbsp;|&nbsp;<a
							href="https://www.linkedin.com/in/LegalRaasta/"
							data-mce-href="https://www.linkedin.com/in/LegalRaasta/">Linkedin</a>&nbsp;|&nbsp;<a
							href="https://twitter.com/LRaasta"
							data-mce-href="https://twitter.com/LRaasta">Twitter</a>&nbsp;|&nbsp;<a
							href="https://www.youtube.com/watch?v=NSIg1XT-KM0&amp;t=1s"
							data-mce-href="https://www.youtube.com/watch?v=NSIg1XT-KM0&amp;t=1s">YouTube</a></p>
				</div>
			</body>
		</html>';
		}else if(isset($_POST['service_code']) && $service_code == '037') {
			$Body='<body>
			<div>
				<p>Dear  '.$_POST['name'].'&nbsp;We&nbsp;welcome&nbsp;you to LegalRaasta&nbsp;customer&nbsp;family! Every
					year&nbsp;Legalraasta&nbsp;<strong>helps more than 500+ companies</strong>&nbsp;in increase
					in&nbsp;authorized share capital.</p>
			</div>
			<div>Our change in authorized share capital&nbsp;package includes:&nbsp;Share capital application
				preparation,&nbsp;Share capital application filing &amp;&nbsp;ROC registration fees.</div>
			<div>Time required: &lt;10 working days</div>
			<div>Cost: : Rs. 3,299  onwards.</div>
			<div>Please follow the below steps to complete application:</div>
			<div>
				<p><strong>Step 1: Fill application form - <a
							href="https://www.legalraasta.com/application-for-increase-in-authorised-share-capital/"
							target="_blank" rel="noopener"
							data-mce-href="https://www.legalraasta.com/application-for-increase-in-authorised-share-capital/">Click
							here</a></strong><strong>Steps 2: Make payment : </strong>Total charge of: Rs. 3,299 <strong>.&nbsp;</strong>Choose from the following options:</p>
				<ul>
					<li>Netbanking/ Credit card/ Debit card :&nbsp;<strong><a href="https://www.legalraasta.com/payment/"
								target="_blank" rel="noopener" data-mce-href="https://www.legalraasta.com/payment/">Click here
								to make Payment</a></strong></li>
					<li>Bank Transfer: Company: LegalRaasta Technologies Pvt. Ltd., Bank: Kotak Mahindra, Saraswati Vihar,
						Delhi, IFSC: KKBK0004604, A/c no: 9312250417</li>
				</ul>
				<p><strong>Step 3: Submit&nbsp;documents-&nbsp;</strong>Please email us the following&nbsp;documents&nbsp;(you
					can reply to this mail)</p>
				<ul>
					<li>Certificate of incorporation</li>
					<li>Signatory Details</li>
					<li>New Share Capital details</li>
				</ul>
				<p>You can refer to the following articles for more information on change in authorized share
					capital&nbsp;service.&nbsp;&nbsp;You can also view our Youtube guide on <a
						href="https://www.youtube.com/watch?v=gjLfgPORA5w" target="_blank" rel="noopener"
						data-mce-href="https://www.youtube.com/watch?v=gjLfgPORA5w">Increase in Authorized Share
						Capital</a>.&nbsp;Happy to help!!</p>
				<p><a href="https://www.legalraasta.com/increase-in-authorized-share-capital/" target="_blank" rel="noopener"
						data-mce-href="https://www.legalraasta.com/increase-in-authorized-share-capital/">Procedure for Increase
						Authorised Share Capital</a></p>
				<p><strong>About LegalRaasta:<br></strong>LegalRaasta is India leading business services provider. LegalRaasta
					serves more than 2200+ businesses ever year. We offer 30+ services including <strong>GST, ITR, TDS, Company
						formation, Service tax, IEC, Trademark, FSSAI, ROC, ISO, &amp; Loans.</strong></p>
				<p>LegalRaasta also has <strong>tie ups with 40+ Banks &amp; NBFCs</strong> and can help you with
					<strong>business loans</strong>.</p>
				<p>Warm regards,<br>Team, LegalRaasta<br><em><a
							href="https://www.legalraasta.com/private-limited-company-registration/"
							data-mce-href="https://www.legalraasta.com/private-limited-company-registration/">Company
							formation</a> | <a href="https://www.legalraasta.com/trademark-registration/"
							data-mce-href="https://www.legalraasta.com/trademark-registration/">Trademark</a> | <a
							href="https://www.legalraasta.com/fssai-license/"
							data-mce-href="https://www.legalraasta.com/fssai-license/">Licenses</a> | <a
							href="https://www.legalraasta.com/gst-registration/"
							data-mce-href="https://www.legalraasta.com/gst-registration/">GST</a>, <a
							href="https://www.legalraasta.com/income-tax-return/"
							data-mce-href="https://www.legalraasta.com/income-tax-return/">ITR</a> &amp; <a
							href="https://www.legalraasta.com/tds-return/"
							data-mce-href="https://www.legalraasta.com/tds-return/">TDS</a> | <a
							href="https://www.legalraasta.com/loan/"
							data-mce-href="https://www.legalraasta.com/loan/">Loans</a></em><br>M:&nbsp;<a
						href="tel:%2B91%20875%20000%208585" data-mce-href="tel:%2B91%20875%20000%208585">+91 875 000
						8585</a>&nbsp;|&nbsp;<a href="https://www.legalraasta.com/"
						data-mce-href="https://www.legalraasta.com/">www.legalraasta.com</a><br>Head office: B-300, Saraswati
					Vihar, Pitampura, Delhi<br><a href="https://www.facebook.com/legalraasta/"
						data-mce-href="https://www.facebook.com/legalraasta/">Facebook</a>&nbsp;|&nbsp;<a
						href="https://www.linkedin.com/in/LegalRaasta/"
						data-mce-href="https://www.linkedin.com/in/LegalRaasta/">Linkedin</a>&nbsp;|&nbsp;<a
						href="https://twitter.com/LRaasta"
						data-mce-href="https://twitter.com/LRaasta">Twitter</a>&nbsp;|&nbsp;<a
						href="https://www.youtube.com/watch?v=NSIg1XT-KM0&amp;t=1s"
						data-mce-href="https://www.youtube.com/watch?v=NSIg1XT-KM0&amp;t=1s">YouTube</a></p>
			</div>
		</body>';
		}else if(isset($_POST['service_code']) && $service_code == '038') {
			$Body='<html>
			<body>
				<div>Dear'.$_POST['name'].'<p>We&nbsp;welcome&nbsp;you to LegalRaasta&nbsp;customer&nbsp;family! Every
						year&nbsp;Legalraasta&nbsp;<strong>helps more than 500+ companies</strong>&nbsp;in Allotment of Shares.</p>
				</div>
				<div>Our Allotment of shares&nbsp;package includes: Drafting documents, application filing &amp; processing.</div>
				<div>Time required: &lt;10 working days</div>
				<div>Cost: Rs. 5,499 onwards.</div>
				<div>Please follow the below steps to complete application:</div>
				<div>
					<p><strong>Step 1: Fill application form - <a
								href="https://www.legalraasta.com/allotment-of-shares-application-form/" target="_blank"
								rel="noopener"
								data-mce-href="https://www.legalraasta.com/allotment-of-shares-application-form/">Click
								here</a></strong><strong>Steps 2: Make payment : </strong>Total charge of Rs.
						5,499<strong>.&nbsp;</strong>Choose from the following options:</p>
					<ul>
						<li>Netbanking/ Credit card/ Debit card :&nbsp;<strong><a href="https://www.legalraasta.com/payment/"
									target="_blank" rel="noopener" data-mce-href="https://www.legalraasta.com/payment/">Click here
									to make Payment</a></strong></li>
						<li>Bank Transfer: Company: LegalRaasta Technologies Pvt. Ltd., Bank: Kotak Mahindra, Saraswati Vihar,
							Delhi, IFSC: KKBK0004604, A/c no: 9312250417</li>
					</ul>
					<p><strong>Step 3: Submit&nbsp;documents-&nbsp;</strong>Please email us the following&nbsp;documents&nbsp;(you
						can reply to this mail)</p>
					<ul>
						<li>MOA &amp; AOA</li>
						<li>Declaration</li>
						<li>Incorporation Certificate</li>
					</ul>
					<p>You can refer to the following articles for more information on Allotment of shares&nbsp;service.&nbsp;You
						can also view our Youtube guide on <a href="https://www.youtube.com/watch?v=pZsMJubAUqA" target="_blank"
							rel="noopener" data-mce-href="https://www.youtube.com/watch?v=pZsMJubAUqA">Legalraasta</a>.&nbsp;Happy
						to help!!</p>
					<ol>
						<li><a href="https://www.legalraasta.com/allotment-of-shares-of-a-company/" target="_blank" rel="noopener"
								data-mce-href="https://www.legalraasta.com/allotment-of-shares-of-a-company/">Guide for Allotment of
								Shares of a Company</a></li>
					</ol>
					<p><strong>About LegalRaasta:<br></strong>LegalRaasta is India leading business services provider. LegalRaasta
						serves more than 2200+ businesses ever year. We offer 30+ services including <strong>GST, ITR, TDS, Company
							formation, Service tax, IEC, Trademark, FSSAI, ROC, ISO, &amp; Loans.</strong></p>
					<p>LegalRaasta also has <strong>tie ups with 40+ Banks &amp; NBFCs</strong> and can help you with
						<strong>business loans</strong>.</p>
					<p>Warm regards,<br>Team, LegalRaasta<br><em><a
								href="https://www.legalraasta.com/private-limited-company-registration/"
								data-mce-href="https://www.legalraasta.com/private-limited-company-registration/">Company
								formation</a> | <a href="https://www.legalraasta.com/trademark-registration/"
								data-mce-href="https://www.legalraasta.com/trademark-registration/">Trademark</a> | <a
								href="https://www.legalraasta.com/fssai-license/"
								data-mce-href="https://www.legalraasta.com/fssai-license/">Licenses</a> | <a
								href="https://www.legalraasta.com/gst-registration/"
								data-mce-href="https://www.legalraasta.com/gst-registration/">GST</a>, <a
								href="https://www.legalraasta.com/income-tax-return/"
								data-mce-href="https://www.legalraasta.com/income-tax-return/">ITR</a> &amp; <a
								href="https://www.legalraasta.com/tds-return/"
								data-mce-href="https://www.legalraasta.com/tds-return/">TDS</a> | <a
								href="https://www.legalraasta.com/loan/"
								data-mce-href="https://www.legalraasta.com/loan/">Loans</a></em><br>M:&nbsp;<a
							href="tel:%2B91%20875%20000%208585" data-mce-href="tel:%2B91%20875%20000%208585">+91 875 000
							8585</a>&nbsp;|&nbsp;<a href="https://www.legalraasta.com/"
							data-mce-href="https://www.legalraasta.com/">www.legalraasta.com</a><br>Head office: B-300, Saraswati
						Vihar, Pitampura, Delhi<br><a href="https://www.facebook.com/legalraasta/"
							data-mce-href="https://www.facebook.com/legalraasta/">Facebook</a>&nbsp;|&nbsp;<a
							href="https://www.linkedin.com/in/LegalRaasta/"
							data-mce-href="https://www.linkedin.com/in/LegalRaasta/">Linkedin</a>&nbsp;|&nbsp;<a
							href="https://twitter.com/LRaasta"
							data-mce-href="https://twitter.com/LRaasta">Twitter</a>&nbsp;|&nbsp;<a
							href="https://www.youtube.com/watch?v=NSIg1XT-KM0&amp;t=1s"
							data-mce-href="https://www.youtube.com/watch?v=NSIg1XT-KM0&amp;t=1s">YouTube</a></p>
				</div>
			</body>
		</html>';
		}else if(isset($_POST['service_code']) && $service_code == '039') {
			$Body='<html>
			<body>
				<p>Dear '.$_POST['name'].',</p>
				<p>We thank you for choosing Taxraahi (by LegalRaasta) as your tax filing software. LegalRaasta has helped more than
					200,000+ clients in filing tax returns.</p>
				<p>Our GST software comes with multiple features including:<br>• Easy reconciliation<br>• Multi-user management<br>•
					Automatic reminders &amp; Easy interface<br>• Excel / ERP import</p>
				<p>You can buy our GST software at just Rs. 4999. <a href="https://www.legalraasta.com/gst-plans/"
						data-mce-href="https://www.legalraasta.com/gst-plans/">Click here to buy</a>.</p>
				<p><strong>As introductory offer – you can use the software free for first 2 months.</strong></p>
				<p><a href="https://www.legalraasta.com/gst-plans/"
						data-mce-href="https://www.legalraasta.com/gst-plans/"><strong>Get GST Software</strong></a></p>
				<p>Warm regards,<br>Team, LegalRaasta<br><em><a href="https://www.legalraasta.com/gst-registration/" target="_blank"
							rel="noopener" data-mce-href="https://www.legalraasta.com/gst-registration/">GST registration</a> | <a
							href="https://www.legalraasta.com/gst-return/" target="_blank" rel="noopener"
							data-mce-href="https://www.legalraasta.com/gst-return/">GST Return</a> | <a
							href="https://www.legalraasta.com/gst-software" target="_blank" rel="noopener"
							data-mce-href="https://www.legalraasta.com/gst-software">GST Software</a> | <a
							href="https://www.legalraasta.com/tds-return/" target="_blank" rel="noopener"
							data-mce-href="https://www.legalraasta.com/tds-return/">TDS</a> |<a
							href="https://www.legalraasta.com/income-tax-return" target="_blank" rel="noopener"
							data-mce-href="https://www.legalraasta.com/income-tax-return">ITR</a><br>M: <a
							href="tel:%2B91%20875%20000%208585" target="_blank" rel="noopener"
							data-mce-href="tel:%2B91%20875%20000%208585">+91 875 000 8484</a> | <a
							href="https://www.legalraasta.com/" target="_blank" rel="noopener"
							data-mce-href="https://www.legalraasta.com/">www.legalraasta.com</a><br>Head office: B-300, Saraswati
						Vihar, Pitampura, Delhi<br>Branches in: Bangalore | Hyderabad | Chennai | Mumbai | 15+ cities</em></p>
			</body>
		</html>';
		}else if(isset($_POST['service_code']) && $service_code == '040') {
			$Body="Need Mail In this Service";
		}else if(isset($_POST['service_code']) && $service_code == '041') {
			$Body='<html>
			<body>
				<p>Dear Customer,</p>
				<p>LegalRaasta has partnered with Impanix Books to offer bookkeeping for your business.</p>
				<p>Impanix Bookkeepers can take the pressure of Accounting and Tax filing off from your shoulders which leaves you
					with growing your business.</p>
				<p>Now we understand you want to check our workflow as to how we work and how we do accounting. So to solve this
					confusion we are offering you 1 month <strong>free Accounting service</strong>.</p>
				<p>In short, you get:<br>1. Free Accounting for a month<br>2. Free Accounting software<br>3. Dedicated bookkeeper at
					&lt; Rs. 2000/month<br>4.&nbsp;GST, ITR &amp; TDS filing</p>
				<p>Watch our video to see&nbsp;<a title="How Impanix works" href="https://www.youtube.com/watch?v=Rcg-sR8c8XQ"
						data-mce-href="https://www.youtube.com/watch?v=Rcg-sR8c8XQ">how it works</a>. Visit us at <a
						title="Impanix Bookkeeping Services" href="https://www.impanix.com/in"
						data-mce-href="https://www.impanix.com/in">Impanix.com</a> or call us at 8750006464 to take this forward.
				</p>
				<h3 style="text-align: center;" data-mce-style="text-align: center;"><a title="Impanix accounting"
						href="https://www.impanix.com/in" data-mce-href="https://www.impanix.com/in">Get Free 1 month accounting</a>
				</h3>
				<p>Regards<br>Dev, Account Specialist<br>M: +91 8750006464, Mail: contact@impanix.com</p>
			</body>
		</html>';
		}else if(isset($_POST['service_code']) && $service_code == '042') {
			$Body='<html>
			<body>
				<p>Dear '.$_POST['name'].'</p>
				<p>Greetings from LegalRaasta - India’s top financial services platform! Every year LegalRaasta helps more than 500+
					companies in Copyright Registration.</p>
				<p><b>Package includes:</b> Application drafting, application filing, Government fees &amp; diary number.<br><b>Time
						required</b>: &lt;10 working days (for dairy no)*<br><b>Cost</b>: 3,999 Onwards (Incl GST)</p>
				<p><b>Process:</b><br>Step 1: Fill application form -&nbsp;<a
						href="https://www.legalraasta.com/file-copyright-application/"
						data-mce-href="https://www.legalraasta.com/file-copyright-application/">Click here</a><a
						href="https://www.legalraasta.com/private-limited-registration/"
						data-mce-href="https://www.legalraasta.com/private-limited-registration/">&nbsp;</a><br><b>Step 2: Make
						payment: </b><a href="https://www.legalraasta.com/payment/"
						data-mce-href="https://www.legalraasta.com/payment/"><b>Click here </b></a><br>Step 3: <a
						href="https://client.legalraasta.com/d.php" data-mce-href="https://client.legalraasta.com/d.php">Upload
						Documents&nbsp;</a></p>
				<p><b>Documents Required: </b>PAN Card copy, ID Proof (Prefer Aadhaar Card), Residential Proof (Telephone or Mobile
					Bill/ Electricity or Gas Bill), Incorporation documents (in case of a company)</p>
				<p><b>LegalRaasta in News: </b><a
						href="https://economictimes.indiatimes.com/small-biz/startups/legalraasta-raises-rs-6-5-crore-in-angel-round/articleshow/51813536.cms"
						data-mce-href="https://economictimes.indiatimes.com/small-biz/startups/legalraasta-raises-rs-6-5-crore-in-angel-round/articleshow/51813536.cms">Economic
						times</a> | <a
						href="https://economictimes.indiatimes.com/small-biz/money/legal-business-consultancy-firm-legalraasta-raises-funds-to-provide-gst-c0mpliance-software-to-more-smes/articleshow/58638228.cms"
						data-mce-href="https://economictimes.indiatimes.com/small-biz/money/legal-business-consultancy-firm-legalraasta-raises-funds-to-provide-gst-c0mpliance-software-to-more-smes/articleshow/58638228.cms">IndiaTimes</a>
					| <a href="https://www.vccircle.com/exclusive-legal-raasta-raises-5-mn-in-series-a-round/"
						data-mce-href="https://www.vccircle.com/exclusive-legal-raasta-raises-5-mn-in-series-a-round/">VCCircle</a>
					| <a href="http://bwdisrupt.businessworld.in/article/Delhi-Based-Startup-LegalRaasta-Raises-5M-in-Series-A-Round-from-Impanix-Capital/12-05-2017-118035/"
						data-mce-href="http://bwdisrupt.businessworld.in/article/Delhi-Based-Startup-LegalRaasta-Raises-5M-in-Series-A-Round-from-Impanix-Capital/12-05-2017-118035/">BusinessWorld</a>
					| <a href="https://www.youtube.com/watch?v=NSIg1XT-KM0&amp;t=1s"
						data-mce-href="https://www.youtube.com/watch?v=NSIg1XT-KM0&amp;t=1s">YouTube</a></p>
				<p><b><br></b>Warm regards,<br>Team, LegalRaasta<br><a
						href="https://www.legalraasta.com/private-limited-company-registration/"
						data-mce-href="https://www.legalraasta.com/private-limited-company-registration/"><i>Company
							formation</i></a><em>&nbsp;|&nbsp;</em><a href="https://www.legalraasta.com/trademark-registration/"
						data-mce-href="https://www.legalraasta.com/trademark-registration/"><i>Trademark</i></a><em>&nbsp;|&nbsp;</em><a
						href="https://www.legalraasta.com/fssai-license/"
						data-mce-href="https://www.legalraasta.com/fssai-license/"><i>Licenses</i></a><em>&nbsp;|&nbsp;</em><a
						href="https://www.legalraasta.com/gst-registration/"
						data-mce-href="https://www.legalraasta.com/gst-registration/"><i>GST</i></a><em> | </em><a
						href="https://www.legalraasta.com/accounting-bookkeeping/"
						data-mce-href="https://www.legalraasta.com/accounting-bookkeeping/"><i>Accounting</i></a><em>&nbsp;&nbsp;</em><i><br></i>M:&nbsp;<a
						href="tel:%2B91%20875%20000%208585" data-mce-href="tel:%2B91%20875%20000%208585">875 000
						8585</a>&nbsp;|&nbsp;<a href="https://www.legalraasta.com/"
						data-mce-href="https://www.legalraasta.com/">legalraasta.com</a><br>* <a
						href="https://www.legalraasta.com/terms-and-conditions/"
						data-mce-href="https://www.legalraasta.com/terms-and-conditions/">Terms &amp; Conditions</a></p>
			</body>
		</html>';
		}else if(isset($_POST['service_code']) && $service_code == '043') {
			$Body='<html>
			<body>
				<p>Dear  '.$_POST['name'].' ,</p>
				<p>We want to educate you on important compliances due after you incorporate your company. LegalRaasta has helped
					more than 80,000+ companies with compliances in an affordable manner.</p>
				<p><b>1. ROC compliances (Mandatory): Rs. 12499/ year</b></p>
				<ul>
					<li>ADT -1 Auditor appointment</li>
					<li>AOC-4 &amp; MGT-7 – Annual Return filing with ROC</li>
					<li>DIR 3 KYC of all directors</li>
					<li>Holding AGM</li>
					<li>Certificate of commencement</li>
					<li>Preparation of final accounts &amp; directors report.</li>
					<li>Maintenance of minutes &amp; statutory registers.</li>
				</ul>
				<p><b>2. Statutory compliances (Mandatory): Rs.14999/ year</b></p>
				<ul>
					<li>Check the Books of Accounts (as provided by client)</li>
					<li>Preparation of Balance sheet&nbsp;</li>
					<li>Preparation of P&amp;L&nbsp;</li>
					<li>Preparation of Audit report</li>
					<li>CA Signing of audited Balance sheet</li>
					<li>CA Signing of audited P&amp;L account</li>
					<li>ITR Filing</li>
				</ul>
				<p><b>3. Accounting: Rs.5999*/ year</b></p>
				<ul>
					<li>Monthly entries in Accounting software</li>
					<li>Bank reconciliation</li>
					<li>Reports on Debtors, Creditors, Cash balances etc</li>
					<li>Draft BS &amp; P&amp;L for auditor</li>
				</ul>
				<p>Offer: Get ROC, Statutory and accounting combined at 30% discount at 27,200 /year OR<b> 2700/ month</b>*: <a
						href="http://www.legalraasta.com/payment" data-mce-href="http://www.legalraasta.com/payment"><b>Make
							Payment</b></a><b>&nbsp;</b></p>
				<p><b>LegalRaasta in Media: </b><a
						href="https://economictimes.indiatimes.com/small-biz/startups/legalraasta-raises-rs-6-5-crore-in-angel-round/articleshow/51813536.cms"
						data-mce-href="https://economictimes.indiatimes.com/small-biz/startups/legalraasta-raises-rs-6-5-crore-in-angel-round/articleshow/51813536.cms">Economic
						times</a> | <a
						href="https://economictimes.indiatimes.com/small-biz/money/legal-business-consultancy-firm-legalraasta-raises-funds-to-provide-gst-c0mpliance-software-to-more-smes/articleshow/58638228.cms"
						data-mce-href="https://economictimes.indiatimes.com/small-biz/money/legal-business-consultancy-firm-legalraasta-raises-funds-to-provide-gst-c0mpliance-software-to-more-smes/articleshow/58638228.cms">IndiaTimes</a>
					| <a href="https://www.vccircle.com/exclusive-legal-raasta-raises-5-mn-in-series-a-round/"
						data-mce-href="https://www.vccircle.com/exclusive-legal-raasta-raises-5-mn-in-series-a-round/">VCCircle</a>
					| <a href="http://bwdisrupt.businessworld.in/article/Delhi-Based-Startup-LegalRaasta-Raises-5M-in-Series-A-Round-from-Impanix-Capital/12-05-2017-118035/"
						data-mce-href="http://bwdisrupt.businessworld.in/article/Delhi-Based-Startup-LegalRaasta-Raises-5M-in-Series-A-Round-from-Impanix-Capital/12-05-2017-118035/">BusinessWorld</a>
					| <a href="https://www.facebook.com/legalraasta/"
						data-mce-href="https://www.facebook.com/legalraasta/">Facebook</a>&nbsp;|&nbsp;<a
						href="https://www.youtube.com/watch?v=NSIg1XT-KM0&amp;t=1s"
						data-mce-href="https://www.youtube.com/watch?v=NSIg1XT-KM0&amp;t=1s">YouTube</a></p>
				<p><b><br></b>Warm regards,<br>Team, LegalRaasta<br><a
						href="https://www.legalraasta.com/private-limited-company-registration/"
						data-mce-href="https://www.legalraasta.com/private-limited-company-registration/">Company
						formation</a>&nbsp;|&nbsp;<a href="https://www.legalraasta.com/trademark-registration/"
						data-mce-href="https://www.legalraasta.com/trademark-registration/">Trademark</a>&nbsp;|&nbsp;<a
						href="https://www.legalraasta.com/fssai-license/"
						data-mce-href="https://www.legalraasta.com/fssai-license/">Licenses</a>&nbsp;|&nbsp;<a
						href="https://www.legalraasta.com/gst-registration/"
						data-mce-href="https://www.legalraasta.com/gst-registration/">GST</a> | <a
						href="https://www.legalraasta.com/accounting-bookkeeping/"
						data-mce-href="https://www.legalraasta.com/accounting-bookkeeping/">Accounting</a><br>M:&nbsp;<a
						href="tel:%2B91%20875%20000%208585" data-mce-href="tel:%2B91%20875%20000%208585">875 000
						8585</a>&nbsp;|&nbsp;<a href="https://www.legalraasta.com/"
						data-mce-href="https://www.legalraasta.com/">legalraasta.com</a><br>*Package will vary based on
					sales/expenses. See <a href="https://www.legalraasta.com/terms-and-conditions/"
						data-mce-href="https://www.legalraasta.com/terms-and-conditions/">Terms &amp; Conditions</a> and Detailed
					brochure.</p>
			</body>
		</html>';
		}else if(isset($_POST['service_code']) && $service_code == '044') {
			$Body='<html>
			<body>
				<p>Dear  '.$_POST['name'].'</p>
				<p>Greetings from LegalRaasta - India’s top financial services platform! Every year LegalRaasta helps more than 500+
					companies in Patent Search.</p>
				<p>Package includes: Prior Art Search, Comparisons, Acceptance chances &amp; Guidance.</p>
				<p><b>Time required</b>: &lt;10 working days*<br><b>Cost</b>: Rs. 29,999  onwards (incl. GST)</p>
				<p>Process:<br>Step 1: Fill application form -&nbsp;<a href="https://www.legalraasta.com/patent-search-application/"
						data-mce-href="https://www.legalraasta.com/patent-search-application/">Click here</a><br><b>Step 2: Make
						payment: Rs. 29,999  onwards:&nbsp;</b><a href="https://www.legalraasta.com/payment/"
						data-mce-href="https://www.legalraasta.com/payment/"><b>Click here </b></a><br>Step 3: <a
						href="https://client.legalraasta.com/d.php" data-mce-href="https://client.legalraasta.com/d.php">Upload
						Documents&nbsp;</a></p>
				<p><b>Documents Required: </b>Details of Invention</p>
				<p>You can also view our Youtube guide on&nbsp;<a href="https://www.youtube.com/watch?v=yMSd5YrAdN0&amp;t=26s"
						data-mce-href="https://www.youtube.com/watch?v=yMSd5YrAdN0&amp;t=26s">Patent Registration</a></p>
				<p><b>LegalRaasta in News: </b><a
						href="https://economictimes.indiatimes.com/small-biz/startups/legalraasta-raises-rs-6-5-crore-in-angel-round/articleshow/51813536.cms"
						data-mce-href="https://economictimes.indiatimes.com/small-biz/startups/legalraasta-raises-rs-6-5-crore-in-angel-round/articleshow/51813536.cms">Economic
						times</a> | <a
						href="https://economictimes.indiatimes.com/small-biz/money/legal-business-consultancy-firm-legalraasta-raises-funds-to-provide-gst-c0mpliance-software-to-more-smes/articleshow/58638228.cms"
						data-mce-href="https://economictimes.indiatimes.com/small-biz/money/legal-business-consultancy-firm-legalraasta-raises-funds-to-provide-gst-c0mpliance-software-to-more-smes/articleshow/58638228.cms">IndiaTimes</a>
					| <a href="https://www.vccircle.com/exclusive-legal-raasta-raises-5-mn-in-series-a-round/"
						data-mce-href="https://www.vccircle.com/exclusive-legal-raasta-raises-5-mn-in-series-a-round/">VCCircle</a>
					| <a href="http://bwdisrupt.businessworld.in/article/Delhi-Based-Startup-LegalRaasta-Raises-5M-in-Series-A-Round-from-Impanix-Capital/12-05-2017-118035/"
						data-mce-href="http://bwdisrupt.businessworld.in/article/Delhi-Based-Startup-LegalRaasta-Raises-5M-in-Series-A-Round-from-Impanix-Capital/12-05-2017-118035/">BusinessWorld</a>
					| <a href="https://www.youtube.com/watch?v=NSIg1XT-KM0&amp;t=1s"
						data-mce-href="https://www.youtube.com/watch?v=NSIg1XT-KM0&amp;t=1s">YouTube</a></p>
				<p><b><br></b>Warm regards,<br>Team, LegalRaasta<br><a
						href="https://www.legalraasta.com/private-limited-company-registration/"
						data-mce-href="https://www.legalraasta.com/private-limited-company-registration/"><i>Company
							formation</i></a><em>&nbsp;|&nbsp;</em><a href="https://www.legalraasta.com/trademark-registration/"
						data-mce-href="https://www.legalraasta.com/trademark-registration/"><i>Trademark</i></a><em>&nbsp;|&nbsp;</em><a
						href="https://www.legalraasta.com/fssai-license/"
						data-mce-href="https://www.legalraasta.com/fssai-license/"><i>Licenses</i></a><em>&nbsp;|&nbsp;</em><a
						href="https://www.legalraasta.com/gst-registration/"
						data-mce-href="https://www.legalraasta.com/gst-registration/"><i>GST</i></a><em> | </em><a
						href="https://www.legalraasta.com/accounting-bookkeeping/"
						data-mce-href="https://www.legalraasta.com/accounting-bookkeeping/"><i>Accounting</i></a><em>&nbsp;&nbsp;</em><i><br></i>M:&nbsp;<a
						href="tel:%2B91%20875%20000%208585" data-mce-href="tel:%2B91%20875%20000%208585">875 000
						8585</a>&nbsp;|&nbsp;<a href="https://www.legalraasta.com/"
						data-mce-href="https://www.legalraasta.com/">legalraasta.com</a><br>* <a
						href="https://www.legalraasta.com/terms-and-conditions/"
						data-mce-href="https://www.legalraasta.com/terms-and-conditions/">Terms &amp; Conditions</a></p>
			</body>
		</html>';
		}else if(isset($_POST['service_code']) && $service_code == '045') {
			$Body='<html>
			<body>
				<p>Dear  '.$_POST['name'].'</p>
				<p>Greetings from LegalRaasta - India’s top financial services platform! Every year LegalRaasta helps more than 500+
					companies in IEC Registration.</p>
				<p><b>Time required</b>: &lt;5 working days*<br><b>Cost</b>: Rs. 2,999 onwards (incl. GST)</p>
				<p><b>Process:</b><br>Step 1: Fill application form -&nbsp;<a href="https://www.legalraasta.com/iec-application/"
						data-mce-href="https://www.legalraasta.com/iec-application/">Click here</a><br><b>Step 2: Make payment: Rs.
						2,999 onwards:&nbsp;</b><a href="https://www.legalraasta.com/payment/"
						data-mce-href="https://www.legalraasta.com/payment/"><b>Click here </b></a><br>Step 3: <a
						href="https://client.legalraasta.com/d.php" data-mce-href="https://client.legalraasta.com/d.php">Upload
						Documents&nbsp;</a></p>
				<p><b>Documents Required: </b>Pan Card of owners, Adhaar card of owners, Photograph of owners, Registration proof
					(Partnership Deed or COI in case of Company), Office address proof (electricity/ phone bill)</p>
				<p><b>LegalRaasta in News: </b><a
						href="https://economictimes.indiatimes.com/small-biz/startups/legalraasta-raises-rs-6-5-crore-in-angel-round/articleshow/51813536.cms"
						data-mce-href="https://economictimes.indiatimes.com/small-biz/startups/legalraasta-raises-rs-6-5-crore-in-angel-round/articleshow/51813536.cms">Economic
						times</a> | <a
						href="https://economictimes.indiatimes.com/small-biz/money/legal-business-consultancy-firm-legalraasta-raises-funds-to-provide-gst-c0mpliance-software-to-more-smes/articleshow/58638228.cms"
						data-mce-href="https://economictimes.indiatimes.com/small-biz/money/legal-business-consultancy-firm-legalraasta-raises-funds-to-provide-gst-c0mpliance-software-to-more-smes/articleshow/58638228.cms">IndiaTimes</a>
					| <a href="https://www.vccircle.com/exclusive-legal-raasta-raises-5-mn-in-series-a-round/"
						data-mce-href="https://www.vccircle.com/exclusive-legal-raasta-raises-5-mn-in-series-a-round/">VCCircle</a>
					| <a href="http://bwdisrupt.businessworld.in/article/Delhi-Based-Startup-LegalRaasta-Raises-5M-in-Series-A-Round-from-Impanix-Capital/12-05-2017-118035/"
						data-mce-href="http://bwdisrupt.businessworld.in/article/Delhi-Based-Startup-LegalRaasta-Raises-5M-in-Series-A-Round-from-Impanix-Capital/12-05-2017-118035/">BusinessWorld</a>
					| <a href="https://www.youtube.com/watch?v=NSIg1XT-KM0&amp;t=1s"
						data-mce-href="https://www.youtube.com/watch?v=NSIg1XT-KM0&amp;t=1s">YouTube</a></p>
				<p>Warm regards,<br>Team, LegalRaasta<br><a href="https://www.legalraasta.com/private-limited-company-registration/"
						data-mce-href="https://www.legalraasta.com/private-limited-company-registration/"><i>Company
							formation</i></a><em>&nbsp;|&nbsp;</em><a href="https://www.legalraasta.com/trademark-registration/"
						data-mce-href="https://www.legalraasta.com/trademark-registration/"><i>Trademark</i></a><em>&nbsp;|&nbsp;</em><a
						href="https://www.legalraasta.com/fssai-license/"
						data-mce-href="https://www.legalraasta.com/fssai-license/"><i>Licenses</i></a><em>&nbsp;|&nbsp;</em><a
						href="https://www.legalraasta.com/gst-registration/"
						data-mce-href="https://www.legalraasta.com/gst-registration/"><i>GST</i></a><em> | </em><a
						href="https://www.legalraasta.com/accounting-bookkeeping/"
						data-mce-href="https://www.legalraasta.com/accounting-bookkeeping/"><i>Accounting</i></a><em>&nbsp;&nbsp;</em><i><br></i>M:&nbsp;<a
						href="tel:%2B91%20875%20000%208585" data-mce-href="tel:%2B91%20875%20000%208585">875 000
						8585</a>&nbsp;|&nbsp;<a href="https://www.legalraasta.com/"
						data-mce-href="https://www.legalraasta.com/">legalraasta.com</a><br>* <a
						href="https://www.legalraasta.com/terms-and-conditions/"
						data-mce-href="https://www.legalraasta.com/terms-and-conditions/">Terms &amp; Conditions</a></p>
			</body>
		</html>';
		}else if(isset($_POST['service_code']) && $service_code == '046') {
			$Body='<html>
			<body>
				<div>Dear {Name:1}<p>We&nbsp;welcome&nbsp;you to LegalRaasta&nbsp;customer&nbsp;family! Every
						year&nbsp;Legalraasta&nbsp;<strong>helps more than 500+ LLPs</strong>&nbsp;in LLP annual filings.</p>
				</div>
				<div>Our LLP annual filings package includes: Drafting documents, application filing &amp; processing.</div>
				<div>Time required: &lt;5 working days</div>
				<div>Cost: Rs.2,999  onwards.</div>
				<div>Please follow the below steps to complete application:</div>
				<div><strong>Step 1: Fill application form - <a
							href="https://www.legalraasta.com/llp-annual-filings-application-form/" target="_blank" rel="noopener"
							data-mce-href="https://www.legalraasta.com/llp-annual-filings-application-form/">Click here</a></strong>
					<p><strong>Steps 2: Make payment : </strong>Total charge of : Rs.2,999 <strong>.&nbsp;</strong>Choose from the
						following options:</p>
					<ul>
						<li>Netbanking/ Credit card/ Debit card :&nbsp;<strong><a href="https://www.legalraasta.com/payment/"
									target="_blank" rel="noopener" data-mce-href="https://www.legalraasta.com/payment/">Click here
									to make Payment</a></strong></li>
						<li>Bank Transfer: Company: LegalRaasta Technologies Pvt. Ltd., Bank: Kotak Mahindra, Saraswati Vihar,
							Delhi, IFSC: KKBK0004604, A/c no: 9312250417</li>
					</ul>
					<p><strong>Step 3: Submit&nbsp;documents-&nbsp;</strong>Please email us the following&nbsp;documents&nbsp;(you
						can reply to this mail)</p>
					<ul>
						<li>Previous year return copy</li>
						<li>Current year Balance Sheet</li>
					</ul>
					<p>You can refer to the following articles for more information on LLP annual filings service.&nbsp;You can also
						view our Youtube guide on <a href="https://www.youtube.com/watch?v=uUAM62gK148" target="_blank"
							rel="noopener" data-mce-href="https://www.youtube.com/watch?v=uUAM62gK148">LLP Annual
							Filing</a>.&nbsp;Happy to help!!</p>
					<ol>
						<li><a href="https://www.legalraasta.com/llp-annual-fillings/"
								data-mce-href="https://www.legalraasta.com/llp-annual-fillings/">Guide for LLP Annual Filing
								service</a></li>
						<li><a href="https://www.legalraasta.com/is-llp-the-right-choice-for-your-business/"
								data-mce-href="https://www.legalraasta.com/is-llp-the-right-choice-for-your-business/">LLP Annual
								Filing service registration process</a></li>
					</ol>
					<p><strong>About LegalRaasta:<br></strong>LegalRaasta is India leading business services provider. LegalRaasta
						serves more than 2200+ businesses ever year. We offer 30+ services including <strong>GST, ITR, TDS, Company
							formation, Service tax, IEC, Trademark, FSSAI, ROC, ISO, &amp; Loans.</strong></p>
					<p>LegalRaasta also has <strong>tie ups with 40+ Banks &amp; NBFCs</strong> and can help you with
						<strong>business loans</strong>.</p>
					<p>Warm regards,<br>Team, LegalRaasta<br><em><a
								href="https://www.legalraasta.com/private-limited-company-registration/"
								data-mce-href="https://www.legalraasta.com/private-limited-company-registration/">Company
								formation</a> | <a href="https://www.legalraasta.com/trademark-registration/"
								data-mce-href="https://www.legalraasta.com/trademark-registration/">Trademark</a> | <a
								href="https://www.legalraasta.com/fssai-license/"
								data-mce-href="https://www.legalraasta.com/fssai-license/">Licenses</a> | <a
								href="https://www.legalraasta.com/gst-registration/"
								data-mce-href="https://www.legalraasta.com/gst-registration/">GST</a>, <a
								href="https://www.legalraasta.com/income-tax-return/"
								data-mce-href="https://www.legalraasta.com/income-tax-return/">ITR</a> &amp; <a
								href="https://www.legalraasta.com/tds-return/"
								data-mce-href="https://www.legalraasta.com/tds-return/">TDS</a> | <a
								href="https://www.legalraasta.com/loan/"
								data-mce-href="https://www.legalraasta.com/loan/">Loans</a></em><br>M:&nbsp;<a
							href="tel:%2B91%20875%20000%208585" data-mce-href="tel:%2B91%20875%20000%208585">+91 875 000
							8585</a>&nbsp;|&nbsp;<a href="https://www.legalraasta.com/"
							data-mce-href="https://www.legalraasta.com/">www.legalraasta.com</a><br>Head office: B-300, Saraswati
						Vihar, Pitampura, Delhi<br><a href="https://www.facebook.com/legalraasta/"
							data-mce-href="https://www.facebook.com/legalraasta/">Facebook</a>&nbsp;|&nbsp;<a
							href="https://www.linkedin.com/in/LegalRaasta/"
							data-mce-href="https://www.linkedin.com/in/LegalRaasta/">Linkedin</a>&nbsp;|&nbsp;<a
							href="https://twitter.com/LRaasta"
							data-mce-href="https://twitter.com/LRaasta">Twitter</a>&nbsp;|&nbsp;<a
							href="https://www.youtube.com/watch?v=NSIg1XT-KM0&amp;t=1s"
							data-mce-href="https://www.youtube.com/watch?v=NSIg1XT-KM0&amp;t=1s">YouTube</a></p>
				</div>
			</body>
		</html>';
		}else if(isset($_POST['service_code']) && $service_code == '047') {
			$Body='<html>
			<body>
				<p>Dear  '.$_POST['name'].'</p>
				<div>
					<p>This is Dev, Franchise Team Head at LegalRaasta. Thank you for showing your interest in becoming a part of
						LegalRaasta franchise network.</p>
					<p>LegalRaasta frachise has multiple advantages:<br>V Low Investment ( V Offer financial services (Loan, Tax,
						Accounting, Registration) to your network<br>V Over 80+ successful existing franchises<br>V Online marketing
						to help you expand business<br>V Training and education on all services.</p>
					<p>I or my team will reach out to you soon. You can call us at 8750006464.</p>
				</div>
				<p><strong>About LegalRaasta:</strong></p>
				<p>LegalRaasta is India leading business services provider. LegalRaasta serves more than 20,000+ businesses ever
					year. We offer 60+ services including:</p>
				<p><strong>Taxation: </strong>Accounting, GST, ITR, TDS<strong><br>Financial Services: </strong>Loans &amp;
					Insurance<strong><br>Software: </strong>Accounting, GST, ITR, TDS, POS, ERP
					software<strong><br>Registration/Licenses: </strong>Company formation, IEC, Trademark, FSSAI, ROC &amp;
					ISO<strong><br></strong></p>
				<p>With LegalRaasta franchise you get to offer all the above services to your client network.</p>
				<p>Warm regards,<br>Franchise Team, LegalRaasta<br><em><a
							href="https://www.legalraasta.com/private-limited-company-registration/"
							data-mce-href="https://www.legalraasta.com/private-limited-company-registration/">Company formation</a>
						| <a href="https://www.legalraasta.com/trademark-registration/"
							data-mce-href="https://www.legalraasta.com/trademark-registration/">Trademark</a> | <a
							href="https://www.legalraasta.com/fssai-license/"
							data-mce-href="https://www.legalraasta.com/fssai-license/">Licenses</a> | <a
							href="https://www.legalraasta.com/gst-registration/"
							data-mce-href="https://www.legalraasta.com/gst-registration/">GST</a>, <a
							href="https://www.legalraasta.com/income-tax-return/"
							data-mce-href="https://www.legalraasta.com/income-tax-return/">ITR</a> &amp; <a
							href="https://www.legalraasta.com/tds-return/"
							data-mce-href="https://www.legalraasta.com/tds-return/">TDS</a> | <a
							href="https://www.legalraasta.com/loan/"
							data-mce-href="https://www.legalraasta.com/loan/">Loans</a></em><br>M:&nbsp;<a
						href="tel:%2B91%20875%20000%206464" data-mce-href="tel:%2B91%20875%20000%206464">+91 875 000
						6464</a>&nbsp;|&nbsp;<a href="https://www.legalraasta.com/"
						data-mce-href="https://www.legalraasta.com/">www.legalraasta.com</a><br>Head office: B-300, Saraswati Vihar,
					Pitampura, Delhi<br><a href="https://www.facebook.com/legalraasta/"
						data-mce-href="https://www.facebook.com/legalraasta/">Facebook</a>&nbsp;|&nbsp;<a
						href="https://www.linkedin.com/in/LegalRaasta/"
						data-mce-href="https://www.linkedin.com/in/LegalRaasta/">Linkedin</a>&nbsp;|&nbsp;<a
						href="https://twitter.com/LRaasta" data-mce-href="https://twitter.com/LRaasta">Twitter</a>&nbsp;|</p>
			</body>
		</html>';
		}else if(isset($_POST['service_code']) && $service_code == '048') {
			$Body='<html>
			<body>
				<div>Dear  '.$_POST['name'].'<p>We&nbsp;welcome&nbsp;you to LegalRaasta&nbsp;customer&nbsp;family! Every
						year&nbsp;Legalraasta&nbsp;<strong>helps more than 500+ companies</strong>&nbsp;in Company annual filings.
					</p>
				</div>
				<div>Our Company annual filings package includes:&nbsp;Preparation of e form AOC 4 for filing financial statement,
					preparation of e form MGT 7 for filing annual return, documentation, filing with the registrar.<br>Time
					required: &lt;5 working days</div>
				<div>Cost: Rs. 3,499 onwards.</div>
				<div>Please follow the below steps to complete application:</div>
				<div><strong>Step 1: Fill application form - <a
							href="https://www.legalraasta.com/company-annual-filing-application-form/" target="_blank"
							rel="noopener" data-mce-href="https://www.legalraasta.com/company-annual-filing-application-form/">Click
							here</a></strong>
					<p><strong>Steps 2: Make payment : </strong>Total charge of Rs. 3,499<strong>.&nbsp;</strong>Choose from the
						following options:</p>
					<ul>
						<li>Netbanking/ Credit card/ Debit card :&nbsp;<strong><a href="https://www.legalraasta.com/payment/"
									target="_blank" rel="noopener" data-mce-href="https://www.legalraasta.com/payment/">Click here
									to make Payment</a></strong></li>
						<li>Bank Transfer: Company: LegalRaasta Technologies Pvt. Ltd., Bank: Kotak Mahindra, Saraswati Vihar,
							Delhi, IFSC: KKBK0004604, A/c no: 9312250417</li>
					</ul>
					<p><strong>Step 3: Submit&nbsp;documents-&nbsp;</strong>Please email us the following&nbsp;documents&nbsp;(you
						can reply to this mail)</p>
					<ul>
						<li>Financial Statements</li>
						<li>Details of Directors</li>
						<li>Details of Shareholders</li>
					</ul>
					<p>You can refer to the following articles for more information on Company annual filings
						service.&nbsp;&nbsp;You can also view our Youtube guide on <a
							href="https://www.youtube.com/watch?v=e6T7C3os_GE" target="_blank" rel="noopener"
							data-mce-href="https://www.youtube.com/watch?v=e6T7C3os_GE">company annual
							return&nbsp;filing</a>.&nbsp;Happy to help!!</p>
					<ol>
						<li><a href="https://www.legalraasta.com/company-annual-filing-importance/" target="_blank" rel="noopener"
								data-mce-href="https://www.legalraasta.com/company-annual-filing-importance/">Guide for importance
								of company annual filings</a></li>
					</ol>
					<p><strong>About LegalRaasta:<br></strong>LegalRaasta is India leading business services provider. LegalRaasta
						serves more than 2200+ businesses ever year. We offer 30+ services including <strong>GST, ITR, TDS, Company
							formation, Service tax, IEC, Trademark, FSSAI, ROC, ISO, &amp; Loans.</strong></p>
					<p>LegalRaasta also has <strong>tie ups with 40+ Banks &amp; NBFCs</strong> and can help you with
						<strong>business loans</strong>.</p>
					<p>Warm regards,<br>Team, LegalRaasta<br><em><a
								href="https://www.legalraasta.com/private-limited-company-registration/"
								data-mce-href="https://www.legalraasta.com/private-limited-company-registration/">Company
								formation</a> | <a href="https://www.legalraasta.com/trademark-registration/"
								data-mce-href="https://www.legalraasta.com/trademark-registration/">Trademark</a> | <a
								href="https://www.legalraasta.com/fssai-license/"
								data-mce-href="https://www.legalraasta.com/fssai-license/">Licenses</a> | <a
								href="https://www.legalraasta.com/gst-registration/"
								data-mce-href="https://www.legalraasta.com/gst-registration/">GST</a>, <a
								href="https://www.legalraasta.com/income-tax-return/"
								data-mce-href="https://www.legalraasta.com/income-tax-return/">ITR</a> &amp; <a
								href="https://www.legalraasta.com/tds-return/"
								data-mce-href="https://www.legalraasta.com/tds-return/">TDS</a> | <a
								href="https://www.legalraasta.com/loan/"
								data-mce-href="https://www.legalraasta.com/loan/">Loans</a></em><br>M:&nbsp;<a
							href="tel:%2B91%20875%20000%208585" data-mce-href="tel:%2B91%20875%20000%208585">+91 875 000
							8585</a>&nbsp;|&nbsp;<a href="https://www.legalraasta.com/"
							data-mce-href="https://www.legalraasta.com/">www.legalraasta.com</a><br>Head office: B-300, Saraswati
						Vihar, Pitampura, Delhi<br><a href="https://www.facebook.com/legalraasta/"
							data-mce-href="https://www.facebook.com/legalraasta/">Facebook</a>&nbsp;|&nbsp;<a
							href="https://www.linkedin.com/in/LegalRaasta/"
							data-mce-href="https://www.linkedin.com/in/LegalRaasta/">Linkedin</a>&nbsp;|&nbsp;<a
							href="https://twitter.com/LRaasta"
							data-mce-href="https://twitter.com/LRaasta">Twitter</a>&nbsp;|&nbsp;<a
							href="https://www.youtube.com/watch?v=NSIg1XT-KM0&amp;t=1s"
							data-mce-href="https://www.youtube.com/watch?v=NSIg1XT-KM0&amp;t=1s">YouTube</a></p>
				</div>
			</body>
		</html>';
		}else if(isset($_POST['service_code']) && $service_code == '049'){
			$Body="Need Mail In this Service";

		}else if(isset($_POST['service_code']) && $service_code == '050') {
			$Body='<html>
			<body>
				<p class="western">Dear  '.$_POST['name'].',</p>
				<p>Greetings from LegalRaasta - India’s top financial services platform! Every year LegalRaasta helps more than 500+
					companies with GST Registration.</p>
				<p><b>Time required</b>: &lt;5 working days*<br><b>Cost</b>: Rs. 999 onwards (incl. GST)</p>
				<p><b>Process:</b><br>Step 1: Fill the application form<br><b>Step 2: <a href="https://www.legalraasta.com/payment/"
							data-mce-href="https://www.legalraasta.com/payment/">Make payment</a></b></p>
				<p><b>Documents Required: </b>Pan Card of owners, Adhaar card of owners, Photograph of owners, Registration proof
					(Partnership Deed or COI in case of Company), Office address proof (electricity/ phone bill)</p>
				<p><b>LegalRaasta in News: </b><a
						href="https://economictimes.indiatimes.com/small-biz/startups/legalraasta-raises-rs-6-5-crore-in-angel-round/articleshow/51813536.cms"
						data-mce-href="https://economictimes.indiatimes.com/small-biz/startups/legalraasta-raises-rs-6-5-crore-in-angel-round/articleshow/51813536.cms">Economic
						times</a> | <a
						href="https://economictimes.indiatimes.com/small-biz/money/legal-business-consultancy-firm-legalraasta-raises-funds-to-provide-gst-c0mpliance-software-to-more-smes/articleshow/58638228.cms"
						data-mce-href="https://economictimes.indiatimes.com/small-biz/money/legal-business-consultancy-firm-legalraasta-raises-funds-to-provide-gst-c0mpliance-software-to-more-smes/articleshow/58638228.cms">IndiaTimes</a>
					| <a href="https://www.vccircle.com/exclusive-legal-raasta-raises-5-mn-in-series-a-round/"
						data-mce-href="https://www.vccircle.com/exclusive-legal-raasta-raises-5-mn-in-series-a-round/">VCCircle</a>
					| <a href="http://bwdisrupt.businessworld.in/article/Delhi-Based-Startup-LegalRaasta-Raises-5M-in-Series-A-Round-from-Impanix-Capital/12-05-2017-118035/"
						data-mce-href="http://bwdisrupt.businessworld.in/article/Delhi-Based-Startup-LegalRaasta-Raises-5M-in-Series-A-Round-from-Impanix-Capital/12-05-2017-118035/">BusinessWorld</a>
					| <a href="https://www.youtube.com/watch?v=NSIg1XT-KM0&amp;t=1s"
						data-mce-href="https://www.youtube.com/watch?v=NSIg1XT-KM0&amp;t=1s">YouTube</a><br><b><br></b>Warm
					regards,<br>Team, LegalRaasta<br><a href="https://www.legalraasta.com/private-limited-company-registration/"
						data-mce-href="https://www.legalraasta.com/private-limited-company-registration/"><i>Company
							formation</i></a><em>&nbsp;|&nbsp;</em><a href="https://www.legalraasta.com/trademark-registration/"
						data-mce-href="https://www.legalraasta.com/trademark-registration/"><i>Trademark</i></a><em>&nbsp;|&nbsp;</em><a
						href="https://www.legalraasta.com/fssai-license/"
						data-mce-href="https://www.legalraasta.com/fssai-license/"><i>Licenses</i></a><em>&nbsp;|&nbsp;</em><a
						href="https://www.legalraasta.com/gst-registration/"
						data-mce-href="https://www.legalraasta.com/gst-registration/"><i>GST</i></a><em> | </em><a
						href="https://www.legalraasta.com/accounting-bookkeeping/"
						data-mce-href="https://www.legalraasta.com/accounting-bookkeeping/"><i>Accounting</i></a><em>&nbsp;&nbsp;</em><i><br></i>M:&nbsp;<a
						href="tel:%2B91%20875%20000%208585" data-mce-href="tel:%2B91%20875%20000%208585">875 000
						8585</a>&nbsp;|&nbsp;<a href="https://www.legalraasta.com/"
						data-mce-href="https://www.legalraasta.com/">legalraasta.com</a><br>* <a
						href="https://www.legalraasta.com/terms-and-conditions/"
						data-mce-href="https://www.legalraasta.com/terms-and-conditions/">Terms &amp; Conditions</a></p>
			</body>
		</html>';
		}else if(isset($_POST['service_code']) && $service_code == '051') {
			$Body='<html>
			<body>
				<p>Dear  '.$_POST['name'].' </p>
				<p>Greetings from LegalRaasta - India’s top financial services platform! Every year LegalRaasta helps more than 500+
					companies in DSC Certification.</p>
				<p><b>Time required</b>: &lt;3 working days*<br><b>Cost</b>: Rs. 999 onwards (incl. GST)</p>
				<p>Process:<br>Step 1: Fill application form -&nbsp;<a
						href="https://www.legalraasta.com/digital-signature-dsc-application-form/"
						data-mce-href="https://www.legalraasta.com/digital-signature-dsc-application-form/">Click
						here</a><br><b>Step 2: Make payment: Rs. 999 onwards:&nbsp;</b><a
						href="https://www.legalraasta.com/payment/" data-mce-href="https://www.legalraasta.com/payment/"><b>Click
							here </b></a><br>Step 3: <a href="https://client.legalraasta.com/d.php"
						data-mce-href="https://client.legalraasta.com/d.php">Upload Documents&nbsp;</a></p>
				<p><b>Documents Required: </b>Pan Card of owner, Adhaar card of owner, Passport size photo<b><br></b><b>
					</b><br><b>LegalRaasta in News: </b><a
						href="https://economictimes.indiatimes.com/small-biz/startups/legalraasta-raises-rs-6-5-crore-in-angel-round/articleshow/51813536.cms"
						data-mce-href="https://economictimes.indiatimes.com/small-biz/startups/legalraasta-raises-rs-6-5-crore-in-angel-round/articleshow/51813536.cms">Economic
						times</a> | <a
						href="https://economictimes.indiatimes.com/small-biz/money/legal-business-consultancy-firm-legalraasta-raises-funds-to-provide-gst-c0mpliance-software-to-more-smes/articleshow/58638228.cms"
						data-mce-href="https://economictimes.indiatimes.com/small-biz/money/legal-business-consultancy-firm-legalraasta-raises-funds-to-provide-gst-c0mpliance-software-to-more-smes/articleshow/58638228.cms">IndiaTimes</a>
					| <a href="https://www.vccircle.com/exclusive-legal-raasta-raises-5-mn-in-series-a-round/"
						data-mce-href="https://www.vccircle.com/exclusive-legal-raasta-raises-5-mn-in-series-a-round/">VCCircle</a>
					| <a href="http://bwdisrupt.businessworld.in/article/Delhi-Based-Startup-LegalRaasta-Raises-5M-in-Series-A-Round-from-Impanix-Capital/12-05-2017-118035/"
						data-mce-href="http://bwdisrupt.businessworld.in/article/Delhi-Based-Startup-LegalRaasta-Raises-5M-in-Series-A-Round-from-Impanix-Capital/12-05-2017-118035/">BusinessWorld</a>
					| <a href="https://www.youtube.com/watch?v=NSIg1XT-KM0&amp;t=1s"
						data-mce-href="https://www.youtube.com/watch?v=NSIg1XT-KM0&amp;t=1s">YouTube</a><br><b><br></b>Warm
					regards,<br>Team, LegalRaasta<br><a href="https://www.legalraasta.com/private-limited-company-registration/"
						data-mce-href="https://www.legalraasta.com/private-limited-company-registration/"><i>Company
							formation</i></a><em>&nbsp;|&nbsp;</em><a href="https://www.legalraasta.com/trademark-registration/"
						data-mce-href="https://www.legalraasta.com/trademark-registration/"><i>Trademark</i></a><em>&nbsp;|&nbsp;</em><a
						href="https://www.legalraasta.com/fssai-license/"
						data-mce-href="https://www.legalraasta.com/fssai-license/"><i>Licenses</i></a><em>&nbsp;|&nbsp;</em><a
						href="https://www.legalraasta.com/gst-registration/"
						data-mce-href="https://www.legalraasta.com/gst-registration/"><i>GST</i></a><em> | </em><a
						href="https://www.legalraasta.com/accounting-bookkeeping/"
						data-mce-href="https://www.legalraasta.com/accounting-bookkeeping/"><i>Accounting</i></a><em>&nbsp;&nbsp;</em><i><br></i>M:&nbsp;<a
						href="tel:%2B91%20875%20000%208585" data-mce-href="tel:%2B91%20875%20000%208585">875 000
						8585</a>&nbsp;|&nbsp;<a href="https://www.legalraasta.com/"
						data-mce-href="https://www.legalraasta.com/">legalraasta.com</a><br>* <a
						href="https://www.legalraasta.com/terms-and-conditions/"
						data-mce-href="https://www.legalraasta.com/terms-and-conditions/">Terms &amp; Conditions</a></p>
			</body>
		</html>';

		}else if(isset($_POST['service_code']) && $service_code == '052') {
			$Body='<html>
			<body>
				<p>Hi  '.$_POST['name'].',</p>
				<p>Greetings from LegalRaasta - India’s top financial services platform! Every year LegalRaasta helps more than 100+
					companies in Microfinance Formation.</p>
				<p><b>Package includes: </b>Name search &amp; approval, DSC, DIN, Certificate of Incorporation, Pan card, Bank
					account opening assistance, Accounting software, Bookkeeping (1 month free)</p>
				<p><b>Time required:</b> &lt;15-30 working days</p>
				<p><b>Cost:</b> Rs. 1,90,000 onwards (incl. gst*)</p>
				<p><b>Process:</b> Step 1: Fill application form - <a href="https://www.legalraasta.com/micro-finance-application/"
						data-mce-href="https://www.legalraasta.com/micro-finance-application/">Click here<br><b>Step 2: Make
							payment: </b></a><a href="https://www.legalraasta.com/payment/"
						data-mce-href="https://www.legalraasta.com/payment/"><b>Click here</b><br><b>Step 3:</b> </a><a
						href="https://client.legalraasta.com/d.php/" data-mce-href="https://client.legalraasta.com/d.php/">Upload
						Documents</a></p>
				<p><b>Requirements: </b>Directors Pan, Directors Id proof (Prefer Aadhar Card), Directors photo, Residential Proof
					of registered office (Telephone or Mobile Bill/ Electricity or Gas Bill), Landlord NOC (we will provide the
					format), Bank statement/Utility bill of Director, No approval from RBI required under Section 8.</p>
				<p><b>LegalRaasta in News:</b><a
						href="https://economictimes.indiatimes.com/small-biz/startups/legalraasta-raises-rs-6-5-crore-in-angel-round/articleshow/51813536.cms"
						data-mce-href="https://economictimes.indiatimes.com/small-biz/startups/legalraasta-raises-rs-6-5-crore-in-angel-round/articleshow/51813536.cms">Economic
						times</a> | <a
						href="https://economictimes.indiatimes.com/small-biz/money/legal-business-consultancy-firm-legalraasta-raises-funds-to-provide-gst-c0mpliance-software-to-more-smes/articleshow/58638228.cms"
						data-mce-href="https://economictimes.indiatimes.com/small-biz/money/legal-business-consultancy-firm-legalraasta-raises-funds-to-provide-gst-c0mpliance-software-to-more-smes/articleshow/58638228.cms">IndiaTimes</a>
					| <a href="https://www.vccircle.com/exclusive-legal-raasta-raises-5-mn-in-series-a-round/"
						data-mce-href="https://www.vccircle.com/exclusive-legal-raasta-raises-5-mn-in-series-a-round/">VCCircle</a>|<a
						href="http://bwdisrupt.businessworld.in/article/Delhi-Based-Startup-LegalRaasta-Raises-5M-in-Series-A-Round-from-Impanix-Capital/12-05-2017-118035/"
						data-mce-href="http://bwdisrupt.businessworld.in/article/Delhi-Based-Startup-LegalRaasta-Raises-5M-in-Series-A-Round-from-Impanix-Capital/12-05-2017-118035/">BusinessWorld</a>
				</p>
				<p>Warm regards,<br>Team, LegalRaasta<br><a href="https://www.legalraasta.com/private-limited-company-registration/"
						data-mce-href="https://www.legalraasta.com/private-limited-company-registration/">Company formation | </a><a
						href="https://www.legalraasta.com/trademark-registration/"
						data-mce-href="https://www.legalraasta.com/trademark-registration/">Trademark</a><a
						href="https://www.legalraasta.com/private-limited-company-registration/"
						data-mce-href="https://www.legalraasta.com/private-limited-company-registration/"> | </a><a
						href="https://www.legalraasta.com/fssai-license/"
						data-mce-href="https://www.legalraasta.com/fssai-license/">Licenses</a><a
						href="https://www.legalraasta.com/private-limited-company-registration/"
						data-mce-href="https://www.legalraasta.com/private-limited-company-registration/"> | </a><a
						href="https://www.legalraasta.com/gst-registration/"
						data-mce-href="https://www.legalraasta.com/gst-registration/">GST</a><a
						href="https://www.legalraasta.com/private-limited-company-registration/"
						data-mce-href="https://www.legalraasta.com/private-limited-company-registration/"> | </a><a
						href="https://www.legalraasta.com/accounting-bookkeeping/"
						data-mce-href="https://www.legalraasta.com/accounting-bookkeeping/">Accounting</a><a
						href="https://www.legalraasta.com/private-limited-company-registration/"
						data-mce-href="https://www.legalraasta.com/private-limited-company-registration/"><br>M: 875 000 8585 |
					</a><a href="https://www.legalraasta.com/"
						data-mce-href="https://www.legalraasta.com/">legalraasta.com<br></a><a
						href="https://www.legalraasta.com/private-limited-company-registration/"
						data-mce-href="https://www.legalraasta.com/private-limited-company-registration/">*</a><a
						href="https://www.legalraasta.com/terms-and-conditions/"
						data-mce-href="https://www.legalraasta.com/terms-and-conditions/">Terms &amp; Conditions apply</a></p>
			</body>
		</html>';
		}else if(isset($_POST['service_code']) && $service_code == '053') {
			$Body='<html>
			<body>
				<div>Dear  '.$_POST['name'].'<p>We&nbsp;welcome&nbsp;you to LegalRaasta&nbsp;customer&nbsp;family! Every
						year&nbsp;Legalraasta&nbsp;<strong>helps more than 500+ companies</strong>&nbsp;in Maintenance of minute
						registration.</p>
				</div>
				<div>Our Maintenance of minute registration package includes:&nbsp;Preparation of Minutes (AGM, EGM, Board Minutes),
					Update register of members,&nbsp;Charge,&nbsp;Directors,&nbsp;Shareholder &amp;&nbsp;transfer.</div>
				<div>Time required: &lt;15 working days</div>
				<div>Cost: Rs. 14,999 only.</div>
				<div>Please follow the below steps to complete application:</div>
				<div><strong>Step 1: Fill application form - <a
							href="https://www.legalraasta.com/maintenance-of-minutes-application-form/" target="_blank"
							rel="noopener"
							data-mce-href="https://www.legalraasta.com/maintenance-of-minutes-application-form/">Click
							here</a></strong>
					<p><strong>Steps 2: Make payment : </strong>Total charge of Rs. 14,999<strong>.&nbsp;</strong>Choose from the
						following options:</p>
					<ul>
						<li>Netbanking/ Credit card/ Debit card :&nbsp;<strong><a href="https://www.legalraasta.com/payment/"
									target="_blank" rel="noopener" data-mce-href="https://www.legalraasta.com/payment/">Click here
									to make Payment</a></strong></li>
						<li>Bank Transfer: Company: LegalRaasta Technologies Pvt. Ltd., Bank: Kotak Mahindra, Saraswati Vihar,
							Delhi, IFSC: KKBK0004604, A/c no: 9312250417</li>
					</ul>
					<p><strong>Step 3: Submit&nbsp;documents-&nbsp;</strong>Please email us the following&nbsp;documents&nbsp;(you
						can reply to this mail)</p>
					<ul>
						<li>MOA</li>
						<li>Declaration</li>
					</ul>
					<p>You can refer to the following articles for more information on Maintenance of minute service.&nbsp;You can
						also view our Youtube guide on <a href="https://www.youtube.com/watch?v=pZsMJubAUqA" target="_blank"
							rel="noopener" data-mce-href="https://www.youtube.com/watch?v=pZsMJubAUqA">Legalraasta</a>.&nbsp;Happy
						to help!!</p>
					<ol>
						<li><a href="https://www.legalraasta.com/maintenance-of-minutes-of-a-company/" target="_blank"
								rel="noopener"
								data-mce-href="https://www.legalraasta.com/maintenance-of-minutes-of-a-company/">Guide for
								maintenance of minutes of company</a></li>
					</ol>
					<p><strong>About LegalRaasta:<br></strong>LegalRaasta is India leading business services provider. LegalRaasta
						serves more than 2200+ businesses ever year. We offer 30+ services including <strong>GST, ITR, TDS, Company
							formation, Service tax, IEC, Trademark, FSSAI, ROC, ISO, &amp; Loans.</strong></p>
					<p>LegalRaasta also has <strong>tie ups with 40+ Banks &amp; NBFCs</strong> and can help you with
						<strong>business loans</strong>.</p>
					<p>Warm regards,<br>Team, LegalRaasta<br><em><a
								href="https://www.legalraasta.com/private-limited-company-registration/"
								data-mce-href="https://www.legalraasta.com/private-limited-company-registration/">Company
								formation</a> | <a href="https://www.legalraasta.com/trademark-registration/"
								data-mce-href="https://www.legalraasta.com/trademark-registration/">Trademark</a> | <a
								href="https://www.legalraasta.com/fssai-license/"
								data-mce-href="https://www.legalraasta.com/fssai-license/">Licenses</a> | <a
								href="https://www.legalraasta.com/gst-registration/"
								data-mce-href="https://www.legalraasta.com/gst-registration/">GST</a>, <a
								href="https://www.legalraasta.com/income-tax-return/"
								data-mce-href="https://www.legalraasta.com/income-tax-return/">ITR</a> &amp; <a
								href="https://www.legalraasta.com/tds-return/"
								data-mce-href="https://www.legalraasta.com/tds-return/">TDS</a> | <a
								href="https://www.legalraasta.com/loan/"
								data-mce-href="https://www.legalraasta.com/loan/">Loans</a></em><br>M:&nbsp;<a
							href="tel:%2B91%20875%20000%208585" data-mce-href="tel:%2B91%20875%20000%208585">+91 875 000
							8585</a>&nbsp;|&nbsp;<a href="https://www.legalraasta.com/"
							data-mce-href="https://www.legalraasta.com/">www.legalraasta.com</a><br>Head office: B-300, Saraswati
						Vihar, Pitampura, Delhi<br><a href="https://www.facebook.com/legalraasta/"
							data-mce-href="https://www.facebook.com/legalraasta/">Facebook</a>&nbsp;|&nbsp;<a
							href="https://www.linkedin.com/in/LegalRaasta/"
							data-mce-href="https://www.linkedin.com/in/LegalRaasta/">Linkedin</a>&nbsp;|&nbsp;<a
							href="https://twitter.com/LRaasta"
							data-mce-href="https://twitter.com/LRaasta">Twitter</a>&nbsp;|&nbsp;<a
							href="https://www.youtube.com/watch?v=NSIg1XT-KM0&amp;t=1s"
							data-mce-href="https://www.youtube.com/watch?v=NSIg1XT-KM0&amp;t=1s">YouTube</a></p>
				</div>
			</body>
		</html>';	
		}else if(isset($_POST['service_code']) && $service_code == '054') {
			$Body='<html>
			<body>
				<div>Dear  '.$_POST['name'].'<p>We&nbsp;welcome&nbsp;you to LegalRaasta&nbsp;customer&nbsp;family! Every
						year&nbsp;Legalraasta&nbsp;<strong>helps more than 500+ companies</strong>&nbsp;in change in directors.</p>
				</div>
				<div>Our change in director&nbsp;package includes: Application filing &amp; processing and ROC registration fees.
				</div>
				<div>Time required: &lt;10 working days</div>
				<div>Cost: Rs. 3,999  onwards.</div>
				<div>Please follow the below steps to complete application:</div>
				<div><strong>Step 1: Fill application form - <a href="https://www.legalraasta.com/change-in-directors-application/"
							target="_blank" rel="noopener"
							data-mce-href="https://www.legalraasta.com/change-in-directors-application/">Click here</a></strong>
					<p><strong>Steps 2: Make payment : </strong>Total charge of Rs. 3,999 <strong>.&nbsp;</strong>Choose from the
						following options:</p>
					<ul>
						<li>Netbanking/ Credit card/ Debit card :&nbsp;<strong><a href="https://www.legalraasta.com/payment/"
									target="_blank" rel="noopener" data-mce-href="https://www.legalraasta.com/payment/">Click here
									to make Payment</a></strong></li>
						<li>Bank Transfer: Company: LegalRaasta Technologies Pvt. Ltd., Bank: Kotak Mahindra, Saraswati Vihar,
							Delhi, IFSC: KKBK0004604, A/c no: 9312250417</li>
					</ul>
					<p><strong>Step 3: Submit&nbsp;documents-&nbsp;</strong>Please email us the following&nbsp;documents&nbsp;(you
						can reply to this mail)</p>
					<ul>
						<li>PAN Card copy</li>
						<li>ID Proof (Prefer Aadhaar Card)</li>
						<li>Residential Proof (Telephone or Mobile Bill/ Electricity or Gas Bill)</li>
					</ul>
					<p>You can refer to the following articles for more information on change in director&nbsp;service.&nbsp;You can
						also view our Youtube guide on <a href="https://www.youtube.com/watch?v=HPNeSt3Fohc" target="_blank"
							rel="noopener" data-mce-href="https://www.youtube.com/watch?v=HPNeSt3Fohc">Change in
							Directors</a>.&nbsp;Happy to help!!</p>
					<ol>
						<li><a href="https://www.legalraasta.com/requirements-of-becoming-a-director-of-a-company/" target="_blank"
								rel="noopener"
								data-mce-href="https://www.legalraasta.com/requirements-of-becoming-a-director-of-a-company/">Procedure
								for change in director</a>.</li>
						<li><a href="https://www.legalraasta.com/directors-appointment-as-per-companies-act-2013/"
								data-mce-href="https://www.legalraasta.com/directors-appointment-as-per-companies-act-2013/">Guide
								to Appointment of Director</a></li>
						<li><a href="https://www.legalraasta.com/change-in-directors/"
								data-mce-href="https://www.legalraasta.com/change-in-directors/">Change in Directors registration
								process</a></li>
					</ol>
					<p><strong>About LegalRaasta:<br></strong>LegalRaasta is India leading business services provider. LegalRaasta
						serves more than 2200+ businesses ever year. We offer 30+ services including <strong>GST, ITR, TDS, Company
							formation, Service tax, IEC, Trademark, FSSAI, ROC, ISO, &amp; Loans.</strong></p>
					<p>LegalRaasta also has <strong>tie ups with 40+ Banks &amp; NBFCs</strong> and can help you with
						<strong>business loans</strong>.</p>
					<p>Warm regards,<br>Team, LegalRaasta<br><em><a
								href="https://www.legalraasta.com/private-limited-company-registration/"
								data-mce-href="https://www.legalraasta.com/private-limited-company-registration/">Company
								formation</a> | <a href="https://www.legalraasta.com/trademark-registration/"
								data-mce-href="https://www.legalraasta.com/trademark-registration/">Trademark</a> | <a
								href="https://www.legalraasta.com/fssai-license/"
								data-mce-href="https://www.legalraasta.com/fssai-license/">Licenses</a> | <a
								href="https://www.legalraasta.com/gst-registration/"
								data-mce-href="https://www.legalraasta.com/gst-registration/">GST</a>, <a
								href="https://www.legalraasta.com/income-tax-return/"
								data-mce-href="https://www.legalraasta.com/income-tax-return/">ITR</a> &amp; <a
								href="https://www.legalraasta.com/tds-return/"
								data-mce-href="https://www.legalraasta.com/tds-return/">TDS</a> | <a
								href="https://www.legalraasta.com/loan/"
								data-mce-href="https://www.legalraasta.com/loan/">Loans</a></em><br>M:&nbsp;<a
							href="tel:%2B91%20875%20000%208585" data-mce-href="tel:%2B91%20875%20000%208585">+91 875 000
							8585</a>&nbsp;|&nbsp;<a href="https://www.legalraasta.com/"
							data-mce-href="https://www.legalraasta.com/">www.legalraasta.com</a><br>Head office: B-300, Saraswati
						Vihar, Pitampura, Delhi<br><a href="https://www.facebook.com/legalraasta/"
							data-mce-href="https://www.facebook.com/legalraasta/">Facebook</a>&nbsp;|&nbsp;<a
							href="https://www.linkedin.com/in/LegalRaasta/"
							data-mce-href="https://www.linkedin.com/in/LegalRaasta/">Linkedin</a>&nbsp;|&nbsp;<a
							href="https://twitter.com/LRaasta"
							data-mce-href="https://twitter.com/LRaasta">Twitter</a>&nbsp;|&nbsp;<a
							href="https://www.youtube.com/watch?v=NSIg1XT-KM0&amp;t=1s"
							data-mce-href="https://www.youtube.com/watch?v=NSIg1XT-KM0&amp;t=1s">YouTube</a></p>
				</div>
			</body>
		</html>';
		}else if(isset($_POST['service_code']) && $service_code == '055') {
			$Body='<html>
				<body>
					<div>Dear  '.$_POST['name'].'<p>We&nbsp;welcome&nbsp;you to LegalRaasta&nbsp;customer&nbsp;family! Every
							year&nbsp;Legalraasta&nbsp;<strong>helps more than 1500+ companies</strong>&nbsp;in TAN&nbsp;registration.
						</p>
					</div>
					<div>Our TAN&nbsp;registration package includes: Application filing &amp; processing, Same day filing, &amp;
						Dispatch of TAN.</div>
					<div>Time required: &lt;2 working days</div>
					<div>Cost: Rs. 499 only.</div>
					<div>Please follow the below steps to complete application:</div>
					<div>
						<p><strong>Step 1: Fill application form - <a href="https://www.legalraasta.com/tan-application/"
									target="_blank" rel="noopener" data-mce-href="https://www.legalraasta.com/tan-application/">Click
									here</a></strong></p>
						<p><strong>Steps 2: Make payment : </strong>Total charge of Rs. 499<strong>.&nbsp;</strong>Choose from the
							following options:</p>
						<ul>
							<li>Netbanking/ Credit card/ Debit card :&nbsp;<strong><a href="https://www.legalraasta.com/payment/"
										target="_blank" rel="noopener" data-mce-href="https://www.legalraasta.com/payment/">Click here
										to make Payment</a></strong></li>
							<li>Bank Transfer: Company: LegalRaasta Technologies Pvt. Ltd., Bank: Kotak Mahindra, Saraswati Vihar,
								Delhi, IFSC: KKBK0004604, A/c no: 9312250417</li>
						</ul>
						<p><strong>Step 3: Submit&nbsp;documents-&nbsp;</strong>Please email us the following&nbsp;documents&nbsp;(you
							can reply to this mail)</p>
						<ul>
							<li>ID Proof (Prefer Aadhaar Card)</li>
							<li>Residential Proof (Telephone or Mobile Bill/ Electricity or Gas Bill)</li>
						</ul>
						<p>You can refer to the following articles for more information on TAN&nbsp;service.&nbsp;&nbsp;You can also
							view our Youtube guide on <a href="https://www.youtube.com/watch?v=WqkOLlaeW1Y" target="_blank"
								rel="noopener" data-mce-href="https://www.youtube.com/watch?v=WqkOLlaeW1Y">Tan
								Application</a>.&nbsp;Happy to help!!</p>
						<ol>
							<li><a href="https://www.legalraasta.com/how-to-apply-tan-in-india/" target="_blank" rel="noopener"
									data-mce-href="https://www.legalraasta.com/how-to-apply-tan-in-india/">How to apply TAN in India</a>
							</li>
							<li><a href="https://www.legalraasta.com/documents-required-to-obtain-tan/" target="_blank" rel="noopener"
									data-mce-href="https://www.legalraasta.com/documents-required-to-obtain-tan/">Document required to
									obtain TAN</a>.</li>
						</ol>
						<p><strong>About LegalRaasta:<br></strong>LegalRaasta is India leading business services provider. LegalRaasta
							serves more than 2200+ businesses ever year. We offer 30+ services including <strong>GST, ITR, TDS, Company
								formation, Service tax, IEC, Trademark, FSSAI, ROC, ISO, &amp; Loans.</strong></p>
						<p>LegalRaasta also has <strong>tie ups with 40+ Banks &amp; NBFCs</strong> and can help you with
							<strong>business loans</strong>.</p>
						<p>Warm regards,<br>Team, LegalRaasta<br><em><a
									href="https://www.legalraasta.com/private-limited-company-registration/"
									data-mce-href="https://www.legalraasta.com/private-limited-company-registration/">Company
									formation</a> | <a href="https://www.legalraasta.com/trademark-registration/"
									data-mce-href="https://www.legalraasta.com/trademark-registration/">Trademark</a> | <a
									href="https://www.legalraasta.com/fssai-license/"
									data-mce-href="https://www.legalraasta.com/fssai-license/">Licenses</a> | <a
									href="https://www.legalraasta.com/gst-registration/"
									data-mce-href="https://www.legalraasta.com/gst-registration/">GST</a>, <a
									href="https://www.legalraasta.com/income-tax-return/"
									data-mce-href="https://www.legalraasta.com/income-tax-return/">ITR</a> &amp; <a
									href="https://www.legalraasta.com/tds-return/"
									data-mce-href="https://www.legalraasta.com/tds-return/">TDS</a> | <a
									href="https://www.legalraasta.com/loan/"
									data-mce-href="https://www.legalraasta.com/loan/">Loans</a></em><br>M:&nbsp;<a
								href="tel:%2B91%20875%20000%208585" data-mce-href="tel:%2B91%20875%20000%208585">+91 875 000
								8585</a>&nbsp;|&nbsp;<a href="https://www.legalraasta.com/"
								data-mce-href="https://www.legalraasta.com/">www.legalraasta.com</a><br>Head office: B-300, Saraswati
							Vihar, Pitampura, Delhi<br><a href="https://www.facebook.com/legalraasta/"
								data-mce-href="https://www.facebook.com/legalraasta/">Facebook</a>&nbsp;|&nbsp;<a
								href="https://www.linkedin.com/in/LegalRaasta/"
								data-mce-href="https://www.linkedin.com/in/LegalRaasta/">Linkedin</a>&nbsp;|&nbsp;<a
								href="https://twitter.com/LRaasta"
								data-mce-href="https://twitter.com/LRaasta">Twitter</a>&nbsp;|&nbsp;<a
								href="https://www.youtube.com/watch?v=NSIg1XT-KM0&amp;t=1s"
								data-mce-href="https://www.youtube.com/watch?v=NSIg1XT-KM0&amp;t=1s">YouTube</a></p>
					</div>
				</body>
		 </html>';
		}else if(isset($_POST['service_code']) && $service_code == '056') {
			$Body='<html>
			<body>
				<p>Dear  '.$_POST['name'].'</p>
				<p>Greetings from LegalRaasta - India’s top financial services platform! Every year LegalRaasta helps more than 500+
					companies in Patent Registration.</p>
				<p>Package includes: Application Drafting, Application Filing, and Government Fees</p>
				<p><b>Time required</b>: &lt;25-40 working days*<br><b>Cost</b>:</p>
				<p>Provisional: Rs. 29,999  onwards (incl. GST)</p>
				<p>Permanent: : Rs. 49,999  onwards (incl. GST)</p>
				<p>Process:<br>Step 1: Fill application form -&nbsp;<a
						href="https://www.legalraasta.com/file-patent-application-form/"
						data-mce-href="https://www.legalraasta.com/file-patent-application-form/">Click here</a><a
						href="https://www.legalraasta.com/private-limited-registration/"
						data-mce-href="https://www.legalraasta.com/private-limited-registration/">&nbsp;</a><br><b>Step 2: Make
						payment: </b><a href="https://www.legalraasta.com/payment/"
						data-mce-href="https://www.legalraasta.com/payment/"><b>Click here </b></a><br>Step 3: <a
						href="https://client.legalraasta.com/d.php" data-mce-href="https://client.legalraasta.com/d.php">Upload
						Documents&nbsp;</a></p>
				<p><b>Documents Required: </b>Details of Invention</p>
				<p>You can also view our Youtube guide on<b>&nbsp;</b><a
						href="https://www.youtube.com/watch?v=yMSd5YrAdN0&amp;t=26s"
						data-mce-href="https://www.youtube.com/watch?v=yMSd5YrAdN0&amp;t=26s">Patent Registration</a> | <a
						href="https://drive.google.com/file/d/10t5mT6onjreWKrEWqx7Phdy8OnWryVoW/view?usp=sharing"
						data-mce-href="https://drive.google.com/file/d/10t5mT6onjreWKrEWqx7Phdy8OnWryVoW/view?usp=sharing">Patent
						Guidebook</a></p>
				<p><b>Le</b><b>galRaasta in News: </b><a
						href="https://economictimes.indiatimes.com/small-biz/startups/legalraasta-raises-rs-6-5-crore-in-angel-round/articleshow/51813536.cms"
						data-mce-href="https://economictimes.indiatimes.com/small-biz/startups/legalraasta-raises-rs-6-5-crore-in-angel-round/articleshow/51813536.cms">Economic
						times</a> | <a
						href="https://economictimes.indiatimes.com/small-biz/money/legal-business-consultancy-firm-legalraasta-raises-funds-to-provide-gst-c0mpliance-software-to-more-smes/articleshow/58638228.cms"
						data-mce-href="https://economictimes.indiatimes.com/small-biz/money/legal-business-consultancy-firm-legalraasta-raises-funds-to-provide-gst-c0mpliance-software-to-more-smes/articleshow/58638228.cms">IndiaTimes</a>
					| <a href="https://www.vccircle.com/exclusive-legal-raasta-raises-5-mn-in-series-a-round/"
						data-mce-href="https://www.vccircle.com/exclusive-legal-raasta-raises-5-mn-in-series-a-round/">VCCircle</a>
					| <a href="http://bwdisrupt.businessworld.in/article/Delhi-Based-Startup-LegalRaasta-Raises-5M-in-Series-A-Round-from-Impanix-Capital/12-05-2017-118035/"
						data-mce-href="http://bwdisrupt.businessworld.in/article/Delhi-Based-Startup-LegalRaasta-Raises-5M-in-Series-A-Round-from-Impanix-Capital/12-05-2017-118035/">BusinessWorld</a>
					| <a href="https://www.youtube.com/watch?v=NSIg1XT-KM0&amp;t=1s"
						data-mce-href="https://www.youtube.com/watch?v=NSIg1XT-KM0&amp;t=1s">YouTube</a></p>
				<p><b><br></b>Warm regards,<br>Team, LegalRaasta<br><a
						href="https://www.legalraasta.com/private-limited-company-registration/"
						data-mce-href="https://www.legalraasta.com/private-limited-company-registration/"><i>Company
							formation</i></a><em>&nbsp;|&nbsp;</em><a href="https://www.legalraasta.com/trademark-registration/"
						data-mce-href="https://www.legalraasta.com/trademark-registration/"><i>Trademark</i></a><em>&nbsp;|&nbsp;</em><a
						href="https://www.legalraasta.com/fssai-license/"
						data-mce-href="https://www.legalraasta.com/fssai-license/"><i>Licenses</i></a><em>&nbsp;|&nbsp;</em><a
						href="https://www.legalraasta.com/gst-registration/"
						data-mce-href="https://www.legalraasta.com/gst-registration/"><i>GST</i></a><em> | </em><a
						href="https://www.legalraasta.com/accounting-bookkeeping/"
						data-mce-href="https://www.legalraasta.com/accounting-bookkeeping/"><i>Accounting</i></a><em>&nbsp;&nbsp;</em><i><br></i>M:&nbsp;<a
						href="tel:%2B91%20875%20000%208585" data-mce-href="tel:%2B91%20875%20000%208585">875 000
						8585</a>&nbsp;|&nbsp;<a href="https://www.legalraasta.com/"
						data-mce-href="https://www.legalraasta.com/">legalraasta.com</a><br>* <a
						href="https://www.legalraasta.com/terms-and-conditions/"
						data-mce-href="https://www.legalraasta.com/terms-and-conditions/">Terms &amp; Conditions</a></p>
			</body>
		</html>';
		}else if(isset($_POST['service_code']) && $service_code == '057') {
			$Body='<html>
			<body>
				<p>Dear  '.$_POST['name'].',</p>
				<p>Greetings from LegalRaasta - India’s top financial services platform! Every year LegalRaasta helps more than 500+
					companies in Trademark Registration.</p>
				<p><b>Package includes:</b> Trademark&nbsp;consultation, application preparation, trademark search, application
					filing, same day filing &amp; government fees.</p>
				<p><b>Time required</b>: &lt;3 working days (application filing) *<br><b>Cost (incl. government fee) *</b>:</p>
				<p>Individual/Proprietorship: Rs. 5,999 (incl. GST)</p>
				<p>Company: Rs. 7,499 (incl. GST)</p>
				<p>Process:<br>Step 1: Fill application form -&nbsp;<a href="https://www.legalraasta.com/trademark-application-2"
						data-mce-href="https://www.legalraasta.com/trademark-application-2">Click here</a><br><b>Step 2: <a
							href="https://www.legalraasta.com/payment/" data-mce-href="https://www.legalraasta.com/payment/">Make
							payment</a></b></p>
				<p><b>Documents Required: </b>PAN Card copy, ID Proof (Prefer Aadhaar Card), Residential Proof (Telephone or Mobile
					Bill/ Electricity or Gas Bill), Incorporation documents (in case of a company)</p>
				<p>You can also view our <a
						href="https://drive.google.com/file/d/1Tje68gnJ8j-9FP_gbrlfTy3MBEB_6psJ/view?usp=sharing"
						data-mce-href="https://drive.google.com/file/d/1Tje68gnJ8j-9FP_gbrlfTy3MBEB_6psJ/view?usp=sharing">Trademark
						Guidebook</a></p>
				<p><b>LegalRaasta in News: </b><a
						href="https://economictimes.indiatimes.com/small-biz/startups/legalraasta-raises-rs-6-5-crore-in-angel-round/articleshow/51813536.cms"
						data-mce-href="https://economictimes.indiatimes.com/small-biz/startups/legalraasta-raises-rs-6-5-crore-in-angel-round/articleshow/51813536.cms">Economic
						times</a> | <a
						href="https://economictimes.indiatimes.com/small-biz/money/legal-business-consultancy-firm-legalraasta-raises-funds-to-provide-gst-c0mpliance-software-to-more-smes/articleshow/58638228.cms"
						data-mce-href="https://economictimes.indiatimes.com/small-biz/money/legal-business-consultancy-firm-legalraasta-raises-funds-to-provide-gst-c0mpliance-software-to-more-smes/articleshow/58638228.cms">IndiaTimes</a>
					| <a href="https://www.vccircle.com/exclusive-legal-raasta-raises-5-mn-in-series-a-round/"
						data-mce-href="https://www.vccircle.com/exclusive-legal-raasta-raises-5-mn-in-series-a-round/">VCCircle</a>
					| <a href="http://bwdisrupt.businessworld.in/article/Delhi-Based-Startup-LegalRaasta-Raises-5M-in-Series-A-Round-from-Impanix-Capital/12-05-2017-118035/"
						data-mce-href="http://bwdisrupt.businessworld.in/article/Delhi-Based-Startup-LegalRaasta-Raises-5M-in-Series-A-Round-from-Impanix-Capital/12-05-2017-118035/">BusinessWorld</a>
					| <a href="https://www.youtube.com/watch?v=NSIg1XT-KM0&amp;t=1s"
						data-mce-href="https://www.youtube.com/watch?v=NSIg1XT-KM0&amp;t=1s">YouTube</a></p>
				<p><b><br></b>Warm regards,<br>Team, LegalRaasta<br><a
						href="https://www.legalraasta.com/private-limited-company-registration/"
						data-mce-href="https://www.legalraasta.com/private-limited-company-registration/"><i>Company
							formation</i></a><em>&nbsp;|&nbsp;</em><a href="https://www.legalraasta.com/trademark-registration/"
						data-mce-href="https://www.legalraasta.com/trademark-registration/"><i>Trademark</i></a><em>&nbsp;|&nbsp;</em><a
						href="https://www.legalraasta.com/fssai-license/"
						data-mce-href="https://www.legalraasta.com/fssai-license/"><i>Licenses</i></a><em>&nbsp;|&nbsp;</em><a
						href="https://www.legalraasta.com/gst-registration/"
						data-mce-href="https://www.legalraasta.com/gst-registration/"><i>GST</i></a><em> | </em><a
						href="https://www.legalraasta.com/accounting-bookkeeping/"
						data-mce-href="https://www.legalraasta.com/accounting-bookkeeping/"><i>Accounting</i></a><em>&nbsp;&nbsp;</em><i><br></i>M:&nbsp;<a
						href="tel:%2B91%20875%20000%208585" data-mce-href="tel:%2B91%20875%20000%208585">875 000
						8585</a>&nbsp;|&nbsp;<a href="https://www.legalraasta.com/"
						data-mce-href="https://www.legalraasta.com/">legalraasta.com</a><br>* <a
						href="https://www.legalraasta.com/terms-and-conditions/"
						data-mce-href="https://www.legalraasta.com/terms-and-conditions/">Terms &amp; Conditions</a> apply. For
					companies,&gt; 5cr turnover charges are 11,499 (incl. GST).</p>
				<h6 class="western">*If any objection comes to your trademark, the fees will be extra for the further process of
					reply application in the department.</h6>
			</body>
		</html>';
		}else{
            $Body =$Body='<html>
			<body>
				<p>Dear  '.$_POST['name'].',</p>
				<p>Thanks for Submission of this Service </p>
				

				<p>You can also view our <a
						href="https://drive.google.com/file/d/1Tje68gnJ8j-9FP_gbrlfTy3MBEB_6psJ/view?usp=sharing"
						data-mce-href="https://drive.google.com/file/d/1Tje68gnJ8j-9FP_gbrlfTy3MBEB_6psJ/view?usp=sharing">Trademark
						Guidebook</a></p>
				<p><b>LegalRaasta in News: </b><a
						href="https://economictimes.indiatimes.com/small-biz/startups/legalraasta-raises-rs-6-5-crore-in-angel-round/articleshow/51813536.cms"
						data-mce-href="https://economictimes.indiatimes.com/small-biz/startups/legalraasta-raises-rs-6-5-crore-in-angel-round/articleshow/51813536.cms">Economic
						times</a> | <a
						href="https://economictimes.indiatimes.com/small-biz/money/legal-business-consultancy-firm-legalraasta-raises-funds-to-provide-gst-c0mpliance-software-to-more-smes/articleshow/58638228.cms"
						data-mce-href="https://economictimes.indiatimes.com/small-biz/money/legal-business-consultancy-firm-legalraasta-raises-funds-to-provide-gst-c0mpliance-software-to-more-smes/articleshow/58638228.cms">IndiaTimes</a>
					| <a href="https://www.vccircle.com/exclusive-legal-raasta-raises-5-mn-in-series-a-round/"
						data-mce-href="https://www.vccircle.com/exclusive-legal-raasta-raises-5-mn-in-series-a-round/">VCCircle</a>
					| <a href="http://bwdisrupt.businessworld.in/article/Delhi-Based-Startup-LegalRaasta-Raises-5M-in-Series-A-Round-from-Impanix-Capital/12-05-2017-118035/"
						data-mce-href="http://bwdisrupt.businessworld.in/article/Delhi-Based-Startup-LegalRaasta-Raises-5M-in-Series-A-Round-from-Impanix-Capital/12-05-2017-118035/">BusinessWorld</a>
					| <a href="https://www.youtube.com/watch?v=NSIg1XT-KM0&amp;t=1s"
						data-mce-href="https://www.youtube.com/watch?v=NSIg1XT-KM0&amp;t=1s">YouTube</a></p>
				<p><b><br></b>Warm regards,<br>Team, LegalRaasta<br><a
						href="https://www.legalraasta.com/private-limited-company-registration/"
						data-mce-href="https://www.legalraasta.com/private-limited-company-registration/"><i>Company
							formation</i></a><em>&nbsp;|&nbsp;</em><a href="https://www.legalraasta.com/trademark-registration/"
						data-mce-href="https://www.legalraasta.com/trademark-registration/"><i>Trademark</i></a><em>&nbsp;|&nbsp;</em><a
						href="https://www.legalraasta.com/fssai-license/"
						data-mce-href="https://www.legalraasta.com/fssai-license/"><i>Licenses</i></a><em>&nbsp;|&nbsp;</em><a
						href="https://www.legalraasta.com/gst-registration/"
						data-mce-href="https://www.legalraasta.com/gst-registration/"><i>GST</i></a><em> | </em><a
						href="https://www.legalraasta.com/accounting-bookkeeping/"
						data-mce-href="https://www.legalraasta.com/accounting-bookkeeping/"><i>Accounting</i></a><em>&nbsp;&nbsp;</em><i><br></i>M:&nbsp;<a
						href="tel:%2B91%20875%20000%208585" data-mce-href="tel:%2B91%20875%20000%208585">875 000
						8585</a>&nbsp;|&nbsp;<a href="https://www.legalraasta.com/"
						data-mce-href="https://www.legalraasta.com/">legalraasta.com</a><br>* <a
						href="https://www.legalraasta.com/terms-and-conditions/"
						data-mce-href="https://www.legalraasta.com/terms-and-conditions/">Terms &amp; Conditions</a> apply. For
					companies,&gt; 5cr turnover charges are 11,499 (incl. GST).</p>
				<h6 class="western">*If any objection comes to your trademark, the fees will be extra for the further process of
					reply application in the department.</h6>
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
