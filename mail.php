<?php
require 'vendor/autoload.php';
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;

if (isset($_POST['submit'])) {

    $name = htmlspecialchars(strtoupper($_POST['name']));
    $firstname = htmlspecialchars(strtoupper($_POST['firstname']));
    $email = htmlspecialchars(strtoupper($_POST['email']));
    $genre = htmlspecialchars(strtoupper($_POST['genre']));
    $subject = htmlspecialchars(strtoupper($_POST['subject']));
    $country = htmlspecialchars(strtoupper($_POST['country']));
    $message = htmlspecialchars(strtoupper($_POST['message']));

    $messagecontent = ($genre . "$name vous a envoyer un mail ! " . "<br>Message = " . $message);

//Create an instance; passing `true` enables exceptions

    $mail = new PHPMailer(true);
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
        $mail->setFrom($email, $firstname);
        $mail->addAddress("chickenhack216@gmail.com", 'Marc'); //Add a recipient
        $mail->addReplyTo($email, $name, $lastname);

        //Attachments
        //$mail->addAttachment('/var/tmp/file.tar.gz'); //Add attachments
        //$mail->addAttachment('photo.jpeg', 'photo.jpeg'); //Optional name

        //Content
        $mail->isHTML(true); //Set email format to HTML
        $mail->Subject = $subject;
        $mail->Body = $messagecontent;

        $mail->send();
        //header('Location: index.php');
        $alert = '<div class="alert-success">
                 <span>Message Sent! Thank you for contacting us.</span>
                </div>';
    } catch (Exception $e) {
        $alert = '<div class="alert-error">
    <span>' . $e->getMessage() . '</span>
  </div>';
        //header('Location: index.php');
    }

}
