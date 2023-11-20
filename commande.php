<!doctype html>
<html lang="fr">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="asset/css/style.css">
    <title>Commande</title>

</head>

<body>
    <div class="parallax-body">

        <div class="container-fluid ">
            <?php
                include('fil-rouge-1/header.php');
            ?>
            <div class="container-fluid  " >
                <div class="w-100 d-flex row">
                     <div class="row justify-content-center " id="afficher"></div>
                    <div class="col-12 text-center" > <a type="submit" id="go" href="commande.php" class="btn btn-dark t text-center mt-4" >Précedent</a></div>
                </div>
            </div>
           
            <div class="row d-flex justify-content-center ml-3 mr-3" >
               
                <div id="gg" class="row justify-content-center mt-4"></div>
                <div  > <a type="submit" id="bottom" href="index.php" class="btn btn-dark t text-center mt-4" >Précedent</a></div>
            </div>
            <div class="col-12 d-flex justify-content-center">
<h1 class="font-weight-bold font-italic">Votre Commande :</h1>
</div>
            <div class="item-content position-relative d-none d-md-block w-25 mx-auto text-center">

                <div class="card "
                    style="width: 15rem; background-image: url('asset/cat.fond/fond-blanc.png'); background-size: cover;">
                    <img class="card-img-top" src="asset/food/cheesburger.jpg" alt="burger360">
                    <div class="card-body">
                        <h5 class="card-title">Le 360</h5>
                        <p class="card-text">2 steaks 180g, cheddar, sauce au choix et crudités<br> Total: 11€</p>
                        <a href="#" class="btn btn-dark t">Quantité: 1</a>
                    </div>
                </div>
            </div>



            <div class="container-fluid col-12 d-none d-md-block mb-4 mt-4">
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
                    </form>

                </div>
            </div>
            <div class="item-content position-relative text-center ml-4 w-100 d-md-none">
            <div class="col-12 d-flex justify-content-center">
<h1 class="font-weight-bold font-italic">Votre Commande :</h1>
</div>
                <div class="card "
                    style="width: 15rem; background-image: url('asset/cat.fond/fond-blanc.png'); background-size: cover;">
                    <img class="col-4" src="asset/food/cheesburger.jpg" alt="burger360">
                    <div class="card-body col-8">
                        <h5 class="card-title">Le 360</h5>
                        <p class="card-text">2 steaks 180g, cheddar, sauce au choix et crudités<br> Total: 11€
                        </p>
                        <a href="#" class="btn btn-dark t">Quantité: 1</a>
                    </div>
                </div>
            </div>



            <div class="container-fluid w-100 d-md-none">


                <form class="w-100">

                    <div class=" w-100">
                        <label class="font-weight-bold font-italic text-right">Nom et
                            Prénom</label>
                        <input type="text" id="np2" class="form-control">
                        <div id="nompre2" class="alert alert-danger alert-dismissible bg-transparent border-0 fade show"
                        style="display:none;" role="alert">
                            <strong>Ce champ est obligatoire</strong>
                        </div>
                    </div>


                    <div class="w-100">
                        <label class="font-weight-bold font-italic text-right">Email</label>
                        <input id="e2" type="text" class="form-control">
                        <div id="email2" class="alert alert-danger alert-dismissible bg-transparent border-0 fade show"
                            style="display:none;" role="alert">
                            <strong>Ce champ est obligatoire </strong>
                        </div>
                    </div>
                    <div class="w-100">
                        <label class="font-weight-bold font-italic text-right">Téléphone</label>
                        <input type="text" id="t2" class="form-control">
                        <div id="tel2" class="alert alert-danger alert-dismissible bg-transparent border-0 fade show"
                            style="display:none;" role="alert">
                            <strong>Ce champ est obligatoire</strong>
                        </div>
                    </div>

                    <div class="form-group w-100">
                        <label class="font-weight-bold font-italic text-right">Votre
                            Adresse</label>
                        <textarea class="form-control" id="a2" rows="4"></textarea>
                        <div id="adresse2" class="alert alert-danger alert-dismissible fade bg-transparent border-0 show"
                            style="display:none;" role="alert">
                            <strong>Ce champ est obligatoire</strong>
                        </div>
                    </div>
                    <div class="container-fluid col-12 ">
                        <div class="item-content text-center ml-4 pl-4 ">

                            <input type="submit" id="boutonsm"
                                class="btn btn-dark t font-weight-bold font-italic text-right mt-4" value="Envoyer">
                        </div>
                    </div>


            </div>






        </div>



        <?php
        include('fil-rouge-1/footer.php');
        ?>
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
            var btn2=("#go");
            btn2.hide();
            $.getJSON("plat.json", function(json){
               var affichage=$("#plats");
                var ctg=json.categorie;
            var plt=json.plat;
            
            $("#btn").click(function (e) {
                         
                          search();
            btn2.show();
                      });
                      $("#recherche").on("keypress", function (e) {
                         
                        if(e.which===13){
                        e.preventDefault();
                        search();
                       btn2.show();                      };
            
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
                                      var txt = $(` 
                                  <div class="card w-25 mx-1 "
                                      style=" background-image: url('asset/cat.fond/fond-blanc.png'); background-size: cover;">
                                      <img class="card-img-top" src="asset/food/${uno.image}" alt="cheesburger">
                                      <div class="card-body font-weight-bold font-italic">
                                          <h5 class="card-title ">${uno.libelle}</h5>
                                          <p class="card-text">${uno.description} <br> Menu: ${uno.prix} € 
                                  
                                          <a href="commande.html" class="btn btn-dark">Commander</a>
                                          </p> <span class="stock5 text-danger"><span>
                                      </div>
                                  </div>`);
            
                                      a.append(txt);
                                      var stock = txt.find(".stock5");
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