<?php 

session_start();
$id_adm = htmlspecialchars($_SESSION['id_adm']);
$bdd = new PDO('mysql: host=localhost; dbname=db_odk;', 'root');
$admin = $bdd -> query('SELECT * FROM administrateurs');
$l_admin = array();
while ($a= $admin -> fetch ()){
        $l_admin[] = $a;
}

if(isset($_REQUEST['emp'])){
    $emp = $_REQUEST['emp'];


switch($emp){

    case "A" :             
               
               
        $nom = htmlspecialchars($_POST['nom']);
        $prenom = htmlspecialchars($_POST['prenom']);
        $email = htmlspecialchars($_POST['email']);
        $age = htmlspecialchars($_POST['age']);
        $date_naiss = htmlspecialchars($_POST['date_naiss']);
        $telephone = htmlspecialchars($_POST['telephone']);
        $id_pro = htmlspecialchars($_POST['id_pro']);

        $mat = $bdd -> prepare("SELECT nom_pro FROM promotions WHERE id_pro= $id_pro");
        $m = $mat -> fetch();
        $matricule = $m.genererMatricule();
        $photo = htmlspecialchars($_FILES['photo']['name']);
        move_uploaded_file($_FILES['photo']['tmp_name'], '../images/'.$photo);

        $apprenantAdd = $bdd -> prepare('INSERT INTO apprenants(nom, prenom, email, age, matricule, date_naiss, telephone, id_pro,id_adm, photo) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?) ');
        $apprenantAdd -> execute(array($nom, $prenom, $email, $age, $matricule, $date_naiss, $telephone, $id_pro, $id_adm, $photo));
        
        header('location: accueil.php');  
    //}
        break;
    case "M" :
        $id_app = $_REQUEST['id_app']; 

        $nom = htmlspecialchars($_POST['nom']);
        $prenom = htmlspecialchars($_POST['prenom']);
        $email = htmlspecialchars($_POST['email']);
        $age = htmlspecialchars($_POST['age']);
        $date_naiss = htmlspecialchars($_POST['date_naiss']);
        $telephone = htmlspecialchars($_POST['telephone']);
        $id_pro = htmlspecialchars($_POST['id_pro']);
        $matricule = htmlspecialchars($_POST['matricule']);
        $photo = htmlspecialchars($_POST['photo']);
        $delApp = $bdd->prepare("UPDATE apprenants SET nom = ?, prenom = ?, email = ?, age = ?, matricule = ?, date_naiss = ?, telephone = ?, id_pro = ?, id_adm = ?, photo = ? WHERE id_app = ?");
        $delApp->execute([$nom, $prenom, $email, $age, $matricule, $date_naiss, $telephone, $id_pro, $id_adm, $photo, $id_app]);
        header('location: accueil.php');         
        break;
    case "S" :
        $id_app = $_REQUEST['id_app'];
        $delApp = $bdd -> prepare("DELETE FROM apprenants WHERE id_app= $id_app");
        $mod = $delApp -> execute ();
         
         header('location: accueil.php');

        break;
    default:
        break;
            
}

}
$promo = $bdd -> query('SELECT * FROM promotions');
$l_pro = array();
while ($p= $promo -> fetch ()){
        $l_pro[] = $p;
}


$apprenant = $bdd -> query('SELECT * FROM apprenants JOIN promotions using (id_pro)');
$l_apprenant = array();
while ($app= $apprenant -> fetch ()){
        $l_apprenant[] = $app;
}
if(isset($_REQUEST['id_app'])){
    $id_app = $_REQUEST['id_app'];
    $detailApp = $bdd -> query("SELECT * FROM apprenants JOIN promotions using (id_pro) WHERE id_app= $id_app");
    $d_apprenant = $detailApp -> fetch ();

}


function genererMatricule()
{
    $caracteres = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    $matricule = '';

    for ($i = 0; $i < 4; $i++) {
        $index = rand(0, strlen($caracteres) - 1);
        $matricule .= $caracteres[$index];
    }

    return $matricule;
}
    
?>