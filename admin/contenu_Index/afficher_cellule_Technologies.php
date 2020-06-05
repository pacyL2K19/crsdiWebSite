

<?php 


	if(isset($_POST['cellule']) AND !empty($_POST['cellule'])){
		// echo " le contenu de if est est affichee!!! , cellules est ".$_POST['cellule'];
		// <div class="tab-pane fade" id="world-tab-2" role="tabpanel" aria-labelledby="tab2">
		?>

	    <div>
                                    
                                        <div class="col-12 col-md-6">
                                            <?php
                                                $cellule = "Technologies";
                                                //$cellule=$_POST['cellule'];
                                                echo($cellule);
                                                $firstArt = getFirstArticleCellule($_POST['cellule']);
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

	<?php
	}
	else{
		// include('admin/actualites/afficher_tout_actulites_recents');
		// include('afficher_tout_actulites_recents');
		echo " else est affichee!!!";
	}

?>         