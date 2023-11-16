<!doctype html>
<html lang="fr">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="asset/css/style.css">
  <title>Contact</title>
</head>

<body>
  <div class="parallax-body">

    <div class="container-fluid ">

       <?php
        include('header.php');
        ?>
     <div class="w-100 d-flex row">
                 <div class="row justify-content-center " id="afficher"></div>
                 <div class="col-12 text-center" > <a type="submit" id="go" href="demande.php" class="btn btn-dark t text-center mt-4" >Précedent</a></div>
            </div>
        <div id="visible">
          <div class="item-content position-relative d-md-none">
            <img class="img-fluid w-100 mt-2" id="bandeau" src="asset/cat.fond/fond-bordeau.png" alt="bandeau de décoration couleur bordeaux">
          <div class="position-absolute d-flex justify-content-between w-100">
            <img class="img-fluid w-25" alt="verre de vin" src="asset/cat.fond/vin.png">
           <img class="img-fluid w-25" alt="cuisinier" src="asset/cat.fond/petitCuisinier.png">
          </div>
        </div>

      </div>

      <div class="container-fluid col-12 mb-4 mt-1 d-flex justify-content-start ">
        <div class="col-2 ">
           <div class="card border-0 bg-transparent  ">
            <div class="card-body">
               <img src="asset/cat.fond/cuisinier.png" class="card-img-top img-fluid" alt="Cuisinier">
             </div>
           </div>
        </div>
        <div calss="col-10">
          <h1 class="mt-4">Votre demande est envoyée!</h1><br>
          <a type="submit" class="btn btn-dark t" href="index.php">Retourner sur la page d'acceuil</a>
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
  <script src="asset/js/script.js"></script>
  <script>
            
            $(document).ready(function(){
            
            $.getJSON("plat.json", function(json){
               var affichage=$("#plats");
                var ctg=json.categorie;
            var plt=json.plat;
            var btn2=("#go");
            btn2.hide();
            $("#btn").click(function () {
                          
                          search();
            btn2.show();
                      });
                      $("#recherche").on("keypress", function (e) {
                         
                        if(e.which===13){
                        e.preventDefault();
                        search();
                       btn2.show();
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
                                  <div class="card w-25 mx-1 ">
                                      <img class="card-img-top himg" src="asset/food/${uno.image}" alt="cheesburger">
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
                    });
</script>
</body>

</html>