<?php 
session_start();
$bdd = new PDO('mysql: host=localhost; dbname=db_odk;', 'root');
$email_adm = $_POST['email'];
$password = sha1($_POST['mot_passe']);

if ($email_adm != null && $password != null) {
    $query = "SELECT * FROM administrateurs WHERE email_adm = :email AND mot_passe = :password";
    $stmt = $bdd->prepare($query);
    $stmt->bindParam(':email', $email_adm);
    $stmt->bindParam(':password', $password);
    $stmt->execute();

    $v_admin = $stmt->fetch();
    $_SESSION['id_adm'] = $v_admin['id_adm'];
    if ($v_admin && $v_admin['email_adm'] === $email_adm && $v_admin['mot_passe'] === $password) {
        $_SESSION['connexion'] = true;
        header('location: accueil.php'); 
    }

}
if($_SESSION['connexion'] == null) header('location: ../public/login.php'); 


?>