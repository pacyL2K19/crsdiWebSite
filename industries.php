<?php
    require('navbar.php');
    require('admin/includes/function.php');

?>
    <!-- ********** Hero Area Start ********** -->
    <div class="hero-area height-400 bg-img background-overlay" style="background-image: url(img/blog-img/bg1.jpg);"></div>
    <!-- ********** Hero Area End ********** -->

    <div class="main-content-wrapper section-padding-100">
        <div class="container">
            
            <h3>Projets</h3>
            <div class="row">            	
            <div class="col-12 col-md-8 col-lg-8">
                <div class="post-sidebar-area wow fadeInUpBig" data-wow-delay="0.4s">
                    <!-- <div class="sidebar-widget-area" id="aboutus">   </div>
                        <div class="sidebar-widget-area SideWidget_Area"> </div> -->
                    <?php

                        if(isset($_GET['id']) AND !empty($_GET['id'])){
                            $id = $_GET['id'];
                            //echo("id envoyer estt: ".$id."<br />");
                             // include('admin/troisIncons/test_card.php');

                            // include('admin/troisIncons/getProjet_ID.php'); 
                            include('admin/projets/getProjetsID.php'); 


                            // include('admin/contenu_Index/apropos_crsdi.php');
                            // include('admin/contenu_Index/3icons_lien.php'); 
                        }
                        else{
                            $projet_max_afficher= 2;   // cette varible est utilise dans le modules suivant!!!!:
                           require('admin/troisIncons/paginer_projet.php');
                           require('admin/troisIncons/afficher_les_projets.php');
                        }
                        ?>                      
                </div>
            </div>
             <div class="col-12 col-md-4 col-lg-4">
                     <div class="post-sidebar-area wow fadeInUpBig" data-wow-delay="1s">
                        <?php include('admin/contenu_Index/apropos_crsdi.php');?>
                        <?php include('admin/contenu_Index/image_du_jour.php');?>

                    </div>
                </div>

          <div class="post-sidebar-area wow fadeInUpBig" data-wow-delay="1s">

                        <?php

                        if(isset($_GET['id']) AND !empty($_GET['id'])){
                            $id = $_GET['id'];
                            //echo("id envoyer estt: ".$id."<br />");
                        }
                            ?>


                    </div>
                </div>    
                   <!-- ========== Sidebar Area ========== -->
               
            </div>
        </div>
    </div>


<?php
    require('footer.php');

?>