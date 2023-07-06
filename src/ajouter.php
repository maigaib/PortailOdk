<?php

require ('CRUD.php');
require ('../template/header.html');

echo'<div class="message">';
    echo'<p>Bienvenu sur le portail d’Orange Digital Kalanso</p>';
echo'</div>';
echo'<div class="divPhoto">';            
    echo'<img class="photo" src="../images/etudiante-afro-americaine-etudiante-longs-cheveux-tresses-mur-jaune-doigt-pointe-cote_1368-50825__1_-removebg-preview.png" alt="image introuvable" />';
echo'</div>';
        
echo'<div class="formulaireAdd">';
    echo'<form action="ajouter.php" method="post" enctype=multipart/form-data id="form_id">';
        echo'<div class="formTitle">Apprenant</div>';
        echo'<input type="text"  name="emp" value= "A" style="display: none">';
            echo'<div class="formAdd">';
                echo'<label class="labelA" for="nom">Nom :</label>';
                echo'<input  class="inputA" type="text" id="nom" name="nom"  >';
                echo'<label class="labelA" for="prenom">Prenom :</label>';
                echo'<input  class="inputA" type="prenom" id="prenom" name="prenom"  >';
            echo'</div>';
            echo'<div class="formAdd">';
                echo'<label class="labelA" for="email">Email :</label>';
                echo'<input  class="inputA" type="email" id="email" name="email"  >';
                echo'<label class="labelA" for="age">Age :</label>';
                echo'<input  class="inputA" type="number" id="age" name="age"  >';
            echo'</div>';
            echo'<div class="formAdd">';
                echo'<label class="labelA" for="date_naiss">Date de Naissance :</label>';
                echo'<input  class="inputA" type="date" id="date_naiss" name="date_naiss"  >';
                echo'<label class="labelA" for="tel">Telephone :</label>';
                echo'<input  class="inputA" type="number" id="tel" name="telephone"  >';
            echo'</div>';
            echo'<div class="formAdd">';
                echo'<label class="labelA" for="promotion">Promotion :</label>';
                echo'<select class="inputA" name="id_pro" >';
                        foreach ($l_pro as $l){
                            echo "<option value=".$l['id_pro'].">";
                            echo $l['nom_pro'];
                            echo " </option>";
                        }
                        echo "</select>";
                          
                echo'<label class="labelA" for="date_sortie">Admin</label>';
                echo'<select class="inputA" name="id_adm" >';
                        foreach ($l_admin as $l){
                            echo "<option value=".$l['id_adm'].">";
                            echo $l['nom_adm'].' '.$l['prenom_adm'] ;
                            echo " </option>";
                        }
                        echo "</select>";
                echo'</div>';
            echo'<div class="formPhoto">';
                echo'<input class="inputPhoto" type="file"  name="photo">';
            echo'</div>';
            echo'<div class="divBtnA">';
                echo'<input class="btnA" type="submit" name="ajouter" value="Ajouter">';
            echo'</div>';
    echo'</form>';
                        echo'<span id="id_alerte"></span>';
        
echo'</div>';

require ('../template/footer.html');


?>