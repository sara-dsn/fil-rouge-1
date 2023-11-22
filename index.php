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

           
                <main>
    <?php
    if(!isset($_GET['page'])|| empty($_GET['page'])||$_GET['page']=='acceuil'){
      include('acceuil.php');
    };
    
    ?>
   </main>
   <main>
    <?php
    if(!isset($_GET['page'])|| empty($_GET['page'])||$_GET['page']=='categorie'){
      include('categorie.php');
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
   
    <script>
        $(document).ready(function () {
           var btn=$("#bottom"); 
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