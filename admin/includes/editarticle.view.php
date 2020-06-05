
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
                            <h2>Editer l'article
                                <small>Veuiller modifier les informations dont vous voulez voir sur votre article</small>
                            </h2>
                        </div>

                            <div class="card-body card-padding">

                            <form action="<?= $_SERVER['PHP_SELF'];?>?page=editpost&amp;id=<?= $article['id']; ?>" method="post" enctype="multipart/form-data" id="formulaire">
                            <div class="row">
                                <div class="col-sm-8">
                                <div class="form-group fg-float m-b-30">
                                    <div class="fg-line">
                                        <input type="text" class="form-control input-sm" id="autor" name="autor" value="<?= $article['autor'];?>" >
                                        <label class="fg-label">Auteur</label>
                                    </div>
                                </div>
                                <div class="form-group fg-float m-b-30">
                                    <div class="fg-line">
                                        <input type="text" class="form-control input-sm" name="title" id="title" value="<?= $article['title'];?>">
                                        <label class="fg-label">Titre de l'article</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                        <div class="fg-line">
                                            <div class="select">
                                            <label>Cellules</label>
                                                <select class="form-control" name="cellule" id="cellule">
                                                    <option value="<?= $article['categorie'];?>"><?= $article['categorie'];?></option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="hidden" name="id" value="<?=$id;?>" id="hidden"/>
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
                                                <input type="file" name="cover" id="cover" value="<?= $article['cover'];?>">
                                            </span>
                                            <a href="#" class="btn btn-danger fileinput-exists" data-dismiss="fileinput">Remove</a>
                                        </div>
                                     </div>
                                </div>
                            </div>
                                <div class="form-group fg-float">
                                    <p class="f-500 c-black m-b-20">Article</p>

                            <textarea id="article" class="html-editor" name="article" value="<?= $article['contenue'];?>"> <?= $article['contenue'];?> </textarea>
                                </div>

                                <button id="new" class="btn btn-info" type="submit">Modifier</button>
                                <button class="btn btn-link">Annuler</button>
                            </form>
                                </div>
                        </div>


                     </div>
        
                </div>
            </section>