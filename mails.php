<?php
   ini_set( 'display_errors', 1 );
   error_reporting( E_ALL );
   $from = $_POST['frome'];
   $to = $_POST['toe'];
   $subject = $_POST['subject'];
   $message = $_POST['messages'];
   $headers = "MIME-Version: 1.0" . "\r\n";
   $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
   $headers .= "From:" . $from;
   $sent = mail($to,$subject,$message, $headers);
   if($sent) {
      echo "<h1>Hello ".$_POST['name']." message was sent.</h1>";
   } else {
      echo "<h1>Error: Message was not sent. ".$_POST['name'].", tell Kaji</h1>";
   }
?>
