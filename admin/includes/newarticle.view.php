
<section id="content">
                <div class="container">
                    <div class="block-header">
                        <h2>Tableau de bord CRSDI</h2>

                        <p class="message"></p>

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
                    <div class="col-sm-8">
                        <div class="card">
                            <div class="card-header ch-alt">
                                <h2>Nouveau Article
                                    <small>L'article doit est le plus concis que possible</small>
                                </h2>
                            </div>
                            <div> <?= $message; ?></div>

                            <div class="card-body card-padding">

                            <form action="<?= $_SERVER['PHP_SELF'];?>?page=newpost" method="post" enctype="multipart/form-data" id="formulaire">

                            <div class="row">
                                <div class="col-sm-8">
                                <div class="form-group fg-float m-b-30">
                                    <div class="fg-line">
                                        <input type="text" class="form-control input-sm" id="autor" name="autor" value="<?= $_SESSION['username'];?>" >
                                        <label class="fg-label">Auteur</label>
                                    </div>
                                </div>
                                <div class="form-group fg-float m-b-30">
                                    <div class="fg-line">
                                        <input type="text" class="form-control input-sm" name="title" id="title">
                                        <label class="fg-label">Titre de l'article</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                        <div class="fg-line">
                                            <div class="select">
                                            <label>Cellules</label>
                                                <select class="form-control" name="cellule" id="cellule">
                                                    <option value="Technologies">Technologies</option>
                                                    <option value="Sciences Exactes">Sciences Exactes</option>
                                                    <option value="Sciences Humaines">Sciences Humaines</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <p class="text-center">Image de couverture</p>

                                     <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <div class="fileinput-preview thumbnail" data-trigger="fileinput"></div>
                                        <div>
                                            <span class="btn btn-info btn-file">
                                                <span class="fileinput-new">Select image</span>
                                                <span class="fileinput-exists">Change</span>
                                                <input type="file" name="cover" id="cover">
                                            </span>
                                            <a href="#" class="btn btn-danger fileinput-exists" data-dismiss="fileinput">Remove</a>
                                        </div>
                                     </div>
                                </div>
                            </div>
                                <div class="form-group fg-float">
                                    <p class="f-500 c-black m-b-20">Article</p>

                            <textarea id="article" class="html-editor" name="article"> </textarea>
                                </div>

                                <button id="new" class="btn btn-info" type="submit">Publier</button>
                                <button class="btn btn-link">Annuler</button>
                            </form>
                                </div>
                        </div>

                    </div>

                    <div class="col-sm-4">
                        <div class="list-group lg-odd-black">
                            <div class="action-header clearfix">
                                <div class="ah-label hidden-xs">Articles recents</div>

                                <div class="ah-search">
                                    <input type="text" placeholder="Seach..." class="ahs-input">

                                    <i class="ahs-close" data-ma-action="action-header-close">&times;</i>
                                </div>

                                <ul class="actions">
                                    <li>
                                        <a href="#" data-ma-action="action-header-open">
                                            <i class="zmdi zmdi-search"></i>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#">
                                            <i class="zmdi zmdi-time"></i>
                                        </a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" data-toggle="dropdown" aria-expanded="true">
                                            <i class="zmdi zmdi-sort"></i>
                                        </a>

                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li>
                                                <a href="#">Last Modified</a>
                                            </li>
                                            <li>
                                                <a href="#">Last Edited</a>
                                            </li>
                                            <li>
                                                <a href="#">Name</a>
                                            </li>
                                            <li>
                                                <a href="#">Date</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="zmdi zmdi-info"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <?php
                                $articles = getArticles();

                                foreach ($articles as $article) {
                                    echo "
                              
                            <div class='list-group-item media'>
                                <div class='checkbox pull-left'>
                                    <label>
                                        <input type='checkbox' value=''>
                                        <i class='input-helper'></i>
                                    </label>
                                </div>
                                <div class='pull-left'>
                                    <img class='lgi-img' src='img/uploads/".$article['cover']."'>
                                </div>

                                <div class='pull-right'>
                                    <div class='actions dropdown'>
                                        <a href='#'' data-toggle='dropdown' aria-expanded='true'>
                                            <i class='zmdi zmdi-more-vert'></i>
                                        </a>

                                        <ul class='dropdown-menu dropdown-menu-right'>
                                            <li>
                                                <a href='index.php?page=editpost'>Modifier</a>
                                            </li>
                                            <li>
                                                <a href='#''>Supprimer</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class='media-body'>
                                    <div class='lgi-heading'>".$article['title']."</div>
                                    <small class='lgi-text'>".$article['contenue']."</small>

                                    <ul class='lgi-attrs'>
                                        <li> le :".$article['date_post']."</li>
                                        <li>Cellule:".$article['categorie']."</li>
                                    </ul>
                                </div>
                            </div>";
                      }
                            ?>

                        </div>
                    </div>

        
                </div>
            </section>