<?php

    if (!isset($_GET['id'])) {
        header('Location:index.php');
    }

    require('navbar.php');
    require('admin/includes/function.php');
    $id = intval($_GET['id']);
    $article = getArticle($id);

?>

    <!-- ********** Hero Area Start ********** -->
    <div class="hero-area height-600 bg-img background-overlay" style="background-image: url(admin/img/uploads/<?= $article['cover'];?>);">
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center">
                <div class="col-12 col-md-8 col-lg-6">
                    <div class="single-blog-title text-center">
                        <!-- Catagory -->
                        <div class="post-cta"><a href="#"><?= $article['categorie']; ?></a></div>
                        <h3><?= $article['title']; ?></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ********** Hero Area End ********** -->

    <div class="main-content-wrapper section-padding-100">
        <div class="container">
            <div class="row justify-content-center">
                <!-- ============= Post Content Area ============= -->
                <div class="col-12 col-lg-8">
                    <div class="single-blog-content mb-100">
                        <!-- Post Meta -->
                        <div class="post-meta">
                            <p><a href="#" class="post-author"><?= $article['autor'];?></a> le <a href="#" class="post-date"><?= $article['date_post']; ?></a></p>
                        </div>
                        <!-- Post Content -->
                        <div class="post-content">
                            <h4><?= htmlspecialchars_decode($article['contenue']); ?></h4>
                            <!-- Post Tags -->
                            <ul class="post-tags">
                                <li><a href="#">Sciences Exactes</a></li>
                                <li><a href="#">Technologies</a></li>
                                <li><a href="#">Sciences Humaines</a></li>
                                <li><a href="#">Politique</a></li>
                            </ul>
                            <!-- Post Meta -->
                            <div class="post-meta second-part">
                                <p><a href="#" class="post-author"><?= $article['autor']; ?>, </a> le <a href="#" class="post-date"><?= $article['date_post']; ?></a></p>
                            </div>

                            <div class="row">
                <div class="col-12 col-lg-12">
                    <div class="post-a-comment-area mt-70">
                        <h5>Ecrire un commentaire</h5>
                        <!-- Contact Form -->
                        <form action="newcomment.php" method="post">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="group">
                                        <input type="text" name="name" id="name" required>
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>Entrez votre nom...</label>
                                    </div>
                                    <input type="hidden" name="idart" value="<?= $article['id'];?>" />
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="group">
                                        <input type="email" name="email" id="email" required>
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>Entrez votre email</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="group">
                                        <textarea name="comment" id="comment" required></textarea>
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>Votre commentaire</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn world-btn">Publier</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-12 col-lg-12">
                    <!-- Comment Area Start -->
                    <div class="comment_area clearfix mt-70">
                        <ol>
                            <!-- Single Comment Area -->

                            <?php
                                $comments = getComments($id);
                                foreach ($comments as $comment) {
                                    echo " 
                            <li class='single_comment_area'>
                                <!-- Comment Content -->
                                <div class='comment-content'>
                                    <!-- Comment Meta -->
                                    <div class='comment-meta d-flex align-items-center justify-content-between'>
                                        <p><a href='#' class='post-author'>".$comment['name_autor']."</a> le <a href='#' class='post-date'>".$comment['date_comment']."</a></p>
                                        <a href='#' class='comment-reply btn world-btn'>Reply</a>
                                    </div>
                                    <p>".$comment['comment']."</p>
                                </div>

                                <!--
                                <ol class='children'>
                                    <li class='single_comment_area'>
                                         Comment Content 
                                        <div class='comment-content'>-->
                                            <!-- Comment Meta 
                                            <div class='comment-meta d-flex align-items-center justify-content-between'>
                                                <p><a href='#' class='post-author'>Katy Liu</a> on <a href='#' class='post-date'>Sep 29, 2017 at 9:48 am</a></p>
                                                <a href='#' class='comment-reply btn world-btn'>Reply</a>
                                            </div>
                                            <p>Pick the yellow peach that looks like a sunset with its red, orange, and pink coat skin, peel it off with your teeth. Sink them into unripened...</p>
                                        </div>
                                    </li>
                                </ol>-->

                            </li>
                            ";
                                }
                            ?>
                            
                        </ol>
                    </div>
                </div>
            </div>
                        </div>
                    </div>



                </div>

                <!-- ========== Sidebar Area ========== -->
                <div class="col-12 col-md-8 col-lg-4">
                    <div class="post-sidebar-area mb-100">

                        <!-- Widget Area -->
                        <div class="sidebar-widget-area">
                            <h5 class="title">Image du jour</h5>
                            <div class="widget-content">
                                <!-- Single Blog Post -->
                                <?php
                                    $dayImg = echoImg();
                                    foreach ($dayImg as $dayImgEcho) {
                                        echo " 
                                <div class='single-blog-post todays-pick'>
                                    <!-- Post Thumbnail -->
                                    <div class='post-thumbnail'>
                                        <img src='admin/img/dayimg/".$dayImgEcho['image']."' alt=''>
                                    </div>
                                    <!-- Post Content -->
                                    <div class='post-content px-0 pb-0'>
                                        <a href='#' class='headline'>
                                            <h5>".nl2br($dayImgEcho['img_description'])."</h5>
                                        </a>
                                    </div>
                                </div>
                                ";
                                    }

                                ?>

                            </div>
                        </div>

                        <!-- Widget Area -->
                        <div class="sidebar-widget-area">
                            <h5 class="title">Articles recents</h5>
                            <div class="widget-content">

                                <?php
                                    $articles = getArticles();
                                    foreach ($articles as $article) {
                                  ?>

                                <!-- Single Blog Post -->
                                <div class="single-blog-post post-style-2 d-flex align-items-center widget-post">
                                    <!-- Post Thumbnail -->
                                    <div class="post-thumbnail">
                                        <img src="admin/img/uploads/<?= $article['cover']; ?>" alt="">
                                    </div>
                                    <!-- Post Content -->
                                    <div class="post-content">
                                        <a href="article.php?id=<?= $article['id']; ?>" class="headline">
                                            <h5 class="mb-0"><?= $article['title']; ?></h5>
                                        </a>
                                    </div>
                                </div>

                                <?php
                                    }
                                ?>
                            
                            </div>
                        </div>

                        <!-- Widget Area -->
                        <div class="sidebar-widget-area" id="aboutus">
                            <h5 class="title">C'est quoi le CRSDI ?</h5>
                            <div class="widget-content">
                                <p>Le centre de recherche scientifique pour le développement intégral (CRSDI) est une plate forme de recherche scientifique de la ville de Goma. L’organisation réuni professeurs, entrepreneurs, jeunes chercheurs (étudiants). Nous sommes également en collaboration avec plusieurs institutions universitaires, entreprises et laboratoires de recherche, ceci dans le but de trouver un moyen pour garantir une participation locale dans le processus de développement durable et intégral.</p>
                                <a href="philosophy.php" class="btn world-btn">Lire plus...</a>
                            </div>
                        </div>

                       <!-- Widget Area -->
                        <div class="sidebar-widget-area">
                            <h5 class="title">Suivez-nous</h5>
                            <div class="widget-content">
                                <div class="social-area d-flex justify-content-between">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                    <a href="#"><i class="fa fa-vimeo"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                    <a href="#"><i class="fa fa-google"></i></a>
                                </div>
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