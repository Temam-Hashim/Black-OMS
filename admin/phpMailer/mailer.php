<?php

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

require 'vendor\autoload.php';

//Instantiation and passing `true` enables exceptions
function PHP_MAILER($to,$from,$subject,$body){
        $mail = new PHPMailer(true);

        try {
            //Server settings
            // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'ourgroupemail2018@gmail.com';                     //SMTP username
            $mail->Password   = 'hosrrbkifffxdibq';                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
            $mail->Port       = 465;
            $mail->SMTPSecure = 'ssl';
            $mail->CharSet = 'UTF-8';                                //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

            //Recipients
            $mail->setFrom($from, 'Black Financial Solution');
            $mail->addAddress($to, 'Temam');     //Add a recipient
            // $mail->addAddress('ellen@example.com');               //Name is optional
            $mail->addReplyTo($from, 'REPLAY FROM BLACk');
            // $mail->addCC('ourgroupemail2018@gmail.com');
            // $mail->addBCC('ourgroupemail2018@gmail.com');

            //Attachments
            // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
            $mail->addAttachment('images/logo.png', 'Black Logo');    //Optional name

             // send html content
           //$mail->msgHTML(file_get_contents('contents.html'), __DIR__);

            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = $subject;
            $mail->Body    = $body;
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->send();
            echo "<script>alet('Email Sent')</script>";


        } catch (Exception $e) {

                  echo $e->getMessage();


        }
}


function MULTI_MAILER($to,$subject,$body){

  $mail = new PHPMailer(true);



  try {

      //Server settings

      // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output

      $mail->isSMTP();                                            //Send using SMTP
      $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
      $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
      $mail->Username   = 'ourgroupemail2018@gmail.com';                     //SMTP username
      $mail->Password   = 'hosrrbkifffxdibq';                               //SMTP password
      $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
      $mail->Port       = 465;
      $mail->SMTPSecure = 'ssl';                                  //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above



      //Recipients

      $mail->setFrom('ourgroupemail2018@gmail.com', 'Black Financial Solution');
      // get address from user table
 
       $mail->addAddress($to);
      
      // $mail->addAddress('ellen@example.com');               //Name is optional
      $mail->addReplyTo('ourgroupemail2018@gmail.com', 'REPLAY FROM BLACK');

      // $mail->addCC('ourgroupemail2018@gmail.com');

      // $mail->addBCC('ourgroupemail2018@gmail.com');

      //Attachments

      // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments

      // $mail->addAttachment('images/logo.png', 'AGRO LOGO');    //Optional name

       // send html content

     //$mail->msgHTML(file_get_contents('contents.html'), __DIR__);


      //Content

      $mail->isHTML(true);                                  //Set email format to HTML

      $mail->Subject = $subject;

      $mail->Body    = $body;

      $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';



      $mail->send();

      echo "<script>alet('Email Sent')</script>";





  } catch (Exception $e) {



            echo $e->getMessage();





  }

}



?>