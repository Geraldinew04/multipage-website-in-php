<?php
	//import CLASS PHP mailer
	use PHPMailer\PHPMailer\PHPMailer;
	require '../../vendor/autoload.php';
	$mail = new PHPMailer;

	//VARIABLES PHP
	$FirstName = $_POST['FirstName'];
	$san_FirstName = filter_var($FirstName, FILTER_SANITIZE_STRING);

	$LastName = $_POST['LastName'];
	$san_LastName = filter_var($LastName, FILTER_SANITIZE_STRING);

	$email = $_POST['email'];
	$san_email = filter_var($email, FILTER_SANITIZE_EMAIL);
	$val_email = filter_var($san_email, FILTER_VALIDATE_EMAIL);

	$culotte = isset($_POST['culotte']) ? $_POST['culotte'] : NULL;
	//$san_culotte = filter_var($culotte, FILTER_VALIDATE_BOOLEAN);
	$san_culotte = filter_var($culotte, FILTER_SANITIZE_STRING);

	$size_culotte = isset($_POST['size_culotte']) ? $_POST['size_culotte'] : NULL;
	$san_size_culotte = filter_var($size_culotte, FILTER_SANITIZE_STRING);

	$qte_culotte = isset($_POST['qte_culotte']) ? $_POST['qte_culotte'] : NULL;
	$san_qte_culotte = filter_var($qte_culotte, FILTER_SANITIZE_STRING);

	$tshirt = isset($_POST['tshirt']) ? $_POST['tshirt'] : NULL;
	$san_tshirt = filter_var($tshirt, FILTER_SANITIZE_STRING);

	$size_tshirt = isset($_POST['size_tshirt']) ? $_POST['size_tshirt'] : NULL;
	$san_size_tshirt = filter_var($size_tshirt, FILTER_SANITIZE_STRING);

	$qte_tshirt = isset($_POST['qte_tshirt']) ? $_POST['qte_tshirt'] : NULL;
	$san_qte_tshirt = filter_var($qte_tshirt,FILTER_SANITIZE_STRING);

	$flyers = isset($_POST['flyers']) ? $_POST['flyers'] : NULL;
	$san_flyers = filter_var($tshirt, FILTER_SANITIZE_STRING);

	$street = $_POST['street'];
	$san_street = filter_var($street, FILTER_SANITIZE_STRING);

	$street2 = $_POST['street2'];
	$san_street2 = filter_var($street2, FILTER_SANITIZE_STRING);

	$city = $_POST['city'];
	$san_city = filter_var($city, FILTER_SANITIZE_STRING);

	$zip = $_POST['zip'];
	$san_zip = filter_var($zip, FILTER_SANITIZE_STRING);

	$country = $_POST['country'];
	$san_country = filter_var($country, FILTER_SANITIZE_STRING);

	
	// CONDITIONS

	// MESSAGE
	$mailContent = "Une nouvelle commande vient d'être passée.\n";
/*	var_dump($culotte);
	echo '<br>';
	var_dump($tshirt);
	echo '<br>';
	var_dump($flyers);
	echo '<br>';
*/	//if($san_culotte === true) {
	if($san_culotte === "culotte") {
	    $mailContent .= 'Vous avez commandé ' . $san_qte_culotte . ' culotte(s) de taille ' . $san_size_culotte;
	}
	if($san_tshirt === "tshirt") {
	    $mailContent .= "\nVous avez commandé " . $san_qte_tshirt . ' culotte(s) de taille ' . $san_size_tshirt;
	}
	if($flyers === "flyers") {
	    $mailContent .= "\nVous avez commandé des flyers";
	}

if(file_exists('auth.php')){
    include('auth.php');
}
	
//Tell PHPMailer to use SMTP
$mail->isSMTP();
//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 2;
//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';
// use
// $mail->Host = gethostbyname('smtp.gmail.com');
// if your network does not support SMTP over IPv6
//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;
//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'tls';
//Whether to use SMTP authentication
$mail->SMTPAuth = true;
//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = $username;
//Password to use for SMTP authentication
$mail->Password = $password;
//Set who the message is to be sent from
$mail->setFrom($email, $san_FirstName . ' ' . $san_LastName);
//Set an alternative reply-to address
//$mail->addReplyTo('replyto@example.com', 'First Last');
//Set who the message is to be sent to
$mail->addAddress('gwinand.web@gmail.com', 'G Dub');
//Set the subject line
$mail->Subject = 'Nouvelle commande';
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
//$mail->msgHTML(file_get_contents('contents.html'), __DIR__);
//Replace the plain text body with one created manually
//$mail->AltBody = 'This is a plain-text message body';
$mail->Body = $mailContent;
//Attach an image file
//$mail->addAttachment('images/phpmailer_mini.png');
//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
    //Section 2: IMAP
    //Uncomment these to save your message in the 'Sent Mail' folder.
    #if (save_mail($mail)) {
    #    echo "Message saved!";
    #}
}

?>