<style type="text/css">
                .div_bloc1{
                    margin: 1px;
                    padding:1px;
                }
                .div_date{
                    display: inline;
                    text-align:left;
                }
                .div_departement{
                    color:blue;
                    font-weight: bold;
                    text-align:right;
                }
                .headline{ /* lien a   >>> text-align:justify; */ 
                /*opacity:1;*/
                }
                .contenuTitre{
                  font-size:0.9em;
                  /*style="text-align:justify;"*/
                  text-align:justify;
                }  
                 .contenuTitre:focus{
                  color: red;
                }    
  </style>



<?php
     if(isset($departement)){
        $departement = $departement;
     }
     else{
        //$departement = '';
         header('Location:realisations_tout.php');
     }


  $var = verifierPOST($projet_max_afficher);

// echo("Voici la pageSuivante: ".$var['pageSuivante']."
//     <br /> page actuel: ".$var['pageActuelle']."
//      <br /> page precedente: ".$var['pageAvant']);

    $p_Prev =$var['pageAvant'];
    $depart = $var['pageActuelle'];
    $p_Next =  $var['pageSuivante'];

    // echo ($depart.' < depart  '.$departement.'<br />');
     // $depart = 0;
     // $projet_max_afficher = 9;

// require('../includes/function.php');

 $donnees_RealisationsDepart= getRealisationsByDepart($departement,$depart, $projet_max_afficher);



echo'
<div class="row">';

     foreach ($donnees_RealisationsDepart as $donnees_RealDepart) {
        echo'
    <div class="col-12 col-md-3 col-lg-3">
        <div class="post-sidebar-area wow fadeInUpBig" data-wow-delay="0.4s">
            <div class="sidebar-widget-area">
                <div class="widget-content div_bloc1">
                    <div class="single-blog-post todays-pick">
                        <div class="post-thumbnail">
                            <a href="realisationsDEPART.php?id='.$donnees_RealDepart['id_realisation'].'"> <img src="admin/img/dayimg/dayimg.jpg" alt="">  </a>   
                        </div>
                        <div class="post-content px-0 pb-0">
                            <a href="realisationsDEPART.php?id='.$donnees_RealDepart['id_realisation'].'" class="headline">
                                <div class="div_date">'.$donnees_RealDepart['real_departement'].'</div>
                                <div class="div_departement">CRSDI</div>                            
                                <h6 class="contenuTitre" >
                                    <span aria-hidden="true">&laquo;</span> '.$donnees_RealDepart['title_realisation'].'
                                 <span aria-hidden="true">&raquo;</span>
                            </h6> 
                            </a>
                        </div>
                    </div>
                </div>
           </div>
        </div>
    </div>';
    }
    echo'
</div>';
?>

<!-- Ce qui suit concernere les boutons de paginations
    ================================================ -->
    <div style="margin-top:5px;">
        <?php
            $page ='realisationsDEPART.php';

        //  AfficherBouttonPaginer($lien,$pAvant,$pSuivante) : 
                //   Cettefonction afficher l objet pagination et
                //  ses boutons renvoient alors vers la page 'passe' en parametre

            require('FormPagination_Realisations.php');
            AfficherBouttonPaginer($departement,$page, $p_Prev, $p_Next);
        ?>
    </div>
