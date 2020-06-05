<?php
//require('../includes/function.php');

    function afficher_Slide_article_gd(){ // CETTE FONCTION AFFICHE LES ARTICLES  EN SLIDE (COTE GAUCHE) <<<< POUR LE MENU ACTUALITE "Tout"
            $articles = getArticles();
            foreach ($articles as $article) {
                echo "

        <!-- Single Blog Post -->
        <div class='single-blog-post'>
            <!-- Post Thumbnail -->
            <div class='post-thumbnail'>
                <img src='admin/img/uploads/".$article['cover']."' alt=''>
                <!-- Catagory -->
                <div class='post-cta'><a href='#'>".$article['categorie']."</a></div>
            </div>
            <!-- Post Content -->
            <div class='post-content'>
                <a href='article.php?id=".$article['id']."'' class='headline'>
                    <h5>".$article['title']."</h5>
                </a>
                <p>".htmlspecialchars_decode ($article['contenue'])."...</p>
                <!-- Post Meta -->
                <div class='post-meta'>
                    <p><a href='#'' class='post-author'>".$article['autor']."</a> le <a href='#'' class='post-date'>".$article['date_post']."</a></p>
                </div>
            </div>
        </div>
        ";
        }
    }


function afficher_Slide_article_pt(){ // CETTE FONCTION AFFICHE LES ARTICLES  (COTE DROIT) <<<< POUR LE MENU ACTUALITE "Tout"
        $articles = getArticles();
        $i = 2;
        foreach ($articles as $article) {
                echo " 
        <div class='single-blog-post post-style-2 d-flex align-items-center wow fadeInUpBig' data-wow-delay='0.".$i."s'>
            <!-- Post Thumbnail -->
            <div class='post-thumbnail'>
                <img src='admin/img/uploads/".$article['cover']."' alt='CRSDI'>
            </div>
            <!-- Post Content -->
            <div class='post-content'>
                <a href='article.php?id=".$article['id']."' class='headline'>
                    <h5>".$article['title']."</h5>
                </a>
                <!-- Post Meta -->
                <div class='post-meta'>
                    <p><a href='article.php?id=".$article['id']."' class='post-author'>".$article['autor']."</a> le <a href='#' class='post-date'>".$article['date_post']."</a></p>
                </div>
            </div>
        </div>
        ";
        $i++;
        }
}
    function afficher_gd_format($cel){              // CETTE FONCTION AFFICHE L'ARTICLE PRINCIPALE (COTE GAUCHE) DE LA CELLULE CHOISIE
        $firstArt = getFirstArticleCellule($cel);
        foreach ($firstArt as $firstArtEcho) {
                echo " 
            <!-- Single Blog Post -->
            <div class='single-blog-post'>
                <!-- Post Thumbnail -->
                <div class='post-thumbnail'>
                    <img src='admin/img/uploads/".$firstArtEcho['cover']."' alt=''>
                    <!-- Catagory -->
                    <div class='post-cta'><a href='#'>Tech</a></div>
                </div>
                <!-- Post Content -->
                <div class='post-content'>
                    <a href='#' class='headline'>
                        <h5>".$firstArtEcho['title']."</h5>
                    </a>
                    <p>".$firstArtEcho['contenue']." ...</p>
                    <!-- Post Meta -->
                    <div class='post-meta'>
                        <p><a href='#' class='post-author'>".$firstArtEcho['autor']."</a> le <a href='#' class='post-date'>".$firstArtEcho['date_post']."</a></p>
                    </div>
                </div>
            </div>";

            }


    }

    
    function afficher_pt_format($cel){  // CETTE FONCTION AFFICHE LES ARTICLES DU COTE DROIT DE LA CELLULE CHOISIE
        $artsCellule = getArticlesByCells($cel);
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
                       <button  type='submit' id='bb_actualite' class='btn world-btn'>Voir plus</button>
                   </div>";                                                   
                        

                
    }
?>


    
    <div class="tab-pane fade show active" id="world-tab-1" role="tabpanel" aria-labelledby="tab1">
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="world-catagory-slider owl-carousel wow fadeInUpBig" data-wow-delay="0.1s">
                    <?php afficher_Slide_article_gd()?>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <!-- Single Blog Post -->
                <?php afficher_Slide_article_pt() ?>                                                           
            </div>
        </div>
    </div>
    <!-- CELLULE : Technologies
    ========================= --> 
    <div class="tab-pane fade" id="world-tab-2" role="tabpanel" aria-labelledby="tab2">
        <div class="row">
            <div class="col-12 col-md-6">
                <?php
                     $cellule = "Technologies";
                     afficher_gd_format($cellule);
                ?>  
            </div>

            <div class="col-12 col-md-6">
                <!-- Single Blog Post -->
                <?php 
                     $cellule = "Technologies";
                     afficher_pt_format($cellule);
                 ?>  
            </div>
       </div>
    </div>
    <!-- CELLULE : Sciences Humaines
      ========================= --> 
    <div class="tab-pane fade" id="world-tab-3" role="tabpanel" aria-labelledby="tab3">
        <div class="row">
            <div class="col-12 col-md-6">
                <?php
                     $cellule = "Sciences Humaines";
                     afficher_gd_format($cellule);
                ?>  
            </div>

            <div class="col-12 col-md-6">
                <!-- Single Blog Post -->
                <?php 
                     $cellule = "Sciences Humaines";
                     afficher_pt_format($cellule);
                 ?> 
            </div>
       </div>
    </div>
    <!-- CELLULE : Sciences Exactes
    ========================= --> 
    <div class="tab-pane fade" id="world-tab-4" role="tabpanel" aria-labelledby="tab4">
        <div class="row">
            <div class="col-12 col-md-6">
                <?php
                     $cellule = "Sciences Exactes";
                     afficher_gd_format($cellule);
                ?>  
            </div>

            <div class="col-12 col-md-6">
                <!-- Single Blog Post -->
                <?php 
                     $cellule = "Sciences Exactes";
                     afficher_pt_format($cellule);
                 ?> 
            </div>
       </div>
    </div>
    <!-- CELLULE : Sciences Exactes
    ========================= --> 
    <div class="tab-pane fade" id="world-tab-5" role="tabpanel" aria-labelledby="tab5">
        <div class="row">
            <div class="col-12 col-md-6">
                <?php
                     $cellule = "Sciences Exactes";
                     afficher_gd_format($cellule);
                ?>  
            </div>

            <div class="col-12 col-md-6">
                <!-- Single Blog Post -->
                <?php 
                     $cellule = "Sciences Exactes";
                     afficher_pt_format($cellule);
                 ?> 
            </div>
       </div>
    </div>                  
                                
    <!-- partie technologie
    ===================-->                       