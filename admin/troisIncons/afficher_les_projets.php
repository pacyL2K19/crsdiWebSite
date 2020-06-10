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
        echo

        '
            <div class="widget-content" style="margin-left:35px;margin-top:10px;">
                <div class="media">
                    <img src="admin/img/projet/<?=$donnees_Projet["project_img"];?>" class=" align-self-center mr-3" alt="photoPojet" />';
                    echo '
                        <div class="media-body">
                        <h5 class="title">'.$donnees_Projet["project_title"].'</h5>
                            <h6 class="mt-0" title="Cellule">'.$donnees_Projet["project_cellule"].'</h6>
                            <span title="Unité du projet">'.$donnees_Projet["project_unite"].'</span>';
                        echo'<p class="mb-0" style="text-align: justify;">'.$donnees_Projet["project_desc"].' ...</p>';
        
                        echo'<p class="mb-0"> 
                                <a class="btn world-btn">lire plus</a>
                            </p>
                    </div>
                </div>
            </div>';

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