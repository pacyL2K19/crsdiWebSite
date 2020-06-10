
<?php
//cet module affiche les 3 progress bar 
// ++++++++++++++++++++++++++++++++++++
$const = 440;
function calculerPourcent($val){ //cette fonction calcule le pourcentage qui doit etre afficher
	global $const;
	return ($const - ($const * $val) / 100);
}
	$compBar = 1;
	foreach ($donnees_Projet as $itemBar){ //ceci vient de la base de donne 
											// du module 'getProjetRecents'
		if($compBar==1){$val_un = calculerPourcent( $itemBar['stade_realisation']);}	
		else if($compBar ==2){$val_deux = calculerPourcent($itemBar['stade_realisation']);}
		else if($compBar ==3){$val_trois = calculerPourcent($itemBar['stade_realisation']);}
		$compBar++;
	}
?>

<style type="text/css">		
		/*on formate le pourcentage en fonction des donnees venues from le db*/

	.cardBar:nth-child(1) svg circle:nth-child(2){
			stroke-dashoffset: calc(<?= $val_un;?>);
			stroke: #00ff43;
		}
	.cardBar:nth-child(2) svg circle:nth-child(2){
			stroke-dashoffset: calc(<?= $val_deux;?>);
			stroke: #00a1ff;	
		}
	.cardBar:nth-child(3) svg circle:nth-child(2){
			stroke-dashoffset: calc(<?= $val_trois;?>);
			stroke: #ff04f7;	
		}
</style>

<div class="post-content">
    <div id="stade_titre" class="title" style="margin-bottom:10px;"> 
        <h5>Stade de realisation</h5>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod  
    </div>
    <div class="globalProgressBr single-blog-post post-style-4 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.4s">
	<!-- <h5>Mon progress Bar </h5> -->
		<div class="containerBar">
				<div class="row">
					<?php
						foreach ($donnees_Projet as $itemBar){					
							$stadePourcent = $itemBar['stade_realisation'];
							$titre = $itemBar['project_title'];
							?>
							<div class="cardBar col-12 col-md-4 col-lg-4">
								<div class="box">
									<div class="percent">
										<svg>
											<circle cx="70" cy="70" r="70"></circle>
											<circle cx="70" cy="70" r="70"></circle>
											<div class=number>
												<h2><?= $stadePourcent; ?><span>%</span></h2>
											</div>
											<h2 class="text"><?= $titre; ?></h2> 
										</svg>
									</div>
								</div>
							</div>
							<?php
						}
							?>
				</div>
		</div>
	</div>
</div>