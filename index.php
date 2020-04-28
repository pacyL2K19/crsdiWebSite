<?php 
    require('navbar.php');
    require('admin/includes/function.php');
?>

    <!-- ********** Hero Area Start ********** -->
        <?php include('admin/contenu_Index/hero_area.php');?>
    <!-- ********** Hero Area End ********** -->

    <div class="main-content-wrapper section-padding-100">
        <div class="container">
            <!-- <div class="row justify-content-center"> -->
            <div class="justify-content-center">    
                <!-- ============= Post Content Area Start ============= -->
                 <!-- <div class="col-12 col-lg-12 -->
                <div class="post-content-area mb-50">
                        
                        <!-- Catagory Area -->

                    <div class="world-catagory-area">

                        <!-- ====================================================================
                        ========================= DEBUT SECTION 'A'==============================-->
                        <div class="row">
                            <div class="col-12 col-lg-8">

                                <div> <!-- C'EST QUOI CRSDI -->
                                    <?php include('admin/contenu_Index/apropos_crsdi.php');?>
                                </div>

                                <div> <!-- LES 3 ICONS CONSTITUENT LES LIENS-->
                                     <?php include('admin/contenu_Index/3icons_lien.php');?>
                                </div>

                                <div> <!-- LE MEUNU ACTUALITE -->
                                   <?php include('menu_actualites.php');?>
                                </div>    
                                    
                                <div class="tab-content" id="myTabContent">  <!-- AFFICHAGE DES ARTICLES D'UNE CELLULE SELECTIONNE -->                               
                                    <?php // include('admin/contenu_Index/afficher_cellules.php');?>
                                </div>
                         
                                <div class="world-catagory-area mt-50"> <!-- LE MEUNU PROJETS EN COURS -->
                                    <?php  include('menu_projets_en_cours.php');?>
                                </div>
                            </div>
               
                            <!-- ========== Sidebar Area ========== -->
                            <div class="col-12 col-md-8 col-lg-4">
                                <div class="post-sidebar-area wow fadeInUpBig" data-wow-delay="0.4s">
                                    <div> <!-- IMAGE DU JOUR-->
                                        <?php include('admin/contenu_Index/image_du_jour.php');?>
                                    </div>    
                                    <div> <!-- C'EST QUOI CRSDI -->
                                        <?php include('admin/contenu_Index/apropos_crsdi.php');?>
                                    </div>  
                                    <div>
                                        <?php include('admin/contenu_Index/suivez_nous.php');?>
                                    </div>   
                                </div>
                            </div>
                        </div>
                <!-- ====================================================================
                ========================= FIN SECTION 'A'=============================-->
            <div class="world-latest-articles">
                <div class="row">
                    <div class="col-12 col-lg-8">
                        <div class="title">
                            <h5>Laboratoires en image</h5>
                        </div>

                        <?php
                            $i = 2;
                            $laboImg = getLaboImg();
                            foreach ($laboImg as $item) {
                            ?>

                        <!-- Single Blog Post -->
                        <div class="single-blog-post post-style-4 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.<?=$i; ?>s">
                            <!-- Post Thumbnail -->
                            <div class="post-thumbnail">
                                <img src="admin/img/laboimg/<?= $item['image']; ?>" alt="">
                            </div>
                            <!-- Post Content -->
                            <div class="post-content">
                                <a href="#" class="headline">
                                    <h5><?= $item['title']; ?></h5>
                                </a>
                                <p><?= htmlspecialchars_decode ($item['description']); ?></p>

                            </div>
                        </div>
                    <?php 
                            $i++;
                            }
                        ?>
                    </div>

                    <div class="col-12 col-lg-4">
                        <div class="title">
                            <h5 id="livelabo">Live Labo</h5>
                        </div>

                        <!-- Single Blog Post -->
                        <div class="single-blog-post wow fadeInUpBig" data-wow-delay="0.2s">
                            <!-- Post Thumbnail -->
                            <div class="post-thumbnail">
                                <img src="img/img-video/biogaz.jpg" alt="">
                                <!-- Catagory -->
                                <div class="post-cta"><a href="#">Unité Genie Elect</a></div>
                                <!-- Video Button -->
                                <a href="videos/1.mp4" class="video-btn"><i class="fa fa-play"></i></a>
                            </div>
                            <!-- Post Content -->
                            <div class="post-content">
                                <a href="#" class="headline">
                                    <h5>Essaie de Production du Biogaz</h5>
                                </a>
                                <p>Premiere experimentation d'essaie de combustion du gaz obtenu apres un temps de sejour evalue a 30 jours.</p>
                                <!-- Post Meta -->
                                <div class="post-meta">
                                    <p><a href="#" class="post-author">Jack NDAVARO</a> le <a href="#" class="post-date">Sep 29, 2018 at 6:48 pm</a></p>
                                </div>
                            </div>
                        </div>

                        <!-- Single Blog Post -->
                        <div class="single-blog-post wow fadeInUpBig" data-wow-delay="0.4s">
                            <!-- Post Thumbnail -->
                            <div class="post-thumbnail">
                                <img src="img/img-video/biogaz2.jpg" alt="">
                                <!-- Catagory -->
                                <div class="post-cta"><a href="#">Unité Info</a></div>
                                <!-- Video Button -->
                                <a href="videos/2.mp4" class="video-btn"><i class="fa fa-play"></i></a>
                            </div>
                            <!-- Post Content -->
                            <div class="post-content">
                                <a href="#" class="headline">
                                    <h5>Essaie de Production du Biogaz</h5>
                                </a>
                                <p>Premiere experimentation d'essaie de combustion du gaz obtenu apres un temps de sejour evalue a 30 jours.</p>
                                <!-- Post Meta -->
                                <div class="post-meta">
                                    <p><a href="#" class="post-author">Jack NDAVARO</a> le <a href="#" class="post-date">Sep 29, 2018 at 6:48 pm</a></p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Load More btn -->
            <div class="row">
                <div class="col-12">
                    <div class="load-more-btn mt-50 text-center">
                        <a href="#" class="btn world-btn">Voir plus</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
        require('footer.php');
    ?>