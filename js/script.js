var error = document.getElementById('id_alerte');
function OnSubmit(){
    var nom = document.getElementById('nom');
    var prenom = document.getElementById('prenom');
    var email = document.getElementById('email');
    var age = document.getElementById('age');
    var date_naiss = document.getElementById('date_naiss');
    var telephone = document.getElementById('tel');
    if(nom.value == ""){
        error.innerHTML="Veillez remplir tous les champs";
        return;
    }
    if ((new Date().getFullYear()- new Date(date_naiss.value).getFullYear()) != age.value){
        error.innerHTML= "L'age saisie ne correspond pas à la date  de naissance donnée";
        return;
    }
    document.getElementById('form_id').submit();
}


