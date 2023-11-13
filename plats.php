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
            </div>
        <div id="visible">
            <div class="w-100 row">
                <div class="col-3">
                    <div class="card border-0 bg-transparent">
                        <div class="card-body">
                            <img src="asset/cat.fond/cuisinier.png" class="card-img-top img-fluid" alt="Cuisinier">
                      </div>
                  </div>
              </div>
            
             <div class="row w-75" id="plats"></div>
        
             </div>
</div>
            <?php
         include('footer.php');
            ?>
       
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
         <script>
            
$(document).ready(function(){

$.getJSON("plat.json", function(json){
   var affichage=$("#plats");
    var ctg=json.categorie;
var plt=json.plat;
console.log(plt);
    for (i=0;i<plt.length;i++){
var item=plt[i];
var resultat=`<div class="card w-25 mr-4 mb-4"
                style=" background-image: url('asset/cat.fond/fond-blanc.png'); background-size: cover;">
                <img class="card-img-top" src="asset/food/${item.image}" alt="plat">
                <div class="card-body">
                    <h5 class="card-title font-weight-bold font-italic">${item.libelle}</h5>
                    <p class="card-text">${item.description}<br> Menu: ${item.prix} €  </p>
                    <a href="commande.html" class="btn btn-dark">commander</a>
                </div>
            </div>`
affichage.append(resultat);
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
              var visible=$("#visible");
             
visible.hide();
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
                          style=" background-image: url('asset/cat.fond/fond-blanc.png'); background-size: cover;">
                          <img class="card-img-top" src="asset/food/${uno.image}" alt="cheesburger">
                          <div class="card-body font-weight-bold font-italic">
                              <h5 class="card-title ">${uno.libelle}</h5>
                              <p class="card-text">${uno.description} <br> Menu: ${uno.prix} € 
                              </p>
                              <a href="commande.html" class="btn btn-dark">Commander</a>
                          </div>
                      </div>`;

                          a.append(txt);

                      });

                      rechercher(input);

                  }
              });
          };

});




 
        </script>
</body>

</html>