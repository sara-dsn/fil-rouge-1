$(document).ready(function () {

    $("#monbouton").click(function () {
     
        verif();
    });
    $("#bouton").click(function () {
       
        ver();
    });


    function verif() {
   

       
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
        var tel = $("#t").val();
        if (tel === "") {
          
            envoie = false;
            $("#tel").show();
            e.preventDefault();
        }
        else if (envoi == true) {
            $("#tel").hide();
          
        };
    };


    function ver() {
       
        var envoi = true;

        var np = $("#np").val();
        if (np === "") {
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
