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
            <div class="container-fluid  " >
            <div class="row d-flex justify-content-center ml-3 mr-3" >
               <div id="gg" class="row justify-content-center mt-4"></div>
            </div>
            <div class="col-12 text-center"> <a type="submit" id="bottom" href="index.php" class="btn btn-dark t text-center mt-4" >Précedent</a></div>
            <div id="visible">
            <div class="col-12 d-flex justify-content-center">
               
                    <h1 class="font-weight-bold font-italic">Nos Catégories </h1>
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
                    <div class="col-12 d-flex justify-content-center">
<h1 class="font-weight-bold font-italic">Nos Best-sellers </h1>
</div>
                    <div class="col-2 mx-2"></div>
                    <div class="row w-75 justify-content-center " id="txt"></div>
                </div>


                <div class="container col-12 d-md-none" id="tel">
                </div>
                <div class="d-flex justify-content-between">
    <a type="submit" href="contact.php" class="btn btn-dark t" >Précedent</a>
    <a type="submit" href="categorie.php" class="btn btn-dark t" >Suivant</a>
</div>
            </div>
 
</div>
        <?php
        include('footer.php');
        ?>

    </div>
 
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script>
        $(document).ready(function () {
            var visible=$("#visible");
var btn=$("#bottom");
btn.hide();
            $.getJSON("plat.json", function (json) {
                var test=$("#gg");
                var affichage = $("#categorie");
                var tel=$("#tel");
                var ctg = json.categorie;
                var plt = json.plat;
                var affiche = $("#txt");
                for (i = 0; i < ctg.length; i++) {
                    var item = ctg[i];
                    var resultat = `<div class="t  cat card w-25 mr-4 mb-4 d-none d-md-block"
                style=" background-image: url('asset/cat.fond/fond-blanc.png'); background-size: cover;height:25rem;">
                <img class="card-img-top taille" src="asset/category/${item.image}" alt="${item.libelle}">
                <div class="card-body">
                    <h5 value="${item.id_categorie}" class="card-title font-weight-bold font-italic id">${item.libelle}</h5>
                
                  
                </div>
            </div>`
                    affichage.append(resultat);
                };
           
$(".cat").click(function () {
    var id=$(this).find(".id").attr("value");
              plat(id);
              btn.show();

          });
          function plat(id){
         test.empty();
         
    
            $.each(plt, function (element, uno) {
                var idcat=uno.id_categorie;
                if (idcat == id){ 
                            var t = ` 
                        <div class="card w-25 mx-1 "
                            style=" background-image: url('asset/cat.fond/fond-blanc.png'); background-size: cover;height:35rem;">
                            <img class="card-img-top" style="height:50%;" src="asset/food/${uno.image}" alt="${uno.libelle}">
                            <div class="card-body font-weight-bold font-italic">
                                <h5 class="card-title ">${uno.libelle}</h5>
                                <p class="card-text">${uno.description} <br> Menu: ${uno.prix} € </p>
                                <a href="commande.php" class="btn btn-dark t">Commander</a>
                            </div>
                        </div> `;
                        
                     
visible.hide();

                            test.append(t);
                            
                           
                };
                
                
                        });
          };
                for (i = 0; i < 3; i++) {
                    var truc = plt[i];
                    var r = `<div class="card w-25 mr-4 mb-4 d-none d-md-block"
                style=" background-image: url('asset/cat.fond/fond-blanc.png'); background-size: cover; height:35rem">
                <img class="card-img-top" style="height:50%;" src="asset/food/${truc.image}" alt="${truc.libelle}">
                <div class="card-body">
                    <h5 class="card-title font-weight-bold font-italic">${truc.libelle}</h5>
                    <p class="card-text">${truc.description}<br> Menu: ${truc.prix} €  </p>
                    <a href="commande.php" class="btn btn-dark t">commander</a>
                </div>
            </div>`
                    affiche.append(r);
                };
                for (i = 0; i < plt.length; i++) {
                    var leplat = plt[i];
                    var card = `<div class="card mb-2 "
                style=" background-image: url('asset/cat.fond/fond-blanc.png'); background-size: cover;height:35rem;">
                <img class="card-img-top" style="height:50%;" src="asset/food/${leplat.image}" alt="${leplat.libelle}">
                <div class="card-body">
                    <h5 class="card-title font-weight-bold font-italic">${leplat.libelle}</h5>
                    <p class="card-text">${leplat.description}<br> Menu: ${leplat.prix} €  </p>
                    <a href="commande.php" class="btn btn-dark t">commander</a>
                </div>
            </div>`
                    tel.append(card);
                };





            });
            
            $("#btn").click(function () {
              
                search();

            });
            $("#recherche").on("keypress", function (e) {
               
              if(e.which===13){
              
              search();
            
            };

          });
            function search() {
                var a = $("#afficher");
                a.empty();
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
                            var txt = ` 
                        <div class="card w-25 mx-1 "
                            style=" background-image: url('asset/cat.fond/fond-blanc.png'); background-size: cover;height:35rem;">
                            <img class="card-img-top" style="height:50%;" src="asset/food/${uno.image}" alt="${uno.libelle}">
                            <div class="card-body font-weight-bold font-italic">
                                <h5 class="card-title ">${uno.libelle}</h5>
                                <p class="card-text">${uno.description} <br> Menu: ${uno.prix} € </p>
                                <a href="commande.php" class="btn btn-dark t">Commander</a>
                            </div>
                        </div>`;

                            a.append(txt);

                        });


                    }
                });
            };
        });
    </script>
</body>

</html>