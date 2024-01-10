<?php
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPHMailer\PHPMailer\Exception;
 require_once 'vendor/autoload.php';
 $mail =new PHPMailer(true);
//  $mail->isSMTP();
 $mail-> Host = '127.0.0.1';
 $mail->SMTPAuth = false;
 $mail-> Port=8025;
 $mail->setFrom('the_district@gmail.com');
 $mail->addAddress('client@gmail.com');
 $mail->isHTML(true);
 $mail->Subject='Votre commande arrive !';
 $mail->Body= " votre commande arrive à ";
 if($mail){
  try{
    $mail->send();
    echo "c'est bon !";
  }catch(exception $e){
    echo"Envoie du  mail échoué, voici l'erreur : ", $mail->ErrorInfo;
  }
 }
// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;

// require_once 'vendor/autoload.php';

// $mail= new PHPMailer(true);

// //le smtp (protocole d'envoi de courrier):
// // $mail->isSMTP(); -> ça n'a pas fonctionné ( code 111: connection refusée)

// //configuration de l'adresse du serveur SMTP:
// $mail->Host ='127.0.0.1';

// //désactivation de l'authentification SMTP:
// $mail->SMTPAuth =false;

// //configuration du port SMTP:
// $mail->port =1025;

// //expediteur mail (adresse mail + nom(falcutatif)):
// $mail->setFrom('entreprise.de.brouette@gmail.com','BrouetteLand');

// //destinataire(s)(adresse + nom(falcutatif)):
// $mail->addAddress('client1@gmail.com','mr prospect');
// $mail->addAddress('client2@gmail.com','mme prospect');

// //adresse mail de renvoie de réponse du client(falcutatif)
// $mail->addReplyTo("reponse@acheterUneBrouette.com","reponse");

// //autre destinataire : CC recois une copie du message et BCC reçois une copie invisible du message:
// $mail->addCC('cc@copie.com');
// $mail->addBCC('bcc@copieInvisible.com');

// //pour avoir un email en format HTML:
// $mail->isHTML(true);

// //ajout des pièces jointes:
// $mail->addAttachment('asset/food/cesar_salad.jpg');

// //sujet du mail:
// $mail->Subject='Offre Brouette pas cher';

// //message:
// $mail->Body="-50% sur une séléction de brouette dont le best seller : La Brouette verte";

// //On envoie le mail dans un block try/catch pour capturer les  éventuelles erreurs:
// if($mail){
//     try{
//         $mail->send();
//         echo 'Email envoyé avec succès';}
//         catch(exception $e){
//             echo"L'envoie de mail a échoué. L'erreur suivante s'est produite : ", $mail->ErrorInfo;
//         }
// }
var_DUMP("hih");

if(isset($_POST["bouton"])){
$nompre=$_POST["np"];

$email=$_POST["e"];
$telephone=$_POST["t"];
$adresse=$_POST["a"];
var_DUMP("hah");
function np($nompre){
    $validation= "/^[a-zA-Z]+\s[a-zA-Z]+$/";
    if (preg_match($validation,$nompre)){
return true;
    }
    else{
        echo " <p>Veuillez entre votre nom et votre prénom s.v.p<p>";
        return false;
        
    };
};

function e($email){
    $validation= "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\\.[a-zA-Z]{2,3}$/";
    if (preg_match($validation,$email)){
return true;
    }
    else{
        echo " <p>Veuillez entre votre email s.v.p<p>";
        return false;
       
    };
};
function t($telephone){
    $validation= "/^[0-9]{10,}$/";
    if (preg_match($validation,$telephone)){
return true;
    }
    else{
         echo " <p>Veuillez entre votre numéro de téléphone s.v.p<p>";
        return false;
       
    };
};
function a($adresse){
    $validation= "/^[0-9]+\s[a-zA-Z\s]+$/";
    if (preg_match($validation,$adresse)){
return true;
    }
    else{
        echo " <p>Veuillez entre votre adresse s.v.p<p>";
        return false;
        
    };
};
 if(np($nompre)==true&e($email)==true &t($telephone)==true &a($adresse)==true){
   
$_SESSION["np"]=$nompre;
$_SESSION["e"]=$email;
$_SESSION["t"]=$telephone;
$_SESSION["a"]=$adresse;
$nomFichier="L".date("Y-m-d-H-i-s");
$contenuFichier="Nom et Prénom: ".$_SESSION["np"]
."\r\n  Email : ".$_SESSION["e"]
."\r\n  Telephone : ".$_SESSION["t"]
."\r\n  Adresse :".$_SESSION["a"];
file_put_contents($nomFichier,$contenuFichier);
echo "hihi";


         
header("Location: livreur.php");
exit();
}
 else{
unset($_SESSION["auth"]);
session_destroy();
// echo "Veuillez remplir correctement le formulaire s.v.p <br>";
// echo "nom: ".n($nom);
// echo "<br>prenom: ".p($prenom);
// echo "<br>email: ".e($email);
// echo "<br>telephone: ".t($telephone);
// echo "<br>demande: ".d($demande);
// header("Location: .php");
// exit();

 };




};
?>