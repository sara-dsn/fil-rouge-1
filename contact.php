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
            </div>
        <div id="visible">
      <div class="item-content position-relative d-md-none">
        <img class="img-fluid w-100 mt-2" id="bandeau" src="asset/cat.fond/fond-bordeau.png"
          style=" margin-bottom: -80px;" alt="bandeau de décoration couleur bordeaux">
        <div class="position-absolute d-flex justify-content-between w-100" style="top: 0; left: 0;">
          <img class="img-fluid w-25" alt="verre de vin" src="asset/cat.fond/vin.png">
          <img class="img-fluid w-25" alt="cuisinier" src="asset/cat.fond/petitCuisinier.png">
        </div>
      </div>



      <div class="container-fluid col-12 mb-4 mt-1">
        <div class="row ">
          <div class="col-2 ">
            <div class="card border-0 bg-transparent  ">
              <div class="card-body">
                <img src="asset/cat.fond/cuisinier.png" class="card-img-top img-fluid" alt="Cuisinier">
              </div>
            </div>
          </div>
          <form action="asset/php/fomulaire.php" method="post" class="col-8 d-none d-md-block">
            <div class="form-row ">
              <div class="col mr-4 ml-4 mb-4 mt-4 ">
                <label class="font-weight-bold font-italic text-right">Nom</label>
                <input name="nom" type="text" id="n" class="form-control">
                <div id="nom" style="display:none;"
                  class="alert alert-danger border-0 alert-dismissible bg-transparent fade show" role="alert">
                  <strong>Ce champ est obligatoire</strong>
                </div>
              </div>

              <div class="col mr-4 ml-4 mb-4 mt-4">
                <label class="font-weight-bold font-italic text-right">Prénom</label>
                <input name="prenom" type="text" id="p" class="form-control">
                <div id="pre" class="alert alert-danger alert-dismissible bg-transparent border-0 fade show"
                  style="display:none;" role="alert">
                  <strong>Ce champ est obligatoire</strong>
                </div>
              </div>
            </div>
            <div class="form-row">
              <div class="col mr-4 ml-4 mb-4 mt-4">
                <label class="font-weight-bold font-italic text-right">Email</label>
                <input name="email" type="text" id="e" class="form-control">
                <div id="email" class="alert alert-danger alert-dismissible bg-transparent border-0 fade show"
                  style="display:none;" role="alert">
                  <strong>Ce champ est obligatoire</strong>
                </div>
              </div>
              <div class="col mr-4 ml-4 mb-4 mt-4">
                <label class="font-weight-bold font-italic text-right">Téléphone</label>
                <input name="telephone" type="text" id="t" class="form-control">
                <div id="tel" style="display:none;"
                  class="alert border-0 alert-danger alert-dismissible bg-transparent fade show" role="alert">
                  <strong>Ce champ est obligatoire </strong>
                </div>
              </div>
            </div>
            <div class="form-group mr-4 ml-4 mb-4 mt-4">
              <label class="font-weight-bold font-italic text-right">Votre Demande</label>
              <textarea name="demande" class="form-control" id="d" rows="4"></textarea>
              <div id="dem" class="alert alert-danger alert-dismissiblaction="#" method="POST"e bg-transparent border-0 fade show"
                style="display:none;" role="alert">
                <strong>Ce champ est obligatoire</strong>
              </div>
            </div>
            <div class="container-fluid col-12 ">
              <div class="item-content text-center ml-4 pl-4 ">

                <input name="envoyer" type="submit" id="monbouton" class="btn btn-dark font-weight-bold font-italic text-right"
                  value="Envoyer">
              </div>
            </div>

          </form>


        </div>
      </div>
        <form action="asset/php/fomulaire.php" method="post" class="form d-md-none">
          <div class="col-12">
            <label class="font-weight-bold font-italic text-right">Nom</label>
            <input name="nom" type="text" id="n2" class="form-control">
            <div id="nom2" style="display:none;"
              class="alert alert-danger border-0 alert-dismissible bg-transparent fade show" role="alert">
              <strong>Ce champ est obligatoire</strong>
            </div>
          </div>
          <div class="col-12">
            <label class="font-weight-bold font-italic text-right">Prénom</label>
            <input name="prenom" type="text" id="p2" class="form-control">
            <div id="pre2" class="alert alert-danger alert-dismissible bg-transparent border-0 fade show"
              style="display:none;" role="alert">
              <strong>Ce champ est obligatoire</strong>
            </div>
          </div>


          <div class="col-12">
            <label class="font-weight-bold font-italic text-right">Email</label>
            <input name="email" type="text" id="e2" class="form-control">
            <div id="email2" class="alert alert-danger alert-dismissible bg-transparent border-0 fade show"
              style="display:none;" role="alert">
              <strong>Ce champ est obligatoire</strong>
            </div>
          </div>
          <div class="col-12">
            <label class="font-weight-bold font-italic text-right">Téléphone</label>
            <input name="telephone" id="t2" type="text" class="form-control">
            <div id="tel2" style="display:none;"
              class="alert border-0 alert-danger alert-dismissible bg-transparent fade show" role="alert">
              <strong>Ce champ est obligatoire </strong>
            </div>
          </div>

          <div class="form-group col-12">
            <label class="font-weight-bold font-italic text-right">Votre Demande</label>
            <textarea name="demande" class="form-control" id="d2" rows="4"></textarea>
            <div id="dem2" class="alert alert-danger alert-dismissible bg-transparent border-0 fade show"
              style="display:none;" role="alert">
              <strong>Ce champ est obligatoire</strong>
            </div>
          </div>
          <div class="item-content text-center ml-4 pl-4 ">

            <input name="envoyer" type="submit" id="monboutonsm" class="btn btn-dark font-weight-bold font-italic text-right"
              value="Envoyer">
          </div>

        </form>

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
                    });
</script>
</body>

</html>