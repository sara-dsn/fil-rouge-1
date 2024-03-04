<?php 
 
// Connexion à la base de données pour mettre en ligne:
// $db=new PDO('mysql:host=localhost;dbname=dosana','dosana','dosana');
// Connexion à la base de données php server:
$db=new PDO('mysql:host=localhost;dbname=district','admin','dosana');

// configurer le mode erreur PDO pour générer des exceptions :
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$requete = $db->prepare("SELECT * FROM categorie ");
$requete->execute();
$ctg = $requete->fetchAll(PDO::FETCH_OBJ);

$tplat = $db->prepare("SELECT * FROM plat ");
$tplat->execute();
$plt = $tplat->fetchAll(PDO::FETCH_OBJ);

$table = $db->prepare("SELECT * FROM plat INNER JOIN commande ON plat.id = commande.id_plat ORDER BY commande.quantite DESC");
$table->execute();
$best = $table->fetchAll(PDO::FETCH_OBJ);

$nbr=0;
$nbr2=0 ;
// var_dump($tableau)
// var_dump($_REQUEST);


    






