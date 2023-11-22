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
          

      

      <div class="container-fluid col-12 mb-4 mt-1 d-flex  ">
        <div class="col-2 d-none d-md-block ">
           <div class="card border-0 bg-transparent  ">
            <div class="card-body">
               <img src="asset/cat.fond/cuisinier.png" class="card-img-top img-fluid  " alt="Cuisinier">
             </div>
           </div>
        </div>
        <div calss="col-10 justify-content-center ">
          <h2 class="mt-4 ml-4">Votre commande est envoyée,<br> Notre livreur va vous contacter dans moins de 5 minutes .</h2><br>
          </div>
          </div>
         <div class="w-100 d-flex justify-content-center"> <a type="submit" class="btn btn-dark t " href="index.php">Retourner sur la page d'acceuil</a></div>
        
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
            var btn=$("#go");
            btn.hide();
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
                        btn.show();
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
                                      var txt = $(` 
                                  <div class="card w-25 mx-1 ">
                                      <img class="card-img-top img-fluid himg" src="asset/food/${uno.image}" alt="${uno.libelle}">
                                      <div class="card-body font-weight-bold font-italic">
                                          <h5 class="card-title ">${uno.libelle}</h5>
                                          <p class="card-text">${uno.description} <br> Menu: ${uno.prix} € 
                                        </p><span class="stock1 text-danger"><span>
                                         
                                        
                                      </div> <div class="mt-auto mb-2 text-center"><a href="commande.html" class="btn btn-warning">Commander</a></div>
                                  </div>`);
            
                                      a.append(txt);
                                      var stock = resultat.find(".stock1");
    stock.text(uno.active === 'Yes' ? '' : 'Disponible prochainement');
            
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