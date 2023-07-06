<?php 
$bdd = new PDO('mysql: host=localhost; dbname=db_odk;', 'root');
if(isset($_POST['ajouter'])){
            //if(!empty($_POST['email']) AND !empty($_POST['mot_passe'])){
                
               
               
                $nom_adm = htmlspecialchars($_POST['nom']);
                $prenom_adm = htmlspecialchars($_POST['prenom']);
                $email_adm = htmlspecialchars($_POST['email']);
                $mot_passe = sha1($_POST['mot_passe']);

                $adminAdd = $bdd -> prepare('INSERT INTO administrateurs (nom_adm, prenom_adm, email_adm, mot_passe) VALUES (?, ?, ?, ?) ');
                $adminAdd -> execute(array($nom_adm, $prenom_adm, $email_adm, $mot_passe));
                
                header('location: index.php');  
            }
?>