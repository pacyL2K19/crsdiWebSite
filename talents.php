<?php
    require('navbar.php');
    require('admin/includes/function.php');

?>
    <!-- ********** Hero Area Start ********** -->
    <div class="hero-area height-400 bg-img background-overlay" style="background-image: url(img/blog-img/bg1.jpg);"></div>
    <!-- ********** Hero Area End ********** -->

    <div class="main-content-wrapper section-padding-100">
        <div class="container">
            
            <h3>Talents</h3>
            <div class="row">            	
            <div class="col-12 col-md-10 col-lg-10">
                <?php
                //include('')
                ?>         
      
          <div class="post-sidebar-area wow fadeInUpBig" data-wow-delay="1s">

                        <?php

                        if(isset($_GET['id']) AND !empty($_GET['id'])){
                            $id = $_GET['id'];
                            //echo("id envoyer estt: ".$id."<br />");
                            include('admin/talents/getTalent_ID.php'); 
                            include('admin/contenu_Index/apropos_crsdi.php');
                            include('admin/contenu_Index/3icons_lien.php');  
                        }
                        else{
                            include('admin/talents/paginer_competances.php');   
                            include('admin/talents/afficher_tout_talent.php');

                        }
                        ?>

        </div>
    </div>    
                   <!-- ========== Sidebar Area ========== -->
                <div class="col-12 col-md-8 col-lg-4">
                     <div class="post-sidebar-area wow fadeInUpBig" data-wow-delay="0.4s">

                       


                        <div> <!-- IMAGE DU JOUR-->
                            <?php// include('admin/contenu_Index/image_du_jour.php');?>
                        </div>    
                        <div> <!-- C'EST QUOI CRSDI -->
                            <?php// include('admin/contenu_Index/apropos_crsdi.php');?>
                        </div>  
                        <div>
                            <?php // include('admin/contenu_Index/suivez_nous.php');?>
                        </div>   
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php
    require('footer.php');

?>