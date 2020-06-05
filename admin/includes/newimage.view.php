<?php
	echo "Nouvelle image";
?>

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

                     <div class="card">
                            <div class="card-header ch-alt">
                                <h2>Charger l'image du jour
                                    <small>Donner une breve  description de notre image du jour</small>
                                </h2>
                            </div>

                            <div class="card-body card-padding">

                            <form action=" <?= $_SERVER['PHP_SELF'];?>?page=newimg" method="post" enctype="multipart/form-data" id="formulaire">

                            <div class="row">
                            	   <div class="col-sm-6">
                                    <p class="text-center">Selectioner une image</p>

                                     <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <div class="fileinput-preview thumbnail" data-trigger="fileinput"></div>
                                        <div>
                                            <span class="btn btn-info btn-file">
                                                <span class="fileinput-new">Select image</span>
                                                <span class="fileinput-exists">Change</span>
                                                <input type="file" name="image" id="image">
                                            </span>
                                            <a href="#" class="btn btn-danger fileinput-exists" data-dismiss="fileinput">Remove</a>
                                        </div>
                                     </div>
                                </div>

                                <div class="col-sm-6">
                       
                                <div class="form-group fg-float m-b-30">
                                	<p class="c-black f-500 m-t-20 m-b-20">Description de l'image</p>
                                    <div class="form-group">
                                		<div class="fg-line">
                                    		<textarea class="form-control auto-size" name="description" placeholder="Description..."></textarea>
                                </div>
                            </div>
                                </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <button id="new" class="btn btn-info btn-lg" type="submit">Publier</button>
                                <button class="btn btn-link btn-lg">Annuler</button>
                            </div>
                            </form>
                                </div>
                        </div>
	</div>
</section>