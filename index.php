<!doctype html>
<html lang="fr">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="asset/css/style.css">
    <title>Accueil</title>
</head>

<body>
    <div class="parallax-body">

        <div class="container-fluid">
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
                        <form class="col-8 ">

                            <div class="col mr-4 pr-4 ml-2 mb-4 mt-4 ">
                                <label class="font-weight-bold font-italic text-right">Nom et
                                Prénom</label>
                                <input type="text" id="np" class="form-control">
                                <div id="nompre"
                                    class="alert alert-danger alert-dismissible bg-transparent border-0 fade show"
                                    style="display:none;" role="alert">
                                    <strong>Ce champ est obligatoire</strong>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col mr-4 ml-4 mb-4 mt-4">
                                    <label class="font-weight-bold font-italic text-right">Email</label>
                                    <input type="text" id="e" class="form-control">
                                    <div id="email"
                                        class="alert alert-danger alert-dismissible bg-transparent border-0 fade show"
                                        style="display:none;" role="alert">
                                        <strong>Ce champ est obligatoire </strong>
                                    </div>
                                </div>
                                <div class="col mr-4 ml-4 mb-4 mt-4">
                                    <label class="font-weight-bold font-italic text-right">Téléphone</label>
                                    <input type="text" id="t" class="form-control">
                                    <div id="tel"
                                        class="alert alert-danger alert-dismissible bg-transparent border-0 fade show"
                                        style="display:none;" role="alert">
                                        <strong>Ce champ est obligatoire</strong>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mr-4 ml-4 mb-4 mt-4">
                                <label class="font-weight-bold font-italic text-right">Votre Adresse</label>
                                <textarea class="form-control" id="a" rows="4"></textarea>
                                <div id="adresse"
                                    class="alert alert-danger alert-dismissible fade bg-transparent border-0 show"
                                    style="display:none;" role="alert">
                                    <strong>Ce champ est obligatoire</strong>
                                </div>
                            </div>
                            <div class="container-fluid col-12 ">
                                <div class="item-content text-center ml-4 pl-4 ">

                                    <input type="submit" id="bouton"
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
                    <a type="submit" id="bottom" href="index.php" class="btn btn-dark t text-center mt-4" >Précedent</a>
                </div>
                <div id="visible" >
                    <div class="col-12 d-flex justify-content-center">
                        <h1 class="font-weight-bold font-italic d-none d-md-block">Nos Catégories </h1>
                    </div>
                    <div class="w-100 row">
                        <div class="col-3 d-none d-md-block">
                            <div class="card border-0 bg-transparent">
                                <div class="card-body">
                                    <img src="asset/cat.fond/cuisinier.png" class="card-img-top img-fluid" alt="Cuisinier">
                                </div>
                            </div>
                        </div>
                        <div class="row w-75" id="categorie"></div>
                        <div class="w-100 d-flex justify-content-center">
                           <h1 class="font-weight-bold font-italic row">Nos Best-sellers </h1>
                        </div>
                        <div class="w-100 d-flex justify-content-center row">
                    
                            <div class="row col-10 col-md-8   ml-3 d-flex justify-content-center " id="txt"></div>
                            <div class=" row col-10 d-none d-md-none   ml-3 d-flex justify-content-center" id="smm"> </div>
                        </div>
                    </div>
                   
                    <div class="d-flex justify-content-between mt-4">
                        <a type="submit" href="contact.php" class="btn btn-dark t" >Précedent</a>
                         <a type="submit" href="categorie.php" class="btn btn-dark t" >Suivant</a>
                  </div>
                </div>

 

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
   
    <script>
        $(document).ready(function () {
            var form=$("#ff");
           
           var titre=$("#titre");
           titre.hide();
;            form.hide();
            var visible=$("#visible");
            var pp=$("#pp");
var btn=$("#bottom");
btn.hide();
var a = $("#afficher");
var test=$("#gg");
var affiche = $("#txt");
                var affichage = $("#categorie");
                var tel=$("#smm");
             
            $.getJSON("plat.json", function (json) {
         
                var ctg = json.categorie;
                var plt = json.plat;
               
                for (i = 0; i < ctg.length; i++) {
                    var item = ctg[i];
                    var resultat = $( `<div class="t  cat card custom-card col-3 mr-4 mb-4 d-none d-md-block">
                <img class=" card-img-top taille  img-fluid" src="asset/category/${item.image}" alt="${item.libelle}">
                <div class="card-body pl-3">
                    <h3 value="${item.id_categorie}" class=" titre card-title font-weight-bold font-italic id">${item.libelle}</h3>
                <span class="stock text-danger"><span>
                  
                </div>
            </div>`);
                    affichage.append(resultat);
              
var stock = resultat.find(".stock");
    stock.text(item.active === 'Yes' ? '' : 'Disponible prochainement');
 

                };
                for (i = 0; i < 3; i++) {
                    var truc = plt[i];
                    var r = $( `
                    <div  class="card  col-12 col-md-3 ml-1 mb-1 ">
                                    <img  class="card-img-top himg img-fluid "  src="asset/food/${truc.image}" alt="${truc.libelle}">
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
                for (i = 3; i < 5; i++) {
                    var leplat = plt[i];
                    var card = $( `<div   class="card col-12 ml-1  mb-2 ">
                <img class="card-img-top img-fluid himg" src="asset/food/${leplat.image}" alt="${leplat.libelle}">
                <div class="card-body font-italic">
                    <h5  class="card-title  font-weight-bold ">${leplat.libelle}</h5>
                    <p class="card-text ">${leplat.description}<br> Menu: ${leplat.prix} €  </p>
               <span class="stock4 text-danger"><span>
              
         
                </div> <div class="mt-auto mb-2 text-center"><a href="#" value="${leplat.id_plat}" class="btn btn-warning di t">Commander</a></div>
            </div>`);
          
                    tel.append(card);
                    console.log(card);

                    var stock = resultat.find(".stock4");
    stock.text(leplat.active === 'Yes' ? '' : 'Disponible prochainement');
                };

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
                        <div class="card  col-12 col-md-3 mx-1 ">
                            <img class="card-img-top himg img-fluid"  src="asset/food/${uno.image}" alt="${uno.libelle}">
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
                            <img class="card-img-top himg img-fluid"  src="asset/food/${uno.image}" alt="${uno.libelle}">
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
                        <div class="card  d-flex flex-column col-12 col-md-2 mx-1 ">
                            <img class="card-img-top img-fluid himg" src="asset/food/${uno.image}" alt="${uno.libelle}">
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