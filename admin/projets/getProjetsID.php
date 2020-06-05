 <!-- Single Blog Post -->

        <?php 

         //require('../includes/function.php');                  
            $projet = getOneProject($id);
         ?>


<style type="text/css">
figcaption{
    padding-right: 2px;
    border-right: 2px solid black;
}
.contenuProjet{
    padding: 10px;
    text-align: justify;
}
.progressBar{
    margin:10px;
    text-align: center;
}
.imgliePrijet h5{
padding-left: 5px;
}
.VoirAussi{
    margin-top:10px;
}
.VoirAussi h1,{
    margin-top:0px; 
}
figcaption span{
    font-style: italic;
    font-weight: bold;
    text-shadow: 2px 2px 4px black;

}


</style>
<?php 
    $projet = getOneProject($id);
                     //<img src="imag/'.PROJET["project_img"].'" class="card-img-top" alt="image du Projet"> width: 50rem
            foreach ($projet as $projet) { 
   ?>
<div class='single-blog-post todays-pick'>
    <div class="row">
        <div class="col-12 col-md-3 col-lg-3">
        <?php
        $imageProjetHaut = getimagProject($projet['id_project'], 0, 1);
        foreach ($imageProjetHaut as $projetImag ) {
            ?>
            <div class="wow fadeInUpBig" data-wow-delay="0.4s">
                <div class="widget-content">
                    <div class='post-thumbnail text-center'>
                        <a href='#'> 
                            <figure class="figure">
                                <img src="admin/img/projet/<?=$projetImag['img_projet'];?>" class="figure-img img-fluid rounded" alt="...">
                                <figcaption class="figure-caption text-right">
                                        <?=$projetImag['desc_img'];?>
                                </figcaption>
                            </figure>
                        </a>    
                    </div>
                </div>             
            </div> 
            <?php
        }
            ?>
        </div>
        <div class="col-12 col-md-9 col-lg-9">
            <div class="sidebar-widget-area" id="aboutus">  
                <!-- <div class="sidebar-widget-area">  </div> -->
                <h5 class="title"><?=$projet["project_title"];?></h5>
                <div class='post-meta title'> 
                    <div class="d-flex justify-content-start text-muted">
                        <a href='#' class='post-author'
                            data-toggle="tooltip" data-placement="bottom" title="Domaine du projet: 
                            <?=$projet["project_cellule"];?>">
                           <?=$projet["project_cellule"];?>    
                        </a> 
                        <a href='#' class='post-author'
                        data-toggle="tooltip" data-placement="bottom" title="Unite du projet : <?=$projet["project_unite"];?>"> (<?=$projet["project_unite"];?>)</a>
                    </div>
                    <div class="d-flex justify-content-end text-muted">
                        <a href='#' class='post-date'><?=$projet['date_post']?> </a>
                    </div>
                </div>

            </div>
        </div>
</div>  
    <!-- ||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->
 <!--  PARTIE CONTENUE DU PROJET -->
        <div class="contenuProjet">
            <h5 class="title text-danger" >Contenu</h5>
            <p><?=$projet['project_desc']?></p>

        <div class="widget-content">
                    <div class='post-thumbnail text-center'>
                        <a href='#'> 
                            <figure class="figure">
                                <img src="admin/img/projet/<?=$projet['project_img']?>" class="figure-img img-fluid rounded" alt="...">
                                <figcaption class="figure-caption text-right">
                                        producted by 
                                        <span class="title text-danger" data-toggle="tooltip" data-placement="bottom" 
                                        title="Centre de Recherche Scientifique pour le Développement Intégral" 
                                        >CRSDI</span>
                                </figcaption>
                            </figure>
                        </a>    
                    </div>
         </div>         
        <p><?=$projet['project_desc']?></p>
    </div>
        <div class="progressBar">
        <h5 class="title">Stade de realisation </h5>
        <div class="progress">
            <?php $val = $projet['stade_realisation'];?>
  <div class="progress-bar" role="progressbar" style="width: <?=$val?>%;" aria-valuenow="<?=$val?>" aria-valuemin="0" aria-valuemax="100"><?=$val?>%</div>
</div>
</div>
<?php
}
?>
  <!-- ||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->
 <!--  VOIR LES IMAGES LIES AU PROJETS -->

<div class='single-blog-post todays-pick imgliePrijet'>
    <!-- <div class="d-flex justify-content-start text-muted"> -->
        <h5 class="title text-danger">Images Liées  aux projets</h5>
    <div class="row">
        <?php
        $debut_img =0;
        $max_imag = 3;
        $imageProjets = getimagProject($projet['id_project'], $debut_img, $max_imag);
        foreach ($imageProjets as $imgDesc ) {
            ?>
            <div class="col-12 col-md-3 col-lg-3 post-thumbnail">
                <div class="widget-content">
                    <div class='post-thumbnail text-center'>
                        <a href='#'> 
                            <figure class="figure">
                                <img src="admin/img/dayimg/<?=$imgDesc['img_projet'];?>" class="figure-img img-fluid rounded" alt="...">
                                <figcaption class="figure-caption text-right">
                                       <?=$imgDesc['desc_img'];?>
                                </figcaption>
                            </figure>
                        </a>    
                    </div>
               </div>   
            </div>
            <?php
        }
            ?>
        </div>
    </div>
        <!-- 1 FIN IMAGE ................................................................... -->
        <!-- ||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->
     <!-- PARTIE EN COULEUR GRISE     -->

<div class="VoirAussi wow fadeInUpBig" data-wow-delay="0.4s">
    <div class="jumbotron">
        <h1 class="display-6">Voir aussi</h1>
        <p class="lead">
            <div class="row">
            <?php 
            $debut = 0;
            $nb_max = 3;
           $projetsRecents = getProjects($debut, $nb_max);
            foreach ($projetsRecents as $projet){
                ?>
                <div class="col-12 col-md-3 col-lg-3 post-thumbnail">
                    <div class="widget-content">
                        <div class='post-thumbnail text-center'>
                            <a  href="industries.php?id=<?=$projet['id_project'];?>">
                                <figure class="figure">
                                    <img src="admin/img/projet/<?=$projet['project_img'];?>" class="figure-img img-fluid rounded" alt="..."
                                    data-toggle="tooltip" data-placement="top" 
                                    title="Cliquer pour lire plus">
                                    <figcaption class="figure-caption text-right">
                                        <?= $projet['project_title'];?>
                                    </figcaption>
                                </figure>
                            </a>    
                        </div>
                   </div>   
                </div>
                <?php
            }
            ?>
            </div>
        </p>
        <hr class="my-4">
        <p class="mb-0 text-center">
            <a href="projets.php" class="btn world-btn">Lire plus des Projets...</a>
        </p>
    </div>
</div>
</div>
