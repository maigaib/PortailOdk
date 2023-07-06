<?php
require ('CRUD.php');
require ('../template/header.html');

echo'<div class="divAccueil">';
    echo'<div class="accueilTitle">Liste des Apprenants certifiés de ODK</div>';
        echo' <table >';
                echo' <thead>';
                   echo'<tr>';
                     echo'<th>N° </th>';
                     echo'<th>Nom</th>';
                     echo'<th>Prenom </th>';
                     echo'<th>Promotion </th>';
                     echo'<th>';
                     echo'<a href="ajouter.php">';
                     echo'<button>Ajouter</button>';
                     echo'</a>';
                     echo'</th>';
                     echo'</tr>';
               echo'</thead>';
               echo'<tbody>';
               $n=1;
               foreach ($l_apprenant as $l){
               echo'<tr>';
               echo'<td>'.$n.'</td>';
               echo'<td>'.$l['nom'].'</td>';
               echo'<td>'.$l['prenom'].' </td>';
               echo'<td>'.$l['nom_pro'].' </td>';
               echo'<td style="align-items: center;">';
               echo"<a href=detail.php?id_app=".$l['id_app'].">";
               echo'<img class="bdetail" src="../images/detail2.png" alt="image introuvable" /> ';
               echo'</a>';
               echo'</td>';
               echo'</tr>';
               $n++;
              }
               echo' </tbody>';
echo' </table>';     


echo'</div>';

require ('../template/footer.html');
?>