<?php

       // require('../includes/function.php');
        //  require('paginer_competances.php'); 
$var = verifier_POST($projet_max_afficher);
    $p_Prev =$var['pageAvant';
    $depart = $var['pageActuelle'];
    $p_Next =  $var['pageSuivante'];
 // $donnees_Projet = getProjects($depart,  $projet_max_afficher);
 $donnees_Projet = getProjects(0,5);
// echo'<img src="imag/'.$donnees_Ind["project_img"].'" class=" align-self-center mr-3" alt="photoPojet" />'; 

    foreach ($donnees_Projet as $donnees_Projet) {
        echo
        '
            <div class="widget-content" style="margin-top:10px;">
                <div class="media">
                    <img src="imag_01.jpg" class=" align-self-center mr-3" alt="photoPojet" />';
                    echo '
                        <div class="media-body">
                        <h5 class="title">'.$donnees_Projet["project_title"].'</h5>
                            <h6 class="mt-0" title="Cellule">'.$donnees_Projet["project_cellule"].'</h6>
                            <span title="Unité du projet">'.$donnees_Projet["project_unite"].'</span>';
                        echo'<p class="mb-0">'.$donnees_Projet["project_desc"].'</p>';
        
                        echo'<p class="mb-0"> 
                                <a href="industries.php?id='.$donnees_Projet['id_project'].'" class="btn world-btn">lire plus</a>
                            </p>
                    </div>
                </div>
            </div>';

    }
