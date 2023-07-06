<?php
require ('CRUD.php');
require ('../template/header.html');

echo'<div class="divAccueil">';
    echo'<div class="">
            <a href="accueil.php">
                <img class="return" src="../images/return.png">
            </a>
         </div>';
    echo'<div class="">
            <a href="detail.php?id_app='.$d_apprenant['id_app'].'&emp=S">
                 <img class="delete" src="../images/delete_orange2.png">
            </a>
         </div>';
    echo'<div class="">
            <a href="modifier.php?id_app='.$d_apprenant['id_app'].'">
                 <img class="edit" src="../images/Edit-icon.png">
            </a>
         </div>';
    echo'<div ><img class="detailDiv" src="../images/'.$d_apprenant['photo'].'"></div>';  
    echo' <div class="dNom">'.$d_apprenant['nom'].' '.$d_apprenant['prenom'].'</div>
    <div class="dEmail">Email : '.$d_apprenant['email'].'</div>
    <div class="dDate">
    Date de Naissance :   '.$d_apprenant['date_naiss'].'
    </div>';
               //$annee = date("Y", strtotime($d_apprenant['date_sortie']));
    echo'<div class="dPromotion">Promotion : '.$d_apprenant['nom_pro'].'</div>
    <div class="dTelephone">Telephone :  '.$d_apprenant['telephone'].'</div>
    <div class="dAnnee">Année de certification : '.$d_apprenant['date_sortie'].'</div>';

echo'</div>';

require ('../template/footer.html');
?>