<?php
    require('navbar.php');
    require('admin/includes/function.php');

?>
    <!-- ********** Hero Area Start ********** -->
    <div class="hero-area height-400 bg-img background-overlay" style="background-image: url(img/blog-img/bg1.jpg);"></div>
    <!-- ********** Hero Area End ********** -->

    <div class="main-content-wrapper section-padding-100">
        <div class="container-fluid">
            <h3><!-- Association --></h3>
            <div class="row">
                <div class="col-12 col-md-2 col-lg-2">
                     <div class="post-sidebar-area wow fadeInUpBig" data-wow-delay="1s">
                        <div class="sidebar-widget-area" id="aboutus"> 
                            <div class="sidebar-widget-area SideWidget_Area"> 
                                <!-- Debut  -->
                                <?php// include('menuAssociation.php');?>
                                <!-- Fin -->
                            </div>
                        </div>
                    </div>
                </div> 

                <div class="col-12 col-md-6 col-lg-6">
                    <div class="post-sidebar-area wow fadeInUpBig" data-wow-delay="0.4s">
                        <div class="sidebar-widget-area" id="aboutus"> 
                            <div class="sidebar-widget-area SideWidget_Area">
                    <!-- Debut -->
                                 <?php include('text.php');?>
                <!-- Fin -->
                            </div>
                        </div>
                    </div>

                </div>
                 <div class="col-12 col-md-2 col-lg-2"></div>
            </div>    
        </div>            
    </div>
<?php
    require('footer.php');

?>