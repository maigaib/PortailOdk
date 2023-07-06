<?php

if(isset($_POST['ajouter'])){
    if(!empty($_POST['email']) AND !empty($_POST['mot_passe'])){

    }else{
        echo"Veillez completer tous les champs";
    }
}

require ('../template/header.html');

//<!-- ************************************** CONTENU *********************************************************-->
echo'<div class="message">';
    echo'<p>Bienvenu sur le portail d’Orange Digital Kalanso</p>';
echo'</div>';
echo'<div class="divPhoto">';            
    echo'<img class="photo" src="../images/etudiante-afro-americaine-etudiante-longs-cheveux-tresses-mur-jaune-doigt-pointe-cote_1368-50825__1_-removebg-preview.png" alt="image introuvable" />';
echo'</div>';
        
echo'<div class="formulaire">';
    echo'<form action="../src/accueil.php" method="post">';
        echo'<div class="formTitle">Connexion</div>';
            echo'<div class="formDiv">';
                echo'<label for="email">Email :</label><br/>';
                echo'<input type="email" id="email" name="email" required>';
            echo'</div>';
            echo'<div class="formDiv">';
                echo'<label for="mot_passe">Mot de passe :</label><br/>';
                echo'<input type="password" id="mot_passe" name="mot_passe" required>';
            echo'</div>';
            echo'<div class="divBtn">';
                echo'<input class="btn" type="submit" name="Connexion" value="Connexion">';
            echo'</div>';
    echo'</form>';
        
echo'</div>';

require ('../template/footer.html');
?>