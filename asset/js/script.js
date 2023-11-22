$(document).ready(function () {

    //Formulaire contact 
    $("#monbouton").click(function (e) {
       
        contact(e);
    });

    //Formulaire commande 
    $("#bouton").click(function (e) {
      
        commande(e);
    });



//Formulaire contact 
    function contact(e) {
       
        // $("#pre").hide();
        // $("#email").hide();
        // $("#tel").hide();
        // $("#dem").hide();
       
       
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
       
        console.log("hih");
        var email = $("#e").val();
        if (email === "") {
            
            envoi = false;
            $("#email").show();
            alert(email);
            e.preventDefault();
            console.log(email);
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



    

   //Formulaire commande :
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

});