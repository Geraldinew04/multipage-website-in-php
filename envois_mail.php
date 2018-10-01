<?php
include('acces.php');
$nom = htmlspecialchars($_POST['nom']);
$prenom = htmlspecialchars($_POST['prenom']);
$mail_U = trim(htmlspecialchars($_POST['mail']));
$objet = htmlspecialchars($_POST['objet']);
$message =  htmlspecialchars($_POST['message']);
$photo =  htmlspecialchars($_FILES['photo']['tmp_name']);

$dossier = 'upload/';
$fichier = basename($_FILES['photo']['name']);
$taille_maxi = 100000;
$taille = filesize($_FILES['photo']['tmp_name']);
$extensions = array('.png', '.gif', '.jpg', '.jpeg');
$extension = strrchr($_FILES['photo']['name'], '.'); 
//Début des vérifications de sécurité...
if(!in_array($extension, $extensions)) //Si l'extension n'est pas dans le tableau
{
     $erreur = 'Vous devez uploader un fichier de type png, gif, jpg, jpeg, txt ou doc...';
}
if($taille>$taille_maxi)
{
     $erreur = 'Le fichier est trop gros...';
}
if(!isset($erreur)) //S'il n'y a pas d'erreur, on upload
{
     //On formate le nom du fichier ici...
     $fichier = strtr($fichier, 
          'ÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ', 
          'AAAAAACEEEEIIIIOOOOOUUUUYaaaaaaceeeeiiiioooooouuuuyy');
     $fichier = preg_replace('/([^.a-z0-9]+)/i', '_', $fichier);
     if(move_uploaded_file($_FILES['photo']['tmp_name'], $fichier)) //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
     {
         echo 'Upload effectué avec succès !';
     }
     else
     {
          echo 'Echec de l\'upload !';
     }
}
else
{
     echo $erreur;
}




date_default_timezone_set('Etc/UTC');
use PHPMailer\PHPMailer\PHPMailer;
require 'vendor/autoload.php';

$mail = new PHPMailer;

$mail->isSMTP();

$mail->SMTPDebug = 2;

$mail->Host = 'smtp.gmail.com';

$mail->Port = 587;

$mail->SMTPSecure = 'tls';

$mail->SMTPAuth = true;

$mail->Username = mail_acces;

$mail->Password = mdp_acces;

$mail->setFrom('testdevnoreply@gmail.com', 'NO REPLY');

$mail->addReplyTo('testdevnoreply@gmail.com', 'NO REPLY');

$mail->addAddress($mail_U, $nom);

$mail->Subject = $objet;


$img = "<img src='' alt='ceci est une image'/>";
$mail->Body = $message;

$mail->AltBody = 'Ceci est un message texte';

$mail->addAttachment($_FILES['photo']['name']);

if (!$mail->send()) {
 echo "Mailer Error: " . $mail->ErrorInfo;
} else {
echo "Message sent!";
}



$ligne_log_min = ' <ligne> Prenom :'.$prenom.' //// message: '.$message.' //// date : '.date("Y-m-d H:i:s").'---- </ligne>';

$ressources=fopen('log-min.txt','a+');
fwrite($ressources,$ligne_log_min);
fclose($ressources);
//echo "Donnees sauvegardées";

$ligne_log = 'Nom: '.$nom.' //// Prenom :'.$prenom.' //// mail: '. $mail_U.' //// message: '.$message.' //// photo : '.$photo.' //// date : '.date("Y-m-d H:i:s").'----';

$ressource=fopen('log.txt','a+');
fwrite($ressource,$ligne_log);
fclose($ressource);
echo "Donnees sauvegardées";
?>

<script>

setTimeout(function(){ window.location = "formulaire_mail.php";; }, 2000);
</script>







