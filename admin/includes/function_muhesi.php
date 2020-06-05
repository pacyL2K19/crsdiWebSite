<?php 
    function afficher($cel){?>
        <div class="row">
            <div class="tab-pane fade" id="world-tab-2" role="tabpanel" aria-labelledby="tab2">
                
                    <div class="col-12 col-md-6">
                        <?php
                            
                            $firstArt = getFirstArticleCellule($cellule);
                            foreach ($firstArt as $firstArtEcho) {
                                echo " 
                        <!-- Single Blog Post -->
                        <div class='single-blog-post'>
                            <!-- Post Thumbnail -->
                            <div class='post-thumbnail'>
                                <img src='admin/img/uploads/".$firstArtEcho['cover']."' alt=''>
                                <!-- Catagory -->
                                <div class='post-cta'><a href='#'>Tech</a></div>
                            </div>
                            <!-- Post Content -->
                            <div class='post-content'>
                                <a href='#' class='headline'>
                                    <h5>".$firstArtEcho['title']."</h5>
                                </a>
                                <p>".$firstArtEcho['contenue']." ...</p>
                                <!-- Post Meta -->
                                <div class='post-meta'>
                                    <p><a href='#' class='post-author'>".$firstArtEcho['autor']."</a> le <a href='#' class='post-date'>".$firstArtEcho['date_post']."</a></p>
                                </div>
                            </div>
                        </div>";

                            }
                        ?>
                    </div>
                </div> 
                <!--///////////////////////////////////////////////// -->   

                    <div class="col-12 col-md-6">
                        <!-- Single Blog Post -->
                        <?php 

                            $artsCellule = getArticlesByCells($cellule);
                            foreach ($artsCellule as $artCellule) {
                                echo " 
                        <div class='single-blog-post post-style-2 d-flex align-items-center'>
                            <!-- Post Thumbnail -->
                            <div class='post-thumbnail'>
                                <img src='admin/img/uploads/".$artCellule['cover']."' alt=''>
                            </div>
                            <!-- Post Content -->
                            <div class='post-content'>
                                <a href='article.php?id=".$artCellule['id']."' class='headline'>
                                    <h5>".$artCellule['title']."</h5>
                                </a>
                                <!-- Post Meta -->
                                <div class='post-meta'>
                                    <p><a href='article.php?id=".$artCellule['id']."' class='post-author'>".$artCellule['autor']."</a> le <a href='#' class='post-date'>".$article['date_post']."</a></p>
                                </div>
                            </div>
                        </div>
                        ";
                            }

                         ?>
                    </div>
                    <!-- ////////////////////////////////-->
                </div>

             <?php
           }
           ?>                         