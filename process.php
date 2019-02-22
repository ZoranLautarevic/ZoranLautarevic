<?php ob_start();



	if(isset($_POST['submit'])) {
		
	$to = "zlautarevic@sbb.rs";
	$subject = $_POST['subject'];
	$email = $_POST['email'];
	$txt = $_POST['message'];
	$headers = "From: " .$email . "\r\n" .
	"CC: somebodyelse@example.com";
	
	mail($to,$subject,$txt,$headers);
	
	header("Location: contact.html");
	
	/*$to = "somebody@example.com";
          $subject = "My subject";
          $txt = "Hello world!";
          $headers = "From: webmaster@example.com" . "\r\n" .
          "CC: somebodyelse@example.com";

          mail($to,$subject,$txt,$headers);*/

		
	
	}




?>
