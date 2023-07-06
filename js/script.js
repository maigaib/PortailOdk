var error = document.getElementById('id_alerte');
function OnSubmit(){
    
}
document.getElementById('form_id').addEventListener('submit', e =>{
    var nom = document.getElementById('nom');
    var prenom = document.getElementById('prenom');
    var email = document.getElementById('email');
    var age = document.getElementById('age');
    var date_naiss = document.getElementById('naiss');
    var telephone = document.getElementById('tel');

    if(nom.value == ""){
        error.innerHTML="Veillez remplir tous les champs";
        return;
    }

});


