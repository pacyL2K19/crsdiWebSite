
<?php

//  Cette fonction verifeir si les boutons de pagination ont envoyer quelque chose
// Sinon alors on attribue a la page innitiale la valeur 1' ,$nbElementMaxshow : cest le nombre max qui 
//limite les nombres de donnees que la basee de db doit retourner 
function verifierPOST($nbElementMaxshow){ 
  if(isset($_POST['pageSuivante']) AND !empty($_POST['pageSuivante']) AND $_POST['pageSuivante'] > 0 ){
    return CalculerFaireArray($_POST['pageSuivante'], $nbElementMaxshow);
  }
   elseif(isset($_POST['pageAvant'])  AND !empty($_POST['pageAvant']) AND $_POST['pageAvant'] > 0 ){
    return CalculerFaireArray($_POST['pageAvant'], $nbElementMaxshow);
    }
    else{
      $pageInitial = 1;
      return CalculerFaireArray($pageInitial, $nbElementMaxshow); 
    }
}
function CalculerFaireArray($page,$Max_element){ // $Max_element cest le nombre max qui limite les nombres de donnees 
  $depart = ($page-1) * $Max_element;               // que la basee de db doit retourner 
  $PAGE_NEXT_NEXT = $page+1;
  $PAGE_PREV_PREV = $page-1;
  return faireArray($PAGE_PREV_PREV,$depart, $PAGE_NEXT_NEXT);   
}
function faireArray($valAVANT, $valACTUEL, $valSuivant){
  $tab = [];
  $tab ['pageAvant'] = $valAVANT;
  $tab ['pageActuelle'] = $valACTUEL;
  $tab ['pageSuivante'] = $valSuivant;
  return $tab;
}
?>


                          