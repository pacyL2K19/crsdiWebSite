        
        <!-- Single Blog Post -->
        <?php                     
            $competances = ShowCompetance($id);
            $var_headingOne="headingOne";
            $var_collapse ="collapse";
            $compt=1;
            $compteur=0;
            $var_bool;

            foreach ($competances as $competances) { 
            $var_headingOne = $var_headingOne.$compt;
            $var_collapse = $var_collapse.$compt;
            $compt++;
            
            if($compteur==0){
              
              $var_bool="false";

            }
            else{
                $var_bool="false";
            }
            //echo("compteur  : ".$compteur."<br />");
            $compteur++;
            //echo("compteur  : ".$var_bool."<br />");

         ?>
   
<!--<div class="accordion" id="accordionExample"> -->
<div class="accordion" id="accordionExample">
    <div class="tab-pane" style="
                        box-shadow: 0px 0px 0px 0px black;
                        padding-left:2%">
        <div class="card">
            <div class="row">     
                <div class="col-5 col-lg-4">
                    <!--<div class="card-header" id="headingOne">  -->        
                    <div class="card-header" id="headingOne" <?php //echo("id=".$var_headingOne);?> style="background-color:white;border-bottom:0px;">                
                        <h2 class="mb-0">
                            <!-- <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"> --> 
                            <button class="btn btn-link" type="button" <?php echo("data-target=#".$var_collapse." aria-controls=".$var_collapse." aria-expanded=".$var_bool);?>  data-toggle="collapse">
                                <div class='post-thumbnail' style="box-shadow: 2px 3px 4px 2px black;
                                                                    border: 2px black outset;
                                                                    border-radius: 5px;" >
                                        <!-- <img src='admin/img/uploads/_crsdi.jpg' alt=''> -->
                                       <?php echo("<img src='admin/img/uploads/".$competances['cover']."' alt=''>");?>
                                </div>
                            </button>
                        </h2>
                    </div>
                </div> 
                <div class="col-6 col-lg-8" style="padding-top:8%;">
                        <?php  echo("<a href='talents.php?id=".$competances['ID_competance']." class='headline'>
                            <h4 style='text-align:center;
                            font-weight: bold;
                            font-size: 1.4em;
                            text-shadow: 0px 1px 2px black;'>".$competances['nom_chercheur']."</h4>");
                        ?>            
                        <!--
                        <a href="article.php?id=2" class="headline">
                                <h4 style="font-weight: bold;
                                font-size: 1.4em;
                                text-align:center;
                                text-shadow: 0px 1px 2px black;"">
                                <?php // echo($competances['nom_chercheur']);?>
                            </h4>
                        </a> -->
                </div>
            </div>                                                     
            
            
                <div class="row">
                    <div class="col-12 col-lg-12" >
                        <div class='post-meta'>
                         <!-- <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample"> -->
                         <div <?php echo("id=".$var_collapse." aria-labelledby=".$var_headingOne);?> class="collapse show" data-parent="#accordionExample">
                            <div class="card-body">
                                <h5>Competances</h5>
                                     <div> <?php echo($competances['competance']);?></div>
                                <h5>Objectifs</h5>
                                   
                                        <article><?php echo($competances['objectif']);?></article>

                                <!--<a href='article.php?id=2'>Muhesi Moise</a> le <a href='#' class='post-date'>2020-02-22</a> -->
                                <?php 
                                    echo("<a href='article.php?id=".$competances['ID_competance']."'class='post-author'>".$competances['nom_chercheur']."</a> le <a href='#' class='post-date'>".$competances['date_post']."</a>");?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
            <div class="row">
                <div class="col-12">
                    <div class="load-more-btn mt-50 text-center">
                        <a href="talents.php" class="btn world-btn">Voir plus des talents</a>
                    </div>
                </div>
            </div>       
</div>
<?php
}
?>
   
