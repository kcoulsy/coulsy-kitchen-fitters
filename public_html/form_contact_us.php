<?php
include('includes/config.php');
// Variables
	$firstName		=		$_POST['firstName']; 
	$lastName		=		$_POST['lastName']; 
	$emailAddress	=		$_POST['emailAddress']; 
	$phone			=		$_POST['phone']; 
	$mail			=		$_POST['email'];
	$web			=		$_POST['website'];
	$message		=		$_POST['message'];
	$dest			= 		$destin;//This is in config
	
// CAPTCHA DEVILCANTBURN
	if($_POST['1'] + $_POST['2'] != $_POST['check']) {
		header("location:contact.php?doh=error");
	}
	elseif($_POST['1'] + $_POST['2'] == $_POST['check']) {

// Exit page after submit
$exit_page = 	"contact.php?thx=sent";

$headers = 		"MIME-Version: 1.0\r\n"; 
 
$headers .= 	"Content-type: text/html; charset=iso-8859-1\r\n"; 
 
$headers .= 	"From: $firstName $lastName <$emailAddress>\r\nReply-to : $firstName $lastName <$emailAddress>\nX-Mailer:PHP"; 
 
$subject=		"Contact from your website $website_name Enquiry Form";

$destinataire=	"$dest";

$body=			"<b>$website_name Contact Page Enquiry Form</b>
<br /><br />
Enquirer: <b>$firstName&nbsp;$lastName</b>
<br /><br />
Phone Number: <b>$phone</b>
<br /><br />
Message: <b>$message</b>";

mail($destinataire,$subject,$body,$headers);

///////////////////////////////////////////////////////


///////////////////////////////////////////////////////
// This section is the automated reply to the enquirer. 

// Mine Version 
$headers2 = "MIME-Version: 1.0\r\n"; 
 
// Mail format 
$headers2 .= "Content-type: text/html; charset=iso-8859-1\r\n"; 


// Expeditor and Email reply
$headers2 .= "From: $website_name <$dest>\r\nReply-to : $website_name <$dest>\nX-Mailer:PHP"; 
 
$subject2="Automatic $website_name mail reply";

$destinataire2="$emailAddress";

$body2="<b>Many Thanks $firstName&nbsp;for your enquiry.</b>
<br />
<br />
Message: <b>$message</b>
<br />
<br />
I'll get in touch as quick as I can via your:
<br />
<br />
Your Email:&nbsp;<b>$emailAddress</b>
<br />
<br />
Or Your Phone Number:&nbsp;<b>$phone</b>
<br />
<br />
<br />
<br />
With Thanks
<br />
<!--$website_name
<br />
$domain_name-->
<br /><br />
Email Disclaimer
<br /><br />
This email and any attachments to it may be confidential and are intended solely for the use of the individual to whom it is addressed. <br />
Any views or opinions expressed are solely those of the author and do not necessarily represent those of Coulsy Kitchen Fitters.<br />
If you are not the intended recipient of this email, you must neither take any action based upon its contents, nor copy or show it to anyone.<br />
Please contact the sender if you believe you have received this email in error.
"; 

mail($destinataire2,$subject2,$body2,$headers2);

Header("Location: ".$exit_page);
}
?>