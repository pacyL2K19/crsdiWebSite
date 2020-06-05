

<!-- CE CODE DOIT AFFIICHER LES DEUX DERNIERS ARTICLES RECENTS POUR CHAQUE CELLULE
    ==============================================================================-->
    
    <div class="tab-content" id="myTabContent">

        <div class="tab-pane fade show active" id="world-tab-1" role="tabpanel" aria-labelledby="tab1">
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="world-catagory-slider owl-carousel wow fadeInUpBig" data-wow-delay="0.1s">

                        <?php
                            $articles = getArticles();
                            foreach ($articles as $article) {
                                echo "

                        <!-- Single Blog Post -->
                        <div class='single-blog-post'>
                            <!-- Post Thumbnail -->
                            <div class='post-thumbnail'>
                                <img src='admin/img/uploads/".$article['cover']."' alt=''>
                                <!-- Catagory -->
                                <div class='post-cta'><a href='#'>".$article['categorie']."</a></div>
                            </div>
                            <!-- Post Content -->
                            <div class='post-content'>
                                <a href='article.php?id=".$article['id']."'' class='headline'>
                                    <h5>".$article['title']."</h5>
                                </a>
                                <p>".htmlspecialchars_decode ($article['contenue'])."...</p>
                                <!-- Post Meta -->
                                <div class='post-meta'>
                                    <p><a href='#'' class='post-author'>".$article['autor']."</a> le <a href='#'' class='post-date'>".$article['date_post']."</a></p>
                                </div>
                            </div>
                        </div>
                        ";
                            }
                        ?>

                    </div>
                </div>

                <div class="col-12 col-md-6">
                    <!-- Single Blog Post -->
                    <?php
                        $articles = getArticles();
                        $i = 2;
                        foreach ($articles as $article) {
                            echo " 
                    <div class='single-blog-post post-style-2 d-flex align-items-center wow fadeInUpBig' data-wow-delay='0.".$i."s'>
                        <!-- Post Thumbnail -->
                        <div class='post-thumbnail'>
                            <img src='admin/img/uploads/".$article['cover']."' alt='CRSDI'>
                        </div>
                        <!-- Post Content -->
                        <div class='post-content'>
                            <a href='article.php?id=".$article['id']."' class='headline'>
                                <h5>".$article['title']."</h5>
                            </a>
                            <!-- Post Meta -->
                            <div class='post-meta'>
                                <p><a href='article.php?id=".$article['id']."' class='post-author'>".$article['autor']."</a> le <a href='#' class='post-date'>".$article['date_post']."</a></p>
                            </div>
                        </div>
                    </div>
                    ";
                    $i++;
                        }
                    ?>

                    
                </div>
            </div>
        </div>
    </div> 