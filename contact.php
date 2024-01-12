

      <div id="visible">
    



       <div class="container-fluid col-12 mb-4 mt-1">
          <div class="col-12 d-flex justify-content-center">
            <h1 class="font-weight-bold font-italic">Formulaire de contact </h1>
          </div>
          <div class="row ">
            <div class="col-2 d-none d-md-block ">
              <div class="card border-0 bg-transparent  ">
               <div class="card-body">
                 <img src="asset/cat.fond/cuisinier.png" class="card-img-top img-fluid" alt="Cuisinier">
                </div>
             </div>
            </div>
            <form action="fomulaire.php" method="POST" class="col-12 col-md-8">
              <div class="form-row w-100 ">
                <div class="col-12 col-md-6   mb-4 mt-4 ">
                 <label class="font-weight-bold font-italic text-right">Nom</label>
                  <input name="nom" type="text" id="n" class="form-control">
                  <div id="nom"class="alert alert-danger border-0 alert-dismissible bg-transparent fade show" role="alert">
                   <strong>Ce champ est obligatoire</strong>
                 </div>
                </div>

                <div class="col-12 col-md-6 mb-4 mt-4">
                  <label class="font-weight-bold font-italic text-right">Prénom</label>
                  <input name="prenom" type="text" id="p" class="form-control">
                  <div id="pre" class="alert alert-danger alert-dismissible bg-transparent border-0 fade show"role="alert">
                    <strong>Ce champ est obligatoire</strong>
                  </div>
                </div>
              </div>
              <div class="form-row w-100">
                <div class="col-12 col-md-6  mb-4  mt-4">
                  <label class="font-weight-bold font-italic text-right">Email</label>
                  <input name="email" type="text" id="e" class="form-control">
                 <div id="email" class="alert alert-danger alert-dismissible bg-transparent border-0 fade show" role="alert">
                   <strong>Ce champ est obligatoire</strong>
                  </div>
               </div>
               <div class="col-12 col-md-6    mb-4 mt-4">
                  <label class="font-weight-bold font-italic text-right">Téléphone</label>
                  <input name="telephone" type="text" id="t" class="form-control">
                  <div id="tel"class="alert border-0 alert-danger alert-dismissible bg-transparent fade show" role="alert">
                   <strong>Ce champ est obligatoire </strong>
                 </div>
               </div>
              </div>
              <div class="col-12 form-group  mr-4 ">
                <label class="font-weight-bold font-italic text-right">Votre Demande</label>
                <textarea name="demande" class="form-control " id="d" rows="4"></textarea>
                <div id="dem" class="alert alert-danger alert-dismissiblaction bg-transparent border-0 fade show" role="alert">
                 <strong>Ce champ est obligatoire</strong>
                </div>
              </div>
              <div class="container-fluid col-12 ">
                <div class=" text-center ">
                  <input name="envoyer" type="submit" id="monbouton" href="index.php?page=réclamation-envoyer" class="btn btn-dark font-weight-bold font-italic text-right t" value="Envoyer">
                </div>
              </div>

            </form>


          </div>
        </div>
      

    
        <div class="d-flex justify-content-start mt-4">
          <a type="submit" href="index.php?page=repas-amiens" class="btn btn-dark t" >Précedent</a>
         
        </div>
      </div>
    </div>
   