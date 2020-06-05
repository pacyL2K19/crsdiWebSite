<?php

    $articles = getArticlesAdmin();
 ?>

<section id="content">
                <div class="container">
                    <div class="block-header">
                        <h2>Tableau de bord CRSDI</h2>

                        <ul class="actions">
                            <li>
                                <a href="#">
                                    <i class="zmdi zmdi-trending-up"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="zmdi zmdi-check-all"></i>
                                </a>
                            </li>
                            <li class="dropdown">
                                <a href="#" data-toggle="dropdown">
                                    <i class="zmdi zmdi-more-vert"></i>
                                </a>

                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li>
                                        <a href="#">Actualiser</a>
                                    </li>
                                    <li>
                                        <a href="#">Contenue</a>
                                    </li>
                                    <li>
                                        <a href="#">Parametre</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>

                    </div>


                    <div class="card">
                        <div class="card-header">
                            <h2>Liste des articles
                                <small>Veuiller choisir les articles à suprimer</small>
                            </h2>
                        </div>
                        <div> <?= $message; ?></div>

                        <div class="table-responsive">
                            <table id="data-table-basic" class="table table-striped">
                                <thead>
                                <tr>
                                    <th>Titre</th>
                                    <th>Auteur</th>
                                    <th>Cellules</th>
                                    <th>Comments</th>
                                    <th>Date de publication</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th>Titre</th>
                                    <th>Auteur</th>
                                    <th>Cellules</th>
                                    <th>Comments</th>
                                    <th>Date de publication</th>
                                    <th></th>
                                </tr>
  
                                </tfoot>
                                <tbody>
                                 <?php foreach ($articles as $article ) {
                            echo "
                                <tr>
                                    <td>".$article['title']."</td>
                                    <td>".$article['autor']."</td>
                                    <td>".$article['categorie']."</td>
                                    <td>0</td>
                                    <td>".$article['date_post']."</td>
                                    <td><a href='index.php?page=delpost&amp;id=".$article['id']."' class='btn btn-danger btn-icon'><i class='zmdi zmdi-delete'></i></a></td>
                                </tr> ";
                        } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </section>