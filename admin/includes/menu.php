
<section id="main">

<aside id="sidebar" class="sidebar c-overflow">
                <div class="s-profile">
                    <a href="#" data-ma-action="profile-menu-toggle">
                        <div class="sp-pic">
                            <img src="img/demo/profile-pics/1.jpg" alt="">
                        </div>

                        <div class="sp-info">
                            <?= $_SESSION['username']?>

                            <i class="zmdi zmdi-caret-down"></i>
                        </div>
                    </a>

                    <ul class="main-menu">
                        <li>
                            <a href="#"><i class="zmdi zmdi-input-antenna"></i> Mon compte</a>
                        </li>
                        <li>
                            <a href="#"><i class="zmdi zmdi-settings"></i> Parametre</a>
                        </li>
                        <li>
                            <a href="includes/deconnexion.php"><i class="zmdi zmdi-time-restore"></i> Deconnexion</a>
                        </li>
                    </ul>
                </div>

                <ul class="main-menu">
                    <li><a href="index.php"><i class="zmdi zmdi-home"></i>Tableau de bord</a></li>
                    <li class="sub-menu">
                        <a href="#" data-ma-action="submenu-toggle"><i class="zmdi zmdi-chart"></i> Articles</a>

                        <ul>
                            <li><a href="index.php?page=newpost">Nouveau article</a></li>
                            <li><a href="index.php?page=delpost">Supprimmer article</a></li>
                            <li><a href="index.php">Modifier un article</a></li>
                        </ul>
                    </li>

                     <li class="sub-menu">
                        <a href="#" data-ma-action="submenu-toggle"><i class="zmdi zmdi-layers"></i>Commentaires</a>

                        <ul>
                            <li><a href="index.php?page=delcomment">Supprimer commentaire</a></li>
                            <li><a href="#">Ajouter commentaire</a></li>
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="#" data-ma-action="submenu-toggle"><i class="zmdi zmdi-image"></i>Image du Jour</a>

                        <ul>
                            <li><a href="index.php?page=newimg">Nouvelle Image</a></li>
                            <li><a href="#">Supprimer une image</a></li>
                        </ul>
                    </li>
                     <li class="sub-menu">
                        <a href="#" data-ma-action="submenu-toggle"><i class="zmdi zmdi-view-list"></i>Sujet de recherche</a>

                        <ul>
                            <li><a href="index.php?page=newtopic">Nouvelle Sujet</a></li>
                            <li><a href="index.php?page=deltopics">Supprimer un sujet</a></li>
                        </ul>
                    </li>
                     <li class="sub-menu">
                        <a href="#" data-ma-action="submenu-toggle"><i class="zmdi zmdi-trending-up"></i>Projets</a>

                        <ul>
                            <li><a href="index.php?page=newproject">Nouveau</a></li>
                            <li><a href="index.php?page=delprojects">Supprimer</a></li>
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="#" data-ma-action="submenu-toggle"><i class="zmdi zmdi-trending-up"></i>Activites</a>

                        <ul>
                            <li><a href="index.php?page=newactivity">Nouvelle</a></li>
                            <li><a href="index.php?page=deleteactivity">Supprimer</a></li>
                        </ul>
                    </li>
                    <li><a href="index.php?page=labo"><i class="zmdi zmdi-widgets"></i>Laboratoires</a></li>
                     <li class="sub-menu">
                        <a href="#" data-ma-action="submenu-toggle"><i class="zmdi zmdi-swap-alt"></i>Users</a>

                        <ul>
                            <li><a href="#">Nouveau utilisateurs</a></li>
                            <li><a href="#">Modifier utilisateur</a></li>
                            <li><a href="#">Supprimer utilisateurs</a></li>
                        </ul>
                    </li>

                    <li><a href="#"><i class="zmdi zmdi-phone"></i> Contacter web Manager</a></li>
                    <li><a href="#"><i class="zmdi zmdi-help"></i> Aide</a></li>
                </ul>
            </aside>