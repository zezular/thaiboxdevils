<!DOCTYPE html>
<html lang='cs'>
  <head>
    <title>Odesláni emailu</title>
    <meta charset='utf-8'>
  </head>
  <body>
	<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];
    
    $email_from = 'thaiboxdevilstrebic@seznam.cz';
    
    $email_subject = "Dotaz z webu Thai Box Devils Třebíč";
    
    $email_body = "Jméno: $name.\n".
                    "Email: $visitor_email.\n".
                      "Zpráva: $message.\n";
                      
   $to = "petrottich@wfca-czech.cz";
   
   $headers = "From: $email_from \r\n";
   
   $headers .= "Reply-To: $visitor_email \r\n";
   
   mail($to,$email_subject,$email_body,$headers);
   header("Location: oklubu.php");
   
?>
  </body>
</html>

