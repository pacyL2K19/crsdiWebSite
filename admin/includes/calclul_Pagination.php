<?php
function calculPage($nbArti){ // FONCTION PERMETTANT DE F CALCULER LE NOMBRE DE PAGE <<< PAGINATION
	$diviseur = 4;
	if($nbArti%$diviseur == 0){
		return $nbArti / $diviseur;
	}
	else{
		return (int)(($nbArti / $diviseur) +1);
	}
}
?>