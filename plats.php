

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
        <div class=" row col-12 col-md-8  " >
            <?php foreach ($plt as $plat) { 
                $nbr++  ?>
                <div class="card col-12 T pb-2 ml-1 mb-1 mr-1 col-md-3 ">
                    <img class="card-img-top img-fluid rounded himg" src="asset/food/<?=$plat->image?>" alt="<?=$plat->libelle?>">
                    <div class="card-body font-italic">
                        <h5 class="card-title font-weight-bold"><?=$plat->libelle?></h5>
                        <p class="card-text "><?=$plat->description?> <br> Menu: <?=$plat->prix?> €</p><br>
                    </div>
                    <div class="mt-auto  text-center"> <a href="index.php?page=commande-livraison&id=<?=$plat->id?>" id="btnplt" type="submit" value="<?=$plat->id?>" class="btn btn-warning di t">Commander</a></div>
                </div>
    
            <?php if($nbr == 6){
                $nbr=0;
                break;
            } };?>
        </div>
       
    <div class="col-12 d-flex justify-content-between mt-4">
        <a type="submit" href="index.php?page=cuisine-italienne-indienne-street-food" class="btn btn-dark t" >Précedent</a>
        <a type="submit" href="index.php?page=contact-vendeur" class="btn btn-dark t" >Suivant</a>
    </div>
</div>
            
     
 
  