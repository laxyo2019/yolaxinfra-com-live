<?php
session_start();

if(($_REQUEST['captcha'] == $_SESSION['vercode'])){
	$name	=	$_REQUEST['name'];
	$company_name	= $_REQUEST['company-name'];
	$email	=	$_REQUEST['email'];
	$mobile	=	$_REQUEST['mobile'];
	$plant	=	$_REQUEST['plant'];
	$state	=	$_REQUEST['state'];
	$open_power	=	$_REQUEST['open_power'];
	$captive_power	=	$_REQUEST['captive_power'];
	$capacity	=	$_REQUEST['capacity'];
	$power_consumption	=	$_REQUEST['power_consumption'];
	$steam	=	$_REQUEST['steam'];
	$steam_consumption	=	$_REQUEST['steam_consumption'];
	$production	=	$_REQUEST['production'];
	$message	=	$_REQUEST['message'];
	//$name	=	$_REQUEST['name'];
	//Here you can write your sql insert statement. 
	$htmlStr = "";
    $htmlStr .= "Name: " . $name . ",<br />";
    $htmlStr .= $company_name. "<br />";
    $htmlStr .= $email . "<br />";
	$htmlStr .= $mobile . "<br /><br /><br />";
	$htmlStr .= "Detailed about plant selector ". $plant . "<br />";
	$htmlStr .= "Power Sources <br />";
	$htmlStr .= "I. State Electricity Board :- ". $state . "<br />";
	$htmlStr .= "II. Open Access Power :- ". $open_power . "<br />";
	$htmlStr .= "III. Captive Power Plant & Capacity :- ". $captive_power . "<br />";
	$htmlStr .= "Capacity :-". $capacity . "<br /><br />";
	$htmlStr .= "Average Power consumption Monthly :- ". $power_consumption . "<br /><br /><br />";
	$htmlStr .= "Steam Generation Source :- ". $steam . "<br />";
	$htmlStr .= "Steam Consumption per Day :- ". $steam_consumption . "<br />";
	$htmlStr .= "Production Per Day :- ". $production . "<br />";
	$htmlStr .= "Your Requirement or Inquiry is:- <br />";
	$htmlStr .= $message . "<br />";
	
    $htmlStr .= "Kind regards<br />";
    $email_sender = $email;
	$subject = "Enquiry for Yolax Infra Energy";
    $recipient_email = "info@yolaxinfra.com";
	$headers  = "MIME-Version: 1.0 \r\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1 \r\n";
    $headers .= "From: {Yolax} <{$email_sender}> \n";
 	$body = $htmlStr;
	mail($recipient_email, $subject, $body, $headers);
	echo 1;
}else{
	echo 0;
}

?>
