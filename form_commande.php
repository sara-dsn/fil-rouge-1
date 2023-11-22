<?php
session_start();

if(isset($_POST["bouton"])){
$nompre=$_POST["np"];
var_DUMP("hih");
$email=$_POST["e"];
$telephone=$_POST["t"];
$adresse=$_POST["a"];

function np($nompre){
    $validation= "/^[a-zA-Z]+$/";
    if (preg_match($validation,$nom)){
return true;
    }
    else{
        return false;
        echo " <p>Veuillez entre votre nom et votre prénom s.v.p<p>";
    };
};

function e($email){
    $validation= "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\\.[a-zA-Z]{2,}$/";
    if (preg_match($validation,$email)){
return true;
    }
    else{
        return false;
        echo " <p>Veuillez entre votre email s.v.p<p>";
    };
};
function t($telephone){
    $validation= "/^[0-9]{10,}$/";
    if (preg_match($validation,$telephone)){
return true;
    }
    else{
        return false;
        echo " <p>Veuillez entre votre numéro de téléphone s.v.p<p>";
    };
};
function a($adresse){
    $validation= "/^[0-9]+[a-zA-Z]+$/";
    if (preg_match($validation,$demande)){
return true;
    }
    else{
        return false;
        echo " <p>Veuillez entre votre adresse s.v.p<p>";
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
header("Location: demande.php");
exit(e.preventDefault());
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
header("Location: commande.php");
exit(e.preventDefault());

 };




};
?>