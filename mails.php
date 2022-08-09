<?php
   ini_set( 'display_errors', 1 );
   error_reporting( E_ALL );
   $from = "kajissob@gmail.com";
   $to = "ndekaji@gmail.com";
   $subject = "Hello Kaji";
   $message = "Someone just waved to say hello";
   $headers = "MIME-Version: 1.0" . "\r\n";
   $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
   $headers = "From:" . $from;
   if(mail($to,$subject,$message, $headers)) {
      echo "<h1>Hello message was sent.</h1>";
   } else {
      echo "<h1>Error: Message was not sent.</h1>";
   }
?>