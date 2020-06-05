<?php

    $activites = getActivity();
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
                            <h2>Liste des activites
                                <small>Veuiller choisir les activites à suprimer</small>
                            </h2>
                        </div>
                        <div> <?= $message; ?></div>

                        <div class="table-responsive">
                            <table id="data-table-basic" class="table table-striped">
                                <thead>
                                <tr>
                                    <th>Type</th>
                                    <th>Jour</th>
                                    <th>Mois</th>
                                    <th>Status</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th>Type</th>
                                    <th>Jour</th>
                                    <th>Mois</th>
                                    <th>Status</th>
                                    <th></th>
                                </tr>
  
                                </tfoot>
                                <tbody>
                                 <?php foreach ($activites as $activite ) {
                            echo "
                                <tr>
                                    <td>".$activite['type_activity']."</td>
                                    <td>".$activite['day']."</td>
                                    <td>".$activite['month']."</td>
                                    <td>".$activite['status']."</td>
                                    <td><a href='index.php?page=deleteactivity&amp;id=".$activite['id']."' class='btn btn-danger btn-icon'><i class='zmdi zmdi-delete'></i></a></td>
                                </tr> ";
                        } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </section>