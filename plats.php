
<?php 
 
// Connexion à la base de données
$db=new PDO('mysql:host=localhost;charset=utf8;dbname=district','admin','dosana');
// configurer le mode erreur PDO pour générer des exceptions :
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $requete = $db->prepare("SELECT * FROM plat ");
  $requete->execute();
  $tableau = $requete->fetchAll(PDO::FETCH_OBJ);
$nbr=0;
// var_dump($tableau)
?>

<div id="visible" class="container-fluid ">
    <h1 class="w-100 d-flex justify-content-center font-weight-bold font-italic mt-2">Nos Plats </h1>
    <div class="col-12 row d-flex justify-content-center">
        <div class="row col-3  d-none d-md-block">
            <div class="card border-0 bg-transparent">
                <div class="card-body">
                     <img src="asset/cat.fond/cuisinier.png" class="card-img-top img-fluid" alt="Cuisinier">
                </div>
            </div>

        </div>
        <div class=" row col-10 col-md-8  " >
            <?php foreach ($tableau as $plat) { 
                $nbr++  ?>
                <div class="card col-12 T ml-1 mb-1 mr-1 col-md-3 ">
                    <img class="card-img-top img-fluid rounded himg" src="asset/food/<?=$plat->image?>" alt="<?=$plat->libelle?>">
                    <div class="card-body font-italic">
                        <h5 class="card-title font-weight-bold"><?=$plat->libelle?></h5>
                        <p class="card-text mb-4"><?=$plat->description?> <br> Menu: <?=$plat->prix?> €</p>
                        <span class="stock7 text-danger"></span>
                    </div>
                    <div class="mt-auto mb-1 mt-2 text-center"> <a href="#" value="<?=$plat->id_plat?>" class="btn btn-warning di t">Commander</a></div>
                </div>
    
            <?php if($nbr == 6){
                break;
            } };?>
        </div>
       
    <div class="col-12 d-flex justify-content-between mt-4">
        <input type="submit" href="index.php?page=categorie" class="btn btn-dark t" value="Précedent">
        <input type="submit" href="index.php?page=contact" class="btn btn-dark t" value="Suivant">
    </div>
</div>
            
     
 
  