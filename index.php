<?php
    include('header.php');          
?>           
<div class="w-100 d-flex row">
    <div class="row justify-content-center " id="afficher"></div>
    </div>
    <div class="w-100 row d-flex  justify-content-center">            
        <div class="row col-10 justify-content-center" >
            <div id="gg" class="row justify-content-center mt-4 "></div>                  
        </div>
    </div>
        <div class="col-12 text-center">
            <button type="button" id="bottom" onclick="window.location.href='<?php echo $_SESSION['url']; ?>'" class="btn btn-dark t text-center mt-4">Précédent</button>
        </div>
        <main>
    <?php
 
    // on change le body en fonction de quelle page est cliquée:
    if(!isset($_GET['page'])|| empty($_GET['page'])||$_GET['page']=='acceuil'){
      include('acceuil.php');
    }else if($_GET['page']=='cuisine-italienne-indienne-street-food'){
        include('categorie.php');
    }
    else if($_GET['page']=='repas-amiens'){
        include('plats.php');
    }
    else if($_GET['page']=='commande-livraison'){
        include('commande.php');
    }
    else if($_GET['page']=='contact-vendeur'){
        include('contact.php');
    }
    else if($_GET['page']=='réclamation-envoyer'){
        include('demande.php');
    }
    else if($_GET['page']=='livraison'){
        include('livreur.php');

    } else if($_GET['page']=='mention_legale'){
        include('mention_legale.php');
    }
    else if($_GET['page']=='panier'){
        include('panier.php');
    }
    else if($_GET['page']=='connection'){
        include('connection.php');
    }
    else if($_GET['page']=='politique_de_confidentialite'){
        include('politique.php');

    };                           
    
 
    
    
    ?>

</main>


            <?php
            include('footer.php');
            ?>
        