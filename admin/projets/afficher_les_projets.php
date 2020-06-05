<?php
 $var = verifierPOST($projet_max_afficher);

// echo("Voici la pageSuivante: ".$var['pageSuivante']."
//     <br /> page actuel: ".$var['pageActuelle']."
//      <br /> page precedente: ".$var['pageAvant']);

    $p_Prev =$var['pageAvant'];
    $depart = $var['pageActuelle'];
    $p_Next =  $var['pageSuivante'];

 $donnees_Projet= getProjects($depart, $projet_max_afficher);
// echo'<img src="imag/'.$donnees_Ind["project_img"].'" class=" align-self-center mr-3" alt="photoPojet" />'; 
    foreach ($donnees_Projet as $donnees_Projet) {
        ?>
            <div class="widget-content" style="margin-left:35px;margin-top:10px;">
                <div class="media">
                    <img src='admin/img/projet/<?=$donnees_Projet['project_img'];?>' class='align-self-center mr-3' alt='photoPojet' />
                        <div class="media-body">
                        <h5 class="title"><?=$donnees_Projet["project_title"];?></h5>
                            <span class="mt-0" 
                            data-toggle="tooltip" data-placement="bottom"
                             title="Cellule"> <?=$donnees_Projet["project_cellule"];?></span>
                            
                            <span data-toggle="tooltip" data-placement="bottom"
                             title="Unité du projet">( <?=$donnees_Projet["project_unite"];?> )</span> 
                        <p class="mb-0" style="text-align: justify;"><?=$donnees_Projet["project_desc"]?> ...</p>
        
                        <p class="mb-0"> 
                                <a  href="projets.php?id=<?=$donnees_Projet["id_project"];?>" class="btn world-btn">lire plus</a>
                        </p>
                    </div>
                </div>
            </div>
            <?php

    }
    ?>
    <!-- Ce qui suit concernere les boutons de paginations
    ================================================ -->
    <div style="margin-top:5px;">
        <?php
            $page ='projets.php';

        //  AfficherBouttonPaginer($lien,$pAvant,$pSuivante) : 
                //   Cettefonction afficher l objet pagination et
                //  ses boutons renvoient alors vers la page 'passe' en parametre

            require('FormPagination.php');
            AfficherBouttonPaginer($page, $p_Prev, $p_Next);
        ?>
    </div>