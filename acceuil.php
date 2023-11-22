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
                                    <input type="text" id="e" name="e" class="form-control">
                                    <div id="email"
                                        class="alert alert-danger alert-dismissible bg-transparent border-0 fade show"
                                        style="display:none;" role="alert">
                                        <strong>Ce champ est obligatoire </strong>
                                    </div>
                                </div>
                                <div class="col mr-4 ml-4 mb-4 mt-4">
                                    <label class="font-weight-bold font-italic text-right">Téléphone</label>
                                    <input type="text" id="t" name="t" class="form-control">
                                    <div id="tel"
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

                                    <input type="submit" name="bouton" id="bouton"
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


 


 