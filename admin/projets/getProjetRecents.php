

    <div class="title">
        <h5 style="display: inline;">Projets</h5>
        <span><a  data-toggle="tooltip" data-placement="bottom"
            title="Voir les stades de réalisation des projets" href="#stade_titre">Cliquer ici</a></span>
    </div>

    <?php
        $i = 2;
        $var = verifierPOST($projet_max_afficher);

        // echo("Voici la pageSuivante: ".$var['pageSuivante']."
        //     <br /> page actuel: ".$var['pageActuelle']."
        //      <br /> page precedente: ".$var['pageAvant']);
        $p_Prev =$var['pageAvant'];
        $depart = $var['pageActuelle'];
        $p_Next =  $var['pageSuivante'];

        $donnees_Projet= getProjects($depart, $projet_max_afficher);
        // $laboImg = getLaboImg();
        foreach ($donnees_Projet as $item){
    ?>

    <!-- Single Blog Post -->
    <div class="single-blog-post post-style-4 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.<?=$i; ?>s">
        <!-- Post Thumbnail -->
        <div class="post-thumbnail">
            <img src="admin/img/projet/<?=$item["project_img"];?>" alt="">
        </div>
        <!-- Post Content -->
        <div class="post-content">
            <a href="industries.php?id=<?=$item['id_project'];?>" class="headline"
                data-toggle="tooltip" data-placement="top"
            title="Cliquer Ici pour lire plus">
                <h5><?= $item['project_title']; ?></h5>
            </a>
            <h6 class="mt-0" title="Cellule"><?= $item["project_cellule"]; ?></h6>
        <span title="Unité du projet"><?= $item["project_unite"]; ?></span>
            <p><?= htmlspecialchars_decode ($item['project_desc']); ?>...</p>
        </div>
    </div>
<?php 
        $i++;
        }

        // $val = $item['project_title'];
        // echo('le prmier titre est : '.$val);
             // foreach ($donnees_Projet as $item) {
             //    echo('val1 est'.$item['project_title'].'<br /><br />');

             // }
         // echo('<div class="row">');?>

                      <?php
            $page ='projets.php';

        //  AfficherBouttonPaginer($lien,$pAvant,$pSuivante) : 
                //   Cettefonction afficher l objet pagination et
                //  ses boutons renvoient alors vers la page 'passe' en parametre

            require('FormPagination.php');
            AfficherBouttonPaginer($page, 0, 2);
        ?>

         <?php
            require('admin/projets/progressBar.php');?>
         <!-- // echo('</div>'); -->


     <!-- $laboImg = getLaboImg(); -->