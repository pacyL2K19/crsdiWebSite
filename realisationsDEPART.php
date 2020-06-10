<?php
    require('navbar.php');
    require('admin/includes/function.php');

?>
    <!-- ********** Hero Area Start ********** -->
   <!--  <div class="hero-area height-400 bg-img background-overlay" style="background-image: url(img/blog-img/bg1.jpg);"></div> -->
    <!-- ********** Hero Area End ********** -->

    <div class="main-content-wrapper section-padding-100">
        <div class="container-fluid">
            <h3>Les réalisations ausein de CRSDI </h3>
            <div class="row">
                <div class="col-12 col-md-2 col-lg-2">
                     <div class="post-sidebar-area wow fadeInUpBig" data-wow-delay="1s">
                        <div class="sidebar-widget-area" id="aboutus"> 
                            <div class="sidebar-widget-area SideWidget_Area"> 
                                <!-- Debut  -->
                                <?php require('FiltreRrealisation.php');?>
                                <!-- Fin -->
                            </div>
                        </div>
                    </div>
                </div> 

                <div class="col-12 col-md-8 col-lg-8">
                    <div class="post-sidebar-area wow fadeInUpBig" data-wow-delay="0.4s">
                        <div class="sidebar-widget-area" id="aboutus"> 
                            <div class="sidebar-widget-area SideWidget_Area">
                    <!-- Debut -->

                     <?php

                        if(isset($_GET['id']) AND !empty($_GET['id'])){
                            $id = $_GET['id'];
                            include('admin/realisations/getRealisation_ID.php');
                        }
                        elseif(isset($_GET['departement']) AND !empty($_GET['departement'])){
                        // else{
                            $departement = $_GET['departement'];
                            $projet_max_afficher = 4;   // ces varibles  sont utilises dans le modules suivant!!!!:
                           require('paginer_objet.php');
                           require('admin/realisations/getRealisations_depart.php');
                        }
                        else{

                        }
                    ?>
                <!-- Fin -->
                            </div>
                        </div>
                    </div>

                </div>
            </div>    
        </div>            
    </div>
<?php
  require('footer.php');
?>