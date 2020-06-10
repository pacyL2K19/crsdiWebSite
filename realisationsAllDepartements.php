<?php
    require('navbar.php');
    require('admin/includes/function.php');

?>
    <!-- ********** Hero Area Start ********** -->
    <div class="hero-area height-400 bg-img background-overlay" style="background-image: url(img/blog-img/bg1.jpg);"></div>
    <!-- ********** Hero Area End ********** -->

    <div class="main-content-wrapper section-padding-100">
        <div class="container">
            <h3>Réalisations</h3> 
            <span title="Filtrer les réalisations">
                <div class="collapse navbar-collapse" style="display:inline">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tout</a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="realisationsDEPART.php?departement=Data">Data</a>
                                    <a class="dropdown-item" href="realisationsDEPART.php?departement=Industries">Industries</a>
                                    <a class="dropdown-item" href="realisationsDEPART.php?departement=Recherche">Recherche</a>
                                </div>
                        </li>
                    </ul>
                </div>  
            </span>

            <div class="row">                	
            <div class="col-12 col-md-9 col-lg-9">
                <div class="post-sidebar-area wow fadeInUpBig" data-wow-delay="0.4s">
                    <div class="sidebar-widget-area" id="aboutus"> 
                        <div class="sidebar-widget-area SideWidget_Area">
            <!-- Debut -->

                 <?php
                        $projet_max_afficher = 4;   // ces varibles  sont utilises dans le modules suivant!!!!:
                       require('paginer_objet.php');
                       require('admin/realisations/getRealisations_recents.php');

                ?>
            <!-- Fin -->

                        </div>
                    </div>
                </div>

                </div>

            </div>
            <?php require('admin/realisations/3Dborder.php');?>
        </div>
    </div>


<?php
    require('footer.php');

?>