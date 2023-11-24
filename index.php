<!doctype html>
<html lang="fr">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="asset/css/style.css">
    <title>The District</title>
</head>

<body>
    <div class="parallax-body">

        <div class="container-fluid">
        <?php
    session_start();
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

<hr>
<div><?= $_SESSION['url'] ?></div>
<hr>

            <?php
            include('header.php');
            ?>
<div class="w-100 d-flex row">
              <div class="row justify-content-center " id="afficher"></div>
            </div>

            <div class="w-100 row d-flex  justify-content-center">
             
                <div class="row col-9 justify-content-center" >
                    <div id="gg" class="row justify-content-center mt-4 "></div>
                   
                </div>
            </div>
            <div id="titre">
                <div class="col-12 d-flex justify-content-center">
                     <h1 class="font-weight-bold font-italic mr-4 pr-4">Votre Commande :</h1>
                </div></div>
            <div class="w-100 d-flex justify-content-center row">
                    
            <div class="row col-8 cardContainer  ml-3 d-flex justify-content-center " id="pp"></div>
            </div>
            <div id="ff">
                <div  class="container-fluid  col-12 d-none d-md-block mb-4 mt-4">
                    <div class="row ">
                        <div class="col-2 ">
                            <div class="card border-0 bg-transparent  ">
                                <div class="card-body">
                                 <img src="asset/cat.fond/cuisinier.png" class="card-img-top img-fluid" alt="Cuisinier">
                                </div>
                            </div>
                        </div>
                        <form class="col-8 " method="POST" action="form_commande.php">

                            <div class="col mr-4 pr-4 ml-2 mb-4 mt-4 ">
                                <label class="font-weight-bold font-italic text-right">Nom et
                                Prénom</label>
                                <input type="text" id="np" name="np" class="form-control">
                                <div id="nompre"
                                    class="alert alert-danger alert-dismissible bg-transparent border-0 fade show"
                                    style="display:none;" role="alert">
                                    <strong>Ce champ est obligatoire</strong>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col mr-4 ml-4 mb-4 mt-4">
                                    <label class="font-weight-bold font-italic text-right">Email</label>
                                    <input type="text" id="e2" name="e" class="form-control">
                                    <div id="email2"
                                        class="alert alert-danger alert-dismissible bg-transparent border-0 fade show"
                                        style="display:none;" role="alert">
                                        <strong>Ce champ est obligatoire </strong>
                                    </div>
                                </div>
                                <div class="col mr-4 ml-4 mb-4 mt-4">
                                    <label class="font-weight-bold font-italic text-right">Téléphone</label>
                                    <input type="text" id="t2" name="t" class="form-control">
                                    <div id="tel2"
                                        class="alert alert-danger alert-dismissible bg-transparent border-0 fade show"
                                        style="display:none;" role="alert">
                                        <strong>Ce champ est obligatoire</strong>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mr-4 ml-4 mb-4 mt-4">
                                <label class="font-weight-bold font-italic text-right">Votre Adresse</label>
                                <textarea class="form-control" id="a" name="a" rows="4"></textarea>
                                <div id="adresse"
                                    class="alert alert-danger alert-dismissible fade bg-transparent border-0 show"
                                    style="display:none;" role="alert">
                                    <strong>Ce champ est obligatoire</strong>
                                </div>
                            </div>
                            <div class="container-fluid col-12 ">
                                <div class="item-content text-center ml-4 pl-4 ">

                                    <input type="submit" href="index.php?page=livreur" name="bouton" id="bouton"
                                     class="btn btn-dark font-weight-bold font-italic text-right t" value="Envoyer">
                                </div>
                            </div>
                            <div class="w-100 mt-3 d-flex justify-content-center"> <a type="submit" class="btn btn-dark t " href="index.php">Retourner sur la page d'acceuil</a></div>
                        </form>

                    
                    </div>
                </div>


            </div>

          
        </div>
                <div class="col-12 text-center">
                    <!-- <button type="submit" id="bottom" onclick="history.back(); location.reload(true);" class="btn btn-dark t text-center mt-4" >Précedent</button> -->
                    <!-- <button type="button" id="bottom" onclick="window.history.go(-1)" class="btn btn-dark t text-center mt-4">Précédent</button> -->
                    <button type="button" id="bottom" onclick="window.location.href='<?php echo $_SESSION['url']; ?>'" class="btn btn-dark t text-center mt-4">Précédent</button>

                   

                </div>
           
                <main>
    <?php
 
    // si l'une des conditions est bonne, il execute le "if":
    if(!isset($_GET['page'])|| empty($_GET['page'])||$_GET['page']=='acceuil'){
      include('acceuil.php');
    }else if($_GET['page']=='categorie'){
        include('categorie.php');
    }
    else if($_GET['page']=='plats'){
        include('plats.php');
    }
    else if($_GET['page']=='contact'){
        include('contact.php');
    }
    else if($_GET['page']=='demande'){
        include('demande.php');
    }
    else if($_GET['page']=='livreur'){
        include('livreur.php');
    };                           
    
 
    
    
    ?>

</main>


            <?php
            include('footer.php');
            ?>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
        <script src="asset/js/script.js"></script>
    <script>
        $(document).ready(function () {
           var btn=$("#bottom"); 
           var aff=$("#plats");
            var visible=$("#visible");
            var a = $("#afficher");
           var form=$("#ff");
           var test=$("#gg");
           var titre=$("#titre");
              var affiche = $("#txt");
            var pp=$("#pp");
             var affichage = $("#categorie");
                var tel=$("#smm");
            btn.hide();
           titre.hide();
            form.hide();

            var url = window.location.href;

// BOUTTON RETOUR:
// $("#bottom").click(function(){
//     window.location.href=url;
//     history.back();
//     location.reload(true);
//     console.log("retour");
// });

       $.getJSON("plat.json", function (json) {
         
                var ctg = json.categorie;
                var plt = json.plat;
              
// PLATS AFFICHAGE DE BASE :
for (i=0;i<plt.length;i++){
var item=plt[i];
var iche=$( `

            <div class="card col-12 col-md-3 hauteur mr-3 mb-3">
    <img class="card-img-top img-fluid rounded himg" src="asset/food/${item.image}" alt="${item.libelle}">
    <div class="card-body font-italic">
        <h5 class="card-title font-weight-bold">${item.libelle}</h5>
        <p class="card-text">${item.description} <br> Menu: ${item.prix} €</p>
        <span class="stock7 text-danger"></span>
    </div>
    <div class="mt-auto mb-2 text-center"> <a href="#" value="${item.id_plat}" class="btn btn-warning di t">Commander</a></div>
</div>



                
            `);
aff.append(iche);
var stock = iche.find(".stock7");
    stock.text(item.active === 'Yes' ? '' : 'Disponible prochainement');                   
    };
   


// CATEGORIE AFFICHAGE DE BASE:
                for (i = 0; i < ctg.length; i++) {
                    var item = ctg[i];
                    var resultat = $( `<div class="t  cat card custom-card col-12 col-md-3 mr-4 mb-4 d-none d-md-block">
                <img class=" card-img-top taille rounded img-fluid" src="asset/category/${item.image}" alt="${item.libelle}">
                <div class="card-body pl-3">
                    <h3 value="${item.id_categorie}" class=" titre card-title font-weight-bold font-italic id">${item.libelle}</h3>
                <span class="stock text-danger"><span>
                  
                </div>
            </div>`);
                    affichage.append(resultat);
              
var stock = resultat.find(".stock");
    stock.text(item.active === 'Yes' ? '' : 'Disponible prochainement');
 };
 // PLATS AFFICHAGE DE BASE DE 1 À 3:
                for (i = 0; i < 3; i++) {
                    var truc = plt[i];
                    var r = $( `
                    <div  class="card  col-12 col-md-3 ml-1 mb-1 ">
                                    <img  class="card-img-top rounded himg img-fluid "  src="asset/food/${truc.image}" alt="${truc.libelle}">
                                    <div class="card-body font-italic">
                                        <h5 class="card-title font-weight-bold ">${truc.libelle}</h5>
                                        <p class="card-text ">${truc.description}<br> Menu: ${truc.prix} €  </p>
                                        <span class="stock3 text-danger"><span>
                                    </div> 
                                    <div class="mt-auto mb-2 text-center"> <a href="#" value="${truc.id_plat}" class="btn btn-warning di t">Commander</a></div>
                                </div>

        `);

                    affiche.append(r);


                    var stock = resultat.find(".stock3");
    stock.text(truc.active === 'Yes' ? '' : 'Disponible prochainement');
                };

// PLATS AFFICHAGE DE BASE DE 3 À 5:
                for (i = 3; i < 5; i++) {
                    var leplat = plt[i];
                    var card = $( `<div   class="card col-12 ml-1  mb-2 ">
                <img class="card-img-top rounded img-fluid himg" src="asset/food/${leplat.image}" alt="${leplat.libelle}">
                <div class="card-body font-italic">
                    <h5  class="card-title  font-weight-bold ">${leplat.libelle}</h5>
                    <p class="card-text ">${leplat.description}<br> Menu: ${leplat.prix} €  </p>
               <span class="stock4 text-danger"><span>
              
         
                </div> <div class="mt-auto mb-2 text-center"><a href="#" value="${leplat.id_plat}" class="btn btn-warning di t">Commander</a></div>
            </div>`);
          
                    tel.append(card);
                  
                    var stock = resultat.find(".stock4");
    stock.text(leplat.active === 'Yes' ? '' : 'Disponible prochainement');
                };

 // PLATS AFFICHAGE SELON CATEGORIE CLIQUÉE:                
$(".cat").click(function () {
    var id=$(this).find(".id").attr("value");
              plat(id);
              btn.show();

          });
          function plat(id){
         test.empty();
         a.empty();
         pp.empty();
    
            $.each(plt, function (element, uno) {
                var idcat=uno.id_categorie;
                if (idcat == id){ 
                            var t = $( ` 
                        <div class="card  col-12 col-md-3  mx-1 ">
                            <img class="card-img-top rounded himg img-fluid"  src="asset/food/${uno.image}" alt="${uno.libelle}">
                            <div class="card-body font-italic">
                                <h5 class="  card-title font-weight-bold ">${uno.libelle}</h5>
                                <p class="card-text ">${uno.description} <br> Menu: ${uno.prix} € </p>
                                 <span class="stock1 text-danger"><span>
                                
                              
                                
                            </div><div class="mt-auto mb-2 text-center"><a href="#" value="${uno.id_plat}" class="btn btn-warning di t">Commander</a></div>
                        </div> 
                        
   `);
                        
                     
visible.hide();

                            test.append(t);
                            var stock = resultat.find(".stock1");
    stock.text(uno.active === 'Yes' ? '' : 'Disponible prochainement');
                           
                };
                
                
                        });
          };

 // COMMANDE AFFICHAGE:
          $(document).on("click", ".di", function (e) {
            e.preventDefault();
      var id=$(this).attr("value");
      commande(id);
});



          function commande(id){
            btn.hide();
         test.empty();
         pp.empty();
         a.empty();
    form.show();
   titre.show();

            $.each(plt, function (element, uno) {
                var idpp=uno.id_plat;
                if (idpp == id){ 
                            var t = $( ` 
                        <div class="card  col-12 col-md-3 mx-1 ">
                            <img class="card-img-top rounded himg img-fluid"  src="asset/food/${uno.image}" alt="${uno.libelle}">
                            <div class="card-body font-italic">
                                <h5 class="  card-title font-weight-bold ">${uno.libelle}</h5>
                                <p class="card-text ">${uno.description} <br> Menu: ${uno.prix} € </p>
                                 <span class="stock6 text-danger"><span>
                                 
                              
                                
                            </div><div class="mt-auto mb-2 text-center"><a href="#" class="btn btn-warning t">Quantité : 1 </a></div>
                        </div> `);
                        
                     
visible.hide();

                            pp.append(t);
                            var stock = resultat.find(".stock6");
    stock.text(uno.active === 'Yes' ? '' : 'Disponible prochainement');
                           
                };
                
                
                        });
          };
          
               
                





            });
            
 // BARRE DE RECHERCHE:            
            $("#btn").click(function () {
              
                search();

            });

            $("#recherche").on("keypress", function (e) {
               
              if(e.which===13){
              e.preventDefault();
              search();
            };
            }); 

            function search() {
                
                a.empty();
                test.empty();
visible.hide();
btn.show();
                var input = $("#recherche").val();

                $.getJSON("plat.json", function (json) {
                    var plt = json.plat;
                   

               
                        var pla = plt.filter(function (p) {
                            return p.libelle.toLowerCase().includes(input.toLowerCase());
                        });  
                   
        
                
                    miseajour(pla);

                    function miseajour(result) {
                     
                        $.each(result, function (element, uno) {
                            var txt = $( ` 
                        <div class="card   col-12 col-md-3 mx-1 ">
                            <img class="card-img-top rounded img-fluid himg" src="asset/food/${uno.image}" alt="${uno.libelle}">
                            <div class="card-body font-italic ">
                                <h5 class="card-title  font-weight-bold ">${uno.libelle}</h5>
                                <p class="card-text ">${uno.description} <br> Menu: ${uno.prix} € </p>
                              
                                
                                  <span class="stock5 text-danger"><span>

                            </div> <div class="mt-auto mb-2 text-center"><a href="#" value="${uno.id_plat}" class="btn btn-warning di t">Commander</a></div>
                        </div>`);

                            a.append(txt);
                            var stock = txt.find(".stock5");
    stock.text(uno.active === 'Yes' ? '' : 'Disponible prochainement');

                        });


                    }
                });
            };
        });
    </script>
</body>

</html>