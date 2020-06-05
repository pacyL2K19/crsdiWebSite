
<?php 

//include('connexiondatabase.php');
$Article_max_afficher =2;
$PAGE_NEXT_NEXT;
$PAGE_PREV_PREV;

// Calcul des INTERVALLES
$ArtTOT_db = compterCompetances(); // Nombre d articles totales dans la base de donne from function.php
$pageTotales = ceil($ArtTOT_db/$Article_max_afficher);

function faireArray($valAVANT, $valACTUEL, $valSuivant){
  $tab = [];
  $tab [0] = $valAVANT;
  $tab [1] = $valACTUEL;
  $tab [2] = $valSuivant;
  return $tab;
}

function verifier_GET(){ // cette fonction gere l'URL recu : verifie parmis le _GET[] le quel est recu
  global $PAGE_NEXT_NEXT; // puis elle calcule la page 'AVANT' 'ACTUELLE'  ET 'SUIVANT' 
  global $Article_max_afficher;  // retourne un tableau
  global $PAGE_PREV_PREV;

  if(isset($_POST['pageSuivante']) AND !empty($_POST['pageSuivante']) AND $_POST['pageSuivante'] > 0 ){
      $pageNext = $_POST['pageSuivante'];
      $depart = ($pageNext-1) * $Article_max_afficher;
      $PAGE_NEXT_NEXT = $pageNext+1;
      $PAGE_PREV_PREV = $pageNext-1;
      return faireArray($PAGE_PREV_PREV,$pageNext, $PAGE_NEXT_NEXT);      
  }
  elseif(isset($_POST['pageAvant'])  AND !empty($_POST['pageAvant']) AND $_POST['pageAvant'] > 0 ){
    $pagePrev = $_POST['pageAvant'];
    $depart = ($pagePrev-1) * $Article_max_afficher;
    $PAGE_PREV_PREV = $pagePrev -1;
    $PAGE_NEXT_NEXT = $pagePrev +1;
    return faireArray($PAGE_PREV_PREV,$pagePrev, $PAGE_NEXT_NEXT); 

  }
  else{
      //si _GET ['next'] ou  _GET ['next'] sont indefinies alors on affecte ces valeurs ci dessous:
      $page =1;
       $depart = ($page-1) * $Article_max_afficher;
       $PAGE_NEXT_NEXT = $page+1;
      $PAGE_PREV_PREV = $page-1;
      return faireArray($PAGE_PREV_PREV,$page, $PAGE_NEXT_NEXT);    
  }
}




                          