<div class="hero-area">

    <!-- Hero Slides Area -->
    <div class="hero-slides owl-carousel">
        <!-- Single Slide -->
        <div class="single-hero-slide bg-img background-overlay" style="background-image: url(/crsdi_v2/img/blog-img/bg1.jpg);"></div>
        <!-- Single Slide -->
        <div class="single-hero-slide bg-img background-overlay" style="background-image: url(/crsdi_v2/img/blog-img/04.jpg);"></div>
    </div>

    <!-- Hero Post Slide -->
    <div class="hero-post-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="hero-post-slide">
                        <!-- Single Slide -->
                        <?php
                            $articles = getArticles();
                            $i = 1;

                            foreach ($articles as $article) {
                                    echo " 
                            <div class='single-slide d-flex align-items-center'>
                                <div class='post-number'>
                                    <p>".$i."</p>
                                </div>
                                <div class='post-title'>
                                    <a href='article.php?id=".$article['id']."'>".$article['title']."</a>
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
        </div>
    </div>