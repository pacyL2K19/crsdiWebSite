<!doctype html>
<html>
<head>
	<meta chartset="utf-8" />
	<link rel="stylesheet" href="admin/A_tp_progressBar/style.css">
	<title></title>
</head>
<body>
<?php
$const = 440;
function calculerPourcent($val){
	global $const;
	return ($const - ($const * $val) / 100);
}
	$compBar = 1;
	foreach ($donnees_Projet as $itemBar){
		if($compBar==1){$val_un = calculerPourcent( $itemBar['stade_realisation']);}	
		else if($compBar ==2){$val_deux = calculerPourcent($itemBar['stade_realisation']);}
		else if($compBar ==3){$val_trois = calculerPourcent($itemBar['stade_realisation']);}
		$compBar++;
	}
?>

<style type="text/css">	
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

	<div class="globalProgressBr">
	<!-- <h5>Mon progress Bar </h5> -->
	
	<div class="containerBar">
		<div class="row">
		<div class="cardBar col-12 col-md-4 col-lg-4">
			<div class="box">
				<div class="percent">
					<svg>
						<circle cx="70" cy="70" r="70"></circle>
						<circle cx="70" cy="70" r="70"></circle>
						<div class=number>
							<h2>90<span>%</span></h2>
						</div>
						<h2 class="text">Html colo cololo col</h2>
					</svg>
				</div>
			</div>
		</div>
		<div class="cardBar col-12 col-md-4 col-lg-4">
			<div class="box">
				<div class="percent">
					<svg>
						<circle cx="70" cy="70" r="70"></circle>
						<circle cx="70" cy="70" r="70"></circle>
						<div class=number>
							<h2>55<span>%</span></h2>
						</div>
						<h2 class="text">Css</h2>
					</svg>
				</div>
			</div>
		</div>
		<div class="cardBar col-12 col-md-4 col-lg-4">
			<div class="box">
				<div class="percent">
					<svg>
						<circle cx="70" cy="70" r="70"></circle>
						<circle cx="70" cy="70" r="70"></circle>
						<div class=number>
							<h2>15<span>%</span></h2>
						</div>
						<h2 class="text">JavaScript</h2>
					</svg>
				</div>
			</div>
		</div>
	</div>
	</div>
</div>
</body>
</html>