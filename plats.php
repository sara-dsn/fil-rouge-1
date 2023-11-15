<!doctype html>
<html lang="fr">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="asset/css/style.css">
    <title>Plats</title>
</head>

<body>
    <div class="parallax-body">

        <div class="container-fluid">
            <?php
                  include('header.php');
            ?>
            <div class="w-100 d-flex row">
                <div class="row justify-content-center " id="afficher"></div>
                <div class="col-12 text-center" > <a type="submit" id="go" href="plats.php" class="btn btn-dark t text-center mt-4" >Précedent</a></div>
            </div>
        </div>
            <div id="visible" class="container-fluid ">
                <div class="col-12 d-flex justify-content-center">
                    <h1 class="font-weight-bold font-italic mt-2">Nos Plats </h1>
                </div>
                <div class="w-100 row">
                    <div class="col-3 d-none d-md-block">
                        <div class="card border-0 bg-transparent">
                            <div class="card-body">
                                <img src="asset/cat.fond/cuisinier.png" class="card-img-top img-fluid" alt="Cuisinier">
                            </div>
                        </div>
                  </div>
                
            
                <div class="row col-12 col-md-9 mt-4 ml-3" id="plats"></div>
        
       
                <div class="col-12 d-flex justify-content-between">
                    <a type="submit" href="categorie.php" class="btn btn-dark t" >Précedent</a>
                    <a type="submit" href="contact.php" class="btn btn-dark t" >Suivant</a>
                </div>
                </div>
            </div>
       
            <?php
                include('footer.php');
            ?>
       
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
      
         <script>
            
$(document).ready(function(){
    var btn=$("#go");
var visible=$("#visible");
btn.hide();
$.getJSON("plat.json", function(json){
var affichage=$("#plats");
var ctg=json.categorie;
var plt=json.plat;


for (i=0;i<plt.length;i++){
var item=plt[i];
var resultat=`<div class="card  col-12 col-md-3  mb-4 "
                style=" background-size: cover;height:38rem;">
                <img class="card-img-top" style="height:50%;" src="asset/food/${item.image}" alt="${item.libelle}">
                <div class="card-body ">
                    <h5 class="card-title font-weight-bold font-italic">${item.libelle}</h5>
                    <p class="card-text " >${item.description}<br> Menu: ${item.prix} €  </p>
                    <a href="commande.php" class="btn btn-dark t ">commander</a>
                </div>
            </div>`;
affichage.append(resultat);
    };
   
});

$("#btn").click(function () {
              
              search();

          });
          $("#recherche").on("keypress", function (e) {
             
            if(e.which===13){
            
            search(); //  visible.hide();
        
          };

        });
          function search() {
            btn.show();
            visible.hide();
              var a = $("#afficher");
              a.empty();
        
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
                          style=" background-image: url('asset/cat.fond/fond-blanc.png'); background-size: cover; height:35rem;">
                          <img class="card-img-top" style="height:50%;" src="asset/food/${uno.image}" alt="cheesburger">
                          <div class="card-body font-weight-bold font-italic ">
                              <h5 class="card-title ">${uno.libelle}</h5>
                              <p class="card-text ">${uno.description} <br> Menu: ${uno.prix} € 
                              </p>
                              <a href="commande.php" class="btn btn-dark t ">Commander</a>
                          </div>
                      </div>`;

                          a.append(txt);

                      });

                  };
              });
          };

});




 
        </script>
</body>

</html>