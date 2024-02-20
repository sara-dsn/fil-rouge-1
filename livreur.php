<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
 require_once 'vendor/autoload.php';
 $mail =new PHPMailer(true);
//  $mail->isSMTP(); => il provoque cette erreur-> code:111
$mail-> isMail();
 $mail-> Host = '127.0.0.1';
 $mail->SMTPAuth = false;
 $mail-> Port=8025; 
 $mail->setFrom('the_district@gmail.com');
 $mail->addAddress($_SESSION["e"]);
 $mail->isHTML(true);
 $mail->Subject='Votre commande arrive !';
 $mail->Body= "Bonjour ".$_SESSION["np"]."! <br><br> Votre ".$_SESSION["l"]." à ".$_SESSION["p"]."€ arrive à ".$_SESSION["a"]." dans moins de 30 minutes !";
 
 if($mail){
  try{
    $mail->send();
  }catch(exception $e){
    echo"Envoie du  mail échoué, voici l'erreur : ", $mail->ErrorInfo;
  }
 }
     
    include 'DAO.php';
 // Si 'url' de la session n'est pas égal à celui de la page ouverte:
 if (!isset($_SESSION['url'])) {
    if (isset($_SERVER['HTTP_REFERER'])) {
        $_SESSION['url'] = $_SERVER['HTTP_REFERER'];
    }
    else {
        $_SESSION['url'] = '';
    }
 }
 else {
    if (isset($_SERVER['HTTP_REFERER'])) {
        $_SESSION['url'] = $_SERVER['HTTP_REFERER'];
    }
    else {
        $_SESSION['url'] = '';
    }
 }


// if (($_SESSION['url'])!=($_SERVER['HTTP_REFERER'])) {

//  // alors 'url' de la session est égale à l'URL de la page ouverte:
//     $_SESSION['url'] = $_SERVER['HTTP_REFERER'];
// }

// //  sinon si 'url' n'est pas défini :
// elseif (!isset($_SESSION['url']) ) {

//  // alors on met à jour l''url' de la session:
//     $_SESSION['url'] = $_SERVER['HTTP_REFERER'];
// };
    ?>



        <div id="visible">
      <div class="container-fluid col-12 mb-4 mt-1 d-flex  ">
        <div class="col-2 d-none d-md-block ">
           <div class="card border-0 bg-transparent  ">
            <div class="card-body">
               <img src="asset/cat.fond/cuisinier.png" class="card-img-top img-fluid  " alt="Cuisinier">
             </div>
           </div>
        </div>
        <div class="col-10 justify-content-center mt-4 ">
          <h2 class="mt-4 ml-4">Votre commande est envoyée,<br> Notre livreur va vous contacter dans moins de 5 minutes .</h2><br>
          </div>
          </div>
         <div class="w-100 d-flex justify-content-center"> <a type="submit" class="btn btn-dark t " href="index.php">Retourner sur la page d'acceuil</a></div>
        
      </div>
     
   
