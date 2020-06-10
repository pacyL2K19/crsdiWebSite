<section id="content">
	<div class="container">
		<div class="block-header">
            <h2>Tableau de bord CRSDI <?= $message; ?> </h2>
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
                                <h2>Planification d'une activite
                                    <small>Soyez concise dans la description</small>
                                </h2>
                            </div>

                            <div class="card-body card-padding">

                            <form action="<?= $_SERVER['PHP_SELF'];?>?page=newactivity" method="post" id="formulaire">

                            <div class="row">
                            <div class="col-sm-6">
                                <p class="f-500 m-b-15 c-black">Type d'activite</p>
                                    <select class="selectpicker" name="type_activity">
                                        <option value="Administrative">Administrative</option>
                                        <option value="Recherche">Recherche</option>
                                        <option value="Entrepreuneriat">Entrepreuneriat</option>
                                    </select>
                                </div>
                                <div class="col-sm-3">
                                    <p class="f-500 m-b-15 c-black">Jour</p>
                                    <select class="selectpicker" name="day">
                                        <option value="01">01</option>
                                        <option value="02">02</option>
                                        <option value="03">03</option>
                                        <option value="04">04</option>
                                        <option value="05">05</option>
                                        <option value="06">06</option>
                                        <option value="07">07</option>
                                        <option value="08">08</option>
                                        <option value="09">09</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                        <option value="13">13</option>
                                        <option value="14">14</option>
                                        <option value="15">15</option>
                                        <option value="16">16</option>
                                        <option value="17">17</option>
                                        <option value="18">18</option>
                                        <option value="19">19</option>
                                        <option value="20">20</option>
                                        <option value="21">21</option>
                                        <option value="22">22</option>
                                        <option value="23">23</option>
                                        <option value="24">24</option>
                                        <option value="25">25</option>
                                        <option value="26">26</option>
                                        <option value="27">27</option>
                                        <option value="28">28</option>
                                        <option value="29">29</option>
                                        <option value="30">30</option>
                                        <option value="31">31</option>
                                    </select>
                                </div>
                                <div class="col-sm-3">
                                    <p class="f-500 m-b-15 c-black">Mois</p>
                                    <select class="selectpicker" data-live-search="true" name="month">
                                        <option value="Janvier">Janvier</option>
                                        <option value="Fevrier">Fevrier</option>
                                        <option value="Mars">Mars</option>
                                        <option value="Avril">Avril</option>
                                        <option value="Mai">Mai</option>
                                        <option value="Juin">Juin</option>
                                        <option value="Juillet">Juillet</option>
                                        <option value="Aout">Aout</option>
                                        <option value="Septembre">Septembre</option>
                                        <option value="Octobre">Octobre</option>
                                        <option value="Novembre">Novembre</option>
                                        <option value="Decembre">Decembre</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                
                            <div class="col-sm-6">
                                <div class="form-group fg-float m-b-30">
                                     <h5 class="c-black f-500 m-t-20 m-b-20">Status</h5>
                                     <div class="form-group">
                                         <input type="text" name="status" class="">
                                     </div>

                                </div>
                             </div>

                             <div class="col-sm-6">
                                <div class="form-group fg-float m-b-30">
                                    <h5 class="c-black f-500 m-t-20 m-b-20">Description de l'activite</h5>
                                    <div class="form-group">
                                        <div class="fg-line">
                                        <textarea id="article" class="html-editor" name="description_activity"> </textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                            </div>
                            
                            <div class="text-center">
                                <button id="new" class="btn btn-info btn-lg" type="submit">Annoncer</button>
                                <button class="btn btn-link btn-lg">Annuler</button>
                            </div>
                            </form>
                                </div>
                        </div>
	</div>
</section>