<?php
    $to ='info@seerix.net';
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    
    $headers .= 'From: <contact@seerix.com>' . "\r\n";
    //$headers .= 'Cc: myboss@example.com' . "\r\n";
    
    $body = '';
    $body .='<p><strong><i>Name: </i></strong>'.$name;
    $body .='<p><strong><i>Email: </i></strong>'.$email;
    $body .='<p><strong><i>Subject: </i></strong>'.$subject;
    $body .='<p><strong><i>Message: </i></strong>'.$message;

    if(mail($to,$subject,$body,$headers))
    {
        echo "OK";
    }else{
        echo "Oops! Something went wrong and we couldn't send your message.";
    }
    
	?>