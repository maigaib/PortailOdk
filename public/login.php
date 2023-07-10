<?php

session_start();
$_SESSION = null;
$_POST = null;
session_destroy();

require ('../template/header.html');

//<!-- ************************************** CONTENU *********************************************************-->
echo'<div class="message">';
    echo'<p>Bienvenu sur le portail d’Orange Digital Kalanso</p>';
echo'</div>';
echo'<div class="divPhoto">';            
    echo'<img class="photo" src="../images/etudiante-afro-americaine-etudiante-longs-cheveux-tresses-mur-jaune-doigt-pointe-cote_1368-50825__1_-removebg-preview.png" alt="image introuvable" />';
echo'</div>';
        
echo'<div class="formulaire">';
    echo'<form action="../src/connexion.php" method="post">';
        echo'<div class="formTitle">Connexion</div>';
            echo'<div class="formLog">';
                echo'<label class="labelA" for="email">Email :</label>';
                echo'<input class="inputA" type="email" id="email" name="email" required>';
            echo'</div> <br/><br/>';
            echo'<div class="formLog">';
                echo'<label  class="labelA"for="mot_passe">Mot de passe :</label>';
                echo'<input  class="inputA"type="password" id="mot_passe" name="mot_passe" required>';
            echo'</div>';
            echo'<div class="divBtn">';
                echo'<input class="btn" type="submit" name="Connexion" value="Connexion">';
            echo'</div>';
    echo'</form>';
        
echo'</div>';

require ('../template/footer.html');
?>