<?php

require ('CRUD.php');
require ('../template/header.html');

echo'<div class="message">';
    echo'<p>Bienvenu sur le portail d’Orange Digital Kalanso</p>';
echo'</div>';
echo'<div class="divPhoto">';            
    echo'<img class="photo" src="../images/etudiante-afro-americaine-etudiante-longs-cheveux-tresses-mur-jaune-doigt-pointe-cote_1368-50825__1_-removebg-preview.png" alt="image introuvable" />';
echo'</div>';
        
echo'<div class="formulaire">';
    echo'<form action="CRUD.php" method="post">';
            echo'<div class="formTitle">Ajouter</div>';
            echo'<div class="formAdiv">';
                echo'<label class="labelA" for="nom">Nom :</label><br/>';
                echo'<input class="inputA" type="text" id="nom" name="nom" required>';
             echo'</div>';
             echo'<div class="formAdiv">';
                echo'<label class="labelA" for="prenom">Prenom :</label><br/>';
                echo'<input class="inputA" type="text" id="prenom" name="prenom" required>';
            echo'</div>';

            echo'<div class="formAdiv">';
                echo'<label class="labelA" for="email">Email :</label><br/>';
                echo'<input class="inputA" type="email" id="email" name="email" required>';
            echo'</div>';
            echo'<div class="formAdiv">';
                echo'<label class="labelA" for="mot_passe">Mot de passe :</label><br/>';
                echo'<input class="inputA" type="password" id="mot_passe" name="mot_passe" required>';
            echo'</div>';
            echo'<div class="divBtnb">';
                echo'<input class="btn" type="submit" name="ajouter" value="Ajouter">';
            echo'</div>';
    echo'</form>';
        
echo'</div>';


require ('../template/footer.html');


?>