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
            <h2>Votre Panier : </h2>
<br>
<?php
    if(!isset($_POST)){ ?>
        <p>Il est vide .</p> 
<?php } 
    elseif(isset($_POST)){
        foreach($plt as $element){
            if($element->id == $_POST["id"] ){?>
<div class="card  col-10 col-md-2 ">
        <img class="card-img-top img-fluid mt-2" name="" value="" src="asset/food/<?=$element->image?>" alt="burger360">
            <div class="card-body">
            <h5 class="card-title font-weight-bold" ><?=$element->libelle?></h5>
            <p class="card-text"  value="<?=$element->prix?>"><?=$element->description?><br> Total : <?=$element->prix?> €</p>
            <div class="input-group  ">
                <label type="quantity">Quantité : </label>
                <input type="text" class="form-control rounded col-2" name="quantity" id="quantity" value="1">
  <span class="input-group-btn">
    <button type="button" class="btn btn-dark btn-sm" id="btn-minus ">-</button>
  </span>
  
  <span class="input-group-btn">
    <button type="button" class="btn btn-dark btn-sm " id="btn-plus">+</button>
  </span>
</div>

        </div>
    </div>
    <?php } } } ;?>
          </div>
          </div>
         <div class="w-100 d-flex justify-content-center"> <a type="submit" class="btn btn-dark t " href="index.php">Retourner sur la page d'acceuil</a></div>
        </div>
     