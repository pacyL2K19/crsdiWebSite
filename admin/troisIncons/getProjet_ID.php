 <!-- Single Blog Post -->
        <?php                     
            $projet = getOneProject($id);
                     //<img src="imag/'.PROJET["project_img"].'" class="card-img-top" alt="image du Projet"> width: 50rem
            foreach ($projet as $projet) { 
               echo'
                    <div class="card" style="margin-left:35px;">
                        <img src="imag_01.jpg" class="card-img-top" alt="image du Projet">
                        <div class="card-body">
                            <h5 class="card-title">'.$projet["project_title"].'</h5>
                            <p class="card-text" style="text-align: justify;">'.$projet["project_desc"].'</p>';
                            echo'
                            <span>
                              <a href="article.php?id=2" title=" Unité '.$projet["project_unite"].'">
                             '.$projet["project_unite"].'</a> le <a href="#" class="post-date">2020-02-22</a>
                            </span>
                        </div>
                    </div> ';   
            }
    ?>   
                <div class="row">
                <div class="col-12">
                    <div class="load-more-btn mt-50 text-center">
                        <a href="projets.php" class="btn world-btn">Voir plus des projets</a>
                    </div>
                </div>
            </div>