<?php 
$id_app = $_GET['id_app'];
require ('CRUD.php');
require ('../template/header.html');

echo'<div class="message">';
    echo'<p>Bienvenu sur le portail d’Orange Digital Kalanso</p>';
echo'</div>';
echo'<div class="divPhoto">';            
    echo'<img class="photo" src="../images/etudiante-afro-americaine-etudiante-longs-cheveux-tresses-mur-jaune-doigt-pointe-cote_1368-50825__1_-removebg-preview.png" alt="image introuvable" />';
echo'</div>';
        
        echo'<div class="formulaireMod">';
            echo'<form action="modifier.php" method="post" enctype=multipart/form-data>';
                echo'<div class="formTitle"> Modification Apprenant</div>';
                    echo'<input type="text"  name="emp" value= "M" style="display: none">';
                    echo'<input type=text  name=id_app value= ".$id_app." style= "display: none">';
                    echo'<div  class="divPhotoM"><img class="photoMod" src="../images/'.$d_apprenant['photo'].'"></div>';
                echo'<div class="formMod"><br/>';
                    echo'<label class="labelA" for="nom">Nom :</label>';
                    echo"<input  class=inputA type=text id=nom name=nom  value= ".$d_apprenant['nom']." required><br/>";
                    echo'<label class="labelA" for="prenom">Prenom :</label>';
                    echo"<input  class=inputA type=prenom id=prenom name=prenom value= ".$d_apprenant['prenom']." required>";
                echo'</div>';
                echo'<div class="formMod"><br/>';
                    echo'<label class="labelA" for="email">Email :</label>';
                    echo"<input  class=inputA type=email id=email name=email value= ".$d_apprenant['email']." required><br/>";
                    echo'<label class="labelA" for="age">Age :</label>';
                    echo"<input  class=inputA type=number id=age name=age value= ".$d_apprenant['age']." required>";
                echo'</div>';
                echo'<div class="formMod"> <br/>';
                    echo'<label class="labelA" for="date_naiss">Date de Naissance :</label>';
                    echo"<input  class=inputA type=date id=date_naiss name=date_naiss value= ".$d_apprenant['date_naiss']." required><br/>";
                    echo'<label class="labelA" for="tel">Telephone :</label>';
                    echo"<input  class=inputA type=number id=tel name=telephone value= ".$d_apprenant['telephone']." required>";            
                 echo'</div>';
                 echo'<div class="formMod"><br/>'; 
                    echo'<label class="labelA" for="date_sortie">Promotion</label>';
                    echo'<select class="inputA" name="id_pro" >';
                        foreach ($l_pro as $l){
                            echo "<option value=".$l['id_pro'].">";
                            echo $l['nom_pro'];
                            echo " </option>";
                        }
                        echo "</select><br/>";
                    echo'<label class="labelA" for="date_sortie">Matricule</label>';
                    echo"<input class=inputA type=text  name=matricule value=".$d_apprenant['matricule']." readonly>";
                echo'</div>';
                echo'<div class="divBtnAm">';
                    echo'<input class="btnA" type="submit" name="modifier" value="Modifier">';
                echo'</div>';
            echo'</form>';
        echo'</div>';

require ('../template/footer.html');


?>
