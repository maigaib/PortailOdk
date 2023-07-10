<?php
require ('CRUD.php');
//require ('connexion.php');
require ('../template/header.html');

echo'<div class="divAccueil">';
    echo'<div class="accueilTitle">Liste des Apprenants certifiés de ODK</div>';
    echo'<div><a href="ajouter.php">';
                     echo'<button>Ajouter</button>';
                     echo'</a></div>';
        echo' <table >';
                echo' <thead>';
                   echo'<tr>';
                     echo'<th>N° </th>';
                     echo'<th>Nom</th>';
                     echo'<th>Prenom </th>';
                     echo'<th>Promotion </th>';
                     echo'<th>Actions</th>';
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
               echo'<a href="detail.php?id_app='.$l['id_app'].'&emp=S">
                 <img class="delete" src="../images/delete_orange2.png"></a>';
               echo'<a href="modifier.php?id_app='.$l['id_app'].'">
                 <img class="edit" src="../images/Edit-icon.png"></a>';
               echo'</td>';
               echo'</tr>';
               $n++;
              }
               echo' </tbody>';
echo' </table>';     


echo'</div>';

require ('../template/footer.html');
?>