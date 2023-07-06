<?php 
$bdd = new PDO('mysql: host=localhost; dbname=db_odk;', 'root');
$admin = $bdd -> query('SELECT COUNT(*) FROM administrateurs');
$l_admin = $admin -> fetchColumn();

if($l_admin < 1){
    header('location: inscription.php');
} else{
    header('location: login.php');
    
}

?>