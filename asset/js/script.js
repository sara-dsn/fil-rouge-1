$(document).ready(function () {

    //Formulaire contact version desktop
    $("#monbouton").click(function (e) {
       
        contact(e);
    });
    //Formulaire contact version mobile
    $("#monboutonsm").click(function (e) {
        // alert("a");
        
        contactsm(e);
    });
    //Formulaire commande version mobile
    $("#boutonsm").click(function (e) {
       
        commandesm(e);
    });
    //Formulaire commande version desktop
    $("#bouton").click(function (e) {
      
        commande(e);
    });




    function contact(e) {
   
        $("#pre").hide();
        $("#email").hide();
        $("#tel").hide();
        $("#dem").hide();
       
       
        var envoi = true;
        var nom = $("#n").val();
        if (nom === "") {
            envoi = false;
            $("#nom").show();
            e.preventDefault();
        }
        else if (envoi == true) {
            $("#nom").hide();
           
        };
        var prenom = $("#p").val();
        if (prenom === "") {
            envoi = false;
            $("#pre").show();
            e.preventDefault();
        }
        else if (envoi == true) {
            $("#pre").hide();
       
        };


        var email = $("#e").val();
        if (email === "") {
            envoi = false;
            $("#email").show();
            e.preventDefault();
        }
        else if (envoi == true) {
            $("#email").hide();
       
        };


        var tel = $("#t").val();
        if (tel === "") {
          
            envoie = false;
            $("#tel").show();
            e.preventDefault();
        }
        else if (envoi == true) {
            $("#tel").hide();
          
        };
        var demande = $("#d").val();
        if (demande === "") {
            envoi = false;
            $("#dem").show();
            e.preventDefault();
        }
        else if (envoi == true) {
            $("#dem").hide();
           
        };
    };



    function contactsm(e) {
   

        $("#pre2").hide();
        $("#email2").hide();
        $("#tel2").hide();
        $("#dem2").hide();
       
        var envoi = true;
        var nom = $("#n2").val();
        
        if (nom === "") {
            envoi = false;
            $("#nom2").show();
            e.preventDefault();
            
        }
        else if (envoi == true) {
            $("#nom2").hide();
            var prenom = $("#p2").val();
        if (prenom === "") {
            envoi = false;
            $("#pre2").show();
            e.preventDefault();
        }
        else if (envoi == true) {
            $("#pre2").hide();
       
        };
        };
       


        var email = $("#e2").val();
        if (email === "") {
            envoi = false;
            $("#email2").show();
            e.preventDefault();
        }
        else if (envoi == true) {
            $("#email2").hide();
       
        };


        var tel = $("#t2").val();
        if (tel === "") {
          
            envoie = false;
            $("#tel2").show();
            e.preventDefault();
        }
        else if (envoi == true) {
            $("#tel2").hide();
          
        };
        var demande = $("#d2").val();
        if (demande === "") {
            envoi = false;
            $("#dem2").show();
            e.preventDefault();
        }
        else if (envoi == true) {
            $("#dem2").hide();
           
        };
    };


    


    function commande(e) {
       
        var envoi = true;
        
        $("#nompre").hide();
        $("#email").hide();
        $("#tel").hide();
        $("#adresse").hide();

        var nompre = $("#np").val();
        if (nompre === "") {
            envoi = false;
            $("#nompre").show();
            e.preventDefault();
        }
        else if (envoi == true) {
            $("#nompre").hide();
           
        };


        var email = $("#e").val();
        if (email === "") {
            envoi = false;
            $("#email").show();
            e.preventDefault();
        }
        else if (envoi == true) {
            $("#email").hide();
       
        };


        var tel = $("#t").val();
        if (tel === "") {
            envoi = false;
            $("#tel").show();
            e.preventDefault();
        }
        else if (envoi == true) {
            $("#tel").hide();
          
        };

        var adresse = $("#a").val();
        if (adresse === "") {
            envoi = false;
            $("#adresse").show();
            e.preventDefault();
        }
        else if (envoi == true) {
            $("#adresse").hide();
           
        };
    };




        
    


        function commandesm(e) {
           
            var envoi = true;

            $("#nompre2").hide();
        $("#email2").hide();
        $("#tel2").hide();
        $("#adresse2").hide();
        
            var nompre = $("#np2").val();
            if (nompre === "") {
               
                envoi = false;
               
                $("#nompre2").show();
                
                e.preventDefault();
                
               
            }
            else if (envoi == true) {
                $("#nompre2").hide();
               
            };
    
    
            var email = $("#e2").val();
            if (email === "") {
                envoi = false;
                $("#email2").show();
                e.preventDefault();
            }
            else if (envoi == true) {
                $("#email2").hide();
           
            };
    
    
            var tel = $("#t2").val();
            if (tel === "") {
                envoi = false;
                $("#tel2").show();
                e.preventDefault();
            }
            else if (envoi == true) {
                $("#tel2").hide();
              
            };
    
            var adresse = $("#a2").val();
            if (adresse === "") {
                envoi = false;
                $("#adresse2").show();
                e.preventDefault();
            }
            else if (envoi == true) {
                $("#adresse2").hide();
               
            };

        };  
   

});
