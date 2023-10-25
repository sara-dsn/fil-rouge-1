$(document).ready(function(){
    $("#envoyer").click(function(){
        alert("a");
        verif();
    } );
    function verif(){
        var envoie=true;
var nom= $("#n").val();
if(nom===""){
    envoi=false;
    $("#n").show();
    e.preventDefault();
}
else if(envoi=true){
    $("#n").hide();
    document.forms[0].submit();
};
alert(nom);
var tel=$("#t").val();
if(tel===""){
    envoie=false;
    $("#tel").show();
    e.preventDefault();
    }
    else if (envoie=true){
        $("#tel").hide();
        document.forms[0].submit();
    }
};
    });
