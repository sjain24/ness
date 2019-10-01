<?php

	function test_input($input){

		global $data;

		$data= trim($input);
		$data= stripslashes($data);
		$data= htmlspecialchars($data, ENT_QUOTES);
		return $data;
	}
	
	function send_mail($to, $subject, $email_welcome, $email_body, $email_thankyou){

		require("PHPMailer/PHPMailerAutoload.php");

		//PHPMailer Object
		$mail = new PHPMailer;

		$mail->IsSMTP();
		//$mail->SMTPDebug = 2;

		$mail->SMTPOptions = array(
		    'ssl' => array(
		        'verify_peer' => false,
		        'verify_peer_name' => false,
		        'allow_self_signed' => true
		    )
		);
		
		$mail->Host= gethostbyname('smtp.gmail.com');
		$mail->SMTPAuth= true;

		//authentication
		$mail->Username= "helpdesk@alcheringa.in";
		$mail->Password= "echoesofalcheringa";

		$mail->Port = 587;
		$mail->SMTPSecure = 'tls';

		//From email address and name
		$mail->From = "publicrelations@alcheringa.in";
		$mail->FromName = "Alcheringa, IIT Guwahati";

		//To address and name
		$mail->addAddress($to); //Recipient name is optional

		//Address to which recipient will reply
		$mail->addReplyTo("publicrelations@alcheringa.in", "Reply");

		//Send HTML or Plain Text email
		$mail->isHTML(true);

		$mail->Subject = $subject;

		$mailbody= file_get_contents("email.php");
		$mailbody= str_replace("#email_welcome#", $email_welcome, $mailbody);
		$mailbody= str_replace("#email_body#", $email_body, $mailbody);
		$mailbody= str_replace("#email_thankyou#", $email_thankyou, $mailbody);

		$mail->Body = $mailbody;
		
		global $mail_sent;

		if(!$mail->send()){
			$mail_sent = false;
		}
		else{
			$mail_sent = true;
		}

	}

function send_sms($to, $message){

		$username = urlencode("u32848"); 
        $msg_token = urlencode("q5UTAY"); 
		$sender_id = urlencode("ALCHER"); 
		$message = urlencode($message);
		$mobile = urlencode($to); 
		
		$api = "http://managesms.arsaviva.com/api/send_transactional_sms.php?username=".$username."&msg_token=".$msg_token."&sender_id=".$sender_id."&message=".$message."&mobile=".$mobile."";
		
		global $sms_response;
		
		$sms_response = file_get_contents($api);

	}
    
    $name_pattern = "A-Za-z ";
	$team_name_pattern = "A-Za-z0-9";
	$phone_pattern = "0-9";
	$alcher_id_pattern = "a-zA-Z0-9-";
	
?>