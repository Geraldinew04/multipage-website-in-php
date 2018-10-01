<?php
$mail->addEmbeddedImage(dirname(__FILE__).$img, 'img_U');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'vendor/phpmailer/phpmailer/src/Exception.php';
require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
require 'vendor/phpmailer/phpmailer/src/SMTP.php';



 //require 'vendor/autoload.php';
 //require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
// require 'vendor/phpmailer/phpmailer/src/test.php';

$mail = new PHPMailer();
$mail->Host = "smtp.gmail.com";
$mail->isSMTP();
$mail->SMTPAuth = true;
$mail->Username = "dhoore.kush@gmail.com";
$mail->Password = "JLPRUJDS9";
$mail->SMTPSecure = "ssl";
$mail->Port = 465;
$mail->Subject = "test mail tsbbbb";
$mail->Body = "this is our body";
$mail->setFrom(address:'dhoore.kush@gmail.com',name:'LD');
$mail->addAddress(address:'dhoore.kush@gmail.com');

if($mail->send()){
    echo 'mail is send';
}

else{echo 'marche pas ';}


?>