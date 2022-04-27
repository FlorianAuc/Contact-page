<?php
require 'vendor/autoload.php';
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

//Load Composer's 


if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $genre = $_POST['genre'];
    $subject = $_POST['subject'];
    $country = $_POST['country'];
    $message = $_POST['message'];

    $messagecontent = ("$name vous a envoyer un mail ! "  ."<br>Message = " . $message);

//Create an instance; passing `true` enables exceptions

    $mail = new PHPMailer(true);
    $alert = '';
    try {
        //Server settings
        //$mail->SMTPDebug = SMTP::DEBUG_SERVER; //Enable verbose debug output
        $mail->isSMTP(); //Send using SMTP
        $mail->Host = 'smtp.mailtrap.io'; //Set the SMTP server to send through
        $mail->SMTPAuth = true; //Enable SMTP authentication
        $mail->Username = '2dce0249053157'; //SMTP username
        $mail->Password = '6da8c3f5cc46b0'; //SMTP password
        //$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port = 2525; //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        $mail->CharSet = 'utf-8';
        //Recipients
        $mail->setFrom ("chickenhack216@gmail.com", 'Marc');
        $mail->addAddress ($email); //Add a recipient
        $mail->addReplyTo ($email, $name, $lastname);

        //Attachments
        //$mail->addAttachment('/var/tmp/file.tar.gz'); //Add attachments
        //$mail->addAttachment('photo.jpeg', 'photo.jpeg'); //Optional name

        //Content
        $mail->isHTML(true); //Set email format to HTML
        $mail->Subject = $subject;
        $mail->Body = $messagecontent;

        $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
   echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

}
