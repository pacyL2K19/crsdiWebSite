<?php
    require('navbar.php');
    require('admin/includes/function.php');

?>
    <!-- ********** Hero Area Start ********** -->
    <div class="hero-area height-400 bg-img background-overlay" style="background-image: url(img/blog-img/bg1.jpg);"></div>
    <!-- ********** Hero Area End ********** -->

    <div class="main-content-wrapper section-padding-100">
        <div class="container">

            <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Tooltip on top">
  Tooltip on top
</button>
<button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="right" title="Tooltip on right">
  Tooltip on right
</button>
<button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom">
  Tooltip on bottom
</button>
<button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="left" title="Tooltip on left">
  Tooltip on left
</button>
            
            <h3>Talents</h3>
            <div class="row">            	
            <div class="col-12 col-md-10 col-lg-10">
                <div class="post-sidebar-area wow fadeInUpBig" data-wow-delay="0.4s">
                    <div class="sidebar-widget-area" id="aboutus"> 
                        <div class="sidebar-widget-area SideWidget_Area">
                <!-- Debut -->
                             <h5 class="title">C'est quoi le CRSDI ?</h5>
                                 <div class="widget-content">  <!-- img-thumbnail -->
                                    <div class="media">  <!-- voici l'objet qui contient l essentiel -->
                                        <img src="imag_01.jpg" class=" align-self-center mr-3" alt="photoPojet" /> 
               
                                            <div class="media-body">
                                                <h6 class="mt-0">
                                                C'est quoi le CRSDI ?</h6>
                                                <span>Informatique</span> 
                    <p class="mb-0">Le centre de recherche scientifique pour le développement intégral (CRSDI) est une plate forme de recherche scientifique de la ville de Goma. L’organisation réuni professeurs, entrepreneurs, jeunes chercheurs (étudiants). Nous sommes également en collaboration avec plusieurs institutions universitaires, entreprises et laboratoires de recherche, ceci dans le but de trouver un moyen pour garantir une participation locale dans le processus de développement durable et intégral.</p>
                    <p class="mb-0"><a href="philosophy.php" class="btn world-btn">Lire plus...</a></p>
                                            </div>
                                    </div>

                                </div>
            <!-- Fin -->
                        </div>
                    </div>
                </div>


        <!-- Example du card -->
        <div class="card" style="">
            <img src="imag_01.jpg" class="card-img-top" alt="image du Projet">
            <div class="card-body">
                <h5 class="card-title">Mon titre</h5>
                <p class="card-text">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
               <span> 
                Cellule<a href='article.php?id=2' title="Informatique">
                Informatique</a>     le <a href='#' class='post-date'>2020-02-22</a></span>
                <!-- <a href="#" class="btn btn-primary">Aller y</a> -->
            </div>
        </div>

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
                <div class="col-12 col-md-8 col-lg-4">
                     <div class="post-sidebar-area wow fadeInUpBig" data-wow-delay="0.4s">

                    </div>
                </div>
            </div>
        </div>
    </div>


<?php
    require('footer.php');

?>