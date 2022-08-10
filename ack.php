<?php
    if(isset($_POST['send'])){
        $subject='Feedback from the website';
        $message='Name: '.$_POST['name']."\r\n\r\n";
        $email=filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL);
        $headers="From: ".$_POST['name']." \r\n";
        $headers.='Content-type: text/plain; charset: utf-8';
        if($email){
            $headers.="\r\nReply_to: $_POST['name']";
        }
        $message.='Your email address: '.$_POST['email']."\r\n\r\n";
        $message.='Comments: '.$_POST['comment'];
        $success=mail($email,$subject,$message,$headers,'-f'.$email);
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>🙂 Sending emails</title>
    </head>
    <body>
        <?php if(isset($success) && $success){
        echo"Hello".$_POST['name']." ";?>
        <h1>Thank you for your response. Kaji appreciates.</h1>
        <?php }else{?>
        <h1>Errors: Something went wrong while sending. Please tell Kaji.</h1>
        <?php }?>
    </body>
</html>
