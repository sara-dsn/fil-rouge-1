

<div id="visible" >
    <div class="d-none d-md-block ">

        <div class="col-12 d-flex justify-content-center">
            <h2 class="font-weight-bold font-italic d-none d-md-block">Nos Catégories </h2>
        </div>
    
        <div class="w-100  row">
            <div class="col-3 d-none d-md-block  ">
                <div class="card border-0 bg-transparent">
                    <div class="card-body">
                        <img src="asset/cat.fond/cuisinier.png" class="card-img-top img-fluid" alt="Cuisinier">
                    </div>
                </div>
            </div>

            <div class="  row  col-10 col-md-8 d" >   
                <?php foreach($ctg as $categorie){
                    if($categorie->active == '1' ) { 
                        $nbr++;?>
                    <div class="t d-none d-md-block cat card custom-card col-3 ml-2 mr-2 mb-4 ">
                        <img class=" card-img-top taille rounded img-fluid" src="asset/category/<?=$categorie->image?>" alt="<?=$categorie->libelle?>">
                        <div class="card-body pl-3">
                            <h3 value="<?=$categorie->id?>" class=" titre card-title font-weight-bold font-italic id"><?=$categorie->libelle?></h3>
                            <span class="stock text-success">Disponible<span>
                        
                        </div>
                    </div>
                <?php if ($nbr==6){
                    $nbr=0;
                    break;
                } }};?>    
            </div>
    

            <div class="w-100 d-flex justify-content-center">
                <h2 class="font-weight-bold font-italic row">Nos Best-sellers </h2>
            </div>
        
            <div class="w-100 d-flex justify-content-center row">
    
                <div class="row  col-10 col-md-8   ml-3 d-flex justify-content-center " >
                <?php foreach ($best as $plat) { 
                    $nbr2++  ?>
                    <div class="card  col-12 g ml-1 mb-1 mr-1 col-md-3 ">
                        <img class="card-img-top img-fluid rounded himg" src="asset/food/<?=$plat->image?>" alt="<?=$plat->libelle?>">
                        <div class="card-body font-italic">
                            <h5 class="card-title font-weight-bold"><?=$plat->libelle?></h5>
                            <p class="card-text mb-4"><?=$plat->description?> <br> Menu: <?=$plat->prix?> €</p>
                        </div>
                        <div class="mt-auto mb-1 mt-2 text-center"> <a type="submit" href="index.php?page=commande-livraison&id=<?=$plat->id_plat?>" value="<?=$plat->id?>" class="btn btn-warning di t">Commander</a></div>
                    </div>
        
                <?php if($nbr2 == 3){
                    $nbr2=0;
                    break;
                } };
                ?>
                </div>
            </div>   
        </div >
    </div>
        <div class="w-100 d-flex justify-content-center d-none d-md-none">
            <h2 class="font-weight-bold font-italic row">Nos Best-sellers </h2>
        </div>
            <div class=" row col-10 d-none d-md-none   ml-3 d-flex justify-content-center" > 
            <?php foreach ($best as $plat) { 
                $nbr2++  ?>
                <div class="card col-12 g ml-1 mb-1 mr-1 col-md-3 ">
                    <img class="card-img-top img-fluid rounded himg" src="asset/food/<?=$plat->image?>" alt="<?=$plat->libelle?>">
                    <div class="card-body font-italic">
                        <h5 class="card-title font-weight-bold"><?=$plat->libelle?></h5>
                        <p class="card-text mb-4"><?=$plat->description?> <br> Menu: <?=$plat->prix?> €</p>
                        <span class="stock7 text-danger"></span>
                    </div>
                    <div class="mt-auto mb-1 mt-2 text-center"> <a type="submit" href="index.php?page=commande-livraison&id=<?=$plat->id_plat?>" value="<?=$plat->id?>" class="btn btn-warning di t">Commander</a></div>
                </div>
    
            <?php if($nbr2 == 5){
                $nbr2=0;
                break;
            } };?>
            </div>
        </div>

       
    
    
    <div class="d-flex justify-content-end mt-4">
        
            <a type="submit" href="index.php?page=cuisine-italienne-indienne-street-food" class="btn btn-dark t mr-2" >Suivant</a>
    </div>


 


 