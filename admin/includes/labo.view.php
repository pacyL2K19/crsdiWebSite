<section id="content">
                <div class="container">
                    <div class="block-header">
                        <h2>Laboratoires CRSDI <?= $message; ?></h2>

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
                                        <a href="#">Parametres</a>
                                    </li>

                                </ul>
                            </li>
                        </ul>

                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h2>Laboratoire en live
                                <small>Gestion des informations des laboratoires de recherche.
                                </small>
                            </h2>
                            <div class="new">
                                <a data-toggle="modal" href="#modalNarrower1" class="btn btn-primary btn-lg waves-effect">Labo en Image</a>
                                <a data-toggle="modal" href="#modalNarrower2" class="btn btn-primary btn-lg waves-effect">Labo en Video</a>
                            </div>


                            <!-- Modal Small -->
                            <div class="modal fade" id="modalNarrower1" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-sm">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Nouveau Evenement : Photo</h4>
                                        </div>
                                        <form action="<?= $_SERVER['PHP_SELF'];?>?page=labo" method="post" enctype="multipart/form-data">
                                        <div class="modal-body">
                                            <p>Veuiller remplir le formulaire</p>

                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="zmdi zmdi-account"></i></span>
                                            <div class="fg-line">
                                                <input type="text" class="form-control" placeholder="Titre de l'evenement" name="titleimg">
                                            </div>
                                            </div>
                                             <br/>

                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="zmdi zmdi-local-phone"></i></span>
                                            <div class="fg-line">
                                                <input type="text" class="form-control" placeholder="Description de l'evenement" name="descimg">
                                            </div>
                                            </div>
                                            <br/>
                                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                                 <div class="fileinput-preview thumbnail" data-trigger="fileinput"></div>
                                                <div>
                                                    <span class="btn btn-info btn-file">
                                                        <span class="fileinput-new">Selectioner</span>
                                                        <span class="fileinput-exists">Changer</span>
                                                        <input type="file" name="img">
                                                    </span>
                                                    <a href="#" class="btn btn-danger fileinput-exists"
                                                       data-dismiss="fileinput">Supprimer</a>
                                                </div>
                                            </div>
                                            <br>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-link" name="laboimg">Enregistrer</button>
                                            <button type="button" class="btn btn-link" data-dismiss="modal">Fermer
                                            </button>
                                        </div>
                                    </form>
                                    </div>
                                </div>
                            </div>

                            <!-- Modal Small -->
                            <div class="modal fade" id="modalNarrower2" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-sm">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Nouveau Evenement : Video</h4>
                                        </div>
                                        <div class="modal-body">
                                            <p>Veuiller remplir le formulaire</p>

                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="zmdi zmdi-account"></i></span>
                                            <div class="fg-line">
                                                <input type="text" class="form-control" placeholder="Titre de l'evenement">
                                            </div>
                                            </div>
                                             <br/>

                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="zmdi zmdi-local-phone"></i></span>
                                            <div class="fg-line">
                                                <input type="text" class="form-control" placeholder="Description de l'evenement">
                                            </div>
                                            </div>
                                            <br/>
                                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                                 <div class="fileinput-preview thumbnail" data-trigger="fileinput"></div>
                                                <div>
                                                    <span class="btn btn-info btn-file">
                                                        <span class="fileinput-new">Selectioner</span>
                                                        <span class="fileinput-exists">Changer</span>
                                                        <input type="file" name="...">
                                                    </span>
                                                    <a href="#" class="btn btn-danger fileinput-exists"
                                                       data-dismiss="fileinput">Supprimer</a>
                                                </div>
                                            </div>
                                            <br>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-link">Enregistrer</button>
                                            <button type="button" class="btn btn-link" data-dismiss="modal">Fermer
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="card-body card-padding">
                            <p class="f-500 c-black m-b-5">Laboratoire en image</p>
                            <small>Voici l'evolution dans les unites de recherche d'une maniere breve
                            </small>

                            <br/>
                            <br/>

                            <div class="row">
                                <?php
                                    $laboImg = getLaboImg();
                                    foreach ($laboImg as $item) {
                                    ?>

                                <div class="col-sm-6 col-md-3">
                                    <div class="thumbnail">
                                        <img src="img/laboimg/<?= $item['image'];?>" alt="">
                                        <div class="caption">
                                            <h4><?= $item['title']; ?></h4>
                                            <p><?= $item['description']; ?></p>

                                            <div class="m-b-5">
                                                <a href="index.php?page=delimglabo&id=<?= $item['id']; ?>" class="btn btn-sm btn-danger" role="button">Supprimer</a>
                                                 <a href="index.php?page=editimglabo&id=<?= $item['id']; ?>" class="btn btn-sm btn-primary" role="button">Modifier</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <?php
                                    }
                                 ?>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h2>Labo en video
                                <small>Voici les manipulations de nos chercheurs en pleine manipulation</small>
                            </h2>
                        </div>

                        <div class="card-body card-padding">
                            <div class="row">
                                <div class="col-sm-6 m-b-20">
                                    <p class="f-500 c-black m-b-20">Description Description Description Description Description Description </p>

                                    <video style="height: 100%; width: 100%" poster="img/img-video/biogaz.jpg"
                                           controls="controls" preload="none"> <!-- id could be any according to you -->
                                        <source type="video/mp4" src="videos/1.mp4"/>
                                    </video>
                                </div>

                                <div class="col-sm-6 m-b-20">
                                    <p class="f-500 c-black m-b-20">Titre de l'evenement</p>

                                    <video style="height: 100%; width: 100%" poster="img/img-video/biogaz.jpg"
                                           controls="controls" preload="none"> <!-- id could be any according to you -->
                                        <source type="video/mp4" src="videos/1.mp4"/>
                                    </video>
                                </div>

                                <div class="col-sm-6 m-b-20">
                                    <p class="f-500 c-black m-b-20">Titre de l'evenement</p>

                                    <video style="height: 100%; width: 100%" poster="img/img-video/biogaz.jpg"
                                           controls="controls" preload="none"> <!-- id could be any according to you -->
                                        <source type="video/mp4" src="videos/1.mp4"/>
                                    </video>
                                </div>

                                <div class="col-sm-6 m-b-20">
                                    <p class="f-500 c-black m-b-20">Titre de l'evenement</p>
                                    <video style="height: 100%; width: 100%" id="multiCodec"
                                           poster="img/img-video/biogaz2.jpg" controls="controls" preload="none">
                                        <!-- id could be any according to you -->
                                        <!-- MP4 source must come first for iOS -->
                                        <source type="video/mp4" src="videos/2.mp4"/>
                                        <!-- WebM for Firefox 4 and Opera -->
                                        <source type="video/webm" src="media/big_buck_bunny.html"/>
                                        <!-- OGG for Firefox 3 -->
                                        <source type="video/ogg" src="media/big_buck_bunny-2.html"/>
                                        <!-- Fallback flash player for no-HTML5 browsers with JavaScript turned off -->
                                        <object type="application/x-shockwave-flash" data="media/flashmediaelement.swf"
                                                style="width: 100%; height: 100%;">
                                            <param name="movie" value="media/flashmediaelement.swf"/>
                                            <param name="flashvars"
                                                   value="controls=true&amp;poster=media/big_buck_bunny.jpg&amp;file=media/big_buck_bunny.mp4"/>
                                            <!-- Image fall back for non-HTML5 browser with JavaScript turned off and no Flash player installed -->
                                            <img src="img/img-video/biogaz.jpg" alt="Media"
                                                 title="No video playback capabilities"
                                                 style="width: 100%; height: 100%;">
                                        </object>
                                    </video>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>