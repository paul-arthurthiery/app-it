<?php 

        date_default_timezone_set('Etc/UTC');
        require 'PHPMailer/PHPMailerAutoload.php';
        //Create a new PHPMailer instance
        $mail = new PHPMailer;
        //Tell PHPMailer to use SMTP
        $mail->isSMTP();
        //Enable SMTP debugging
        // 0 = off (for production use)
        // 1 = client messages
        // 2 = client and server messages
        $mail->SMTPDebug = 2;
        //Ask for HTML-friendly debug output
        $mail->Debugoutput = 'html';
        $mail->SMTPSecure = 'ssl';
        //Set the hostname of the mail server
        $mail->Host = "smtp.163.com";
        //Set the SMTP port number - likely to be 25, 465 or 587
        $mail->Port = 465;
        //Whether to use SMTP authentication
        $mail->SMTPAuth = true;
        //Username to use for SMTP authentication
        $mail->Username = "SmartPanel@163.com";
        //Password to use for SMTP authentication
        $mail->Password = "AZERTYUIOP123";
        //Set who the message is to be sent from
        $name =  $_POST['name'];
        
        $mail->setFrom('SmartPanel@163.com',$name);
        //Set an alternative reply-to address
        $mail->addReplyTo('SmartPanel@163.com', 'SmartPanel');
        //Set who the message is to be sent to
        $mail->addAddress('SmartPanel@163.com');
        //$mail->addCC('765384180@qq.com');                
        //Set the subject line
        $Subject =  $_POST['Subject'];
        $mail->Subject = $Subject;
        //Read an HTML message body from an external file, convert referenced images to embedded,
        //convert HTML into a basic plain-text alternative body
        //$mail->msgHTML(file_get_contents('contents.html'), dirname(__FILE__));
        //Replace the plain text body with one created manually
        $Email = $_POST['subject'];
        $mail->Body  = $Email;
        //$mail->AltBody = 'Welcome to use SmartPanel';
        //Attach an image file
        //$mail->addAttachment('images/phpmailer_mini.png');
        //send the message, check for errors
        if (!$mail->send()) {
           echo "Mailer Error: " . $mail->ErrorInfo;
       } else {
           echo "Message sent!";
              }

?>