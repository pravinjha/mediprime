<?php
  $siteDonaim = 'maxmedica.in';
  
  $to = 'mediprimes@gmail.com'; 
  $from_name = $_POST['name'];
  $from_email = $_POST['email'];
  $subject = $_POST['subject'];  
  $message = $_POST['message']; 
  
  $message = "Following are the details from contact us form:\n"
              ."\n Name: $from_name"
              ."\n Email-id: $from_email"
              ."\n Subject: $subject"
              ."\n Message: $message";
   
  
  $mailHeaders = "From: " . $from_name . "<info@". $siteDonaim .">\r\n"; 	
 if(mail($to, $siteDonaim.'Contact Us:'.$subject, $message, $mailHeaders)) {	
	echo "Your message has been received. We will get back to you.";
 }else{
	 echo "There is some error while sending the form. Please try again or call us.";
 }
?>
