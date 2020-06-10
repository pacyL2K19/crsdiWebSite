<?php  
// actualite_voirPlus_niveau1.php
require('../includes/function.php');
//$cell =$_GET['cellule'];
                     //$page_paginer = $_GET['pageAvant'];

                     //echo("la cellule est : ".$cell." et la page est : ".$page_paginer);
    function afficher_pt_format($cel){  // CETTE FONCTION AFFICHE LES ARTICLES DU COTE DROIT DE LA CELLULE CHOISIE
        $artsCellule = getArticlesByCells($cel);
        $comp = 0;
        foreach ($artsCellule as $artCellule) {
                    echo " 
            <div class='single-blog-post post-style-2 d-flex align-items-center'>
                <!-- Post Thumbnail -->
                <div class='post-thumbnail'>
                    <img src='admin/img/uploads/".$artCellule['cover']."' alt=''>
                </div>
                <!-- Post Content -->
                <div class='post-content'>
                    <a href='article.php?id=".$artCellule['id']."' class='headline'>
                        <h5>".$artCellule['title']."</h5>
                    </a>
                    <!-- Post Meta -->
                    <div class='post-meta'>
                        <p><a href='article.php?id=".$artCellule['id']."' class='post-author'>".$artCellule['autor']."</a> le <a href='#' class='post-date'>".$artCellule['date_post']."</a></p>
                    </div>
                </div>
            </div>
            ";
            
        }

              echo "<div style='text-align: center;margin-top:10px;'>
                       <input style='display:none;'  id='id_cate' value='$cel'/>
                       <button  type='submit' id='bb_voirPlus'  class='btn world-btn'>Voir plus</button>
                   </div>";                                                   
                        

                
    }
?>
            <!-- CELLULE : Technologies
    ========================= --> 
    <div class="tab-pane fade" id="world-tab-2" role="tabpanel" aria-labelledby="tab2">
        <div class="row">
           <!-- <div class="col-12 col-md-6"> -->
                <?php
                     $cellule = "Technologies";
                     //afficher_gd_format($cellule);
                ?>  
           <!-- </div>-->

            <div class="col-12 col-md-12">
                <!-- Single Blog Post -->
                <?php 
                     $cellule = "Technologies";//  $_POST['cellule']; //"Technologies";
                     //afficher_pt_format($cellule);
                    // $cell =$_GET['cellule'];
                    // $page_paginer = $_GET['pageAvant'];

                     $artsCellule =[];
                     //echo("la cellule est : ".$cell." et la page est : ".$page_paginer);
                     // echo("<br />la cellule est et la page est ");
                     $artsCellule = getArticlesByCells($cellule);
                     $artsCellule['ajout'] = "AJouterr";
                              echo json_encode($artsCellule );

                 ?>  
            </div>
       </div>
    </div>