<div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-ride="carousel">
	<ol class="carousel-indicators">
		<li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li> 
	`   <li data-target="#carouselExampleCaptions" data-slide-to="1"></li> 
		<li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
		<li data-target="#carouselExampleCaptions" data-slide-to="3"></li> 
	</ol>
 	<div class="carousel-inner" style="box-shadow:2px 3px 2px black;">
 		<?php

 		$debutfonctionalite = 0;
 		$nbFonctionalites = 6;
 		$Ft =0;
 		$tab = getFonctionalites($debutfonctionalite, $nbFonctionalites);
	 foreach ($tab as $tab) {
	 	if($Ft == 0){
	 		echo'<div class="carousel-item active">';
	 		// echo($Ft.' ');
	 	}
	 	else{
	 		echo'<div class="carousel-item">';
	 	}
	 	$Ft ++;
	 	if(!empty($tab['lien'])){
	 		$lien = $tab['lien'];
	 		$lienString = '<a href="'.$lien.'" class="post"> Voir plus</a>';
		}
	 		else{$lienString = '';}
	 	// echo($tab['cover'].'<br />');
 		?>
  		<!-- <div class="carousel-item active"> -->
   			<img src="admin/img/fonctionalites/<?=$tab['cover'];?>" class="d-block w-100" alt="..."> 
	   		<div class="carousel-caption d-none d-md-block">
	    		<h5><?=$tab['title'];?></h5> 
	    		<p style="border-left:5px red;color: blue ;"><span style="" > CRDI</span>
	    			<?=$tab['contenu'];?></p>
	    			<?=$lienString?> 
	    			<div class="d-flex justify-content-end text-muted">
                        <a href='#' class='post-date'><?=$tab['date_post']?> </a>
                    </div>
	     	</div> 
 		</div>
 		<?php
 	}
 	?>
 
 	<a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev"> 
 		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
 		 <span class="sr-only">Previous</span> </a>
 		  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next"> 
 		  	<span class="carousel-control-next-icon" aria-hidden="true"></span> 
 		  	<span class="sr-only">Next</span>
 		  	 </a>
</div>
</div>