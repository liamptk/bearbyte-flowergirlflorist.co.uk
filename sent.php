<?php
		$name = $_POST['cname'];
		$email = $_POST['cemail'];
		$number = $_POST['cnumber'];
		$message = $_POST['cmessage'];

		$formcontent="From: $name \n Message: $message \n Contact Number: $number";
		$recipient="";
		$subject="Flower Girl Florist Enquiry";
		$mailheader="From: $email \r\n";

		$success = mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
		if($success) {
			header('Location: http://www.flowergirlflorist.co.uk/thankyou.php');
		} else {	
			header('Location: http://www.flowergirlflorist.co.uk/sorry.php');		
		}
?>